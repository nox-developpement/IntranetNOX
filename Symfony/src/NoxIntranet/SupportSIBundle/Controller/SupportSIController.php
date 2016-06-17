<?php

namespace NoxIntranet\SupportSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\SupportSIBundle\Entity\CompteurDemande;
use NoxIntranet\SupportSIBundle\Entity\DemandeMateriel;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SupportSIController extends Controller {

    public function accueilAction(Request $request) {

        return $this->render('NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig');
    }

    public function licensesAction() {
        return $this->render('NoxIntranetSupportSIBundle:Support:licenses.html.twig');
    }

    public function ticketingAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];
        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/support/index.php');
    }

    public function wikiAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];

        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/WikiNox/index.php');
    }

    public function demandeAction(Request $request) {

        // Récupère le profil du collaborateur actuel.
        $usr = $this->get('security.context')->getToken()->getUser();

        // Récupère le nom d'utilisateur et l'agence du collaborateur actuel.
        $name = $usr->getUsername();
        $agence = $usr->getAgence();
        $completName = $usr->getFirstname() . ' ' . $usr->getLastname();

        // Génére le formulaire de demande de matériel
        $formBuilder = $this->get('form.factory')->createBuilder('form');
        $formBuilder
                ->add('agence', TextType::class, array(
                    'data' => $agence
                ))
                ->add('demandeur', TextType::class, array(
                    'data' => $completName
                ))
                ->add('materielCheckbox', CheckboxType::class, array(
                    'label' => 'Matériel',
                ))
                ->add('logicielCheckbox', CheckboxType::class, array(
                    'label' => 'Logiciel',
                ))
                ->add('materielList', ChoiceType::class, array(
                    'choices' => array(
                        'Portable' => 'Portable',
                        'Ultra portable' => 'Ultra portable',
                        'Poste fixe' => 'Poste fixe',
                        'Poste CAO' => 'Poste CAO'
                    ),
                    'placeholder' => 'Séléctionnez un matériel',
                    'required' => false
                ))
                ->add('logicielName', TextType::class, array(
                    'required' => false
                ))
                ->add('raison', TextType::class)
                ->add('date', DateType::class, array(
                    'widget' => 'text'
                ))
                ->add('mailSuperieur', EmailType::class)
                ->add('Valider', SubmitType::class)
                ->add('Refuser', SubmitType::class)
        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Génére la date du jour.
            date_default_timezone_set('Europe/Paris');
            $date = date('d/m/Y à h:i:s', time());

            // Génére l'email du collaborateur en fonction de son nom d'utilisateur.
            $emailDemandeur = preg_replace('/-.*/', '', $name) . "@groupe-nox.com";

            // Génére un compteur de demande ou met la date et la valeur à jour si il existe déjà.
            $compteur = $em->getRepository('NoxIntranetSupportSIBundle:CompteurDemande')->find(6);
            if ($compteur === null) {
                $compteur = new CompteurDemande();
                $compteur->setId(6);
                $compteur->setCompteur(1);
                $compteur->setDate($date);

                $em->persist($compteur);
                $em->flush();
            } else {
                if ($compteur->getDate()->format('d/m/Y') !== $date->format('d/m/Y')) {
                    $compteur->setCompteur(1);
                    $compteur->setDate($date);
                    $em->persist($compteur);
                    $em->flush();
                }
            }

            // Génére un numéro pour la demande.
            $numRequette = $date->format('d/m/Y') . "-" . $compteur->getCompteur();

            // Génére une clé aléatoire pour identifier la demande.
            $cle = md5(uniqid(rand(), true));
            while (!(empty($em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneByCleDemande($cle)))) {
                $cle = md5(uniqid(rand(), true));
            }

            // Récupère l'adresse du helpdesk.
            $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk')->getEmail();

            // Génére l'email de demande pour la DSI et l'envoie.
            $message = \Swift_Message::newInstance()
                    ->setSubject('Demande de matériel/logiciel ' . $completName)
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo($adresseHelpdesk)
                    ->setBody(
                    $this->renderView(
                            'Emails/demandeMaterielDSI.html.twig', array('materiel' => $form->get('materielList')->getData(), 'logicielCheckbox' => $form->get('logicielCheckbox')->getData(), 'demandeur' => $name, 'agence' => $agence,
                        'numOrdre' => $numRequette, 'logiciel' => $form->get('logicielName')->getData(), 'date' => $date, 'cle' => $cle, 'raison' => $form->get('raison')->getData()
                            )
                    ), 'text/html'
            );
            $this->get('mailer')->send($message);

            // Incrémente le compteur de demande du jour.
            $compteur->setCompteur($compteur->getCompteur() + 1);
            $em->persist($compteur);

            // Stock les données de la demande.
            $donneesMessage = array('materiel' => $form->get('materielList')->getData(), 'logicielCheckbox' => $form->get('logicielCheckbox')->getData(), 'demandeur' => $name, 'agence' => $agence,
                'numOrdre' => $numRequette, 'logiciel' => $form->get('logicielName')->getData(), 'emailSuperieur' => $form->get('mailSuperieur')->getData(), 'raison' => $form->get('raison')->getData(),
                'date' => $date, 'cle' => $cle, 'emailDemandeur' => $emailDemandeur
            );

            // Stock la demande en base de donnée en attente de traitement.
            $newDemandeMateriel = new DemandeMateriel();
            $newDemandeMateriel->setMailSuperieur($form->get('mailSuperieur')->getData());
            $newDemandeMateriel->setMessage($donneesMessage);
            $newDemandeMateriel->setCleDemande($cle);
            $newDemandeMateriel->setStatus('DSI');
            $em->persist($newDemandeMateriel);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', "Votre demande a été transmise à la DSI et est en attente de validation.");
            return $this->redirectToRoute('nox_intranet_demande_materiel');
        }

        return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('username' => $name, 'agence' => $agence, 'date' => $date, 'formDemandeMateriel' => $form));
    }

    public function demandeConfirmationDSIAction(Request $request, $cleDemande) {

        // Récupère la demande de matériel/logiciel
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneBy(array('cleDemande' => $cleDemande, 'status' => 'DSI'));

        // Génére le formulaire de validation/refus de la demande avec posibilité de renseigner une estimation du prix.
        $formBuilder = $this->get('form.factory')->createBuilder('form');
        $formBuilder
                ->add('prix', TextType::class)
                ->add('Valider', SubmitType::class)
                ->add('Refuser', SubmitType::class)
        ;
        $form = $formBuilder->getForm();

        // Si la demande est présente en base de données...
        if (!empty($demande)) {
            $form->handleRequest($request);

            $donneesMessage = $demande->getMessage();
            $mailSuperieur = $demande->getMessage();

            if ($form->isValid()) {
                // Si la demande est validée par la DSI...
                if ($form->get('Valider')->isClicked()) {

                    // On envoi un email au supérieur hiérachique pour demander la confirmation d'achat.
                    $messageHelpdesk = \Swift_Message::newInstance()
                            ->setSubject('Demande de matériel/logiciel ' . $donneesMessage['demandeur'])
                            ->setFrom('noreply@groupe-nox.com')
                            ->setTo($mailSuperieur)
                            ->setBody(
                            $this->renderView(
                                    'Emails/demandeMateriel.html.twig', array('donneesMessage' => $donneesMessage, 'prixEstime' => $form->get('prix')->getData())
                            ), 'text/html'
                    );
                    $this->get('mailer')->send($messageHelpdesk);

                    // On modifie le status de la demande pour que la DSI n'y ai plus accés.
                    $demande->setStatus('SupérieurHiérarchique');
                    $em->persist($demande);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été validée.");
                    return $this->redirectToRoute('nox_intranet_accueil');

                    // ...Si la demande est refusée par la DSI.
                } else {
                    // On envoi un email au collaborateur pour lui indiquer le refus.
                    $messageDemandeur = $messageDemandeur = \Swift_Message::newInstance()
                            ->setSubject('Rejet de votre demande de matériel')
                            ->setFrom('noreply@groupe-nox.com')
                            ->setTo($donneesMessage['emailDemandeur'])
                            ->setBody("Bonjour " . $donneesMessage['demandeur'] . ", votre demande de matériel a été rejeté par la DSI."
                            , 'text/html'
                    );
                    $this->get('mailer')->send($messageDemandeur);

                    // On supprime la demande.
                    $em->remove($demande);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été rejeté.");
                    return $this->redirectToRoute('nox_intranet_accueil');
                }
            }

            // ...Si la demande n'existe plus en base de données.
        } else {
            $request->getSession()->getFlashBag()->add('notice', "Cette demande de matériel a déjà été traitée.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        return $this->render();
    }

}
