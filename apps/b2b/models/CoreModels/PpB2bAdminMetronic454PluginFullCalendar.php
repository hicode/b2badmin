<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminMetronic454PluginFullCalendar extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'fullcalendarv261';

    public static function Make_keyarrFullCalendar($arrparams = null) {
        $di = \Phalcon\DI::getDefault();
        if (!isset($arrparams)) {
            $mytmparr = $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar];
        } else {
            $mytmparr = $arrparams;
        }
        $mytmparr['datepaginator']['showCalendar'] = (int) $mytmparr['datepaginator']['show_calendar'] === 1 ? 'true' : 'false';
        $mytmparr['datepaginator']['size'] = isset($mytmparr['datepaginator']['size']) ? $mytmparr['datepaginator']['size'] : 'large';
        $mytmparr['datepaginator']['dateformat'] = isset($mytmparr['datepaginator']['dateformat']) ? $mytmparr['datepaginator']['dateformat'] : 'YYYY-MM-DD';
        $mytmparr['datepaginator']['text'] = isset($mytmparr['datepaginator']['text']) ? $mytmparr['datepaginator']['text'] : 'ddd</br>M-D';
        $mytmparr['datepaginator']['textSelected'] = isset($mytmparr['datepaginator']['text_selected']) ? $mytmparr['datepaginator']['text_selected'] : 'dddd</br>DD-MM-YYYY';


        $mytmparr['allDaySlot'] = (int) $mytmparr['all_day_slot'] === 1 ? 'true' : 'false';
        $mytmparr['default_view'] = (isset($mytmparr['default_view']) ? $mytmparr['default_view'] : 'month');
        $mytmparr['defaultView'] = ($mytmparr['default_view'] != 'month' ? 'agenda' . ucwords($mytmparr['default_view']) : $mytmparr['default_view']);
        // hour view
        $mytmparr['axisFormat'] = (int) $mytmparr['time_format'] === 12 ? 'h:mm a' : 'H:mm';

// minimum time
        $mytmparr['minTime'] = $mytmparr['min_time'] . ':00'; //strlen($row['min_time']) === 1 ? '0'.$row['min_time'].':00' : $row['min_time'].':00';
// maxmimum time
        $mytmparr['maxTime'] = $mytmparr['max_time'] . ':00'; //strlen($row['mmax_time']) === 1 ? '0'.$row['max_time'].':00' : $row['max_time'].':00';
// scroll time
        $mytmparr['scrollTime'] = $mytmparr['scroll_time'] . ':00'; //strlen($row['scroll_time']) === 1 ? '0'.$row['scroll_time'].':00' : $row['scroll_time'].':00';
// weekends
        $mytmparr['Weekends'] = (int) $mytmparr['weekends'] === 1 ? 'true' : 'false';

//first day
        $mytmparr['firstDay'] = (int) $mytmparr['first_day'];

        $mytmparr['columnFormat'] = isset($mytmparr['column_format']) ? $mytmparr['column_format'] : 'ddd DD/MM';

//slot duration
        $mytmparr['slot_duration'] = isset($mytmparr['slot_duration']) ? $mytmparr['slot_duration'] : 60;
        if ((int) $mytmparr['slot_duration'] === 15) {
            $mytmparr['slotDuration'] = '00:05:00';
        } else if ((int) $mytmparr['slot_duration'] === 30) {
            $mytmparr['slotDuration'] = '00:15:00';
        } else if ((int) $mytmparr['slot_duration'] === 60) {
            $mytmparr['slotDuration'] = '00:30:00';
        } else {
            $mytmparr['slotDuration'] = '00:30:00';
        }

        $tmp = array();
        if ((int) $mytmparr['monday'] === 0) {
            $tmp[] = 1;
        }
        if ((int) $mytmparr['tuesday'] === 0) {
            $tmp[] = 2;
        }
        if ((int) $mytmparr['wednesday'] === 0) {
            $tmp[] = 3;
        }
        if ((int) $mytmparr['thursday'] === 0) {
            $tmp[] = 4;
        }
        if ((int) $mytmparr['friday'] === 0) {
            $tmp[] = 5;
        }
        if ((int) $mytmparr['saturday'] === 0) {
            $tmp[] = 6;
        }
        if ((int) $mytmparr['sunday'] === 0) {
            $tmp[] = 0;
        }
        $mytmparr['hiddenDays'] = json_encode($tmp);
        $blresources = isset($mytmparr['blresources']) ? $mytmparr['blresources'] : false;

        $mytmparr['resources'] = array();
        if ($blresources) {
            $resarr = self::Get_Resources($mytmparr['id'], 1);
            foreach ($resarr as $key => $value) {
                $resource = array('id' => $value['fkresource'], 'eventColor' => $value['generalcolour'], 'textColor' => $value['textcolour'], 'title' => $value['title']);
                //if ($key > 2) {
                //    $resource['parentId'] = $resarr[0]['fkresource'];
                //}
                $mytmparr['resources'][] = $resource;
            }
            //$mytmparr['resources'] = isset($mytmparr['resources']) ? json_encode($mytmparr['resources']) : json_encode(array());
        }// else {
        //   $mytmparr['resources'] = json_encode(array());
        //}
        $mytmparr['resources'] = json_encode($mytmparr['resources']);

        /* if ((int) $row['resources'] === 1) {
          $sql2 = "SELECT * FROM vt2m_resources";
          $result2 = $conn->query($sql2);
          $resources = array();
          while ($row2 = $result2->fetch_assoc()) {
          $resources[] = array(
          "id" => (int) $row2['resource_id'],
          "eventColor" => $row2['event_color'],
          "title" => $row2['title']
          );
          }
          $settings['resources'] = $resources;
          echo json_encode($settings);
          } else {
          echo json_encode($settings);
          } */
        if (!isset($arrparams)) {
            $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar] = $mytmparr;
        }
        return $mytmparr;
    }

    public static function Get_Page_FullCalendar() {
        $di = \Phalcon\DI::getDefault();
        $ret = '<div id="bootstrap_alert_common"> </div><div class="row">' . self::Get_Settings_Div() . '</div><div class="row">' . self::Get_Gotodate_Div() . '</div><div class="row">' . self::get_FullCalendar() . ' 
</div>
';
        return $ret;
    }

    private static function Get_FullCalendar() {
        // DLS20161111    ALLAGI TIS KLASIS TOU CALENDAR PORTLET APO red-flamingo SE light
        $di = \Phalcon\DI::getDefault();
        $ret = '
    <div class="col-md-12 col-sm-12 calendar-div-wrapper">
        <!-- <div id="portlet-viewer-calendar-events" class="col-md-3 col-sm-12">                   
            <div class="portlet box red-flamingo">
                <div class="portlet-title">
                    <div class="caption">
                        Show / Hide Events
                    </div>
                    <div class="actions">
                        <a id="private-calendar-hide-event-viewer" class="btn btn-default btn-sm btn-circle">
                            <span class="icon-size-actual" title="Hide"></span>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                </div>
            </div>
        </div> -->
        <div id="portlet-calendar" class="col-md-12 col-sm-12">
            <div class="portlet box light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>&nbsp;
                        ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'PrivateCalendar1') . '
                    </div>                                        
                    <div class="tools">
                        <a class="collapse"></a>
                    </div>
                    <div class="actions">
                        <a id="private-calendar-show-event-viewer" class="btn btn-default btn-sm btn-circle" title="Show Events Viewer" style="display: none;">
                            <span class="icon-size-fullscreen">&nbsp;Show Events Viewer</span>
                        </a>
                        <a id="private-calendar-go-to-date-btn" data-fkplugin="' . $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['id'] . '" class="btn btn-default btn-sm btn-circle" title="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Gotodate1') . '">
                            <i class="fa fa-calendar-o">&nbsp;' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'DateMove1') . '</i>
                        </a>
                        <a id="private-calendar-settings-btn" data-fkplugin="' . $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['id'] . '" class="btn btn-default btn-sm btn-circle" title="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Settings1') . '">
                            <i class="fa fa-cogs">&nbsp;' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Settings1') . '</i>
                        </a>                                            
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="calendar-private"></div>                                            
                </div>
            </div>                                
        </div>                                                                                   
    </div>
';
        return $ret;
    }

    private static function Get_Gotodate_Div() {
        // DLS20161111
        // Evala se sxolio to advance search
        $di = \Phalcon\DI::getDefault();
        $pluginarrparams = $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar];
        $current_date = date('Y-m-d');
        $portletid = 'gotodate-datepaginator';
        return '<div id="' . $portletid . '" class="col-md-12 col-sm-12" style="z-index: 500;margin-bottom: 5px;display: none;">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>
                         ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'GoToDate2') . '
                    </div>
                    <div class="tools">
                        <!--<button id="advance-date-search" type="button" class="btn btn-circle blue" data-date="' . $current_date . '" data-date-format="' . $pluginarrparams['datepaginator']['dateformat'] . '">
                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'AdvanceDateSearch1') . '
                        </button>-->
                        <button type="button" class="close-gotodate-portlet btn btn-circle red">
                            <i class="icon-close"></i>
                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'close1') . '
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="go-to-date"></div>
                </div>
            </div>
        </div>';
    }

    private static function Get_Settings_Div() {
        $di = \Phalcon\DI::getDefault();
        $row = $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar];

        $portlet_id = 'portlet-settings';

        $all_day_slot = (int) $row['all_day_slot'] === 1 ? 'checked' : '';

        $day_checked = $row['default_view'] === 'day' ? 'selected="selected"' : '';
        $weekends = (int) $row['weekends'] === 1 ? 'checked=' : '';
        $hide_completed_events = (int) $row['hide_completed_events'] === 1 ? 'checked' : '';
        $week_checked = $row['default_view'] === 'week' ? 'selected="selected"' : '';
        $month_checked = $row['default_view'] === 'month' ? 'selected="selected"' : '';
        $time_picker_class = (int) $row['time_format'] === 24 ? "simple-timepicker-24" : "simple-timepicker-12";
        $hour_format = (int) $row['time_format'] === 12 ? 'checked' : '';

        $calendar_theme_tpl = "<select class='bs-select form-control input-small calendar-settings-field' name='theme' style='display: inline;float:right;'><option value='1' selected='selected'>Default</option></select>";

        $min_time_tpl = "<select class='bs-select form-control input-small calendar-settings-field select-hour" . $row['time_format'] . "' name='min_time' style='display: inline;float:right;'>";
        $max_time_tpl = "<select class='bs-select form-control input-small calendar-settings-field select-hour" . $row['time_format'] . "' name='max_time' style='display: inline;float:right;'>";
        $scroll_time_tpl = "<select class='bs-select form-control input-small calendar-settings-field select-hour" . $row['time_format'] . "' name='scroll_time' style='display: inline;float:right;'>";

        for ($i = 1; $i <= 24; $i++) {
            $t_ampm = '';
            $t = $i;
            if ((int) $row['time_format'] === 12) {
                $t_ampm = $i > 12 ? 'pm' : 'am';
                $t = $i > 12 ? $i - 12 : $i;
            }
            $ft = $t . ':00 ' . $t_ampm;


            $selected = ' ';
            if ((int) $row['min_time'] === $i) {
                $selected = 'selected="selected"';
            }
            $min_time_tpl .= '<option ' . $selected . ' value="' . $i . '">' . $ft . '</option>';


            $selected = ' ';
            if ((int) $row['max_time'] === $i) {
                $selected = 'selected="selected"';
            }
            $max_time_tpl .= '<option ' . $selected . ' value="' . $i . '">' . $ft . '</option>';


            $selected = ' ';
            if ((int) $row['scroll_time'] === $i) {
                $selected = 'selected="selected"';
            }
            $scroll_time_tpl .= '<option ' . $selected . ' value="' . $i . '">' . $ft . '</option>';
        }

        $min_time_tpl.='</select>';
        $max_time_tpl.='</select>';
        $scroll_time_tpl.='</select>';
        $default_view = '<select class="bs-select form-control input-small calendar-settings-field" name="default_view" style="display: inline;float:right;">
                    <option value="day" ' . $day_checked . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Day1') . '</option>
                    <option value="week" ' . $week_checked . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Week1') . '</option>
                    <option value="month" ' . $month_checked . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Month1') . '</option>
                </select>';

        $mon = (int) $row['first_day'] === 1 ? 'selected="selected"' : '';
        $tue = (int) $row['first_day'] === 2 ? 'selected="selected"' : '';
        $wed = (int) $row['first_day'] === 3 ? 'selected="selected"' : '';
        $thu = (int) $row['first_day'] === 4 ? 'selected="selected"' : '';
        $fri = (int) $row['first_day'] === 5 ? 'selected="selected"' : '';
        $sat = (int) $row['first_day'] === 6 ? 'selected="selected"' : '';
        $sun = (int) $row['first_day'] === 0 ? 'selected="selected"' : '';

        $mon_stat = (int) $row["monday"] === 0 ? "disabled='disabled' style='color: red;'" : "";
        $tue_stat = (int) $row["tuesday"] === 0 ? "disabled='disabled' style='color: red;'" : "";
        $wed_stat = (int) $row["wednesday"] === 0 ? "disabled='disabled' style='color: red;'" : "";
        $thu_stat = (int) $row["thursday"] === 0 ? "disabled='disabled' style='color: red;'" : "";
        $fri_stat = (int) $row["friday"] === 0 ? "disabled='disabled' style='color: red;'" : "";
        $sat_stat = (int) $row["saturday"] === 0 ? "disabled='disabled' style='color: red;'" : "";
        $sun_stat = (int) $row["sunday"] === 0 ? "disabled='disabled' style='color: red;'" : "";


        $first_day = '<select class="bs-select form-control input-small calendar-settings-field" name="first_day" style="display: inline;float:right;">
                    <option value="1" ' . $mon . $mon_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Monday1') . '</option>
                    <option value="2" ' . $tue . $tue_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Tuesday1') . '</option>
                    <option value="3" ' . $wed . $wed_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Wednesday1') . '</option>
                    <option value="4" ' . $thu . $thu_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Thursday1') . '</option>
                    <option value="5" ' . $fri . $fri_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Friday1') . '</option>
                    <option value="6" ' . $sat . $sat_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Saturday1') . '</option>
                    <option value="0" ' . $sun . $sun_stat . '>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Sunday1') . '</option>
                </select>';

        $pop1_status = (int) $row['popup_reminder_time_before'] === 1 ? 'selected="selected"' : '';
        $pop5_status = (int) $row['popup_reminder_time_before'] === 5 ? 'selected="selected"' : '';
        $pop15_status = (int) $row['popup_reminder_time_before'] === 15 ? 'selected="selected"' : '';
        $pop30_status = (int) $row['popup_reminder_time_before'] === 30 ? 'selected="selected"' : '';
        $pop45_status = (int) $row['popup_reminder_time_before'] === 45 ? 'selected="selected"' : '';
        $pop60_status = (int) $row['popup_reminder_time_before'] === 60 ? 'selected="selected"' : '';
        $pop120_status = (int) $row['popup_reminder_time_before'] === 120 ? 'selected="selected"' : '';

        $popup_reminder_time_before = '<select class="bs-select form-control input-small calendar-settings-field" name="popup_reminder_time_before" style="display: inline;float:right;">
                    <option value="1" ' . $pop1_status . '>1 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minute1') . '</option>
                    <option value="5" ' . $pop5_status . '>5 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minutes1') . '</option>
                    <option value="15" ' . $pop15_status . '>15 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minutes1') . '</option>
                    <option value="30" ' . $pop30_status . '>30 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minutes1') . '</option>
                    <option value="45" ' . $pop45_status . '>45 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minutes1') . '</option>
                    <option value="60" ' . $pop60_status . '>1 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'hour1') . '</option>
                    <option value="120" ' . $pop120_status . '>2 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'hours1') . '</option>
                </select>';

        $slot_stat1 = (int) $row['slot_duration'] === 15 ? 'selected="selected"' : '';
        $slot_stat2 = (int) $row['slot_duration'] === 30 ? 'selected="selected"' : '';
        $slot_stat3 = (int) $row['slot_duration'] === 60 ? 'selected="selected"' : '';

        $slot_duration = '<select class="bs-select form-control input-small calendar-settings-field" name="slot_duration" style="display: inline;float:right;">
                    <option value="15" ' . $slot_stat1 . '>15 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minutes1') . '</option>
                    <option value="30" ' . $slot_stat2 . '>30 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'minutes1') . '</option>
                    <option value="60" ' . $slot_stat3 . '>1 ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'hour1') . '</option>
                </select>';


        $monday = (int) $row['monday'] === 1 ? 'checked="checked"' : '';
        $tuesday = (int) $row['tuesday'] === 1 ? 'checked="checked"' : '';
        $wednesday = (int) $row['wednesday'] === 1 ? 'checked="checked"' : '';
        $thursday = (int) $row['thursday'] === 1 ? 'checked="checked"' : '';
        $friday = (int) $row['friday'] === 1 ? 'checked="checked"' : '';
        $saturday = (int) $row['saturday'] === 1 ? 'checked="checked"' : '';
        $sunday = (int) $row['sunday'] === 1 ? 'checked="checked"' : '';

        $show_popups = (int) $row['show_popups'] === 1 ? 'checked="checked"' : '';

        $blresources = (int) $row['blresources'] === 1 ? 'checked="checked"' : '';





        $resarr = self::Get_Resources($row['id']);
        $trres = '';
        foreach ($resarr as $key => $value) {
            $disabled = 'disabled';
            $resourceid = $value['fkresource'];
            if ($value['blenabled']) {
                $disabled = '';
            }
            $ordering = "<select class='bs-select form-control input-small resource-field' name='resource-ordering-" . $resourceid . "'>";
            for ($i = 1; $i <= 7; $i++) {
                $selected = '';
                if ($value['ordering'] == $i) {
                    $selected = " selected='selected' ";
                }
                $ordering.="<option value='" . $i . "' " . $selected . ">" . $i . "</option>";
            }

            $ordering.="</select>";
            $checkedenabled = $value['blenabled'] == 1 ? 'checked="checked"' : '';
            $trres.='<tr>
                                    <td align="center">
                                        <input type="checkbox" class="resource-blenabled-switch resource-field" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="resource-blenabled-' . $resourceid . '" ' . $checkedenabled . ' />
                                    </td>
                                    <td align="center">
                                        <input type="text" class="form form-control input-small resource-field resource-name" style="text-align: center;" name="resource-title-' . $resourceid . '" value="' . $value['title'] . '" />
                                    </td>
                                    <td align="center">
                                        <input type="hidden" class="form form-control input-small hidden-minicolor resource-field" name="resource-generalcolour-' . $resourceid . '" value="' . $value['generalcolour'] . '" >
                                    </td>
                                    <td align="center">
                                        <input type="hidden" class="form form-control input-small hidden-minicolor resource-field" name="resource-textcolour-' . $resourceid . '" value="' . $value['textcolour'] . '" >
                                    </td>
                                    <td align="center">
                                        ' . $ordering . '
                                    </td>
                                </tr>';
        }





        $html = ' 
        
        <div id="' . $portlet_id . '" class="col-md-12 col-sm-12" style="z-index: 500;float:right;display:none;">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="tools">
                        <button type="button" class="save-settings-portlet btn btn-circle blue">
                            <i class="fa fa-save"></i>
                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Save1') . '
                        </button>
                        <button type="button" class="close-settings-portlet btn btn-circle red">
                            <i class="icon-close"></i>
                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Close1') . '
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="4">
                                        <h4 class="uppercase">
                                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'GeneralSettings1') . '
                                        </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'alldayslot1') . '</strong>
                                        <div style="display:inline; float:right;"><input type="checkbox" class="simple-switch calendar-settings-field" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="all_day_slot" ' . $all_day_slot . '/></div>
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'DefaultView1') . '</strong>
                                        ' . $default_view . ' 
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'MinimumTime1') . '</strong>
                                        ' . $min_time_tpl . ' 
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'MaximumTime1') . '</strong>
                                        ' . $max_time_tpl . ' 
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'SlotDuration1') . '</strong>
                                        ' . $slot_duration . ' 
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'HourFormat1') . '</strong>
                                        <div style="display:inline; float:right;"><input type="checkbox" class="hour-switch calendar-settings-field" data-size="small" data-on-text="12" data-off-text="24" data-off-color="danger" name="time_format" style="display:inline;float:right;" ' . $hour_format . '/></div>
                                    </td>                                        
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'ScrollTime1') . '</strong>
                                        ' . $scroll_time_tpl . ' 
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'DayStart1') . '</strong> 
                                        ' . $first_day . ' 
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'ShowPopups1') . '</strong>
                                        <div style="display:inline; float:right;"><input type="checkbox" class="simple-switch calendar-settings-field" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="show_popups" style="display:inline;float:right;" ' . $show_popups . '/></div>
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'PopupReminderTime1') . '</strong>
                                        ' . $popup_reminder_time_before . ' 
                                    </td>
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'HideCompletedEvents1') . '</strong>
                                        <div style="display:inline; float:right;"><input type="checkbox" class="simple-switch calendar-settings-field" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="hide_completed_events" style="display:inline;float:right;" ' . $hide_completed_events . '/></div>
                                    </td>                                        
                                    <td>
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Dividers1') . '</strong>
                                        <div style="display:inline; float:right;"><input type="checkbox" class="simple-switch calendar-settings-field" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="blresources" style="display:inline;float:right;" ' . $blresources . '/></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">  
                                        <strong display="inline;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'ShowWeekDays1') . '</strong>
                                        <input type="checkbox" class="simple-switch calendar-settings-field" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="weekends" style="display:inline;float:right;" ' . $weekends . '/>
                                        <div style="display:inline; float:right;">
                                            <div style="display:inline;float:right;margin-right:23px;">
                                                <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'SUN1') . '</span>
                                                <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="sunday" data-day-num="0" ' . $sunday . '/>
                                            </div>
                                            <div style="display:inline;float:right;margin-right:23px;">
                                                <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'SAT1') . '</span>
                                                <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="saturday" data-day-num="6" ' . $saturday . '/>
                                                    </div>
                                            <div style="display:inline;float:right;margin-right:23px;">
                                                <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'FRI1') . '</span>
                                                <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="friday" data-day-num="5" ' . $friday . '/>
                                            </div>
                                            <div style="display:inline;float:right;margin-right:23px;">
                                                <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'THU1') . '</span>
                                                <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="thursday" data-day-num="4" ' . $thursday . '/>
                                            </div>
                                             <div style="display:inline;float:right;margin-right:23px;">
                                                 <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'WED1') . '</span>
                                                 <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="wednesday" data-day-num="3" ' . $wednesday . '/>
                                             </div>
                                            <div style="display:inline;float:right;margin-right:23px;">
                                                <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'TUE1') . '</span>
                                                <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="tuesday" data-day-num="2" ' . $tuesday . '/>
                                            </div>
                                            <div style="display:inline;float:right;margin-right:23px;">
                                                <span style="margin-right:10px;">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'MON1') . '</span>
                                                <input type="checkbox" class="simple-switch calendar-settings-field calendar-settings-day" data-size="small" data-on-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'YES1') . '" data-off-text="' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'NO1') . '" data-off-color="danger" name="monday" data-day-num="1" ' . $monday . '/>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tobdy>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="5">
                                        <h4 class="uppercase">
                                            ' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'ResourcesSettings1') . '
                                        </h4>
                                    </th>
                                </tr>
                                <tr>
                                    <th style="width: 20%; text-align: center;"><strong>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'enabledisable1') . '</strong></th>
                                    <th style="width: 20%; text-align: center;"><strong>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'name1') . '</strong></th>
                                    <th style="width: 20%; text-align: center;"><strong>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'GeneralColor1') . '</strong></th>
                                    <th style="width: 20%; text-align: center;"><strong>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'TextColor1') . '</strong></th>
                                    <th style="width: 20%; text-align: center;"><strong>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'Order1') . ' </strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                ' . $trres . '
                            </tbody>
                        </table>
                    <div>
                </div>
            </div>
        </div> 
    </div>
</div> 
';
        return $html;
    }

    public static function Save_Settings() {
        //print_r($_REQUEST);
        //die();
        $keyarr = \CHCrmCParams::$keyarrFullCalendar;
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;

        //PpB2bAdminVfroutepagepluginnoavailableparams::Get_Page_Params($pagename, $blstep1, $blstep2);

        $glb_request = \MyCustomHelperCoreDi::Get_Glb_request();
        $settings = isset($glb_request['settings']) ? $glb_request['settings'] : null;
        $metadata = isset($glb_request['metadata']) ? $glb_request['metadata'] : null;
        $msg = 'Error During Save';
        $status = '0';
        if (isset($settings, $metadata) && is_array($settings) && count($settings) > 0) {

            $id = isset($metadata['id']) ? $metadata['id'] : null;
            if (isset($id)) {
                $arrparams = PpB2bAdminVfpluginnoavailableparams::Get_Params_By_Fkplugin($id);
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
                                $msg = 'Error During Save Param : ' . $key;
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
                                        $cpa['updatemvdependends'][$paramvalobj->getSchema()][$paramvalobj->getSource()] = 1;
                                        if ($paramvalobj->save() == false) {
                                            $msg = 'Error During Save Param : ' . $key;
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
                                $paramvalobj = $classname::findFirst(array(
                                            "conditions" => "fkplugin = :fkplugin: AND paramname = :paramname:",
                                            "bind" => array('fkplugin' => $id, 'paramname' => $key),
                                            "for_update" => true
                                ));
                                if ($paramvalobj) {
                                    $paramvalobj->paramvalue = $newvalue;
                                    //$paramvalobj->save();
                                    $cpa['updatemvdependends'][$paramvalobj->getSchema()][$paramvalobj->getSource()] = 1;
                                    if ($paramvalobj->save() == false) {
                                        $msg = 'Error During Save Param : ' . $key;
                                    } else {
                                        $status = '1';
                                    }
                                } else {
                                    $msg = 'Error During Save Paramst2 : ' . $key;
                                }
                            } else {
                                $status = '1';
                            }
                            if ($status == '1') {
                                $msg = 'The operation has completed succesfully';
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

    public static function Get_Settings() {
        $keyarr = \CHCrmCParams::$keyarrFullCalendar;
        $di = \Phalcon\DI::getDefault();
        //PpB2bAdminVfroutepagepluginnoavailableparams::Get_Page_Params($pagename, $blstep1, $blstep2);

        $glb_request = \MyCustomHelperCoreDi::Get_Glb_request();
        $metadata = isset($glb_request['metadata']) ? $glb_request['metadata'] : null;
        $msg = 'Error During Getting Settings';
        $status = '0';
        if (isset($metadata) && is_array($metadata) && count($metadata) > 0) {

            $id = isset($metadata['id']) ? $metadata['id'] : null;
            if (isset($id)) {
                $arrparams = PpB2bAdminVfpluginnoavailableparams::Get_Params_By_Fkplugin($id);
                if (isset($arrparams[$keyarr])) {
                    $arrparams = $arrparams[$keyarr];
                    $ret = self::Make_keyarrFullCalendar($arrparams);
                    foreach ($ret as $key => $value) {
                        if ($value == 'true') {
                            $ret[$key] = true;
                        } elseif ($value == 'false') {
                            $ret[$key] = false;
                        }
                    }
                    $ret['hiddenDays'] = json_decode($ret['hiddenDays'], true);
                    $tmpres = json_decode($ret['resources'], true);
                    $ret['resources'] = array();
                    foreach ($tmpres as $key => $value) {
                        $ret['resources'][] = $value;
                    }

                    //$ret['resources'] = json_decode($ret['resources'], true);
                    $status = '1';
                    $msg = 'Succesfully getting settings.';
                }
            }
        }
        $ret = array('msg' => $msg, 'status' => $status, 'params' => $ret);
        return $ret;
    }

    public static function Get_Events() {
        // DLS20161111   OLI TIN SINARTISI
        $di = \Phalcon\DI::getDefault();

        $glb_request = \MyCustomHelperCoreDi::Get_Glb_request();
        $start_date = $glb_request['start'];
        $end_date = $glb_request['end'];
        $eventclassname = \MyCustomHelperClassTools::My_Core_Get_Classname('vfcrmeventm');
        $fkplugincalendar = $di->controller_params_array['param4'];
        $mykatastima = \CHCrmCParams::My_get_mykatastima();
        $arrfind = array(
            "conditions" => "fkplugincalendar = :fkplugincalendar: AND evdtstart >= :evdtstart: AND ( evdtend is null or evdtend <= :evdtend: ) AND bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished:",
            "bind" => array(
                'fkplugincalendar' => $fkplugincalendar,
                'evdtstart' => $start_date,
                'evdtend' => $end_date,
                'bldeleted' => 0,
                'bldisabled' => 0,
                'blpublished' => 1
            )
        );
        if ($mykatastima != \CHCrmCParams::My_get_mykatastima_default()) {
            $arrfind['conditions'] = $arrfind['conditions'] . ' AND mykatastima = :mykatastima: ';
            $arrfind['bind']['mykatastima'] = $mykatastima;
        }
        $eventobj = $eventclassname::find($arrfind);
        $eventarr = $eventobj->toArray();
        $request_code = $_REQUEST['_'];

        $editable = true;
        $overlap = true;
        $ret = array();
        foreach ($eventarr as $key => $value) {
            $evdtstart = isset($value['evdtstart']) ? date_create($value['evdtstart']) : null;
            $evdtstart = isset($evdtstart) ? date_format($evdtstart, 'Y-m-d\TH:i') : '';
            $evdtend = isset($value['evdtend']) ? date_create($value['evdtend']) : null;
            $evdtend = isset($evdtend) ? date_format($evdtend, 'Y-m-d\TH:i') : '';
            $eventCustomers = DlB2bAdminFullCalendar::Get_Customers_HTML_For_Event($value['fkevent']);
            $eventTrainers = DlB2bAdminFullCalendar::Get_Trainers_HTML_For_Event($value['fkevent']);
            $ret[] = array(
                'id' => $value['fkevent'],
                "resourceId" => $value['fkresource'],
                //"rendering"=> "background",
                "title" => $value['corcrmeventstatustitle'],
                "allDay" => $value['evblallday'] == 1 ? true : false,
                "start" => $evdtstart, //"2016-05-02T09:00",
                "end" => $evdtend, // isset($value['evdtend']) ? date_format($value['evdtend'], 'Y-m-dTH:i') : '', //"2016-05-02T15:00",
                "url" => $value['evurl'],
                "editable" => $value['evbleditable'] == 1 ? true : false,
                "overlap" => $value['evbloverlap'] == 1 ? true : false,
                "color" => $value['evcolor'],
                "backgroundColor" => $value['evbackgroundcolor'], //"#0000FF", // BLUE
                "borderColor" => $value['evbordercolor'], //"#000000", // BLACK
                "textColor" => $value['evtextcolor'],//""
                "customers" => $eventCustomers,
                "trainers" => $eventTrainers
            );
        }
        /*
          $ret = array(
          array(
          "id" => 1,
          "resourceId" => 1,
          "title" => 'Event 1',
          "allDay" => false,
          "start" => "2016-05-02T09:00",
          "end" => "2016-05-02T15:00",
          "url" => "",
          "editable" => $editable,
          "overlap" => $overlap,
          "color" => "",
          "backgroundColor" => "#0000FF", // BLUE
          "borderColor" => "#000000", // BLACK
          "textColor" => ""
          ),
          array(
          "id" => 2,
          "resourceId" => 1,
          "title" => 'Event 2',
          "allDay" => false,
          "start" => "2016-05-02T09:00",
          "end" => "2016-05-02T15:00",
          "url" => "",
          "editable" => $editable,
          "overlap" => $overlap,
          "color" => "",
          "backgroundColor" => "brown", // BLUE
          "borderColor" => "#000000", // BLACK
          "textColor" => ""
          )
          ); */
        return $ret;
    }

    private static function Get_Resources($fkplugincalendar, $blenabled = null) {
        $resclassname = \MyCustomHelperClassTools::My_Core_Get_Classname('Corecrmplugincalendarresource');
        if (isset($blenabled)) {
            $resobj = $resclassname::find(array(
                        "conditions" => "fkplugincalendar = :fkplugincalendar: AND blenabled = :blenabled:",
                        "bind" => array('fkplugincalendar' => $fkplugincalendar, 'blenabled' => $blenabled),
                        "order" => "ordering ASC"
            ));
        } else {
            $resobj = $resclassname::find(array(
                        "conditions" => "fkplugincalendar = :fkplugincalendar: ",
                        "bind" => array('fkplugincalendar' => $fkplugincalendar),
                        "order" => "ordering ASC"
            ));
        }
        $resarr = $resobj->toArray();
        return $resarr;
    }

}