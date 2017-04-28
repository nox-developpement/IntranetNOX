<?php

namespace NoxIntranet\RessourcesBundle\Controller\Siren;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class SirenController extends Controller {

    static $SERVER = "SRVM-SQL";
    static $DATABASE = "BaseSiren";
    static $USER = "NoxReader";
    static $PASSWORD = "NoxReader";

    public function sirenTableAction() {
        $formSirenSearchBySIRENBuilder = $this->get('form.factory')->createNamedBuilder('searchBySIREN', FormType::class);
        $formSirenSearchBySIRENBuilder
                ->add('searchValue', TextType::class, array(
                    'label' => "Recherche par SIREN, SIRET ou Raison Sociale",
                    'attr' => array(
                        'pattern' => ".{3,}",
                        'title' => "3 caractères minimum.",
                        'placeholder' => "3 caractères minimum."
                    )
                ))
                ->add('firstRow', HiddenType::class)
                ->add('Search', SubmitType::class, array(
                    'label' => 'Rechercher'
                ))
        ;
        $formSirenSearchBySIREN = $formSirenSearchBySIRENBuilder->getForm();

        return $this->render("NoxIntranetRessourcesBundle:Siren:sirenTable.html.twig", array('searchBySIREN' => $formSirenSearchBySIREN->createView()));
    }

    public function ajaxSearchBySirenAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Paramètres de connexion à la BDD.
            $server = self::$SERVER;
            $database = self::$DATABASE;
            $user = self::$USER;
            $password = self::$PASSWORD;

            // Données du formulaire.
            $form = $request->get('searchBySIREN');

            // Connexion à la BDD.
            $connection = odbc_connect("Driver={SQL Server};Server=$server;Database=$database;", $user, $password);

            // Requête de recherche par SIREN (Procédure de Cédric THUREAU).
            $query = "EXEC SEARCH_ENTP '" . $form['searchValue'] . "'";

            // On execute la requête.
            $result = odbc_exec($connection, $query);

            // Tableau qui contiendras les résultats.
            $sirens = array();

            // Pour chaques résultats et tant que le tableau des résultat <= 10 éléments...
            $currentRow = 1;
            while (($siren = odbc_fetch_array($result)) && count($sirens) <= 10) {
                if ($currentRow < $form['firstRow']) {
                    $currentRow++;
                    continue;
                }

                // Encodage en utf-8.
                $sirens[] = array_map('utf8_encode', $siren);

                $currentRow++;
            }
            odbc_close($connection);

            // On retourne le tableau des résultats au format JSON.
            return new Response(json_encode($sirens));
        }
    }

}
