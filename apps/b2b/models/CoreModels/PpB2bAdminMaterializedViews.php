<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminMaterializedViews {

    private static function refreshMaterializedViewWithSchema($mviewnamewithschema) {
        $di = \Phalcon\DI::getDefault();
        $con = $di->get('dbopen', $di);
        $exec = $con->execute("REFRESH MATERIALIZED VIEW " . $mviewnamewithschema . " WITH  DATA");
    }

    public static function refreshMaterializedViewDependByTblnamePg($schemaname, $tblname) {
        $di = \Phalcon\DI::getDefault();
        $schemaname = isset($schemaname) ? $schemaname : $di->controller_params_array['schemaname'];
        $con = $di->get('dbopen', $di);
        $exec = $con->execute("select  " . $schemaname . ".mvupdatedependends(:schemaname,:tblname)", array('schemaname' => $schemaname, 'tblname' => $tblname));
        return;
    }

    public static function refreshMaterializedViewDependBulk() {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        if (isset($cpa['updatemvdependends']) && is_array($cpa['updatemvdependends']) && count($cpa['updatemvdependends']) > 0) {
            foreach ($cpa['updatemvdependends'] as $key => $value) {
                self::refreshMaterializedViewDependByTblnamePg($key, key($value));
            }
        }
    }

}
