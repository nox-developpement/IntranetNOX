<?php

namespace NoxIntranet\SupportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\SupportBundle\Entity\Ticket;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class TicketController extends Controller {

    public function indexAction() {
        return $this->render('NoxIntranetSupportBundle:Ticket:ticket.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function ajouterTicketAction(Request $request) {
        $ticket = new Ticket();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $ticket->setAuteur($user->getUsername());

        $formBuilder = $this->get('form.factory')->createBuilder('form', $ticket);

        $formBuilder
                ->add('objet', 'text')
                ->add('contenu', 'textarea')
                ->add('valider', 'submit')
        ;
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Ticket bien enregistrée !');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('nox_intranet_support'));
        }

        return $this->render('NoxIntranetSupportBundle:Ticket:newticket.html.twig', array('formulaire' => $form->createView()));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function mesTicketsAction() {
        $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('NoxIntranetSupportBundle:Ticket')
        ;

        $listTickets = $repository->findBy(
        array('auteur' => $user), // Critere
        array('dateAjout' => 'desc'));
        
        return $this->render('NoxIntranetSupportBundle:Ticket:mestickets.html.twig', array('tickets' => $listTickets));
    }
    
    

}
