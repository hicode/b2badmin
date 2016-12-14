<?php

class MyCustomHelperCoreDi extends \Phalcon\Tag {

    private static function Get_Param() {
        $di = \Phalcon\DI::getDefault();
        $key = mb_strtolower(str_ireplace('Get_', '', debug_backtrace()[1]['function']));
        $retglobal = isset($di->myglobal_params_array[$key]) ? $di->myglobal_params_array[$key] : null;
        $ret = isset($di->controller_params_array[$key]) ? $di->controller_params_array[$key] : $retglobal;
        return $ret;
    }

    private static function Set_Global_Param($val) {
        $di = \Phalcon\DI::getDefault();
        $key = mb_strtolower(str_ireplace('Set_Global_', '', debug_backtrace()[1]['function']));
        $di->myglobal_params_array[$key] = $val;
    }

    private static function Set_Controller_Param($val) {
        $di = \Phalcon\DI::getDefault();
        $key = mb_strtolower(str_ireplace('Set_Controller_', '', debug_backtrace()[1]['function']));
        $di->controller_params_array[$key] = $val;
    }

    public static function Get__Url() {
        return self::Get_Param();
    }

    public static function Get_App() {
        return self::Get_Param();
    }

    public static function Get_Base_controller() {
        return self::Get_Param();
    }

    public static function Get_Basepath() {
        return self::Get_Param();
    }

    public static function Get_Base_path_with_publicpath() {
        return self::Get_Param();
    }

    public static function Get_Basesettings() {
        return self::Get_Param();
    }

    public static function Get_Bash_logging() {
        return self::Get_Param();
    }

    public static function Get_Bl_bulkcreate_translates() {
        return self::Get_Param();
    }

    public static function Get_Cacheenabled() {
        return self::Get_Param();
    }

    public static function Set_Controller_Cacheenabled($val) {
        if ($val) {
            self::Set_Controller_CacheCssJsEnabled($val);
        }
        return self::Set_Controller_Param($val);
    }

    public static function Get_CacheCssJsEnabled() {
        return self::Get_Param();
    }

    public static function Set_Controller_CacheCssJsEnabled($val) {
        return self::Set_Controller_Param($val);
    }

    public static function Get_Createdate() {
        return self::Get_Param();
    }

    public static function Get_Custompath() {
        return self::Get_Param();
    }

    public static function Get_Dbmode() {
        return self::Get_Param();
    }

    public static function Get_Documentroot() {
        return self::Get_Param();
    }

    public static function Get_Glb_request() {
        return self::Get_Param();
    }

    public static function Get_Html_base_path() {
        return self::Get_Param();
    }

    public static function Get_Httphost() {
        return self::Get_Param();
    }

    public static function Get_Lng_prefix_default() {
        return self::Get_Param();
    }

    public static function Get_Redirecturl() {
        return self::Get_Param();
    }

    public static function Get_Request() {
        return self::Get_Param();
    }

    public static function Get_Site() {
        return self::Get_Param();
    }

    public static function Get_Scriptfilename() {
        return self::Get_Param();
    }

    public static function Get_Scriptdocumentroot() {
        return self::Get_Param();
    }

    public static function Get_Publicpath() {
        return self::Get_Param();
    }

    public static function Get_Publicpath_with_custompath() {
        return self::Get_Param();
    }

    public static function Get_Site_index_path() {
        return self::Get_Param();
    }

    public static function Get_Helperpage() {
        return self::Get_Param();
    }

    public static function Get_Lng() {
        return self::Get_Param();
    }

    public static function Get_Objcontroller() {
        return self::Get_Param();
    }

    public static function Get_Pagedescription() {
        return self::Get_Param();
    }

    public static function Get_Pagekeywords() {
        return self::Get_Param();
    }

    public static function Get_Pagetitle() {
        return self::Get_Param();
    }

    public static function Get_Pagerobots() {
        return self::Get_Param();
    }

    public static function Get_Param1() {
        return self::Get_Param();
    }

    public static function Get_Param2() {
        return self::Get_Param();
    }

    public static function Get_Param3() {
        return self::Get_Param();
    }

    public static function Get_Param4() {
        return self::Get_Param();
    }

    public static function Get_Param5() {
        return self::Get_Param();
    }

    public static function Get_Param6() {
        return self::Get_Param();
    }

    public static function Get_Schemaname() {
        return self::Get_Param();
    }

    public static function Get_Selectedtemplate() {
        return self::Get_Param();
    }

    public static function Get_Settings() {
        return self::Get_Param();
    }

    public static function Get_Sitesubbasepath() {
        return self::Get_Param();
    }

    public static function Get_Template() {
        return self::Get_Param();
    }

    public static function Get_Template_admin_path_with_assets_path() {
        $templatearr = self::Get_Template();
        $ret = null;
        if (isset($templatearr)) {
            $ret = isset($templatearr['template_admin_path_with_assets_path']) ? $templatearr['template_admin_path_with_assets_path'] : null;
        }
        return $ret;
    }

    public static function Get_Glb_request_Pieces_dataID(&$fkparentlng, &$fklng, $arr = null) {
        $dataID = null;
        $glb_request = self::Get_Glb_request();
        if (isset($arr)) {
            $dataID = isset($arr['dataID']) ? $arr['dataID'] : null;
        }
        if (!isset($dataID)) {
            $dataID = isset($glb_request['dataID']) ? $glb_request['dataID'] : null;
        }
        if (isset($dataID)) {
            $pieces = explode("_", $dataID);
            if (count($pieces) == 2) {
                $fkparentlng = $pieces[0];
                $fklng = $pieces[1];
            }
        }
        return $dataID;
    }

}
