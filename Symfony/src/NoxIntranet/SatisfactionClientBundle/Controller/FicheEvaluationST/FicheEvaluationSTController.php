<?php

namespace NoxIntranet\SatisfactionClientBundle\Controller\FicheEvaluationST;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\SatisfactionClientBundle\Entity\InfoEffectuerFicheEvaluationST;
use NoxIntranet\SatisfactionClientBundle\Entity\FicheEvaluationST;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;

class FicheEvaluationSTController extends Controller {
    /* Formulaire d'informations pour pouvoir une remplir une fiche d'evaluation des ST. */

    public function infoEffectuerFicheEvaluationSTAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        /* Création de l'entité infoEffectuerFicheEvaluationST */
        // On initialise l'entité.
        $infoEffectuerFicheEvaluationST = new InfoEffectuerFicheEvaluationST();

        /* Génération du formulaire d'information */
        // On met en relation le formulaire et l'entité infoEffectuerFicheEvaluationST.
        $formInfoEffectuerFicheEvaluationST = $this->get('form.factory')->createNamedBuilder('formInfoEffectuerFicheEvaluationST', 'form', $infoEffectuerFicheEvaluationST)
                // On ajoute les champs du formulaire et leur type.
                ->add('Agence', TextType::class)
                ->add('NumAffaire', TextType::class)
                ->add('IntituleAffaire', TextType::class)
                ->add('NomST', TextType::class)
                ->add('SiretST', IntegerType::class)
                ->add('DenominationSocialeST', TextType::class)
                ->add('EmailCA', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        // Traitement du formulaire
        $formInfoEffectuerFicheEvaluationST->handleRequest($request);

        /* Vérification des contraintes du formulaire */
        // Si le formulaire est valide.
        if ($formInfoEffectuerFicheEvaluationST->isValid()) {
            // Pour qu'il soit valide il faut vérifier :
            // Si le numéro d'affaire saisi est déjà utilisé, car on souhaite que chaque évaluation soit unique à une affaire passée avec le sous-traitants.
            // Pour cela on va rechercher dans le repository de l'entité InfoEffectuerFicheEvaluationST.
            // On fait un findByNumAffaire pour trouver tous les numéros d'affaires éxistants, puis on récupère toutes les données associées au champs 'NumAffaire' du formulaire.
            // Si le numéro d'affaire a été trouvé dans le repository.
            if (!empty($em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEffectuerFicheEvaluationST')->findByNumAffaire($formInfoEffectuerFicheEvaluationST->getData()->getNumAffaire()))) {
                // On récupère la session actuelle et on affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', "Le numéro de l'affaire indiqué est déjà utilisé pour une autre évaluation des sous-traitants.");
            }
            // Si l'email est valide.
            // Pour cela, on utilise un des filtres de PHP qui permet de vérifier la validité d'une adresse de courriel (Ce filtre s'appui selon la syntaxe défini par la structure RFC 822).
            elseif (!filter_var($formInfoEffectuerFicheEvaluationST->getData()->getEmailCA(), FILTER_VALIDATE_EMAIL)) {
                // L'adresse mail est invalide, alors on affiche un message d'erreur sur la session actuelle.
                $request->getSession()->getFlashBag()->add('noticeErreur', "L'email fourni n'est pas valide !");
            }
            // Si tout est correcte.
            else {
                // On attribut le nom de l'utilisateur courant comme evaluateur.
                $infoEffectuerFicheEvaluationST->setEvaluateur($this->get('security.token_storage')->getToken()->getUser()->getUsername());

                // On génére aléatoirement une clé unique pour l'évaluation en cours, qu'on appellera cleEffectuerFicheEvaluationST.
                $cleEffectuerFicheEvaluationST = md5(uniqid(rand(), true));
                // Tant que cette clé ne se trouve pas dans le repository de InfoEffectuerFicheEvaluationST.
                while (!empty($em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEffectuerFicheEvaluationST')->findOneByCleEffectuerFicheEvaluationST($cleEffectuerFicheEvaluationST))) {
                    // La clé générée aléatoirement peut donc être attribuée à l'évaluation en cours.
                    $cleEffectuerFicheEvaluationST = md5(uniqid(rand(), true));
                }

                // On ajoute au formulaire d'informations en cours, la clé unique créée.
                $infoEffectuerFicheEvaluationST->setCleEffectuerFicheEvaluationST($cleEffectuerFicheEvaluationST);

                // On récupére l'entité du CA en fonction de l'adresse email passée en parametre et on l'attribut à la demande.
                $CA = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername(trim(str_replace('@groupe-nox.com', '', $formInfoEffectuerFicheEvaluationST->getData()->getEmailCA())));
                $infoEffectuerFicheEvaluationST->setCA($CA->getUsername());

                // On affiche un message de confirmation à la session actuelle.
                $request->getSession()->getFlashBag()->add('notice', 'Informations enrengistrés');

                // On sauvegarde les données du formulaire d'informations de la fiche d'évaluation ST en base de donnée.
                $em->persist($infoEffectuerFicheEvaluationST);
                $em->flush();

                // On redirige vers le la fiche d'évaluation avec la clé unique associée.
                return $this->redirectToRoute('nox_intranet_fiche_evaluation_st', array('cleEffectuerFicheEvaluationST' => $infoEffectuerFicheEvaluationST->getCleEffectuerFicheEvaluationST()));
            }
        }

        // La méthode infoEffectuerFicheEvaluationSTAction retourne le template infoEffectuerFicheEvaluationST.html.twig, avec en paramètre le formulaire formInfoEffectuerFicheEvaluationST qu'on a initialisé.
        return $this->render('NoxIntranetSatisfactionClientBundle:FicheEvaluationST:infoEffectuerFicheEvaluationST.html.twig', array('formInfoEffectuerFicheEvaluationST' => $formInfoEffectuerFicheEvaluationST->createView()));
    }

    /* Fiche d'évaluation des sous-traitants */

    public function ficheEvaluationSTAction(Request $request, $cleFicheEvaluation) {
        $em = $this->getDoctrine()->getManager();

        // Création d'une liste de question avec leurs détails.
        $questions = array(
            1 => array('Question' => 'Conformité de la prestation'),
            2 => array('Question' => "Compétences techniques de l'équipe projet"),
            3 => array('Question' => 'Qualité des livrables'),
            4 => array('Question' => "Qualité des moyens et matériels utilisés"),
            5 => array('Question' => "Respect des exigences contractuelles"),
            6 => array('Question' => "Clarté des devis (décomposition des coûts claire et précise)"),
            7 => array('Question' => "Respect des prix négociés"),
            8 => array('Question' => "Niveau de prix par rapport aux concurrents"),
            9 => array('Question' => "Souplesse dans les conditions de paiement"),
            10 => array('Question' => "Aptitude à planifier"),
            11 => array('Question' => "Respect des délais contractuels"),
            12 => array('Question' => "Réactivité en cas d'urgence"),
            13 => array('Question' => "Disponibilité de l'équipe projet"),
            14 => array('Question' => "Professionnalisme des intervenants"),
            15 => array('Question' => "Esprit d'équipe des intervenants"),
        );

        /* Génération du formulaire de réponse au questionnaire */
        $formFicheEvaluationSTBuilder = $this->createFormBuilder();

        // Pour toute les questions, chacune d'entre elle, est associées à une clé.
        foreach ($questions as $key => $question) {
            // On ajoute les choix de réponses possibles pour chaque question.
            $formFicheEvaluationSTBuilder->add($key, ChoiceType::class, array(
                'choices' => array(
                    "Sans objet" => 'Sans objet',
                    "Innacceptable" => 'Innacceptable',
                    "Insatisfait" => 'Insatisfait',
                    "Satisfait" => 'Satisfait',
                    "Très satisfait" => 'Très satisfait'
                ),
                'expanded' => true
            ));
        }
        $formFicheEvaluationSTBuilder->add('Valider', SubmitType::class);

        // Génération du formulaire.
        $formFicheEvaluationST = $formFicheEvaluationSTBuilder->getForm();

        /* Traitement du formulaire de réponse au questionnaire */
        $formFicheEvaluationST->handleRequest($request);
        if ($formFicheEvaluationST->isValid()) {
            /*
              // On créer un nouveau fichier CSV, on lui passe en paramètre un nom et l'extension du fichier csv.
              $fileLocation = $this->get('kernel')->getRootDir() . "/../web/Fiche d'évaluation ST - " . '.csv';
              // On ouvre le fichier.
              $csvFile = fopen($fileLocation, 'w+');

              // On écrit dans le fichier toute les questions et leurs choix.
              // Pour chaque question.
              foreach ($questions as $key => $question) {
              // On défini une nouvelle ligne, on récupère la question et sa réponse.
              $newLine = array($question['Question'], $formFicheEvaluationST->get($key)->getData());
              // On écris ces données sur la nouvelle ligne en cours.
              fputcsv($csvFile, $newLine, ';');
              }

              // On ferme le fichier.
              fclose($csvFile);
             */

            // Récupération des réponses dans un tableau de questions/réponses.
            $fiche_evaluation_reponses = array();
            foreach ($questions as $key => $question) {
                $fiche_evaluation_reponses[$key] = array('Question' => $question, 'Reponse' => $formFicheEvaluationST->get($key)->getData());
            }

            // Création d'un fiche d'évalutation à laquelle on attribut l'évaluateur, les guestions/réponses et les informations du sous-traitant.
            $ficheEvaluationST = new FicheEvaluationST();
            $ficheEvaluationST->setEvaluateur($this->get('security.token_storage')->getToken()->getUser()->getUsername());
            $ficheEvaluationST->setCleFicheEvaluation($cleFicheEvaluation);
            $ficheEvaluationST->setQuestionsReponses($fiche_evaluation_reponses);

            // On sauvegarde les données du formulaire d'informations de la fiche d'évaluation ST en base de donnée.
            $em->persist($ficheEvaluationST);
            $em->flush();

            // On récupére les informations sur la fiche d'évalutation et sur l'évaluateur.
            $infoFicheEvaluationST = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEffectuerFicheEvaluationST')->findOneByCleEffectuerFicheEvaluationST($cleFicheEvaluation);
            $evaluateur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($infoFicheEvaluationST->getEvaluateur());

            // On prépare un mail avec le fichier en pièce jointe.
            $message = \Swift_Message::newInstance()
                    ->setSubject("Fiche d'évaluation sous-traitant")
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo('g.toure@groupe-nox.com')
                    //->attach(\Swift_Attachment::fromPath($fileLocation))
                    ->setBody(
                    // On retourne le template de l'email sendMailToRQ.html.twig
                    $this->renderView('Emails/FicheEvaluationST/sendMailToRQ.html.twig', array('InfoFicheEvaluation' => $infoFicheEvaluationST, 'Evaluateur' => $evaluateur)
                    ), 'text/html'
            );
            $this->get('mailer')->send($message);

            // On force l'envoi du mail.
            $spool = $this->container->get('mailer')->getTransport()->getSpool();
            $transport = $this->container->get('swiftmailer.transport.real');
            if ($spool and $transport) {
                $spool->flushQueue($transport);
            }

//            $im = imagegrabscreen();
//            imagepng($im, "myscreenshot.png");
//            imagedestroy($im);

            $this->sendMailToCA($cleFicheEvaluation);


            // On redirige vers l'accueil et on affiche un message de confirmation.
            $request->getSession()->getFlashBag()->add('notice', "Votre évaluation a bien été effectuée.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        // La méthode ficheEvaluationSTAction retourne le template ficheEvaluationST.html.twig, avec en paramètre le formulaire ficheEvaluationST qu'on a initialisé et les questions.
        return $this->render('NoxIntranetSatisfactionClientBundle:FicheEvaluationST:ficheEvaluationST.html.twig', array('ficheEvaluationST' => $formFicheEvaluationST->createView(), 'questions' => $questions));
    }

    private function sendMailToCA($cleFicheEvaluation) {

        // On récupére les entitées de la demande et du demandeur.
        $em = $this->getDoctrine()->getManager();
        $envoi = $em->getRepository('NoxIntranetSatisfactionClientBundle:FicheEvaluationST')->findOneByCleFicheEvaluation($cleFicheEvaluation);
        $infoFicheEvaluation = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEffectuerFicheEvaluationST')->findOneByCleEffectuerFicheEvaluationST($cleFicheEvaluation);
        $evaluateur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($envoi->getEvaluateur());

        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject("Fiche d'évaluation completé")
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($envoi->getEmailCA())
                ->setBody(
                $this->renderView(
                        'Emails/FicheEvaluationST/sendMailToCA.html.twig', array('envoi' => $envoi, 'evaluateur' => $evaluateur)
                ), 'text/html'
        );

        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    /* Tableau de bord qui permet de consulter toutes les fiches qui ont été effectuées */

    public function consulterFicheEvaluationSTAction(Request $request, $page, $orderTime) {
        $em = $this->getDoctrine()->getManager();

        // On créer la variable de recherche et on lui donne la valeur de 'search' pour qu'on puisse récupérer celle-ci.
        $search = $request->get('search');

        /* Génération du formulaire de recherche */
        $formSearch = $this->createFormBuilder()
                ->add('searchText', SearchType::class, array('data' => $search, 'required' => false))
                ->add('searchButton', SubmitType::class)
                ->add('resetButton', SubmitType::class)
                ->add('searchDetailedButton', SubmitType::class)
                ->getForm();
        $formSearch->handleRequest($request);

        /* Traitement du formulaire de recherche */
        // Si le formulaire est valide.
        if ($formSearch->isValid()) {
            // Si on clique sur le bouton de recherche.
            if ($formSearch->get('searchButton')->isClicked()) {
                // On retourne la page de consultation de la fiche d'évaluation ST,
                // avec en paramètre les variables $page, $orderTime actuelles et $formSearch a qui on a récupéré les données entrés dans le champs 'searchText' du formulaire de recherche.
                return $this->redirectToRoute('nox_intranet_consulter_fiche_evaluation_st', array('page' => $page, 'orderTime' => $orderTime, 'search' => $formSearch->get('searchText')->getData()));
            }
            // Si on clique sur le bouton de réinitialisation de la recherche.
            elseif ($formSearch->get('resetButton')->isClicked()) {
                // On retourne la page de consultation de la fiche d'évaluation ST.
                return $this->redirectToRoute('nox_intranet_consulter_fiche_evaluation_st', array('orderTime' => $orderTime));
            }
        }
        // Alors, on récupére les entités infoEffectuerFicheEvaluationST des envois.

        /* On veut afficher les entités par une demande spécifique */
        // Pour cela, on vérifie,
        // Si la variable search n'a aucune valeur 'search' entrée (Si la variable search n'est pas égale à rien).
        if ($search !== '') {
            // On créer une requête, qui va triée toutes les entités infoEffectuerFicheEvaluationST, on lui nomme une variable qu'on appelle $envois.
            $envois = $em->createQueryBuilder()
                    // On donne une valeur qu'on appelle 'texte' qui correspond à la donnée entrée dans le champs 'searchText' du formulaire de recherche.
                    ->select('texte')
                    ->from('NoxIntranetRessourcesBundle:InfoEffectuerFicheEvaluationST', 'texte')
                    // On tri les entités selon leur numéro d'affaire.
                    ->where('texte.numAffaire LIKE :search')
                    // Mais on garde le tri choisi de l'ordre par la date.
                    ->orderBy('texte.dateEvaluation', $orderTime)
                    ->setParameters(array('search' => '%' . $search . '%'))
                    ->getQuery()
                    ->getResult();
        }
        // Si tout est bon, on affiche les entités.

        /* Si on ne recherche pas de demande spécifique */ else {
            // On affiche les entités infoEffectuerFicheEvaluationST des envois selon l'ordre choisi de leur date d'évaluation.
            $envois = $em->getRepository('NoxIntranetRessourcesBundle:InfoEffectuerFicheEvaluationST')->findBy(array(), array('dateEvaluation' => $orderTime));
        }

        /* On récupère les évaluations ST et leurs infos */
        // On les places dans un tableau avec pour clé leur valeur de CleEffectuerFicheEvaluationST.
        $fichesEvaluationST = array();

        // Pour toutes les évaluations trouvées dans le repository de l'entité InfoEffectuerFicheEvaluationST.
        foreach ($em->getRepository('NoxIntranetRessourcesBundle:InfoEffectuerFicheEvaluationST')->findAll() as $ficheEvaluationST) {
            // On récupère leurs clés et leurs évaluateurs.
            $fichesEvaluationST[$ficheEvaluationST->getCleEffectuerFicheEvaluationST()][$ficheEvaluationST->getEvaluateur()] = $ficheEvaluationST;
        }
        // On découpe le tableau des envois en sous-tableau pour mettre en place une pagination.
        $envois10 = array_chunk($envois, 10);

        // On retourne le template controlBoardFicheEvaluationST.html.twig
        return $this->render('NoxIntranetRessourcesBundle:FicheEvaluationST:controlBoardFicheEvaluationST.html.twig', array(
                    'envois' => $envois10, 'fichesEvaluationST' => $fichesEvaluationST, 'page' => $page, 'orderTime' => $orderTime, 'search' => $search, 'formSearch' => $formSearch->createView()));
    }

    //Affiche un résumé contant les informations sur l'évaluation associées à la clé de l'évaluation passée en paramêtre.
    public function infoFicheEvaluationSTSummaryAction($cleEffectuerFicheEvaluationST) {
        // On récupére les entitées de l'évaluation.
        $em = $this->getDoctrine()->getManager();
        $envoi = $em->getRepository('NoxIntranetRessourcesBundle:InfoEffectuerFicheEvaluationST')->findOneByCleEffectuerFicheEvaluationST($cleEffectuerFicheEvaluationST);
        // On return le template infoFicheEvaluationSTSumary
        return $this->render('NoxIntranetRessourcesBundle:FicheEvaluationST:infoFicheEvaluationSTSummary.html.twig', array('envoi' => $envoi));
    }

}
