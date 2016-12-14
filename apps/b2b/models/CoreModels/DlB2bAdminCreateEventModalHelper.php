<?php

namespace B2b\Models\CoreModels;

// DLS20161111
class DlB2bAdminCreateEventModalHelper extends DlB2bAdminFullCalendar {

    static private function Get_Create_Event_Form_Body() {
        $di = \Phalcon\DI::getDefault();        
        $fields = $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['event']['fields'];
        $colsPerRow = (int) $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['event']['formrows'];
        $extra_content = self::Get_Create_Event_Extra_Content();
        $di->controller_params_array['Is_Edit_Mode'] = false;
        if ($di->controller_params_array['param1'] === 'edit') {
            $di->controller_params_array['Is_Edit_Mode'] = true;
            $held = DlB2bAdminFullCalendar::Check_If_Is_Held($di->controller_params_array['param2']);
            if($held) {
                foreach ($fields as $key => $value) {
                    $fields[$key]['attributes']['disabled'] = 'disabled';
                }
                foreach ($di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['mainportlet']['buttons'] as $key => $value) {
                    if($value['attributes']['data-btntype'] == 'save' || 
                            $value['attributes']['data-btntype'] == 'complete' || 
                            $value['attributes']['data-btntype'] == 'delete') {
                        unset($di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['mainportlet']['buttons'][$key]);
                    }
                }
            }
            $extra_content = '';
        }
        if(isset($di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['mainportlet']['buttons']) && !empty($di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['mainportlet']['buttons'])) {
            $di->controller_params_array['Form_Custom_Buttons'] =  $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['mainportlet']['buttons'];
        }
        $cFields = array();
        foreach ($fields as $key => $field) {
            $cFields[] = DlB2bAdminGeneralHelper::Create_Field($field);
        }
        $form = DlB2bAdminFormHelper::Get_Form(false, true, true, 'horizontal-form dl-create-new-event', count($cFields), $colsPerRow);
        $ret = DlB2bAdminFormHelper::Fix_Form($form, $cFields, $extra_content);
        // DLS20161016
        $ret = '<div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>formerrorstitle' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('formerrorstitle') .
                '</div>' . $ret
                . '</div>';
        // DLE20161016
        return $ret;
    }

    static private function Get_Create_Event_Extra_Content() {
        $extra_content = '
                         <div class="row">
                             <div class="col-md-12 text-center">
                                 <div class="form-group">
                                     <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-outline blue repeat-type-selection active" name="single">
                                            <input type="radio" class="toggle">Single Event
                                         </label>
                                         <label class="btn btn-outline red repeat-type-selection" name="range">
                                            <input type="radio" class="toggle">Range Date Selection
                                         </label>
                                         <label class="btn btn-outline dark repeat-type-selection" name="manual">
                                            <input type="radio" class="toggle">Manual Dates Selection
                                         </label>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12" name="event_single_event">
                                 <div class="form-group col-md-2">&nbsp;</div>
                                 <div class="form-group col-md-4">
                                    <label class="control-label">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('datestarttitle') . '&nbsp;&nbsp;<span aria-required="true" class="required">*</span></label>
                                    <input type="text" name="event_start_date" data-name="dtstart" class="form-control text-center">
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label class="control-label">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dateendtitle') . '&nbsp;&nbsp;<span aria-required="true" class="required">*</span></label>
                                    <input type="text" name="event_end_date" data-name="dtend" class="form-control text-center">
                                 </div>
                                 <div class="form-group col-md-2">&nbsp;</div>
                             </div>
                             <div class="col-md-12" data-selection="range">
                                 <div name="event_days_repeat_to_days" class="text-center" style="display: none;">' .
                '<div id="buttons-group" class="btn-group" data-toggle="buttons">'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_monday" data-day="1">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Monday1') . '</label>'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_tuesday" data-day="2">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Tuesday1') . '</label>'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_wednesday" data-day="3">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Wednesday1') . '</label>'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_thursday" data-day="4">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Thursday1') . '</label>'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_friday" data-day="5">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Friday1') . '</label>'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_saturday" data-day="6">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Saturday1') . '</label>'
                . '<label class="btn btn-outline dark"><input type="checkbox" class="toggle" name="repeat_sunday" data-day="0">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('Sunday1') . '</label>'
                . '</div>' .
                '</div>
                         <div class="form-group col-md-4">
                            <div name="event_days_repeat_from" class="date-picker" style="display: none;"></div>
                         </div>
                         <div class="form-group col-md-4">
                            <div name="event_days_repeat_to" class="date-picker" style="display: none;"></div>
                         </div>
                         <div class="form-group col-md-4">
                            <div name="event_days_repeat_manual" class="date-picker" style="display: none;"></div>
                         </div>
                     </div>
                     <div id="repeat_container" class="col-md-12 event-days-repeat" style="margin-top: 15px; display: none;"></div>
                 </div>
                 ';
        return $extra_content;
    }

    static private function Get_Create_ToDo_Extra_Content() {
        
    }

    static private function Get_Create_Event_Modal_Event_Form_Content() {
        return self::Get_Create_Event_Form_Body();
    }

    static private function Get_Create_Event_Modal_ToDo_Form_Content() {
        return '';
    }

    static public function Get_Create_Event_Modal_Header_Content() {
        return '<button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Close"></button>'
                . '<h3 class="modal-title text-center">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('createeventtodo') . '</h3>';
    }
    
    private static function Get_Portlet_Main_Data () {
        $di = \Phalcon\DI::getDefault();
        $portlet = $di->controller_params_array[\CHCrmCParams::$keyarrFullCalendar]['mainportlet'];        
        $portletattrs = DlB2bAdminGeneralHelper::Create_Attributes($portlet['attributes']);
        $portlettitle = PpB2bAdminVftranslate::getKeyvalueFromKeyname($portlet['title']['title']);
        return [
            'attrs' => $portletattrs,
            'title' => $portlettitle
        ];
    }
    
    static public function Get_Create_Event_Modal_Body_Content() {
        $pdata = self::Get_Portlet_Main_Data();
        $portlet = '<div id="' . DlB2bAdminFullCalendar::Get_Create_Event_Portlet_ID(). '" ' . $pdata['attrs'] . '>
                        <div class="portlet-title">
                            <div class="caption dark">
                                ' . $pdata['title'] . '
                            </div>
                        </div>
                        <div class="portlet-body">
                            ' . self::Get_Create_Event_Modal_Event_Form_Content() . '
                        </div>
                    </div>
        ';
        return $portlet;
//        return $portlet;
//        
//        
//        return '
//        <div class="" id="event">' . self::Get_Create_Event_Modal_Event_Form_Content() . '</div>';
//        return '
//        <div class="row">
//            <div class="col-md-12">
//               <div class="tabbable-line boxless tabbable-reversed">
//                    <ul class="nav nav-tabs">
//                        <li class="active">
//                            <a href="#event" data-toggle="tab">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('createeventtitle') . '</a>
//                        </li>
//                    </ul>                        
//                    <div class="tab-content">
//                        <div class="tab-pane active" id="event">' . self::Get_Create_Event_Modal_Event_Form_Content() . '</div>
//                    </div>
//                </div>
//            </div>
//        </div>';
    }

    static public function Get_Create_Event_Modal_Footer_Content() {
        
    }

}