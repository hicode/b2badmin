<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminMetronic454PluginDataTableAjax extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'datatablesv11010';
    public static $Datatable_Html_Name_Main = 'datatable_ajax';
    private static $Datatable_Html_Name_Child = 'datatable_ajax2';

    public static function Make_Params_Step1($paramval) {
        if ($paramval == 'yes_no') {
            $paramval = array('-1' => 'All...',
                \AGCHParams::$Static_Bl_True => 'Yes',
                \AGCHParams::$Static_Bl_False => 'No');
        } elseif ($paramval == 'update_status') {
            $paramval = array('-1' => 'All...',
                \MyCustomHelperCoreDi::Get_Settings()['Update_Status_Yes'] => 'Updated',
                \MyCustomHelperCoreDi::Get_Settings()['Update_Status_No'] => 'Not Updated',
                \MyCustomHelperCoreDi::Get_Settings()['Update_Status_Modified'] => 'Modified');
        } elseif ($paramval == 'currentuser') {
            $paramval = \MyCustomHelperSession::My_get_param_val_jsonrowuser_id();
        } elseif ($paramval == 'currentyear') {
            $paramval = date("Y");
        }
        return $paramval;
    }

    private static function Get_Json_Data($keyarr, $Get_Json_Dataarr = null) {
        //$col = 3;
        //$sort = 'asc';
        //$pagelength = 20;
        //$lengthmenukeys = array(10, 20, 50, 100, 150, 250, 500, -1);
        //$lengthmenuvalues = array(10, 20, 50, 100, 150, 250, 500, "All");
        $di = \Phalcon\DI::getDefault();
        $Get_Json_Dataarr = isset($Get_Json_Dataarr) ? $Get_Json_Dataarr : array();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $mytmparr = $cpa[$keyarr];
        $helperpage = \MyCustomHelperCoreDi::Get_Helperpage();
        $Extension = '';
        $ExportType = '';
        $DownloadPath = \AGCHParams::$Settings__Dir_Public_Tmp_Export_0 . '/';
        $param1 = \MyCustomHelperCoreDi::Get_Param1();
        $param2 = \MyCustomHelperCoreDi::Get_Param2();
        $param3 = \MyCustomHelperCoreDi::Get_Param3();

        if (isset($helperpage, $param1, $param2) && $helperpage == \MyCustomHelperCoreDi::Get_Settings()['Helper_Page_Data_Table_Ajax_Page']) {
            $action = $param2;
            if (isset($param3) && $param3 == 'data-table-ajax-level1_details') {
                $action = $param3;
            }
            $translates = $mytmparr['translates'];
            $tablecols1 = $mytmparr['cols'];
            $req = isset($Get_Json_Dataarr['req']) ? $Get_Json_Dataarr['req'] : \MyCustomHelperCoreDi::Get_Glb_request();
            $prefixbtndelid = $cpasettings['My_Prefix_Confirmation_Btn'];
            $assetspath = $cpa['template']['template_admin_path_with_assets_path'];
            $searchkeys = preg_grep('/search-/i', array_keys($req));
            $search = array();
            /*
              PPS20160929
             */
            /* foreach ($tablecols1 as $key => $value) {
              $fieldvisible = isset($value['visible']) ? $value['visible'] : '1';
              if ($fieldvisible != 1) {
              unset($tablecols1[$key]);
              }
              }
             */
            /*
             * PPE20160929
             */
            foreach ($searchkeys as $key => $value) {

                if ($req[$value] != '' && $req[$value] != '-1') {

                    $searchkey = str_replace('search-', '', $value);
                    $keyparams = $tablecols1[$searchkey];
                    $searchmethod = 'Exact';
                    if (isset($keyparams['filter'])) {
                        if (isset($keyparams['filter']['searchmethod'])) {
                            $searchmethod = $keyparams['filter']['searchmethod'];
                        }
                        if (isset($keyparams['filter']['searchkey'])) {
                            $searchkey = $keyparams['filter']['searchkey'];
                        }
                    }
                    $search[$searchkey] = array('value' => $req[$value], 'searchmethod' => $searchmethod);
                }
            }

            unset($searchkeys);

            $sortingorder = 'asc';
            if (isset($req['order']) && $req['order'][0]['dir'] == 'desc') {
                $sortingorder = 'desc';
            }
            $colnum = 3;
            if (isset($req['order'])) {
                $colnum = $req['order'][0]['column'];
            }

            $sortfield = null;
            foreach ($tablecols1 as $key => $value) {

                $colnum--;
                if ($colnum < 0) {
                    $sortfield = $key;
                    break;
                }
            }
            $order = array();
            if (isset($sortfield)) {
                $order = array($sortfield => $sortingorder);
            }


            $reqlength = intval($req['length']) == 0 ? -1 : intval($req['length']);
            $iDisplayLength = $reqlength;

            $iDisplayStart = isset($req['start']) ? intval($req['start']) : 0;

            $datasource = $mytmparr['datasource'];

            if (isset($datasource['extrasearch'])) {
                foreach ($datasource['extrasearch'] as $key => $value) {
                    $searchkey = $key;
                    if (isset($value['searchkey'])) {
                        $searchkey = $value['searchkey'];
                    }
                    if ($value['value'] == 'now()') {
                        $value['value'] = \MyCustomHelperDateTools::getCurrDateTimeForDB();
                    }
                    $operator = isset($value['operator']) ? $value['operator'] : '=';
                    $search[$searchkey] = array('value' => $value['value'],
                        'searchmethod' => $value['searchmethod'],
                        'operator' => $operator,
                        'blextrasearch' => true);
                }
            }
            if (isset($req['myextrasearch'])) {
                $pieces = explode('-', $req['myextrasearch']);
                foreach ($pieces as $key => $value) {
                    $pieces2 = explode(':', $value);
                    $search[$pieces2[0]] = array('value' => $pieces2[1], 'searchmethod' => 'Exact');
                }
            }
            if (count($search > 0)) {
                $blgensrch = isset($mytmparr['blgensrch']) ? $mytmparr['blgensrch'] : '0';
                if ($blgensrch) {
                    $search['blgensrch'] = '1';
                }
            }
            if (\MyCustomHelperStringTools::startsWith(mb_strtoupper($action), 'EXPORT_')) {
                if ($action == $cpasettings['Export_To_Excel']) {
                    $Extension = 'xls';
                    $ExportType = 'XLSX';
                } elseif ($action == $cpasettings['Export_To_Pdf']) {
                    $Extension = 'pdf';
                    $ExportType = 'PDF';
                } elseif ($action == $cpasettings['Export_To_Csv']) {
                    $Extension = 'csv';
                    $ExportType = 'CSV';
                } elseif ($action == $cpasettings['Export_To_Open_Office_Calc']) {
                    $Extension = 'odt';
                    $ExportType = 'ODT';
                }
                $DownloadFileName = $cpa['param1'] . date("Ymj-Gis-") . uniqid();

                $DownloadFileNameWithPath = $DownloadPath . $DownloadFileName;

                $exportparamsarr = array(
                    'properties' => array(
                        'Extension' => $Extension,
                        'ExportType' => $ExportType,
                        'DownloadPath' => $DownloadPath,
                        'DownloadFileName' => $DownloadFileName,
                        'DownloadFileNameWithPath' => $DownloadFileNameWithPath,
                        'PluginAliasName' => self::$AvailablePluginAliasName,
                        'Creator' => 'Pan Pan',
                        'LastModifiedBy' => 'Pan Pan',
                        'Title' => 'Pan Pan',
                        'Subject' => 'Pan Pan',
                        'Description' => 'Pan Pan',
                        'Keywords' => 'Pan Pan',
                        'Category' => 'Pan Pan',
                    )
                );
                $retdata = \MyCustomHelperExportExcel::My_export_grid_postgres($exportparamsarr, $keyarr, $datasource['readclassname'], $search, $order);
                $cpa['jsondata'] = ' <a target="_blank" href="' . $cpa['base_path_with_publicpath'] . $DownloadFileNameWithPath . '.' . $Extension . '">download ' . $ExportType . ' file</a> ';
            } else {

                $start = microtime(true);




                //return;
                $retdata = self::BE_getDataTableData($keyarr, $datasource['readclassname'], $iDisplayStart, $iDisplayLength, $search, $order);


                $retarr = array();
                if (isset($retdata['items'])) {
                    $retarr = $retdata['items'];
                }
                $iTotalRecords = 0;
                if (isset($retdata['totalitems'])) {
                    $iTotalRecords = $retdata['totalitems'];
                }
                $iTotalPages = 1;
                if (isset($retdata['totalpages'])) {
                    $iTotalPages = $retdata['totalpages'];
                }


                $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;

                $sEcho = isset($req['draw']) ? intval($req['draw']) : 1;

                $records = array();
                $records["data"] = array();

                $end = $iDisplayStart + $iDisplayLength;
                $end = $end > $iTotalRecords ? $iTotalRecords : $end;


                $tmpi = $iDisplayStart;
                $totalrecordsfound = count($retarr);
                $blshowtrash = \AGCHParams::$Static_Bl_True;
                $blshowdisable = \AGCHParams::$Static_Bl_True;
                $mycolspan = count($tablecols1);
                for ($i = 0; $i < $totalrecordsfound; $i++) {
//($retarr['data'] as $key1 => $value1) {
                    $rec = $retarr[$i];
                    $tmparrdata = array();

                    foreach ($tablecols1 as $key => $value) {
                        if ($action === $cpasettings['Action_View']) {
                            $tmpdata = self::Get_Json_Data_Action_View($rec, $key, $value, $tmpi, $mycolspan);
                            array_push($tmparrdata, $tmpdata);
                        }
                    }
                    $records["data"][] = $tmparrdata;
                    $tmpi++;
                }
                if (isset($retdata['group']) && count($retdata['group']) > 0) {
                    if ($action === $cpasettings['Action_View'] ||
                            \MyCustomHelperStringTools::startsWith(mb_strtoupper($action), 'EXPORT_')
                    ) {
                        $tmparrdata = array();

                        foreach ($tablecols1 as $key => $value) {
                            $tmpdata = '';
                            if (isset($retdata['group'][$key])) {
                                if ($retdata['group'][$key]['type'] == 'sum') {
                                    $tmpdata = 'Sum : ' . \MyCustomHelperNumberTools::getNumberMoney($retdata['group'][$key]['val'], true);
                                    if ($action === $cpasettings['Action_View']) {
                                        $tmpdata = '<strong>' . $tmpdata . '</strong>';
                                    }
                                }
                            }
                            //if ($iDisplayStart == 1 || $cpa['stoprecursive'] == true || $action === $cpasettings['Action_View']) {
                            array_push($tmparrdata, $tmpdata);
                            //}
                        }
                        if ($action === $cpasettings['Action_View']) {
                            //Put group on bottom
                            $records["data"][] = $tmparrdata;
                        }

                        if ($iDisplayStart == 0 || $action === $cpasettings['Action_View']) {
                            //Put group on top
                            array_unshift($records['data'], $tmparrdata);
                        }
                    }
                }
                if ($action == $cpasettings['Action_View']) {
                    if (isset($req["customActionType"]) && $req["customActionType"] == "group_action") {
                        $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
                        $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
                    }

                    $records["draw"] = $sEcho;
                    $records["recordsTotal"] = $iTotalRecords;
                    $records["recordsFiltered"] = $iTotalRecords;

                    $retmsg = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'successmessage');
                    $Youhaverequestedtoview = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'youhaverequestedtoview');
                    $recordsbutduethelimitationreturnedonly = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'recordsbutduethelimitationreturnedonly');
                    $Querytook = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $translates, 'querytook');
                    $retstatus = "OK";
                    if ($reqlength == \AGCHParams::$Static_Show_All && $iTotalRecords > $totalrecordsfound) {
                        $retmsg = $Youhaverequestedtoview . " " . $iTotalRecords . " " . $recordsbutduethelimitationreturnedonly . " " . $totalrecordsfound;
                        $retstatus = "WARNING";
                        $records["customActionMessage"] = $retmsg;
                        $records["customActionStatus"] = $retstatus;
                    }
                    $time_elapsed_secs = microtime(true) - $start;
                    $retmsg = $retmsg . ' ' . $Querytook . ' ' . $time_elapsed_secs . 'sec';
                    //$records["customActionMessage"] = $retmsg;
                    //$records["customActionStatus"] = $retstatus;
                    $cpa['jsondata'] = json_encode($records);
                }
            }
        }
    }

    private static function Get_Json_Data_Action_View($rec, $key, $value, $tmpi, $mycolspan) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $assetspath = $cpa['template']['template_admin_path_with_assets_path'];
        $tmpdata = '';
        $pulsate = false;
        $datasource = $cpa[\CHCrmCParams::$keyarrDataTableAjax]['datasource'];

        if (isset($value['filter']['pulsate']) && $value['filter']['pulsate'] == true) {
            $pulsate = true;
        }
        if ($key == 'checkbox') {
            $tmpdata = '<input type="checkbox" name="id[]" value="' . $rec[$datasource['readpk']] . '">';
        } elseif ($key == 'idseq') {
            $tmpdata = $tmpi + 1;
        } elseif ($key == 'expand') {

            $tmpdata = '';
            foreach (\MyCustomHelperLng::My_get_available_languages_id_keys() as $key => $value) {

                $myexpand = '<div class="row">
                                                            <div class="col-md-8 col-xs-pull-2" style="background-repeat: no-repeat;background-position: right center;background-image: url(' . $assetspath . 'global/img/flags/' . \MyCustomHelperLng::My_get_languages_flag_from_id($key) . '); width: 60px; ">
                                                                <span class="row-details row-details-close" id="' . $rec[$datasource['readpk']] . '" lngid="' . $key . '">
                                                            </div>				
                                                        </div>';
                if ($cpa['selectedtemplate'] == 'metronic454b2b') {
                    $myexpand = '<div class="fa-item col-md-8 col-xs-pull-6" style="background-repeat: no-repeat;background-position: right center;background-image: url(' . $assetspath . 'global/img/flags/' . \MyCustomHelperLng::My_get_languages_flag_from_id($key) . '); width: 60px; ">
                                                                
                                                                    <i class="fa fa-plus-circle myrow-details myrow-details-close" mycolspan="' . $mycolspan . '" id="' . $rec[$datasource['readpk']] . '_' . $key . '">  </i>
                                                                    
                                                            </div>';
                }
                $tmpdata = $tmpdata . $myexpand;
            }
        } elseif ($key == 'expandedit') {
            $tmpdata = '';
            $readpk = isset($datasource['readpk']) ? $rec[$datasource['readpk']] : -1;
            $lngid = \MyCustomHelperLng::My_get_current_lng_id();

            $myexpand = '<div class="row">
                                                            <div class="col-md-8 col-xs-pull-2" style="background-repeat: no-repeat;background-position: right center;background-image: url(' . $assetspath . 'global/img/flags/' . \MyCustomHelperLng::My_get_languages_flag_from_id($lngid) . '); width: 60px; ">
                                                                <span class="row-details row-details-close" mycolspan="' . $mycolspan . '" id="' . $readpk . '" lngid="' . $lngid . '">
                                                            </div>				
                                                        </div>';
            if ($cpa['selectedtemplate'] == 'metronic454b2b') {
                $myexpand = '<div class="fa-item col-md-8 col-xs-pull-2" >
                                                                
                                                                    <i class="fa fa-plus-circle myrow-details myrow-details-close" mycolspan="' . $mycolspan . '" id="' . $readpk . '_' . $lngid . '"> </i>
                                                                    
                                                            </div>';
            }
            $tmpdata = $tmpdata . $myexpand;
        } elseif ($key == 'actions') {
            $tmpdata = '<div class="margin-bottom-5">';
            foreach ($value as $btnid => $arrattrs) {
                //DLS20161102
                $arrattrs['a']['attrs']['class'] = $arrattrs['a']['attrs']['class'] . ' mydatatablerowbtn';
                //$arrattrs['a']['attrs']['data-tbl'] = $datasource['writetblname'];
                //$arrattrs['a']['attrs']['data-pk'] = $datasource['writepk'];
                //DLE20161102
                // DLS20161107
                $arrattrs['a']['attrs']['data-id'] = $rec[isset($datasource['dldataid']) ? $datasource['dldataid'] : $datasource['readpk']];
                // DLE20161107
                $arrattrs['a']['attrs']['data-lng'] = \MyCustomHelperLng::My_get_current_lng_id();
                $a_attrs = DlB2bAdminGeneralHelper::Create_Attributes($arrattrs['a']['attrs']);

                $i_attrs = DlB2bAdminGeneralHelper::Create_Attributes($arrattrs['i']['attrs']);
                $tmpdata.='<a ' . $a_attrs . '>'
                        . '         <i ' . $i_attrs . '>'
                        . '         </i> '
                        . $arrattrs['a']['text']
                        . '     </a>';
            }
            $tmpdata.= '</div> ';
            /* $editurl = '/b2b/' . $cpa['lng'] . '/admin/index/#/' . $cpa['lng'] . '/--edit--mod--items--' . $rec['id'] . '--inner_tbl_record.html';
              $my_data_custom_attrs_disable = ' ';
              if ($blshowdisable === \AGCHParams::$Static_Bl_True) {
              $my_data_custom_attrs_disable = $my_data_custom_attrs_disable . $cpasettings['My_Data_Field_Attr_Action'] . '="' . $cpasettings['Action_Disable'] . '" ';
              $my_data_custom_attrs_disable = $my_data_custom_attrs_disable . $cpasettings['My_Data_Field_Attr_Mode'] . '="' . $cpasettings['Param2_Static_Translates'] . '" ';
              $my_data_custom_attrs_disable = $my_data_custom_attrs_disable . $cpasettings['My_Data_Field_Attr_Id'] . '="' . $key . '" ';
              $my_data_custom_attrs_disable = '<div class="margin-bottom-5"><button onclick="handleBootstrapConfirmation()" class="btn btn-xs default yellow" data-toggle="confirmation" data-original-title="Are you sure you want to disable this element ? " data-singleton="true" ' . $my_data_custom_attrs_disable . ' id="' . $prefixbtndelid . $key . '"><i class="fa fa-trash"></i>Disable</button></div>';
              }
              $my_data_custom_attrs_trash = ' ';
              if ($blshowtrash === \AGCHParams::$Static_Bl_True) {
              $my_data_custom_attrs_trash = $my_data_custom_attrs_trash . $cpasettings['My_Data_Field_Attr_Action'] . '="' . $cpasettings['Action_Del'] . '" ';
              $my_data_custom_attrs_trash = $my_data_custom_attrs_trash . $cpasettings['My_Data_Field_Attr_Mode'] . '="' . $cpasettings['Param2_Static_Translates'] . '" ';
              $my_data_custom_attrs_trash = $my_data_custom_attrs_trash . $cpasettings['My_Data_Field_Attr_Id'] . '="' . $key . '" ';
              $my_data_custom_attrs_trash = '<button onclick="handleBootstrapConfirmation()" class="btn btn-xs default red" data-toggle="confirmation" data-original-title="Are you sure you want to delete this element ? " data-singleton="true" ' . $my_data_custom_attrs_trash . ' id="' . $prefixbtndelid . $key . '"><i class="fa fa-trash"></i>Delete</button>';
              }
              $tmpdata = '<div class="margin-bottom-5">'
              . '<a class="btn btn-xs default green" href="' . $editurl . '"><i class="fa fa-edit"></i> Edit</a></div> '
              . $my_data_custom_attrs_disable . $my_data_custom_attrs_trash; */
        } else {
            $findme = 'bltranslated';
            $pos = strpos($key, $findme);
            if ($pos !== false) {
                $tmpdata = \AGCHParams::$Static_Bl_False;
                if (isset($rec[$key]) && $rec[$key] == \AGCHParams::$Static_Bl_True) {
                    $tmpdata = \AGCHParams::$Static_Bl_True;
                }
                if (isset($value['filter']['display_cell'])) {
                    if ($value['filter']['display_cell'] == 'colours') {
                        $colour = 'red';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'red';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'green';
                        }
                        $tmpdata = '<button class="btn btn-circle ' . $colour . '" type="button">
                                                            <i class="fa fa-check"></i>
                                                        </button>';
                    }
                }
            } elseif (isset($rec[$key])) {
                $tmpdata = $rec[$key];
                if (isset($value['filter']['display_cell'])) {
                    if ($pulsate) {
                        if (isset($value['filter']['pulsate_values'])) {
                            $pulsate = false;
                            foreach ($value['filter']['pulsate_values'] as $keypulsate => $valuepulsate) {
                                if ($tmpdata == $valuepulsate) {
                                    $pulsate = true;
                                }
                            }
                        }
                    }
                    if ($value['filter']['display_cell'] == 'colours') {
                        $colour = 'red';
                        if ($tmpdata == 0) {
                            $colour = 'red';
                        } elseif ($tmpdata == 1) {
                            $colour = 'green';
                        } elseif ($tmpdata == 2) {
                            $colour = 'yellow';
                        }
                        $tmpdata = '<button class="btn btn-circle ' . $colour . '" type="button">
                                                            <i class="fa fa-check"></i>
                                                        </button>';
                    } elseif ($value['filter']['display_cell'] == 'colours-trashed') {
                        $colour = 'green';
                        $colourtxt = 'No';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'green';
                            $colourtxt = 'No';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'red';
                            $colourtxt = 'Yes';
                        }
                        $tmpdata = '<button class="btn btn-circle ' . $colour . '" type="button">
                                                           ' . $colourtxt . '
                                                        </button>';
                    } elseif ($value['filter']['display_cell'] == 'colours-disabled') {
                        $colour = 'green';
                        $colourtxt = 'No';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'green';
                            $colourtxt = 'No';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'yellow';
                            $colourtxt = 'Yes';
                        }
                        $tmpdata = '<button class="btn btn-circle ' . $colour . '" type="button">
                                                           ' . $colourtxt . '
                                                        </button>';
                    } elseif ($value['filter']['display_cell'] == 'colours-deleted') {
                        $colour = 'green';
                        $colourtxt = 'No';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'green';
                            $colourtxt = 'No';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'red';
                            $colourtxt = 'Yes';
                        }
                        $tmpdata = '<button class="btn btn-circle ' . $colour . '" type="button">
                                                           ' . $colourtxt . '
                                                        </button>';
                    }
                }
            }
        }
        if ($pulsate) {
            $tmpdata = '<div class="pulsate-regular" style="padding:5px;">' . $tmpdata . '</div>';
        }
        return $tmpdata;
    }

    private static function Get_Json_Data_Action_Export($rec, $key, $value, $tmpi) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $assetspath = $cpa['template']['template_admin_path_with_assets_path'];
        $tmpdata = '';
        if ($key == 'checkbox') {
            $tmpdata = '';
        } elseif ($key == 'idseq') {
            $tmpdata = $tmpi + 1;
        } elseif ($key == 'expand') {
            $tmpdata = '';
        } elseif ($key == 'expandedit') {
            $tmpdata = '';
        } elseif ($key == 'actions') {
            $tmpdata = '';
        } else {
            $findme = 'bltranslated';
            $pos = strpos($key, $findme);
            if ($pos !== false) {
                $tmpdata = \AGCHParams::$Static_Bl_False;
                if (isset($rec[$key]) && $rec[$key] == \AGCHParams::$Static_Bl_True) {
                    $tmpdata = \AGCHParams::$Static_Bl_True;
                }
                if (isset($value['filter']['display_cell'])) {
                    if ($value['filter']['display_cell'] == 'colours') {
                        $colour = 'red';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'red';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'green';
                        }
                        $tmpdata = $colour;
                    }
                }
            } elseif (isset($rec[$key])) {
                $tmpdata = $rec[$key];
                if (isset($value['filter']['display_cell'])) {

                    if ($value['filter']['display_cell'] == 'colours') {
                        $colour = 'red';
                        if ($tmpdata == 0) {
                            $colour = 'red';
                        } elseif ($tmpdata == 1) {
                            $colour = 'green';
                        } elseif ($tmpdata == 2) {
                            $colour = 'yellow';
                        }
                        $tmpdata = $colour;
                    } elseif ($value['filter']['display_cell'] == 'colours-trashed') {
                        $colour = 'green';
                        $colourtxt = 'No';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'green';
                            $colourtxt = 'No';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'red';
                            $colourtxt = 'Yes';
                        }
                        $tmpdata = $colour . ' ' . $colourtxt;
                    } elseif ($value['filter']['display_cell'] == 'colours-disabled') {
                        $colour = 'green';
                        $colourtxt = 'No';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'green';
                            $colourtxt = 'No';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'yellow';
                            $colourtxt = 'Yes';
                        }
                        $tmpdata = $colour . ' ' . $colourtxt;
                    } elseif ($value['filter']['display_cell'] == 'colours-deleted') {
                        $colour = 'green';
                        $colourtxt = 'No';
                        if ($tmpdata == \AGCHParams::$Static_Bl_False) {
                            $colour = 'green';
                            $colourtxt = 'No';
                        } elseif ($tmpdata == \AGCHParams::$Static_Bl_True) {
                            $colour = 'red';
                            $colourtxt = 'Yes';
                        }
                        $tmpdata = $colour . ' ' . $colourtxt;
                    }
                }
            }
        }
        return $tmpdata;
    }

    public static function Make_keyarrDataTableAjax($keyarr = null) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $keyarr = isset($keyarr) ? $keyarr : \CHCrmCParams::$keyarrDataTableAjax;
        if (isset($cpa[$keyarr])) {
            if (!self::Get_Datatable_Html_Name($keyarr)) {
                self::Set_Datatable_Html_Name($keyarr);
            }
            $mytmparr = $cpa[$keyarr];
            $translates = $mytmparr['translates'];
            if (isset($mytmparr['datasource'])) {
                $datasource = $mytmparr['datasource'];
                $datasource['readclassname'] = \MyCustomHelperClassTools::My_Core_Get_Classname($datasource['readtblname']);
                $datasource['writeclassname'] = \MyCustomHelperClassTools::My_Core_Get_Classname($datasource['writetblname']);
                $mytmparr['datasource'] = $datasource;
            }
            foreach ($mytmparr['cols'] as $paramname => $paramval) {
                if (isset($paramval['filter']['values'])) {
                    $values = $paramval['filter']['values'];
                    if (isset($values['datasource'])) {
                        $datasource = $values['datasource'];
                        if (isset($datasource['tblname'])) {
                            $paramval['filter']['values'] = self::Get_List($datasource);
                            $mytmparr['cols'][$paramname] = $paramval;
                        }

                        /* $htmllist = '<option value="-1" >All...</option>';
                          foreach ($categoriesarr as $key => $value) {

                          $htmllist = $htmllist . '<option value="' . $value[$datasource['keyval']] . '" >' . $value[$datasource['showval']] . '</option>';
                          } */
                    }
                }
            }
            $cpa[$keyarr] = $mytmparr;
            self::Get_Json_Data($keyarr);
        }
    }

    private static function Get_New_Record_Div($keyarr = null) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $keyarr = isset($keyarr) ? $keyarr : \CHCrmCParams::$keyarrDataTableAjax;
        $savenewrecordurl = '';
        if (isset($cpa[$keyarr])) {
            $mytmparr = $cpa[$keyarr];
            if (isset($mytmparr['datasource'])) {
                $datasource = $mytmparr['datasource'];
                $savenewrecordurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM2, array('helperpage' => $cpasettings['Helper_Page_Posts'], 'param1' => 'newrecord', 'param2' => $datasource['writetblname']));
            }
        }



        $portlet_id = 'portlet-new-record';

        $html = ' 
        
        <div id="' . $portlet_id . '" class="col-md-12 col-sm-12" style="z-index: 500;float:right;display:none;">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="tools">
                        <input type="hidden" id="save-new-record-url" name="save-new-record-url" class="save-new-record-url" value="' . $savenewrecordurl . '"/>
                        <button type="button" class="save-new-record-portlet btn btn-circle blue">
                            <i class="fa fa-save"></i>
                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Insert1') . '
                        </button>
                        <button type="button" class="close-new-record-portlet btn btn-circle red">
                            <i class="icon-close"></i>
                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Close1') . '
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="#" id="form_new_record" class="form-horizontal">
                        <div class="table-responsive">
                    
                        ' . self::Get_Table_Div() . '
                        
                        <div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div> 

';
        return $html;
    }

    public static function Get_Datatable_Html_Name($keyarr = null) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $keyarr = isset($keyarr) ? $keyarr : \CHCrmCParams::$keyarrDataTableAjax;
        $pluginparams = $cpa[$keyarr];
        $datatablehtmlname = isset($pluginparams['datatable']['htmlname']) ? $pluginparams['datatable']['htmlname'] : null;
        return $datatablehtmlname;
    }

    public static function Set_Datatable_Html_Name($keyarr = null, $htmlname = null, $prefix = '') {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $keyarr = isset($keyarr) ? $keyarr : \CHCrmCParams::$keyarrDataTableAjax;
        if (isset($cpa[$keyarr])) {
            if (!isset($htmlname)) {
                if ($keyarr == \CHCrmCParams::$keyarrDataTableAjax) {
                    $htmlname = self::$Datatable_Html_Name_Main;
                } elseif ($keyarr == \CHCrmCParams::$keyarrDataTableAjax2) {
                    $htmlname = self::$Datatable_Html_Name_Child;
                }
            }
            if (isset($htmlname)) {
                $htmlname.=$prefix;
                $cpa[$keyarr]['datatable']['htmlname'] = $htmlname;
            }
        } else {
            $htmlname = null;
        }
        return $htmlname;
    }

    public static function Get_Page_DataTableAjax($keyarr = null) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $keyarr = isset($keyarr) ? $keyarr : \CHCrmCParams::$keyarrDataTableAjax;
        $pluginparams = $cpa[$keyarr];
        $datatablehtmlname = self::Get_Datatable_Html_Name($keyarr);
        if (!isset($datatablehtmlname)) {
            $datatablehtmlname = self::Set_Datatable_Html_Name($keyarr);
        }
        $datatableportletclass = isset($pluginparams['portlet_class']) ? $pluginparams['portlet_class'] : 'portlet light portlet-fit portlet-datatable bordered';
        $tabletitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $pluginparams, 'table_title');

        $mytmparr = $cpa[\CHCrmCParams::$keyarrDataTableAjax];
        $newrecord = isset($mytmparr['newrecord']) ? true : '';
        // DLS20161031
//        if ($newrecord != '') {
//            $newrecord = '<a id="datatableajax-add-record" name="datatableajax-add-record" class="btn btn-default btn-sm btn-circle" title="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'datatableajaxaddrecord') . '">
//                        <i class="fa fa-calendar-o">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'datatableajaxaddrecord') . '</i>
//                    </a>';
//        }
        // DLS20161107
        $dlbutton_new = $cpa[$keyarr]['Button_New'];
        if (isset($dlbutton_new['blshow']) && $dlbutton_new['blshow'] == 1) {
            $dlextraattrs = DlB2bAdminGeneralHelper::Create_Attributes_Advanced($dlbutton_new['attrs']);
            $transkeynewrecordtitle = isset($dlbutton_new['title']) ? $dlbutton_new['title'] : 'datatableajaxaddrecord';
            $newrecord = '<a ' . $dlextraattrs . ' data-table-id="' . $datatablehtmlname . '" data-mykatastima="' . \CHCrmCParams::My_get_mykatastima() . '" data-newrecord="' . $dlpagename . '" name="datatableajax-add-record" class="btn blue-madison btn-sm datatableajax-add-record" title="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, $transkeynewrecordtitle) . '">
                        <i class="fa fa-plus">&nbsp;&nbsp;' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, $transkeynewrecordtitle) . '</i>
                    </a>';
        }
        // DLE20161107
        // DLE20161031


        $ret = '<div id="bootstrap_alert_common"> </div><div class="row">' . self::Get_New_Record_Div() . '</div><div class="row">
    <div class="col-md-12">
        <!--        <div class="note note-danger">
                    <p>
                        NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
                    </p>
                </div>-->
        <!-- Begin: life time stats -->
        <div class="' . $datatableportletclass . '">
            <div class="portlet-title">
                <div class="caption">
                    <script>
                        /*function bootstrap_confirmation() {
                         //alert("yes");
                         $(\'[data-toggle="confirmation"]\').confirmation();
                         //$(\'[data-toggle="confirmation-singleton"]\').confirmation({
                         //    singleton: true
                         //});
                         //$(\'[data-toggle="confirmation-popout"]\').confirmation({
                         //    popout: true
                         //});
                         }*/
                    </script>
                    <div id="bootstrap_alert">
                    </div>
                    <i class="fa fa-table"></i>' . $tabletitle . '
                </div>
                
                <!--<div class="tools">
                    <a class="collapse" data-original-title="" title=""></a>
                </div>-->
                <div class="actions" style="padding-right:5px;">
                    ' . $newrecord . '
                </div>
                
                                  



                    ' . self::Get_Actions($keyarr) . '
                <!--<div class="inputs" style="padding-right:5px;">
                    <div class="portlet-input input-inline input-medium">
                        <div class="input-group">
                            <input class="form-control input-circle-left" type="text" placeholder="αναζήτηση...">
                            <span class="input-group-btn">
                                <button class="btn btn-circle-right btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>-->
                
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <div class="table-actions-wrapper">
                        <span>
                        </span>
                        <select class="table-group-action-input form-control input-inline input-small input-sm">
                            <option value="">Select...</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Cancel">Hold</option>
                            <option value="Cancel">On Hold</option>
                            <option value="Close">Close</option>
                        </select>
                        <button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
                    </div>
                    <table style="width:100%;" class="table table-striped table-bordered table-hover dataTable no-footer" id="' . $datatablehtmlname . '">
                        <thead>
                            ' . self::Get_Table_Cols($keyarr) . '
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End: life time stats -->
    </div>
</div>';
        return $ret;
    }

    private static function Get_Actions($keyarr) {
        $ret = ' 
<div class="actions" style="padding-right:5px;">'
                . self::Get_Actions_Button_New($keyarr)
                . self::Get_Actions_Tools($keyarr) . ' 
      
</div>';
        return $ret;
    }

    private static function Get_Actions_Button_New($keyarr) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $ret = '';
        if ($cpa[$keyarr]['Button_New']['blshow'] === \AGCHParams::$Static_Bl_True) {
            $url_new_record = '/b2b/' . $cpa['lng'] . '/admin/dynhelperpage/';
            $url_new_record = $url_new_record . $cpa[$keyarr]['Button_New']['url_new_record']['helperpage'] . '/'; //modal operations
            $url_new_record = $url_new_record . $cpa[$keyarr]['Button_New']['url_new_record']['param1'] . '/'; //action add del etc
            $url_new_record = $url_new_record . $cpa[$keyarr]['Button_New']['url_new_record']['param2'] . '/'; //static translates
            $url_new_record = $url_new_record . $cpa[$keyarr]['Button_New']['url_new_record']['param3'] . '/'; //new rec identifier
            $ret = '
    <a href="' . $url_new_record . '" 
        data-target="#ajax-small-stack1" 
        data-toggle="modal"
        class="btn default yellow-stripe">
        <i class="fa fa-plus"></i>
        <span class="hidden-480">
            ' . $cpa[$keyarr]['Button_New']['title'] . '
        </span>
    </a> ';
        }
        return $ret;
    }

    private static function Get_Actions_Tools($keyarr) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $ret = '';
        if ($cpa[$keyarr]['Actions_Tools']['blshow'] == \AGCHParams::$Static_Bl_True) {
            // DLS20161031 to class tou btn tools kai to class tou fa mesa sto btn
            $ret = '<div class="btn-group">
    <a class="btn blue-madison btn-sm" href="#" data-toggle="dropdown">
        <i class="fa fa-wrench"></i>
        <span class="hidden-480">&nbsp;&nbsp;Tools </span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu pull-right">                            
        <li>
            <a href="#" class="export-to-csv">
                Export to CSV </a>
        </li>
        <li>
            <a href="#" class="export-to-excel">
                Export to Excel </a>
        </li>
        <li>
            <a href="#" class="export-to-open-office-calc">
                Export to Openoffice Calc </a>
        </li>
        <li>
            <a href="#" class="export-to-pdf">
                Export to PDF </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="#">
                Print Tables </a>
        </li>
    </ul>
</div>';
        }
        return $ret;
    }

    public static function Get_myaoColumns($keyarr) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $ret = '';
        $myaoColumns = '[';
        if ($cpa[$keyarr]['Table_Cols']['blshow'] == \AGCHParams::$Static_Bl_True) {

            foreach ($cpa[$keyarr]['cols'] as $key => $value) {
                $fieldvisible = isset($value['visible']) ? $value['visible'] : '1';
                /*
                 * PPS20190929
                 */
                $textvisible = 'true';
                if ($fieldvisible == 0) {
                    $textvisible = 'false';
                }
                /*
                 * PPE20190929
                 */
                $cellwidth = '';
                $celltitle = '';
                $cellclass = 'left';
                $cellsortable = 'true';
                if ($key === 'checkbox' && $value == \AGCHParams::$Static_Bl_True) {
                    $cellwidth = '2%';
                    $celltitle = '<input type=\"checkbox\" class=\"group-checkable\">';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                } elseif ($key === 'idseq' && $value == \AGCHParams::$Static_Bl_True) {
                    $cellwidth = '1%';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                } elseif ($key === 'expand' && $value == \AGCHParams::$Static_Bl_True) {
                    $cellwidth = '1%';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                } elseif ($key === 'expandedit' && $value == \AGCHParams::$Static_Bl_True) {
                    $cellwidth = '1%';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                    $cellsortable = 'false';
                } elseif ($key === 'actions') {

                    $cellwidth = '1%';
                    $celltitle = '#';
                    $cellsortable = 'false';
                } else {
                    $celltitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $value['heading'], 'title', 'No title');
                    $cellwidth = (isset($value['heading']['width']) ? $value['heading']['width'] : '1%');
                    $cellsortable = (isset($value['heading']['sortable']) ? $value['heading']['sortable'] : $cellsortable);
                    if (isset($value['cells']) && isset($value['cells']['class'])) {
                        $cellclass = $value['cells']['class'];
                    }
                }
                /*
                 * PPS20190929
                 */
                //if ($fieldvisible == 1) {
                /*
                 * PPE20190929
                 */
                $myaoColumns = $myaoColumns . '{ "visible": ' . $textvisible . ',"bSortable": ' . $cellsortable . ',"sTitle": "' . $celltitle . '", "sClass": "' . $cellclass . '","sWidth": "' . $cellwidth . '" },';
                /*
                 * PPS20190929
                 */
                //}
                /*
                 * PPE20190929
                 */
            }
        }
        $myaoColumns = substr($myaoColumns, 0, -1);
        $myaoColumns = $myaoColumns . ']';
        $cpa[$keyarr]['myaoColumns'] = $myaoColumns;
        $ret = $cpa[$keyarr]['myaoColumns'];
        return $ret;
    }

    private static function Get_Table_Cols($keyarr) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $ret = '';
        self::Get_myaoColumns($keyarr);
        if ($cpa[$keyarr]['Table_Cols']['blshow'] == \AGCHParams::$Static_Bl_True) {
            $trheading = '<tr role="row" class="heading">';
            $trfilter = '<tr role="row" class="filter">';
            foreach ($cpa[$keyarr]['cols'] as $key => $value) {
                $fieldvisible = isset($value['visible']) ? $value['visible'] : '1';
                /*
                 * PPS20160929
                 */
                //if ($fieldvisible) {
                /*
                 * PPE20160929
                 */
                $celltitle = '';
                $cellclass = 'left';
                if ($key === 'checkbox' && $value == \AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="2%"><input type="checkbox" class="group-checkable"></th>';
                    $trfilter = $trfilter . '<td></td>';
                    $celltitle = '<input type=\"checkbox\" class=\"group-checkable\">';
                    $cellclass = 'hcenter';
                } elseif ($key === 'idseq' && $value == \AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="1%">#</th>';
                    $trfilter = $trfilter . '<td></td>';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                } elseif ($key === 'expand' && $value == \AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="1%">#</th>';
                    $trfilter = $trfilter . '<td></td>';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                } elseif ($key === 'expandedit' && $value == \AGCHParams::$Static_Bl_True) {
                    $trheading = $trheading . '<th width="1%">#</th>';
                    $trfilter = $trfilter . '<td></td>';
                    $celltitle = '#';
                    $cellclass = 'hcenter';
                } elseif ($key === 'actions') {
                    $trheading = $trheading . '<th width="1%">#</th>';
                    $trfilter = $trfilter . '<td></td>';
                    /* $trfilter = $trfilter . '
                      <td>
                      <div class="margin-bottom-5">
                      <button class="btn btn-sm yellow filter-submit margin-bottom">
                      <i class="fa fa-search"></i>
                      Search
                      </button>
                      </div>
                      <button class="btn btn-sm red filter-cancel">
                      <i class="fa fa-times"></i>
                      Reset
                      </button>
                      </td>'; */
                    $celltitle = '#';
                } else {
                    $celltitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $value['heading'], 'title', 'No title');
                    $trheading = $trheading . '<th width="' . (isset($value['heading']['width']) ? $value['heading']['width'] : '1%') . '">' . $celltitle . '</th>';
                    if (isset($value['cells']) && isset($value['cells']['class'])) {
                        $cellclass = $value['cells']['class'];
                    }
                    $tmpcontent = (isset($value['filter']['content']) ? $value['filter']['content'] : '');
                    $trans_content = isset($value['filter']['trans_content']) ? $value['filter']['trans_content'] : null;
                    $tmpcontent.=PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, $trans_content);

                    if (isset($value['filter']['type'])) {
                        $tmptype = $value['filter']['type'];
                        $searchkeyname = 'search-' . $key;
                        if ($tmptype === 'input') {
                            $myfiltervalue = '';
                            if (isset($value['filter']['value'])) {
                                $myfiltervalue = $value['filter']['value'];
                            }
                            $tmpcontent = '<input type="text" class="form-control form-filter input-sm" name="' . $searchkeyname . '" id="' . $searchkeyname . '" value="' . $myfiltervalue . '">';
                        } elseif ($tmptype === 'select') {
                            $tmpcontent = '<select class="form-control form-filter input-sm" name="' . $searchkeyname . '" id="' . $searchkeyname . '">' . parent::gethtmlselectlist(null, $value['filter']['values']) . '</select>';
                            /* foreach ($value['filter']['values'] as $key1 => $value1) {
                              $tmpcontent = $tmpcontent . '<option value="' . $key1 . '">' . $value1 . '</option>';
                              }
                              $tmpcontent = $tmpcontent . '</select>'; */
                        }
                    }
                    /*
                     * PPS20160929
                     */
                    /* if ($fieldvisible == 1) { */
                    /*
                     * PPE20160929
                     */
                    $trfilter = $trfilter . '<td class="' . $cellclass . '">' . $tmpcontent . '</td>';
                    /*
                     * PPE20160929
                     */

                    /* } */
                    /*
                     * PPE20160929
                     */
                }
                //}
            }
            $trheading = $trheading . '</tr>';
            $trfilter = $trfilter . '</tr>';
            $ret = $trheading . $trfilter;
        }
        return $ret;
    }

    private static function BE_getDataTableData($keyarr, $classname, $start, $length, $search = array(), $order = array('id' => 'asc')) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $blgensrch = false;
        $gensrchtxt = '1=2';
        $gensrchtxtcnt = $gensrchtxt;
        $arrformat = array();
        $mytmparr = $cpa[$keyarr];
        $cols = $mytmparr['cols'];
        $group = array();
        foreach ($cols as $key => $value) {
            if (isset($value['format'])) {
                $arrformat[$key] = $value['format'];
            }
            if (isset($value['group'])) {
                $group[$key]['type'] = $value['group'];
            }
        }
        $ret = array();
        $ret['totalitems'] = 0;
        $ret['totalpages'] = 1;
        $ret['items'] = false;
        $length = $length <= 0 ? 1000 : $length;
        if (class_exists($classname)) {
            $wheretxt = '1=1';
            $wheretxtcnt = '1=1';
            self::Get_Default_Filter_For_Sql($search, $bindarr, $wheretxt1, $bindarrcnt, $wheretxtcnt1);

            if ($search) {
                if (isset($search['blgensrch'])) {
                    $blgensrch = true;
                    unset($search['blgensrch']);
                }

                foreach ($search as $key => $value) {
                    //$search[$searchkey] = array('value' => $value, 'searchmethod' => $searchmethod);


                    $newuniqkey = $key . \MyCustomHelperDateTools::getMicrotimeUniqueid();
                    if ($blgensrch && !\MyCustomHelperStringTools::startsWith($key, 'fk')) {
                        $gensrchtxt.=' or ';
                        //$gensrchtxt.=' lower(gensrch) like \'%' . $cpa['objcontroller']->filter->sanitize($value['value'], 'alpha') . '%\' ';
                        $gensrchtxt.=' lower(gensrch) like (lower(:' . $newuniqkey . ':) ) ';

                        $gensrchtxtcnt.=' or ';
                        $gensrchtxtcnt.=' lower(gensrch) like (lower (:' . $newuniqkey . ') ) ';
                        $bindarr[$newuniqkey] = '%' . $value['value'] . '%';
                        $bindarrcnt[$newuniqkey] = '%' . $value['value'] . '%';
                        /*
                          PPS{20161030}error null values on grrek sanitize
                         */

                        /*
                          PPE{20161030}
                         */


//                        preg_replace('[^[:alpha:]0-9]', '', $value['value'])
//                                preg_replace('/\B*\s*/', '', 'καλημ 123 56789 -=υηη"')
//                                preg_match('/[[:alpha:]0-9]/', 'καλημ 123 56789 -=υηη"', $match)
                    }
                    $operator = isset($value['operator']) ? $value['operator'] : ' = ';
                    $bindarr[$key] = $value['value'];
                    $bindarrcnt[$key] = $value['value'];
                    $lowerstart = '';
                    $lowerend = '';
                    $castkey = $key;
                    if (mb_strtoupper($value['searchmethod']) === 'LIKE' && $operator != '>' && $operator != '<' && $operator != '<>') {
                        $lowerstart = ' lower( ';
                        $lowerend = ') ';
                        $operator = " Like ";
                        $bindarr[$key] = '%' . mb_strtolower($value['value']) . '%';
                        $bindarrcnt[$key] = $bindarr[$key];
                        $castkey = ' cast (' . $key . ' as text) ';
                    }
                    if (!\MyCustomHelperStringTools::startsWith($key, 'fk')) {
                        $wheretxt.= ' AND ' . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . ':' . $lowerend;
                        $wheretxtcnt.= ' AND ' . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . $lowerend;
                    } else {
                        $wheretxt1.= ' AND ' . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . ':' . $lowerend;
                        $wheretxtcnt1.= ' AND ' . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . $lowerend;
                    }
                }
                $wheretxt = '(' . $wheretxt . ')';
                $wheretxtcnt = '(' . $wheretxtcnt . ')';
                //$gensrchtxt = mb_strtolower($gensrchtxt);
                if ($blgensrch && $gensrchtxt != '1=2') {
                    $wheretxt.= ' or (' . $gensrchtxt . ')';
                    $wheretxtcnt.= ' or (' . $gensrchtxtcnt . ')';
                }
                $wheretxt = '(' . $wheretxt . ')';
                $wheretxtcnt = '(' . $wheretxtcnt . ')';
            }
            $wheretxt = $wheretxt1 . ' and ' . $wheretxt;
            $wheretxtcnt = $wheretxtcnt1 . ' and ' . $wheretxtcnt;
            $ordertxt = '';
            if ($order) {
                foreach ($order as $key => $value) {
                    if ($ordertxt !== '') {
                        $ordertxt = $ordertxt . ', ';
                    }
                    $ordertxt = $key . ' ' . $value;
                }
            }
            $obj = new $classname;
            $con = $obj->getReadConnection();
            $sub_rows = $con->fetchAll("SELECT count(id) totalrows FROM  " . $classname::CONST_SCHEMA . "." . $classname::CONST_TABLE . $wheretxtcnt, \Phalcon\Db::FETCH_ASSOC, $bindarrcnt);
            $ret['totalitems'] = $sub_rows[0]['totalrows'];

            $sums = "";
            $i = 0;
            foreach ($group as $key => $value) {
                if ($value['type'] == 'sum') {
                    if ($i > 0) {
                        $sums.=",";
                    }
                    $sums.="sum(" . $key . ") as " . $key;
                    $i++;
                }
            }
            if ($sums != "") {
                $sub_rows = $con->fetchAll("SELECT " . $sums . " FROM  " . $classname::CONST_SCHEMA . "." . $classname::CONST_TABLE . $wheretxtcnt, \Phalcon\Db::FETCH_ASSOC, $bindarrcnt);
                foreach ($sub_rows[0] as $key => $value) {
                    $group[$key]['val'] = $value;
                }
            }

            $ret['group'] = $group;

            if ($ret['totalitems'] > $length && $length > 0) {
                $ret['totalpages'] = $ret['totalitems'] / $length;
                if (is_float($ret['totalpages'])) {
                    $ret['totalpages'] = intval($ret['totalpages']) + 1;
                }
            }
            $ret['items'] = $obj->find(
                            array(
                                "offset" => $start,
                                "limit" => $length,
                                "order" => $ordertxt,
                                "conditions" => $wheretxt,
                                "bind" => $bindarr,
                                'hydration' => \Phalcon\Mvc\Model\Resultset::HYDRATE_ARRAYS
                    ))->toArray();
            foreach ($ret['items'] as $key => $value) {
                foreach ($arrformat as $key1 => $value1) {
                    if (isset($value[$key1])) {
                        if ($value1 == 'date') {

                            $ret['items'][$key][$key1] = \MyCustomHelperDateTools::getDateDayMonthYear($value[$key1]);
                        } elseif ($value1 == 'money') {
                            $ret['items'][$key][$key1] = \MyCustomHelperNumberTools::getNumberMoney($value[$key1], true);
                        } elseif ($value1 == 'int') {
                            $ret['items'][$key][$key1] = \MyCustomHelperNumberTools::getNumberInt($value[$key1]);
                        } elseif ($value1 == 'float') {
                            $ret['items'][$key][$key1] = \MyCustomHelperNumberTools::getNumberFloat($value[$key1]);
                        }
                    } else {
                        $ret['items'][$key][$key1] = '';
                    }
                }
            }
        } else {
            \MyCustomHelperErrorLog::My_error_log('Not found ' . $classname);
        }

        return $ret;
        /* $paginator = new \Phalcon\Paginator\Adapter\Model(
          array(
          "data" => self::find(
          array(
          "order" => $order,
          'hydration' => \Phalcon\Mvc\Model\Resultset::HYDRATE_ARRAYS
          )),
          "limit" => $length,
          "page" => 0
          )
          );
          $tmp = $paginator->getPaginate();
          $ret['totalitems'] = $tmp->total_items;
          $ret['totalpages'] = $tmp->total_pages;
          $ret['items'] = $tmp->items;
          unset($tmp);

          return $ret; */
    }

    private static function BE_getSqlCopyTableData($keyarr, $classname, $search = array(), $order = array('id' => 'asc')) {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $arrformat = array();
        $mytmparr = $cpa[$keyarr];
        $exportselect = ' SELECT ';
        $cols = $mytmparr['cols'];
        $i = 0;
        foreach ($cols as $key => $value) {
            if ($key != 'expandedit' && $key != 'idseq' && $key != 'actions') {
                if ($i > 0) {
                    $exportselect.= ', ';
                }
                $exportselect.=$key . ' ';
                $i++;
            }
        }
        $group = array();
        foreach ($cols as $key => $value) {
            if (isset($value['format'])) {
                $arrformat[$key] = $value['format'];
            }
            if (isset($value['group'])) {
                $group[$key]['type'] = $value['group'];
            }
        }
        $ret = array();
        $ret['totalitems'] = 0;
        $ret['totalpages'] = 1;
        $ret['items'] = false;
        if (class_exists($classname)) {
            $wheretxt = '';
            $wheretxtcnt = '';
            $bindarr = array();
            $bindarrcnt = array();
            // "name" => Column::BIND_PARAM_STR,
            // "year" => Column::BIND_PARAM_INT
//);
            if ($search) {
                foreach ($search as $key => $value) {
                    //$search[$searchkey] = array('value' => $value, 'searchmethod' => $searchmethod);
                    if ($wheretxt !== '') {
                        $wheretxt = $wheretxt . ' AND ';
                        $wheretxtcnt = $wheretxtcnt . ' AND ';
                    } else {
                        $wheretxtcnt = ' Where ';
                    }

                    $operator = ' = ';
                    $bindarr[$key] = $value['value'];
                    $bindarrcnt[$key] = $value['value'];
                    $lowerstart = '';
                    $lowerend = '';
                    $castkey = $key;
                    if (mb_strtoupper($value['searchmethod']) === 'LIKE') {
                        $lowerstart = ' lower( ';
                        $lowerend = ') ';
                        $operator = " Like ";
                        $value['value'] = $cpa['objcontroller']->filter->sanitize($value['value'], 'alphanum');
                        $bindarr[$key] = '%' . $value['value'] . '%';
                        $bindarrcnt[$key] = $bindarr[$key];
                    }
                    $castkey = ' cast (' . $key . ' as text) ';
                    if ($key == 'fklng') {
                        $wheretxt = $wheretxt . ' ( ';
                        $wheretxtcnt = $wheretxtcnt . ' ( ';
                    }
                    $wheretxt = $wheretxt . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . ':' . $lowerend;
                    //$wheretxtcnt = $wheretxtcnt . $lowerstart . $castkey . $lowerend . $operator . $lowerstart . ':' . $key . $lowerend;
                    $wheretxtcnt = $wheretxtcnt . $lowerstart . $castkey . $lowerend . $operator . '\'' . $lowerstart . $value['value'] . $lowerend . '\'';
                    if ($key == 'fklng') {
                        $wheretxt = $wheretxt . ' OR fklng=' . \MyCustomHelperLng::$Static_Lng_All_Id . ' ) ';
                        $wheretxtcnt = $wheretxtcnt . ' OR fklng=' . \MyCustomHelperLng::$Static_Lng_All_Id . ' ) ';
                    }
                }
            }
            $ordertxt = '';
            if ($order) {
                foreach ($order as $key => $value) {
                    if ($ordertxt !== '') {
                        $ordertxt = $ordertxt . ', ';
                    } else {
                        $ordertxt = ' order by ';
                    }
                    $ordertxt.= $key . ' ' . $value;
                }
            }
            $obj = new $classname;
            $con = $obj->getSuperConnection();
            //$sql = "SELECT count(id) totalrows FROM  " . $classname::CONST_SCHEMA . "." . $classname::CONST_TABLE . $wheretxtcnt;
            //$sub_rows = $con->fetchAll($sql, \Phalcon\Db::FETCH_ASSOC, $bindarrcnt);
            $exportselect = $exportselect . " FROM  " . $classname::CONST_SCHEMA . "." . $classname::CONST_TABLE . $wheretxtcnt . $ordertxt;
            $sql = ' COPY (' . $exportselect . ') TO \'/var/lib/pgsql/aa.csv\' DELIMITER \'|\' CSV HEADER';

            $sub_rows = $con->fetchAll($sql, \Phalcon\Db::FETCH_ASSOC);
        } else {
            \MyCustomHelperErrorLog::My_error_log('Not found ' . $classname);
        }

        return $ret;
    }

    public static function Get_Js_Function_MyRunForm($extrajscode = '') {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $keyarr = \CHCrmCParams::$keyarrDataTableAjax;
        $ret = 'var MyRunForm = function () {
';
        //extrasearch, col, sort, pagelength, lengthmenukeys, lengthmenuvalues
        if (isset($cpa[\CHCrmCParams::$keyarrDataTableAjax])) {
            $datatablehtmlname = self::Get_Datatable_Html_Name($keyarr);
            if (!isset($datatablehtmlname)) {
                $datatablehtmlname = self::Set_Datatable_Html_Name($keyarr);
            }
            $mainurl_for_data = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $cpasettings['Helper_Page_Data_Table_Ajax_Page'], 'param1' => $cpa['param1']));
            $mainurl_for_data_details = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM2, array('helperpage' => $cpasettings['Helper_Page_Data_Table_Ajax_Page'], 'param1' => $cpa['param1'] . '_details', 'param2' => $cpasettings['Action_View']));
            $extrasearch = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['extrasearch']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['extrasearch'] : '';
            $col = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['col']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['col'] : '3';
            $sort = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['sort']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['sort'] : 'asc';
            $pagelength = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['pagelength']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['pagelength'] : '20';
            $lengthmenukeys = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['lengthmenukeys']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['lengthmenukeys'] : '10,20,50,100,150,250,500,-1';
            $lengthmenuvalues = isset($cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['lengthmenuvalues']) ? $cpa[\CHCrmCParams::$keyarrDataTableAjax]['async_req_data_param']['lengthmenuvalues'] : '10,20,50,100,150,250,500,"All"';
            $ret.=' 
        TableAjax.init("' . $datatablehtmlname . '", myaoColumns, "' . $mainurl_for_data . '", "' . $mainurl_for_data_details . '", "' . $extrasearch . '", "' . $col . '", "' . $sort . '", "' . $pagelength . '", "' . $lengthmenukeys . '", \'' . $lengthmenuvalues . '\');';
        }
        $ret.=' 
        UIGeneral.init();
        ComponentsPickers.init();
        ' . $extrajscode . '
    };';
        return $ret;
    }

    private static function Get_Table_Div() {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $data = '';
        $mytmparr = $cpa[\CHCrmCParams::$keyarrDataTableAjax];
        $tbl = isset($mytmparr['newrecord']) ? $mytmparr['newrecord']['tbl'] : null;
        if (isset($tbl)) {
            $tabletype = isset($tbl['tabletype']) ? $tbl['tabletype'] : 'table';
            if ($tabletype == 'table') {
                $data = '<table class="' . $tbl['class'] . ' tblnewrecord">';
                $data.= '   <tbody>';
            } elseif ($tabletype == 'div') {
                $data = '<div class="row">';
            }
            $hidden = isset($tbl['hidden']) ? $tbl['hidden'] : array();
            foreach ($hidden as $key => $value) {
                $identityclass = self::Get_Identity_Class_New_Record($key);
                $data = '<input class="' . $identityclass . '" type="hidden" value="' . $value . '" name="' . $key . '" id="' . $key . '" />' . $data;
            }
            $rows = self::Get_Tbl_Rows($tbl);
            foreach ($rows as $key3 => $rowid) {
                $row = $tbl[$rowid];

                $data.=self::Make_Cols($mytmparr, $row, $tbl);
            }
            if ($tabletype == 'table') {
                $data.= '   </tbody>';
                $data.= '</table>';
            } elseif ($tabletype == 'div') {
                $data.= '</div>';
            }
        }

        return $data;
    }

    private static function Make_Cols(&$mytmparr, &$row, &$tbl) {
        $tabletype = isset($tbl['tabletype']) ? $tbl['tabletype'] : 'table';
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
            $data.=self::Make_Col($mytmparr, $col, $row, $tbl);
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

    private static function Make_Col(&$mytmparr, &$col, &$row, &$tbl) {
        $datasource = $mytmparr['datasource'];
        $writetblname = $datasource['writetblname'];
        $elementtype = isset($col['type']) ? $col['type'] : '';
        $htmlfieldname = '';
        if (isset($col['html'], $col['html']['fieldname'])) {
            $htmlfieldname = $col['html']['fieldname'];
        }
        $identityclass = self::Get_Identity_Class_New_Record($htmlfieldname);
        $elementname = 'divtd' . \MyCustomHelperClassTools::getOriginalField($writetblname, $htmlfieldname);
        $coltype = isset($col['coltype']) ? $col['coltype'] : 'td';
        $readonly = isset($col['notinitreadonly']) ? $col['notinitreadonly'] : ' readonly ';
        $disabled = isset($col['notinitreadonly']) ? $col['notinitreadonly'] : ' disabled="disabled" ';
        $colspan2 = isset($col['colspan']) ? ' colspan="' . $col['colspan'] . '" ' : ' ';

        $class = isset($col['class']) ? ' ' . $col['class'] . ' ' : '';
        $class.=' ' . $elementtype;
        $class = ' class="' . $class . ' ' . $elementname . '"';
        $width = isset($col['width']) ? ' width="' . $col['width'] . '" ' : '';


        $data = '   <' . $coltype . $width . $class . ' name="' . $elementname . '" id="' . $elementname . '">';
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
                $tmpdata = '<input type="text"  name="' . \MyCustomHelperClassTools::getOriginalField($writetblname, $htmlfieldname) . '" id="' . \MyCustomHelperClassTools::getOriginalField($writetblname, $htmlfieldname) . '" class="' . $col['html']['class'] . $identityclass . '" value="' . $tmpdata . '" ' . $readonly . '>';
            } elseif ($elementtype === 'content_select_list') {
                $lngid = \MyCustomHelperLng::My_get_current_lng_id();
                $datasourcesl = $col['datasource'];
                $datasourcesl['selectedkeyval'] = null;
                if (isset($item)) {
                    $datasourcesl['selectedkeyval'] = $item[$col['field']];
                }

                $arrparams = isset($datasourcesl['params']) ? $datasourcesl['params'] : null;

                $list = self::getHtmlSelectList($datasourcesl);


//$tmpclassname = \MyCustomHelperClassTools::My_Core_Get_Classname($col['datasource']['tblname']);
//$list = $tmpclassname::getHtmlSelectList(array(
//            'fklng' => $lngid,
//            'selectedkeyval' => $item[$col['field']]
//               )
//);


                $tmpdata = '<select class="' . $col['html']['class'] . $identityclass . '" ' . $disabled . ' name="' . $htmlfieldname . '" id="' . $htmlfieldname . '">' . $list . '</select>';
            } elseif ($elementtype === 'content_input_switch') {
                if ($tmpdata == $col['switch']['checkedon']) {
                    $tmpdata = ' checked ';
                } else {
                    $tmpdata = ' ';
                }
                $dataontext = isset($col['trans_dataontext']) ? PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $col, 'dataontext') : PpB2bAdminVftranslate::getKeyvalueFromKeyname('YES1');
                $dataofftext = isset($col['trans_dataofftext']) ? PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $col, 'dataofftext') : PpB2bAdminVftranslate::getKeyvalueFromKeyname('NO1');
                $tmpdata = '<div class="input-group col-md-12">
                                                <input name="' . $htmlfieldname . '" id="' . $htmlfieldname . '" type="checkbox" class="make-switch customswitch ' . $identityclass . '" ' . $tmpdata . ' data-on-text="' . $dataontext . '" data-off-text="' . $dataofftext . '" data-on-color="' . $col['switch']['data-on-color'] . '" data-off-color="' . $col['switch']['data-off-color'] . '" disabled="disabled">
                                            </div> ';
            } elseif ($elementtype === 'content_input_date_time') {

                $tmpdata = '<div class="input-group date form_datetime" data-date="' . $tmpdata . '">
                                                                    <input name="' . $htmlfieldname . '" id="' . $htmlfieldname . '" type="text" size="16" ' . $readonly . ' class="form-control  ' . $identityclass . '" value="' . $tmpdata . '" >
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
                                                                        <button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
                                                                    </span>
                                                                </div>';
            } elseif ($elementtype === 'content_input_date') {

                $tmpdata = '<div class="input-group date form_date" data-date="' . $tmpdata . '">
                                                                    <input name="' . $htmlfieldname . '" id="' . $htmlfieldname . '" type="text" size="16" ' . $readonly . ' class="form-control  ' . $identityclass . '" value="' . $tmpdata . '" >
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

    public static function Get_Identity_Class_New_Record($htmlcolname, $bladddot = false) {
        $identityclass = ' myfield-newrecord-' . $htmlcolname . ' ';
        if ($bladddot) {
            $identityclass = '.myfield-newrecord-' . $htmlcolname;
        }
        return $identityclass;
    }

    public static function Insert_Data() {
        //print_r($_REQUEST);
        //die();
        $keyarr = \CHCrmCParams::$keyarrDataTableAjax;
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        //PpB2bAdminVfroutepagepluginnoavailableparams::Get_Page_Params($pagename, $blstep1, $blstep2);

        $glb_request = \MyCustomHelperCoreDi::Get_Glb_request();
        $settings = isset($glb_request['settings']) ? $glb_request['settings'] : null;
        $metadata = isset($glb_request['metadata']) ? $glb_request['metadata'] : null;
        $msg = PpB2bAdminCodes::get_User_Message(10000);
        $status = '0';
        if (isset($settings, $metadata) && is_array($settings) && count($settings) > 0) {
            $msg = PpB2bAdminCodes::get_User_Message(10010);
            $id = isset($metadata['id']) ? $metadata['id'] : null;
            if (isset($id)) {
                $arrparams = PpB2bAdminVfpluginnoavailableparams::Get_Params_By_Fkplugin($id);
                $msg = PpB2bAdminCodes::get_User_Message(10020);
                if (isset($arrparams[$keyarr])) {
                    $arrparams = $arrparams[$keyarr];
                    if (
                            $settings['sunday'] == 'false' &&
                            $settings['monday'] == 'false' &&
                            $settings['tuesday'] == 'false' &&
                            $settings['wednesday'] == 'false' &&
                            $settings['thursday'] == 'false' &&
                            $settings['friday'] == 'false' &&
                            $settings['saturday'] == 'false'
                    ) {
                        $settings['monday'] = 'true';
                    }
                    $blcontinue = true;
                    foreach ($settings as $key => $value) {
                        if (!isset($arrparams[$key])) {
                            $tmparrsplit = explode('-', $key);
                            if (
                                    count($tmparrsplit) == 3 &&
                                    $tmparrsplit[0] == 'resource' &&
                                    (
                                    $tmparrsplit[1] == 'blenabled' ||
                                    $tmparrsplit[1] == 'title' ||
                                    $tmparrsplit[1] == 'ordering' ||
                                    $tmparrsplit[1] == 'generalcolour' ||
                                    $tmparrsplit[1] == 'textcolour'
                                    ) &&
                                    is_numeric($tmparrsplit[2])
                            ) {
                                
                            } else {
                                $blcontinue = false;
                                $msg = PpB2bAdminCodes::get_User_Message(10030) . ' ' . $key;
                                break;
                            }
                        }
                    }
                    if ($blcontinue) {
                        foreach ($settings as $key => $value) {
                            $newvalue = null;
                            if (
                                    $key == 'all_day_slot' ||
                                    $key == 'sunday' ||
                                    $key == 'monday' ||
                                    $key == 'tuesday' ||
                                    $key == 'wednesday' ||
                                    $key == 'thursday' ||
                                    $key == 'friday' ||
                                    $key == 'saturday' ||
                                    $key == 'blresources' ||
                                    $key == 'show_popups' ||
                                    $key == 'hide_completed_events' ||
                                    $key == 'weekends') {
                                $newvalue = $value === 'false' ? 0 : 1;
                            } elseif (
                                    $key == 'first_day') {
                                $newvalue = $value;
                            } elseif (
                                    $key == 'default_view' &&
                                    (
                                    $value == 'day' ||
                                    $value == 'week' ||
                                    $value == 'month'
                                    )
                            ) {
                                $newvalue = $value;
                            } elseif (
                                    $key == 'slot_duration' &&
                                    (
                                    $value == '60' ||
                                    $value == '30' ||
                                    $value == '15'
                                    )
                            ) {
                                $newvalue = $value;
                            } elseif (
                                    $key == 'time_format'
                            ) {
                                $newvalue = $value == 'false' ? '24' : '12';
                            } elseif (
                                    ($key == 'min_time' ||
                                    $key == 'max_time' ||
                                    $key == 'scroll_time'
                                    ) &&
                                    (int) $value >= 1 &&
                                    (int) $value <= 24
                            ) {
                                $newvalue = $value;
                            } else {
                                $tmparrsplit = explode('-', $key);
                                if (
                                        count($tmparrsplit) == 3 &&
                                        $tmparrsplit[0] == 'resource'
                                ) {
                                    $paramname = $tmparrsplit[1];
                                    $resourceid = $tmparrsplit[2];
                                    if ($paramname == 'blenabled') {
                                        $newvalue = $value === 'false' ? 0 : 1;
                                    } else {
                                        $newvalue = $value;
                                    }
                                    $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmplugincalendarresource');
                                    $paramvalobj = $classname::find(array(
                                                "conditions" => "fkplugincalendar = :fkplugincalendar: AND fkresource = :fkresource:",
                                                "bind" => array('fkplugincalendar' => $id, 'fkresource' => $resourceid)
                                    ));
                                    $paramvalarr = $paramvalobj->toArray();
                                    if (count($paramvalarr) == 1) {
                                        $paramvalobj = $paramvalobj->getFirst();
                                        $paramvalobj->$paramname = $newvalue;
                                        //$paramvalobj->save();
                                        if ($paramvalobj->save() == false) {
                                            $msg = PpB2bAdminCodes::get_User_Message(10040) . ' ' . $key;
                                            break;
                                        } else {
                                            $status = '1';
                                        }
                                    }
                                    $newvalue = null;
                                }
                            }


                            if (isset($newvalue) && $arrparams[$key] != $newvalue) {
                                $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corepluginparamvalue');
                                $paramvalobj = $classname::find(array(
                                            "conditions" => "fkplugin = :fkplugin: AND paramname = :paramname:",
                                            "bind" => array('fkplugin' => $id, 'paramname' => $key)
                                ));
                                $paramvalarr = $paramvalobj->toArray();
                                if (count($paramvalarr) == 1) {
                                    $paramvalobj = $paramvalobj->getFirst();
                                    $paramvalobj->paramvalue = $newvalue;
                                    //$paramvalobj->save();
                                    if ($paramvalobj->save() == false) {
                                        $msg = PpB2bAdminCodes::get_User_Message(10050) . ' ' . $key;
                                    } else {
                                        $status = '1';
                                    }
                                }
                            } else {
                                $status = '1';
                            }
                            if ($status == '1') {
                                $msg = PpB2bAdminCodes::get_User_Message(10060);
                            } else {
                                break;
                            }
                        }
                    }
                }
            }
        }
        $ret = array('msg' => $msg, 'status' => $status);
        return $ret;
    }

}
