<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminGetComplex {

    public static function GetComplex($classname, $start, $length, $search = null, $order = array('id' => 'asc')) {
        $di = \Phalcon\DI::getDefault();
        $ret = false;
        $start = isset($start) ? $start : 0;
        $search = isset($search) ? $search : array();
        $length = isset($length) ? $length : -1;
        $length = $length <= 0 ? 1000 : $length;
        if (!class_exists($classname)) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname($classname);
        }
        if (class_exists($classname)) {
            $wheretxt = '';
            $bindarr = array();
            if ($search) {
                foreach ($search as $key => $value) {
                    if ($wheretxt !== '') {
                        $wheretxt = $wheretxt . ' AND ';
                    }

                    $operator = ' = ';
                    $bindarr[$key] = $value['value'];
                    $castkey = $key;
                    if (mb_strtoupper($value['searchmethod']) === 'LIKE') {
                        $lowerstart = ' lower( ';
                        $lowerend = ') ';
                        $operator = " Like ";
                        $bindarr[$key] = '%' . $value['value'] . '%';
                        $castkey = ' cast (' . $key . ' as text) ';
                    }
                    if ($key == 'fklng') {
                        $wheretxt = $wheretxt . ' ( ';
                        $wheretxtcnt = $wheretxtcnt . ' ( ';
                    }
                    $wheretxt = $wheretxt . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . ':' . $lowerend;
                    if ($key == 'fklng') {
                        $wheretxt = $wheretxt . ' OR fklng=' . \MyCustomHelperLng::$Static_Lng_All_Id . ' ) ';
                    }
                }
            }
            $ordertxt = '';
            if ($order) {
                foreach ($order as $key => $value) {
                    if ($ordertxt !== '') {
                        $ordertxt = $ordertxt . ', ';
                    }
                    $ordertxt = $key . ' ' . $value;
                }
            }
            $obj = new $classname;
            $ret = $obj->find(
                            array(
                                "offset" => $start,
                                "limit" => $length,
                                "order" => $ordertxt,
                                "conditions" => $wheretxt,
                                "bind" => $bindarr,
                                'hydration' => \Phalcon\Mvc\Model\Resultset::HYDRATE_ARRAYS
                    ))->toArray();
        } else {
            \MyCustomHelperErrorLog::My_error_log('Not found ' . $classname);
        }

        return $ret;
    }

}
