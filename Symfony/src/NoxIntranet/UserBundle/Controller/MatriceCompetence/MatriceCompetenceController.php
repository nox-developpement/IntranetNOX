<?php

namespace NoxIntranet\UserBundle\Controller\MatriceCompetence;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\UserBundle\Entity\MatriceCompetence;
use PHPExcel_Reader_Excel2007;
use Symfony\Component\HttpFoundation\Response;

class MatriceCompetenceController extends Controller {

    /**
     * 
     * Formulaire permettant d'indiquer les compétences professionelles du collaborateur.
     * 
     * @param Request $request Requête contenant les données du formulaires.
     * @return View
     */
    public function competenceFormAction(Request $request) {
        // Entité du collaborateur actuel.
        $currentUser = $this->get('security.context')->getToken()->getUser();

        // On récupère ça hiérarchie.
        $em = $this->getDoctrine()->getManager();
        $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($currentUser->getUsername());

        // Si la hiérarchie du collaborateur n'est pas défini on le redirige vers l'accueil.
        if (empty($userHierarchy)) {
            $this->get('session')->getFlashBag()->add('notice', "Erreur d'acquisition de la hiérarchie, veuillez contacter le support.");
            $this->redirectToRoute('nox_intranet_accueil');
        }

        // On récupére la matrice de compétence associé au collaborateur ou on en crée une si elle n'existe pas.
        if (!empty($currentUser->getMatriceCompetence())) {
            $matrice_competence = $currentUser->getMatriceCompetence();
        } else {
            $matrice_competence = new MatriceCompetence();
            $matrice_competence->setUser($currentUser);
        }

        // Chemin du fichier de liste des compétences.
        $competenceListFile = $this->get('kernel')->getRootDir() . '/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence/competencesList.xml';

        // Fichier de compétence sous forme de chaîne nettoyer des charactères interdits.
        $competenceListString = str_replace('&', '&amp;', file_get_contents($competenceListFile));

        // Objet XML des compétences.
        $competences = simplexml_load_string($competenceListString);

        // On récupère les compétences sous forme de tableau.
        $competencesArray = array();
        foreach ($competences->categorie as $categorie) {
            //var_dump((string) $categorie->categorie_name);
            $competencesArray[(string) $categorie->categorie_name] = array();
            foreach ($categorie->competence as $competence) {
                $competencesArray[(string) $categorie->categorie_name][(string) $competence] = (string) $competence;
            }
        }

        // Génération du formulaire.
        $formCompetenceBuilder = $this->createFormBuilder($matrice_competence);
        $formCompetenceBuilder
                ->add('Societe', TextType::class, array(
                    'read_only' => true,
                    'data' => $userHierarchy->getSociete(),
                    'label' => "SOCIETE",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Etablissement', TextType::class, array(
                    'read_only' => true,
                    'data' => $userHierarchy->getEtablissement(),
                    'label' => "ETABLISSEMENT",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Nom', TextType::class, array(
                    'read_only' => true,
                    'data' => $currentUser->getLastname(),
                    'label' => "NOM",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Prenom', TextType::class, array(
                    'read_only' => true,
                    'data' => $currentUser->getFirstname(),
                    'label' => "PRENOM",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Date_Naissance', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'label' => "DATE DE NAISSANCE",
                    'years' => range(date('Y') - 100, date('Y')),
                    'attr' => array(
                        'class' => "datepicker",
                        'style' => "display: inline-block;"
                    ),
                ))
                ->add('Date_Anciennete', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'label' => 'DATE ANCIENNETE',
                    'years' => range(date('Y') - 100, date('Y')),
                    'attr' => array(
                        'class' => "datepicker",
                        'style' => "display: inline-block;"
                    ),
                ))
                ->add('Statut', TextType::class, array(
                    'label' => "STATUT",
                    'attr' => array(
                        'style' => "width: 100%;"
                    ),
                ))
                ->add('Poste', TextType::class, array(
                    'label' => 'POSTE',
                    'attr' => array(
                        'style' => "width: 100%;"
                    ),
                ))
                ->add('Competence_Principale', ChoiceType::class, array(
                    'choices' => $competencesArray,
                    'placeholder' => 'Séléctionnez une compétence...',
                    'label' => 'COMPETENCE PRINCIPALE'
                ))
                ->add('Competences_Secondaires', CollectionType::class, array(
                    'entry_type' => ChoiceType::class,
                    'entry_options' => array(
                        'choices' => $competencesArray,
                        'placeholder' => 'Séléctionnez une compétence...',
                        'label' => "COMPETENCE SECONDAIRE"
                    ),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'label' => false,
                    'attr' => array(
                        'style' => "display: none;"
                    )
                ))
                ->add('Sauvegarder', SubmitType::class, array(
                    'label' => "Sauvegarder",
                    'attr' => array(
                        'style' => "padding: 0.8em;",
                        'class' => "boutonFormulaire"
                    )
                ))
        ;
        $formCompetence = $formCompetenceBuilder->getForm();

        // Traitement du formaulaire.
        $formCompetence->handleRequest($request);
        if ($formCompetence->isSubmitted() && $formCompetence->isValid()) {
            // On indique que la matrice n'est plus à jour.
            $matrice_competence->setIsUpdated(false);

            // On sauvegarde les modifications en base de données.
            $em->persist($matrice_competence);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_developpement_professionnel_matrice_competence_formulaire');
        }

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:formulaireMatriceCompetence.html.twig', array('formCompetence' => $formCompetence->createView()));
    }

    // Génère et télécharge un fichier Excel de matrice de compétence.
    public function generateMatriceCompetenceExcelFileAction() {
        $matrice_competence_root = $this->get('kernel')->getRootDir() . "/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence";

        $em = $this->getDoctrine()->getManager();

        // On récupére les matrices.
        $matrice_request = $em->createQueryBuilder()
                ->select('u')
                ->from('NoxIntranetUserBundle:MatriceCompetence', 'u')
                ->addOrderBy('u.nom')
                ->addOrderBy('u.prenom')
                ->getQuery();
        $matrice_to_update = $matrice_request->getResult();

        // Initialisation de l'objet Excel du fichier de matrice.
        $objReader = new PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($matrice_competence_root . "/Matrice_Competence_Model.xlsx");
        $sheet = $objPHPExcel->getActiveSheet();

        // Lettres des colonnes de compétence.
        $letters = array();
        $letter = 'I';
        while ($letter !== 'DA') {
            $letters[] = $letter++;
        }

        // Tableau de liaison donnée/colonne dans le fichier de matrice.
        $columns = array(
            'Societe' => 'A',
            'Etablissement' => 'B',
            'Nom' => 'C',
            'Prenom' => 'D',
            'Date_Naissance' => 'E',
            'Date_Anciennete' => 'F',
            'Statut' => 'G',
            'Poste' => 'H',
            'Competences' => $letters
        );

        // Si il n'y a pas de matrice à mettre à jours...
        if (empty($matrice_to_update)) {
            return; // On quitte la fonction.
        }

        $rowIndex = 4;
        foreach ($matrice_to_update as $matrice) {
            $sheet->getStyle($columns['Date_Naissance'])->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
            $sheet->getStyle($columns['Date_Anciennete'])->getNumberFormat()->setFormatCode(\PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);

            // On remplace les informations du collaborateur.
            $sheet->setCellValue($columns['Societe'] . $rowIndex, $matrice->getSociete());
            $sheet->setCellValue($columns['Etablissement'] . $rowIndex, $matrice->getEtablissement());
            $sheet->setCellValue($columns['Nom'] . $rowIndex, $matrice->getNom());
            $sheet->setCellValue($columns['Prenom'] . $rowIndex, $matrice->getPrenom());
            $sheet->setCellValue($columns['Date_Naissance'] . $rowIndex, \PHPExcel_Shared_Date::PHPToExcel($matrice->getDateNaissance()));
            $sheet->setCellValue($columns['Date_Anciennete'] . $rowIndex, \PHPExcel_Shared_Date::PHPToExcel($matrice->getDateAnciennete()));
            $sheet->setCellValue($columns['Statut'] . $rowIndex, $matrice->getStatut());
            $sheet->setCellValue($columns['Poste'] . $rowIndex, $matrice->getPoste());

            // Pour chaques colonne de compétence du tableau...
            foreach ($columns['Competences'] as $column) {
                // On récupère le nom de la compétence...
                $competence = $sheet->getCell($column . "3")->getValue();

                // Si la compétence est égale à la compétence principale du collaborateur...
                if ($competence === $matrice->getCompetencePrincipale()) {
                    $sheet->getCell($column . $rowIndex)->setValue("1"); // On ajoute un "1" dans la cellule.
                } else if (in_array($competence, $matrice->getCompetencesSecondaires())) {
                    $sheet->getCell($column . $rowIndex)->setValue("*"); // On ajoute un "*" dans la cellule.
                } else {
                    $sheet->getCell($column . $rowIndex)->setValue(""); // On vide la cellule.
                }
            }

            $sheet->getStyle($columns['Societe'] . $rowIndex . ":" . $columns['Poste'] . $rowIndex)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

            $rowIndex++;
        }

        $columnLetter = 'A';
        while ($columnLetter !== 'I') {
            //var_dump($columnLetter);
            $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
            $columnLetter++;
        }

        // On fige les en-têtes de la feuille Excel pour une meilleur lisibilité.
        $sheet->freezePane('I4');

        // Ecriture et sauvegarde du fichier Excel.
        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save($matrice_competence_root . "/Matrice_Competence_Generated.xlsx");

        // Nettoyage des variables.
        unset($objPHPExcel);
        unset($objWriter);

        $file_content = file_get_contents($matrice_competence_root . "/Matrice_Competence_Generated.xlsx");

        unlink($matrice_competence_root . "/Matrice_Competence_Generated.xlsx");

        $response = new Response();
        $response->setContent($file_content);
        $response->headers->set('Content-Type', 'application/force-download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', "filename='Matrice_Compétences.xlsx'");

        return $response;

        //return new Response('test');
    }

    public function matriceCompetenceTableAction() {
        $em = $this->getDoctrine()->getManager();
        $matrices_competences = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findBy(array(), array('nom' => 'ASC', 'prenom' => 'ASC'));

        // Chemin du fichier de liste des compétences.
        $competenceListFile = $this->get('kernel')->getRootDir() . '/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence/competencesList.xml';

        // Fichier de compétence sous forme de chaîne nettoyer des charactères interdits.
        $competenceListString = str_replace('&', '&amp;', file_get_contents($competenceListFile));

        // Objet XML des compétences.
        $competences = simplexml_load_string($competenceListString);

        // On récupère les compétences sous forme de tableau.
        $competencesArray = array();
        foreach ($competences->categorie as $categorie) {
            //var_dump((string) $categorie->categorie_name);
            $competencesArray[(string) $categorie->categorie_name] = array();
            foreach ($categorie->competence as $competence) {
                $competencesArray[(string) $categorie->categorie_name][(string) $competence] = (string) $competence;
            }
        }

        $competencesCount = count($competencesArray, COUNT_RECURSIVE) - count($competencesArray);

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:matriceCompetence.html.twig', array('matrices_competences' => $matrices_competences, 'competencesArray' => $competencesArray, 'competencesCount' => $competencesCount));
    }

    public function extractMatriceCompetenceDataAction() {
        $em = $this->getDoctrine()->getManager();

        $allUsers = $em->getRepository('NoxIntranetUserBundle:User')->findAll();

        $users = array();
        foreach ($allUsers as $user) {
            $nom = strtoupper($this->wd_remove_accents(str_replace('-', ' ', $user->getLastname())));
            $prenom = strtoupper($this->wd_remove_accents(str_replace('-', ' ', $user->getFirstname())));

            $users[$nom][$prenom] = $user;
        }



        $matrice_competence_root = $this->get('kernel')->getRootDir() . "/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence";

        $matrice_competence_file = $matrice_competence_root . "/Matrice_Competence.xlsx";

        // Initialisation de l'objet Excel du fichier de matrice.
        $objReader = new PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load($matrice_competence_file);
        $sheet = $objPHPExcel->getActiveSheet();

        $rowsIterator = $sheet->getRowIterator();

        $count = 0;
        foreach ($rowsIterator as $row) {
            $rowIndex = $row->getRowIndex();

            $matrice_nom = trim(strtoupper($this->wd_remove_accents(str_replace('-', ' ', $sheet->getCell('D' . $rowIndex)->getValue()))));
            $matrice_prenom = trim(strtoupper($this->wd_remove_accents(str_replace('-', ' ', $sheet->getCell('E' . $rowIndex)->getValue()))));

            if (isset($users[$matrice_nom][$matrice_prenom])) {

                $user = $users[$matrice_nom][$matrice_prenom];

                $matrice_competence_entity = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findOneByUser($user);

                if (empty($matrice_competence_entity)) {

                    $matrice_societe = $sheet->getCell('A' . $rowIndex)->getValue();
                    $matrice_etablissement = $sheet->getCell('C' . $rowIndex)->getValue();
                    $matrice_date_naissance = $sheet->getCell('F' . $rowIndex)->getValue();

                    $new_matrice_competence = new MatriceCompetence();
                }

                //echo $users[$matrice_nom][$matrice_prenom]->getUsername() . "<br />";
                $count++;
            } else {
                echo $matrice_nom . ' ' . $matrice_prenom . "<br />";
            }
        }

        echo $count;

        return new Response('');
    }

    /**
     * 
     * Supprime les accents d'une chaîne de charactères.
     * 
     * @param String $str La chaîne de charactère à nettoyer.
     * @param String $charset L'encodage de la chaîne d'origine. UTF-8 par défaut.
     * @return String La chaîne nettoyée de ses accents.
     */
    private function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

}
