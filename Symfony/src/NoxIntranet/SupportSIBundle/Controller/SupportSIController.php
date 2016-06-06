<?php

namespace NoxIntranet\SupportSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\SupportSIBundle\Entity\CompteurDemande;
use NoxIntranet\SupportSIBundle\Entity\DemandeMateriel;

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

    public function demandeAction() {
        $usr = $this->get('security.context')->getToken()->getUser();

        $name = $usr->getUsername();
        $agence = $usr->getAgence();

        static $numOrdre = 0;
        $numOrdre++;

        date_default_timezone_set('Europe/Paris');
        $date = date('d/m/Y à h:i:s', time());

        return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('username' => $name, 'agence' => $agence, 'date' => $date));
    }

    public function demandeCheckAction(Request $request) {
        $usr = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $name = $usr->getUsername();
        $agence = $usr->getAgence();

        date_default_timezone_set('Europe/Paris');
        $date = new \DateTime(date('Y/m/d'));

        $emailDemandeur = preg_replace('/-.*/', '', $request->query->get('demandeur')) . "@groupe-nox.com";

        if ($request->query->get('materiel') == null && $request->query->get('logicielCheckbox') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez choisir au moins un type de demande !");
        } elseif ($request->query->get('logicielCheckbox') == 'logicielCheckbox' && ($request->query->get('logiciel') == null)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner le/les logiciel(s) désiré(s) !");
        } elseif ($request->query->get('raisonDemande') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner la raison de votre demande !");
        } elseif ($request->query->get('dateLivraison') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner la date de livraison désirée !");
        } elseif ($request->query->get('emailSuperieur') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner l'email de votre supérieur hiérarchique !");
        } elseif ($emailDemandeur === $request->query->get('emailSuperieur')) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez un email valide pour votre supérieur hiérarchique !");
        } else {

            $dateDemande = $request->query->get('dateLivraison');

            $em = $this->getDoctrine()->getManager();

            $compteur = $em->getRepository('NoxIntranetSupportSIBundle:CompteurDemande')->find(6);

            if ($compteur == null) {
                $compteur = new CompteurDemande();
                $compteur->setId(6);
                $compteur->setCompteur(1);
                $compteur->setDate($date);

                $em->persist($compteur);
                $em->flush();
            } else {
                if ($compteur->getDate()->format('d/m/Y') != $date->format('d/m/Y')) {
                    $compteur->setCompteur(1);
                    $compteur->setDate($date);
                    $em->persist($compteur);
                    $em->flush();
                }
            }

            $numRequette = $date->format('d/m/Y') . "-" . $compteur->getCompteur();
            $superieur = $request->query->get('emailSuperieur');

            $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($request->query->get('demandeur'));
            $nomDemandeur = $demandeur->getFirstname() . " " . $demandeur->getLastname();

            $cle = md5(uniqid(rand(), true));
            while (!(empty($em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneByCleDemande($cle)))) {
                $cle = md5(uniqid(rand(), true));
            }

            $message = \Swift_Message::newInstance()
                    ->setSubject('Demande de matériel/logiciel ' . $nomDemandeur)
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo($superieur)
                    ->setBody(
                    $this->renderView(
                            'Emails/confirmationDemandeMateriel.html.twig', array('materiel' => $request->query->get('materiel'), 'logicielCheckbox' => $request->query->get('logicielCheckbox'), 'demandeur' => $nomDemandeur, 'agence' => $request->query->get('agence'),
                        'numOrdre' => $numRequette, 'categorie' => $request->query->get('categorie'), 'logiciel' => $request->query->get('logiciel'), 'date' => $dateDemande, 'lienConfirmation' => $cle, 'raison' => $request->query->get('raisonDemande')
                            )
                    ), 'text/html'
            );
            $this->get('mailer')->send($message);

            $compteur->setCompteur($compteur->getCompteur() + 1);
            $em->persist($compteur);

            $donneesMessage = array('materiel' => $request->query->get('materiel'), 'logicielCheckbox' => $request->query->get('logicielCheckbox'), 'demandeur' => $nomDemandeur, 'agence' => $request->query->get('agence'),
                'numOrdre' => $numRequette, 'categorie' => $request->query->get('categorie'), 'logiciel' => $request->query->get('logiciel'), 'emailSuperieur' => $superieur, 'raison' => $request->query->get('raisonDemande'),
                'date' => $dateDemande, 'lienConfirmation' => $cle, 'emailDemandeur' => $emailDemandeur
            );

            $newDemandeMateriel = new DemandeMateriel();

            $newDemandeMateriel->setMailSuperieur($superieur);
            $newDemandeMateriel->setMessage($donneesMessage);
            $newDemandeMateriel->setCleDemande($cle);
            $em->persist($newDemandeMateriel);

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', "Votre demande a été transmise a votre supérieur et est en attente de validation.");
            return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('username' => $name, 'agence' => $agence, 'date' => $date));
        }

        return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('username' => $name, 'agence' => $agence, 'date' => $date));
    }

    public function demandeConfirmationAction(Request $request, $cleDemande, $reponse) {

        $em = $this->getDoctrine()->getManager();

        $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk')->getEmail();

        $demande = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findOneByCleDemande($cleDemande);

        $donneesMessage = $demande->getMessage();

        $formBuilder = $this->get('form.factory')->createBuilder('form', $texteEncart);

        $formBuilder
                ->add('prix', TextType::class)
                ->add('Valider', SubmitType::class)
                ->add('Refuser', SubmitType::class)
        ;

        $form = $formBuilder->getForm();


        if (!empty($demande)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                if ($form->get('Valider')->isClicked()) {

                    $messageHelpdesk = \Swift_Message::newInstance()
                            ->setSubject('Demande de matériel/logiciel ' . $donneesMessage['demandeur'])
                            ->setFrom('noreply@groupe-nox.com')
                            ->setTo($adresseHelpdesk)
                            ->setBody(
                            $this->renderView(
                                    'Emails/demandeMateriel.html.twig', array('donneesMessage' => $donneesMessage)
                            ), 'text/html'
                    );
                    $this->get('mailer')->send($messageHelpdesk);

                    $messageDemandeur = $messageDemandeur = \Swift_Message::newInstance()
                            ->setSubject('Validation de votre demande de matériel')
                            ->setFrom('noreply@groupe-nox.com')
                            ->setTo($donneesMessage['emailDemandeur'])
                            ->setBody("Bonjour " . $donneesMessage['demandeur'] . ", votre demande de matériel a été validée par votre supérieur et transmise au service Helpdesk."
                            , 'text/html'
                    );
                    $this->get('mailer')->send($messageDemandeur);

                    $em->remove($demande);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été validée.");
                } else {
                    $messageDemandeur = $messageDemandeur = \Swift_Message::newInstance()
                            ->setSubject('Rejet de votre demande de matériel')
                            ->setFrom('noreply@groupe-nox.com')
                            ->setTo($donneesMessage['emailDemandeur'])
                            ->setBody("Bonjour " . $donneesMessage['demandeur'] . ", votre demande de matériel a été rejeté par votre supérieur."
                            , 'text/html'
                    );
                    $this->get('mailer')->send($messageDemandeur);

                    $em->remove($demande);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', "La demande de matériel de " . $donneesMessage['demandeur'] . " a été rejeté.");
                }
            }
        } else {
            $request->getSession()->getFlashBag()->add('notice', "Cette demande de matériel a déjà été traitée.");
        }

        return $this->redirectToRoute('nox_intranet_accueil');
    }

}
