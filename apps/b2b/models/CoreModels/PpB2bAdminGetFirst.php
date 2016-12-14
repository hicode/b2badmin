<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminGetFirst {

    public static function getFirst($classname, $arrparams) {
        $arrphalcon = '';
        $conditions = '';
        $bind = array();
        $i = 0;
        foreach ($arrparams as $key => $value) {
            if ($i > 0) {
                $conditions.=' AND ';
            }
            $conditions.=$key . ' = :' . $key . ':';
            $bind[$key] = $value;
            $i++;
        }
        if ($conditions != '') {
            $arrphalcon = array('conditions' => $conditions, 'bind' => $bind);
            $obj = $classname::findFirst($arrphalcon);
        } else {
            $obj = $classname::findFirst();
        }
        if ($obj) {
            $obj = $obj->toArray();
        } else {
            $obj = array();
        }


        return $obj;
    }

}
