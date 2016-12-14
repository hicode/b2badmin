<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-04-20 12:05:10 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

class PpB2bAdminVfpluginnoavailableparams {

    public static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfpluginnoavailableparamsjsonm', 'production');
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfpluginnoavailableparamsm', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function Get_Params_By_Fkplugin($fkplugin, $blstep1 = true) {
        $di = \Phalcon\DI::getDefault();
        $extendclassname = self::getExtendClassname();
        if ($di->controller_params_array['dbmode'] == 'db') {
            $arrdata = $extendclassname::find(array(
                        "conditions" => "fkplugin = :fkplugin: and (mykatastima = :mykatastima1: or mykatastima = :mykatastima2:)",
                        "bind" => array(
                            'fkplugin' => $fkplugin,
                            'mykatastima1' => \CHCrmCParams::My_get_mykatastima(),
                            'mykatastima2' => \CHCrmCParams::My_get_mykatastima_default()
                        ),
                        "order" => "id asc"
                    ))->toArray();
            if (count($arrdata) > 0) {
                $ret = self::Get_B2BAdmin_Str_To_ControllerParamsArray($arrdata, $blstep1);
            }
        }
        return $ret;
    }

    public static function Get_Params_By_Aliasname($pluginaliasname, $blstep1 = true) {
        $di = \Phalcon\DI::getDefault();
        $extendclassname = self::getExtendClassname();
        if ($di->controller_params_array['dbmode'] == 'db') {
            $arrdata = $extendclassname::find(array(
                        "conditions" => "pluginaliasname = :pluginaliasname: and (mykatastima = :mykatastima1: or mykatastima = :mykatastima2:)",
                        "bind" => array('pluginaliasname' => $pluginaliasname,
                            'mykatastima1' => \CHCrmCParams::My_get_mykatastima(),
                            'mykatastima2' => \CHCrmCParams::My_get_mykatastima_default()
                        ),
                        "order" => "id asc"
                    ))->toArray();
            if (count($arrdata) > 0) {
                $ret = self::Get_B2BAdmin_Str_To_ControllerParamsArray($arrdata, $blstep1);
            }
        }
        return $ret;
    }

    public static function Get_B2BAdmin_Str_To_ControllerParamsArray($arrdata, $blstep1 = true) {
        $di = \Phalcon\DI::getDefault();
        $ret = array();
//        $arrdata_concat = array();
//        foreach ($arrdata as $key => $value) {
//            $pluginfirstkey = $value['pluginfirstkey'];
//            $arr_paramval = json_decode($value['paramjson'], true);
//            unset($value['paramjson']);
//            if (!isset($arrdata_concat[$pluginfirstkey]['paramarray'])) {
//                $arrdata_concat[$pluginfirstkey]['paramarray'] = array();
//            }
//            $arrdata_concat[$pluginfirstkey]['paramarray'] = array_merge_recursive($arrdata_concat[$pluginfirstkey]['paramarray'], $arr_paramval);
//            foreach ($value as $key1 => $value1) {
//                $arrdata_concat[$pluginfirstkey][$key1] = $value1;
//            }
//        }
//        $arrdata = $arrdata_concat;
//        unset($arrdata_concat);
        foreach ($arrdata as $key => $value) {
            $pluginfirstkey = $value['pluginfirstkey'];
            if (!isset($ret[$pluginfirstkey])) {
                $fkplugin = $value['fkplugin'];
                $ret[$pluginfirstkey]['id'] = $fkplugin;
                //$ret[$pluginfirstkey]['mykatastima'] = isset($value['mykatastima']) ? $value['mykatastima'] : $di->controller_params_array['mykatastima'];
                $arr_paramval = json_decode($value['paramjson'], true);
                //$arr_paramval = $value['paramarray'];
                $arr_pluginparamname = $arr_paramval['pluginparamname'];
                $arr_pluginparamvalue = $arr_paramval['pluginparamvalue'];
                $arr_ordering = $arr_paramval['ordering'];
                array_multisort($arr_ordering, SORT_ASC, SORT_NUMERIC, $arr_pluginparamname, $arr_pluginparamvalue);
                unset($arr_paramval);
                $tot = count($arr_pluginparamname);
                for ($k = 0; $k < $tot; $k++) {
                    $pluginparamname = $arr_pluginparamname[$k];
                    $pluginparamvalue = $arr_pluginparamvalue[$k];
                    $arrkeys = explode('+', $pluginparamname);
                    array_unshift($arrkeys, $pluginfirstkey);

                    $totparams = count($arrkeys);
                    $lastkeyname = $arrkeys[$totparams - 1];
                    $newparamval = $pluginparamvalue;
                    if ($lastkeyname == 'id' || $lastkeyname == 'dbtype' || $lastkeyname == 'fieldparam' || $lastkeyname == 'fieldname' || $lastkeyname == 'checkedon') {
                        $newparamval = \MyCustomHelperClassTools::My_Class_Get_User_Prop_Or_Method($pluginparamvalue);
                        if (!isset($newparamval)) {
                            $newparamval = $pluginparamvalue;
                        }
                    }
                    if ($blstep1) {
                        $newparamval = self::Make_Params_Step1($arrkeys, $newparamval);
                    }
                    $newarr = $newparamval;
                    for ($i = $totparams - 1; $i >= 0; $i--) {
                        $newarr = array($arrkeys[$i] => $newarr);
                    }
                    $mynewarray = &$ret;
                    for ($i = 0; $i < $totparams; $i++) {
                        if (!isset($mynewarray[$arrkeys[$i]])) {
                            $mynewarray[$arrkeys[$i]] = $newarr[$arrkeys[$i]];
                        }
                        $newarr = $newarr[$arrkeys[$i]];
                        $mynewarray = &$mynewarray[$arrkeys[$i]];
                    }
                }
                unset($arr_pluginparamname);
                unset($arr_pluginparamvalue);
            }
        }
        return $ret;
    }

    public static function Make_Params_Step1($arrkeys, $paramval) {
        /* if ($paramval == 'parentgridid' &&
          count(preg_grep('/datasource/', $arrkeys)) > 0 &&
          count(preg_grep('/extrasearch/', $arrkeys)) > 0 &&
          count(preg_grep('/value/', $arrkeys)) > 0) {
          \MyCustomHelperCoreDi::Get_Glb_request_Pieces_dataID($fkparentlng, $fklng);
          if (isset($fkparentlng)) {
          $paramval = $fkparentlng;
          }
          } */
        if ($arrkeys[0] == \CHCrmCParams::$keyarrDataTableAjax) {
            $paramval = PpB2bAdminMetronic454PluginDataTableAjax::Make_Params_Step1($paramval);
        }
        return $paramval;
    }

}
