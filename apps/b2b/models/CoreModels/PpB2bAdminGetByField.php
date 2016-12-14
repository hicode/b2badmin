<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminGetByField {

    public static function getByField($fieldid, $fieldvalue, $classname) {
        $row = false;
        $obj = $classname::find(array(
                    "conditions" => "$fieldid = :$fieldid:",
                    "bind" => array("$fieldid" => $fieldvalue)
                ))->toArray();


        return $obj;
    }

}
