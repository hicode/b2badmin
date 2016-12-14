<?php

class MyCustomHelperCoreToolsCsv extends MyCustomHelperCoreToolsParams {

    public static function Csv_metadata_get_field($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'fieldname' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $fieldname = $arrparams['fieldname'];
        self::Set_Arr_Params($arrparams, 'blmetadata', true);
        $ret = false;
        $meta = self::Csv_GetFileContent($arrparams);
        if ($meta) {
            foreach ($meta as $key => $value) {
                $tmparr = self::Csv_File_Record_To_Array($value);
                if (mb_strtoupper($tmparr['column_name']) === mb_strtoupper($fieldname)) {
                    $ret = $tmparr;
                    break;
                }
            }
        }
        return $ret;
    }

    public static function Csv_Ext($bladddot = false) {
        $ret = 'csv';
        if ($bladddot === true) {
            $ret = '.' . $ret;
        }
        return $ret;
    }

    public static function Csv_Get_Table_Names($app, $schemaname) {
        $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
        $a = new \MyCustomHelperFileTools($maindirname);
        $paths = $a->My_Do_Job(\MyCustomHelperFileTools::$Job_List_Directory, array('extension' => self::Csv_Ext(false)));
        return $paths;
    }

    public static function Csv_GetIndex($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'bykey' => '', 'blvaluestokeys' => false, 'sortdir' => SORT_ASC, 'start' => null, 'end' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $sortdir = $arrparams['sortdir'];
        $blvaluestokeys = $arrparams['blvaluestokeys'];
        $start = $arrparams['start'];
        $end = $arrparams['end'];
        $ret = self::Csv_GetFileContent($arrparams);
        if ($ret) {
            $tmparr = array();
            foreach ($ret as $key => $value) {
                $tmp = self::Csv_File_Record_To_Array($value);
                $tmparr[$tmp['id']] = $tmp[$bykey];
            }
            $ret = $tmparr;
            unset($tmparr);
            if ($sortdir === SORT_DESC) {
                arsort($ret);
            }
            if ($blvaluestokeys === true) {
                $ret = array_flip($ret);
            }
        } else {
            $ret = false;
        }
        return $ret;
    }

    public static function Csv_GetIndexTotalRows($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'bykey' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];

        $ret = false;
        $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . self::Csv_Ext(true);
        if (file_exists($filename)) {
            $file = new SplFileObject($filename);
            $file->seek(PHP_INT_MAX);
            $ret = $file->key();
        }
        return $ret;
    }

    public static function Csv_GetIndexPkidFromBykey($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'bykey' => '', 'searchvalue' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $searchvalue = $arrparams['searchvalue'];
        $ret = false;
        $arr = self::Csv_GetIndex($arrparams);
        if ($arr) {
            $ret = array_search($searchvalue, $arr);
        }
        return $ret;
    }

    public static function Csv_GetFileContent($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null, 'start' => null, 'end' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $blmetadata = $arrparams['blmetadata'];
        $bykey = $arrparams['bykey'];
        $start = $arrparams['start'];
        $end = $arrparams['end'];
        $ret = false;
        $filename = '';
        if (isset($bykey)) {
            $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . self::Csv_Ext(true);
        } elseif (isset($pkid, $lng)) {
            $lngdefault = MyCustomHelperLng::My_get_lng_shortname_default($app);
            $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
            if (!file_exists($dirname)) {
                $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lngdefault . DIRECTORY_SEPARATOR;
            }
            $filename = $dirname . $pkid . self::Csv_Ext(true);
        } elseif ($blmetadata === true) {
            $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
            $filename = $maindirname . $tblname . self::Csv_Ext(true);
        }
        if (file_exists($filename)) {
            $file = new SplFileObject($filename);
            if (isset($start, $end)) {
                while ($start < $end) {
                    $file->seek($start);
                    $result = $file->fgetcsv();
                    if (array(null) !== $result) { // ignore blank lines
                        $ret[] = $result;
                    }
                    $start++;
                }
            } else {
                while (!$file->eof()) {
                    $result = $file->fgetcsv();
                    if (array(null) !== $result) { // ignore blank lines
                        $ret[] = $result;
                    }
                }
            }
        }

        return $ret;
    }

    public static function Csv_GetRecordByPkid($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blarray' => true);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $bldecode = $arrparams['bldecode'];
        $blarray = $arrparams['blarray'];
        $ret = self::Csv_GetFileContent($arrparams);
        if ($ret && count($ret) == 1) {
            $ret = $ret[0];
            if ($blarray === true) {
                $ret = self::Csv_File_Record_To_Array($ret);
            }
        } else {
            $ret = null;
        }
        return $ret;
    }

    public static function Csv_GetRecordValByCol($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'fieldname' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $fieldname = $arrparams['fieldname'];
        $ret = null;
        if (self::Csv_metadata_get_field($arrparams)) {
            $rec = self::Csv_GetRecordByPkid($arrparams);
            if (isset($rec) && isset($rec[$fieldname])) {
                $ret = $rec[$fieldname];
            }
        }
        return $ret;
    }

    public static function Csv_Create_Csv_Files_Index($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'fieldname' => null, 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $ret = false;
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $fieldname = $arrparams['fieldname'];
        $di = \Phalcon\DI::getDefault();
        $meta = self::Csv_metadata_get_field($arrparams);

        if ($meta) {
            $maindirname = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR;
            $classname = 'By' . ucfirst($fieldname);
            $filenamecsv = $maindirname . $classname . self::Csv_Ext(true);
            $sqlquery = "select id, " . $fieldname . " FROM " . $schemaname . "." . $tblname . " order by " . $fieldname . " asc";
            $arrparams = array('di' => $di, 'filename' => $filenamecsv, 'sqlquery' => $sqlquery);
            $ret = self::Csv_Create_File($arrparams);
        }
        return $ret;
    }

    public static function Csv_Create_Csv_Files_Id($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'id' => null, 'rowrec' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $id = $arrparams['id'];
        $rowrec = $arrparams['rowrec'];
        $maindirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
        $filename = $maindirname . $id . self::Csv_Ext(true);
        $arrparams = array('di' => null, 'filename' => $filename, 'rowrec' => $rowrec);
        $ret = self::Csv_Create_File($arrparams);
    }

    public static function Csv_Create_Csv_Files_Metadata($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
        $classname = $tblname;
        self::Set_Arr_Params($arrparams, 'filename', $maindirname . $classname . self::Csv_Ext(true));
        self::Set_Arr_Params($arrparams, 'sqlquery', "SELECT * FROM INFORMATION_SCHEMA.COLUMNS where table_schema=:table_schema and table_name=:table_name ");
        self::Set_Arr_Params($arrparams, 'sqlparams', array('table_schema' => $schemaname,
            'table_name' => $tblname));
        self::Csv_Create_File($arrparams);
    }

    public static function Csv_Create_Csv_Files($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $di = $arrparams['di'];
        try {
            $con = $di->get('dbopen', $di);
            $tables = $con->fetchAll("SELECT table_name FROM information_schema.tables where table_schema=:table_schema", Phalcon\Db::FETCH_ASSOC, array('table_schema' => $schemaname));

            foreach ($tables as $tables1 => $tables2) {
                self::Set_Arr_Params($arrparams, 'tblname', $tables2['table_name']);
                if (strpos(mb_strtoupper($arrparams['tblname']), 'MITRA') !== 0) {
                    self::Csv_Create_Csv_Files_Metadata($arrparams);
                    self::Set_Arr_Params($arrparams, 'sqlquery', "SELECT * FROM " . $schemaname . "." . $arrparams['tblname']);
                    self::Set_Arr_Params($arrparams, 'fetchmode', Phalcon\Db::FETCH_ASSOC);
                    $result = self::Sql_Get_Results($arrparams);
                    while ($rowrec = $result->fetch()) {
                        self::Set_Arr_Params($arrparams, 'lng', MyCustomHelperLng::$Static_Lng_El_Prefix);
                        self::Set_Arr_Params($arrparams, 'id', $rowrec['id']);
                        self::Set_Arr_Params($arrparams, 'rowrec', $rowrec);
                        self::Csv_Create_Csv_Files_Id($arrparams);
                    }
                }
            }
        } catch (Exception $exception) {
            die('error' . $exception);
            $result = $this->getEventsManager()->fire('dispatch:beforeException', $this, $exception);

            if ($result === false) {
                return parent::dispatch();
            } else {
                throw $exception;
            }
        }
    }

    public static function Csv_Create_Jf_Translates($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'mod', 'tblname' => 'jfcontent', 'bykey' => 'idstr');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $ret = true;

        $index = self::Csv_GetIndex($arrparams);
        foreach ($index as $arrparams['pkid'] => $value) {
            $data = '';

            $recarr = self::Csv_GetRecordByPkid($arrparams);
            if (isset($recarr['referenceschema'], $recarr['referencetable'])) {
                $tmparr = $arrparams;
                self::Set_Arr_Params($tmparr, 'schemaname', $recarr['referenceschema']);
                self::Set_Arr_Params($tmparr, 'tblname', $recarr['referencetable']);
                self::Set_Arr_Params($tmparr, 'searchvalue', $recarr[self::$F_ModJfcontentReferenceid]);
                $refid = self::Csv_GetIndexPkidFromBykey($tmparr);
                $customdirname = '..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . 'b2b' . DIRECTORY_SEPARATOR . 'customhelpers' . DIRECTORY_SEPARATOR . 'Tables' . DIRECTORY_SEPARATOR . 'B2bAioTbl20' . DIRECTORY_SEPARATOR . 'Custom' . DIRECTORY_SEPARATOR . '' . $schemaname . '' . DIRECTORY_SEPARATOR . '' . $tblname . '' . DIRECTORY_SEPARATOR . '' . $schemaname2 . '' . DIRECTORY_SEPARATOR . '' . $tblname2 . '' . DIRECTORY_SEPARATOR;
                $customdirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($customdirname);
                $filename = $customdirname . $refid . '.json';
                file_put_contents($filename, $data);
            }
        }
        foreach ($index as $arrparams['pkid'] => $value) {
            $recarr = self::Csv_GetRecordByPkid($arrparams);
            //$data = $recarr;
            if (isset($recarr['referenceschema'], $recarr['referencetable'])) {
                $tmparr = $arrparams;
                self::Set_Arr_Params($tmparr, 'schemaname', $recarr['referenceschema']);
                self::Set_Arr_Params($tmparr, 'tblname', $recarr['referencetable']);
                self::Set_Arr_Params($tmparr, 'searchvalue', $recarr[self::$F_ModJfcontentReferenceid]);
                $refid = self::Csv_GetIndexPkidFromBykey($tmparr);
                self::Set_Arr_Params($tmparr, 'pkid', $refid);
                $refrecarr = self::Csv_GetRecordByPkid($tmparr);


                $customdirname = '..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . 'b2b' . DIRECTORY_SEPARATOR . 'customhelpers' . DIRECTORY_SEPARATOR . 'Tables' . DIRECTORY_SEPARATOR . 'B2bAioTbl20' . DIRECTORY_SEPARATOR . 'Custom' . DIRECTORY_SEPARATOR . '' . $schemaname . '' . DIRECTORY_SEPARATOR . '' . $tblname . '' . DIRECTORY_SEPARATOR . '' . $schemaname2 . '' . DIRECTORY_SEPARATOR . '' . $tblname2 . '' . DIRECTORY_SEPARATOR;
                if (!file_exists($customdirname) && !mkdir($customdirname, 0777, true)) {
                    die('Failed to create ' . $customdirname);
                }
                $filename = $customdirname . $refid . '.json';
                $data = $refrecarr;
                if (file_exists($filename)) {
                    $data = file_get_contents($filename);
                    $data = json_decode($data, true);
                    if (is_array($data) === false) {
                        $data = $refrecarr;
                    }
                }
                $data[$recarr[self::$F_ModJfcontentReferencefield]] = $recarr[self::$F_ModJfcontentJfvalue];
                $data = json_encode($data);

                $fh = fopen($filename, 'w') or die('Error during operation for file ' . $filename);
                fwrite($fh, $data);
                fclose($fh);
            }
        }

        return $ret;
    }

    private static function Csv_Create_File($arrparams) {
        $arrparamstemplate = array('di' => null, 'filename' => null, 'sqlquery' => null, 'sqlparams' => array(), 'rowrec' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $ret = false;
        $di = $arrparams['di'];
        $sqlquery = $arrparams['sqlquery'];
        $sqlparams = $arrparams['sqlparams'];
        $filename = $arrparams['filename'];
        $rowrec = $arrparams['rowrec'];
        if (isset($filename) && MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist(dirname($filename))) {
            $file = new SplFileObject($filename, 'w');
            if (isset($di, $sqlquery)) {
                self::Set_Arr_Params($arrparams, 'fetchmode', Phalcon\Db::FETCH_ASSOC);
                $result = self::Sql_Get_Results($arrparams);
                while ($rec = $result->fetch()) {
                    $tmparr = array();
                    foreach ($rec as $key => $value) {
                        $tmparr[] = $key;
                        $tmparr[] = $value;
                    }
                    $file->fputcsv($tmparr);
                }
                $ret = true;
            } elseif (isset($rowrec)) {
                $tmparr = array();
                foreach ($rowrec as $key => $value) {
                    $tmparr[] = $key;
                    $tmparr[] = MyCustomHelperFileTools::My_Make_Html_String($value, false, true);
                }
                $file->fputcsv($tmparr);
                $ret = true;
            }
            return $ret;
        }
    }

    public static function Csv_File_Record_To_Array($csvrec) {
        $ret = array();
        foreach ($csvrec as $key => $value) {
            if ($key % 2 == 0) {
                $ret[$value] = -1;
            } else {
                $ret[$csvrec[$key - 1]] = $value;
            }
        }
        return $ret;
    }

    public static function Csv_GetFileExists($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        self::Set_Arr_Params($arrparams, 'filextension', self::Csv_Ext(true));
        self::GetFileExists($arrparams);
    }

}
