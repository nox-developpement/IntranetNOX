<div id="NOXVRLogoDiv" class="slideDiv">

    <div id="menuDiv">
        <div class="logoMenuDiv">
            <img id="logoNOXVR" src="./images/logo_VR.png" alt="logoNOXVR" />
        </div><!-- 
        --><p class='slogan'>Build your futur</p><!--
        --><div id="menuGalerieDiv" class="menuCategorieDiv" style="cursor: pointer;">
            <a href="./pages/vignettes.php"> Galerie </a>
            </p>
        </div><!-- 
        --><div id="menuPlaquetteCommercialeDiv" class="menuCategorieDiv" style="cursor: pointer;">
            <p> Plaquette commerciale </p>
        </div><!--
        --><a href="http://groupe-nox.com/" target="_blank"><div class="menuCategorieDiv"><!--
                --><p> Site du Groupe NOX </p><!--
                --></div></a><!--
        --><a href="mailto:nox-vr@groupe-nox.com"><div class="menuCategorieDiv"><!--
                --><p> Contact </p><!--
                --></div></a>
    </div>
    <div class="makeMeScrollable">
        <?php
        $dossiersProjetComplet = scandir('./projets');

        shuffle($dossiersProjetComplet);

        $dossiersProjet = array_slice($dossiersProjetComplet, 0, 20);

        foreach ($dossiersProjet as $dossierProjet) {
            if (is_dir('./projets/' . $dossierProjet) && file_exists('./projets/' . $dossierProjet . "/pano.html")) {
                ?>
                <div class="slideImage">
                    <a href='./projets/<?php echo $dossierProjet ?>/pano.html' title='<?php echo $dossierProjet ?>' target="_blank">
                        <img src='./projets/<?php echo $dossierProjet ?>/miniature.jpg' />
                        <div class="titleContainer">
                            <h2> <?php echo $dossierProjet ?> </h2>
                        </div>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <a href="./pages/vignettes.php">
        <div id="seeMore">

            <p>See more</p>

        </div>
    </a>
</div>