<?php

namespace NoxIntranet\UserBundle\Controller\DeveloppementProfessionnel;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\UserBundle\Entity\DeveloppementProfessionnel;

class DeveloppementProfessionnelController extends Controller {

    public function formulaireDeveloppementProfessionnelAction(Request $request, $collaborateurUsername) {
        // On récupére le collaborateur courant.
        $valideur = $this->get('security.context')->getToken()->getUser();

        // On récupére le collaborateur concerné par le formulaire.
        $em = $this->getDoctrine()->getManager();
        $collaborateur = empty($collaborateurUsername) ? $valideur : $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($collaborateurUsername);

        // On récupére son entitée hiérarchique, formulaire associé si il existe et le statut courant du formulaire.  
        $collaborateurHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());
        $formulaireDeveloppementProfessionnel = $em->getRepository('NoxIntranetUserBundle:DeveloppementProfessionnel')->findOneBy(array('collaborateur' => $collaborateur, 'annee' => date('Y')));
        $currentFormStatut = empty($formulaireDeveloppementProfessionnel) ? 'Collaborateur' : $formulaireDeveloppementProfessionnel->getStatut();

        // Tableau qui associe le statut courant du formulaire à son valideur.
        $statutHierarchie = array(
            'Collaborateur' => $collaborateur->getUsername(),
            'N1' => $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $collaborateurHierarchy->getDA())[0], 'lastname' => explode(' ', $collaborateurHierarchy->getDA())[1]))->getUsername(),
            'N2' => $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $collaborateurHierarchy->getN2())[0], 'lastname' => explode(' ', $collaborateurHierarchy->getN2())[1]))->getUsername(),
            'DRH' => 't.besson',
            'Synthèse' => 't.besson'
        );

        // Fonction de sortie si visite non autorisé.
        $exit = $this->exitToAccueil($collaborateurUsername, $formulaireDeveloppementProfessionnel, $valideur, $statutHierarchie, $request);
        if ($exit) {
            return $exit;
        }

        // Tableau des départements Français et des pays du monde.
        $regionsFrance = array();
        foreach (json_decode(file_get_contents($this->container->get('kernel')->locateResource('@NoxIntranetUserBundle/Resources/public/DeveloppementProfessionnel/DepartementsFrancais.json')), true) as $region) {
            $regionsFrance[$region] = $region;
        }
        $paysInternational = array();
        foreach (json_decode(file_get_contents($this->container->get('kernel')->locateResource('@NoxIntranetUserBundle/Resources/public/DeveloppementProfessionnel/PaysMonde.json')), true) as $pays) {
            $paysInternational[$pays] = $pays;
        }

        /* Génération du formulaire */
        $formDeveloppementProfessionnelBuilder = $this->createFormBuilder();
        $formDeveloppementProfessionnelBuilder
                ->add('Nom', TextType::class, array(
                    'data' => $collaborateur->getLastname(),
                    'attr' => array(
                        'readonly' => 'readonly'
                    ),
                    'label' => 'Nom : ',
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add('Prenom', TextType::class, array(
                    'data' => $collaborateur->getFirstname(),
                    'label' => 'Prénom : ',
                    'attr' => array(
                        'readonly' => 'readonly'
                    ),
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add('Age', IntegerType::class, array(
                    'label' => 'Age : ',
                    'attr' => array(
                        'min' => 1
                    ),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Age'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add("DateAncienneteGroupe", DateType::class, array(
                    'label' => "Date d'ancienneté Groupe : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? new \DateTime : $formulaireDeveloppementProfessionnel->getFormulaire()['DateAncienneteGroupe'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add('Entite', TextType::class, array(
                    'label' => 'Entité : ',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Entite'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add('PosteActuel', TextType::class, array(
                    'label' => 'Poste actuel : ',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['PosteActuel'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add("DateAnciennetePoste", DateType::class, array(
                    'label' => "Date d'ancienneté dans le poste : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? new \DateTime : $formulaireDeveloppementProfessionnel->getFormulaire()['DateAnciennetePoste'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add("SalaireBrutMensuel", IntegerType::class, array(
                    'label' => "Salaire brut mensuel : ",
                    'attr' => array(
                        'min' => 1
                    ),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['SalaireBrutMensuel'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add('NomResponsable', TextType::class, array(
                    'label' => "Nom du responsable : ",
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['NomResponsable'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add("DateEntretien", DateType::class, array(
                    'label' => "Date de l'entretien : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? new \DateTime : $formulaireDeveloppementProfessionnel->getFormulaire()['DateEntretien'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur')
                ))
                ->add('Formation1', TextType::class, array(
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Formation1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'N1'),
                    'required' => false
                ))
                ->add('Priorite1', ChoiceType::class, array(
                    'choices' => array(1 => 1, 2 => 2, 3 => 3),
                    'placeholder' => 'Choisir une priorité...',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Priorite1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'N1'),
                    'required' => false,
                ))
                ->add('Formation2', TextType::class, array(
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Formation1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'N1'),
                    'required' => false
                ))
                ->add('Priorite2', ChoiceType::class, array(
                    'choices' => array(1 => 1, 2 => 2, 3 => 3),
                    'placeholder' => 'Choisir une priorité...',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Priorite1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'N1'),
                    'required' => false,
                ))
                ->add('Formation3', TextType::class, array(
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Formation1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'N1'),
                    'required' => false
                ))
                ->add('Priorite3', ChoiceType::class, array(
                    'choices' => array(1 => 1, 2 => 2, 3 => 3),
                    'placeholder' => 'Choisir une priorité...',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Priorite1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'N1'),
                    'required' => false,
                ))
                ->add('RegionFrance', ChoiceType::class, array(
                    'choices' => $regionsFrance,
                    'placeholder' => 'Choisir un département...',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['RegionFrance'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur'),
                    'required' => false,
                    'label' => 'France : ',
                ))
                ->add('PaysInternational', ChoiceType::class, array(
                    'choices' => $paysInternational,
                    'placeholder' => 'Choisir un pays...',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['PaysInternational'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur'),
                    'required' => false,
                    'label' => 'International : ',
                ))
                ->add('Langue1', TextType::class, array(
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Langue1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur'),
                    'required' => false,
                    'label' => 'Langue 1 : '
                ))
                ->add('Langue2', TextType::class, array(
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Langue2'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur'),
                    'required' => false,
                    'label' => 'Langue 2 : '
                ))
                ->add('NiveauLangue1', ChoiceType::class, array(
                    'choices' => array('Débutant' => 'Débutant', 'Intermédiaire' => 'Intermédiaire', 'Courant' => 'Courant'),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['NiveauLangue1'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur'),
                    'required' => false,
                    'label' => 'Niveau : ',
                    'placeholder' => 'Choisir un niveau...',
                ))
                ->add('NiveauLangue2', ChoiceType::class, array(
                    'choices' => array('Débutant' => 'Débutant', 'Intermédiaire' => 'Intermédiaire', 'Courant' => 'Courant'),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['NiveauLangue2'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, 'Collaborateur'),
                    'required' => false,
                    'label' => 'Niveau : ',
                    'placeholder' => 'Choisir un niveau...',
                ))
                ->add('Valider', SubmitType::class);

        // On récupére le fichier des question au format JSON et on le converti en tableau.
        $file = $this->container->get('kernel')->locateResource('@NoxIntranetUserBundle/Resources/public/DeveloppementProfessionnel/QuestionsFormulaireDeveloppementProfessionnel.json');
        $questions = json_decode(file_get_contents($file), true);

        // Pour chaques questions...
        foreach ($questions as $key => $question) {
            // Si il existe une question pour le Collaborateur...
            if (array_key_exists('Collaborateur', $question)) {
                // Si la question est textuelle...
                if ($question['Collaborateur']['Type'] === 'Texte') {
                    // On ajoute un Textarea au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', TextareaType::class, array(
                        'attr' => array(
                            'class' => 'collaborateurTextarea'
                        ),
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Collaborateur'],
                        'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Collaborateur']['Destinataire'])
                    ));
                }
                // Si la question est un choix...
                else {
                    // On récupére les choix pour le sélécteur.
                    $choices = array();
                    foreach ($question['Collaborateur']['Choix'] as $choice) {
                        $choices[$choice] = $choice;
                    }

                    // On ajoute une Select au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', ChoiceType::class, array(
                        'choices' => $choices,
                        'placeholder' => 'Choisir une réponse...',
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Collaborateur'],
                        'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Collaborateur']['Destinataire']),
                    ));
                }
            }
            // Si il existe une question pour le Manager...
            if (array_key_exists('Manager', $question)) {
                // Si la question est textuelle...
                if ($question['Manager']['Type'] === 'Texte') {
                    // On ajoute un Textarea au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', TextareaType::class, array(
                        'attr' => array(
                            'class' => 'managerTextarea'
                        ),
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Manager'],
                        'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Manager']['Destinataire'])
                    ));
                }
                // Si la question est un choix...
                else {
                    // On récupére les choix pour le sélécteur.
                    $choices = array();
                    foreach ($question['Manager']['Choix'] as $choice) {
                        $choices[$choice] = $choice;
                    }

                    // On ajoute une Select au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', ChoiceType::class, array(
                        'choices' => $choices,
                        'placeholder' => 'Choisir une réponse...',
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Manager'],
                        'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Manager']['Destinataire']),
                    ));
                }
            }
            // Si il existe une question Neutre...
            if (array_key_exists('Neutre', $question)) {
                // On ajoute un Textarea au formulaire.
                $formDeveloppementProfessionnelBuilder->add($key . '_Neutre', TextareaType::class, array(
                    'attr' => array(
                        'class' => 'neutreTextarea'
                    ),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Neutre'],
                    'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Neutre']['Destinataire'])
                ));
            }
        }
        $formDeveloppementProfessionnel = $formDeveloppementProfessionnelBuilder->getForm();

        $this->exportToExcel();

        /* Traitement du formulaire */
        $formDeveloppementProfessionnel->handleRequest($request);
        if ($formDeveloppementProfessionnel->isValid()) {
            // On déclare un tableau qui contiendras les réponses au formulaire.
            $reponses = array();

            // On récupére les infos générales.          
            $infosGenerales = array(
                'Nom',
                'Prenom',
                'Age',
                'DateAncienneteGroupe',
                'Entite',
                'PosteActuel',
                'DateAnciennetePoste',
                'SalaireBrutMensuel',
                'NomResponsable',
                'DateEntretien',
                'Formation1',
                'Priorite1',
                'Formation2',
                'Priorite2',
                'Formation3',
                'Priorite3',
                'RegionFrance',
                'PaysInternational',
                'Langue1',
                'NiveauLangue1',
                'Langue2',
                'NiveauLangue2'
            );
            $this->getInfosGeneralesAnswers($infosGenerales, $reponses, $formDeveloppementProfessionnel);

            // On récupére les réponses aux question.
            $this->getAnswers($questions, $reponses, $formDeveloppementProfessionnel);

            // Si le formulaire n'existe pas déjà...
            if (empty($formulaireDeveloppementProfessionnel)) {
                // On en crée un nouveau.
                $newDeveloppementProfessionnel = new DeveloppementProfessionnel();
                $newDeveloppementProfessionnel->setCollaborateur($collaborateur);
                $newDeveloppementProfessionnel->setFormulaire($reponses);
                $newDeveloppementProfessionnel->setAnnee(date('Y'));
                $em->persist($newDeveloppementProfessionnel);
            }
            // Si le formulaire existe déjà...
            else {
                // Tableau permettant de déterminé le statut à appliquer au formulaire.
                $nextStatut = array('N1' => 'N2', 'N2' => 'DRH', 'DRH' => 'Synthèse');

                // On envoi un email au prochain validateur.
                $this->sendMailToNextValidator($statutHierarchie[$nextStatut[$formulaireDeveloppementProfessionnel->getStatut()]], $collaborateur);

                // On met ses données à jour.
                $formulaireDeveloppementProfessionnel->setFormulaire($reponses);
                $formulaireDeveloppementProfessionnel->setStatut($nextStatut[$formulaireDeveloppementProfessionnel->getStatut()]);
            }

            // On sauvegarde les changements en base de données. 
            $em->flush();

            // On redirige vers l'accueil.
            $request->getSession()->getFlashBag()->add('notice', "Vous avez correctement validé l'entretien.");
            //return $this->redirectToRoute('nox_intranet_accueil');
        }

        return $this->render('NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig', array('formulaireDevellopementProfessionnel' => $formDeveloppementProfessionnel->createView(), 'questions' => $questions, 'entretien' => $formulaireDeveloppementProfessionnel));
    }

    // Ajoute les réponses existantes au tableau des réponses.
    private function getAnswers($questions, &$answersArray, $form) {
        // Pour chaques question du questionnaire...
        foreach ($questions as $key => $question) {
            // On récupére les réponses aux question.
            if (array_key_exists($key . '_Collaborateur', $form->all())) {
                $answersArray[$key . '_Collaborateur'] = $form->get($key . '_Collaborateur')->getData();
            }
            if (array_key_exists($key . '_Manager', $form->all())) {
                $answersArray[$key . '_Manager'] = $form->get($key . '_Manager')->getData();
            }
            if (array_key_exists($key . '_Neutre', $form->all())) {
                $answersArray[$key . '_Neutre'] = $form->get($key . '_Neutre')->getData();
            }
        }
    }

    // Ajoute les infos générales au tableau des réponses.
    private function getInfosGeneralesAnswers($infosGenerales, &$answersArray, $form) {
        // Pour chaques informations générale...
        foreach ($infosGenerales as $info) {
            $answersArray[$info] = $form->get($info)->getData();
        }
    }

    // Redirige le collaborateur vers l'accueil avec un message personnalisé si il ne répond pas aux critères d'accès à l'entretien.
    private function exitToAccueil($collaborateurUsername, $formulaireDeveloppementProfessionnel, $valideur, $statutHierarchie, $request) {
        // Si aucun username de collaborateur n'est renseigné et que le collaborateur courant à déjà un entretien associé cette année...
        if (empty($collaborateurUsername) && !empty($formulaireDeveloppementProfessionnel)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous avez déjà remplis l'entretien de développement professionnel de cette année.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }
        // Sinon si un username de collaborateur est renseigné mais qu'il n'a pas d'entretien associé...
        else if (!empty($collaborateurUsername) && empty($formulaireDeveloppementProfessionnel)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Il n'y a pas d'entretien de développement professionnel associé à ce collaborateur.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }
        // Sinon si un username de collaborateur est renseigné, qu'un entretien y est associé mais que le collaborateur courant n'est pas le représentant hiérarchique du statut acutel de l'entretien...
        else if (!empty($collaborateurUsername) && !empty($formulaireDeveloppementProfessionnel) && $statutHierarchie[$formulaireDeveloppementProfessionnel->getStatut()] !== $valideur->getUsername()) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'avez pas l'autorisation d'accéder à l'entretien de ce collaborateur.");
            return $this->redirectToRoute('nox_intranet_accueil');
        } else {
            return false;
        }
    }

    // Définie le champ comme éditable ou non en fonction du statut de l'entretien et du rôle du collaborateur.
    private function fieldIsWritable($statut, $destinataire) {
        return $statut === $destinataire ? false : true;
    }

    // Exporte le formulaire d'entretien sous forme de fichier Excel.
    public function exportToExcel() {
        // On importe le module de traitement Excel.
        $root = $this->get('kernel')->getRootDir() . '\..';
        require_once $root . '\vendor\phpexcel\phpexcel\PHPExcel.php';

        // Initialisation d'un nouvel objet PHPExcel.
        $objPHPExcel = new \PHPExcel();

        // Tableau des en-têtes des colonnes du fichier Excel.
        $collonesSynthese = array(
            'A' => array('Header' => 'NOM', 'CleFormulaire' => 'Nom'),
            'B' => array('Header' => 'PRENOM', 'CleFormulaire' => 'Prenom'),
            'C' => array('Header' => 'AGE', 'CleFormulaire' => 'Age'),
            'D' => array('Header' => 'DATE ANCIENNETE GROUPE', 'CleFormulaire' => 'DateAncienneteGroupe'),
            'E' => array('Header' => 'ENTITE', 'CleFormulaire' => 'Entite'),
            'F' => array('Header' => 'POSTE ACTUEL', 'CleFormulaire' => 'PosteActuel'),
            'G' => array('Header' => 'DATE ANCIENNETE POSTE', 'CleFormulaire' => 'DateAnciennetePoste'),
            'H' => array('Header' => 'BRUT MENSUEL', 'CleFormulaire' => 'SalaireBrutMensuel'),
            'I' => array('Header' => 'RESPONSABLE', 'CleFormulaire' => 'NomResponsable'),
            'J' => array('Header' => "DATE D'ENTRETIEN", 'CleFormulaire' => 'DateEntretien'),
            'K' => array('Header' => 'NIVEAU DE MAITRISE DU POSTE', 'CleFormulaire' => '4_Manager'),
            'L' => array('Header' => 'ATTEINTE OBJECTIF 1', 'CleFormulaire' => '9_Manager'),
            'M' => array('Header' => 'ATTEINTE OBJECTIF 2', 'CleFormulaire' => '14_Manager'),
            'N' => array('Header' => 'FORMATIONS REALISEES', 'CleFormulaire' => '21_Manager'),
            'O' => array('Header' => 'BESOIN FORMATION SALARIE', 'CleFormulaire' => '31_Collaborateur'),
            'P' => array('Header' => 'FORMATION A PREVOIR', 'CleFormulaire' => 'Formation1'),
            'Q' => array('Header' => 'NIVEAU', 'CleFormulaire' => 'Priorite1'),
            'R' => array('Header' => 'FORMATION A PREVOIR', 'CleFormulaire' => 'Formation2'),
            'S' => array('Header' => 'NIVEAU', 'CleFormulaire' => 'Priorite2'),
            'T' => array('Header' => 'FORMATION A PREVOIR', 'CleFormulaire' => 'Formation3'),
            'U' => array('Header' => 'NIVEAU', 'CleFormulaire' => 'Priorite3'),
            'V' => array('Header' => 'MOBILITE', 'CleFormulaire' => '28_Collaborateur'),
            'W' => array('Header' => 'DEPARTEMENT', 'CleFormulaire' => 'RegionFrance'),
            'X' => array('Header' => 'PAYS', 'CleFormulaire' => 'PaysInternational'),
            'Y' => array('Header' => 'LANGUE 1', 'CleFormulaire' => 'Langue1'),
            'Z' => array('Header' => 'NIVEAU', 'CleFormulaire' => 'NiveauLangue1'),
            'AA' => array('Header' => 'LANGUE 2', 'CleFormulaire' => 'Langue2'),
            'AB' => array('Header' => 'NIVEAU', 'CleFormulaire' => 'NiveauLangue2'),
        );

        // Ecriture des en-têtes sur la feuille Excel.
        foreach ($collonesSynthese as $key => $colonne) {
            // On donne la valeur de l'en-tete à la cellule.
            $objPHPExcel->getActiveSheet()->setCellValue($key . '1', $colonne['Header']);

            // On met en gras le texte de la cellule.
            $objPHPExcel->getActiveSheet()->getStyle($key . '1')->getFont()->setBold(true);

            // On centre le texte de la cellule.
            $style = array(
                'alignment' => array(
                    'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                ),
                'borders' => array(
                    'allborders' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN
                    )
                )
            );
            $objPHPExcel->getActiveSheet()->getStyle($key . '1')->applyFromArray($style);
        }

        // On récupére tous les entretiens de l'année courante.
        $em = $this->getDoctrine()->getManager();
        $entretiensDeveloppementProfessionnel = $em->getRepository('NoxIntranetUserBundle:DeveloppementProfessionnel')->findByAnnee(date('Y'));


        $ligne = 2; // Compteur de ligne.
        // Pour chaque entretien de développement professionnel...
        foreach ($entretiensDeveloppementProfessionnel as $entretien) {
            // On récupére les données du formulaire.
            $formulaire = $entretien->getFormulaire();

            // Pour chaque colonnes du fichier Excel...
            foreach ($collonesSynthese as $key => $colonne) {
                // On attribut la valeur du formulaire correspondant à la colonne actuel du fichier Excel.
                $objPHPExcel->getActiveSheet()->setCellValue($key . $ligne, $formulaire[$colonne['CleFormulaire']]);
                $objPHPExcel->getActiveSheet()->getColumnDimension($key)->setAutoSize(true);

                // On centre le texte de la cellule.
                $style = array(
                    'alignment' => array(
                        'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    ),
                    'borders' => array(
                        'allborders' => array(
                            'style' => \PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                );
                $objPHPExcel->getActiveSheet()->getStyle($key . $ligne)->applyFromArray($style);
            }

            // On incrémente la valeur de la ligne.
            $ligne++;
        }

        // On sauvegarde le fichier Excel.
        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('testExportExcelEntretie.xlsx');
    }

    private function sendMailToNextValidator($nextValidator, $collaborateur) {
        // On génére l'email du prochain valideur depuis son username.
        $nextValidatorEmail = $nextValidator . '@groupe-nox.com';

        $message = \Swift_Message::newInstance()
                ->setSubject('EDP en attente de votre validation')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($nextValidatorEmail)
                ->setBody(
                $this->renderView(
                        'Emails/DeveloppementProfessionnel/AttenteValidationEDP.html.twig', array('collaborateur' => $collaborateur)
                ), 'text/html'
                )
        ;
        $this->get('mailer')->send($message);
    }

}
