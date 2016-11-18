<?php

namespace NoxIntranet\RessourcesBundle\Controller\QuestionnaireStress;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionnaireStressController extends Controller {

    // La liste des collaborateurs ayant déjà répondu au questionnaire.
    private $collaborateursExclu = array();

    function questionnaireAnswerAction(Request $request) {
        // On récupére le collaborateur actuel.
        $em = $this->getDoctrine()->getManager();
        $collaborateur = $this->get('security.context')->getToken()->getUser();

        // Si le collaborateur ne fait pas parti de NOX INGENIERIE...
        if (!$this->get('security.context')->isGranted('ROLE_USER') || empty($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername())) || !strstr($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername())->getEtablissement(), 'SA NOX INGENIERIE')) {
            // On affiche un message d'erreur et on redirige vers l'accueil.
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'avez pas accès à ce sondage ou vous l'avez déjà validé.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }
        // Sinon...
        else {
            // On récupère l'entité hiérarchique.
            $hierarchyEntity = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($collaborateur->getUsername());
        }

        // La liste des question avec leurs détails.
        $questions = array(
            1 => array('Label' => 'Durée hebdomadaire du travail', 'Question' => 'Vous arrive-t-il de travailler plus de 45 heures pas semaine ?'),
            2 => array('Label' => 'Travail en horaires atypiques', 'Question' => 'Etes vous soumis à des horaires de nuit, alternants ou décalés ?'),
            3 => array('Label' => 'Extension de la disponibilité en dehors des horaires de travail', 'Question' => 'Etes-vous contactés en dehors des horaires de travail pour des raisons professionnelles ?'),
            4 => array('Label' => 'Prévisibilité du planning et anticipation de son changement', 'Question' => "Connaissez vous suffisamment à l'avance les changements éventuels de votre planning de travail ?"),
            5 => array('Label' => 'Tensions avec le public', 'Question' => "Etes-vous confrontés à des situations de tension (avec des clients, fournisseurs, collègues de travail...) dont vous vous plaignez ?"),
            6 => array('Label' => "Confrontation à la souffrance d'autrui", 'Question' => "Dans le cadre de votre activité professionnelle, êtes-vous amenés à devoir traiter la situation de personnes en souffrance (physique, psychologique ou sociale) ?"),
            7 => array('Label' => "Maîtrise des émotions", 'Question' => "Dans votre travail, devez vous « faire bonne figure » en toutes circonstances (adopter une attitude bienveillante et disponible envers les autres) ?"),
            8 => array('Label' => "Autonomie dans la tâche", 'Question' => "Avez-vous des marges de manœuvre dans la manière de realiser votre travail dès lors que les objectifs sont atteints ?"),
            9 => array('Label' => "Autonomie temporelle", 'Question' => "Pouvez vous interrompre momentanément votre travail quand vous en ressentez le besoin (pauses de courte durée) ?"),
            10 => array('Label' => "Utilisation et développement des compétences", 'Question' => "Pouvez-vous utiliser vos compétences professionnelles et en développer de nouvelles ?"),
            11 => array('Label' => "Contraintes de rythmes de travail", 'Question' => "Etes-vous soumis à des contraintes de rythmes élevés imposés par des contraintes internes à l'entreprise (dépendance vis­à-vis du travail de collègues en amont ou en aval...) ou externes (demande des clients nécessitant une réponse immédiate ?"),
            12 => array('Label' => "Niveau de precision des objectifs de travail", 'Question' => "Vos objectifs sont-ils  clairement  définis ?"),
            13 => array('Label' => "Adéquation des objectifs de travail avec les moyens et l es responsabilités", 'Question' => "Les objectifs fixés sont-ils compatibles avec les moyens et responsabilités qui vous sont alloués pour les atteindre ?"),
            14 => array('Label' => "Compatibilité des instructions de travail entre elles", 'Question' => "Recevez-vous des instructions, des ordres ou demandes qui peuvent être contradictoires entre  eux ?", 'Details' => "Consignes différentes données par votre hiérarchie ou la clientèle, ou demandes antagonistes : par exemple, faire de la qualité rapidement, satisfaire les attentes personnalisées des clients dans un temps préétabli…"),
            15 => array('Label' => "Gestion de la polyvalence", 'Question' => "Etes-vous amenés à changer de tâches à l'improviste  pour répondre aux contraintes du moment ?"),
            16 => array('Label' => "Gestion de la polyvalence", 'Question' => "Etes-vous amenés à changer de postes ou de fonctions à l'improviste  pour répondre aux contraintes du moment ?"),
            17 => array('Label' => "Interruption dans le travail", 'Question' => "Etes-vous fréquemment interrompus au cours de votre travail par des tâches non prévues ?"),
            18 => array('Label' => "Soutien de la part des collègues", 'Question' => "Les relations entre collègues sont-elles bonnes (confiance, entraide, convivialité au sein des équipes) ?"),
            19 => array('Label' => "Soutien de la part des supérieurs hiérarchiques", 'Question' => "Recevez vous un soutien de la part de l'encadrement ?", 'Details' => "(disponibilité, des capacités d'écoute et d'action dont fait preuve l'encadrement face aux sollicitations des salariés : discuter d'un problème technique, régler des difficultés imprévues, arbitrer des intérêts divergents, modérer des conflits)."),
            20 => array('Label' => "Violence interne au travail", 'Question' => "Règne-t-il un climat de courtoisie et de respect mutuel entre collaborateurs de l'entreprise (absence de propos ou d'attitudes blessantes, discriminatoires...) ?"),
            21 => array('Label' => "Reconnaissance dans le travail", 'Question' => "Recevez vous des marques de reconnaissance de votre travail de la part de l'entreprise ?"),
            22 => array('Label' => "Qualité empêchée", 'Question' => "Considérez-vous que vous faites un travail de qualité ?"),
            23 => array('Label' => "Travail inutile", 'Question' => "Estimez-vous en général que votre travail est reconnu comme utile (à l’entreprise, aux clients) ?"),
            24 => array('Label' => "Insécurité socio-économique (emploi, salaire, carriere…)", 'Question' => "Etes-vous confrontés à des  incertitudes quant  au maintien de votre activité  dans les prochains mois ?"),
            25 => array('Label' => "Conduite du changement dans l’entreprise", 'Question' => "Les changements sont-ils suffisamment anticipés, accompagnés, et clairement expliqués ?"),
        );

        // La list des réponses.
        $reponses = array(
            1 => 'Jamais',
            2 => 'Parfois',
            3 => 'Souvent',
            4 => 'Toujours'
        );

        /* Génération du formulaire de réponse au questionnaire. */
        $formQuestionnaireStressBuilder = $this->createFormBuilder();
        foreach ($questions as $key => $question) {
            $formQuestionnaireStressBuilder->add($key, ChoiceType::class, array(
                'choices' => $reponses,
                'choice_label' => function($value) use ($reponses) {
                    return $value . ' - ' . $reponses[$value];
                },
                'placeholder' => 'Choisir une réponse'
            ));
            $formQuestionnaireStressBuilder->add('Commentaire_' . $key, TextareaType::class, array(
                'required' => false
            ));
        }
        $formQuestionnaireStressBuilder->add('Valider', SubmitType::class);
        $formQuestionnaireStress = $formQuestionnaireStressBuilder->getForm();

        /* Traitement du formulaire de réponse au questionnaire. */
        $formQuestionnaireStress->handleRequest($request);
        if ($formQuestionnaireStress->isValid()) {
            // On ouvre un nouveau fichier CSV.
            $fileLocation = $this->get('kernel')->getRootDir() . '/../web/Questionnaire Stress - ' . $hierarchyEntity->getEtablissement() . '.csv';
            $csvFile = fopen($fileLocation, 'w+');

            // Pour chaque questions...
            foreach ($questions as $key => $question) {
                $newLine = array($question['Question'], $formQuestionnaireStress->get($key)->getData(), $formQuestionnaireStress->get('Commentaire_' . $key)->getData()); // On récupére la question, la réponse et l'éventuel commentaire.
                fputcsv($csvFile, $newLine); // On écris ces données sur une nouvelle ligne du fichier.
            }

            // On ferme le fichier.
            fclose($csvFile);

            // On prépare un mail avec le fichier en pièce jointe.
            $message = \Swift_Message::newInstance()
                    ->setSubject('Questionnaire stress')
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo('t.besson@groupe-nox.com')
                    ->attach(\Swift_Attachment::fromPath($fileLocation))
            ;
            $this->get('mailer')->send($message);

            // On force l'envoi du mail (pour pouvoir supprimer le fichier).
            $spool = $this->container->get('mailer')->getTransport()->getSpool();
            $transport = $this->container->get('swiftmailer.transport.real');
            if ($spool and $transport) {
                $spool->flushQueue($transport);
            }

            // On supprime le fichier.
            unlink($fileLocation);

            // On redirige vers l'accueil et on affiche un message de confirmation.
            $request->getSession()->getFlashBag()->add('notice', "Vos réponses ont été prises en compte.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        return $this->render('NoxIntranetRessourcesBundle:QuestionnaireStress:questionnaire.html.twig', array('questionnaire' => $formQuestionnaireStress->createView(), 'questions' => $questions));
    }

}
