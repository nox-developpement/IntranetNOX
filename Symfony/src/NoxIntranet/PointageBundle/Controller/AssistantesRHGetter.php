<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\PointageBundle\Controller;

class AssistantesRHGetter implements \PHPExcel_Reader_IReadFilter {

    public function readCell($column, $row, $worksheetName = '') {
        if ($row > 5 && ($column == 'I')) {
            return true;
        }
        return false;
    }

}
