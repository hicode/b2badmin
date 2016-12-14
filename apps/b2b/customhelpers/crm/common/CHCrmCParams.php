<?php

class CHCrmCParams extends \Phalcon\Tag {

    //public static $KatastimaDefault = 'ppkat';
    public static $keyarrPageHelperHeader = 'PageHelperHeader';
    public static $keyarrDataTableAjax = 'DataTableAjax';
    public static $keyarrDataTableAjax2 = 'DataTableAjax2';
    public static $keyarrRowDetailsHtmlTable = 'Row_Details_HtmlTable';
    public static $keyarrFullCalendar = 'Full_Calendar';
    public static $keyarrOuterSidebarMenu = 'Outer_Sidebar_Menu';
    /* LEONIDAS START MY CODE */
    public static $keyarrModalGeneral = 'Modal_General';
    public static $keyarrDataTableAddMember = 'DataTableAjaxAddMember';
    public static $keyarrCreateEventQuickTpls = "CreateEventQuickTpls";
    public static $keyarrPrintPDF = 'Print_PDF';


    /* LEONIDAS END MY CODE */
    // DLS20161015
    public static $keyarrNewRecord = 'New_Record';
    // DLE20161015
    //DLS20161102
    public static $keyarrDeleteRecord = 'Delete_Record';

    //DLE20161102
    public static function My_get_controller_params(&$objcontroller) {
        CHCParams::My_get_controller_params($objcontroller);
        $di = \Phalcon\DI::getDefault();


        $di->controller_params_array['app'] = 'b2b';
        $di->controller_params_array['base_controller'] = 'b2b';
        $di->controller_params_array['dbmode'] = 'db';
        $di->controller_params_array['selectedtemplate'] = 'metronic454b2b';
        $di->controller_params_array['bl_bulkcreate_translates'] = false;
        MyCustomHelperCoreDi::Set_Controller_Cacheenabled(false);
        MyCustomHelperCoreDi::Set_Controller_CacheCssJsEnabled(false);

        $helperpage = $objcontroller->dispatcher->getParam("helperpage");
        if (isset($helperpage)) {
            $di->controller_params_array['helperpage'] = $helperpage;
        } else {
            unset($helperpage);
        }

        $mykatastima = $objcontroller->dispatcher->getParam("mykatastima");
        if (!isset($mykatastima)) {
            $mykatastima = self::My_get_mykatastima_default();
        }
        $di->controller_params_array['mykatastima'] = $mykatastima;


        $param1 = $objcontroller->dispatcher->getParam("param1");
        if (isset($param1)) {
            $di->controller_params_array['param1'] = $param1;
            $di->controller_params_array['param1_cleanid'] = preg_replace("/[^0-9]/", "", $di->controller_params_array['param1']);
        } else {
            unset($param1);
        }
        $param2 = $objcontroller->dispatcher->getParam("param2");
        if (isset($param2)) {
            $di->controller_params_array['param2'] = $param2;
            $di->controller_params_array['param2_cleanid'] = intval(preg_replace("/[^0-9]/", "", $param2));
        } else {
            unset($param2);
        }
        $param3 = $objcontroller->dispatcher->getParam("param3");
        if (isset($param3)) {
            $di->controller_params_array['param3'] = $param3;
            $di->controller_params_array['param3_cleanid'] = intval(preg_replace("/[^0-9]/", "", $di->controller_params_array['param3']));
        } else {
            unset($param3);
        }
        $param4 = $objcontroller->dispatcher->getParam("param4");
        if (isset($param4)) {
            $di->controller_params_array['param4'] = $param4;
            $di->controller_params_array['param4_cleanid'] = intval(preg_replace("/[^0-9]/", "", $di->controller_params_array['param4']));
        } else {
            unset($param4);
        }

        $param5 = $objcontroller->dispatcher->getParam("param5");
        if (isset($param5)) {
            $di->controller_params_array['param5'] = $param5;
            $di->controller_params_array['param5_cleanid'] = intval(preg_replace("/[^0-9]/", "", $di->controller_params_array['param5']));
        } else {
            unset($param5);
        }

        $param6 = $objcontroller->dispatcher->getParam("param6");
        if (isset($param6)) {
            $di->controller_params_array['param6'] = $param6;
            $di->controller_params_array['param6_cleanid'] = intval(preg_replace("/[^0-9]/", "", $di->controller_params_array['param6']));
        } else {
            unset($param6);
        }



        if ($objcontroller->router->getActionName() !== 'createmodels') {
            \B2b\Models\CoreModels\PpB2bAdminVftemplate::getTemplateParams();
            \B2b\Models\CoreModels\PpB2bAdminVfsitesettings::getSettings();
            \B2b\Models\CoreModels\PpB2bAdminVfroutepage::Get_Route_Pages();
            $di->controller_params_array['lng'] = MyCustomHelperLng::My_get_lng_shortname_from_id_or_shortname($objcontroller->dispatcher->getParam("lng"));
            \B2b\Models\CoreModels\PpB2bAdminVfroutepagepluginnoavailableparams::Get_Params();
        }
    }

    public static function My_get_static_translate($paramname, $lng) {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        $arr = json_decode($di->controller_params_array['settings']['Static_Translates'], true);
        if (isset($arr[$paramname][$lng])) {
            $ret = $arr[$paramname][$lng];
        }
        return $ret;
    }

    public static function My_get_static_translate_all($lng = null) {
        $di = \Phalcon\DI::getDefault();
        $ret = array();
        $arr = json_decode($di->controller_params_array['settings']['Static_Translates'], true);
        foreach ($arr as $key => $row) {
            $tmpstatus = AGCHParams::$Static_Status_Active;
            if (isset($row['params'], $row['params']['status'])) {
                $tmpstatus = $row['params']['status'];
            }
            $arr[$key]['params']['status'] = $tmpstatus;
        }
        if ($lng === null) {
            $ret = $arr;
        } else {
            foreach ($arr as $key => $value) {
                $ret[$key] = $value[$lng];
            }
        }
        return $ret;
    }

    public static function My_get_field_params($paramname, $sub_paramname = null) {
        $di = \Phalcon\DI::getDefault();
        $ret = false;
        $fieldparams = json_decode($di->controller_params_array['settings']['Field_Params'], true);
        if (isset($fieldparams[$paramname])) {
            if (isset($sub_paramname)) {
                if (isset($fieldparams[$paramname][$sub_paramname])) {
                    $ret = $fieldparams[$paramname][$sub_paramname];
                }
            } else {
                $ret = $fieldparams[$paramname];
            }
        }
        return $ret;
    }

    public static function My_get_mykatastima($arr = array()) {
        $di = \Phalcon\DI::getDefault();
        $ret = isset($arr['mykatastima']) ? $arr['mykatastima'] : $di->controller_params_array['mykatastima'];
        return $ret;
    }

    public static function My_get_mykatastima_default() {
        $di = \Phalcon\DI::getDefault();
        $ret = $di->controller_params_array['basesettings']['mykatastimadefault'];
        return $ret;
    }

}
