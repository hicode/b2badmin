<?php

class MyCustomHelperFileTools extends \Phalcon\Tag {

    private $dirpath;
    private $dirhandler;
    public static $Job_Search_In_Files = 'My_Job_Search_In_Files';
    public static $Job_List_Directory = 'My_Job_List_Directory';
    public static $Job_Search_In_Json_Files = 'My_Job_Search_In_Json_Files';

    function __construct($dirpath) {
        $this->dirpath = $dirpath;
    }

    public function My_Set_Dir_Path($val) {
        $this->dirpath = $val;
    }

    public function My_Get_Dir_Path() {
        return $this->dirpath;
    }

    private function My_Create_Directory_Handler() {
        $ret = false;
        if (!is_dir($this->dirpath) || !is_readable($this->dirpath)) {
            MyCustomHelperErrorLog::My_error_log(__FUNCTION__ . ": Argument should be a path to valid, readable directory (" . var_export($this->dirpath, true) . " provided)");
        } else {
            $dir = realpath($this->dirpath);
            $this->dirhandler = opendir($dir);
            $ret = true;
        }
        return $ret;
    }

    public function My_Do_Job($jobname, $jobparams) {
        $paths = array();
        if ($this->My_Create_Directory_Handler()) {
            if (isset($jobparams['search'])) {
                $tmpsearch = str_replace(" ", "", $jobparams['search']);
                $jobparams['search1'] = self::My_Make_Html_String($tmpsearch);
                $jobparams['search2'] = self::My_Make_Html_String($tmpsearch, true);
                $jobparams['search3'] = self::My_Make_Html_String($tmpsearch, false, true);
            }
            while (false !== ($f = readdir($this->dirhandler))) {
                if ("$f" != '.' && "$f" != '..') {
                    $jobparams['fname'] = $f;
                    $jobparams['fullfname'] = "$this->dirpath" . DIRECTORY_SEPARATOR . $jobparams['fname'];
                    $this->$jobname($jobparams, $paths);
                }
            }
            closedir($this->dirhandler);
        }
        return $paths;
    }

    private function My_Job_Search_In_Files($jobparams, &$paths) {
        if ($this->My_Checks_Common($jobparams) && isset($jobparams['search'])) {
            $contents = file_get_contents($jobparams['fullfname']);
            $contents = str_replace(" ", "", $contents);
            if ($this->My_Search($contents, $jobparams)) {
                $this->My_Add_File_To_List($jobparams, $paths);
            }
        }
    }

    private function My_Job_Search_In_Json_Files($jobparams, &$paths) {
        $jobparams['extension'] = 'json';
        if ($this->My_Checks_Common($jobparams) && isset($jobparams['key'], $jobparams['search'])) {
            $json = file_get_contents($jobparams['fullfname']);
            $arr = json_decode($json, true);
            $contents = $arr[$jobparams['key']];
            $contents = str_replace(" ", "", $contents);
            if ($this->My_Search($contents, $jobparams)) {
                $this->My_Add_File_To_List($jobparams, $paths);
            }
        }
    }

    private function My_Job_List_Directory($jobparams, &$paths) {
        if ($this->My_Checks_Common($jobparams)) {
            $this->My_Add_File_To_List($jobparams, $paths);
        }
    }

    private function My_Checks_Common($jobparams) {
        $ret = false;
        if ($this->My_Check_Extension($jobparams)) {
            $ret = true;
        }
        return $ret;
    }

    private function My_Check_Extension($jobparams) {
        $ret = true;
        if (isset($jobparams['extension'])) {
            $ret = false;
            if ($jobparams['extension'] === pathinfo($jobparams['fname'], PATHINFO_EXTENSION)) {
                $ret = true;
            }
        }
        return $ret;
    }

    private function My_Add_File_To_List($jobparams, &$paths) {
        $paths[] = $jobparams['fname'];
    }

    public static function My_Make_Html_String($htmlstr, $blhtmlentities = false, $blhtml_entity_decode = false) {

        if ($blhtmlentities === true) {
            $htmlstr = htmlentities($htmlstr, ENT_QUOTES | ENT_HTML401, 'UTF-8', false);
        }
        if ($blhtml_entity_decode === true) {
            $htmlstr = html_entity_decode($htmlstr, ENT_QUOTES | ENT_HTML401, 'UTF-8');
        }
        return $htmlstr;
    }

    private function My_Search($contents, $jobparams) {
        $ret = false;
        if (stripos($contents, $jobparams['search1']) || stripos($contents, $jobparams['search2']) || stripos($contents, $jobparams['search3'])) {
            $ret = true;
        }
        return $ret;
    }

    public static function My_Dir_Create_If_Not_Exist($dirname) {
        $ret = true;
        if (!file_exists($dirname) && !mkdir($dirname, 0777, true)) {
            $ret = false;
        }
        return $dirname;
    }

}
