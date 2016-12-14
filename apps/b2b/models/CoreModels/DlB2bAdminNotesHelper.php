<?php

namespace B2b\Models\CoreModels;

class DlB2bAdminNotesHelper extends DlB2bAdminFullCalendar {

    private static $limit = 20;
    public static $helperPage = 'outer-header-crm-notes';
    public static $SaveAction = 'action_save';
    public static $GetAction = 'action_getnotes';
    public static $UpdateAction = 'action_update';
    
    public static function Get_Max_Allowed_Notes () {
        return self::$limit;
    }
    
    private static function Get_Completed_Note_Helper_Tpl_New () {
        $tpl = '
                <span class="detail pull-right viewed-note-helper" style="display: none;">
                    <i class="fa fa-check"></i>
                </span>
                ';
        return $tpl;
    }
    
    private static function Get_Completed_Note_Helper_Tpl_Old () {
        $tpl = '
                <span class="detail pull-right viewed-note-helper">
                    <i class="fa fa-check"></i>
                </span>
                ';
        return $tpl;
    }
    
    private static function Get_Single_Note_Tpl($id = '', $img = '', $from = '', $timestamp = '', $note = '', $status = true) {
        // true  :  Note is viewed
        // false :  Note is new
        $completedtpl; $title; $class;
        if( $status ) {
            $title = '';
            $class = 'viewed-note';
            $completedtpl = self::Get_Completed_Note_Helper_Tpl_Old();
        } else {
            $title = PpB2bAdminVftranslate::getKeyvalueFromKeyname('clicktochangestatustitle');
            $completedtpl = self::Get_Completed_Note_Helper_Tpl_New();
            $class='new-note';
        }
        $notetpl = '
                <li>
                    <a id="' . $id . '"  class="'. $class .'" title="'. $title .'" href="javascript:;">
                        <span class="photo">
                            <img src="' . $img . '" class="img-circle" alt="IMG">
                        </span>
                        <span class="subject">
                            <span class="from bold">' . $from . ' : </span>
                            <span class="time">' . $timestamp . '</span>
                        </span>
                        <span class="message">'. $note . '</span>'. $completedtpl .'
                    </a>
                    <div class="row update-state-confirmation" style="display: none;">
                        <div class="col-md-12 col-sm-12">
                            <div class="portlet light" style="padding: 0px;">
                                <div class="portlet-body form" style="padding: 0xp;">
                                    <form class="horizontal-form" action="javascript:;" style="padding: 10px;">
                                        <div class="form-body" style="padding: 5px;">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group" style="margin-bottom: 0px;">
                                                        <label class="control-label text-center">'. PpB2bAdminVftranslate::getKeyvalueFromKeyname('confirmationtitle') .'</label>
                                                        <div class="btn-group btn-group-justified">
                                                            <a class="btn blue btn-sm save-update" type="button">'. PpB2bAdminVftranslate::getKeyvalueFromKeyname('oktitle') .'</a>
                                                            <a class="btn red btn-sm cancel-update" type="button">'. PpB2bAdminVftranslate::getKeyvalueFromKeyname('canceltitle') .'</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>';
        return $notetpl;
    }

    private static function Get_All_Notes_Arr() {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('vfcorecrmnotesm');
        $ret = $classname::find(array(
                    "limit" => self::$limit,
                    "order" => "dt_created DESC"
                ))->toArray();
        return $ret;
    }

    public static function Get_Notes_Badge_Digit() {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('vfcorecrmnotesbadgecountm');
        $ret = $classname::find(array())->toArray();
        return count($ret);
    }

    public static function Get_Notes() {
        $di = \Phalcon\DI::getDefault();
        $notes = self::Get_All_Notes_Arr();
        if (empty($notes)) {
            return '';
        } else {
            $ret = '';
            foreach ($notes as $key => $value) {
                $id = $value['fknote'];
                $usercreatedid = $value['fkusercreated'];
                $img = $di->controller_params_array['custompath'] . 'images/users/' . $usercreatedid . '-avatar.jpg';
                $from = $value['fullname'];
                $timestamp = \MyCustomHelperDateTools::getDateDayMonthYearHourMin(explode('.', $value['dt_created'])[0]);
                $note = $value['note'];
                $status = boolval($value['done']);
                $ret .= self::Get_Single_Note_Tpl($id, $img, $from, $timestamp, $note, $status);
            }
            return $ret;
        }
    }

    public static function Save_Note() {
        $di = \Phalcon\DI::getDefault();
        $note = $di->controller_params_array['glb_request']['note'];
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmnotes');
        $record = new $classname();
        $record->title = $note;
        $record->bldisabled = 0;
        $record->blpublished = 1;
        $record->mykatastima = \CHCrmCParams::My_get_mykatastima();
        if ($record->save() == false) {
            return array(
                'status' => '0',
                'status_code' => 'DL1010',
                'status_msg' => ''
            );
        } else {
            $id = $record->id;
            $timestamp = \MyCustomHelperDateTools::getDateDayMonthYearHourMin($record->getDt_created());
            $user = \MyCustomHelperSession::My_get_param_val_jsonrowuser_array();
            $usercreatedid = $user['id'];
            $from = $user['fname'] . ' ' . $user['lname'];
            $img = $di->controller_params_array['custompath'] . 'images/users/' . $usercreatedid . '-avatar.jpg';
            return array(
                'status' => '1',
                'newnote' => self::Get_Single_Note_Tpl($id, $img, $from, $timestamp, $note, false),
                'newbadge' => self::Get_Notes_Badge_Digit()
            );
        }
    }

    public static function Update_Note() {
        $di = \Phalcon\DI::getDefault();
        $request = \MyCustomHelperCoreDi::Get_Glb_request();
        if(isset($request['id'])) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmnotes');
            $record = $classname::findFirst(array(
                "conditions" => "id = :id:",
                "bind" => array(
                    "id" => $request['id']
                )
            ));
            $record->setBldone(1);
            if($record->save() == false) {
                return array(
                    'status' => 0,
                    'status_code' => 'DL1020',
                    'status_msg' => ''
                );
            } else {
                return array(
                    'status' => 1,
                );
            }
        } else {
            return array(
                'status' => 0,
                'status_code' => 'DL1015',
                'status_msg' => ''
            );
        }
    }
}