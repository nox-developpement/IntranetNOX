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
                    // On ajoute une Select au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', ChoiceType::class, array(
                        'choices' => $question['Collaborateur']['Choix'],
                        'placeholder' => 'Choisir une réponse...',
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Collaborateur'],
                        'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Collaborateur']['Destinataire'])
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
                    // On ajoute une Select au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', ChoiceType::class, array(
                        'choices' => $question['Manager']['Choix'],
                        'placeholder' => 'Choisir une réponse...',
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Manager'],
                        'disabled' => $this->fieldIsWritable($currentFormStatut, $question['Manager']['Destinataire'])
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

        /* Traitement du formulaire */
        $formDeveloppementProfessionnel->handleRequest($request);
        if ($formDeveloppementProfessionnel->isValid()) {
            // On déclare un tableau qui contiendras les réponses au formulaire.
            $reponses = array();

            // On récupére les infos générales.          
            $infosGenerales = array('Nom', 'Prenom', 'Age', 'DateAncienneteGroupe', 'Entite', 'PosteActuel', 'DateAnciennetePoste', 'SalaireBrutMensuel', 'NomResponsable', 'DateEntretien');
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

                // On met ses données à jour.
                $formulaireDeveloppementProfessionnel->setFormulaire($reponses);
                $formulaireDeveloppementProfessionnel->setStatut($nextStatut[$formulaireDeveloppementProfessionnel->getStatut()]);
            }

            // On sauvegarde les changements en base de données. 
            $em->flush();

            // On redirige vers l'accueil.
            $request->getSession()->getFlashBag()->add('notice', "Vous avez correctement validé l'entretien.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        $this->exportToExcel($questions, $formulaireDeveloppementProfessionnel);

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

    // Export le formulaire d'entretien sous forme de fichier Excel.
    public function exportToExcel($questions, $entretien) {
        // On importe le module de traitement Excel.
        $root = $this->get('kernel')->getRootDir() . '\..';
        require_once $root . '\vendor\phpexcel\phpexcel\PHPExcel.php';

        // On récupére les réponses du formulaire de l'entretien.
        $answers = $entretien->getFormulaire();

        // Initialisation d'un nouvelle objet PHP Excel.
        $objPHPExcel = new \PHPExcel();

        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'AUTO EVALUATION');
        // On applique le fond bleu collaborateur au cellules.
        $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray(
                array(
                    'fill' => array(
                        'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => 'DAEEF3')
                    )
                )
        );
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'EVALUATION DU MANAGER');
        // On applique le fond bleu collaborateur au cellules.
        $objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray(
                array(
                    'fill' => array(
                        'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => 'D9D9D9')
                    )
                )
        );

        // Initialisation du compteur de ligne du tableau Excel.
        $line = 2;

        // Pour chaques questions du formulaire...
        foreach ($questions as $key => $question) {
            // Si une question Collaborateur existe...
            if (array_key_exists('Collaborateur', $question)) {
                // On écris le texte de la question sur la feuille Excel.
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $line, $question['Collaborateur']['Question']);

                // Si la question est de type Textuelle...
                if ($question['Collaborateur']['Type'] === 'Texte') {
                    // On attribut la réponse à la cellule.
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . ($line + 1), $answers[$key . '_Collaborateur']);
                }
                // Si la question est de type Sélection...
                elseif ($question['Collaborateur']['Type'] === 'Choix') {
                    // On attribut la valeur textuel associé à la réponse à la cellule.
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . ($line + 1), $question['Collaborateur']['Choix'][$answers[$key . '_Collaborateur']]);
                }

                // On applique le fond bleu collaborateur au cellules.
                $objPHPExcel->getActiveSheet()->getStyle('A' . $line . ':A' . ($line + 1))->applyFromArray(
                        array(
                            'fill' => array(
                                'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                                'color' => array('rgb' => 'DAEEF3')
                            )
                        )
                );

                // On redimensionne la colonne des cellules.
                $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
            }

            // Si une question Manager existe...
            if (array_key_exists('Manager', $question)) {
                // On écris le texte de la question sur la feuille Excel.
                $objPHPExcel->getActiveSheet()->setCellValue('B' . $line, $question['Manager']['Question']);

                // Si la question est de type Textuelle...
                if ($question['Manager']['Type'] === 'Texte') {
                    // On attribut la réponse à la cellule.
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . ($line + 1), $answers[$key . '_Manager']);
                }
                // Si la question est de type Sélection...
                elseif ($question['Manager']['Type'] === 'Choix') {
                    // On attribut la valeur textuel associé à la réponse à la cellule.
                    $objPHPExcel->getActiveSheet()->setCellValue('B' . ($line + 1), $question['Manager']['Choix'][$answers[$key . '_Manager']]);
                }

                // On applique le fond bleu collaborateur au cellules.
                $objPHPExcel->getActiveSheet()->getStyle('B' . $line . ':B' . ($line + 1))->applyFromArray(
                        array(
                            'fill' => array(
                                'type' => \PHPExcel_Style_Fill::FILL_SOLID,
                                'color' => array('rgb' => 'D9D9D9')
                            )
                        )
                );

                // On redimensionne la colonne des cellules.
                $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
            }

            // Si une question Neutre existe...
            if (array_key_exists('Neutre', $question)) {
                // On écris le texte de la question sur la feuille Excel.
                $objPHPExcel->getActiveSheet()->setCellValue('A' . $line, $question['Neutre']['Question']);

                // Si la question est de type Textuelle...
                if ($question['Neutre']['Type'] === 'Texte') {
                    // On attribut la réponse à la cellule.
                    $objPHPExcel->getActiveSheet()->setCellValue('A' . ($line + 1), $answers[$key . '_Neutre']);
                }

                // On joints les cellules de la colonne A et de la colonne B.
                $objPHPExcel->getActiveSheet()->mergeCells('A' . $line . ':B' . $line);

                // On redimensionne la colonne des cellules.
                $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
            }

            // On incrémente le compteur de ligne de 2 (1 pour la question et 1 pour la réponse).
            $line += 2;
        }

        // On sauvegarde le fichier Excel.
        $objWriter = new \PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('testExportExcelEntretie.xlsx');
    }

}
