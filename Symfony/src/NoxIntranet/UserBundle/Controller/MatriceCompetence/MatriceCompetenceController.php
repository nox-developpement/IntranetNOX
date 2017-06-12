<?php

namespace NoxIntranet\UserBundle\Controller\MatriceCompetence;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\UserBundle\Entity\MatriceCompetence;
use Symfony\Component\HttpFoundation\Response;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
            // On sauvegarde les modifications en base de données.
            $em->persist($matrice_competence);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_developpement_professionnel_matrice_competence_formulaire');
        }

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:formulaireMatriceCompetence.html.twig', array('formCompetence' => $formCompetence->createView()));
    }

    /**
     * 
     * Affiche le tableau des compétences des collaborateurs.
     * 
     * @return view
     */
    public function matriceCompetenceTableAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère les infos de l'utilisateur courant.
        $current_user = $this->get('security.token_storage')->getToken()->getUser();
        $user_canonical_name = $this->wd_remove_accents(strtoupper($current_user->getFirstname() . " " . $current_user->getLastname()));

        // Si l'utilisateur n'as pas les droits requis on le redirige vers l'accueil.
        if (!(
                $this->get('security.authorization_checker')->isGranted('ROLE_RH') ||
                !empty($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByDa($user_canonical_name)) ||
                !empty($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findByN2($user_canonical_name)) ||
                $current_user->getUsername === "r.ballureau" || $current_user->getUsername() === "j.plenard" || $current_user->getUsername() === "a.caproplacide"
                )) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'avez pas l'autorisation d'accéder à ce service.");
            $this->redirectToRoute("nox_intranet_accueil");
        }

        // Compétences des collaborateurs.
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

        // On récupére les société et établissements.
        $hierachies = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
        $societes = array();
        foreach ($hierachies as $hierachy) {
            $societes[$hierachy->getSociete()] = $hierachy->getSociete();
        }
        $etablissements = array();
        foreach ($hierachies as $hierachy) {
            $etablissements[$hierachy->getEtablissement()] = $hierachy->getEtablissement();
        }

        // Liste des collaborateurs authorisés à éditer la matrice.
        $authorizedEditors = json_encode(array('m.veillon', 'n.rigaudeau', 'a.forestier'));

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:matriceCompetence.html.twig', array('matrices_competences' => $matrices_competences, 'competencesArray' => $competencesArray, 'societes' => $societes, 'etablissements' => $etablissements, 'authorizedEditors' => $authorizedEditors));
    }

    public function extractMatriceCompetenceDataAction() {
        // Entitées de tous les collaborateurs.
        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository('NoxIntranetUserBundle:User')->findAll();

        // On place les entitées collaborateur dans un tableau associatif nom, prénom.
        $users = array();
        foreach ($allUsers as $user) {
            $nom = strtoupper($this->wd_remove_accents(str_replace('-', ' ', $user->getLastname())));
            $prenom = strtoupper($this->wd_remove_accents(str_replace('-', ' ', $user->getFirstname())));

            $users[$nom][$prenom] = $user;
        }

        // Fichier Excel de matrice de compétence.
        $matrice_competence_root = $this->get('kernel')->getRootDir() . "/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence";
        $matrice_competence_file = $matrice_competence_root . "/Matrice_Competence.xlsx";

        // Modification de la méthode de caching pour économiser la mémoire.
        \PHPExcel_Settings::setCacheStorageMethod(\PHPExcel_CachedObjectStorageFactory::cache_to_sqlite3);

        // Initialisation de l'objet Excel du fichier de matrice.
        $objReader = new \PHPExcel_Reader_Excel2007();
        $objReader->setReadDataOnly(true); // Permet de lire seulement les valeurs des cellules pour économiser la mémoire.
        $objPHPExcel = $objReader->load($matrice_competence_file);

        // Feuile Excel courante.
        $sheet = $objPHPExcel->getActiveSheet();

        // Pour chaques lignes du fichier Excel...
        $rowsIterator = $sheet->getRowIterator();
        foreach ($rowsIterator as $row) {
            // Index de la ligne.
            $rowIndex = $row->getRowIndex();

            // Nom et prénom sur la ligne.
            $matrice_nom = trim(strtoupper($this->wd_remove_accents(str_replace('-', ' ', $sheet->getCell('D' . $rowIndex)->getValue()))));
            $matrice_prenom = trim(strtoupper($this->wd_remove_accents(str_replace('-', ' ', $sheet->getCell('E' . $rowIndex)->getValue()))));

            // Si le nom et le prénom correspondent à une entitée collaborateur...
            if (isset($users[$matrice_nom][$matrice_prenom])) {
                // On récupère l'entitée.
                $user = $users[$matrice_nom][$matrice_prenom];

                // On recupère l'entitée de matrice de compétence associée.
                $matrice_competence_entity = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findOneByUser($user);

                // Si il n'existe pas d'entitée de matrice associé...
                if (empty($matrice_competence_entity)) {
                    // On récupére les données du fichier Excel pour le collaborateur.
                    $matrice_societe = $sheet->getCell('A' . $rowIndex)->getValue();
                    $matrice_etablissement = $sheet->getCell('C' . $rowIndex)->getValue();
                    if (gettype($sheet->getCell('F' . $rowIndex)->getValue()) !== 'string') {
                        $matrice_date_naissance = \PHPExcel_Shared_Date::ExcelToPHPObject($sheet->getCell('F' . $rowIndex)->getValue());
                    } else if (DateTime::createFromFormat('d/m/Y', trim($sheet->getCell('F' . $rowIndex)->getValue())) !== false) {
                        $matrice_date_naissance = DateTime::createFromFormat('d/m/Y', trim($sheet->getCell('F' . $rowIndex)->getValue()));
                    } else {
                        $matrice_date_naissance = null;
                    }
                    if (gettype($sheet->getCell('G' . $rowIndex)->getValue()) !== 'string') {
                        $matrice_date_anciennete = \PHPExcel_Shared_Date::ExcelToPHPObject($sheet->getCell('G' . $rowIndex)->getValue());
                    } else if (DateTime::createFromFormat('d/m/Y', trim($sheet->getCell('G' . $rowIndex)->getValue())) !== false) {
                        $matrice_date_anciennete = DateTime::createFromFormat('d/m/Y', trim($sheet->getCell('G' . $rowIndex)->getValue()));
                    } else {
                        $matrice_date_anciennete = null;
                    }
                    $matrice_statut = $sheet->getCell('H' . $rowIndex)->getValue();
                    $matrice_poste = $sheet->getCell('I' . $rowIndex)->getValue();
                    $matrice_competence_principale = null;
                    for ($column = 'J'; $column !== 'DA'; $column++) {
                        if (trim($sheet->getCell($column . $rowIndex)->getValue()) === "1") {
                            $matrice_competence_principale = $sheet->getCell($column . '3')->getValue();
                        }
                    }
                    $matrice_competences_secondaires = array();
                    for ($column = 'J'; $column !== 'DA'; $column++) {
                        if (trim($sheet->getCell($column . $rowIndex)->getValue()) === "*") {
                            $matrice_competences_secondaires[] = $sheet->getCell($column . '3')->getValue();
                        }
                    }

                    // Création d'une nouvelle entité de matrice de compétence et attribution des données.
                    $new_matrice_competence = new MatriceCompetence();
                    $new_matrice_competence->setSociete($matrice_societe);
                    $new_matrice_competence->setEtablissement($matrice_etablissement);
                    $new_matrice_competence->setUser($user);
                    $new_matrice_competence->setPrenom($user->getFirstname());
                    $new_matrice_competence->setNom($user->getLastname());
                    $new_matrice_competence->setDateNaissance($matrice_date_naissance);
                    $new_matrice_competence->setDateAnciennete($matrice_date_anciennete);
                    $new_matrice_competence->setStatut($matrice_statut);
                    $new_matrice_competence->setPoste($matrice_poste);
                    $new_matrice_competence->setCompetencePrincipale($matrice_competence_principale);
                    $new_matrice_competence->setCompetencesSecondaires($matrice_competences_secondaires);
                    $em->persist($new_matrice_competence);

                    // On supprime le collaborateur de la liste des collaborateur pour éviter les doublons.
                    unset($users[$matrice_nom][$matrice_prenom]);
                }
            }
        }

        // Sauvegarde en base de données.
        $em->flush();

        return new Response("OK");
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

    /**
     * 
     * Affiche une fenêtre d'édition de la matrice de compétence d'un utilisateur en fonction de son Id.
     * 
     * @param type $userId Id de l'entitée du collaborateur.
     * @return Response View
     */
    public function collaborateurMatriceEditonAction($userId) {
        // Entité du collaborateur.
        $em = $this->getDoctrine()->getManager();
        $currentUser = $em->getRepository('NoxIntranetUserBundle:User')->find($userId);

        // On récupère ça hiérarchie.
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
        $formCompetenceBuilder = $this->get('form.factory')->createNamedBuilder('formMatriceCollaborateurEdition', FormType::class, $matrice_competence);
        $formCompetenceBuilder
                ->add('Id', HiddenType::class)
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
                ->add('Matricule', TextType::class, array(
                    'read_only' => true,
                    'data' => $userHierarchy->getMatricule(),
                    'label' => "MATRICULE",
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
                    'read_only' => true,
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'label' => "DATE DE NAISSANCE",
                    'years' => range(date('Y') - 100, date('Y')),
                    'attr' => array(
                        //'class' => "datepicker",
                        'style' => "display: inline-block;"
                    ),
                ))
                ->add('Date_Anciennete', DateType::class, array(
                    'read_only' => true,
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'label' => 'DATE ANCIENNETE',
                    'years' => range(date('Y') - 100, date('Y')),
                    'attr' => array(
                        //'class' => "datepicker",
                        'style' => "display: inline-block;"
                    ),
                ))
                ->add('Statut', TextType::class, array(
                    'read_only' => true,
                    'label' => "STATUT",
                    'attr' => array(
                        'style' => "width: 100%;"
                    ),
                ))
                ->add('Poste', TextType::class, array(
                    'read_only' => true,
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
        ;
        $formCompetence = $formCompetenceBuilder->getForm();

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:matriceCollaborateurEdition.html.twig', array('formCompetence' => $formCompetence->createView()));
    }

    /**
     * 
     * Sauvegarde les modifications sur une matrice collaborateur en base de données.
     * 
     * @param Request $request Requête contenant les données du formulaire.
     * @return Response
     */
    public function ajaxSaveMatriceCollaborateurEditionAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Données du formulaire
            $form = $request->get('formMatriceCollaborateurEdition');

            // On récuépre l'entitée de matrice de compétence.
            $em = $this->getDoctrine()->getManager();
            $matrice_collaborateur_entity = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->find($form['Id']);

            // Si il n'existe pas encore d'entitée de matrice de compétence...
            if (empty($matrice_collaborateur_entity)) {
                // On en crée une.
                $matrice_collaborateur_entity = new MatriceCompetence();
                $matrice_collaborateur_entity
                        ->setSociete($form['Societe'])
                        ->setEtablissement($form['Etablissement'])
                        ->setNom($form['Nom'])
                        ->setPrenom($form['Prenom'])
                ;
                $em->persist($matrice_collaborateur_entity);
            }

            // On met à jour les données.
            $matrice_collaborateur_entity->setDateNaissance(DateTime::createFromFormat('d/m/Y', $form['Date_Naissance']));
            $matrice_collaborateur_entity->setDateAnciennete(DateTime::createFromFormat('d/m/Y', $form['Date_Anciennete']));
            $matrice_collaborateur_entity->setStatut($form['Statut']);
            $matrice_collaborateur_entity->setPoste($form['Poste']);
            if (!empty($form['Competence_Principale'])) {
                $matrice_collaborateur_entity->setCompetencePrincipale($form['Competence_Principale']);
            } else {
                $matrice_collaborateur_entity->setCompetencePrincipale(null);
            }
            if (isset($form['Competences_Secondaires'])) {
                $matrice_collaborateur_entity->setCompetencesSecondaires($form['Competences_Secondaires']);
            } else {
                $matrice_collaborateur_entity->setCompetencesSecondaires(null);
            }

            // Sauvegarde en base de données.
            $em->flush();

            return new Response('Saved');
        }
    }

    /**
     * 
     * Retourne la matrice de compétence d'un collaborateur en fonction de son Id.
     * 
     * @param Request $request Requête contenant l'Id du collaborateur.
     * @return Response Matrice du collaborateur.
     */
    public function ajaxGetMatriceCollaborateurAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $userId = $request->get('userId');

            $em = $this->getDoctrine()->getManager();
            $user = $em->find('NoxIntranetUserBundle:User', $userId);

            $matrice = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findOneByUser($user);

            return new Response(json_encode($matrice));
        }
    }

    /**
     * 
     * Affiche un fenêtre de séléction de collaborateur et d'édition individuel de leur matrice de compétence.
     * 
     * @return View
     */
    public function collaborateurSelectionAction(Request $request) {
        // On récupère l'entité du collaborateur courant et son nom canonique.
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $canonicalName = strtoupper($this->wd_remove_accents($currentUser->getFirstname() . " " . $currentUser->getLastname()));

        // On récupère l'ensemble des entitées des collaborateurs.
        $em = $this->getDoctrine()->getManager();
        $collaborateurs = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array(), array('lastname' => 'ASC', 'firstname' => 'ASC'));

        // Initialisation du tableau de retour.
        $collaborateursList = array();

        // Si l'utilisateur courant fait partie de la DRH...
        if ($this->get('security.authorization_checker')->isGranted('ROLE_RH')) {
            // On ajoute tous les collaborateur qui sont définis dans la hiérarchie au tableau de sortie.
            foreach ($collaborateurs as $collaborateur) {
                $hierachy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());
                if (!empty($hierachy)) {
                    $collaborateursList[] = $collaborateur;
                }
            }
        }
        // Sinon..
        else {
            // On ajoute les collaborateur qui sont définis dans la hiérarchie et qui ont le collaborateur courant comme DA au tableau de sortie.
            foreach ($collaborateurs as $collaborateur) {
                $hierachy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());
                if (!empty($hierachy) && $hierachy->getDA($canonicalName)) {
                    $collaborateursList[] = $collaborateur;
                }
            }
        }

        // Si une Id de collaborateur est passé en paramêtre.
        if (!empty($request->query->get('Collaborateur'))) {
            // On récupère l'Id est on génére un cookie contenant le liens faire la matrice du collaborateur.
            $default_collaborateur_id = $request->query->get('Collaborateur');
            setcookie("default_collaborateur_id", $this->generateUrl('nox_intranet_developpement_professionnel_matrice_competence_edition_collaborateur', array('userId' => $default_collaborateur_id)), time() + 1);
        }

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:collaborateurSelection.html.twig', array('collaborateursList' => $collaborateursList));
    }

    /**
     * 
     * Recherche les matrices correspondantes au paramètres d'entrés.
     * 
     * @param Request $request Requête contenant les paramètres de la recherche.
     * @return Response Chaîne JSON contenant les matrices qui résulte de la recherche.
     */
    public function ajaxSearchInMatriceAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Préparation de la requête de recherche des matrices.
            $em = $this->getDoctrine()->getManager();
            $searchQueryBuilder = $em->createQueryBuilder();
            $searchQueryBuilder
                    ->select('u')
                    ->from('NoxIntranetUserBundle:MatriceCompetence', 'u');

            // Type de recherche (ET/OU).
            $search_match_type = $request->request->get('search_match_type');

            // Pour chaques champs de la recherche...
            foreach ($request->request as $field => $value) {
                // Si il existe une valeur pour le champ...
                if ($field !== "search_match_type" && !empty($value)) {
                    // Si le champ est une date...
                    if ($field === "dateAnciennete" || $field === "dateNaissance") {
                        // On cherche à convertir la valeur en DateTime.
                        $date_from_value = DateTime::createFromFormat("d/m/Y", $value);

                        // On ajoute une recheche de date à la requête.
                        if ($search_match_type === 'all') {
                            $searchQueryBuilder->andWhere('u.' . $field . " = :" . $field); // Recherche en ET
                        } else {
                            $searchQueryBuilder->orWhere('u.' . $field . " = :" . $field); // Recherche en OU.
                        }
                        $searchQueryBuilder->setParameter($field, $date_from_value, \Doctrine\DBAL\Types\Type::DATE);
                    }
                    // Sinon si la valeur est une compétence secondaire...
                    else if ($field === "competencesSecondaires") {
                        // Pour chaques valeurs de compétence...
                        foreach ($value as $competence) {
                            // On ajoute un condition à la requête.
                            if ($search_match_type === 'all') {
                                $searchQueryBuilder->andWhere("u." . $field . " LIKE '%" . $competence . "%'"); // Recherche en ET
                            } else {
                                $searchQueryBuilder->orWhere("u." . $field . " LIKE '%" . $competence . "%'"); // Recherche en OU.
                            }
                        }
                    }
                    // Si la valeur n'est pas une date ou une compétence secondaire...
                    else {
                        // On ajoute un condition à la requête.
                        if ($search_match_type === 'all') {
                            $searchQueryBuilder->andWhere('u.' . $field . " LIKE '%" . $value . "%'"); // Recherche en ET
                        } else {
                            $searchQueryBuilder->orWhere('u.' . $field . " LIKE '%" . $value . "%'"); // Recherche en OU.
                        }
                    }
                }
            }

            // Trie des résultats.
            $searchQueryBuilder
                    ->addOrderBy('u.nom', 'ASC')
                    ->addOrderBy('u.prenom', 'ASC');

            // Récupération des résultats de la requête.
            $results = $searchQueryBuilder->getQuery()->getResult();

            return new Response(json_encode($results));
        }
    }

    /**
     * 
     * Formulaire d'envoi d'un fichier contenant des informations sur les collaborateurs pour la matrice de compétence.
     * 
     * @param Request $request
     * @return type
     * 
     * @Security("has_role('ROLE_RH')")
     */
    public function collaborateursInfoUploadingAction(Request $request) {
        $formUploadInfoFileBuilder = $this->createFormBuilder();
        $formUploadInfoFileBuilder
                ->add("InfoFile", FileType::class, array(
                    'label' => "Téléversement des informations des collaborateurs",
                    'required' => false,
                    'attr' => array(
                        "accept" => ".xls,.xlsx"
                    )
                ))
                ->add("SendFile", SubmitType::class, array(
                    'label' => "Envoyer le fichier"
                ))
        ;
        $formUploadInfoFile = $formUploadInfoFileBuilder->getForm();

        // Traitement du formulaire.
        $formUploadInfoFile->handleRequest($request);
        if ($formUploadInfoFile->isValid()) {
            // On récupére les informations sur le fichier.
            $file = $formUploadInfoFile->get('InfoFile')->getData();

            // Nom du fichier.
            $filename = $file->getClientOriginalName();

            // Upload du fichier sur le serveur.
            $filepath = "./uploads/" . $filename;
            $file->move("./uploads", $filename);

            // Mise à jour des infos sur l'intranet.
            $this->collaborateursInfoUpdating($filepath);

            // On recharge la page et on affiche un message de confirmation.
            $request->getSession()->getFlashBag()->add('notice', "Les informations des collaborateurs ont été mise à jour.");
            $this->redirectToRoute("nox_intranet_matrice_collaborateur_info_file_uploading");
        }

        return $this->render("NoxIntranetUserBundle:MatriceCompetence:collaborateursInfoFileUploading.html.twig", array('formUploadInfoFile' => $formUploadInfoFile->createView()));
    }

    /**
     * 
     * Retourne la matrice de compétence associée au matricule passé en paramêtre et en crée une nouvelle si elle n'existe pas.
     * Retourne null si aucun collaborateur ne correspond à la matrice.
     * 
     * @param String $matricule Matricule du collaborateur.
     * @return MatriceCompetence
     */
    private function getMatriceCompetenceByUserMatricule($matricule) {
        // Initialisation de l'entity manager.
        $em = $this->getDoctrine()->getManager();

        // Récupération de la hiérachie.
        $user_hierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByMatricule($matricule);

        // Si la hiérarchie existe...
        if (!empty($user_hierarchy)) {
            // Récupération de l'entitée collaborateur.
            $user_entity = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($user_hierarchy->getUsername());

            // Si le collaborateur existe...
            if (!empty($user_entity)) {
                // Récupération de la matrice.
                $user_matrice = $em->getRepository('NoxIntranetUserBundle:MatriceCompetence')->findOneByUser($user_entity);

                // Si il n'existe pas de matrice pour ce collaborateur...
                if (empty($user_matrice)) {
                    // On en crée une.
                    $user_matrice = new MatriceCompetence();
                    $user_matrice->setUser($user_entity);
                    $user_matrice->setMatricule($matricule);
                    $user_matrice->setNom($user_entity->getLastname());
                    $user_matrice->setPrenom($user_entity->getFirstname());

                    // Sauvegarde en base de données.
                    $em->persist($user_matrice);
                }

                // On retourne la matrice.
                return $user_matrice;
            }
        }

        return null;
    }

    /**
     * 
     * Lecture du fichier Excel d'information des collaborateur de la matrice de compétence et mise à jour des informations sur l'intranet.
     * 
     * @param String $filepath Chemin du fichier Excel.
     */
    private function collaborateursInfoUpdating($filepath) {
        // Initialisation de l'entity manager.
        $em = $this->getDoctrine()->getManager();

        // Initialise la lecture du fichier Excel.
        $objPHPExcel = \PHPExcel_IOFactory::load($filepath);
        $objWorksheet = $objPHPExcel->getActiveSheet();

        // Pour chaques cellules du fichier Excel...
        foreach ($objWorksheet->getCellCollection() as $cell) {
            // Lecture du numéro de ligne de la cellule.
            $row = $objWorksheet->getCell($cell)->getRow();

            // Si la ligne est > 1 (En-tête) et la valeur de la 1ère cellule de la ligne n'est pas null...
            if ($row > 1 && $objWorksheet->getCell("A" . $row)->getValue() !== null) {
                // On met les informations de la ligne dans un tableau.
                $date_naissance = new \DateTime();
                $date_naissance->setTimestamp(\PHPExcel_Shared_Date::ExcelToPHP($objWorksheet->getCell("G" . $row)->getValue()));
                $date_anciennete = new \DateTime();
                $date_anciennete->setTimestamp(\PHPExcel_Shared_Date::ExcelToPHP($objWorksheet->getCell("H" . $row)->getValue()));
                $user_info = array(
                    'Matricule' => $objWorksheet->getCell("A" . $row)->getValue(),
                    'Societe' => $objWorksheet->getCell("B" . $row)->getValue(),
                    'Etablissement' => $objWorksheet->getCell("D" . $row)->getValue(),
                    'Date_Naissance' => $date_naissance,
                    'Date_Anciennete' => $date_anciennete,
                    'Statut' => $objWorksheet->getCell("I" . $row)->getValue(),
                    'Poste' => $objWorksheet->getCell("J" . $row)->getValue()
                );

                // Récupération de la matrice de compétence correspondant à la ligne.
                $user_matrice = $this->getMatriceCompetenceByUserMatricule($user_info['Matricule']);

                // Si la matrice existe...
                if (!empty($user_matrice)) {
                    // On met à jour les informations.
                    $user_matrice->setSociete($user_info['Societe']);
                    $user_matrice->setEtablissement($user_info['Etablissement']);
                    $user_matrice->setDateNaissance($user_info['Date_Naissance']);
                    $user_matrice->setDateAnciennete($user_info['Date_Anciennete']);
                    $user_matrice->setStatut($user_info['Statut']);
                    $user_matrice->setPoste($user_info['Poste']);

                    // Sauvegarde en base de données.
                    $em->flush();
                }
            }
        }

        // Suppression du fichier.
        unlink($filepath);
    }

    /**
     * 
     * Requête d'upload de fichier d'info de la matrice par ajax.
     * 
     * @param Request $request
     * @return Response
     */
    public function ajaxUploadCollaborateursInfoAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Fichier Excel.
            $info_file = $request->files->get("info_file");

            // Nom du fichier.
            $filename = $info_file->getClientOriginalName();

            // Upload du fichier sur le serveur.
            $filepath = "./uploads/" . $filename;
            $info_file->move("./uploads", $filename);

            // Mise à jour des infos sur l'intranet.
            $this->collaborateursInfoUpdating($filepath);

            // On génére l'URL de rechargement de la page et on affiche un message de confirmation.
            $request->getSession()->getFlashBag()->add('notice', "Les informations des collaborateurs ont été mise à jour.");
            $redirectUrl = $this->generateUrl("nox_intranet_matrice_collaborateur_info_file_uploading");

            return new Response($redirectUrl);
        }
    }

}
