<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-04-26 08:01:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

class PpB2bAdminVftranslateavailableplugin {

    public static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vftranslateavailablepluginjson', 'production');
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vftranslateavailableplugin', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

}
