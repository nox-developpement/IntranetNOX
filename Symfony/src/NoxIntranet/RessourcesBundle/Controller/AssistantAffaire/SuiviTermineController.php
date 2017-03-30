<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\RessourcesBundle\Controller\AssistantAffaire;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;

class SuiviTermineController extends Controller {

    // Remplace les caractères accentué d'une chaine par leur version sans accent.
    public function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

    public function consulterSuiviTermineAction(Request $request, $agence) {
        $em = $this->getDoctrine()->getManager();

        $suivis = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findBy(array('statut' => 'Cloturé'), array('nom' => 'ASC'));

        $agences['Toutes'] = 'Toutes';

        foreach ($suivis as $suivi) {
            if (!in_array($suivi->getAgence(), $agences)) {
                $agences[$suivi->getAgence()] = $suivi->getAgence();
            }
        }

        $formAgence = $this->get('form.factory')->createNamedBuilder('formSelectionAgence', 'form', $agences)
                ->add('Agences', ChoiceType::class, array(
                    'choices' => $agences,
                    'data' => $agence
                ))
                ->getForm();

        if ($agence != "Toutes") {


            $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Suivis',
                        'query_builder' => function (EntityRepository $er) use ($agence) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.agence = '" . $agence . "' AND u.statut = 'Cloturé'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Consulter', 'submit')
                    ->getForm();
        } else {
            $formSelectionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionSuivi', 'form', $suivis)
                    ->add('Suivi', EntityType::class, array(
                        'class' => 'NoxIntranetRessourcesBundle:Suivis',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.statut = 'Cloturé'")
                                    ->orderBy('u.nom', 'ASC');
                        },
                        'choice_label' => 'Nom',
                    ))
                    ->add('Consulter', 'submit')
                    ->getForm();
        }

        if ($request->request->has('formSelectionSuivi')) {

            $formSelectionSuivi->handleRequest($request);

            if ($formSelectionSuivi->isValid()) {

                if ($formSelectionSuivi->get('Consulter')->isClicked()) {

                    $IdSuivi = $formSelectionSuivi['Suivi']->getData()->getId();

                    $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

                    return $this->redirectToRoute('nox_intranet_assistant_affaire_consultation', array('IdSuivi' => $IdSuivi));
                }
            }
        }

        if ($request->request->has('formSelectionAgence')) {

            $formAgence->handleRequest($request);

            if ($formAgence->isValid()) {

                return $this->redirectToRoute('nox_intranet_assistant_affaire_parcour_suivi_termine', array('agence' => $formAgence['Agences']->getData()));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\SuiviTermine:assistantaffairetermine.html.twig', array('formSelectionSuivi' => $formSelectionSuivi->createView(), 'formSelectionAgence' => $formAgence->createView()));
    }

    public function suiviTermineAction(Request $request, $IdSuivi, $version) {

        // On récupére la racine du serveur.
        $root = $this->get('kernel')->getRootDir() . '\..';

        // Génération de deux entityManagers distinct
        $em = $this->getDoctrine()->getManager();
        $emChampDonnees = $this->getDoctrine()->getManager();

        // On récupére le suivi en cours et le client.
        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);
        $client = $em->getRepository('NoxIntranetRessourcesBundle:AA_Client')->findOneByN_Client($suivi->getNoClient());

        // Récupére la/les adresse(s) du client et génére le code html de la pop-up des adresses client. 
        $clientAdr = $em->getRepository('NoxIntranetRessourcesBundle:AA_Client_Adr')->findByN_Client($suivi->getNoClient());
        $clientAdrHtml = "<html style='overflow: auto;'>";
        $clientAdrHtml .= "<head>";
        $clientAdrHtml .= "<title>Adresse(s) du client</title>";
        $clientAdrHtml .= "<style>";
        $clientAdrHtml .= "label { display: block; width: 30%; float: left; text-align: right; margin-bottom: 1%; margin-right: 1%; }";
        $clientAdrHtml .= "input { width: 40%; margin-bottom: 1%; }";
        $clientAdrHtml .= "</style>";
        $clientAdrHtml .= "</head>";
        $clientAdrHtml .= "<body style='overflow: auto; height: 100%; width: 100%; margin: 0;'>";
        // Si il existe des adresses associées au client.
        if (!empty($clientAdr)) {
            // Pour chaques adresses on récupére et on affiche les données.
            foreach ($clientAdr as $key => $adr) {
                $clientAdrHtml .= "<fieldset style='border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6); width: 80%; margin: auto; margin-top: 1%; margin-bottom: 1%;'>";
                $clientAdrHtml .= addslashes("<legend>" . str_replace(array("\r\n", "\r", "\n"), "", $client->getNomClient()) . " - Adresse " . strval($key + 1) . "</legend>");
                $clientAdrHtml .= addslashes("<label for='tel'>Téléphone: </label><input type='text' name='tel' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getTel())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='fax'>Fax: </label><input type='text' name='fax' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getFax())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='email'>Email: </label><input type='text' name='email' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getEmail())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='nomville'>Ville: </label><input type='text' name='nomville' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getNomVille())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='nompays'>Pays: </label><input type='text' name='nompays' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getNomPays())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='adresse'>Adresse: </label><input type='text' name='adresse' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getAdresse1())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='adresse2'></label><input type='text' name='adresse2' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getAdresse2())) . "\"><br />");
                $clientAdrHtml .= addslashes("<label for='adresse3'></label><input type='text' name='adresse3' disabled value=\"" . str_replace(array("\r\n", "\r", "\n"), "", preg_replace('/(^NULL$)/', "", $adr->getAdresse3())) . "\">");
                $clientAdrHtml .= "</fieldset>";
            }
        }
        // Si il n'existe pas d'adresses associées au client.
        else {
            $clientAdrHtml .= "<fieldset style='border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6); width: 80%; margin: auto; margin-top: 1%; margin-bottom: 1%;'>";
            $clientAdrHtml .= "<p style='text-align: center;'>Il n'y a aucune données d'adresse pour ce client.";
            $clientAdrHtml .= "</fieldset>";
        }
        $clientAdrHtml .= "</body>";
        $clientAdrHtml .= "</html>";

        // On récupere les interlocuteurs associés au client et l'interlocuteur actuel.
        $interlocuteurs = $em->getRepository('NoxIntranetRessourcesBundle:AA_Contact')->findByNClient($suivi->getNoClient());
        $interlocuteurActuel = $em->getRepository('NoxIntranetRessourcesBundle:AA_Contact')->findOneByN_Contact($suivi->getNoInterlocuteur());

        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($suivi->getIdModele());
        $liaisons = $em->getRepository('NoxIntranetAdministrationBundle:LiaisonSuiviChamp')->findByIdSuivi($modele->getId());

        $champsViews = array();

        // Génération du formulaire de séléction de la version du suivi
        if ($version !== '') {
            $IdDonneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));
        } else {
            $IdDonneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));
        }

        $formSelectionVersionSuivi = $this->get('form.factory')->createNamedBuilder('formSelectionVersionSuivi', 'form')
                ->add('version', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:DonneesSuivi',
                    'query_builder' => function (EntityRepository $er) use ($IdSuivi) {
                        return $er->createQueryBuilder('u')
                                ->where("u.idSuivi = '" . $IdSuivi . "'")
                                ->orderBy('u.version', 'DESC');
                    },
                    'choice_label' => function($value) {
                        return "v" . $value->getVersion();
                    },
                    'data' => $IdDonneesSuivi
                ))
                ->getForm();
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Génération du formulaire de complétion du suivi
        $formBuilder = $this->get('form.factory')->createNamedBuilder('formDonneesSuivi', 'form');
        foreach ($liaisons as $liaison) {
            $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($liaison->getIdChamp());

            if ($champ->getType() === 'Texte') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), TextType::class, array(
                    'attr' => array(
                        'class' => 'champFormulaireRemplissageSuivi'
                    )
                ));
            } else if ($champ->getType() === 'Nombre') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), NumberType::class, array(
                    'attr' => array(
                        'pattern' => '[0-9]',
                        'class' => 'champFormulaireRemplissageSuivi'
                    )
                ));
            } else if ($champ->getType() === 'Données') {
                $champsViews[$champ->getNom()]['Nom'] = $champ->getNom();
                $champsViews[$champ->getNom()]['Type'] = $champ->getType();
                $champsViews[$champ->getNom()]['Champ'] = $this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom()));
                $formBuilder->add($this->wd_remove_accents(preg_replace('/\s+/', '', $champ->getNom())), EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                    'query_builder' => function (EntityRepository $er) use ($champ) {
                        return $er->createQueryBuilder('u')
                                        ->where("u.idFormulaire = '" . $champ->getId() . "'")
                                        ->orderBy('u.donnee', 'ASC');
                    },
                    'choice_label' => 'Donnee',
                    'attr' => array(
                        'class' => 'champFormulaireRemplissageSuivi'
                    )
                ));
            }
        }
        $formBuilder->add('Generate', SubmitType::class);
        $formSuivi = $formBuilder->getForm();

        // Si une version du suivi est séléctionnée on récupére ses données de suivi.
        if ($version !== '') {

            $donneeSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi, 'version' => $version));

            $donneesVersion = $donneeSuivi->getDonnees();

            foreach ($donneesVersion as $key => $value) {
                if ($donneesVersion[$key]['Type'] === 'entity') {
                    $emChampDonnees->persist($value['Data']);
                    $formSuivi->get($key)->setData($value['Data']);
                    $emChampDonnees->remove($value['Data']);
                } else {
                    $formSuivi->get($key)->setData($value['Data']);
                }
            }
        } else {

            $donneeSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneBy(array('idSuivi' => $IdSuivi), array('version' => 'DESC'));

            $donneesVersion = $donneeSuivi->getDonnees();

            $version = $donneeSuivi->getVersion();

            foreach ($donneesVersion as $key => $value) {
                if ($donneesVersion[$key]['Type'] === 'entity') {
                    $emChampDonnees->persist($value['Data']);
                    $formSuivi->get($key)->setData($value['Data']);
                    $emChampDonnees->remove($value['Data']);
                } else {
                    $formSuivi->get($key)->setData($value['Data']);
                }
            }
        }

        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de séléction de la version du suivi
        if ($request->request->has('formSelectionVersionSuivi')) {
            $formSelectionVersionSuivi->handleRequest($request);

            if ($formSelectionVersionSuivi->isValid()) {

                if ($formSelectionVersionSuivi['version']->getData() !== null) {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_consultation', array('IdSuivi' => $IdSuivi, 'version' => $formSelectionVersionSuivi['version']->getData()->getVersion()));
                } else {
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_consultation', array('IdSuivi' => $IdSuivi));
                }
            }
        }
        ////////////////////////////////////////////////////////////////////////////////////////////////
        // Traitement du formulaire de complétion du suivi
        if ($request->request->has('formDonneesSuivi')) {
            $formSuivi->handleRequest($request);

            if ($formSuivi->isValid()) {

                if ($formSuivi->get('Generate')->isClicked()) {

                    include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

                    $objReader = new \PHPExcel_Reader_Excel2007();
                    $objPHPExcel = $objReader->load($modele->getChemin() . "/" . pathinfo($modele->getChemin(), PATHINFO_FILENAME) . '.xlsx');
                    $sheet = $objPHPExcel->getSheet(0);

                    $donneesSuivi = $em->getRepository('NoxIntranetRessourcesBundle:DonneesSuivi')->findOneByIdSuivi($IdSuivi)->getDonnees();

                    foreach ($donneesSuivi as $donne) {
                        if ($donne['Type'] === 'entity') {
                            $sheet->setCellValue($donne['Position'], $donne['Data']->getDonnee());
                        } else {
                            $sheet->setCellValue($donne['Position'], $donne['Data']);
                        }
                    }

                    $writer = new \PHPExcel_Writer_Excel2007($objPHPExcel);

                    $fichierVersion = $suivi->getNom() . "_v" . $version;

                    $fichier = $fichierVersion . ".xlsx";

                    $chemin = $root . '\web\ExcelGenerate\\';

                    $writer->save($chemin . $fichier);

                    $response = new Response();
                    $response->setContent(file_get_contents($chemin . $fichier));
                    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
                    $response->headers->set('Content-disposition', 'filename=' . $fichier);

                    unlink($chemin . $fichier);

                    return $response;
                }
            }
        }
        //////////////////////////////////////////////////////////////////////////////////////////////// 

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\SuiviTermine:assistantaffaireconsultation.html.twig', array(
                    'formDonneesSuivi' => $formSuivi->createView(), 'champsViews' => $champsViews, 'suivi' => $suivi, 'client' => $client,
                    'formSelectionVersionSuivi' => $formSelectionVersionSuivi->createView(), 'interlocuteurs' => $interlocuteurs,
                    'interlocuteurActuel' => $interlocuteurActuel, 'clientAdr' => $clientAdrHtml
        ));
    }

}
