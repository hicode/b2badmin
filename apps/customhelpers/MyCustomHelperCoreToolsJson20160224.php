<?php

class MyCustomHelperCoreToolsJson extends MyCustomHelperCoreToolsParams {

    public static function Json_metadata_get_field($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'fieldname' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $fieldname = $arrparams['fieldname'];
        $arrparams['blmetadata'] = true;
        $ret = false;
        $meta = self::Json_GetFileContent($arrparams);
        if ($meta) {
            $meta = json_decode($meta, true);
            $meta = array_change_key_case($meta, CASE_UPPER);
            $fieldname = mb_strtoupper($fieldname);
            if (isset($meta[$fieldname])) {
                $ret = $meta[$fieldname];
            }
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

    public static function Json_Jsononly_File() {
        return'--jsondata--';
    }

    public static function Json_Get_Table_Names($app, $schemaname) {
        $ext = MyCustomHelperCoreToolsJson::Json_Ext(false);
        $maindirname = MyCustomHelperCoreToolsJson::Json_Files_Main_Dir_Metadata($app, $schemaname);
        $a = new \MyCustomHelperFileTools($maindirname);
        $paths = $a->My_Do_Job(\MyCustomHelperFileTools::$Job_List_Directory, array('extension' => $ext));
        return $paths;
    }

    public static function Json_GetIndex($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'bykey' => '', 'bldecode' => true, 'blarray' => true, 'blvaluestokeys' => false, 'sortdir' => SORT_ASC);
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

    public static function Json_GetIndexPkidFromBykey($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'bykey' => '', 'searchvalue' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $searchvalue = $arrparams['searchvalue'];
        $ret = false;
        $arr = self::Json_GetIndex($arrparams);
        if ($arr) {
            $ret = array_search($searchvalue, $arr);
        }
        return $ret;
    }

    public static function Json_GetFileContent($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null, 'bldecode' => false, 'blarray' => false);
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
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        self::Set_Arr_Params($arrparams, 'filextension', self::Json_Ext(true));
        self::GetFileExists($arrparams);
    }

    public static function Json_GetRecordByPkid($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'bldecode' => true, 'blarray' => true);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $bldecode = $arrparams['bldecode'];
        $blarray = $arrparams['blarray'];
        $ret = self::Json_GetFileContent($arrparams);
        if ($ret) {

            if ($bldecode == true) {
                $ret = json_decode($ret, $blarray);
            }
        } else {
            $ret = null;
        }
        return $ret;
    }

    public static function Json_GetRecordValByCol($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'fieldname' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $fieldname = $arrparams['fieldname'];
        $ret = null;
        if (self::Json_metadata_get_field($arrparams)) {
            $rec = self::Json_GetRecordByPkid($arrparams);
            if (isset($rec) && isset($rec[$fieldname])) {
                $ret = $rec[$fieldname];
            }
        }
        return $ret;
    }

    public static function Json_Create_Json_Files_Index($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'fieldname' => null, 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $fieldname = $arrparams['fieldname'];
        $di = \Phalcon\DI::getDefault();
        $meta = MyCustomHelperCoreToolsJson::Json_metadata_get_field($arrparams);

        if ($meta) {
            $maindirname = MyCustomHelperCoreToolsJson::Json_Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR;
            $classname = 'By' . ucfirst($fieldname);
            $filename = $maindirname . $classname . MyCustomHelperCoreToolsJson::Json_Ext(true);
            if (isset($di)) {
                $con = $di->get('dbopen', $di);
                $sql = "select id, " . $fieldname . " FROM " . $schemaname . "." . $tblname . " order by " . $fieldname . " asc";
                $rows = $con->fetchAll($sql, Phalcon\Db::FETCH_ASSOC);
                $idtoindexkey = array_column($rows, $fieldname, 'id');
            } else {
                $ext = MyCustomHelperCoreToolsJson::Json_Ext(true);
                $dirpath = MyCustomHelperCoreToolsJson::Json_Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . MyCustomHelperLng::My_get_lng_shortname_default($app) . DIRECTORY_SEPARATOR;
                $objfiletools = new MyCustomHelperFileTools($dirpath);
                $files = $objfiletools->My_Do_Job(MyCustomHelperFileTools::$Job_List_Directory, array('extension' => MyCustomHelperCoreToolsJson::Json_Ext()));
                foreach ($files as $key => $recfilename) {
                    $id = basename($recfilename, $ext);
                    $idtoindexkey[$id] = MyCustomHelperCoreToolsJson::Json_GetRecordValByCol($app, $schemaname, $tblname, $id, MyCustomHelperLng::My_get_lng_shortname_default($app), $fieldname);
                }
            }



            $idtoindexkey = json_encode($idtoindexkey);
            $arr = array(
                'jsondata' => $idtoindexkey);
            $data = MyCustomHelperTemplate::My_core_make_string_from_template(MyCustomHelperCoreToolsJson::Json_Jsononly_File(), $arr);
            $blreplacefile = true;
            MyCustomHelperCore::My_core_create_file_from_template($filename, $blreplacefile, $data);
        }
    }

    public static function Json_Create_Json_Files_Id($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'id' => null, 'jsondata' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $id = $arrparams['id'];
        $jsondata = $arrparams['jsondata'];
        $maindirname = MyCustomHelperCoreToolsJson::Json_Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
        $filename = $maindirname . $id . MyCustomHelperCoreToolsJson::Json_Ext(true);
        $arr = array(
            'jsondata' => $jsondata);
        $data = MyCustomHelperTemplate::My_core_make_string_from_template(MyCustomHelperCoreToolsJson::Json_Jsononly_File(), $arr);
        $blreplacefile = true;
        MyCustomHelperCore::My_core_create_file_from_template($filename, $blreplacefile, $data);
    }

    public static function Json_Create_Json_Files_Metadata($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'tblname' => '', 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $di = $arrparams['di'];
        $con = $di->get('dbopen', $di);

        $maindirname = MyCustomHelperCoreToolsJson::Json_Files_Main_Dir_Metadata($app, $schemaname);

        $classname = $tblname;
        $filename = $maindirname . $classname . MyCustomHelperCoreToolsJson::Json_Ext(true);
        $metadata = $con->fetchAll("select column_name, row_to_json(row) jsonrow from ( SELECT * FROM INFORMATION_SCHEMA.COLUMNS where table_schema=:table_schema and table_name=:table_name ) row ", Phalcon\Db::FETCH_ASSOC, array('table_schema' => $schemaname,
            'table_name' => $tblname));
        $arrmetadata = array();
        foreach ($metadata as $metadata1 => $metadata2) {
            $jsonrow = $metadata2['jsonrow'];
            $arrmetadata[$metadata2['column_name']] = $jsonrow;
        }

        $arr = array(
            'jsondata' => json_encode($arrmetadata));
        $data = MyCustomHelperTemplate::My_core_make_string_from_template(MyCustomHelperCoreToolsJson::Json_Jsononly_File(), $arr);
        $blreplacefile = true;
        MyCustomHelperCore::My_core_create_file_from_template($filename, $blreplacefile, $data);
    }

    public static function Json_Create_Json_Files($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'aio', 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $di = $arrparams['di'];
        try {
            $con = $di->get('dbopen', $di);
            $tables = $con->fetchAll("SELECT table_name FROM information_schema.tables where table_schema=:table_schema", Phalcon\Db::FETCH_ASSOC, array('table_schema' => $schemaname));

            foreach ($tables as $tables1 => $tables2) {
                $arrparams['tblname'] = $tables2['table_name'];
                $rows = $con->fetchAll("select id, row_to_json(row) jsonrow from ( SELECT * FROM " . $schemaname . "." . $arrparams['tblname'] . " ) row ", Phalcon\Db::FETCH_ASSOC);
                self::Json_Create_Json_Files_Metadata($arrparams);


                foreach ($rows as $rows1 => $rows2) {
                    $arrparams['id'] = $rows2['id'];
                    $arrparams['jsondata'] = $rows2['jsonrow'];
                    $arrparams['lng'] = MyCustomHelperLng::$Static_Lng_El_Prefix;
                    self::Json_Create_Json_Files_Id($arrparams);
                }
            }
        } catch (Exception $exception) {
            $result = $this->getEventsManager()->fire('dispatch:beforeException', $this, $exception);

            if ($result === false) {
                return parent::dispatch();
            } else {
                throw $exception;
            }
        }
    }

}
