<?php

namespace B2b\Models\CoreModels;

class DlB2bAdminMetronic454PluginDeleteRecord extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'deleterecordv100';
    protected static $deleteHelperPage = 'inner_home_crm_delete_record';
    protected static $postPluginDeleteSingleRecordAction = 'deletesinglerecord';
    protected static $singleRecordDelete = 'deletesinglerecord';
    protected static $multipleRecordDelete = 'deletemultiplerecords';

    public static function Get_Post_Plugin_Delete_Single_Record_Action() {
        return self::$postPluginDeleteSingleRecordAction;
    }

    public static function Get_Delete_Record_Helper_Page() {
        return self::$deleteHelperPage;
    }

    public static function Delete() {
        $di = \Phalcon\DI::getDefault();
        $mode = $di->controller_params_array[\CHCrmCParams::$keyarrDeleteRecord]['Data']['mode'];
        if ($mode === self::$singleRecordDelete) {
            self::Delete_Single();
        } else if ($mode === self::$multipleRecordDelete) {
            self::Delete_Multiple();
        } else {
            $di->controller_params_array['jsondata'] = json_encode([
                'success' => 0,
                'msg' => PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'couldnotdeletetitle') . '<br>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'codetitle') . ': DL1700',
                'pk' => ''
            ]);
        }
    }

    public static function Make_keyarrDeleteRecord() {
        self::Get_Delete_Data();
        self::Delete();
    }

    protected static function Get_Delete_Data() {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $mode = $cpa['param1'];
        if ($mode === self::$singleRecordDelete) {
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['mode'] = $cpa['param1'];
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['lng'] = $cpa['param3'];
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['id'] = $cpa['param4'];
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['mclassname'] = $cpa['param5'];
        }
        elseif ($mode === self::$multipleRecordDelete) {
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['mode'] = $cpa['param1'];
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['lng'] = $cpa['param3'];
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['ids'] = [];
            $cpa[\CHCrmCParams::$keyarrDeleteRecord]['Data']['mclassname'] = $cpa['param5'];
        }
    }

    protected static function Check_If_Deleted($record = '') {
        return $record->getBldeleted() == 1 ? true : false;
    }

    protected static function Get_Classname($mclass = '') {
        $di = \Phalcon\DI::getDefault();
        $mclasses = $di->controller_params_array[\CHCrmCParams::$keyarrDeleteRecord]['mclasses'];
        return $mclass !== '' ? $mclasses[$mclass] : 'nomclass';
    }

    protected static function Get_Record($classname = '', $id = '') {
        $di = \Phalcon\DI::getDefault();
        $record = \MyCustomHelperClassTools::My_Core_Get_Classname($classname);
        if (class_exists($record)) {
            $arrqry = [
                "conditions" => "id = :id:",
                "bind" => [
                    "id" => $id
                ]
            ];
            return $record::findFirst($arrqry);
        } else {
            $di->controller_params_array['jsondata'] = json_encode([
                'success' => 0,
                'msg' => PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'couldnotdeletetitle') . '<br>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'codetitle') . ': DL1710',
                'pk' => ''
            ]);
        }
    }

    protected static function Delete_Record() {
        
    }

    protected static function Delete_Single() {
        $di = \Phalcon\DI::getDefault();
        $data = $di->controller_params_array[\CHCrmCParams::$keyarrDeleteRecord]['Data'];
        $classname = self::Get_Classname($data['mclassname']);
        $record = self::Get_Record($classname, (int) $data['id']);
        if (!self::Check_If_Deleted($record)) {
            if ($record->delete()) {
                $di->controller_params_array['jsondata'] = json_encode([
                    'success' => 1,
                    'msg' => PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'deleteoktitle'),
                    'pk' => ''
                ]);
            } else {
                $di->controller_params_array['jsondata'] = json_encode([
                    'success' => 0,
                    'msg' => PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'couldnotdeletetitle') . '<br>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'codetitle') . ': DL1720',
                    'pk' => ''
                ]);
            }
        } else {
            $di->controller_params_array['jsondata'] = json_encode([
                'success' => 0,
                'msg' => PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'couldnotdeletetitle') . '<br>' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'codetitle') . ': DL1715',
                'pk' => ''
            ]);
        }
    }

    protected static function Delete_Multiple() {
        
    }

    public static function Get_Delete_Confirmation_Template() {
        $tpl = '
                <div class="popover confirmation">
                    <div class="arrow"></div>
                    <h3 class="popover-title text-center"></h3> 
                        <div class="popover-content text-center"> 
                        <div class="btn-group"> 
                            <a class="btn" data-apply="confirmation"></a> 
                            <a class="btn" data-dismiss="confirmation"></a>  
                        </div>
                    </div>
                </div>
               ';
        return $tpl;
    }

    public static function Get_Delete_Confirmation_Title() {
        return PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'deletetitle');
    }

    public static function Get_Delete_Confirmation_Button_Ok_Class() {
        return 'btn-xs red-flamingo btn-outline';
    }

    public static function Get_Delete_Confirmation_Button_Cancel_Class() {
        return 'btn-xs green-meadow btn-outline';
    }

    public static function Get_Delete_Confirmation_Button_Ok_Icon() {
        return 'fa fa-trash';
    }

    public static function Get_Delete_Confirmation_Button_Cancel_Icon() {
        return 'glyphicon glyphicon-remove';
    }

    public static function Get_Delete_Confirmation_Button_Ok_Label() {
        return PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'oktitle');
        ;
    }

    public static function Get_Delete_Confirmation_Button_Cancel_Label() {
        return PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, 'canceltitle');
    }

}
