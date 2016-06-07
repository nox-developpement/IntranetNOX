<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\PointageBundle\Controller;

/**
 * Description of UsersAssistanteAgenceGetter
 *
 * @author t.besson
 */
class UsersAssistanteAgenceGetter implements PHPExcel_Reader_IReadFilter {

    public function readCell($column, $row, $worksheetName = '') {
        // Read title row and rows 20 - 30
        if ($row > 4 && ($column == 'D' || $column == 'E')) {
            return true;
        }
        return false;
    }

}
