<?php

class MyCustomHelperCoreToolsCsvBash extends MyCustomHelperCoreToolsParams {

    private static $CsvBash_GetFileContent_Job_Record_By_Id = 1;
    private static $CsvBash_GetFileContent_Job_Index = 2;
    public static $CsvBash_Get_Header_Field_Position_Job_Index = 1;
    public static $CsvBash_Get_Header_Field_Position_Job_Index_Temporary = 2;
    private static $CsvBash_Get_Header_Field_Position_Job_Metadata = 3;
    private static $CsvBash_Get_Header_Field_Position_Job_Table = 4;
    private static $CsvBash_IndexName_IdToFilenameToIdstr = 'IdToFilenameToIdstr';
    private static $CsvBash_IndexName_IdToFilename = 'IdToFilename';
    private static $CsvBash_Script_Create_Csvs = 'createcsvs.bash';
    private static $CsvBash_Script_Create_Csvs_Jsons = 'createcsvsjsons.bash';
    private static $CsvBash_Script_Remove_Unsynced_Data = 'removeunsynceddata.bash';
    private static $CsvBash_Script_Get_Records = 'getrecords.bash';
    private static $CsvBash_Script_Get_Total_Records = 'gettotalrecords.bash';
    private static $CsvBash_Script_Get_Records_Direct_File_Json = 'getrecordsdirectfilejson.bash';
    private static $CsvBash_Script_Get_Records_Direct_File_Json_One_Record = 'getrecordsdirectfilejsononerecord.bash';
    private static $CsvBash_Script_Get_Field_Position = 'getfieldposition.bash';
    private static $CsvBash_GetFileName_Job_Index = 1;
    private static $CsvBash_GetFileName_Job_Index_Temporary = 2;
    private static $CsvBash_GetFileName_Job_Table_Data = 3;
    private static $CsvBash_GetFileName_Job_Table_Metadata = 4;

    public static function CsvBash_metadata_get_field($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'fieldname' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $fieldname = $arrparams['fieldname'];
        self::Set_Arr_Params($arrparams, 'blmetadata', true);
        $ret = false;
        $meta = self::CsvBash_GetFileContent($arrparams);
        if ($meta) {
            foreach ($meta as $key => $value) {
                $tmparr = self::CsvBash_File_Record_To_Array($value);
                if (mb_strtoupper($tmparr['column_name']) === mb_strtoupper($fieldname)) {
                    $ret = $tmparr;
                    break;
                }
            }
        }
        return $ret;
    }

    public static function CsvBash_Ext($bladddot = false) {
        $ret = 'csv';
        if ($bladddot === true) {
            $ret = '.' . $ret;
        }
        return $ret;
    }

    public static function CsvBash_Get_Table_Names($app, $schemaname) {
        $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
        $a = new \MyCustomHelperFileTools($maindirname);
        $paths = $a->My_Do_Job(\MyCustomHelperFileTools::$Job_List_Directory, array('extension' => self::CsvBash_Ext(false)));
        return $paths;
    }

    public static function CsvBash_GetIndex($arrparams) {
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
        $ret = self::CsvBash_GetFileContent($arrparams);
        if ($ret) {
            $tmparr = array();
            foreach ($ret as $key => $value) {
                $tmp = self::CsvBash_File_Record_To_Array($value);
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

    public static function CsvBash_GetIndexTotalRows($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'bykey' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];

        $ret = false;
        $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . self::CsvBash_Ext(true);
        if (file_exists($filename)) {
            $file = new SplFileObject($filename);
            $file->seek(PHP_INT_MAX);
            $ret = $file->key();
        }
        return $ret;
    }

    public static function CsvBash_GetIndexPkidFromBykey($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'bykey' => '', 'searchvalue' => '');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $searchvalue = $arrparams['searchvalue'];
        $ret = false;
        $arr = self::CsvBash_GetIndex($arrparams);
        if ($arr) {
            $ret = array_search($searchvalue, $arr);
        }
        return $ret;
    }

    public static function CsvBash_GetFileContent($arrparams) {
        $arrparamstemplate = array('app' => 'b2b',
            'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(),
            'tblname' => '',
            'jobname' => self::$CsvBash_GetFileContent_Job_Record_By_Id,
            'indexname' => self::$CsvBash_IndexName_IdToFilename,
            'pkid' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'blmetadata' => false,
            'bykey' => null,
            'start' => null,
            'end' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $jobname = $arrparams['jobname'];
        $indexname = $arrparams['indexname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $blmetadata = $arrparams['blmetadata'];
        $bykey = $arrparams['bykey'];
        $start = $arrparams['start'];
        $end = $arrparams['end'];
        $ret = false;
        $filename = '';

        if ($jobname == self::$CsvBash_GetFileContent_Job_Record_By_Id) {
            $tmparrparams = array('app' => $app,
                'schemaname' => $schemaname,
                'tblname' => $tblname,
                'lng' => $lng,
                'bykey' => $indexname,
                'filextension' => self::CsvBash_Ext(true),
                'jobname' => self::$GetFileExists_Job_Index_CsvBash,
                'retresult' => 'file');
            $filename = self::GetFileExists($tmparrparams);
            if (!$filename && $indexname != self::$CsvBash_IndexName_IdToFilename) {
                $tmparrparams['indexname'] = self::$CsvBash_IndexName_IdToFilename;
                $indexname = $tmparrparams['indexname'];
                $filename = self::GetFileExists($tmparrparams);
            }
        }

        //if (file_exists($filename)) {










        $dirname = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
        if (!file_exists($dirname)) {
            $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lngdefault . DIRECTORY_SEPARATOR;
        }
        $filename = $dirname . $pkid . self::CsvBash_Ext(true);



        if (isset($bykey)) {
            $filename = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . 'By' . ucfirst($bykey) . self::CsvBash_Ext(true);
        } elseif (isset($pkid, $lng)) {
            $lngdefault = MyCustomHelperLng::My_get_lng_shortname_default($app);
            $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
            if (!file_exists($dirname)) {
                $dirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lngdefault . DIRECTORY_SEPARATOR;
            }
            $filename = $dirname . $pkid . self::CsvBash_Ext(true);
        } elseif ($blmetadata === true) {
            $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
            $filename = $maindirname . $tblname . self::CsvBash_Ext(true);
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

    public static function CsvBash_GetRecordByPkid($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blarray' => true);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $bldecode = $arrparams['bldecode'];
        $blarray = $arrparams['blarray'];
        $ret = self::CsvBash_GetFileContent($arrparams);
        if ($ret && count($ret) == 1) {
            $ret = $ret[0];
            if ($blarray === true) {
                $ret = self::CsvBash_File_Record_To_Array($ret);
            }
        } else {
            $ret = null;
        }
        return $ret;
    }

    public static function CsvBash_GetRecordValByCol($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'fieldname' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $pkid = $arrparams['pkid'];
        $lng = $arrparams['lng'];
        $fieldname = $arrparams['fieldname'];
        $ret = null;
        if (self::CsvBash_metadata_get_field($arrparams)) {
            $rec = self::CsvBash_GetRecordByPkid($arrparams);
            if (isset($rec) && isset($rec[$fieldname])) {
                $ret = $rec[$fieldname];
            }
        }
        return $ret;
    }

    public static function CsvBash_Create_CsvBash_Files_Index($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'fieldname' => null, 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $ret = false;
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $fieldname = $arrparams['fieldname'];
        $di = $arrparams['di'];
        $meta = self::CsvBash_metadata_get_field($arrparams);

        if ($meta) {
            $maindirname = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR;
            $classname = 'By' . ucfirst($fieldname);
            $filenamecsv = $maindirname . $classname . self::CsvBash_Ext(true);
            $sqlquery = "select id, " . $fieldname . " FROM " . $schemaname . "." . $tblname . " order by " . $fieldname . " asc";
            $arrparams = array('di' => $di, 'filename' => $filenamecsv, 'sqlquery' => $sqlquery);
            $ret = self::CsvBash_Create_File($arrparams);
        }
        return $ret;
    }

    public static function CsvBash_Create_CsvBash_Files_Index_Temporary($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'tmparrsearch' => array(), 'colnum' => null, 'sortdir' => SORT_ASC, 'indexid' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $ret = false;
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $colnum = $arrparams['colnum'];
        $indexid = $arrparams['indexid'];
        $tmparrsearch = $arrparams['tmparrsearch'];

        $uniqidindexname = $app . $schemaname . $tblname . $colnum . $indexid;
        $newarrsearch = array();
        foreach ($tmparrsearch as $key => $value) {
            $newkey = str_replace('search-', '', $key);
            $newarrsearch[$newkey] = $value;
            $uniqidindexname = $uniqidindexname . $newkey . $value;
        }
        $uniqidindexname = MyCustomHelperCoreToolsParams::Data_Dir_Tmp() . md5($uniqidindexname) . '.csv';
        if (!file_exists($uniqidindexname)) {
            foreach ($newarrsearch as $key => $value) {
                $t = 1;
            }
        }


        $meta = self::CsvBash_metadata_get_field($arrparams);

        if ($meta) {
            $maindirname = self::Files_Main_Dir_Indexes($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR;
            $classname = 'By' . ucfirst($fieldname);
            $filenamecsv = $maindirname . $classname . self::CsvBash_Ext(true);
            $sqlquery = "select id, " . $fieldname . " FROM " . $schemaname . "." . $tblname . " order by " . $fieldname . " asc";
            $arrparams = array('di' => $di, 'filename' => $filenamecsv, 'sqlquery' => $sqlquery);
            $ret = self::CsvBash_Create_File($arrparams);
        }
        return $ret;
    }

    public static function CsvBash_Create_CsvBash_Files_Id($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'id' => null, 'rowrec' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $id = $arrparams['id'];
        $rowrec = $arrparams['rowrec'];
        $maindirname = self::Files_Main_Dir_Table_Data($app, $schemaname) . $tblname . DIRECTORY_SEPARATOR . $lng . DIRECTORY_SEPARATOR;
        $filename = $maindirname . $id . self::CsvBash_Ext(true);
        $arrparams = array('di' => null, 'filename' => $filename, 'rowrec' => $rowrec);
        $ret = self::CsvBash_Create_File($arrparams);
    }

    public static function CsvBash_Create_CsvBash_Files_Metadata($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'di' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $maindirname = self::Files_Main_Dir_Metadata($app, $schemaname);
        $classname = $tblname;
        self::Set_Arr_Params($arrparams, 'filename', $maindirname . $classname . self::CsvBash_Ext(true));
        self::Set_Arr_Params($arrparams, 'sqlquery', "SELECT * FROM INFORMATION_SCHEMA.COLUMNS where table_schema=:table_schema and table_name=:table_name ");
        self::Set_Arr_Params($arrparams, 'sqlparams', array('table_schema' => $schemaname,
            'table_name' => $tblname));
        self::CsvBash_Create_File($arrparams);
    }

    public static function CsvBash_Create_Jf_Translates($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => 'mod', 'tblname' => 'jfcontent', 'bykey' => 'idstr');
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $bykey = $arrparams['bykey'];
        $ret = true;

        $index = self::CsvBash_GetIndex($arrparams);
        foreach ($index as $arrparams['pkid'] => $value) {
            $data = '';

            $recarr = self::CsvBash_GetRecordByPkid($arrparams);
            if (isset($recarr['referenceschema'], $recarr['referencetable'])) {
                $tmparr = $arrparams;
                self::Set_Arr_Params($tmparr, 'schemaname', $recarr['referenceschema']);
                self::Set_Arr_Params($tmparr, 'tblname', $recarr['referencetable']);
                self::Set_Arr_Params($tmparr, 'searchvalue', $recarr[self::$F_ModJfcontentReferenceid]);
                $refid = self::CsvBash_GetIndexPkidFromBykey($tmparr);
                $customdirname = '..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . 'b2b' . DIRECTORY_SEPARATOR . 'customhelpers' . DIRECTORY_SEPARATOR . 'Tables' . DIRECTORY_SEPARATOR . 'B2bAioTbl20' . DIRECTORY_SEPARATOR . 'Custom' . DIRECTORY_SEPARATOR . '' . $schemaname . '' . DIRECTORY_SEPARATOR . '' . $tblname . '' . DIRECTORY_SEPARATOR . '' . $schemaname2 . '' . DIRECTORY_SEPARATOR . '' . $tblname2 . '' . DIRECTORY_SEPARATOR;
                $customdirname = MyCustomHelperFileTools::My_Dir_Create_If_Not_Exist($customdirname);
                $filename = $customdirname . $refid . '.json';
                file_put_contents($filename, $data);
            }
        }
        foreach ($index as $arrparams['pkid'] => $value) {
            $recarr = self::CsvBash_GetRecordByPkid($arrparams);
            //$data = $recarr;
            if (isset($recarr['referenceschema'], $recarr['referencetable'])) {
                $tmparr = $arrparams;
                self::Set_Arr_Params($tmparr, 'schemaname', $recarr['referenceschema']);
                self::Set_Arr_Params($tmparr, 'tblname', $recarr['referencetable']);
                self::Set_Arr_Params($tmparr, 'searchvalue', $recarr[self::$F_ModJfcontentReferenceid]);
                $refid = self::CsvBash_GetIndexPkidFromBykey($tmparr);
                self::Set_Arr_Params($tmparr, 'pkid', $refid);
                $refrecarr = self::CsvBash_GetRecordByPkid($tmparr);


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

    private static function CsvBash_Create_File($arrparams) {
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

    public static function CsvBash_File_Record_To_Array($csvrec) {
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

    public static function CsvBash_GetFileExists($arrparams) {
        $arrparamstemplate = array('app' => 'b2b', 'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(), 'tblname' => '', 'pkid' => null, 'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix, 'blmetadata' => false, 'bykey' => null);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        self::Set_Arr_Params($arrparams, 'filextension', self::CsvBash_Ext(true));
        self::GetFileExists($arrparams);
    }

    /*
     * Bash shell functions start
     * 
     */

    private static function CsvBash_Exec($scriptname, $scriptparams) {
        $di = \Phalcon\DI::getDefault();

        $ret = false;
        $dir = MyCustomHelperCoreToolsParams::Data_Dir_Aioscripts();
        try {

            $key = md5($scriptname . $scriptparams);
            //$key = str_replace(' ', '', $scriptname . $scriptparams);
            $mycachedata = new MyCustomHelperCache($key . 'data', MyCustomHelperCache::My_Cache_Lifetime_Bash_Db, MyCustomHelperCache::My_Cache_Category_Bash_Db);
            $mycacheresult = new MyCustomHelperCache($key . 'result', MyCustomHelperCache::My_Cache_Lifetime_Bash_Db, MyCustomHelperCache::My_Cache_Category_Bash_Db);

            if ($mycachedata->getContentExist()) {
                $ret['data'] = json_decode($mycachedata->getContent(), true);
                $ret['result'] = json_decode($mycacheresult->getContent(), true);
            } else {
                $script = './' . $scriptname . $scriptparams;
                $old_path = getcwd();
                chdir($dir);
                if ($di->controller_params_array['bash_logging'] == true) {
                    MyCustomHelperErrorLog::My_error_log("Before exec " . $script . $script);
                    $time = -microtime(true);
                }

                exec($script, $resultarr, $retres);
                if ($di->controller_params_array['bash_logging'] == true) {
                    $time += microtime(true);
                    MyCustomHelperErrorLog::My_error_log('After exec ' . $script . ' Execution Time in milliseconds ' . $time);
                }
                chdir($old_path);
                $result = json_decode($resultarr[count($resultarr) - 1], true);
                if ($retres == 0 && $result['result']['success'] == 1) {
                    $ret = array();
                    $ret['data'] = false;
                    if (count($resultarr) > 0) {
                        unset($resultarr[count($resultarr) - 1]);
                    }
                    if (count($resultarr) > 0) {
                        $ret['data'] = $resultarr;
                        $arr = array();
                        foreach ($ret['data'] as $key => $row) {
                            $arr[] = json_decode($row, true);
                        }
                        $ret['data'] = $arr;
                    }

                    $ret['result'] = $result['result'];
                    $mycachedata->setContent(json_encode($ret['data']));
                    $mycacheresult->setContent(json_encode($ret['result']));
                }
            }
        } catch (Exception $exception) {
            die('error' . $exception);
        }
        return $ret;
    }

    public static function CsvBash_Get_total_Pages($arrparams) {
        $di = \Phalcon\DI::getDefault();
        $di->controller_params_array['totalpages'] = 0;
        $totalrecords = self::CsvBash_Get_total_Records($arrparams);
        if (isset($di->controller_params_array['itemsperpage'])) {
            $di->controller_params_array['totalpages'] = ceil($totalrecords / $di->controller_params_array['itemsperpage']);
        }
    }

    public static function CsvBash_Get_total_Records($arrparams) {
        # gettotalrecordsrecords.bash
# Argument = -h usage -p APP -S SCHEMANAME -T TABLENAME -l LNGID
        $totalpages = false;
        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $arrlangvalkeys = MyCustomHelperLng::My_get_available_languages_shortname_keys();
        $lng = $arrlangvalkeys[$lng];


        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }

        if (isset($lng)) {
            $scriptparams = $scriptparams . ' -l ' . $lng;
        }

        $ret = self::CsvBash_Exec(self::$CsvBash_Script_Get_Total_Records, $scriptparams);
        if ($ret) {
            $totalpages = $ret['result']['found'];
        }
        return $totalpages;
    }

    public static function CsvBash_Get_Records($arrparams) {

        /*
         * -p APP (Required not null)
          -S SCHEMANAME (Required not null)
          -T TABLENAME (Required not null)
          -f COLNAME (Array Required not null)
          -v COLVALUE (Array Not Required)
          -l LNG (Required not null. Values accepted el, en)
          -s SEARCHMETHOD (Required not null. Values accepted Data, Indexes, Metadata)
          -m MATCHMETHOD (Array Required not null. Values accepted Exact, Like)
          -R GENERATERESULTS (Generate output results? 0=No, 1=Yes.Default value=0)
          -b BEGINRECORD (Default 1)
          -t TOTALRECORDS (Default 1)
          -i SORTFIELD
          -o SORTINGORDER (Sorting order. 4=Asc, 3=Desc.Default value=4)
          -r RELATIONS (First : Field of this table, Second : Reference schema, Third : Reference table, Fourth : Reference field equal, Fifth : Reference field show (replace) )
         */


        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'colname' => array(),
            'colvalue' => array(),
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'searchmethod' => 'Data',
            'matchmethod' => array(),
            'generateresults' => 0,
            'beginrecord' => 1,
            'totalrecords' => 1,
            'sortfield' => 'id',
            'sortingorder' => SORT_ASC,
            'relations' => array());
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $colname = $arrparams['colname'];
        $colvalue = $arrparams['colvalue'];

        $lng = $arrparams['lng'];
        $arrlangvalkeys = MyCustomHelperLng::My_get_available_languages_shortname_keys();
        $lng = $arrlangvalkeys[$lng];

        $searchmethod = $arrparams['searchmethod'];
        $matchmethod = $arrparams['matchmethod'];
        $generateresults = $arrparams['generateresults'];
        $beginrecord = $arrparams['beginrecord'];
        $totalrecords = $arrparams['totalrecords'];
        $sortfield = $arrparams['sortfield'];
        $sortingorder = $arrparams['sortingorder'];
        $relations = $arrparams['relations'];

        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }
        if (isset($colname) && count($colname) > 0) {
            $val = $colname;
            $tmp = '';
            $i = 1;
            foreach ($val as $key => $value) {
                if ($i > 1) {
                    $tmp = $tmp . ' ';
                }
                $value = self::CsvBash_MakeSafeParam($value);
                $tmp = $tmp . $value;
                $i++;
            }
            $tmp = '"' . $tmp . '"';
            $scriptparams = $scriptparams . ' -f ' . $tmp;
        }
        if (isset($colvalue) && count($colvalue) > 0) {
            $val = $colvalue;
            $tmp = '';
            $i = 1;
            foreach ($val as $key => $value) {
                if ($i > 1) {
                    $tmp = $tmp . ' ';
                }
                $value = self::CsvBash_MakeSafeParam($value);
                $tmp = $tmp . $value;
                $i++;
            }
            $tmp = '"' . $tmp . '"';
            $scriptparams = $scriptparams . ' -v ' . $tmp;
        }
        if (isset($lng)) {
            $scriptparams = $scriptparams . ' -l ' . $lng;
        }
        if (isset($searchmethod)) {
            $scriptparams = $scriptparams . ' -s ' . $searchmethod;
        }
        if (isset($matchmethod) && count($matchmethod) > 0) {
            $val = $matchmethod;
            $tmp = '';
            $i = 1;
            foreach ($val as $key => $value) {
                if ($i > 1) {
                    $tmp = $tmp . ' ';
                }
                $value = self::CsvBash_MakeSafeParam($value);
                $tmp = $tmp . $value;
                $i++;
            }
            $tmp = '"' . $tmp . '"';
            $scriptparams = $scriptparams . ' -m ' . $tmp;
        }
        $scriptparams = $scriptparams . ' -L idstr';
        if (isset($generateresults)) {
            $scriptparams = $scriptparams . ' -R ' . $generateresults;
        }
        if (isset($beginrecord)) {
            $scriptparams = $scriptparams . ' -b ' . $beginrecord;
        }
        if (isset($totalrecords)) {
            $scriptparams = $scriptparams . ' -t ' . $totalrecords;
        }
        if (isset($sortfield)) {
            $scriptparams = $scriptparams . ' -i ' . $sortfield;
        }
        if (isset($sortingorder)) {
            $scriptparams = $scriptparams . ' -o ' . $sortingorder;
        }
        if (isset($relations) && count($relations) > 0) {
            $val = $relations;
            $tmp = '';
            for ($key = 0; $key < count($val['keys']); $key++) {
                if ($key > 1) {
                    $tmp = $tmp . ' ';
                }
                $tmp = $tmp . self::CsvBash_MakeSafeParam($val['keys'][$key]) . ' ';
                $tmp = $tmp . self::CsvBash_MakeSafeParam($val['schemas'][$key]) . ' ';
                $tmp = $tmp . self::CsvBash_MakeSafeParam($val['tblnames'][$key]) . ' ';
                $tmp = $tmp . self::CsvBash_MakeSafeParam($val['fkids'][$key]) . ' ';
                $tmp = $tmp . self::CsvBash_MakeSafeParam($val['displayfields'][$key]) . ' ';
                if (isset($val['lngs'][$key]) && $val['lngs'][$key] == 'lng' && $val['lngs'][$key] == 'current') {
                    $tmp = $tmp . $lng;
                } else {
                    $tmp = $tmp . $lng;
                }
                //$value = self::CsvBash_MakeSafeParam($value);
            }
            $tmp = '"' . $tmp . '"';
            $scriptparams = $scriptparams . ' -r ' . $tmp;
        }
        $ret = self::CsvBash_Exec(self::$CsvBash_Script_Get_Records, $scriptparams);

        return $ret;
    }

    public static function CsvBash_Get_Records_Direct_File_Json($arrparams) {

        /*
         * -p APP (Required not null)
          -S SCHEMANAME (Required not null)
          -T TABLENAME (Required not null)
          -l LNG (Required not null. Values accepted el, en)
          -b BEGINRECORD (Default 1)
          -t TOTALRECORDS (Default 1) */


        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'beginrecord' => 1,
            'totalrecords' => 1,);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $arrlangvalkeys = MyCustomHelperLng::My_get_available_languages_shortname_keys();
        $lng = $arrlangvalkeys[$lng];
        $beginrecord = $arrparams['beginrecord'];
        $totalrecords = $arrparams['totalrecords'];

        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }

        if (isset($lng)) {
            $scriptparams = $scriptparams . ' -l ' . $lng;
        }
        if (isset($beginrecord)) {
            $scriptparams = $scriptparams . ' -b ' . $beginrecord;
        }
        if (isset($totalrecords)) {
            $scriptparams = $scriptparams . ' -t ' . $totalrecords;
        }
        $ret = self::CsvBash_Exec(self::$CsvBash_Script_Get_Records_Direct_File_Json, $scriptparams);

        return $ret;
    }

    public static function CsvBash_Get_Records_Direct_File_Json_One_Record($arrparams) {


        /*
         * -p APP (Required not null)
          -S SCHEMANAME (Required not null)
          -T TABLENAME (Required not null)
          -l LNG (Required not null. Values accepted el, en)
          -f COLNAME
          -v COLVAL */


        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'colname' => null,
            'colval' => null,);
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $arrlangvalkeys = MyCustomHelperLng::My_get_available_languages_shortname_keys();
        $lng = $arrlangvalkeys[$lng];
        $colname = $arrparams['colname'];
        $colval = '"' . $arrparams['colval'] . '"';

        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }

        if (isset($lng)) {
            $scriptparams = $scriptparams . ' -l ' . $lng;
        }
        if (isset($colname)) {
            $scriptparams = $scriptparams . ' -f ' . $colname;
        }
        if (isset($colval)) {
            $scriptparams = $scriptparams . ' -v ' . $colval;
        }
        $ret = self::CsvBash_Exec(self::$CsvBash_Script_Get_Records_Direct_File_Json_One_Record, $scriptparams);

        return $ret;
    }

    public static function CsvBash_Create_CsvBash_Files($arrparams) {
        /*
         * OPTIONS:

          -S SCHEMANAME
          -T TABLENAME
          -Y YEARMONTH
          -c COLNAME
          -p APP
          -m BLMETADATA
          -i BLINDEXES
          -l LNGID
          EOF
          }

         */

        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'yearmonth' => null,
            'colname' => null,
            'blmetadata' => 1,
            'blindexes' => 1,
            'lngid' => MyCustomHelperLng::$Static_Lng_El_Id
        );
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $yearmonth = $arrparams['yearmonth'];
        $colname = $arrparams['colname'];
        $blmetadata = $arrparams['blmetadata'];
        $blindexes = $arrparams['blindexes'];
        $lngid = $arrparams['lngid'];
        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }
        if (isset($yearmonth)) {
            $scriptparams = $scriptparams . ' -Y ' . $yearmonth;
        }
        if (isset($colname)) {
            $scriptparams = $scriptparams . ' -c ' . $colname;
        }
        if (isset($blmetadata)) {
            $scriptparams = $scriptparams . ' -m ' . $blmetadata;
        }
        if (isset($blindexes)) {
            $scriptparams = $scriptparams . ' -i ' . $blindexes;
        }
        if (isset($lngid)) {
            $scriptparams = $scriptparams . ' -l ' . $lngid;
        }

        $dir = MyCustomHelperCoreToolsParams::Data_Dir_Aioscripts();
        try {
            $script = './' . self::$CsvBash_Script_Create_Csvs . $scriptparams;
            $old_path = getcwd();
            chdir($dir);
            MyCustomHelperErrorLog::My_error_log("Before exec create csvs " . $script);
            exec($script, $resultarr, $retres);
            chdir($old_path);
            if (count($resultarr) == 1) {
                $result = json_decode($resultarr[0], true);
                if ($retres == 0 && $result['result']['success'] === 1) {
                    $ret['result'] = $result['result'];
                }
            }
        } catch (Exception $exception) {
            die('error' . $exception);
        }
        return $ret;
    }

    public static function CsvBash_Remove_Unsynced_Data($arrparams) {
        /*
          OPTIONS:
          -h Usage
          -p APP
          -S SCHEMANAME
          -T TABLENAME
          -c COLNAME
          -l LNGALIAS
          -r PKID
          EOF

         */

        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'colname' => null,
            'lngalias' => null,
            'pkid' => null
        );
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $colname = $arrparams['colname'];
        $lngalias = $arrparams['lngalias'];
        $pkid = $arrparams['pkid'];
        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }
        if (isset($colname)) {
            $scriptparams = $scriptparams . ' -c ' . $colname;
        }
        if (isset($lngalias)) {
            $scriptparams = $scriptparams . ' -l ' . $lngalias;
        }
        if (isset($pkid)) {
            $scriptparams = $scriptparams . ' -r ' . $pkid;
        }


        $dir = MyCustomHelperCoreToolsParams::Data_Dir_Aioscripts();
        try {
            $script = './' . self::$CsvBash_Script_Remove_Unsynced_Data . $scriptparams;
            $old_path = getcwd();
            chdir($dir);
            MyCustomHelperErrorLog::My_error_log("Before exec Unsynced_Data " . $script);
            exec($script, $resultarr, $retres);
            chdir($old_path);
            if (count($resultarr) == 1) {
                $result = json_decode($resultarr[0], true);
                if ($retres == 0 && $result['result']['success'] === 1) {
                    $ret['result'] = $result['result'];
                }
            }
        } catch (Exception $exception) {
            die('error' . $exception);
        }
        return $ret;
    }

    private static function CsvBash_Get_Header_Fields($arrparams) {
        $arrparamstemplate_required = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'jobname' => self::$CsvBash_Get_Header_Field_Position_Job_Index
        );
        $arrparamstemplate_Not_required = array(
            'fieldname' => null
        );
        $ret = false;
        $arrparams1 = MyCustomHelperCoreToolsParams::Arr_Params_Set($arrparams, $arrparamstemplate_required);
        if (MyCustomHelperCoreToolsParams::Arr_Params_Check_All_Required($arrparams1)) {

            try {
                $arrparams2 = MyCustomHelperCoreToolsParams::Arr_Params_Set($arrparams, $arrparamstemplate_Not_required);
                $arrparams = array_merge($arrparams1, $arrparams2);
                $scriptparams = '';

                $script = false;
                $dir = MyCustomHelperCoreToolsParams::Data_Dir_Aioscripts();
                $scriptname = self::$CsvBash_Script_Get_Field_Position;
                $scriptparams = $scriptparams . ' -p ' . $arrparams['app'];
                $scriptparams = $scriptparams . ' -S ' . $arrparams['schemaname'];
                $scriptparams = $scriptparams . ' -T ' . $arrparams['tblname'];
                $scriptparams = $scriptparams . ' -l ' . $arrparams['lng'];
                if (isset($arrparams['fieldname'])) {
                    $scriptparams = $scriptparams . ' -f ' . $arrparams['fieldname'];
                }
                $scriptsearchjob = null;
                if ($arrparams['jobname'] == self::$CsvBash_Get_Header_Field_Position_Job_Index) {
                    $scriptsearchjob = 'Indexes';
                }
                if (isset($scriptsearchjob)) {
                    $scriptparams = $scriptparams . ' -s ' . $scriptsearchjob;
                    $script = './' . $scriptname . $scriptparams;

                    $old_path = getcwd();
                    chdir($dir);
                    $output = shell_exec($script);
                    chdir($old_path);

                    if ($output) {
                        $tmparr = json_decode($output, true);
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            $ret = false;
                        } else {
                            if (isset($tmparr['result'], $tmparr['fields'])) {
                                if (isset($tmparr['result']['success'], $tmparr['result']['found'], $tmparr['result']['total'], $tmparr['result']['message'])) {
                                    $ret = $tmparr;
                                }
                            }
                        }
                    }
                }
            } catch (Exception $exception) {
                die('error' . $exception);
            }
        }


        return $ret;
    }

    public static function CsvBash_Get_Header_Field_Positions($arrparams) {
        $arrparamstemplate_required = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'jobname' => self::$CsvBash_Get_Header_Field_Position_Job_Index
        );
        $arrparams = MyCustomHelperCoreToolsParams::Arr_Params_Set($arrparams, $arrparamstemplate_required);

        if (MyCustomHelperCoreToolsParams::Arr_Params_Check_All_Required($arrparams)) {
            $tmparr = self::CsvBash_Get_Header_Fields($arrparams);
            if ($tmparr) {
                $ret = $tmparr['fields'];
            }
        }
        return $ret;
    }

    public static function CsvBash_Get_Header_Field_Position($arrparams) {
        $arrparamstemplate_required = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'jobname' => self::$CsvBash_Get_Header_Field_Position_Job_Index,
            'fieldname' => null
        );
        $ret = false;
        $arrparams = MyCustomHelperCoreToolsParams::Arr_Params_Set($arrparams, $arrparamstemplate_required);
        if (MyCustomHelperCoreToolsParams::Arr_Params_Check_All_Required($arrparams)) {
            $tmparr = self::CsvBash_Get_Header_Fields($arrparams);
            if ($tmparr && isset($tmparr['fields'][$arrparams['fieldname']])) {
                $ret = $tmparr['fields'][$arrparams['fieldname']];
            }
        }
        return $ret;
    }

    public static function CsvBash_GetFileName($arrparams) {
        $arrparamstemplate = array(
            'app' => 'b2b',
            'schemaname' => MyCustomHelperCoreStaticVars::Model_Schema_Default(),
            'tblname' => '',
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
            'jobname' => null,
        );
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $jobname = $arrparams['jobname'];
        $lng = $arrparams['lng'];

        $ret = false;
        $filename = false;

        if ($jobname == self::$CsvBash_GetFileName_Job_Index) {
            $tmparrparams = array('app' => $app,
                'schemaname' => $schemaname,
                'tblname' => $tblname,
                'lng' => $lng,
                'bykey' => self::$CsvBash_IndexName_IdToFilenameToIdstr,
                'filextension' => self::CsvBash_Ext(true),
                'jobname' => self::$GetFileExists_Job_Index_CsvBash,
                'retresult' => 'file');
            $filename = self::GetFileExists($tmparrparams);
            if (!$filename) {
                $tmparrparams['bykey'] = self::$CsvBash_IndexName_IdToFilename;
                $filename = self::GetFileExists($tmparrparams);
            }
            if ($filename) {
                $ret = $filename;
            }
        }
        return $ret;
    }

    private static function CsvBash_MakeSafeParam($value) {
        $value = preg_replace("/[^[:alnum:]_]/ui", '', $value);
        $value = str_replace(' ', '', $value);
        return $value;
    }

    public static function CsvBash_Script_Create_Csvs_Jsons($arrparams) {

        /*
         * -p APP (Required not null)
          -S SCHEMANAME (Required not null)
          -T TABLENAME (Not Required)
          -m BLMETADATA (Not Required.Values accepted 1:export Metadata 0:no export Metadata)
          -l LNG (Required not null. Values accepted el, en) */


        $arrparamstemplate = array(
            'app' => null,
            'schemaname' => null,
            'tblname' => null,
            'blmetadata' => 0,
            'lng' => MyCustomHelperLng::$Static_Lng_El_Prefix,
        );
        $arrparams = array_merge($arrparamstemplate, $arrparams);
        $app = $arrparams['app'];
        $schemaname = $arrparams['schemaname'];
        $tblname = $arrparams['tblname'];
        $lng = $arrparams['lng'];
        $blmetadata = $arrparams['blmetadata'];
        $arrlangvalkeys = MyCustomHelperLng::My_get_available_languages_shortname_keys();
        $lng = $arrlangvalkeys[$lng];


        $scriptparams = '';
        $ret = false;
        if (isset($app)) {
            $scriptparams = $scriptparams . ' -p ' . $app;
        }
        if (isset($schemaname)) {
            $scriptparams = $scriptparams . ' -S ' . $schemaname;
        }
        if (isset($tblname)) {
            $scriptparams = $scriptparams . ' -T ' . $tblname;
        }
        if (isset($blmetadata)) {
            $scriptparams = $scriptparams . ' -m ' . $blmetadata;
        }
        if (isset($lng)) {
            $scriptparams = $scriptparams . ' -l ' . $lng;
        }


        $ret = self::CsvBash_Exec(self::$CsvBash_Script_Create_Csvs_Jsons, $scriptparams);

        return $ret;
    }

}
