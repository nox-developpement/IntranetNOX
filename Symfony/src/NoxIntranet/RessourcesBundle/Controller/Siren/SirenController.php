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

    private function sirenExtraction($rowIndex) {
        $server = self::$SERVER;
        $database = self::$DATABASE;
        $user = self::$USER;
        $password = self::$PASSWORD;

        $connection = odbc_connect("Driver={SQL Server};Server=$server;Database=$database;", $user, $password);

        $query = "SELECT SIREN, SIRET, NumTVAIntra, NICSIEGE, RaisonSociale, SIGLE, ENSEIGNE, NAF, CATJUR, LIBNJ, NUMVOIE, INDREP, TYPVOIE, LIBVOIE, CP, CEDEX, VILLE, PAYS ";
        $query .= "FROM ( SELECT ROW_NUMBER() OVER ( ORDER BY SIREN ) AS RowNum, SIREN, SIRET, NumTVAIntra, NICSIEGE, RaisonSociale, SIGLE, ENSEIGNE, NAF, CATJUR, LIBNJ, NUMVOIE, INDREP, TYPVOIE, LIBVOIE, CP, CEDEX, VILLE, PAYS ";
        $query .= "FROM V_entreprise ";
        $query .= ") AS RowConstrainedResult ";
        $query .= "WHERE RowNum >= " . $rowIndex . " AND SIREN = ''";
        $query .= "AND RowNum < " . ($rowIndex + 500) . " ";
        $query .= "ORDER BY RowNum";

        // On execute la requête.
        $result = odbc_exec($connection, $query);

        $sirens = array();
        while ($siren = odbc_fetch_array($result)) {
            $sirens[] = array_map('utf8_encode', $siren);
        }

        // On retourne le résultat de la requête.
        return $sirens;
    }

    public function sirenTableAction(Request $request) {
        $rowIndex = $request->get('rowIndex');

        //$sirens = $this->sirenExtraction($rowIndex);

        $formSirenSearchBySIRENBuilder = $this->get('form.factory')->createNamedBuilder('searchBySIREN', FormType::class);
        $formSirenSearchBySIRENBuilder
                ->add('searchValue', TextType::class, array(
                    'label' => "Recherche par SIREN",
                    'attr' => array(
                        'pattern' => ".{3,}",
                        'title' => "3 caractères minimum.",
                        'placeholder' => "3 caractères minimum."
                    )
                ))
                ->add('Search', SubmitType::class, array(
                    'label' => 'Rechercher'
                ))
        ;
        $formSirenSearchBySIREN = $formSirenSearchBySIRENBuilder->getForm();

        $formSirenSearchByRaisonSocialeBuilder = $this->get('form.factory')->createNamedBuilder('searchByRaisonSociale', FormType::class);
        $formSirenSearchByRaisonSocialeBuilder
                ->add('searchValue', TextType::class, array(
                    'label' => "Recherche par Raison Sociale"
                ))
                ->add('Search', SubmitType::class, array(
                    'label' => 'Rechercher'
                ))
                ->add('searchParameter', HiddenType::class, array(
                    'data' => 'RaisonSociale'
                ))
        ;
        $formSirenSearchByRaisonSociale = $formSirenSearchByRaisonSocialeBuilder->getForm();

        return $this->render("NoxIntranetRessourcesBundle:Siren:sirenTable.html.twig", array('searchBySIREN' => $formSirenSearchBySIREN->createView(), 'searchByRaisonSociale' => $formSirenSearchByRaisonSociale->createView(), 'rowIndex' => $rowIndex));
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

            // Pour chaques résultats et tant que le tableau des résultat <= 100 éléments...
            while (($siren = odbc_fetch_array($result)) && count($sirens) <= 100) {
                // Encodage en utf-8.
                $sirens[] = array_map('utf8_encode', $siren);
            }
            odbc_close($connection);

            // On retourne le tableau des résultats au format JSON.
            return new Response(json_encode($sirens));
        }
    }

    public function ajaxSearchSirenByAction(Request $request) {
        $server = self::$SERVER;
        $database = self::$DATABASE;
        $user = self::$USER;
        $password = self::$PASSWORD;

        $start = microtime(true);

        $formArray = $request->request->all();

        $sirens = array();
        foreach ($formArray as $form) {

            $connection = odbc_connect("Driver={SQL Server};Server=$server;Database=$database;", $user, $password);

            $query = "SELECT SIREN, SIRET, NumTVAIntra, NICSIEGE, RaisonSociale, SIGLE, ENSEIGNE, NAF, CATJUR, LIBNJ, NUMVOIE, INDREP, TYPVOIE, LIBVOIE, CP, CEDEX, VILLE, PAYS FROM V_entreprise WITH (NOLOCK) WHERE ";
            $query .= $form['searchParameter'] . " LIKE '%" . $form['searchValue'] . "%' ";
            $query .= "ORDER BY SIREN";

            var_dump($query);

            // On execute la requête.
            $result = odbc_exec($connection, $query);

            $time_elapsed_secs = microtime(true) - $start;

            var_dump($time_elapsed_secs);

            while ($siren = odbc_fetch_array($result)) {
                $sirens[] = array_map('utf8_encode', $siren);
            }

            odbc_close($connection);
        }



        return new Response(json_encode($sirens));
    }

}
