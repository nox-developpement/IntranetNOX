<?php

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire\Modeles;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModelesController extends Controller {

    // Supprime le contenu d'un dossier.
    public function delTree($dir) {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

    // Supprime le dossier et le fichier d'un modèle et supprime le modèle de la base de données.
    function deleteModeleAction($IDModele, Request $request) {

        // On récupére le modèle en fonction de l'ID passé en paramètre.
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('NoxIntranetAdministrationBundle:Fichier_Suivi')->find($IDModele);

        // On supprime le dossier correspondant au chemin du modèle.
        $this->delTree($modele->getChemin());

        // On supprime le modèle de la base de donnée.
        $em->remove($modele);
        $em->flush();

        // On affiche un message de confirmation.
        $request->getSession()->getFlashBag()->add('notice', 'Le modèle ' . pathinfo($modele->getChemin(), PATHINFO_BASENAME) . ' a été supprimé.');

        // On redirige vers l'administration de l'assistant d'affaire catégorie 'modeles'.
        return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'modeles'));
    }

}
