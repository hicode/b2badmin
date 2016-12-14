<?php

namespace B2b\Models\CoreModels;

// DLS20161111
class DlB2bAdminFullCalendar extends PpB2bAdminMetronic454PluginFullCalendar {

    private static $createEventModalId = "calendar-create-event-main-modal";
    // DLS20161012
    private static $createEventPortletId = "calendar-create-event-main-portlet";
    private static $createEventPortletParentId = "calendar-create-event-main-portlet-parent";
    private static $newEventMode = "portlet"; // modal, portlet  ( default: portlet )
    // DLE20161012
    private static $createEventModalAddMembersId = "calendar-create-event-main-modal-add-members";
    private static $createEventModalAddTrainersId = "calendar-create-event-main-modal-add-trainers";
    private static $createEventFromId = "calendar-create-event-main-form";
    private static $createEventModalQuickTplsId = "calendar-create-event-main-modal-quick-tpls";
    private static $createEventModalHelperPage = "inner_home_crm_event_modal_contents";
    private static $createEventModalAddMembersHelperPage = "inner_home_crm_event_modal_add_members";
    private static $createEventModalQuickTplsHelperPage = "inner_home_crm_event_modal_quick_tpls";
    private static $createEventModalAddTrainersHelperPage = "inner_home_crm_event_modal_add_trainers";
    private static $formGroupDivReiquiredTitltePlaceholder = "{FORM-GROUP-REQUIRED-TITLE}";
    private static $formGroupDivContentPlaceholder = "{FORM-GROUP-CONTENT}";

    // DLS20161014

    private static function Save_Customers_For_Event($event = [], $customers = []) {
        if (!empty($event) && !empty($customers)) {
            foreach ($customers as $key => $value) {
                $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventcustomers');
                $record = new $classname();
                $record->setMykatastima(\CHCrmCParams::My_get_mykatastima());
                $record->setFkcorecrmcustomer($value['id']);
                $record->setFkcorecrmevent($event->getId());
                $record->setBlpublished(1);
                if ($record->save() == false) {
                    error_log("Fatal Custom Error: Unable to save new customer for event");
                }
            }
        }
    }

    private static function Save_Trainers_For_Event($event = [], $trainers = []) {
        if (!empty($event) && !empty($trainers)) {
            foreach ($trainers as $key => $value) {
                $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventtrainers');
                $record = new $classname();
                $record->setMykatastima(\CHCrmCParams::My_get_mykatastima());
                $record->setBldeleted(0);
                $record->setBldisabled(0);
                $record->setBlpublished(1);
                $record->setFkcorecrmtrainer($value['id']);
                $record->setFkcorecrmevent($event->getId());
                if ($record->save() == false) {
                    error_log("Fatal Custom Error: Unable to save new customer for event");
                }
            }
        }
    }

    private static function Save_Repeat_Event_Single_Instance() {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventrepeat');
        $record = new $classname();
        $record->setMykatastima(\CHCrmCParams::My_get_mykatastima());
        $record->setBldeleted(0);
        $record->setBldisabled(0);
        $record->setBlpublished(1);
        if ($record->save() == false) {
            return "0";
        } else {
            return $record;
        }
    }

    private static function Save_Single_Event_Instance($data = [], $log = false) {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmevent');
        $record = new $classname();
        $data['blpublished'] = 1;
        foreach ($data as $key => $value) {
            /*
              PPS{20161117}
             */
            $dbproperty = 'set' . ucfirst($key);
            $record->$dbproperty($value);
            //$record->$key = $value;
            /*
              PPE{20161117}
             */
        }
        if ($record->save() == false) {
            // TODO : Na kanw troubleshoot se peritpwsi pou den swthei to event
            if (!$log) {
                echo json_encode([
                    'status' => '0',
                    'status_code' => 'DL1200',
                    'status_message' => ''
                ]);
            } else {
                error_log('Fatal Error Custom: Error during save event. STATUS_CODE: DL1200');
                return "-1";
            }
        } else {
            return $record;
        }
    }

    private static function Save_Single_Event() {
        $di = \Phalcon\DI::getDefault();
        $data = $di->controller_params_array['glb_request']['data'];
        $data['dtstart'] = str_replace('/', '-', $data['dtstart']);
        $data['dtend'] = str_replace('/', '-', $data['dtend']);
        $data['dtstart'] = date('Y-m-d', strtotime($data['dtstart']));
        $data['dtend'] = date('Y-m-d', strtotime($data['dtend']));
        $data['dtstart'] .= ' ' . $data['timestart'];
        $data['dtend'] .= ' ' . $data['timeend'];
        $data['mykatastima'] = \CHCrmCParams::My_get_mykatastima();
        $trainers = $data['trainers'];
        $customers = $data['customers'];
        unset($data['mode']);
        unset($data['trainers']);
        unset($data['customers']);
        $event = self::Save_Single_Event_Instance($data);
        if ($event != '-1') {
            self::Save_Customers_For_Event($event, $customers);
            self::Save_Trainers_For_Event($event, $trainers);
            echo json_encode([
                'status' => '1'
            ]);
        } else {
            // TODO : Na kanw troubleshoot se peritpwsi pou den swthei to event
            echo json_encode([
                'status' => '0',
                'status_code' => 'DL1205',
                'status_message' => ''
            ]);
        }
    }

    private static function Save_Repeat_Event() {
        $di = \Phalcon\DI::getDefault();
        $data = $di->controller_params_array['glb_request']['data'];
        $trainers = $data['trainers'];
        $customers = $data['customers'];
        $days = [];
        foreach ($data['daystorepeat'] as $key => $value) {
            $tmp = str_replace('/', '-', $value);
            $tmp = date('Y-m-d', strtotime($value));
            $days[$key]['dtstart'] = $tmp . ' ' . $data['timestart'];
            $days[$key]['dtend'] = $tmp . ' ' . $data['timeend'];
        }
        $status = true;
        unset($data['mode']);
        unset($data['trainers']);
        unset($data['customers']);
        unset($data['daystorepeat']);

        $repeatevent = self::Save_Repeat_Event_Single_Instance();

        foreach ($days as $key => $value) {
            $data['dtstart'] = $value['dtstart'];
            $data['dtend'] = $value['dtend'];
            $data['fkrepeat'] = $repeatevent->getId();
            $event = self::Save_Single_Event_Instance($data, true);
            if ($event != '-1') {
                self::Save_Customers_For_Event($event, $customers);
                self::Save_Trainers_For_Event($event, $trainers);
            } else {
                error_log('Fatal Error Custom: Error during save event from repeat. STATUS_CODE: DL1210');
                $status = false;
            }
            self::Save_Customers_For_Event($event, $customers);
            self::Save_Trainers_For_Event($event, $trainers);
        }

        if ($status) {
            echo json_encode([
                'status' => '1'
            ]);
        } else {
            echo json_encode([
                'status' => '1',
                'status_code' => 'DL1215',
                'status_message' => ''
            ]);
        }
    }

    // TODO: Askopi xrisi treiwn synartisewn, na to ftiaksw se mia
    public static function Get_Edit_Event_Data_Main() {
        $di = \Phalcon\DI::getDefault();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmevent');
        $id = $di->controller_params_array['param4'];
        $conditions = "id = :id: AND bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima:";
        $bind = [
            "id" => $id,
            "bldeleted" => 0,
            "bldisabled" => 0,
            "blpublished" => 1,
            "mykatastima" => \CHCrmCParams::My_get_mykatastima()
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $ret = $classname::findFirst($qryarr)->toArray();
        return $ret;
    }

    public static function Get_Customers_HTML_For_Event($id = '') {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('vfcrmcustomerevent');
        $conditions = "fkcorecrmeventfkcorecrmeventcustomers = :fkcorecrmeventfkcorecrmeventcustomers: AND bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima:";
        $bind = [
            "fkcorecrmeventfkcorecrmeventcustomers" => $id,
            "bldeleted" => 0,
            "bldisabled" => 0,
            "blpublished" => 1,
            "mykatastima" => \CHCrmCParams::My_get_mykatastima()
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $tmp = $classname::find($qryarr)->toArray();
        $ret = '';
        if (is_array($tmp) && !empty($tmp)) {
            foreach ($tmp as $key => $value) {
                $ret .= '<div class="customer">' . $value['customerfull'] . '</div>';
            }
        }
        return $ret;
    }

    public static function Get_Trainers_HTML_For_Event($id = '') {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('vfcrmtrainerevent');
        $conditions = "fkcorecrmeventfkcorecrmeventtrainers = :fkcorecrmeventfkcorecrmeventtrainers: AND bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima:";
        $bind = [
            "fkcorecrmeventfkcorecrmeventtrainers" => $id,
            "bldeleted" => 0,
            "bldisabled" => 0,
            "blpublished" => 1,
            "mykatastima" => \CHCrmCParams::My_get_mykatastima()
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $tmp = $classname::find($qryarr)->toArray();
        $ret = '';
        if (is_array($tmp) && !empty($tmp)) {
            foreach ($tmp as $key => $value) {
                $ret .= '<div class="trainer">' . $value['trainerfull'] . '</div>';
            }
        }
        return $ret;
    }

    private static function Get_Edit_Event_Data_Customers() {
        $di = \Phalcon\DI::getDefault();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventcustomers');
        $id = $di->controller_params_array['param4'];
        $conditions = "fkcorecrmevent = :fkcorecrmevent: AND bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima:";
        $bind = [
            "fkcorecrmevent" => $id,
            "bldeleted" => 0,
            "bldisabled" => 0,
            "blpublished" => 1,
            "mykatastima" => \CHCrmCParams::My_get_mykatastima()
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $tmp = $classname::find($qryarr)->toArray();
        $ret = [];
        foreach ($tmp as $key => $value) {
            $ret[$value['fkcorecrmcustomer']] = $value['fkcorecrmcustomer'];
        }
        return $ret;
    }

    private static function Get_Edit_Event_Data_Trainers($tid = '') {
        $di = \Phalcon\DI::getDefault();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventtrainers');
        $id = $di->controller_params_array['param4'];
        if ($tid != '') {
            $id = $tid;
        }
        $conditions = "fkcorecrmevent = :fkcorecrmevent: AND bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima:";
        $bind = [
            "fkcorecrmevent" => $id,
            "bldeleted" => 0,
            "bldisabled" => 0,
            "blpublished" => 1,
            "mykatastima" => \CHCrmCParams::My_get_mykatastima()
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $tmp = $classname::find($qryarr)->toArray();
        $ret = [];
        foreach ($tmp as $key => $value) {
            $ret[$value['fkcorecrmtrainer']] = $value['fkcorecrmtrainer'];
        }
        return $ret;
    }

    private static function Get_Edit_Event_Data() {
        $di = \Phalcon\DI::getDefault();
        $main = self::Get_Edit_Event_Data_Main();
        $customers = self::Get_Edit_Event_Data_Customers();
        $trainers = self::Get_Edit_Event_Data_Trainers();
        return [
            'event' => $main,
            'customers' => $customers,
            'trainers' => $trainers
        ];
    }

    private static function Get_Fixed_Request_Data() {
        $di = \Phalcon\DI::getDefault();
        $data = $di->controller_params_array['glb_request']['data'];
        $customers = [];
        $trainers = [];
        if (isset($data['customers']) && !empty($data['customers'])) {
            foreach ($data['customers'] as $key => $value) {
                $customers[$value['id']] = $value['id'];
            }
            unset($data['customers']);
        }
        if (isset($data['trainers']) && !empty($data['trainers'])) {
            foreach ($data['trainers'] as $key => $value) {
                $trainers[$value['id']] = $value['id'];
            }
            unset($data['trainers']);
        }
        if (isset($data['mode'])) {
            unset($data['mode']);
        }
        $tmpdtstart = explode('/', $data['dtstart']);
        $tmpdtend = explode('/', $data['dtend']);
        $data['dtstart'] = $tmpdtstart[2] . '-' . $tmpdtstart[1] . '-' . $tmpdtstart[0] . ' ' . $data['timestart'] . ':00';
        $data['dtend'] = $tmpdtend[2] . '-' . $tmpdtend[1] . '-' . $tmpdtend[0] . ' ' . $data['timeend'] . ':00';
        return [
            'event' => $data,
            'customers' => $customers,
            'trainers' => $trainers
        ];
    }

    private static function Fix_Event_Main_Data($old, $new) {
        $di = \Phalcon\DI::getDefault();
        $tmp = [];
        $diff = [];
        foreach ($new as $key => $value) {
            $tmp[$key] = $old[$key];
        }
        $diff = array_diff($new, $tmp);
        if (!empty($diff)) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmevent');
            $conditions = "id = :id:";
            $bind = [
                "id" => $di->controller_params_array['param4']
            ];
            $qryarr = [
                "conditions" => $conditions,
                "bind" => $bind
            ];
            $record = $classname::findFirst($qryarr);
            foreach ($diff as $field => $fieldVal) {
                $tfield = 'set' . ucfirst($field);
                $record->{$tfield}($fieldVal);
            }
            $retflag = true;
            if ($record->save() == false) {
                $retflag = false;
            }
            return $retflag;
        } else {
            return true;
        }
    }

    private static function Fix_Event_Customers_Data($old, $new) {
        $di = \Phalcon\DI::getDefault();
        $diff1 = array_diff($old, $new);
        $diff2 = array_diff($new, $old);
        $diff = array_merge($diff1, $diff2);
        $remove = [];
        $add = [];
        $flag = true;
        foreach ($diff as $key => $value) {
            if (array_key_exists($value, $old)) {
                $remove[] = [
                    'fkcorecrmcustomer' => $value,
                    'fkcorecrmevent' => $di->controller_params_array['param4'],
                ];
            } else {
                $add[] = [
                    'fkcorecrmevent' => $di->controller_params_array['param4'],
                    'fkcorecrmcustomer' => $value,
                    'blpublished' => 1,
                    'mykatastima' => \CHCrmCParams::My_get_mykatastima()
                ];
            }
        }
        // Delete participant customers
        foreach ($remove as $key => $value) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventcustomers');
            $conditions = "fkcorecrmevent = :fkcorecrmevent: AND fkcorecrmcustomer = :fkcorecrmcustomer: AND mykatastima = :mykatastima:";
            $bind = [
                "fkcorecrmevent" => $value['fkcorecrmevent'],
                "fkcorecrmcustomer" => $value['fkcorecrmcustomer'],
                "mykatastima" => \CHCrmCParams::My_get_mykatastima()
            ];
            $qryarr = [
                "conditions" => $conditions,
                "bind" => $bind
            ];
            $record = $classname::findFirst($qryarr);
            if ($record->delete() == false) {
                $flag = false;
            }
        }
        // Add participant customers
        foreach ($add as $key => $value) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventcustomers');
            $newRecord = new $classname();
            foreach ($value as $field => $fieldVal) {
                $tfield = 'set' . ucfirst($field);
                $newRecord->{$tfield}($fieldVal);
            }
            if ($newRecord->save() == false) {
                $flag = false;
            }
        }
        return $flag;
    }

    private static function Fix_Event_Trainers_Data($old, $new) {
        $di = \Phalcon\DI::getDefault();
        $diff1 = array_diff($old, $new);
        $diff2 = array_diff($new, $old);
        $diff = array_merge($diff1, $diff2);
        $remove = [];
        $add = [];
        $flag = true;
        foreach ($diff as $key => $value) {
            if (array_key_exists($value, $old)) {
                $remove[] = [
                    'fkcorecrmtrainer' => $value,
                    'fkcorecrmevent' => $di->controller_params_array['param4'],
                ];
            } else {
                $add[] = [
                    'fkcorecrmevent' => $di->controller_params_array['param4'],
                    'fkcorecrmtrainer' => $value,
                    'blpublished' => 1,
                    'mykatastima' => \CHCrmCParams::My_get_mykatastima()
                ];
            }
        }
        // Delete participant customers
        foreach ($remove as $key => $value) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventtrainers');
            $conditions = "fkcorecrmevent = :fkcorecrmevent: AND fkcorecrmtrainer = :fkcorecrmtrainer: AND mykatastima = :mykatastima:";
            $bind = [
                "fkcorecrmevent" => $value['fkcorecrmevent'],
                "fkcorecrmtrainer" => $value['fkcorecrmtrainer'],
                "mykatastima" => \CHCrmCParams::My_get_mykatastima()
            ];
            $qryarr = [
                "conditions" => $conditions,
                "bind" => $bind
            ];
            $record = $classname::findFirst($qryarr);
            if ($record->delete() == false) {
                $flag = false;
            }
        }
        // Add participant customers
        foreach ($add as $key => $value) {
            $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventtrainers');
            $newRecord = new $classname();
            foreach ($value as $field => $fieldVal) {
                $tfield = 'set' . ucfirst($field);
                $newRecord->{$tfield}($fieldVal);
            }
            if ($newRecord->save() == false) {
                $flag = false;
            }
        }
        return $flag;
    }

    private static function Get_Event_Status_Held_Id_By_Statustitle() {
        $ret = 0;
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmeventstatus');
        $conditions = "mykatastima = :mykatastima: AND statustitle = :statustitle:";
        $bind = [
            "statustitle" => 'eventheld',
            "mykatastima" => \CHCrmCParams::My_get_mykatastima()
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $record = $classname::findFirst($qryarr)->toArray();
        if (is_array($record) && !empty($record)) {
            $ret = $record['id'];
        }
        return $ret;
    }

    public static function Check_If_Is_Held($id) {
        $heldID = self::Get_Event_Status_Held_Id_By_Statustitle();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmevent');
        $conditions = "id = :id:";
        $bind = [
            "id" => $id,
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $record = $classname::findFirst($qryarr)->toArray();
        $currHeldID = $record['fkstatus'];
        if ($heldID == $currHeldID) {
            return true;
        } else {
            return false;
        }
    }

    public static function Complete_Event() {
        $di = \Phalcon\DI::getDefault();
        $id = $di->controller_params_array['param4'];
        $heldID = self::Get_Event_Status_Held_Id_By_Statustitle();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmevent');
        $conditions = "id = :id:";
        $bind = [
            "id" => $id,
        ];
        $qryarr = [
            "conditions" => $conditions,
            "bind" => $bind
        ];
        $record = $classname::findFirst($qryarr);
        $record->setFkstatus($heldID);
        $success = 1;
        $code = '';
        if ($record->save() == false) {
            $success = 0;
            $code = 'DL2010';
        }
        return [
            'status' => $success,
            'status_code' => $code
        ];
    }

    public static function Edit_Event() {
        $di = \Phalcon\DI::getDefault();
        $oldEvent = self::Get_Edit_Event_Data();
        $newEvent = self::Get_Fixed_Request_Data();
        $mainChanges = self::Fix_Event_Main_Data($oldEvent['event'], $newEvent['event']);
        $customerChanges = self::Fix_Event_Customers_Data($oldEvent['customers'], $newEvent['customers']);
        $trainerChanges = self::Fix_Event_Trainers_Data($oldEvent['trainers'], $newEvent['trainers']);
        $success = 1;
        $code = '';
        if (!$mainChanges || !$customerChanges || !$trainerChanges) {
            $success = 0;
            $code = 'DL2000';
        }
        return [
            'status' => $success,
            'status_code' => $code
        ];
    }

    public static function Save_Event() {
        $di = \Phalcon\DI::getDefault();
        $mode = $di->controller_params_array['glb_request']['data']['mode'];
        if ($mode === 'single') {
            self::Save_Single_Event();
        } else if ($mode === 'repeat') {
            self::Save_Repeat_Event();
        } else {
            // TODO: na petaksw error edw giati den exw lavei mode sto request
        }
    }

    // DLE20161014

    public static function Get_Event_Status_HTML() {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('Coreeventstatus', 'production');
        $data = $classname::find(array(
                    "order" => "id asc"
                ))->toArray();
    }

    public static function Get_Event_Status_Default() {
        
    }

    public static function Get_Form_Group_DIV($required = false, $titlelength = 4, $contentlength = 8, $classlabel = '', $classcontent = '', $mainstyle = '', $classmain = '') {
        if (($titlelength + $contentlength) != 12) {
            $titlelength = 4;
            $contentlength = 8;
        }
        return '<div class="form-group ' . $classmain . '" style="' . $mainstyle . '">
                    <div class="row">' . ($titlelength > 0 ?
                        '<label class="control-label col-md-' . $titlelength . ' ' . $classlabel . '">' . self::$formGroupDivReiquiredTitltePlaceholder .
                        ( $required ? '<span class="required"> * </span>' : '' ) .
                        '</label>' : '') . ($contentlength > 0 ?
                        '<div class="col-md-' . $contentlength . ' ' . $classcontent . '">' .
                        self::$formGroupDivContentPlaceholder .
                        '</div>' : '') .
                '</div>
                </div>';
    }

    public static function Get_Field_Full_Data($field = null, $keyarr = null) {
        $di = \Phalcon\DI::getDefault();
        return isset($di->controller_params_array[$keyarr]['DlCommonFields'][$field]) ? $di->controller_params_array[$keyarr]['DlCommonFields'][$field] : array();
    }

    public static function Get_Field_Datasource($field = null, $keyarr = null) {
        $di = \Phalcon\DI::getDefault();
        return isset($di->controller_params_array[$keyarr]['DlCommonFields'][$field]) ? $di->controller_params_array[$keyarr]['DlCommonFields'][$field]['datasource'] : array();
    }

    public static function Get_Form_Div_Title_Placeholder() {
        return self::$formGroupDivReiquiredTitltePlaceholder;
    }

    public static function Get_Form_Div_Content_Placeholder() {
        return self::$formGroupDivContentPlaceholder;
    }

    public static function Get_Create_Event_Modal_ID() {
        return self::$createEventModalId;
    }

    // DLS20161012
    public static function Get_Create_Event_Portlet_ID() {
        return self::$createEventPortletId;
    }

    public static function Get_Create_Event_Portlet_Parent_ID() {
        return self::$createEventPortletParentId;
    }

    public static function Get_Create_Event_Add_Mode() {
        $mode = self::$newEventMode;
        if ($mode === 'portlet' || $mode === 'modal') {
            return $mode;
        } else {
            return 'portlet';
        }
    }

    // DLE20161012

    public static function Get_Create_Event_Modal_Add_Member_ID() {
        return self::$createEventModalAddMembersId;
    }

    public static function Get_Create_Event_Modal_Add_Trainer_ID() {
        return self::$createEventModalAddTrainersId;
    }

    public static function Get_Create_Event_Modal_Helper_Page_Name() {
        return self::$createEventModalHelperPage;
    }

    public static function Get_Create_Event_Modal_Add_Members_Helper_Page_Name() {
        return self::$createEventModalAddMembersHelperPage;
    }

    public static function Get_Create_Event_Modal_Add_Trainers_Helper_Page_Name() {
        return self::$createEventModalAddTrainersHelperPage;
    }

    public static function Get_Create_Event_Modal_Quick_Tpls_Helper_Page_Name() {
        return self::$createEventModalQuickTplsHelperPage;
    }

    public static function Get_Create_Event_Form_ID() {
        return self::$createEventFromId;
    }

    // DLS20161012
    public static function Get_Create_Event_Portlet() {
        $di = \Phalcon\DI::getDefault();
        $portlet = '
            <div id="' . self::Get_Create_Event_Portlet_Parent_ID() . '" class="row" style="display: none;">
                <div id="parentdata" class="col-md-12 col-sm-12">                    
                </div>
            </div>
        ';
        return $portlet;
    }

    // DLE20161012

    public static function Get_Select_List_HTML($field = null, $selected = '') {
        if ($field != '' && $field != null) {
            $ret = '<select ';
            foreach ($field['attrs'] as $key => $value) {
                $ret .= $key . '="' . $value . '" ';
            }
            $ret .= '>';
            $opts = '';
            if ($selected != '' && $selected != null) {
                foreach (PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($field['datasource']) as $key => $value) {
                    $color = isset($field['general']['colored']) && $field['general']['colored'] == '1' ? $value[$field['general']['colour']] : '';
                    if ($selected == $value[$field['datasource']['showval']]) {
                        $opts .= '<option selected="selected" data-id="' . $value['id'] . '" style="color: ' . $color . ';">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, $value[$field['datasource']['showval']]) . '</option>';
                    } else {
                        $opts .= '<option data-id="' . $value['id'] . '" style="color: ' . $color . ';">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, $value[$field['datasource']['showval']]) . '</option>';
                    }
                }
                return $ret .= $opts . '</select>';
            } else {
                foreach (PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($field['datasource']) as $key => $value) {
                    $color = isset($field['general']['colored']) && $field['general']['colored'] == '1' ? $value[$field['general']['colour']] : '';
                    $opts .= '<option data-id="' . $value['id'] . '" style="color: ' . $color . ';">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, $value[$field['datasource']['showval']]) . '</option>';
                }
                return $ret .= '<option data-id="-1" selected="selected">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, 'noselectedtitle') . '</option>' . $opts . '</select>';
            }
            /* foreach (PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($field['datasource']) as $key => $value) {
              $color = isset($field['general']['colored']) && $field['general']['colored'] == '1' ? $value[$field['general']['colour']] : '';
              if ($selected == $value[$field['datasource']['showval']]) {
              $opts .= '<option selected="selected" data-id="' . $value['id'] . '" style="color: ' . $color . ';">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, $value[$field['datasource']['showval']]) . '</option>';
              } else {
              $opts .= '<option data-id="' . $value['id'] . '" style="color: ' . $color . ';">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, $value[$field['datasource']['showval']]) . '</option>';
              }
              } */
        } else {
            return '';
        }
    }

    public static function Get_Create_Event_Modal_Quick_Tpls_ID() {
        return self::$createEventModalQuickTplsId;
    }

    public static function Get_Event_Quick_Tpls_Tpl() {
        return <<< EOD
            <div class="event-quick-tpls-md hidden text-center" style="z-index:100; width: 100%;"> 
                <a class="event-qtpls" data-tpl="addmembers" title="Add Person" style="margin:3px;padding:2px;"> 
                    <i class="fa fa-user-plus" style="color:white;"></i> 
                </a> 
                <a class="event-qtpls" data-tpl="copy" title="Copy" style="margin:3px;padding:2px;"> 
                    <i class="fa fa-copy" style="color:white;"></i> 
                </a> 
                <a class="event-qtpls" data-tpl="more" title="More" style="margin:3px;padding:2px;"> 
                    <i class="fa fa-ellipsis-h" style="color:white;"></i> 
                </a> 
                <a class="event-qtpls" data-tpl="delete" title="Delete Event" style="margin:3px;padding:2px;"> 
                    <span class="glyphicon glyphicon-trash" style="color:white;"></span> 
                </a> 
            </div> 
            <div class="event-quick-tpls-w hidden text-center" style="z-index:100; width: 100%;"> 
                <a class="event-qtpls" data-tpl="more" title="More" style="margin:3px;padding:2px;"> 
                    <i class="fa fa-ellipsis-h" style="color:white;"></i> 
                </a> 
            </div>
EOD;
    }

}
