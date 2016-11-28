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

        // On récupére son entitée hiérarchique et le formulaire associé si il existe.  
        $collaborateurHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());
        $formulaireDeveloppementProfessionnel = $em->getRepository('NoxIntranetUserBundle:DeveloppementProfessionnel')->findOneBy(array('collaborateur' => $collaborateur, 'annee' => date('Y')));

        // Tableau qui associe le statut courant du formulaire à son valideur.
        $statutHierarchie = array(
            'Collaborateur' => $collaborateur,
            'N1' => $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $collaborateurHierarchy->getDA())[0], 'lastname' => explode(' ', $collaborateurHierarchy->getDA())[1]))->getUsername(),
            'N2' => $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $collaborateurHierarchy->getN2())[0], 'lastname' => explode(' ', $collaborateurHierarchy->getN2())[1]))->getUsername(),
            'DRH' => 'n.rigaudeau',
            'Synthèse' => 'n.rigaudeau'
        );

        // Si le formulaire existe déjà et l'utilisateur courant n'est pas le valideur correspondant au statut actuel du formulaire...
        if (!empty($formulaireDeveloppementProfessionnel) && $statutHierarchie[$formulaireDeveloppementProfessionnel->getStatut()] !== $valideur->getUsername()) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'êtes pas autorisé à accéder à ce formulaire.");
            return $this->redirectToRoute('nox_intranet_accueil');
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
                ))
                ->add('Prenom', TextType::class, array(
                    'data' => $collaborateur->getFirstname(),
                    'label' => 'Prénom : ',
                    'attr' => array(
                        'readonly' => 'readonly'
                    )
                ))
                ->add('Age', IntegerType::class, array(
                    'label' => 'Age : ',
                    'attr' => array(
                        'min' => 1
                    ),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Age']
                ))
                ->add("DateAncienneteGroupe", DateType::class, array(
                    'label' => "Date d'ancienneté Groupe : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? new \DateTime : $formulaireDeveloppementProfessionnel->getFormulaire()['DateAncienneteGroupe']
                ))
                ->add('Entite', TextType::class, array(
                    'label' => 'Entité : ',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['Entite']
                ))
                ->add('PosteActuel', TextType::class, array(
                    'label' => 'Poste actuel : ',
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['PosteActuel']
                ))
                ->add("DateAnciennetePoste", DateType::class, array(
                    'label' => "Date d'ancienneté dans le poste : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? new \DateTime : $formulaireDeveloppementProfessionnel->getFormulaire()['DateAnciennetePoste']
                ))
                ->add("SalaireBrutMensuel", IntegerType::class, array(
                    'label' => "Salaire brut mensuel : ",
                    'attr' => array(
                        'min' => 1
                    ),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['SalaireBrutMensuel']
                ))
                ->add('NomResponsable', TextType::class, array(
                    'label' => "Nom du responsable : ",
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()['NomResponsable']
                ))
                ->add("DateEntretien", DateType::class, array(
                    'label' => "Date de l'entretien : ",
                    'years' => range(date('Y') - 50, date('Y')),
                    'data' => empty($formulaireDeveloppementProfessionnel) ? new \DateTime : $formulaireDeveloppementProfessionnel->getFormulaire()['DateEntretien']
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
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Collaborateur']
                    ));
                }
                // Si la question est un choix...
                else {
                    // On ajoute une Select au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', ChoiceType::class, array(
                        'choices' => $question['Collaborateur']['Choix'],
                        'placeholder' => 'Choisir une réponse...',
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Collaborateur']
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
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Manager']
                    ));
                }
                // Si la question est un choix...
                else {
                    // On ajoute une Select au formulaire.
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', ChoiceType::class, array(
                        'choices' => $question['Manager']['Choix'],
                        'placeholder' => 'Choisir une réponse...',
                        'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Manager']
                    ));
                }
            }
            // Si il existe une question Neutre...
            if (array_key_exists('Neutre', $question)) {
                // On ajoute un Textarea au formulaire.
                $formDeveloppementProfessionnelBuilder->add($key . '_Neutre', TextareaType::class, array(
                    'data' => empty($formulaireDeveloppementProfessionnel) ? null : $formulaireDeveloppementProfessionnel->getFormulaire()[$key . '_Neutre']
                ));
            }
        }
        $formDeveloppementProfessionnel = $formDeveloppementProfessionnelBuilder->getForm();

        /* Traitement du formulaire */
        $formDeveloppementProfessionnel->handleRequest($request);
        if ($formDeveloppementProfessionnel->isValid()) {
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
                //$newDeveloppementProfessionnel->setStatut('N1');
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

            return $this->redirectToRoute('nox_intranet_accueil');
        }

        return $this->render('NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig', array('formulaireDevellopementProfessionnel' => $formDeveloppementProfessionnel->createView(), 'questions' => $questions));
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

}
