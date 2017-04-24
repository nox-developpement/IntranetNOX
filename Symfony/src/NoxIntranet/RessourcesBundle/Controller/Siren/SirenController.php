<?php

namespace NoxIntranet\RessourcesBundle\Controller\Siren;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SirenController extends Controller {

    static $SERVER = "SRV-NOX35-APPLI\EVERWIN";
    static $DATABASE = "BaseSiren";
    static $USER = "NOXGXreader";
    static $PASSWORD = "NOX35GXreader";

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

        $sirens = $this->sirenExtraction($rowIndex);

        $formSirenSearchBuilder = $this->createFormBuilder();
        $formSirenSearchBuilder
                ->add('SIREN', TextType::class, array(
                    'label' => "SIREN"
                ))
                ->add('SIRET', TextType::class, array(
                    'label' => 'SIRET'
                ))
                ->add('Search', SubmitType::class, array(
                    'label' => 'Rechercher'
                ))
                ->add('rowIndex', HiddenType::class, array(
                    'data' => $rowIndex
                ))
        ;
        $formSirenSearch = $formSirenSearchBuilder->getForm();

        return $this->render("NoxIntranetRessourcesBundle:Siren:sirenTable.html.twig", array('sirens' => $sirens, 'searchSirenForm' => $formSirenSearch->createView(), 'rowIndex' => $rowIndex));
    }

    public function ajaxSearchSirenAction(Request $request) {
        $server = self::$SERVER;
        $database = self::$DATABASE;
        $user = self::$USER;
        $password = self::$PASSWORD;

        $form = $request->get('form');

        $connection = odbc_connect("Driver={SQL Server};Server=$server;Database=$database;", $user, $password);

        $query = "SELECT SIREN, SIRET, NumTVAIntra, NICSIEGE, RaisonSociale, SIGLE, ENSEIGNE, NAF, CATJUR, LIBNJ, NUMVOIE, INDREP, TYPVOIE, LIBVOIE, CP, CEDEX, VILLE, PAYS ";
        $query .= "FROM ( SELECT ROW_NUMBER() OVER ( ORDER BY SIREN ) AS RowNum, SIREN, SIRET, NumTVAIntra, NICSIEGE, RaisonSociale, SIGLE, ENSEIGNE, NAF, CATJUR, LIBNJ, NUMVOIE, INDREP, TYPVOIE, LIBVOIE, CP, CEDEX, VILLE, PAYS ";
        $query .= "FROM V_entreprise ";
        $query .= ") AS RowConstrainedResult ";
        $query .= "WHERE RowNum >= " . $form['rowIndex'] . " ";
        $query .= "AND RowNum < " . ($form['rowIndex'] + 500) . " ";
        $query .= isset($form['SIREN']) ? "AND SIREN = '" . $form['SIREN'] . "' " : "";
        $query .= isset($form['SIRET']) ? "AND SIRET = '" . $form['SIRET'] . "' " : "";
        $query .= "ORDER BY RowNum";

        // On execute la requête.
        $result = odbc_exec($connection, $query);

        $sirens = array();
        while ($siren = odbc_fetch_array($result)) {
            $sirens[] = array_map('utf8_encode', $siren);
        }

        return new Response(json_encode($sirens));
    }

}
