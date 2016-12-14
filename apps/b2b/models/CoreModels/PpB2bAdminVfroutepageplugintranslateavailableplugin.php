<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-04-26 08:01:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

class PpB2bAdminVfroutepageplugintranslateavailableplugin {

    public static $keyarrPluginTranslates = 'PluginTranslates';

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfroutepageplugintranslateavailablepluginjsonm', 'production');
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfroutepageplugintranslateavailableplugin', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function Get_Page_Plugin_Translates($pagename = null, $pluginname = null) {
        $di = \Phalcon\DI::getDefault();
        $extendclassname = self::getExtendClassname();
        if ($di->controller_params_array['dbmode'] == 'db') {
            if (isset($pagename)) {
                $arrdata = $extendclassname::find(array(
                            "conditions" => "pagename = :pagename: and fklng = :fklng:",
                            "bind" => array('pagename' => $pagename, 'fklng' => \MyCustomHelperLng::My_get_current_lng_id())
                        ))->toArray();
            } elseif (isset($pluginname)) {
                $arrdata = $extendclassname::find(array(
                            "conditions" => "pluginname = :pluginname: and fklng = :fklng:",
                            "bind" => array('pluginname' => $pluginname, 'fklng' => \MyCustomHelperLng::My_get_current_lng_id())
                        ))->toArray();
            }
            if (count($arrdata) > 0) {
                foreach ($arrdata as $key => $value) {
                    $availablepluginaliasname = $value['availablepluginaliasname'];
                    $arrtranslates = json_decode($value['paramjson'], true);
                    $arrkeys = $arrtranslates['keyname'];
                    $arrvals = $arrtranslates['keyvalue'];
                    $arrmykatastima = $arrtranslates['mykatastima'];
                    unset($arrtranslates);
                    foreach ($arrkeys as $key1 => $value1) {
                        $newkeyname = mb_strtoupper($arrkeys[$key1]);
                        $newkeyname = preg_replace('/\s+/', '', $newkeyname);
                        $newmykatastima = mb_strtoupper($arrmykatastima[$key1]);
                        $di->controller_params_array[self::$keyarrPluginTranslates][$availablepluginaliasname][$newkeyname][$newmykatastima] = $arrvals[$key1];
                    }
                }
            }
        }
    }

    public static function Get_Translation($availablepluginaliasname, $keyname) {
        $di = \Phalcon\DI::getDefault();
        $cpa = $di->controller_params_array;
        $keyval = '';
        if (isset($availablepluginaliasname, $keyname)) {
            $keyval = $keyname;
            $keyarr = self::$keyarrPluginTranslates;
            $newkeyname = mb_strtoupper($keyname);
            $newkeyname = preg_replace('/\s+/', '', $newkeyname);
            if (isset($cpa[$keyarr][$availablepluginaliasname], $cpa[$keyarr][$availablepluginaliasname][$newkeyname])) {
                $arrkeyname = $cpa[$keyarr][$availablepluginaliasname][$newkeyname];
                $newmykatastima = mb_strtoupper(\CHCrmCParams::My_get_mykatastima());
                if (is_array($arrkeyname)) {
                    if (isset($cpa[$keyarr][$availablepluginaliasname][$newkeyname][$newmykatastima])) {
                        $keyval = $cpa[$keyarr][$availablepluginaliasname][$newkeyname][$newmykatastima];
                    } else {
                        $newmykatastima = mb_strtoupper(\CHCrmCParams::My_get_mykatastima_default());
                        if (isset($cpa[$keyarr][$availablepluginaliasname][$newkeyname][$newmykatastima])) {
                            $keyval = $cpa[$keyarr][$availablepluginaliasname][$newkeyname][$newmykatastima];
                        } else {
                            foreach ($arrkeyname as $key => $value) {
                                $keyval = $value;
                                break;
                            }
                        }
                    }
                }
            }
        }
        return $keyval;
    }

    public static function Get_Translation_And_Orig($availablepluginaliasname, $arr, $origkeyname, $textifemptyret = '') {
        $ret = (isset($arr[$origkeyname]) ? $arr[$origkeyname] : '');
        $trans_ret = isset($arr['trans_' . $origkeyname]) ? $arr['trans_' . $origkeyname] : null;
        $ret.=self::Get_Translation($availablepluginaliasname, $trans_ret);
        $ret = ($ret == '') ? $textifemptyret : $ret;
        return $ret;
    }

}
