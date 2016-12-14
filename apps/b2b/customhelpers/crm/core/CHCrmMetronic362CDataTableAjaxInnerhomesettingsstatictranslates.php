<?php

class CHCrmMetronic362CDataTableAjaxInnerhomesettingsstatictranslates extends \Phalcon\Tag {

    public static function Do_Action() {
        $di = \Phalcon\DI::getDefault();
        $req = MyCustomHelperCoreDi::Get_Glb_request();
        $prefixbtndelid = $di->controller_params_array['settings']['My_Prefix_Confirmation_Btn'];



        $static_translates_arr = CHCrmCParams::My_get_static_translate_all();
        //$key = array_search(40489, array_column($static_translates_arr, 'uid'));
        //$myparams = array_column($static_translates_arr, 'params');
        $tmpsort = SORT_ASC;

        $colnum = $req['order'][0]['column'];
        $lngstartindex = 4;
        if (isset($req['order_status'])) {
            if ($req['order_status'] != AGCHParams::$Static_Status_All) {
                foreach ($static_translates_arr as $key => $row) {
                    if ($row['params']['status'] != $req['order_status']) {
                        unset($static_translates_arr[$key]);
                    }
                }
            }
        }
        if ($req['order'][0]['dir'] == 'desc') {
            $tmpsort = SORT_DESC;
        }
        if ($colnum == $lngstartindex - 1) {
            if ($req['order'][0]['dir'] == 'asc') {
                ksort($static_translates_arr);
            } else {
                krsort($static_translates_arr);
            }
        } elseif ($colnum == $lngstartindex - 2) {
            foreach ($static_translates_arr as $key => $row) {
                $tmpstatus = AGCHParams::$Static_Status_Active;
                if (isset($row['params'])) {
                    if (isset($row['params']['status'])) {
                        $tmpstatus = $row['params']['status'];
                    }
                }
                $valarr[$key] = $tmpstatus;
            }
            array_multisort($valarr, $tmpsort, $static_translates_arr, $tmpsort, $static_translates_arr);
        } elseif ($colnum >= $lngstartindex && $colnum <= (count($lngarr) + $lngstartindex - 1)) {
            foreach ($static_translates_arr as $key => $row) {
                $valarr[$key] = $row[$lngarr[$colnum - $lngstartindex + 1]];
            }
            array_multisort($valarr, $tmpsort, $static_translates_arr, $tmpsort, $static_translates_arr);
        } else {
            ksort($static_translates_arr);
        }
        $retarr = $static_translates_arr;
        if (isset($req['search-alias']) && strlen(preg_replace('/\s+/', '', $req['search-alias'])) > 0) {
            foreach ($retarr as $key => $value) {
                if (stripos($key, $req['search-alias']) === FALSE) {
                    unset($retarr[$key]);
                }
            }
        }
        foreach ($lngarr as $keylng => $valuelng) {
            if (isset($req['search-lng-' . $valuelng]) && strlen(preg_replace('/\s+/', '', $req['search-lng-' . $valuelng])) > 0) {
                foreach ($retarr as $key => $value) {
                    if (strpos(mb_strtoupper($value[$valuelng], 'UTF-8'), mb_strtoupper($req['search-lng-' . $valuelng], 'UTF-8')) === FALSE) {
                        unset($retarr[$key]);
                    }
                }
            }
        }


        $iTotalRecords = count($retarr);
        $reqlength = intval($req['length']);
        $iDisplayLength = $reqlength;
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = intval($req['start']);
        $sEcho = intval($req['draw']);

        $records = array();
        $records["data"] = array();

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $status_list = array(
            array("success" => "Not Deleted"),
            //array("info" => "Closed"),
            array("danger" => "Deleted"),
                //array("warning" => "Fraud")
        );

        $tmpi = 1;

        foreach ($retarr as $key => $value) {

            if ($tmpi >= $iDisplayStart && $tmpi <= $end) {
                $blshowtrash = AGCHParams::$Static_Bl_True;
                $blshowdisable = AGCHParams::$Static_Bl_True;
                $status = '<span class="label label-sm label-success"> Active </span>';
                if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Excel'] ||
                        $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Pdf'] ||
                        $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Csv']) {
                    $status = 'Active';
                }
                if (isset($value['params'])) {
                    if (isset($value['params']['status']) && $value['params']['status'] === AGCHParams::$Static_Status_Trashed) {
                        $status = '<span class="label label-sm label-danger"> Trashed </span>';
                        if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Excel'] ||
                                $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Pdf'] ||
                                $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Csv']) {
                            $status = 'Trashed';
                        }
                    } elseif (isset($value['params']['status']) && $value['params']['status'] === AGCHParams::$Static_Status_Disabled) {
                        $status = '<span class="label label-sm label-warning"> Disabled </span>';
                        if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Excel'] ||
                                $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Pdf'] ||
                                $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Csv']) {
                            $status = 'Disabled';
                        }
//$blshowtrash = AGCHParams::$Static_Bl_True;
                    } else {
//$blshowdisable = AGCHParams::$Static_Bl_True;
                    }
                }
                $tmparrdata = array();
                if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Action_View']) {
                    array_push($tmparrdata, '<input type="checkbox" name="id[]" value="' . $tmpi . '">');
                }
                array_push($tmparrdata, $tmpi, $status, $key);

                $records["data"][] = $tmparrdata;
                foreach ($lngarr as $keylng => $valuelng) {
                    $records["data"][count($records["data"]) - 1][] = $value[$valuelng];
                }
                if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Action_View']) {
                    $editurl = '/b2b/' . $di->controller_params_array['lng'] . '/admin/dynhelperpage/' . $di->controller_params_array['settings']['Helper_Page_Modal_Operations'] . '/' . $di->controller_params_array['settings']['Action_Edit'] . '/' . $di->controller_params_array['settings']['Param2_Static_Translates'] . '/' . $key . '/';
                    $trashurl = '/b2b/' . $di->controller_params_array['lng'] . '/admin/dynhelperpage/' . $di->controller_params_array['settings']['Helper_Page_Modal_Operations'] . '/' . $di->controller_params_array['settings']['Action_Del'] . '/' . $di->controller_params_array['settings']['Param2_Static_Translates'] . '/' . $key . '/';


                    $my_data_custom_attrs_disable = ' ';
                    if ($blshowdisable === AGCHParams::$Static_Bl_True) {
                        $my_data_custom_attrs_disable = $my_data_custom_attrs_disable . $di->controller_params_array['settings']['My_Data_Field_Attr_Action'] . '="' . $di->controller_params_array['settings']['Action_Disable'] . '" ';
                        $my_data_custom_attrs_disable = $my_data_custom_attrs_disable . $di->controller_params_array['settings']['My_Data_Field_Attr_Mode'] . '="' . $di->controller_params_array['settings']['Param2_Static_Translates'] . '" ';
                        $my_data_custom_attrs_disable = $my_data_custom_attrs_disable . $di->controller_params_array['settings']['My_Data_Field_Attr_Id'] . '="' . $key . '" ';
                        $my_data_custom_attrs_disable = '<button onclick="handleBootstrapConfirmation()" class="btn btn-xs default yellow" data-toggle="confirmation" data-original-title="Are you sure you want to disable this element ? " data-singleton="true" ' . $my_data_custom_attrs_disable . ' id="' . $prefixbtndelid . $key . '"><i class="fa fa-trash"></i>Disable</button>';
                    }
                    $my_data_custom_attrs_trash = ' ';
                    if ($blshowtrash === AGCHParams::$Static_Bl_True) {
                        $my_data_custom_attrs_trash = $my_data_custom_attrs_trash . $di->controller_params_array['settings']['My_Data_Field_Attr_Action'] . '="' . $di->controller_params_array['settings']['Action_Del'] . '" ';
                        $my_data_custom_attrs_trash = $my_data_custom_attrs_trash . $di->controller_params_array['settings']['My_Data_Field_Attr_Mode'] . '="' . $di->controller_params_array['settings']['Param2_Static_Translates'] . '" ';
                        $my_data_custom_attrs_trash = $my_data_custom_attrs_trash . $di->controller_params_array['settings']['My_Data_Field_Attr_Id'] . '="' . $key . '" ';
                        $my_data_custom_attrs_trash = '<button onclick="handleBootstrapConfirmation()" class="btn btn-xs default red" data-toggle="confirmation" data-original-title="Are you sure you want to delete this element ? " data-singleton="true" ' . $my_data_custom_attrs_trash . ' id="' . $prefixbtndelid . $key . '"><i class="fa fa-trash"></i>Trash</button>';
                    }



                    $records["data"][count($records["data"]) - 1][] = '<a class="btn btn-xs default green" data-toggle="modal" data-target="#ajax-full" href="' . $editurl . '"><i class="fa fa-edit"></i> Edit</a> '
                            . $my_data_custom_attrs_disable . $my_data_custom_attrs_trash;
                }
            }
            $tmpi++;
        }




        if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Action_View']) {
            if (isset($req["customActionType"]) && $req["customActionType"] == "group_action") {
                $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
                $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
            }

            $records["draw"] = $sEcho;
            $records["recordsTotal"] = $iTotalRecords;
            $records["recordsFiltered"] = $iTotalRecords;
            $di->controller_params_array['jsondata'] = json_encode($records);
        } elseif ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Excel'] ||
                $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Pdf'] ||
                $di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Csv']) {
            if ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Excel']) {
                $Extension = 'xls';
                $ExportType = 'Excel5';
            } elseif ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Pdf']) {
                $Extension = 'pdf';
                $ExportType = 'PDF';
            } elseif ($di->controller_params_array['param2'] == $di->controller_params_array['settings']['Export_To_Csv']) {
                $Extension = 'csv';
                $ExportType = 'CSV';
            }

            $DownloadFileName = $di->controller_params_array['param1'] . date("Ymj-Gis-") . uniqid() . '.' . $Extension;

            $exportparamsarr = array(
                'properties' => array(
                    'ExportType' => $ExportType,
                    'Creator' => 'Pan Pan',
                    'LastModifiedBy' => 'Pan Pan',
                    'Title' => 'Pan Pan',
                    'Subject' => 'Pan Pan',
                    'Description' => 'Pan Pan',
                    'Keywords' => 'Pan Pan',
                    'Category' => 'Pan Pan',
                ),
                'data' => array(
                    'sheets' => array(
                        0 => array(
                            'title' => 'Sheet 0',
                            'headtitles' => array(
                                0 => 'Seq Number',
                                1 => 'Status',
                                2 => 'Alias',
                                3 => 'Greek',
                                4 => 'English'
                            ),
                            'rows' => $records["data"],
                        )
                    )
                )
            );


            $excelOutput = CustomHelperTools::My_export_grid($exportparamsarr);
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $DownloadFileName);
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . strlen($excelOutput));
            $di->controller_params_array['jsondata'] = $excelOutput;
        }
    }

}
