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

    function affichageImagesAction($chemin, $dossier, $config, $page) {
        $imagesChemin = $this->getDirContents("C:/wamp/www/Symfony/web/uploads/Communication/" . $chemin);

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

        $chemin = "C:/wamp/www/Symfony/web";

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
