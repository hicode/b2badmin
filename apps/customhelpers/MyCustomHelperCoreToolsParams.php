<?php

class MyCustomHelperCoreToolsParams extends \Phalcon\Tag {

    public static $GetFileExists_Job_Index = 1;
    public static $GetFileExists_Job_Index_CsvBash = 2;

    public static function Rel_Top_Dir_For_Path() {
        return '';
    }

    public static function Rel_Dir_Tmp() {
        $dir = self::Rel_Top_Dir_For_Path() . 'tmp' . DIRECTORY_SEPARATOR;
        return $dir;
    }

    public static function Rel_Dir_Cache_Main() {
        $dir = self::Rel_Dir_Tmp() . 'cache' . DIRECTORY_SEPARATOR;
        return $dir;
    }

    public static function Rel_Dir_Cache($app, $site, $cachecategory) {
        $dir = self::Rel_Dir_Cache_Main() . $app . DIRECTORY_SEPARATOR . $site . DIRECTORY_SEPARATOR . $cachecategory . DIRECTORY_SEPARATOR;
        return $dir;
    }

    public static function Rel_Dir_Tmp_Delete() {
        $dir = self::Rel_Dir_Tmp() . 'delete' . DIRECTORY_SEPARATOR;
        return $dir;
    }

    public static function Top_Dir_For_Abs_Path() {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
    }

    public static function Top_Dir() {
        return self::Top_Dir_For_Abs_Path() . '..' . DIRECTORY_SEPARATOR;
    }

    public static function Public_Dir_Base() {
        return self::Top_Dir() . 'public' . DIRECTORY_SEPARATOR;
    }

    public static function Public_Dir_Base_Tmp() {
        $dir = self::Public_Dir_Base() . 'tmp' . DIRECTORY_SEPARATOR;
        if (!file_exists($dir)) {

            mkdir($dir, 0777, true);
        }
        return $dir;
    }

    public static function Data_Dir_Base() {
        return self::Top_Dir() . 'data' . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Aioscripts() {
        return self::Data_Dir_Base() . 'Scripts' . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Tmp() {
        return self::Data_Dir_Base() . 'tmp' . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Tmp_Delete() {
        $dir = self::Public_Dir_Base_Tmp() . 'delete' . DIRECTORY_SEPARATOR;
        if (!file_exists($dir)) {

            mkdir($dir, 0777, true);
        }
        return $dir;
    }

    public static function Data_Dir_Cache_Main() {
        $dir = self::Public_Dir_Base_Tmp() . 'cache' . DIRECTORY_SEPARATOR;
        if (!file_exists($dir)) {

            mkdir($dir, 0777, true);
        }
        return $dir;
    }
    
    public static function Data_Dir_Receipts_Invoices() {
        $dir = self::Public_Dir_Base_Tmp() . 'receiptsinvoices' . DIRECTORY_SEPARATOR;
        if (!file_exists($dir)) {

            mkdir($dir, 0777, true);
        }
        return $dir;
    }
    
    public static function Rel_Dir_Receipts_Invoices() {
        $dir = self::Rel_Dir_Tmp() . 'receiptsinvoices' . DIRECTORY_SEPARATOR;
        return $dir;
    }

    public static function Data_Dir_Cache($app, $site, $cachecategory) {
        $dir = self::Data_Dir_Cache_Main() . DIRECTORY_SEPARATOR . $app . DIRECTORY_SEPARATOR . $site . DIRECTORY_SEPARATOR . $cachecategory . DIRECTORY_SEPARATOR;

        if (!file_exists($dir)) {

            mkdir($dir, 0777, true);
        }
        return $dir;
    }

    public static function Data_Dir_Tmp_Getrecords() {
        return self::Data_Dir_Tmp() . 'getrecords' . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Tmp_Json_Base() {
        return self::Data_Dir_Tmp_Getrecords() . 'json' . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Tmp_Json_Files($app, $schemaname, $tblname, $lng, $dtcreated) {
        $yearmonth = MyCustomHelperDateTools::getDateYearMonthNear($dtcreated) . '.zip';
        return self::Data_Dir_Tmp_Getrecords() . 'json' . DIRECTORY_SEPARATOR . $app . DIRECTORY_SEPARATOR . $schemaname . DIRECTORY_SEPARATOR . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR . $yearmonth . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Tmp_Tmp() {
        return self::Data_Dir_Tmp_Getrecords() . 'tmp' . DIRECTORY_SEPARATOR;
    }

    public static function Data_Dir_Tmp_Csvcalls() {
        $dir = self::Data_Dir_Tmp_Tmp() . 'csvcalls' . DIRECTORY_SEPARATOR;
        if (!file_exists($dir)) {

            mkdir($dir, 0777, true);
        }
        return $dir;
    }

    public static function Files_Main_Dir_Base($app) {
        $arr = array(
            'appname' => $app);
        $dirname = self::Data_Dir_Base() . 'Apps' . DIRECTORY_SEPARATOR . $app . DIRECTORY_SEPARATOR;
        $maindirname = $dirname . 'Database' . DIRECTORY_SEPARATOR . 'Files' . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);

        return $maindirname;
    }

    public static function PlainFilesSite_Dir_Base($app, $site) {
        $dirname = self::Data_Dir_Base() . 'Apps' . DIRECTORY_SEPARATOR . $app . DIRECTORY_SEPARATOR;
        $maindirname = $dirname . 'PlainFiles' . DIRECTORY_SEPARATOR . 'Sites' . DIRECTORY_SEPARATOR . $site . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);

        return $maindirname;
    }

    public static function Files_Main_Dir_Schemas($app) {

        $maindirname = self::Files_Main_Dir_Base($app) . 'Schemas' . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);
        return $maindirname;
    }

    public static function Files_Main_Dir_Tables($app, $schemaname) {

        $maindirname = self::Files_Main_Dir_Schemas($app) . $schemaname . DIRECTORY_SEPARATOR . 'Tables' . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);
        return $maindirname;
    }

    public static function Files_Main_Dir_Table_Data($app, $schemaname) {

        $maindirname = self::Files_Main_Dir_Tables($app, $schemaname) . 'Data' . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);
        return $maindirname;
    }

    public static function Files_Main_Dir_Metadata($app, $schemaname) {

        $maindirname = self::Files_Main_Dir_Tables($app, $schemaname) . 'Metadata' . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);
        return $maindirname;
    }

    public static function Files_Main_Dir_Indexes($app, $schemaname) {

        $maindirname = self::Files_Main_Dir_Tables($app, $schemaname) . 'Indexes' . DIRECTORY_SEPARATOR;
        $maindirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($maindirname);
        return $maindirname;
    }

    protected static function Sql_Get_Results($arrparams) {
        $arrparamstemplate = array('di' => null, 'sqlquery' => null, 'sqlparams' => array(), 'fetchmode' => Phalcon\Db::FETCH_ASSOC);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $ret = false;
        $di = $arrparams['di'];
        $fetchmode = $arrparams['fetchmode'];
        $sqlquery = $arrparams['sqlquery'];
        $sqlparams = $arrparams['sqlparams'];
        if (isset($di, $fetchmode, $sqlquery)) {
            $con = $di->get('db');
            $result = $con->query($sqlquery, $sqlparams);
            $result->setFetchMode($fetchmode);
            $ret = $result;
        }
        return $ret;
    }

    public static function GetFileExists($arrparams) {
        $arrparamstemplate = array('app' => 'b2b',
            'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(),
            'tblname' => '',
            'pkid' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'blmetadata' => false,
            'bykey' => null,
            'filextension' => null,
            'jobname' => null,
            'retresult' => 'bool'); //bool or file
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $blmetadata = $arrparams['blmetadata'];
        $bykey = $arrparams['bykey'];
        $filextension = $arrparams['filextension'];
        $jobname = $arrparams['jobname'];
        $retresult = $arrparams['retresult'];
        $ret = false;
        $filename = '';
        if (isset($filextension)) {
            if (isset($bykey)) {
                $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . $filextension;
                if (isset($jobname, $lng) && $jobname = self::$GetFileExists_Job_Index_CsvBash) {
                    $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR . ucfirst($bykey) . $filextension;
                } elseif (isset($jobname) && $jobname = self::$GetFileExists_Job_Index) {
                    $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . $filextension;
                }
            } elseif (isset($pkid, $lng)) {
                $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
                $filename = $dirname . $pkid . $filextension;
            } elseif ($blmetadata == true) {
                $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
                $filename = $maindirname . $tblname . $filextension;
            }
            if (file_exists($filename)) {
                if ($retresult == 'bool') {
                    $ret = true;
                } else {
                    $ret = $filename;
                }
            }
        }
        return $ret;
    }

    public static function Set_Arr_Params(&$arrparams, $field, $val) {
        if ($field === 'blmetadata' && $val === true) {
            $arrparams['bykey'] = null;
            $arrparams['pkid'] = null;
            $arrparams['start'] = null;
            $arrparams['end'] = null;
        } elseif ($field === 'pkid' && $val !== null) {
            $arrparams['bykey'] = null;
            $arrparams['blmetadata'] = false;
            $arrparams['start'] = null;
            $arrparams['end'] = null;
        }
        $arrparams[$field] = $val;
    }

    public static function Arr_Params_Set($arrparams, $arrparamstemplate) {
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $ret = $arrparams;
        if (count($ret > $arrparamstemplate)) {
            foreach ($arrparams as $key => $value) {
                if (!array_key_exists($key, $arrparamstemplate)) {
                    unset($ret[$key]);
                }
            }
        }
        return $ret;
    }

    public static function Arr_Params_Check_All_Required($arrparams) {
        $ret = true;
        foreach ($arrparams as $key => $value) {
            if (!isset($value)) {
                $ret = false;
            }
        }
        return $ret;
    }

}
