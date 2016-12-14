<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminCodes {

    private static $NoMessage = 'no message';
    private static $Tblname = 'Coreavailablecodes';

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname(self::$Tblname, 'production');
    }

    public static function get_Row_By_Code($code) {
        $datasource = array('tblname' => self::$Tblname,
            params => array('mycode' => $code, 'fklng' => 'current', 'mykatastima' => 'current'));
        $ret = PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($datasource);
        //$ret = PpB2bAdminGetComplex::GetComplex(self::getExtendClassname(), 0, 1, array('mycode' => array('value' => $code)));
        if ($ret && is_array($ret) && count($ret) == 1) {
            $ret = $ret[0];
        } else {
            $ret = null;
        }
        return $ret;
    }

    public static function get_Remarks($code, $row = null) {
        $row = isset($row) ? $row : self::get_Row_By_Code($code);
        $ret = isset($row) ? $row['remarks'] : self::$NoMessage;
        return $ret;
    }

    public static function get_Type($code, $row = null) {
        $row = isset($row) ? $row : self::get_Row_By_Code($code);
        $ret = isset($row) ? $row['mytype'] : self::$NoMessage;
        return $ret;
    }

    public static function get_Page($code, $row = null) {
        $row = isset($row) ? $row : self::get_Row_By_Code($code);
        $ret = isset($row) ? $row['mypage'] : self::$NoMessage;
        return $ret;
    }

    public static function get_Method($code, $row = null) {
        $row = isset($row) ? $row : self::get_Row_By_Code($code);
        $ret = isset($row) ? $row['mymethod'] : self::$NoMessage;
        return $ret;
    }

    public static function get_User_Message($code, $row = null) {
        $row = isset($row) ? $row : self::get_Row_By_Code($code);
        $ret = isset($row) ? '(' . $code . ') ' . $row['remarks'] : self::$NoMessage;
        return $ret;
    }

}
