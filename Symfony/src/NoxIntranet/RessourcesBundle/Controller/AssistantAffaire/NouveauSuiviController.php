<?php

namespace NoxIntranet\RessourcesBundle\Controller\AssistantAffaire;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\RessourcesBundle\Entity\Suivis;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NouveauSuiviController extends Controller {

    // Remplace les caractères accentué d'une chaine par leur version sans accent.
    public function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

    // Affiche la page de séléction du status des suivis.
    public function accueilAssistantAffaireAction() {
        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\NouveauSuivi:assistantaffaireaccueil.html.twig');
    }

    // Fonction de création d'un nouveau suivi d'affaire.
    public function creationSuiviAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        // Formulaire pour remplir les données du nouveau suivi.
        $suivi = new Suivis();
        $form = $this->get('form.factory')->createBuilder('form', $suivi)
                ->add('Nom', 'text')
                ->add('Agence', 'text')
                ->add('NumeroGX', TextType::class)
                ->add('Profil', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'Nom',
                ))
                ->add('Créer', 'submit')
                ->getForm();
        $form->handleRequest($request);


        // Si le formulaire est valide...
        if ($form->isValid()) {
            // ...Si un suivi avec le même nom n'existe pas déjà...
            if ($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByNom($form['Nom']->getData()) == null) {
                // ...Si un suivi avec le même numéro GX n'existe pas déjà...
                if ($em->getRepository('NoxIntranetRessourcesBundle:Suivis')->findByNumeroGX($form['NumeroGX']->getData()) == null) {
                    // ...On crée le nouveau suivi.
                    $suivi->setNom($form['Nom']->getData());
                    $suivi->setAgence($form['Agence']->getData());
                    $suivi->setNumeroGX($form['NumeroGX']->getData());
                    $suivi->setProfil($form['Profil']->getData()->getNom());
                    $suivi->setIdModele(null);
                    $suivi->setStatut('En cours');
                    $em->persist($suivi);
                    $em->flush();

                    // On récupère l'ID du nouveau suivi.
                    $IdSuivi = $suivi->getId();

                    $request->getSession()->getFlashBag()->add('notice', 'Le suivi ' . $form['Nom']->getData() . ' a été créé.');

                    // On redirige vers le choix du modèle d'affaire en fonction de l'ID du suivi.
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_modele', array('IdSuivi' => $IdSuivi));
                }
                // ...Sinon on afficghe un message d'erreur.
                else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le numéro GX ' . $form['NumeroGX']->getData() . ' est déjà attribué !');
                }
            }
            // ...Sinon on afficghe un message d'erreur.
            else {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Le nom ' . $form['Nom']->getData() . ' est déjà attribué !');
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\NouveauSuivi:assistantaffairecreation.html.twig', array('form' => $form->createView()));
    }

    // Séléction du modèle pour les nouveaux suivis.
    public function creationSuiviChoixModeleAction(Request $request, $IdSuivi) {

        // On récupére le suivi en fonction de l'ID passé en paramêtre.
        $em = $this->getDoctrine()->getManager();
        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        // On récupére les modèle de suivi en fonction du profil du suivi.
        $profil = $suivi->getProfil();
        $Fichier_Suivi = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->findByProfil($profil);

        // Si il existe des modèles pour le profil du suivi.
        if (!empty($Fichier_Suivi)) {
            // On génére un formulaire de séléction du modèle.
            $form = $this->get('form.factory')->createBuilder('form', $suivi)
                    ->add('IdModele', EntityType::class, array(
                        'class' => 'NoxIntranetAdministrationBundle:Fichier_Suivi',
                        'query_builder' => function (EntityRepository $er) use ($profil) {
                            return $er->createQueryBuilder('u')
                                    ->where("u.profil = '" . $profil . "'")
                                    ->orderBy('u.chemin', 'ASC');
                        },
                        'choice_label' => function($value) {
                            return pathinfo($value->getChemin(), PATHINFO_FILENAME);
                        }
                    ))
                    ->add('Choisir', 'submit')
                    ->getForm();
        }
        // Si il n'existe aucun modèle pour le profil séléctionné.
        else {
            // On affiche un message d'erreur et on redirige vers la création du suivi.
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Il n\'y a aucun modèle disponible pour ce profil de suivi !');
            return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_client');
        }

        // Si le formulaire de choix de modèle est valide.
        $form->handleRequest($request);
        if ($form->isValid()) {
            // Attribut le modèle au suivi.
            $suivi->setIdModele($form['IdModele']->getData()->getId());

            // On sauvegarde le suivi en base de donnée.
            $em->persist($suivi);
            $em->flush();

            // On redirige vers le choix du client.
            return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_client', array('IdSuivi' => $IdSuivi));
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\NouveauSuivi:assistantaffairecreationchoixmodele.html.twig', array('form' => $form->createView(), 'profil' => $profil));
    }

    // Séléction du client pour les nouveaux suivis.
    public function creationSuiviChoixClientAction(Request $request, $IdSuivi) {

        // On récupére le suivi courant.
        $em = $this->getDoctrine()->getManager();
        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        // On récupére la liste des clients.
        $critere = '';
        $clients = $em->getRepository("NoxIntranetRessourcesBundle:AA_Client")->createQueryBuilder('o')
                ->where('o.nomClient LIKE :critere')
                ->setParameter('critere', "%" . $critere . "%")
                ->getQuery()
                ->getResult();

        // On génére un formulaire de séléction de client.
        $formClient = $this->get('form.factory')->createNamedBuilder('formClient', 'form', $suivi)
                ->add('noClient', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:AA_Client',
                    'choices' => $clients,
                    'choice_label' => 'Nom_Client',
                    'choice_value' => 'N_Client',
                    'choice_attr' => array(
                        'title' => function($value) {
                            return $value;
                        }
                    )
                ))
                ->add('Choisir', SubmitType::class)
                ->getForm();

        // On génére un formulaire de création de nouveau client.
        $formAjoutClient = $this->get('form.factory')->createNamedBuilder('formAjoutClient', 'form')
                ->add('Nom_Client', TextType::class)
                ->add('Tel', TextType::class)
                ->add('Fax', TextType::class)
                ->add('Email', TextType::class)
                ->add('Nom_Ville', TextType::class)
                ->add('Nom_Pays', TextType::class)
                ->add('Code_Postal', IntegerType::class)
                ->add('Adresse1', TextType::class)
                ->add('Adresse2', TextType::class)
                ->add('Adresse3', TextType::class)
                ->add('Ajouter', SubmitType::class)
                ->getForm();

        // On traite le formulaire de séléction de client.
        if ($request->request->has('formClient')) {
            $formClient->handleRequest($request);
            if ($formClient->isValid()) {
                if ($formClient['Choisir']->isClicked()) {
                    // On attribut le client séléctionner au suivi.
                    $suivi->setNoClient($formClient['noClient']->getData()->getNClient());
                    // On sauvegarde le suivi en base de données.
                    $em->persist($suivi);
                    $em->flush();
                    // On redirige vers le choix de l'interlocuteur.
                    return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_interlocuteur', array('IdSuivi' => $IdSuivi));
                }
            }
        }

        // On traite le formulaire d'ajout de nouveau client.
        if ($request->request->has('formAjoutClient')) {
            $formAjoutClient->handleRequest($request);

            // On génére un script pour ajouter le nouveau client à la base de données GX.
            if ($formAjoutClient->isValid()) {

                // On récupére le chemin du serveur.
                $root = $this->container->getParameter('kernel.root_dir') . '\..';

                // On récupére les variables du formulaire et on remplace les valeurs accentués par leur équivalent sans accent (pour l'encodage en base de donnée).
                $Nom_Client = $this->wd_remove_accents($formAjoutClient['Nom_Client']->getData());
                $Tel = $this->wd_remove_accents($formAjoutClient['Tel']->getData());
                $Fax = $this->wd_remove_accents($formAjoutClient['Fax']->getData());
                $Email = $this->wd_remove_accents($formAjoutClient['Email']->getData());
                $Nom_Ville = $this->wd_remove_accents($formAjoutClient['Nom_Ville']->getData());
                $Nom_Pays = $this->wd_remove_accents($formAjoutClient['Nom_Pays']->getData());
                $Code_Postal = $this->wd_remove_accents($formAjoutClient['Code_Postal']->getData());
                $Adresse1 = $this->wd_remove_accents($formAjoutClient['Adresse1']->getData());
                $Adresse2 = $this->wd_remove_accents($formAjoutClient['Adresse2']->getData());
                $Adresse3 = $this->wd_remove_accents($formAjoutClient['Adresse3']->getData());

                $fichierSQLCreationClient = fopen($root . "\scripts\SQL\InsertClientIntoGXDB.sql", "w+"); // On ouvre le fichier SQL de création de client ou on le crée si il n'existe pas.
                // On écris la requête SQL de création de client avec les paramêtres du formulaire.
                $sqlClient = "SET NOCOUNT ON\n";
                $sqlClient .= "INSERT INTO CLIENT (Nom_Client, Prospect) VALUES ('" . $Nom_Client . "','non');\n";
                $sqlClient .= "SELECT SCOPE_IDENTITY();\n";
                $sqlClient .= "GO";

                fwrite($fichierSQLCreationClient, $sqlClient); // On insert la requête dans le fichier SQL de création de client.
                fclose($fichierSQLCreationClient); // On ferme le fichier SQL de création de client.
                $N_Client = null; // On initialise la variable qui contiendras le numéro du client.
                exec($root . "\scripts\AddClientToGXDB.bat", $N_Client); // On execute le script de la requette SQL.
                $N_Client = intval(str_replace(' ', '', $N_Client[0])); // On récupère la valeur 'N_Client' du nouveau client.

                $fichierSQLCreationAdresse = fopen($root . "\scripts\SQL\InsertClientAdrIntoGXDB.sql", "w+"); // On ouvre le fichier SQL de création d'adresse ou on le crée si il n'existe pas.                                    
                //                
                // On écris la requête SQL de création d'adresse avec les paramêtres du formulaire.
                $sqlAdresse = "SET NOCOUNT ON\n";
                $sqlAdresse .= "INSERT INTO CLIENTADR (N_Client, Tel, Fax, Email, Nom_Ville, Nom_Pays, Code_Postal, Adresse1, Adresse2, Adresse3, AdrPrincipale) VALUES (" . $N_Client . ",'" . $Tel . "', '" . $Fax . "', '" . $Email . "', '" . $Nom_Ville . "', '" . $Nom_Pays . "', '" . $Code_Postal . "', '" . $Adresse1 . "', '" . $Adresse2 . "', '" . $Adresse3 . "', 'oui');\n";
                $sqlAdresse .= "GO";
                fwrite($fichierSQLCreationAdresse, $sqlAdresse); // On insert la requête dans le fichier SQL de création d'adresse.
                fclose($fichierSQLCreationAdresse); // On ferme le fichier SQL de création d'adresse.
                exec($root . "\scripts\AddClientAdrToGXDB.bat"); // On execute le script de la requette SQL.
                exec($root . "\scripts\GXDataUpdating.bat"); // On met à jours la base de données de l'intranet depuis celle de GX.

                $suivi->setNoClient($N_Client); // On attribut le nouveau client au suivi.
                // On sauvegarde le suivi en base de données.
                $em->persist($suivi);
                $em->flush();

                // On redirige vers le choix de l'interlocuteur.
                return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_choix_interlocuteur', array('IdSuivi' => $IdSuivi));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\NouveauSuivi:assistantaffairecreationchoixclient.html.twig', array('formClient' => $formClient->createView(), 'formAjoutClient' => $formAjoutClient->createView(), 'IdSuivi' => $IdSuivi));
    }

    // Récupére la liste des clients en fonction de la recherche passé en paramêtre.
    public function ajaxClientGetterAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $listeClients = array();

        if ($request->isXmlHttpRequest()) {
            // On récupére le terme de la recherche.
            $critere = $request->get('critere');

            // On récupére les clients en fonction du critère de recherche.
            $clients = $em->getRepository("NoxIntranetRessourcesBundle:AA_Client")->createQueryBuilder('o')
                    ->where('o.nomClient LIKE :critere')
                    ->setParameter('critere', "%" . $critere . "%")
                    ->orderBy('o.nomClient') // On trie la liste par ordre alphabetique des noms des clients.
                    ->getQuery()
                    ->getResult();

            // On crée la liste de clients à retourner.
            foreach ($clients as $client) {
                $listeClients[] = array('numero' => $client->getNClient(), 'nom' => $client->getNomClient());
            }
        }

        // On encode la liste des clients et on la retourne.
        $response = new Response(json_encode($listeClients));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    // Récupére les adresses associées au client.
    public function ajaxClientAdrGetterAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        // On initialise un tableau qui contiendras les adresses associées au client.
        $resultatsAdresse = array();

        if ($request->isXmlHttpRequest()) {
            // On récupére le numéro du client.
            $nclient = $request->get('NClient');

            // On récupére les adresses associées au client.
            $coordonnees = $em->getRepository("NoxIntranetRessourcesBundle:AA_Client_Adr")->createQueryBuilder('o')
                    ->where('o.nClient LIKE :nclient')
                    ->setParameter('nclient', $nclient)
                    ->getQuery()
                    ->getResult();

            // On remplis le tableau des adresses avec les adresses.
            $i = 0;
            foreach ($coordonnees as $coordonnee) {
                // Pour chaque données on remplace supprime les éventuels chaîne de charactère 'NULL'.
                $resultatsAdresse[$i]['Adresse'] = str_replace('NULL', "", $coordonnee->getAdresse1()) . " " . str_replace('NULL', "", $coordonnee->getAdresse2()) . " " . str_replace('NULL', "", $coordonnee->getAdresse3());
                $resultatsAdresse[$i]['Fax'] = str_replace('NULL', "", $coordonnee->getFax());
                $resultatsAdresse[$i]['Commune'] = str_replace('NULL', "", $coordonnee->getNomVille());
                $i++;
            }
        }

        // On retourne le tableau des adresses.
        $response = new Response(json_encode($resultatsAdresse));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    // Séléction d'un interlocuteur pour les nouveaux suivis.
    public function creationSuiviChoixInterlocuteurAction(Request $request, $IdSuivi) {

        // On récupére le suivi en fonction de l'ID passé en paramêtre.
        $em = $this->getDoctrine()->getManager();
        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        // On récupére le numéro du client.
        $noClient = $suivi->getNoClient();

        // On génére le formulaire de séléction de l'interlocuteur en fonction du client.
        $formSelectionInterlocuteur = $this->get('form.factory')->createNamedBuilder('formSelectionInterlocuteur', 'form', $suivi)
                ->add('NoInterlocuteur', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:AA_Contact',
                    'query_builder' => function(EntityRepository $er) use ($noClient) {
                        return $er->createQueryBuilder('a')
                                ->where('a.nClient = :noClient')
                                ->setParameter('noClient', $noClient);
                    },
                    'choice_value' => function($value) {
                        return $value->getNContact();
                    },
                    'choice_label' => function($value) {
                        return $value->getPrenomContact() . ' ' . $value->getNomContact();
                    },
                ))
                ->add('Choisir', SubmitType::class)
                ->getForm();

        // On génére un formulaire de création de nouvelle interlocuteur.
        $formAjoutInterlocuteur = $this->get('form.factory')->createNamedBuilder('formAjoutInterlocuteur', 'form')
                ->add('Nom_Contact', TextType::class)
                ->add('Prenom_Contact', TextType::class)
                ->add('Titre', ChoiceType::class, array(
                    'choices' => array('Monsieur' => 'Monsieur', 'Madame' => 'Madame'),
                    'expanded' => true
                ))
                ->add('Nom_Ville', TextType::class)
                ->add('Nom_Pays', TextType::class)
                ->add('Code_Postal', IntegerType::class)
                ->add('Ligne_Directe', TextType::class)
                ->add('Portable', TextType::class)
                ->add('Fax', TextType::class)
                ->add('Ajouter', SubmitType::class)
                ->getForm();

        // On traite le formulaire de séléction de l'interlocuteur.
        if ($request->request->has('formSelectionInterlocuteur')) {
            $formSelectionInterlocuteur->handleRequest($request);
            if ($formSelectionInterlocuteur->isValid()) {
                // On attribut l'interlocuteur au suivi.
                $suivi->setNoInterlocuteur($formSelectionInterlocuteur->get('NoInterlocuteur')->getData()->getNContact());
                // On sauvegarde le suivi en base de donnée.
                $em->persist($suivi);
                $em->flush();
                // On redirige vers le remplissage des informations du suivi.
                return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_infos', array('IdSuivi' => $IdSuivi));
            }
        }

        // On traite le formulaire d'ajout d'interlocuteur.
        if ($request->request->has('formAjoutInterlocuteur')) {
            $formAjoutInterlocuteur->handleRequest($request);
            if ($formAjoutInterlocuteur->isValid()) {

                // On récupére le chemin du serveur.
                $root = $this->container->getParameter('kernel.root_dir') . '\..';

                // On récupére les variables du formulaire et on remplace les valeurs accentués par leur équivalent sans accent (pour l'encodage en base de donnée).
                $Nom_Contact = $this->wd_remove_accents($formAjoutInterlocuteur['Nom_Contact']->getData());
                $Prenom_Contact = $this->wd_remove_accents($formAjoutInterlocuteur['Prenom_Contact']->getData());
                $Titre = $this->wd_remove_accents($formAjoutInterlocuteur['Titre']->getData());
                $Nom_Ville = $this->wd_remove_accents($formAjoutInterlocuteur['Nom_Ville']->getData());
                $Nom_Pays = $this->wd_remove_accents($formAjoutInterlocuteur['Nom_Pays']->getData());
                $Code_Postal = $this->wd_remove_accents($formAjoutInterlocuteur['Code_Postal']->getData());
                $Ligne_Directe = $this->wd_remove_accents($formAjoutInterlocuteur['Ligne_Directe']->getData());
                $Portable = $this->wd_remove_accents($formAjoutInterlocuteur['Portable']->getData());
                $Fax = $this->wd_remove_accents($formAjoutInterlocuteur['Fax']->getData());

                $fichierSQLCreationInterlocuteur = fopen($root . "\scripts\SQL\InsertContactIntoGXDB.sql", "w+"); // On ouvre le fichier SQL de création d'interlocuteur ou on le crée si il n'existe pas.
                // On écris la requête SQL de création de client avec les paramêtres du formulaire.
                $sqlInterlocuteur = "SET NOCOUNT ON\n";
                $sqlInterlocuteur .= "INSERT INTO Contact (N_Client, Nom_Contact, Prenom_Contact, Titre, Nom_Ville, Nom_Pays, Code_Postal, Ligne_Directe, Portable, Fax) VALUES (" . $noClient . ", '" . $Nom_Contact . "', '" . $Prenom_Contact . "', '" . $Titre . "', '" . $Nom_Ville . "', '" . $Nom_Pays . "', '" . $Code_Postal . "', '" . $Ligne_Directe . "', '" . $Portable . "', '" . $Fax . "');\n";
                $sqlInterlocuteur .= "SELECT SCOPE_IDENTITY();\n";
                $sqlInterlocuteur .= "GO";
                fwrite($fichierSQLCreationInterlocuteur, $sqlInterlocuteur); // On insert la requête dans le fichier SQL de création d'interlocuteur.
                fclose($fichierSQLCreationInterlocuteur); // On ferme le fichier SQL de création d'interlocuteur.
                $N_Interlocuteur = null; // On initialise la variable qui contiendras le numéro de l'interlocuteur.
                exec($root . "\scripts\AddContactToGXDB.bat", $N_Interlocuteur); // On execute le script de la requette SQL.
                exec($root . "\scripts\GXDataUpdating.bat"); // On met à jours la base de données de l'intranet depuis celle de GX.
                $N_Interlocuteur = intval(str_replace(' ', '', $N_Interlocuteur[0])); // On récupère la valeur 'N_Client' du nouveau client.

                $suivi->setNoInterlocuteur($N_Interlocuteur); // On attribut le nouvelle interlocuteur au suivi.
                // On sauvegarde le suivi en base de données.
                $em->persist($suivi);
                $em->flush();

                // On redirige vers le remplissage des informations du suivi.
                return $this->redirectToRoute('nox_intranet_assistant_affaire_nouvelle_infos', array('IdSuivi' => $IdSuivi));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\NouveauSuivi:assistantaffairecreationchoixinterlocuteur.html.twig', array('formSelectionInterlocuteur' => $formSelectionInterlocuteur->createView(), 'formAjoutInterlocuteur' => $formAjoutInterlocuteur->createView(), 'IdSuivi' => $IdSuivi, 'noClient' => $noClient));
    }

    // Récupére la liste des clients en fonction de la recherche passé en paramêtre.
    public function ajaxInterlocuteurGetterAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $listeInterlocuteurs = array();

        if ($request->isXmlHttpRequest()) {
            // On récupére le terme de la recherche.
            $critere = $request->get('critere');
            $numClient = $request->get('numClient');

            // On récupére les contacts en fonction du critère de recherche.
            $contacts = $em->getRepository("NoxIntranetRessourcesBundle:AA_Contact")->createQueryBuilder('o')
                    ->where("CONCAT(o.prenomContact, ' ', o.nomContact) LIKE :critere AND o.nClient = :numClient")
                    ->setParameters(array('critere' => "%" . $critere . "%", 'numClient' => $numClient))
                    ->orderBy("CONCAT(o.prenomContact, ' ', o.nomContact)")
                    ->getQuery()
                    ->getResult();

            // On crée la liste de contacts à retourner.
            foreach ($contacts as $contact) {
                $listeInterlocuteurs[] = array('numero' => $contact->getNContact(), 'nom' => $contact->getPrenomContact() . ' ' . $contact->getNomContact());
            }
        }

        // On encode la liste des contacts et on la retourne.
        $response = new Response(json_encode($listeInterlocuteurs));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    // Remplissage des informations du suivi.
    public function creationSuiviInfosAction(Request $request, $IdSuivi) {

        // On récupére le suivi en fonction de l'ID passé en paramêtre.
        $em = $this->getDoctrine()->getManager();
        $suivi = $em->getRepository('NoxIntranetRessourcesBundle:Suivis')->find($IdSuivi);

        // Génération du formulaire de remplissage des informations de suivi.
        $form = $this->get('form.factory')->createBuilder('form', $suivi)
                ->add('Marche', TextType::class)
                ->add('NoCommande', TextType::class)
                ->add('NoClient', TextType::class, array(
                    'attr' => array(
                        'readonly' => 'readonly'
                    )
                ))
                ->add('Commune', TextType::class)
                ->add('Objet', TextType::class)
                ->add('NoINGEDIABEP', TextType::class)
                ->add('Estimatif', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        // Traitement du formulaire d'information de suivi.
        $form->handleRequest($request);
        if ($form->isValid()) {
            // On ajoute le numéro de commande fourni à un tableau pour l'enregistrer en base de données.
            $suivi->setNoCommande(array($suivi->getNoCommande()));
            // On sauvegarde le suivi en base de données.
            $em->persist($suivi);
            $em->flush();
            // On redirige vers l'édition du suivi.
            return $this->redirectToRoute('nox_intranet_assistant_affaire_edition', array('IdSuivi' => $IdSuivi));
        }

        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire\NouveauSuivi:assistantaffairecreationinfos.html.twig', array('form' => $form->createView(), 'IdSuivi' => $IdSuivi));
    }

}
