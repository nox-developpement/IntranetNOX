<?php

namespace NoxIntranet\CommunicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smalot\PdfParser\Parser;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CommunicationController extends Controller {

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function communicationAction(Request $request) {

        return $this->render('NoxIntranetCommunicationBundle:Accueil:accueilCommunication.html.twig');
    }

    public function communicationNewsSIAction() {

        $parser = new \Smalot\PdfParser\Parser();

        $Path = 'C:/wamp/www/Symfony/web/uploads/Communication/SI/NewsSI';

        $files = $this->getDirContents($Path);

        $news = null;

        if ($files != null) {
            foreach ($files as $file) {
                if (!is_dir($file)) {
                    $propriete = null;

                    $pdf = $parser->parseFile($file);
                    $details = $pdf->getDetails();

                    foreach ($details as $property => $value) {

                        if (is_array($value)) {
                            $value = implode(', ', $value);
                        }

                        $propriete[] = array('label' => $property, 'valeur' => $value);
                    }

                    $dateModification = date("Y/m/d H:i:s", filemtime($file));
                    $nom = str_replace('.pdf', '', basename($file));
                    $lien = str_replace("C:\wamp\www", '', $file);
                    $lien = str_replace("\\", "/", $lien);
                    $news[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
                }
            }

            foreach ($news as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }

            array_multisort($date, SORT_DESC, $news);
        }

        if ($news != null) {
            foreach ($news as $key => $value) {
                $news[$key]['dateEnvoi'] = date("d/m/Y à H:i:s", strtotime($value['dateEnvoi']));
            }
        }

        return $this->render('NoxIntranetCommunicationBundle:News:newsSI.html.twig', array('news' => $news));
    }

    public function communicationInterneAction() {
        return $this->render('NoxIntranetCommunicationBundle:Interne:communicationInterne.html.twig');
    }

    public function communicationExterneAction() {
        return $this->render('NoxIntranetCommunicationBundle:Externe:communicationExterne.html.twig');
    }

    public function communicationMarketingAction() {
        return $this->render('NoxIntranetCommunicationBundle:Marketing:communicationMarketing.html.twig');
    }

    public function communicationSIAction() {
        return $this->render('NoxIntranetCommunicationBundle:SI:communicationSI.html.twig');
    }

    public function communicationNoxNewsAction() {

        $parser = new \Smalot\PdfParser\Parser();

        $Path = 'C:/wamp/www/Symfony/web/uploads/Communication/Interne/NoxNews';

        $files = $this->getDirContents($Path);

        $news = null;

        if ($files != null) {
            foreach ($files as $file) {
                if (!is_dir($file)) {
                    $propriete = null;

                    $pdf = $parser->parseFile($file);
                    $details = $pdf->getDetails();

                    foreach ($details as $property => $value) {

                        if (is_array($value)) {
                            $value = implode(', ', $value);
                        }

                        $propriete[] = array('label' => $property, 'valeur' => $value);
                    }

                    $dateModification = date("Y/m/d H:i:s", filemtime($file));
                    $nom = str_replace('.pdf', '', basename($file));
                    $lien = str_replace("C:\wamp\www", '', $file);
                    $lien = str_replace("\\", "/", $lien);
                    $news[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
                }
            }

            foreach ($news as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }

            array_multisort($date, SORT_DESC, $news);
        }

        if ($news != null) {
            foreach ($news as $key => $value) {
                $news[$key]['dateEnvoi'] = date("d/m/Y à H:i:s", strtotime($value['dateEnvoi']));
            }
        }

        return $this->render('NoxIntranetCommunicationBundle:News:noxNews.html.twig', array('news' => $news));
    }

    public function communicationNoxLettersAction() {

        $parser = new \Smalot\PdfParser\Parser();

        $Path = 'C:/wamp/www/Symfony/web/uploads/Communication/Externe/NoxLetters';

        $files = $this->getDirContents($Path);

        $news = null;

        if ($files != null) {
            foreach ($files as $file) {
                if (!is_dir($file)) {
                    $propriete = null;

                    $pdf = $parser->parseFile($file);
                    $details = $pdf->getDetails();

                    foreach ($details as $property => $value) {

                        if (is_array($value)) {
                            $value = implode(', ', $value);
                        }

                        $propriete[] = array('label' => $property, 'valeur' => $value);
                    }

                    $dateModification = date("Y/m/d H:i:s", filemtime($file));
                    $nom = str_replace('.pdf', '', basename($file));
                    $lien = str_replace("C:\wamp\www", '', $file);
                    $lien = str_replace("\\", "/", $lien);
                    $news[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
                }
            }

            foreach ($news as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }

            array_multisort($date, SORT_DESC, $news);
        }

        if ($news != null) {
            foreach ($news as $key => $value) {
                $news[$key]['dateEnvoi'] = date("d/m/Y à H:i:s", strtotime($value['dateEnvoi']));
            }
        }

        return $this->render('NoxIntranetCommunicationBundle:News:noxLetters.html.twig', array('news' => $news));
    }

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    function affichageContenuAction($chemin, $dossier, $config) {
        $news = $this->getPDF("C:/wamp/www/Symfony/web/uploads/Communication/" . $chemin);

        return $this->render('NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig', array('news' => $news, 'dossier' => $dossier, 'config' => $config));
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

    function affichageImagesAction($chemin, $dossier, $config) {
        $imagesChemin = $this->getDirContents("C:/wamp/www/Symfony/web/uploads/Communication/" . $chemin);

        if (!empty($imagesChemin)) {
            foreach ($imagesChemin as $image) {
                $images[] = "uploads/Communication/" . $chemin . "/" . pathinfo($image, PATHINFO_BASENAME);
            }
        } else {
            $images = null;
        }

        return $this->render('NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig', array('images' => $images, 'dossier' => $dossier, 'config' => $config));
    }

    function downloadImageAction($image) {

        $chemin = "C:/wamp/www/Symfony/web";

        $response = new Response();
        $response->setContent(file_get_contents($chemin . $image));
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-disposition', 'filename=' . $fichier);

        return $response;
    }

}
