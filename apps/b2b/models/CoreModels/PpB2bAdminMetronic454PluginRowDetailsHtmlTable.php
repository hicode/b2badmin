<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminMetronic454PluginRowDetailsHtmlTable extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'datatablesdetailstablev100';
    private static $detailtypeTabs = 'tabs';
    private static $detailtypePortlets = 'portlets';

    private static function Get_Item_Read_Main_By_Datasource(&$item, $blreturnarray = true) {
        $di = \Phalcon\DI::getDefault();
        $mytmparr = $di->controller_params_array[\CHCrmCParams::$keyarrRowDetailsHtmlTable];
        self::Get_Item_Read_By_Datasource($mytmparr, $item, $blreturnarray);
    }

    private static function Get_Item_Write_Main_By_Datasource(&$arr, &$item, $blreturnarray = false) {
        $di = \Phalcon\DI::getDefault();
        $arr = isset($arr) ? $arr : $di->controller_params_array[\CHCrmCParams::$keyarrRowDetailsHtmlTable];
        self::Get_Item_Write_By_Datasource($arr, $item, $blreturnarray);
    }

    private static function Get_Item_Read_By_Datasource(&$arr, &$retitem, $blreturnarray = true) {
        self::Get_Item_By_Datasource($arr, $retitem, $blreturnarray, 'read');
    }

    private static function Get_Item_Write_By_Datasource(&$arr, &$retitem, $blreturnarray = false) {
        self::Get_Item_By_Datasource($arr, $retitem, $blreturnarray, 'write');
    }

    private static function Get_Item_By_Datasource(&$arr, &$retitem, $blreturnarray = true, $mode = 'read') {
//$item = null;
        $datasource = isset($arr['datasource']) ? $arr['datasource'] : null;
        $req = \MyCustomHelperCoreDi::Get_Glb_request();
        $dataID = isset($arr['dataID']) ? $arr['dataID'] : null;
        if (!isset($dataID)) {
            $dataID = isset($req['dataID']) ? $req['dataID'] : null;
        }
        if (isset($datasource, $dataID)) {
            $pieces = explode("_", $dataID);
            if (count($pieces) == 2) {
                $fkparentlng = $pieces[0];
                $fklng = $pieces[1];
                if ($mode == 'read') {
                    if (isset($datasource['params'])) {
                        foreach ($datasource['params'] as $key => $value) {
                            if ($value == 'mygetparentkeymyget') {
                                $datasource['params'][$key] = $fkparentlng;
                            } else if ($key == 'fklng') {
                                $datasource['params'][$key] = $fklng;
                            }
                        }
                    }
                    $readtblname = isset($datasource['readtblname']) ? $datasource['readtblname'] : null;
                } else {
                    $datasource['params'] = array('fkparentlng' => $fkparentlng, 'fklng' => $fklng);
                    $readtblname = isset($datasource['writetblname']) ? $datasource['writetblname'] : null;
                }
                if (isset($readtblname)) {
                    $datasource['tblname'] = $readtblname;
                    $items = self::Get_Datasource_Data($datasource, $blreturnarray);
                    if ($items && ((is_array($items) && count($items) > 0) || ($items->count() > 0))) {
                        if ($blreturnarray) {
                            if (isset($items) && count($items) == 1) {
                                $item = $items[0];
                            }
                        } else {
                            $item = $items;
                        }
                    } else {
                        $datasource['params']['fklng'] = \MyCustomHelperLng::$Static_Lng_All_Id;
                        $items = self::Get_Datasource_Data($datasource, $blreturnarray);
                        if ($items && ((is_array($items) && count($items) > 0) || ($items->count() > 0))) {
                            if ($blreturnarray) {
                                if (isset($items) && count($items) == 1) {
                                    $item = $items[0];
                                }
                            } else {
                                $item = $items;
                            }
                        }
                    }
                }
            }
        }
        if (isset($item)) {
            $retitem = $item;
        }
//if (!isset($retitem)) {
//    if ($mode == 'read') {
//        self::Get_Item_Read_Main_By_Datasource($retitem, $blreturnarray);
//    } elseif ($mode == 'write') {
//        self::Get_Item_Write_Main_By_Datasource($retitem, $blreturnarray);
//    }
//}
    }

    public static function Make_keyarrRowDetailsHtmlTable() {
        $di = \Phalcon\DI::getDefault();
        $data = array(
            'success' => '0',
            'msg' => 'Critical Error During Expand'
        );
        if (isset($di->controller_params_array[\CHCrmCParams::$keyarrRowDetailsHtmlTable])) {
            $mytmparr = $di->controller_params_array[\CHCrmCParams::$keyarrRowDetailsHtmlTable];

            if (isset($di->controller_params_array['glb_request']['myColSpan'])) {
                $mytmparr['colspan'] = $di->controller_params_array['glb_request']['myColSpan'];
            } elseif (!isset($mytmparr['colspan'])) {
                $mytmparr['colspan'] = 19;
            }
            self::Get_Item_Read_Main_By_Datasource($item);
            if ($item) {
                $translates = $mytmparr['translates'];
                $msgnotfound = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'msgnotfound');
                $detailtype = isset($mytmparr['detailtype']) ? $mytmparr['detailtype'] : self::$detailtypeTabs;
//$detailtype = 'tabs';
                $mytmparr['detailtype'] = $detailtype;
                if ($detailtype == self::$detailtypePortlets) {
                    $data = self::Make_Portlets($mytmparr, $item);
                } else {
                    $data = self::Make_Tabs($mytmparr, $item);
                }
            } else {
                $data['msg'] = $msgnotfound;
            }
        }
        if (is_array($data)) {
            $di->controller_params_array['jsondata'] = json_encode($data);
        } else {
            $di->controller_params_array['jsondata'] = $data;
        }
    }

    private static function Make_Tabs(&$mytmparr, &$item) {
        $tabuniqueid = \MyCustomHelperCoreDi::Get_Param3();
        if (isset($tabuniqueid) && \MyCustomHelperStringTools::startsWith($tabuniqueid, 'tab')) {
            return self::Make_Single_Request_Portlet($mytmparr, $item, $tabuniqueid);
        } else {
            return self::Get_Main_Portlet($mytmparr, $item);
        }
    }

    private static function Get_Extra_Title() {
        $di = \Phalcon\DI::getDefault();
        $extratitle = '';
        $mytmparr = $di->controller_params_array[\CHCrmCParams::$keyarrRowDetailsHtmlTable];
        self::Get_Item_Read_Main_By_Datasource($myitem);
        $mainportlet = isset($mytmparr['mainportlet']) ? $mytmparr['mainportlet'] : null;
        if (isset($mainportlet, $mainportlet['title'], $mainportlet['title']['extrafield1'])) {
            $extratitle = $myitem[$mainportlet['title']['extrafield1']];
        }
        return $extratitle;
    }

    private static function Get_Main_Portlet(&$mytmparr, &$item) {
        $mytmparr['detailtype'] = self::$detailtypeTabs;
        $detailtype = $mytmparr['detailtype'];
        $translates = $mytmparr['translates'];
        $mainportlet = isset($mytmparr['mainportlet']) ? $mytmparr['mainportlet'] : null;
        $lngid = $item['fklng'];
        $lngprefix = \MyCustomHelperLng::My_get_lng_shortname_from_id_or_shortname($lngid);
        $bootstrap_alert_id = \CHCrmCDataTableAjax::Get_Bootstrap_Alert_Unique_Id();
        $portlet_unique_id = \CHCrmCDataTableAjax::Get_Portlet_Unique_Id();
        $portlet_title = \CHCrmCDataTableAjax::Get_Portlet_Details_Title_Unique_Id();
        $tabs = self::Get_Array_Tabs($mytmparr);
        $editlanguage = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'editinlanguage' . $lngprefix);
        $editlanguage.=' ' . self::Get_Extra_Title();
        $msgthedataloadedsuccesfully = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'msgnotfound');
        $tr_id = \CHCrmCDataTableAjax::Get_Tr_Unique_Id();
        $colspan = $mytmparr['colspan'];

        $data = <<<EOD
                        
        <div class="row">
            <div class="col-md-12">
            <div class="mybootstrap_alert_tab" id="$bootstrap_alert_id"> </div>
            <div class="portlet light grey parentportlet" id="$portlet_unique_id">
                <div class="portlet-title tabbable-line" id="$portlet_title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>
                            $editlanguage
                    </div>
                    <div class="tools">
                        <a href="#" class="expand"> </a>
                    </div>
                    <div class="actions">
                        
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"></a>
                    </div>
EOD;
        if ($detailtype == self::$detailtypeTabs) {
            $data = $data . '<ul class="nav nav-tabs">';


            foreach ($tabs as $key1 => $tabid) {

                $tab = $mytmparr[$tabid];
                $tabtitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $tab['data'], 'title');
                $data = $data . '<li class="' . $tab['data']['class'] . '">';
                $data = $data . '   <a href="#' . $tab['data']['id'] . '" data-toggle="tab">' . $tabtitle . ' </a>';
                $data = $data . '</li>';
            }
            $data = $data . '</ul>';
        }
        $data = $data . <<<EOD
                </div>
                <div class="portlet-body" style="display: none;">
EOD;
        if ($detailtype == self::$detailtypeTabs) {
            $data.='<div class="tab-content">';
            foreach ($tabs as $key1 => $tabid) {
                $tab = $mytmparr[$tabid];
                $data.=self::Make_Tabs_Sub_Tab($mytmparr, $item, $tab);
            }

            $data.='</div>';
        } elseif ($detailtype == self::$detailtypePortlets) {
            foreach ($tabs as $key1 => $tabid) {
                $tab = $mytmparr[$tabid];
                $tab['tabnum'] = $tabid;
                $data.='<div class="row">';
                $data.=self::Make_Sub_Portlet($mytmparr, $item, $tab);
                $data.='</div>';
            }
        }

        $data = $data . <<<EOD
                        
                    </div>
                </div>
            </div>
        </div>   
EOD;
        $html = <<<EOD
            <tr id="$tr_id" class="details">
                <td class="details" colspan="$colspan" style="outline: 3px solid grey;">$data</td>                
            </tr>
                
EOD;
        $data = array(
            'tr' => $html,
            'tr_id' => $tr_id,
            'success' => '1',
            'msg' => $msgthedataloadedsuccesfully
        );
        return $data;
    }

    private static function Make_Tabs_Sub_Tab(&$mytmparr, &$item, &$tab) {

        $data = '<div class="' . $tab['data']['class'] . '" id="' . $tab['data']['id'] . '">';
        $data.='<div class="row">';
//$data.= self::Make_Tbls($mytmparr, $item, $tab) . ' 
        $data.=self::Make_Sub_Portlet($mytmparr, $item, $tab);
        $data.='                </div>';
        $data.='                </div>';
        return $data;
    }

    private static function Get_Js_Function_MyRunForm($datatable_ajax, $mylocalaoColumns, $MyRunForm, $myextrasearch, $extrajscode = '') {
        $di = \Phalcon\DI::getDefault();
        $keyarr = \CHCrmCParams::$keyarrDataTableAjax2;
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $ret = 'var ' . $MyRunForm . ' = function () {
';
        //extrasearch, col, sort, pagelength, lengthmenukeys, lengthmenuvalues
        if (isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2])) {
            $mainpage = $di->controller_params_array[$keyarr]['datatable']['mainpage'];
            $mainpagedetails = $mainpage . '_details';
            $mainurl_for_data = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $di->controller_params_array['settings']['Helper_Page_Data_Table_Ajax_Page'], 'param1' => $mainpage));
            $mainurl_for_data_details = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $di->controller_params_array['settings']['Helper_Page_Data_Table_Ajax_Page'], 'param1' => $mainpagedetails, 'param2' => $di->controller_params_array['settings']['Action_View']));
            //$extrasearch = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['extrasearch']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['extrasearch'] : '';
            $col = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['col']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['col'] : '3';
            $sort = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['sort']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['sort'] : 'asc';
            $pagelength = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['pagelength']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['pagelength'] : '20';
            $lengthmenukeys = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['lengthmenukeys']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['lengthmenukeys'] : '10,20,50,100,150,250,500,-1';
            $lengthmenuvalues = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['lengthmenuvalues']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax2]['async_req_data_param']['lengthmenuvalues'] : '10,20,50,100,150,250,500,"All"';
            $ret.=' 
        TableAjax.init("' . $datatable_ajax . '", ' . $mylocalaoColumns . ', "' . $mainurl_for_data . '", "' . $mainurl_for_data_details . '", "' . $myextrasearch . '", "' . $col . '", "' . $sort . '", "' . $pagelength . '", "' . $lengthmenukeys . '", \'' . $lengthmenuvalues . '\');';
        }
        $ret.=' 
        UIGeneral.init();
        ' . $extrajscode . '
    };';
        return $ret;
    }

    private static function Make_Datatable_Ajax(&$mytmparr, &$item, &$tab) {
        $di = \Phalcon\DI::getDefault();

        $keyarr = \CHCrmCParams::$keyarrDataTableAjax2;
        $pluginaliasname = $tab['datasource']['pluginaliasname'];
        PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Page_Plugin_Translates(null, $pluginaliasname);
        $tabuniqueid = $tab['data']['id'];
        $pluginparams = PpB2bAdminVfpluginnoavailableparams::Get_Params_By_Aliasname($pluginaliasname);
        /*
         * PPS20160929
         */
        $mygetparentkeymyget = $tab['datasource']['params']['mygetparentkeymyget'];
        if (isset($mygetparentkeymyget)) {
            if (isset($item[$mygetparentkeymyget], $pluginparams[$keyarr]['cols'][$mygetparentkeymyget])) {
                $pluginparams[$keyarr]['cols'][$mygetparentkeymyget]['filter']['type'] = 'input';
                $pluginparams[$keyarr]['cols'][$mygetparentkeymyget]['filter']['value'] = $item[$mygetparentkeymyget];
            } else {
                error_log('Not found $item[$mygetparentkeymyget] or $pluginparams[$keyarr]["cols"][$mygetparentkeymyget]');
            }
        }
        /*
         * PPE20160929
         */
        $di->controller_params_array[$keyarr] = $pluginparams[$keyarr];

        $datatablehtmlname = $pluginparams[$keyarr]['datatable']['htmlname'] = PpB2bAdminMetronic454PluginDataTableAjax::Set_Datatable_Html_Name($keyarr, null, $tabuniqueid);
        PpB2bAdminMetronic454PluginDataTableAjax::Make_keyarrDataTableAjax($keyarr);
        $di->controller_params_array[$keyarr]['donestep2'] = true;

        $mylocalaoColumns = $datatablehtmlname . 'mylocalaoColumns';
        $MyRunForm = $datatablehtmlname . 'MyRunForm';
        $data = '';
        if (isset($datatablehtmlname)) {
            $data = PpB2bAdminMetronic454PluginDataTableAjax::Get_Page_DataTableAjax($keyarr);
            \MyCustomHelperCoreDi::Get_Glb_request_Pieces_dataID($fkparentlng, $fklng);
            $myextrasearch = '';
            if (isset($fkparentlng, $tab['datasource']['params']['mygetparentkeymyget'])) {
                $myextrasearch = 'myextrasearch=' . $tab['datasource']['params']['mygetparentkeymyget'] . ':' . $fkparentlng;
            }
            $data.='<script> '
                    . $mylocalaoColumns . ' = ' . $di->controller_params_array[$keyarr]['myaoColumns'] . ';'
//                    . 'TableAjax.init("' . $datatablehtmlname . '",mylocalaoColumns,"' . $mainurl_for_data . '","' . $mainurl_for_data_details . '","' . $myextrasearch . '");'
                    . self::Get_Js_Function_MyRunForm($datatablehtmlname, $mylocalaoColumns, $MyRunForm, $myextrasearch)
                    . '' . $MyRunForm . '();'
                    . '</script>';
        }
        return $data;
    }

    private static function Make_Tbls(&$mytmparr, &$item, &$tab) {
        self::Get_Item_Read_By_Datasource($tab, $item);
        $tabuniqueid = $tab['data']['id'];
        $newtabuniqueid = $tabuniqueid;
        $portlet_unique_id = \CHCrmCDataTableAjax::Get_Portlet_Unique_Id($tabuniqueid);
        $data = '';
        $tbls = self::Get_Tab_Tables($tab);
        foreach ($tbls as $key2 => $tblid) {
            $tbl = $tab[$tblid];
            $data.=self::Make_Rows($mytmparr, $item, $tbl, $tab);
        }
        $pieces = explode('_', $tabuniqueid);
        if (count($pieces) == 3) {
            if (isset($item['fkparentlng'])) {
                $tab['dataID'] = $item['fkparentlng'] . '_' . $item['fklng'];
            }
            self::Get_Item_Write_By_Datasource($tab, $itemwrite, true);
            unset($tab['dataID']);
            if (isset($itemwrite)) {
                $tabnum = $pieces[0];
                $itemid = $pieces[1];
                $lngid = $pieces[2];
                $newtabuniqueid = $tabnum . '_' . $itemwrite['id'] . '_' . $itemwrite['fklng'];
            }
        }
        $data.='<input id="id" name="id" class="' . self::Get_Identity_Class($portlet_unique_id) . '" type="hidden" value="' . $mytmparr['id'] . '_' . $newtabuniqueid . '"/>';
        return $data;
    }

    private static function Make_Rows(&$mytmparr, &$item, &$tbl, &$tab) {
        self::Get_Item_Read_By_Datasource($tbl, $item);
        $tabletype = isset($tab['tabletype']) ? $tab['tabletype'] : 'table';
        if ($tabletype == 'table') {
            $data = '<table class="' . $tbl['class'] . '">';
            $data.= '   <tbody>';
        } elseif ($tabletype == 'div') {
            $data = '<div class="row">';
        }
        $rows = self::Get_Tbl_Rows($tbl);
        foreach ($rows as $key3 => $rowid) {
            $row = $tbl[$rowid];

            $data.=self::Make_Cols($mytmparr, $item, $row, $tbl, $tab);
        }
        if ($tabletype == 'table') {
            $data.= '   </tbody>';
            $data.= '</table>';
        } elseif ($tabletype == 'div') {
            $data.= '</div>';
        }
        return $data;
    }

    private static function Make_Cols(&$mytmparr, &$item, &$row, &$tbl, &$tab) {
        self::Get_Item_Read_By_Datasource($row, $item);
        $tabletype = isset($tab['tabletype']) ? $tab['tabletype'] : 'table';
        if ($tabletype == 'table') {
            $data = '   <tr>';
        } elseif ($tabletype == 'div') {
//$data = '<div class="row">';
        }
        $cols = self::Get_Row_Cols($row);
        foreach ($cols as $key4 => $colid) {
            $col = $row[$colid];
            if ($tabletype == 'div') {
                $divclass = isset($col['divclass']) ? $col['divclass'] : 'col-md-6';
                $data.= '<div class="' . $divclass . '">';
            }
            $data.=self::Make_Col($mytmparr, $item, $col, $row, $tbl, $tab);
            if ($tabletype == 'div') {
                $data.= '</div>';
            }
        }
        if ($tabletype == 'table') {
            $data.= '   </tr>';
        } elseif ($tabletype == 'div') {
//$data.= '</div>';
        }
        return $data;
    }

    private static function Make_Col(&$mytmparr, &$item, &$col, &$row, &$tbl, &$tab) {
        $tabuniqueid = $tab['data']['id'];
        $portlet_unique_id = \CHCrmCDataTableAjax::Get_Portlet_Unique_Id($tabuniqueid);
        $datasource = $mytmparr['datasource'];
        $writetblname = $datasource['writetblname'];
        $lngid = $item['fklng'];
        $identityclass = self::Get_Identity_Class($portlet_unique_id);
        $coltype = isset($col['coltype']) ? $col['coltype'] : 'td';
        $colspan2 = isset($col['colspan']) ? ' colspan="' . $col['colspan'] . '" ' : ' ';
        $class = isset($col['class']) ? ' class="' . $col['class'] . '" ' : '';
        $width = isset($col['width']) ? ' width="' . $col['width'] . '" ' : '';
        $elementtype = isset($col['type']) ? $col['type'] : '';
        $data = '   <' . $coltype . $colspan2 . $width . $class . '>';
//$data = $data . '   <td width="' . $col['width'] . '" class="' . $col['class'] . '">';
        if ($elementtype === 'title') {
            $data = $data . '<strong>';
            $coltext = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $col, 'text');
            $data = $data . $coltext;

            $data = $data . '</strong>';
        } elseif (
                $elementtype === 'rocontent' ||
                $elementtype === 'content_input' ||
                $elementtype === 'content_select_list' ||
                $elementtype === 'content_input_switch' ||
                $elementtype === 'content_input_date_time' ||
                $elementtype === 'content_input_date'
        ) {
            $tmpdata = '';
            if (isset($item[$col['field']])) {
                $tmpdata = $item[$col['field']];
                if (isset($col['fieldparam'])) {
//$tmparr = explode('::', $col['fieldparam']);
//if (count($tmparr) == 2) {
//    $col['fieldparam'] = \MyCustomHelperClassTools::My_Class_Get_User_Prop($tmparr[0], $tmparr[1]);
//}
                    $tmpdata = \MyCustomHelperStringTools::getParamsbyparamname($tmpdata, $col['fieldparam']);
                }
            }
            $pulsate = false;
            if (isset($col['pulsate'])) {
                $pulsate = $col['pulsate'];
                if (isset($col['pulsate_values'])) {
                    $pulsate = false;
                    foreach ($col['pulsate_values'] as $keypulsate => $valuepulsate) {
                        if ($tmpdata == $valuepulsate) {
                            $pulsate = true;
                        }
                    }
                }
            }

            if (isset($col['datasource']['reffield'])) {
                if ($tmpdata <> '') {
//$tmpclassname = MyCustomHelperClassTools::My_Core_Get_Classname($col['datasource']['classname']);
                    $tmparrrefdata = PpB2bAdminGetById::getById($tmpdata, \MyCustomHelperClassTools::My_Core_Get_Classname($col['datasource']['tblname'], $col['datasource']['kind']));
                    if ($tmparrrefdata) {
                        if (isset($tmparrrefdata[$col['datasource']['reffield']])) {
                            $tmpdata = $tmparrrefdata[$col['datasource']['reffield']];
                        }
                    }
                }
            }
            if ((isset($col['dbtype']) && $col['dbtype'] == \Phalcon\Db\Column::TYPE_DATE) || $elementtype === 'content_input_date') {
                if ($tmpdata != '') {
                    $tmpdata = \MyCustomHelperDateTools::getDateDayMonthYear($tmpdata);
                }
            } elseif ((isset($col['dbtype']) && $col['dbtype'] == \Phalcon\Db\Column::TYPE_DATETIME) || $elementtype === 'content_input_date_time') {
                if ($tmpdata != '') {
                    $tmpdata = \MyCustomHelperDateTools::getDateDayMonthYearHourMin($tmpdata);
                }
            }
            if (isset($col['display_cell']) && $col['display_cell'] === 'colours') {

                $colourclass = 'fa fa-close';
                $colour = 'red';
                if ($tmpdata == 1) {
                    $colourclass = 'fa fa-check';
                    $colour = 'green';
                } elseif ($tmpdata == 2) {
                    $colour = 'yellow';
                    $colourclass = 'fa fa-warning';
                }

                $tmpdata = '<button class="btn btn-circle ' . $colour . '" type="button">
                                                            <i class="' . $colourclass . '"></i>
                                                        </button>';
            }
            if ($elementtype === 'content_input') {
                $tmpdata = '<input type="text"  name="' . \MyCustomHelperClassTools::getOriginalField($writetblname, $col['html']['fieldname']) . '" class="' . $col['html']['class'] . $identityclass . '" value="' . $tmpdata . '" readonly>';
            } elseif ($elementtype === 'content_select_list') {
                $datasourcesl = $col['datasource'];
                $datasourcesl['selectedkeyval'] = $item[$col['field']];
                $arrparams = isset($datasourcesl['params']) ? $datasourcesl['params'] : null;
                /*
                  PPS{20161024}
                 */
                //if (isset($arrparams) && isset($arrparams['fklng']) && $arrparams['fklng'] == 'current') {
                //    $datasourcesl['params']['fklng'] = $lngid;
                //}
                /*
                  PPE{20161024}
                 */



                $list = self::getHtmlSelectList($datasourcesl);


//$tmpclassname = \MyCustomHelperClassTools::My_Core_Get_Classname($col['datasource']['tblname']);
//$list = $tmpclassname::getHtmlSelectList(array(
//            'fklng' => $lngid,
//            'selectedkeyval' => $item[$col['field']]
//               )
//);

                $tmpdata = '<select class="' . $col['html']['class'] . $identityclass . '" disabled="disabled" name="' . $col['html']['fieldname'] . '">' . $list . '</select>';
            } elseif ($elementtype === 'content_input_switch') {
                if ($tmpdata == $col['switch']['checkedon']) {
                    $tmpdata = ' checked ';
                } else {
                    $tmpdata = ' ';
                }
                $dataontext = isset($col['trans_dataontext']) ? PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $col, 'dataontext') : PpB2bAdminVftranslate::getKeyvalueFromKeyname('YES1');
                $dataofftext = isset($col['trans_dataofftext']) ? PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $col, 'dataofftext') : PpB2bAdminVftranslate::getKeyvalueFromKeyname('NO1');
                $tmpdata = '<div class="input-group col-md-12">
                                                <input name="' . $col['html']['fieldname'] . '" type="checkbox" class="make-switch customswitch ' . $identityclass . '" ' . $tmpdata . ' data-on-text="' . $dataontext . '" data-off-text="' . $dataofftext . '" data-on-color="' . $col['switch']['data-on-color'] . '" data-off-color="' . $col['switch']['data-off-color'] . '" disabled="disabled">
                                            </div> ';
            } elseif ($elementtype === 'content_input_date_time') {

                $tmpdata = '<div class="input-group date form_datetime" data-date="' . $tmpdata . '">
                                                                    <input name="' . $col['html']['fieldname'] . '" type="text" size="16" readonly class="form-control  ' . $identityclass . '" value="' . $tmpdata . '" >
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
                                                                        <button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
                                                                    </span>
                                                                </div>';
            } elseif ($elementtype === 'content_input_date') {

                $tmpdata = '<div class="input-group date form_date" data-date="' . $tmpdata . '">
                                                                    <input name="' . $col['html']['fieldname'] . '" type="text" size="16" readonly class="form-control  ' . $identityclass . '" value="' . $tmpdata . '" >
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>';
            }
            if ($pulsate) {
                $tmpdata = '<div class="pulsate-regular" style="padding:5px;">' . $tmpdata . '</div>';
            }

            $data = $data . $tmpdata;
        }
        $data = $data . '   </' . $coltype . '>';
        return $data;
    }

    private static function Make_Single_Request_Portlet(&$mytmparr, &$item, &$tabuniqueid) {
        $tabs = self::Get_Array_Tabs($mytmparr);
        $portlet_unique_id = \CHCrmCDataTableAjax::Get_Portlet_Unique_Id($tabuniqueid);
        $jsportletobj = '$("#' . $portlet_unique_id . '")';
        $data = '';
        foreach ($tabs as $key1 => $tabid) {
            $tab = $mytmparr[$tabid];
            $tab['tabnum'] = $tabid;
            if ($tab['data']['id'] == $tabuniqueid) {
                $tabtype = isset($tab['data']['tabtype']) ? $tab['data']['tabtype'] : 'normal';
                if ($tabtype == 'normal') {
                    $data.= self::Make_Tbls($mytmparr, $item, $tab);
                    $data.=' '
                            . '<script> disableTabPortlet(' . $jsportletobj . '); '
                            . '//toastrMsg("", "' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('successfetchingdata1') . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $tab['data'], 'title') . '", "success");'
                            . '</script>';
                } elseif ($tabtype == 'datatableajax') {
                    $data.= self::Make_Datatable_Ajax($mytmparr, $item, $tab);
                }

                break;
            }
        }
        return $data;
    }

    private static function Make_Portlets(&$mytmparr, &$item) {
        $tabuniqueid = \MyCustomHelperCoreDi::Get_Param3();
        if (isset($tabuniqueid) && \MyCustomHelperStringTools::startsWith($tabuniqueid, 'tab')) {
            return self::Make_Single_Request_Portlet($mytmparr, $item, $tabuniqueid);
        } else {
            return self::Get_Main_Portlet($mytmparr, $item);
        }
    }

    private static function Make_Sub_Portlet(&$mytmparr, &$item, &$tab) {
        $di = \Phalcon\DI::getDefault();
        $mykatastima = $item['mykatastima'];
        self::Get_Item_Read_By_Datasource($tab, $item);
        $req = \MyCustomHelperCoreDi::Get_Glb_request();
        $tabid = $tab['data']['id'];
        $bootstrap_alert_id = \CHCrmCDataTableAjax::Get_Bootstrap_Alert_Unique_Id($tabid);
        $dataID = $req['dataID'];
        $translates = $mytmparr['translates'];
        $writeclassname = '';
        $frm_id = \CHCrmCDataTableAjax::Get_Frm_Tr_Unique_Id($tabid);

        $portlet_unique_id = \CHCrmCDataTableAjax::Get_Portlet_Unique_Id($tabid);
        $portlet_title = \CHCrmCDataTableAjax::Get_Portlet_Details_Title_Unique_Id($tabid);
        $editlanguage = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $tab['data'], 'title') . ' (' . self::Get_Extra_Title() . ')';
//$editlanguage = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'editinlanguage' . $lngprefix);
        $editbuttontext = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'editbuttontext');
        $savebuttontext = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'savebuttontext');
        $cancelbuttontext = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'cancelbuttontext');
        $mainurl_for_data_details_tab = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM3, array('helperpage' => \MyCustomHelperCoreDi::Get_Settings()['Helper_Page_Data_Table_Ajax_Page'], 'param1' => \MyCustomHelperCoreDi::Get_Param1(), 'param2' => $di->controller_params_array['settings']['Action_View'], 'param3' => $tabid));
        $mainurl_for_data_details_tab.='?dataID=' . \MyCustomHelperCoreDi::Get_Glb_request()['dataID'];

        $actions = <<<EOD
                <div class="actions">
                                        <a class="btn btn-circle btn-default btn-sm custom-edit-class">
                                            <i class="fa fa-pencil"></i> $editbuttontext
                                        </a>
                                        <a class="btn btn-circle btn-default btn-sm custom-save-class" data-mykatastima="$mykatastima" style="display: none;">
                                            <i class="fa fa-save"></i> $savebuttontext
                                        </a>
                                        <a id="$dataID" class="btn btn-circle btn-default btn-sm custom-cancel-class" style="display: none;">
                                            <span class="icon-close" ></span> $cancelbuttontext
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"></a>
                                    </div>
EOD;
        $tabtype = isset($tab['data']['tabtype']) ? $tab['data']['tabtype'] : 'normal';
        if ($tabtype == 'datatableajax') {
            $actions = <<<EOD
                <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"></a>
                                    </div>
EOD;
        }


        $data = <<<EOD
    <div class="col-md-12">
                            <div class="mybootstrap_alert_tab" id="$bootstrap_alert_id"> </div>
                            <div class="portlet box green-meadow childportlet" id="$portlet_unique_id">
                                <div class="portlet-title tabbable-line" id="$portlet_title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>
                                        $editlanguage
                                    </div>
                                    <div class="tools">
                                        <a href="#" class="expand"> </a>
                                        <a href="#"  data-url="$mainurl_for_data_details_tab" class="reload"></a>
                                    </div>
                                    $actions
                                </div>
                                <div class="portlet-body" style="display: none;">
EOD;
//$data.= self::Make_Tbls($mytmparr, $item, $tab);
        $data.= <<<EOD
                                </div>
                            </div>
                        </div>
EOD;
        $data = '<input type="hidden" name="writeclassname" id="writeclassname" value="' . $writeclassname . '"/>' . $data . '';
        return $data;
    }

    private static function Get_Identity_Class($portlet_unique_id) {
        $identityclass = ' myformdetailfield-' . $portlet_unique_id . ' ';
        return $identityclass;
    }

    public static function Save_Data() {
        $keyarr = \CHCrmCParams::$keyarrRowDetailsHtmlTable;
        $di = \Phalcon\DI::getDefault();
//PpB2bAdminVfroutepagepluginnoavailableparams::Get_Page_Params($pagename, $blstep1, $blstep2);

        $glb_request = \MyCustomHelperCoreDi::Get_Glb_request();
        $mydata = isset($glb_request['mydata']) ? $glb_request['mydata'] : null;
        $msg = PpB2bAdminVftranslate::getKeyvalueFromKeyname('unkownerrorduringsave1');
        $status = '0';
        try {

            if (isset($mydata) && is_array($mydata) && count($mydata) > 0) {

                $mixid = isset($mydata['id']) ? $mydata['id'] : null;
                if (isset($mixid)) {
                    $pieces = explode('_', $mixid);
                    if (count($pieces) == 4) {
                        $fkplugin = $pieces[0];
                        $tab = $pieces[1];
                        $itemid = $pieces[2];
                        $lngid = $pieces[3];




                        $arrparams = PpB2bAdminVfpluginnoavailableparams::Get_Params_By_Fkplugin($fkplugin);
                        if (isset($arrparams[$keyarr])) {
                            $arrparams = $arrparams[$keyarr];
                            if (isset($arrparams[$tab])) {
                                $tab = $arrparams[$tab];
                                $dataID = $itemid . '_' . $lngid;
                                $arrparams['dataID'] = $dataID;
                                $tab['dataID'] = $dataID;
                                self::Get_Item_Write_Main_By_Datasource($arrparams, $itemobj);
                                self::Get_Item_Write_By_Datasource($tab, $itemobj);
                                if ($itemobj) {
                                    $itemarr = $itemobj->toArray();
                                    if (count($itemarr) == 1) {
                                        $itemobj = $itemobj->getFirst();
                                    } else {
                                        $itemobj = null;
                                    }
                                    if ($itemobj) {
                                        $blcontinue = true;
                                        $updateparams = self::Get_Update_Params($tab);
                                        foreach ($mydata as $key => $value) {
                                            if (strlen($value) == 0) {
                                                $value = null;
                                            }
                                            if (isset($updateparams[$key])) {
                                                $dbtype = isset($updateparams[$key]['dbtype']) ? $updateparams[$key]['dbtype'] : null;
                                                if (isset($dbtype, $value)) {
                                                    if ($dbtype == \Phalcon\Db\Column::TYPE_DATE) {
                                                        $value = \DateTime::createFromFormat('d/m/Y', $value);
                                                        $value = $value->format('Y-m-d');
                                                    }
                                                }
                                                $type = isset($updateparams[$key]['type']) ? $updateparams[$key]['type'] : null;
                                                if (isset($type)) {
                                                    if ($type == 'content_input_switch') {
                                                        $value = $value == 'false' ? 0 : 1;
                                                    }
                                                }
                                                $itemobj->$key = $value;
                                            } else {
                                                if ($key != 'id' && $key != 'id') {
                                                    $blcontinue = false;
                                                    $msg = 'Error During Save Field : ' . $key;
                                                    break;
                                                }
                                            }
                                        }
                                        if ($blcontinue) {
                                            $itemobj->setUpdatestatus(1);
                                            if ($itemobj->save() == false) {
                                                $msg = 'Error During Final Save. ';
                                            } else {
                                                $msg = 'The operation has completed succesfully';
                                                $status = '1';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            $msg = 'Unknown Error During Save. ';
        }
        $ret = array('msg' => $msg, 'status' => $status);
        return $ret;
    }

    private static function Get_Update_Params($tabarr) {
        $retarr = array();
        $tbls = self::Get_Tab_Tables($tabarr);
        foreach ($tbls as $key1 => $tblid) {
            $tbl = $tabarr[$tblid];
            $rows = self::Get_Tbl_Rows($tbl);
            foreach ($rows as $key2 => $rowid) {
                $row = $tbl[$rowid];
                foreach ($row as $key3 => $col) {
                    if (\MyCustomHelperStringTools::startsWith($col['type'], 'content_')) {
                        $dbtype = isset($col['dbtype']) ? $col['dbtype'] : null;
                        $type = isset($col['type']) ? $col['type'] : null;
                        $retarr[$col['html']['fieldname']] = array('fieldname' => $col['html']['fieldname'], 'dbtype' => $dbtype, 'type' => $type);
                    }
                }
            }
        }
        return $retarr;
    }

}
