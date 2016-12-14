<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-08 21:08:01 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 


class PpB2bAdminVftranslate {

    const prefixBulkTranslate = 'getKeyvalueFromKeyname';
    const prefixBulkTranslateSeparator = ';';
    const prefixBulkTranslateSeparatorDb = ',';

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vftranslate', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    private static function getTranslate_directfilejsononerecord($arrparams) {
        $retarr = \MyCustomHelperCoreToolsCsvBash::CsvBash_Get_Records_Direct_File_Json_One_Record($arrparams);
        $rowset = $retarr['data'];
        $classitems = \MyCustomHelperClassTools::My_Core_Get_Classname('Items');
        $classitems::makeSafeFullAndIntroText($rowset);
        return $rowset;
    }

    public static function getRowFromKeyname($keyname, $tblname = null) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $ret = false;
        $extendclassname = self::getExtendClassname();

        if (!isset($tblname)) {
            $tblname = $extendclassname::CONST_TABLE;
        }
        if ($di->controller_params_array['dbmode'] === 'db') {

            if (is_array($keyname)) {
                $conditions = "fklng = :fklng: and (1=2";
                $arrbind = array('fklng' => \MyCustomHelperLng::My_get_current_lng_id());
                foreach ($keyname as $key => $value) {
                    $value = $cpa['objcontroller']->filter->sanitize($value, 'alphanum');
                    if (!is_numeric($value) && $value != '') {
                        $conditions.=" or upper(keyname)= :" . $value . ":";
                        $arrbind[$value] = mb_strtoupper($value);
                    }
                }
                $conditions.=")";
                $arrparams = array(
                    "conditions" => $conditions,
                    "bind" => $arrbind
                );
            } else {
                $arrparams = array(
                    "conditions" => '1=2'
                );
                $keyname = $cpa['objcontroller']->filter->sanitize($keyname, 'alphanum');
                if (!is_numeric($keyname) && $keyname != '') {
                    $arrparams = array(
                        "conditions" => "upper(regexp_replace(keyname, '[^[:alpha:]0-9]', '', 'g')) = :" . $keyname . ": and fklng = :fklng:",
                        "bind" => array($keyname => mb_strtoupper($keyname),
                            'fklng' => \MyCustomHelperLng::My_get_current_lng_id())
                    );
                }
            }
            //error_log('vf_translate : ' . $keyname);
            //error_log('vf_translate : ' . $arrparams['conditions']);
            $tmpret = $extendclassname::find($arrparams);
            if ($tmpret) {
                $ret = $tmpret->toArray();
            }
        } elseif ($di->controller_params_array['dbmode'] === 'files') {

            $arrparams['app'] = $di->controller_params_array['app'];
            $arrparams['schemaname'] = $extendclassname::CONST_SCHEMA;
            $arrparams['tblname'] = $tblname;
            $arrparams['lng'] = $di->controller_params_array['lng'];
            $arrparams['colname'] = 'keyname';
            $arrparams['colval'] = $keyname;

            $ret = self::getTranslate_directfilejsononerecord($arrparams);
            if ($ret) {
                if (count($ret) > 0) {
                    //foreach ($ret as $key => $value) {
                    //    $ret[$key] = json_decode($value, true);
                    //}
                    if (count($ret) == 1) {
                        $ret = $ret[0];
                    }
                } else {
                    $ret = null;
                }
            }
        }

        return $ret;
    }

    private static function getMitraKeyName($keyname) {
        $mitrakeyname = self::prefixBulkTranslate . $keyname . self::prefixBulkTranslate;
        return $mitrakeyname;
    }

    public static function getKeyvalueFromKeyname($keyname, $tblname = null) {
        $di = \Phalcon\DI::getDefault();
        if ($di->controller_params_array['bl_bulkcreate_translates']) {
            $keyval = self::getMitraKeyName($keyname);
            if (!isset($di->getKeyvalueFromKeyname)) {
                $di->getKeyvalueFromKeyname = array();
            }
            $di->getKeyvalueFromKeyname[$keyname] = self::getMitraKeyName($keyname);
        } else {
            $keyval = $keyname;
            $arrtranslate = self::getRowFromKeyname($keyname, $tblname);
            if ($arrtranslate && is_array($arrtranslate)) {
                foreach ($arrtranslate as $key => $value) {
                    if (isset($value['keyvalue'])) {
                        if (mb_strtoupper($value['mykatastima']) == mb_strtoupper(\CHCrmCParams::My_get_mykatastima())) {
                            $keyval = $value['keyvalue'];
                            break;
                        } elseif (mb_strtoupper($value['mykatastima']) == mb_strtoupper(\CHCrmCParams::My_get_mykatastima_default())) {
                            $keyval = $value['keyvalue'];
                        }
                    }
                }
                if ($keyval == $keyname) {
                    foreach ($arrtranslate as $key => $value) {
                        if (isset($value['keyvalue'])) {
                            $keyval = $value['keyvalue'];
                            break;
                        }
                    }
                }
            }
        }
        return $keyval;
    }

    public static function getBulkKeyvaluesFromKeynames($tblname) {
        $ret = false;
        $keynames = '';
        $di = \Phalcon\DI::getDefault();
        if (isset($di->getKeyvalueFromKeyname)) {
            if ($di->controller_params_array['dbmode'] === 'db') {
                $arrkeynames = array();
                foreach ($di->getKeyvalueFromKeyname as $key => $value) {
                    $keynames = $keynames . '\'' . $key . '\'' . self::prefixBulkTranslateSeparatorDb;
                    $arrkeynames[] = $key;
                }
                $keynames = rtrim($keynames, self::prefixBulkTranslateSeparatorDb);
                $keynames = rtrim($keynames, '\'');
                $keynames = ltrim($keynames, '\'');
                $arrtranslate = self::getRowFromKeyname($arrkeynames, $tblname);
                if ($arrtranslate && is_array($arrtranslate)) {
                    $ret = array();

                    foreach ($arrtranslate as $key => $value) {
                        $ret[self::getMitraKeyName($value['keyname'])][$value['mykatastima']] = $value;
                    }
                    $ret1 = array();
                    foreach ($ret as $key => $value) {
                        foreach ($value as $key1 => $value1) {
                            if ($key1 == \CHCrmCParams::My_get_mykatastima()) {
                                $ret1[$key] = $value1;
                                break;
                            } elseif ($key1 == \CHCrmCParams::My_get_mykatastima_default()) {
                                $ret1[$key] = $value1;
                            }
                        }
                        if (!isset($ret1[$key])) {
                            foreach ($value as $key1 => $value1) {
                                $ret1[$key] = $value1;
                                break;
                            }
                        }
                    }
                    $ret = $ret1;
                    unset($ret1);
                }
            } elseif ($di->controller_params_array['dbmode'] === 'files') {

                foreach ($di->getKeyvalueFromKeyname as $key => $value) {
                    $keynames = $keynames . $key . self::prefixBulkTranslateSeparator;
                }
                //$keynames = '"' . $keynames . '"';
                $arrtranslate = self::getRowFromKeyname($keynames, $tblname);
                if ($arrtranslate) {
                    $ret = array();
                    foreach ($arrtranslate as $key => $value) {
                        $ret[self::getMitraKeyName($value['keyname'])] = $value;
                    }
                }
            }
        }

        return $ret;
    }

    public static function getReplacementTextFromBulkKeyvaluesFromKeynames($str, $tblname = null) {
        $di = \Phalcon\DI::getDefault();
        if ($di->controller_params_array['bl_bulkcreate_translates']) {
            $arr = self::getBulkKeyvaluesFromKeynames($tblname);
            if ($arr) {
                $arrtranslates = array();
                foreach ($arr as $key => $value) {
                    $arrtranslates[$key] = $value['keyvalue'];
                    //$str = str_ireplace($key, $value['keyvalue'], $str);
                }
                $str = strtr($str, $arrtranslates);
                $arrtmp = array(self::prefixBulkTranslate => '');
                $str = strtr($str, $arrtmp);
            }
        }
        return $str;
    }

}
