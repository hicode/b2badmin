<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminGetById {

    public static function getById($id, $classname) {
        $row = false;
        $obj = $classname::find(array(
                    "conditions" => "id = :id:",
                    "bind" => array('id' => $id)
                ))->toArray();
        if (count($obj) === 1) {
            $row = $obj[0];
        }
        unset($obj);

        return $row;
    }

}
