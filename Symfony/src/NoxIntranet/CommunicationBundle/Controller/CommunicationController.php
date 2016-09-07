<?php

namespace NoxIntranet\CommunicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smalot\PdfParser\Parser;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;

class CommunicationController extends Controller {

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function communicationAction(Request $request) {

        return $this->render('NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig');
    }

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {

            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path) && $value != ".gitignore") {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb" && $value != ".gitignore") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    function affichageContenuAction($chemin, $dossier, $config, $page) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $news = $this->getPDF($root . "/web/uploads/Communication/" . $chemin);

        //var_dump($root . "/web/uploads/Communication/" . $chemin);

        if ($news == null) {
            $nbPages = 1;
            $news10 = null;
        } else {
            $nbPages = intval(ceil(sizeof($news) / 5));
            $news10 = array_chunk($news, 5);
        }

        return $this->render('NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig', array('chemin' => $chemin, 'page' => $page, 'nbPage' => $nbPages, 'news' => $news10[$page - 1], 'dossier' => $dossier, 'config' => $config));
    }

    public function getPDF($chemin) {

        $files = $this->getDirContents($chemin);

        $listePDF = array();

        $PDFs = array();

        $em = $this->getDoctrine()->getManager();

        foreach ($files as $file) {

            $fileExist = $em->getRepository('NoxIntranetPDFParsingBundle:PDF')->findOneByChemin($file);

            if ($fileExist != null) {

                $listePDF[] = $fileExist;

                foreach ($listePDF as $k => $v) {
                    $date[$k] = $v->getDateEnvoi();
                }

                array_multisort($date, SORT_DESC, $listePDF);
            }
        }
        return $listePDF;
    }

    function affichageImagesAction($chemin, $dossier, $config, $page) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $imagesChemin = $this->getDirContents($root . "/web/uploads/Communication/" . $chemin);

        if (!empty($imagesChemin)) {

            foreach ($imagesChemin as $image) {
                $imagesEnCoursDeTrie[$image] = filemtime($image);
            }

            arsort($imagesEnCoursDeTrie);

            $imageTriee = array_keys($imagesEnCoursDeTrie);


            foreach ($imageTriee as $image) {
                $images[] = "uploads/Communication/" . $chemin . "/" . pathinfo($image, PATHINFO_BASENAME);
            }
        } else {
            $images = null;
        }

        if ($images == null) {
            $nbPages = 1;
            $images10 = null;
        } else {
            $nbPages = intval(ceil(sizeof($images) / 10));
            $images10 = array_chunk($images, 10);
        }

        return $this->render('NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig', array('page' => $page, 'nbPage' => $nbPages, 'images' => $images10[$page - 1], 'dossier' => $dossier, 'config' => $config, 'chemin' => $chemin));
    }

    function downloadImageAction($image) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $chemin = $root . "/web";

        $response = new Response();
        $response->setContent(file_get_contents($chemin . $image));
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename=' . $fichier);

        return $response;
    }

    public function BIMAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('BIM');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('BIM');
            $em->persist($texteEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $texteEncart);

        $formBuilder
                ->add('text', 'ckeditor')
                ->add('modifier', 'submit')
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple

            $em->persist($texteEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_communication_bim');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetCommunicationBundle:Accueil:BIM.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

}
