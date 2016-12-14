<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-03-17 08:19:46 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

class PpB2bAdminVfsitesettings {

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfsitesettings', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function getSettings() {
        $di = \Phalcon\DI::getDefault();
        $arrparams = array();
        $arrdata = null;
        $extendclassname = self::getExtendClassname();
        if ($di->controller_params_array['dbmode'] == 'db') {

            $arrdata = $extendclassname::find(array(
                        "conditions" => "maincontrollername = :maincontrollername: ",
                        "bind" => array('maincontrollername' => $di->controller_params_array['base_controller'])
                    ))->toArray();
        } else if ($di->controller_params_array['dbmode'] == 'files') {
            $fileclassname = \MyCustomHelperClassTools::My_Core_Get_Classname('View' . $di->controller_params_array['base_controller'] . 'sitesettings', 'production');
            //$tbl = 'B2b\Models\ProductionModels\B2bGymView' . $di->controller_params_array['base_controller'] . 'sitesettings';
            $arrbashparams['app'] = $di->controller_params_array['app'];
            $arrbashparams['schemaname'] = $extendclassname::CONST_SCHEMA;
            $arrbashparams['tblname'] = $fileclassname::CONST_TABLE;
            $arrbashparams['lng'] = $di->controller_params_array['lng'];
            $arrbashparams['beginrecord'] = 1;
            $arrbashparams['totalrecords'] = -1;

            $arrdata = \MyCustomHelperCoreToolsJson::Get_Data($arrbashparams);
        }
        if ($arrdata) {
            foreach ($arrdata as $key => $arrdatavalue) {
                $arrparams[$arrdatavalue['paramname']] = $arrdatavalue['paramvalue'];
            }
        }
        $di->controller_params_array['settings'] = $arrparams;
    }

}
