<?php

namespace NoxIntranet\SupportSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\SupportSIBundle\Controller\TicketingController;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\SupportSIBundle\Entity\CompteurDemande;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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

        $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk')->getEmail();

        $name = $usr->getUsername();
        $agence = $usr->getAgence();

        if ($request->query->get('materiel') == null && $request->query->get('logicielCheckbox') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez choisir au moins un type de demande !");
        } elseif ($request->query->get('logicielCheckbox') == 'logicielCheckbox' && ($request->query->get('logiciel') == null)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner le/les logiciel(s) désiré(s) !");
        } elseif ($request->query->get('raisonDemande') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner la raison de votre demande !");
        } elseif ($request->query->get('dateLivraison') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner la date de livraison désirée !");
        } elseif ($request->query->get('nomSuperieur') == null) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez renseigner le nom de votre supérieur hiérarchique !");
        } else {

            $dateDemande = $request->query->get('dateLivraison');

            $em = $this->getDoctrine()->getManager();

            $compteur = $em->getRepository('NoxIntranetSupportSIBundle:CompteurDemande')->find(6);

            date_default_timezone_set('Europe/Paris');
            $date = new \DateTime(date('Y/m/d'));

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
            $superieur = $request->query->get('nomSuperieur');

            $message = \Swift_Message::newInstance()
                    ->setSubject('Demande de matériel/logiciel ' . $request->query->get('demandeur'))
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo($adresseHelpdesk)
                    ->setBody(
                    $this->renderView(
// app/Resources/views/Emails/registration.html.twig
                            'Emails/demandeMateriel.html.twig', array('materiel' => $request->query->get('materiel'), 'logicielCheckbox' => $request->query->get('logicielCheckbox'), 'demandeur' => $request->query->get('demandeur'), 'agence' => $request->query->get('agence'),
                        'numOrdre' => $numRequette, 'categorie' => $request->query->get('categorie'), 'logiciel' => $request->query->get('logiciel'), 'superieur' => $superieur, 'raison' => $request->query->get('raisonDemande'),
                        'date' => $dateDemande
                            )
                    ), 'text/html'
                    )
            /*
             * If you also want to include a plaintext version of the message
              ->addPart(
              $this->renderView(
              'Emails/registration.txt.twig',
              array('name' => $name)
              ),
              'text/plain'
              )
             */
            ;
            $this->get('mailer')->send($message);

            $compteur->setCompteur($compteur->getCompteur() + 1);
            $em->persist($compteur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', "Votre demande a été transmise au service Helpdesk.");
            return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('username' => $name, 'agence' => $agence, 'date' => $date));
        }

        return $this->render('NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig', array('username' => $name, 'agence' => $agence, 'date' => $date));
    }

}
