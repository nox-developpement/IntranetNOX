<?php

function getProjects() {
    $html = "";

    $files = scandir('../projets');

    $exclude = array('.', '..');
    $dossiersProjet = array_slice(array_diff($files, $exclude), 0, 6);

    $nbPages = array_chunk(array_diff($files, $exclude), 6);

    $i = 1;

    $html = $html . "<div class='vignettes_arrow_container' id='vignettes_arrow_container_left' style='opacity: 0;'><img src='../images/Arrowhead-Left-01-256.png' alt='arrow_left' class='vignettes_arrow' id='vignette_arrow_left' /><span class='vignettes_arrow_aligner'></span></div>";

    $html = $html . "<div id='vignettesProjetContainer'>";



    foreach ($dossiersProjet as $dossierProjet) {
        if (is_dir('../projets/' . $dossierProjet) && file_exists('../projets/' . $dossierProjet . "/pano.html")) {
            $html = $html . "<div class=vignettesContainer>";
            $html = $html . "<a class='vignettesLink' href='../projets/$dossierProjet/pano.html' title='$dossierProjet'><div class='vignettesImageContainer'><img class='vignettesImage' src='../projets/$dossierProjet/miniature.jpg' /><h2> $dossierProjet </h2></div></a>";
            $html = $html . "</div>";
            if ($i === 3) {
                $html = $html . "<br />";
            }
        }
        $i++;
    }

    $html = $html . "</div>";

    if (count($nbPages) > 1) {
        $html = $html . "<div class='vignettes_arrow_container' id='vignettes_arrow_container_right' onclick='vignettesSliding(1);'><img src='../images/Arrowhead-Right-01-256.png' alt='arrow_right' class='vignettes_arrow' id='vignette_arrow_right' /><span class='vignettes_arrow_aligner'></span></div>";
    } else {
        $html = $html . "<div class='vignettes_arrow_container' id='vignettes_arrow_container_right' style='opacity: 0;'><img src='../images/Arrowhead-Right-01-256.png' alt='arrow_right' class='vignettes_arrow' id='vignette_arrow_right' /><span class='vignettes_arrow_aligner'></span></div>";
    }

    echo $html;
}

getProjects();
