<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-04-12 18:07:23 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

class PpB2bAdminVfroutepagepluginnoavailableparams {

    private static $paramstocheck = array('helperpage', 'param1', 'param2', 'param3');

    public static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfroutepagepluginnoavailableparamsjsonm', 'production');
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Vfroutepagepluginnoavailableparamsm', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function Get_Params() {
        $time_start = microtime(true);
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        foreach (self::$paramstocheck as $key => $value) {
            $pagename = isset($cpa[$value]) ? $cpa[$value] : null;
            $pagename = $pagename !== '' ? $pagename : null;
            if (isset($pagename)) {
                self::Get_Page_Params($pagename);
            }
            $time_end = microtime(true);
            error_log('pptimetotseconds_' . $pagename . ' : ' . ($time_end - $time_start) . ' pagename=' . $pagename);
        }
    }

    public static function Get_Page_Params($pagename, $blstep1 = true, $blstep2 = true, $bltranslate = true) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        if (!isset($cpa['getpageparams'][$pagename . $bltranslate])) {
            $cpa['getpageparams'][$pagename . $bltranslate] = true;

            $extendclassname = self::getExtendClassname();
            if ($cpa['dbmode'] == 'db') {
                $arrdata = $extendclassname::find(array(
                            "conditions" => "pagename = :pagename: and (mykatastima = :mykatastima1: or mykatastima = :mykatastima2:)",
                            "bind" => array('pagename' => $pagename,
                                'mykatastima1' => \CHCrmCParams::My_get_mykatastima(),
                                'mykatastima2' => \CHCrmCParams::My_get_mykatastima_default()
                            ),
                            "order" => "id asc"
                        ))->toArray();
                if (count($arrdata) > 0) {
                    //self::Get_B2BAdmin_Str_To_ControllerParamsArray($arrdata, $blstep1);
                    if ($bltranslate) {
                        PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Page_Plugin_Translates($pagename);
                    }
                    $time_start = microtime(true);
                    $ret = PpB2bAdminVfpluginnoavailableparams::Get_B2BAdmin_Str_To_ControllerParamsArray($arrdata, $blstep1);
                    $time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds



                    error_log('pptimetotsecondsfromstrtocontroller : ' . ($time_end - $time_start) . ' pagename=' . $pagename);
                    foreach ($ret as $key => $value) {
                        $cpa[$key] = $value;
                    }
                    if ($blstep2) {
                        self::Make_Params_Step2();
                    }
                }
            }
        }
    }

//    private static function Fix_Make_Params_Step2() {
//        $di = \Phalcon\DI::getDefault();
//        $cpa = &$di->controller_params_array;
//        if (isset($cpa['helperpage']) && $cpa['helperpage'] == 'data-table-ajax-level1' && !isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]) && isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2])) {
//            $cpa[\CHCrmCParams::$keyarrDataTableAjax] = $cpa[\CHCrmCParams::$keyarrDataTableAjax2];
//            unset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]);
//        }
//    }

    public static function Make_Params_Step2() {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        //self::Fix_Make_Params_Step2();
        $paramname = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]) ? \CHCrmCParams::$keyarrDataTableAjax : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginDataTableAjax::Make_keyarrDataTableAjax($paramname);
            $cpa[$paramname]['donestep2'] = true;
        }
        $paramname = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]) ? \CHCrmCParams::$keyarrDataTableAjax2 : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginDataTableAjax::Make_keyarrDataTableAjax($paramname);
            $cpa[$paramname]['donestep2'] = true;
        }
        $paramname = isset($cpa[\CHCrmCParams::$keyarrPageHelperHeader]) ? \CHCrmCParams::$keyarrPageHelperHeader : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginPageHelperHeader::Make_keyarrPageHelperHeader();
            $cpa[$paramname]['donestep2'] = true;
        }
        $paramname = isset($cpa[\CHCrmCParams::$keyarrRowDetailsHtmlTable]) ? \CHCrmCParams::$keyarrRowDetailsHtmlTable : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginRowDetailsHtmlTable::Make_keyarrRowDetailsHtmlTable();
            $cpa[$paramname]['donestep2'] = true;
        }
        $paramname = isset($cpa[\CHCrmCParams::$keyarrFullCalendar]) ? \CHCrmCParams::$keyarrFullCalendar : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginFullCalendar::Make_keyarrFullCalendar();
            $cpa[$paramname]['donestep2'] = true;
        }
        $paramname = isset($cpa[\CHCrmCParams::$keyarrOuterSidebarMenu]) ? \CHCrmCParams::$keyarrOuterSidebarMenu : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginOuterSidebarMenu::Make_keyarrOuterSidebarMenu();
            $cpa[$paramname]['donestep2'] = true;
        }
        $paramname = isset($cpa[\CHCrmCParams::$keyarrNewRecord]) ? \CHCrmCParams::$keyarrNewRecord : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            PpB2bAdminMetronic454PluginNewRecord::Make_keyarrNewRecord();
            $cpa[$paramname]['donestep2'] = true;
        }
        // DLS20161102
        $paramname = isset($cpa[\CHCrmCParams::$keyarrDeleteRecord]) ? \CHCrmCParams::$keyarrDeleteRecord : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            DlB2bAdminMetronic454PluginDeleteRecord::Make_keyarrDeleteRecord();
            $cpa[$paramname]['donestep2'] = true;
        }
        // DLE20161102
        // DLS20161107
        $paramname = isset($cpa[\CHCrmCParams::$keyarrPrintPDF]) ? \CHCrmCParams::$keyarrPrintPDF : null;
        $paramname = $paramname !== '' ? $paramname : null;
        if ($paramname && !isset($cpa[$paramname]['donestep2'])) {
            DlB2bAdminMetronic454PluginPrintPDF::Make_keyarrPrintPDF();
            $cpa[$paramname]['donestep2'] = true;
        }
        //DLE20161107
    }

    public static function Get_Datasource_Data($datasource, $blreturnarray = true) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $kind = null;
        if (isset($datasource['kind'])) {
            $kind = $datasource['kind'];
        }
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname($datasource['tblname'], $kind);
        $arrparams = $datasource['params'];
        $operators = isset($datasource['operators']) ? $datasource['operators'] : array();
        $limit = isset($datasource['limit']) ? $datasource['limit'] : null;

        self::Get_Default_Filter_For_Sql($arrparams, $bindarr, $wheretxt1, $bindarrcnt, $wheretxtcnt1);


        if (isset($arrparams['mygetparentkeymyget'])) {
            unset($arrparams['mygetparentkeymyget']);
        }
        $conditions = '1=1';
        foreach ($arrparams as $key => $value) {
            $operator = isset($operators[$key]) ? $operators[$key] : ' = ';

            $conditions = $conditions . ' AND ';

            if (mb_strtoupper($operator) === 'LIKE') {
                //$arrparams[$key] = '%' . mb_strtolower($arrparams[$key]) . '%';
                $arrparams[$key] = '%' . $arrparams[$key] . '%';
                $conditions = $conditions . ' lower( cast (' . $key . ' as text) ) ' . $operator . ' (lower(:' . $key . ':)) ';
            } else {
                $conditions = $conditions . $key . $operator . ':' . $key . ': ';
            }
        }
        $conditions = '( ' . $conditions . ' ) and ' . $wheretxt1;
        $arrparams = array_merge($arrparams, $bindarr);
        $order = '1 ASC';
        if (isset($datasource['order'])) {
            $order = $datasource['order'];
        }
        $arrqry = array(
            "conditions" => $conditions,
            "bind" => $arrparams,
            "order" => $order
        );
        if (isset($limit)) {
            $arrqry['limit'] = $limit;
        }
        $arr = $classname::find($arrqry);
        if ($blreturnarray) {
            $arr = $arr->toArray();
        }
        return $arr;
    }

    public static function Get_List($datasource) {
        $arr = self::Get_Datasource_Data($datasource);
        $valsarray = array('-1' => 'All...');
        foreach ($arr as $key => $value) {
            $valsarray[$value[$datasource['keyval']]] = $value[$datasource['showval']];
        }
        return $valsarray;
    }

    public static function getHtmlSelectList($datasource = null, $valsarray = null) {
        $selectedkeyval = null;
        if (!isset($valsarray)) {
            $valsarray = self::Get_List($datasource);
        }
        if (isset($datasource)) {
            if (isset($datasource['selectedkeyval'])) {
                $selectedkeyval = $datasource['selectedkeyval'];
                unset($datasource['selectedkeyval']);
            }
        }

        //$categoriesarr = self::getCategories($arrparams);
        $ret = '';
        foreach ($valsarray as $key => $value) {
            $selected = '';
            if (isset($selectedkeyval) && $key == $selectedkeyval) {
                $selected = 'selected';
            }
            $ret = $ret . '<option value="' . $key . '" ' . $selected . '>' . $value . '</option>';
        }
        return $ret;
    }

    public static function Get_Array_Tabs($arr) {
        return preg_grep('/^tab/', array_keys($arr));
    }

    public static function Get_Tbl_Rows($tbl) {
        return preg_grep('/^tr/', array_keys($tbl));
    }

    public static function Get_Tab_Tables($tab) {
        return preg_grep('/^tbl/', array_keys($tab));
    }

    public static function Get_Row_Cols($row) {
        return preg_grep('/^tcol/', array_keys($row));
    }

    protected static function Get_Default_Filter_For_Sql(&$search, &$bindarr, &$wheretxt1, &$bindarrcnt, &$wheretxtcnt1) {
        $bindarr = array();
        $bindarrcnt = array();
        $wheretxt1 = '  '
                . '('
                . '  (mykatastima=:mykatastima1: or mykatastima=:mykatastima2:) '
                . '  and '
                . '  (fklng=:fklng1: or fklng=:fklng2:)';
        $wheretxtcnt1 = ' Where '
                . '('
                . '  (mykatastima=:mykatastima1 or mykatastima=:mykatastima2) '
                . '  and '
                . '  (fklng=:fklng1 or fklng=:fklng2)';
        foreach ($search as $key => $value) {
            if (!(($key == 'fklng' || $key == 'mykatastima') && $value['value'] == 'current')) {
                if (isset($value['blextrasearch']) && $value['blextrasearch']) {
                    $wheretxt1.=' AND ' . $key . '=:' . $key . ':';
                    $wheretxtcnt1.=' AND ' . $key . '=:' . $key;
                    $bindarr[$key] = $value['value'];
                    $bindarrcnt[$key] = $value['value'];
                    unset($search[$key]);
                }
            }
        }
        $wheretxt1.=')';
        $wheretxtcnt1.=')';

        /*
          PPS{20161030} Todo check for languages
         */
        $fklng1 = \MyCustomHelperLng::My_get_current_lng_id();
        $fklng2 = \MyCustomHelperLng::$Static_Lng_All_Id;
        if (isset($search['fklng'])) {
            $fklngval = isset($search['fklng']['value']) ? $search['fklng']['value'] : $search['fklng'];
            if ($fklngval != 'current') {
                $fklng1 = $fklngval;
                $fklng2 = $fklng1;
            }
        }
        $bindarr['fklng1'] = $fklng1;
        $bindarr['fklng2'] = $fklng2;
        $bindarrcnt['fklng1'] = $fklng1;
        $bindarrcnt['fklng2'] = $fklng2;
        unset($search['fklng']);

        $mykatastima1 = \CHCrmCParams::My_get_mykatastima();
        $mykatastima2 = \CHCrmCParams::My_get_mykatastima_default();
        if (isset($search['mykatastima'])) {
            $mykatastimaval = isset($search['mykatastima']['value']) ? $search['mykatastima']['value'] : $search['mykatastima'];
            if ($mykatastimaval != 'current') {
                $mykatastima1 = $mykatastimaval;
                $mykatastima2 = $mykatastima1;
            }
        }
        $bindarr['mykatastima1'] = $mykatastima1;
        $bindarr['mykatastima2'] = $mykatastima2;
        $bindarrcnt['mykatastima1'] = $mykatastima1;
        $bindarrcnt['mykatastima2'] = $mykatastima2;
        unset($search['mykatastima']);
    }

}
