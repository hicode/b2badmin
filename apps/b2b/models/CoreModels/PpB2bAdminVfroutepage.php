<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-04-12 18:07:23 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

class PpB2bAdminVfroutepage {

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfroutepage', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function Get_Route_Pages() {
        $di = \Phalcon\DI::getDefault();
        $classname = self::getExtendClassname();
        $pagesarr = $classname::find()->toArray();
        foreach ($pagesarr as $key => $value) {
            $di->controller_params_array['pages'][mb_strtoupper($value['pagename'])] = $value['pagename'];
        }
    }

    public static function Get_Page_Name($pagenamekey) {
        $di = \Phalcon\DI::getDefault();
        return (isset($di->controller_params_array['pages'][mb_strtoupper($pagenamekey)]) ? $di->controller_params_array['pages'][mb_strtoupper($pagenamekey)] : '');
    }

}
