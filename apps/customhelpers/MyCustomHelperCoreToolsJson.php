<?php

class MyCustomHelperCoreToolsJson extends MyCustomHelperCoreToolsParams {

    public static function Get_Data($arrparams) {
        $ret = false;
        if (isset($arrparams['beginrecord']) && $arrparams['beginrecord'] > 1) {
            $ret = MyCustomHelperCoreToolsCsvBash::CsvBash_Get_Records_Direct_File_Json($arrparams);
            $ret = $ret['data'];
        } else {
            $ret = self::Json_Files_Get_Table_Data($arrparams);
            if ($ret && count($ret) > 0) {
                $retarr = array();
                foreach ($ret as $key => $row) {
                    $retarr[] = json_decode($row, true);
                }
                $ret = $retarr;
            }
        }

        return $ret;
    }

    public static function Json_Files_Tables_Main_Dir() {
        $di = \Phalcon\DI::getDefault();
        $dir = $di->controller_params_array['scriptdocumentroot'] . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'Apps' . DIRECTORY_SEPARATOR . $di->controller_params_array['app'] . DIRECTORY_SEPARATOR . 'Database' . DIRECTORY_SEPARATOR . $di->controller_params_array['app'] . 'db' . DIRECTORY_SEPARATOR . 'Schemas' . DIRECTORY_SEPARATOR . $di->controller_params_array['schemaname'] . DIRECTORY_SEPARATOR . 'Tables';
        return $dir;
    }

    public static function Json_Files_Get_Table_Data($arrparams) {
        $di = \Phalcon\DI::getDefault();
        $ret = false;
        $dir = self::Json_Files_Tables_Main_Dir();
        $file = $dir . DIRECTORY_SEPARATOR . $arrparams['tblname'] . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR . $di->controller_params_array['lng'] . self::Json_Ext(true);
        if (file_exists($file)) {
            $handle = fopen($file, "r");
            if ($handle) {
                $i = 1;
                while (($line = fgets($handle)) !== false) {
                    $ret[] = $line;
                    $i++;
                    if ($arrparams['totalrecords'] > 0 && $i > $arrparams['totalrecords']) {
                        break;
                    }
                }
                fclose($handle);
            }
        } else {
            MyCustomHelperErrorLog::My_error_log('File not found ' . $file);
        }
        return $ret;
    }

    public static function Json_Ext($bladddot = false) {
        $ret = 'json';
        if ($bladddot === true) {
            $ret = '.' . $ret;
        }
        return $ret;
    }

    public static function Json_Get_Table_Names($app, $schemaname) {
        $ext = MyCustomHelperCoreToolsJson::Json_Ext(false);
        $maindirname = MyCustomHelperCoreToolsJson::Json_Files_Main_Dir_Metadata($app, $schemaname);
        $a = new \MyCustomHelperFileTools($maindirname);
        $paths = $a->My_Do_Job(\MyCustomHelperFileTools::$Job_List_Directory, array('extension' => $ext));
        return $paths;
    }

    public static function Json_GetIndex($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'bykey' => '', 'bldecode' => true, 'blarray' => true, 'blvaluestokeys' => false, 'sortdir' => SORT_ASC);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $bldecode = $arrparams['bldecode'];
        $blarray = $arrparams['blarray'];
        $sortdir = $arrparams['sortdir'];
        $blvaluestokeys = $arrparams['blvaluestokeys'];
        $ret = self::Json_GetFileContent($arrparams);
        if ($ret) {
            if ($bldecode === true) {
                if ($sortdir === SORT_DESC) {
                    arsort($ret);
                }
                if ($blarray === true && $blvaluestokeys === true) {
                    $ret = array_flip($ret);
                }
            }
        } else {
            $ret = false;
        }
        return $ret;
    }

    public static function Json_GetFileContent($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null, 'bldecode' => false, 'blarray' => false);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $blmetadata = $arrparams['blmetadata'];
        $bykey = $arrparams['bykey'];
        $bldecode = $arrparams['bldecode'];
        $blarray = $arrparams['blarray'];
        $ret = false;
        $filename = '';
        if (isset($bykey)) {
            $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . self::Json_Ext(true);
        } elseif (isset($pkid, $lng)) {
            $lngdefault = MyCustomHelperLng::My_get_lng_shortname_default($app);
            $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
            if (!file_exists($dirname)) {
                $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lngdefault . DIRECTORY_SEPARATOR;
            }
            $filename = $dirname . $pkid . self::Json_Ext(true);
        } elseif ($blmetadata == true) {
            $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
            $filename = $maindirname . $tblname . self::Json_Ext(true);
        }
        if (file_exists($filename)) {
            $ret = file_get_contents($filename);
        }
        if ($bldecode == true) {
            $ret = json_decode($ret, $blarray);
        }
        return $ret;
    }

    public static function Json_GetFileExists($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        self::Set_Arr_Params($arrparams, 'filextension', self::Json_Ext(true));
        self::GetFileExists($arrparams);
    }

}
