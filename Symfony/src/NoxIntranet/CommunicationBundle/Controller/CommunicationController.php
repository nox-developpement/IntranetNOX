<?php

namespace NoxIntranet\CommunicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;
use FFMpeg\FFMpeg;
use Symfony\Component\HttpFoundation\Response;

class CommunicationController extends Controller {

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

    // Affichage la liste des news en fonction du chemin passé en paramêtre.
    public function affichageContenuAction($chemin, $dossier, $config, $page) {
        // On récupère la racine du serveur.
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        // Initialisation du tableau des news.
        $news = array();

        // Pour chaques fichiers PDF du chemain passé en paramètre...
        foreach ($this->getPDF($root . "/web/uploads/Communication/" . $chemin) as $pdf) {
            // On ajout le PDF au tableau des news à afficher.
            $news[] = array('fichier' => $pdf, 'type' => 'pdf', 'dateEnvoi' => $pdf->getDateEnvoi());
        }

        // Pour chaques fichiers mp4 du chemain passé en paramètre...
        foreach ($this->getMp4($chemin) as $mp4) {
            // On ajout le mp4 au tableau des news à afficher.
            $news[] = array('fichier' => $mp4, 'type' => 'mp4', 'dateEnvoi' => $mp4['dateEnvoi']);
        }

        // Si il n'exste pas de news à afficher...
        if (empty($news)) {
            $nbPages = 1;
            $news5 = null;
        }
        // Sinon si il existe des news à afficher...
        else {
            // On trie les news en fonction de leur date d'upload par ordre décroissant.
            foreach ($news as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }
            array_multisort($date, SORT_DESC, $news);

            // On sépare les news par page de 5.
            $nbPages = intval(ceil(sizeof($news) / 5));
            $news5 = array_chunk($news, 5);
        }
        
        return $this->render('NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig', array('chemin' => $chemin, 'page' => $page, 'nbPage' => $nbPages, 'news' => $news5[$page - 1], 'dossier' => $dossier, 'config' => $config));
    }

    // Retourne la liste des PDF du dossier passé en paramêtre.
    public function getPDF($chemin) {
        // On récupérère les fichiers du dossier "chemin".
        $files = $this->getDirContents($chemin);

        // Initialisation de la liste des PDF à retourner.
        $listePDF = array();

        // Initialisation de l'entityManager.
        $em = $this->getDoctrine()->getManager();

        // Pour chaques fichiers...
        foreach ($files as $file) {
            // On récupère le fichier dans la base de données.
            $fileExist = $em->getRepository('NoxIntranetPDFParsingBundle:PDF')->findOneByChemin($file);

            // Si le fichier est présent en base de données...
            if ($fileExist != null) {
                // On ajoute au tableau des PDF à retourner.
                $listePDF[] = $fileExist;
            }
        }

        return $listePDF;
    }

    // Retourne la liste des mp4 du dossier passé en paramêtre.
    private function getMp4($chemin) {
        // On récupère la racine du serveur.
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';
        $rootLetter = explode("/", $root)[0];

        // On récupérère les fichiers du dossier "chemin".
        $files = $this->getDirContents($root . "/web/uploads/Communication/" . $chemin);

        // Initialisation du tableau des mp4 à retourner.
        $listeMp4 = array();

        // Pour chaques fichiers...
        foreach ($files as $file) {
            // Si le fichier est au format .mp4...
            if (pathinfo($file, PATHINFO_EXTENSION) === "mp4") {
                // On génére un objet FFMpeg pour extraire une vignette de la vidéo.
                $videoFFMpeg = FFMpeg::create([
                            'ffmpeg.binaries' => $rootLetter . "/ffmpeg/bin/ffmpeg.exe",
                            'ffprobe.binaries' => $rootLetter . "/ffmpeg/bin/ffprobe.exe"
                ]);
                $video = $videoFFMpeg->open($file);

                // On génére un objet FFProbe pour obtenir des informations sur la vidéo.
                $videoFFProbe = \FFMpeg\FFProbe::create([
                            'ffmpeg.binaries' => $rootLetter . "/ffmpeg/bin/ffmpeg.exe",
                            'ffprobe.binaries' => $rootLetter . "/ffmpeg/bin/ffprobe.exe"
                ]);

                // On récupère la durée de la vidéo.
                $duree = round($videoFFProbe->format($file)->get('duration'), 2);

                // Génération d'une vignette jpg.
                $vignette = $video->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds($duree / 2));

                // Sauvegarde de la vignette.
                $frameSaveName = $root . "/" . pathinfo($file, PATHINFO_FILENAME) . ".jpg";
                $vignette->save($frameSaveName);

                // On récupére des informations sur la vidéo et on l'ajoute au tableau de retour.
                $link = "/Symfony/web/uploads/Communication/" . $chemin . "/" . pathinfo($file, PATHINFO_BASENAME);
                $name = pathinfo($file, PATHINFO_FILENAME);
                $listeMp4[] = array('Lien' => $link, 'Nom' => $name, 'Image' => base64_encode(file_get_contents($frameSaveName)), 'Duree' => $duree, 'dateEnvoi' => date('Y/m/d', filemtime($file)), 'Chemin' => $file);

                // On supprime le fichier de la vignette.
                unlink($frameSaveName);
            }
        }

        return $listeMp4;
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

    public function ajaxVideoPreviewAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupère le chemin du fichier vidéo.
            $file = $request->get('file');

            // On récupère la racine du serveur.
            $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';
            $rootLetter = explode("/", $root)[0];

            // On génére un objet FFMpeg pour extraire une vignette de la vidéo.
            $videoFFMpeg = FFMpeg::create([
                        'ffmpeg.binaries' => $rootLetter . "/ffmpeg/bin/ffmpeg.exe",
                        'ffprobe.binaries' => $rootLetter . "/ffmpeg/bin/ffprobe.exe"
            ]);
            $video = $videoFFMpeg->open($file);

            // On génére un objet FFProbe pour obtenir des informations sur la vidéo.
            $videoFFProbe = \FFMpeg\FFProbe::create([
                        'ffmpeg.binaries' => $rootLetter . "/ffmpeg/bin/ffmpeg.exe",
                        'ffprobe.binaries' => $rootLetter . "/ffmpeg/bin/ffprobe.exe"
            ]);

            // On récupère la durée de la vidéo.
            $duree = round($videoFFProbe->format($file)->get('duration'), 2);

            // Génération d'une vignette gif.
            $gif = $video->gif(\FFMpeg\Coordinate\TimeCode::fromSeconds($duree / 2 - 2.5), new \FFMpeg\Coordinate\Dimension(160, 120), 5);

            // Sauvegarde de la vignette.
            $frameSaveName = $root . "/" . pathinfo($file, PATHINFO_FILENAME) . ".gif";
            $gif->save($frameSaveName);

            // On génére le code en base 64 du fichier gif.
            $gifCode = "data:image/gif;base64," . base64_encode(file_get_contents($frameSaveName));

            // On supprime le fichier gif.
            unlink($frameSaveName);

            // On retourne le code du fichier gif.
            return new Response($gifCode);
        }
    }

}
