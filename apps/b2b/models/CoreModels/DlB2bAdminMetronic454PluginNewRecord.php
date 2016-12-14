<?php
// DLS20161111
namespace B2b\Models\CoreModels;

class DlB2bAdminMetronic454PluginNewRecord extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'newrecordv100';
    public static $portletBodyPlaceholder = '{NEW_RECORD_PORTLET_BODY_PLACEHOLDER}';
    protected static $postPlugin = 'plugin';
    protected static $postPluginName = 'newrecord';
    protected static $postPluginSaveAction = 'save';
    
    // TODO: Na ta ferw apo allou, sql i js ( typopohsh )
    // TODO: Na kanw to idio kai gia tis sinartiseis tou
    protected static $dosesTbodyContnetPlaceholder = '{DOSES_TBODY_CONTENT}';
    protected static $dosesRowNumPlaceholder = '{ROW_DOSE_NUM}';
    protected static $dosesRowDatePlaceholder = '{ROW_DOSE_DATE}';
    protected static $dosesRowCostPlaceholder = '{ROW_DOSE_COST}';
    protected static $dosesRowDateDbPlaceholder = '{ROW_DOSE_DATE_DB}';
    
    // TODO: Na to ferw apo allou ( di )
    protected static $maxDoses = 12;
    
    public static function Get_Post_Param1_Key_inner_home_crm_members_new() {
        return 'inner_home_crm_members_new';
    }

    public static function Get_Post_Plugin() {
        return self::$postPlugin;
    }

    public static function Get_Post_PluginName() {
        return self::$postPluginName;
    }

    public static function Get_Post_PluginSaveAction() {
        return self::$postPluginSaveAction;
    }

    public static function Get_Doses_Tbody_Placeholder() {
        return self::$dosesTbodyContnetPlaceholder;
    }

    public static function Get_Dose_Row_Num_Placeholder() {
        return self::$dosesRowNumPlaceholder;
    }

    public static function Get_Dose_Row_Date_Placeholder() {
        return self::$dosesRowDatePlaceholder;
    }

    public static function Get_Dose_Row_Date_Db_Placeholder() {
        return self::$dosesRowDateDbPlaceholder;
    }

    public static function Get_Dose_Row_Cost_Placeholder() {
        return self::$dosesRowCostPlaceholder;
    }

    public static function Save() {
        $di = \Phalcon\DI::getDefault();
        $data = $di->controller_params_array['glb_request']['newrecorddata'];
        if (isset($di->controller_params_array['glb_request']['newrecorddata']) && isset($di->controller_params_array['glb_request']['newrecorddata']['table'])) {
            $di->controller_params_array['Save_Data'] = $data;
            if (isset($data['extra'])) {
                $di->controller_params_array['Save_Extra_Data'] = $data['extra'];
                unset($di->controller_params_array['Save_Data']['extra']);
            }
            unset($di->controller_params_array['glb_request']['newrecorddata']);
            self::Proceed_Save();
            return $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['jsonarr'];
        } else {
            return [
                'success' => 0,
                'msg' => 'DL1515',
                'pk' => ''
            ];
        }
    }

    protected static function Proceed_Save() {
        $di = \Phalcon\DI::getDefault();
        $di->controller_params_array['Save_Data']['blpublished'] = 1;
        $di->controller_params_array['Save_Data']['mykatastima'] = \CHCrmCParams::My_get_mykatastima();
        $di->controller_params_array['Save_Data_Table'] = $di->controller_params_array['Save_Data']['table'];
        $di->controller_params_array['Save_Data_Table_Pk'] = $di->controller_params_array['Save_Data']['tablepk'];
        unset($di->controller_params_array['Save_Data']['table']);
        unset($di->controller_params_array['Save_Data']['tablepk']);

        if (isset($di->controller_params_array['Save_Extra_Data'])) {
            $di->controller_params_array['Save_Extra_Data_Table'] = $di->controller_params_array['Save_Extra_Data']['table'];
            $di->controller_params_array['Save_Extra_Data_Table_Pk'] = $di->controller_params_array['Save_Extra_Data']['tablepk'];
            unset($di->controller_params_array['Save_Extra_Data']['table']);
            unset($di->controller_params_array['Save_Extra_Data']['tablepk']);
        }

        self::Fin_Save();
    }

    protected static function Fin_Save() {
        $di = \Phalcon\DI::getDefault();
        if (isset($di->controller_params_array['Save_Extra_Data'])) {
            self::Save_Extra();
        } else {
            self::Save_No_Extra();
        }
    }

    protected static function Save_No_Extra() {
        $di = \Phalcon\DI::getDefault();
        $savedata = $di->controller_params_array['Save_Data'];
        $table = $di->controller_params_array['Save_Data_Table'];
        $newrecord = self::Get_Clean_New_Record($table);
        foreach ($savedata as $field => $value) {
            $tfield = 'set' . ucfirst($field);
            $newrecord->{$tfield}($value);
        }
        if ($newrecord->save() == false) {
            $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['jsonarr'] = [
                'success' => 0,
                'msg' => 'DL1520',
                'pk' => ''
            ];
        } else {
            $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['jsonarr'] = [
                'success' => 1,
                'msg' => '',
                'pk' => ''
            ];
        }
    }

    protected static function Save_Extra() {
        $di = \Phalcon\DI::getDefault();
        $flag = true;

        // Save single data parent
        $table = $di->controller_params_array['Save_Data_Table'];
        $savedata = $di->controller_params_array['Save_Data'];
        $newrecordparent = self::Get_Clean_New_Record($table);
        foreach ($savedata as $field => $value) {
            $tfield = 'set' . ucfirst($field);
            $newrecordparent->{$tfield}($value);
        }
        if ($newrecordparent->save() == false) {
            $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['jsonarr'] = [
                'success' => 0,
                'msg' => 'DL1525',
                'pk' => ''
            ];
        } else {
            // Save multiple data after save.
            $extra = $di->controller_params_array['Save_Extra_Data'];
            foreach ($extra['records'] as $key => $value) {
                $extra['records'][$key][$extra['fkparent']] = $newrecordparent->getId();
                $extra['records'][$key]['blpublished'] = 1;
                $extra['records'][$key]['mykatastima'] = \CHCrmCParams::My_get_mykatastima();
            }
            foreach ($extra['records'] as $key => $value) {
                $newrecordchild = self::Get_Clean_New_Record($di->controller_params_array['Save_Extra_Data_Table']);
                foreach ($value as $field => $fieldvalue) {
                    $tfield = 'set' . ucfirst($field);
                    $newrecordchild->{$tfield}($fieldvalue);
                }
                if ($newrecordchild->save() == false) {
                    $flag = false;
                }
            }
            if (!$flag) {
                $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['jsonarr'] = [
                    'success' => 0,
                    'msg' => 'DL1530',
                    'pk' => ''
                ];
            } else {
                $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['jsonarr'] = [
                    'success' => 1,
                    'msg' => '',
                    'pk' => ''
                ];
            }
        }
    }

    protected static function Get_Clean_New_Record($table = '') {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname($table);
        return new $classname();
    }

    protected static function Create_New_Record_Attrs($attrs = '') {
        if ($attrs == '') {
            return '';
        } else {
            $ret = '';
            foreach ($attrs as $attr_name => $attr_value) {
                $ret .= $attr_name . '="' . $attr_value . '" ';
            }
            return $ret;
        }
    }
    
    private static function Fix_Fields_Translation ($fields) {
        foreach ($fields as $key => $value) {
            $title = $value['attributes']['data-title'];
            $fields[$key]['attributes']['data-title-trans'] = PpB2bAdminVftranslate::getKeyvalueFromKeyname($title);
        }
        return $fields;
    }
    
    protected static function Get_New_Record_Form() {
        $di = \Phalcon\DI::getDefault();
        $cFields = [];
        $hFields = [];
        $colsPerRow = (int) $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['formrows'];
        $fields = $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['fields'];
        $fields = self::Fix_Fields_Translation($fields);
        foreach ($fields as $key => $field) {
            if (isset($field['hide']) && $field['hide'] == 1) {
                $hFields[] = DlB2bAdminGeneralHelper::Create_Field($field);
            } else {
                $cFields[] = DlB2bAdminGeneralHelper::Create_Field($field);
            }
        }
        $form = DlB2bAdminFormHelper::Get_Form_Part(false, true, true, 'horizontal-form dl-cc-new-record', count($cFields), $colsPerRow);
        $extra_content = '';
        if (isset($di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['extradata']) && $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['extradata'] == 1) {
            $extra_content = self::Get_Extra_Content();
        }
        $ret = DlB2bAdminFormHelper::Fix_Form($form, $cFields, $extra_content, $hFields);
        return $ret;
    }

    protected static function Get_Extra_Content() {
        $sel = '';
        for ($i = 1; $i <= self::$maxDoses; $i++) {
            $sel .= '<option data-doses="' . $i . '">' . $i . '</option>';
        }
        $sel = '<select id="doses_selection" class="bs-select select form-control" onchange="initDoses($(this));"><option data-doses="-1">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('epilogidwsewntitle') . $sel . '</option></select>';
        $tpl = '<div class="row">
                     <div class="col-md-4 col-sm-4">&nbsp;</div>
                     <div class="col-md-4 col-sm-4">
                         <div class="form-group">
                            <label class="control-label">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('epilogidwsewntitle') . '</label>
                            ' . $sel . '
                            <!--<button class="btn btn-medium btn-outline dark">
                                <i class="fa fa-plus"></i>
                                ' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('prosthikidwseisdosewntitle') . '
                            </button>
                         </div>-->
                     </div>
                     <div class="col-md-4 col-sm-4">&nbsp;</div>
                 </div>
                 <div class="row">
                    <div id="doses_container" class="col-md-12 col-sm-12">
                        
                    </div>
                 </div>
                 ';
        return $tpl;
    }

    protected static function Fix_Datasource($datasource = array()) {
        $di = \Phalcon\DI::getDefault();
        foreach ($datasource['params'] as $key => $value) {
            if (strpos($value, 'param') !== false) {
                $datasource['params'][$key] = $di->controller_params_array[explode('_', $value)[1]];
            }
        }
        return $datasource;
    }

    protected static function Get_Title() {
        $di = \Phalcon\DI::getDefault();
        if (isset($di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['title'])) {
            $title = $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['title'];
            if (is_array($title) && isset($title['datasource'])) {
                $title['datasource'] = self::Fix_Datasource($title['datasource']);
                $data = PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($title['datasource']);
            }
            if (!empty($data)) {
                $customer = $data[0][$title['datasource']['showval']];
                return PpB2bAdminVftranslate::getKeyvalueFromKeyname($title['title']) . ('<span style="font-weight: bold;">&nbsp;&nbsp;' . $customer . '</span>');
            } else {
                return PpB2bAdminVftranslate::getKeyvalueFromKeyname($title['title']);
            }
        } else {
            return 'No_Title';
        }
    }

    protected static function Get_New_Record_Portlet_Form() {
        $di = \Phalcon\DI::getDefault();
        $portletattributes = isset($di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['portlet']['attributes']) ? $di->controller_params_array[\CHCrmCParams::$keyarrNewRecord]['newrecord']['portlet']['attributes'] : [];
        $attributes = self::Create_New_Record_Attrs($portletattributes);
        $portlet = '
                <div' . $attributes . '>
                    <div class="portlet box green-meadow">
                        <div class="portlet-title">
                            <div class="caption dark">
                                ' . self::Get_Title() . '
                            </div>
                        </div>
                        <div class="portlet-body form">
                            ' . self::Get_New_Record_Form() . '
                        </div>
                    </div>
                </div>
        ';
        return $portlet;
    }

    public static function Get_New_Record_Tpl() {
        return self::Get_New_Record_Portlet_Form();
    }

    public static function Get_New_Record() {
        // TODO: Na sikoso parametrous gia tin selida apo to request,
        // kai na kalesw sinartisi Get_New_Record_Tpl()
    }

    // TODO: Na to ftiaksw apo to js i apo kapou alou.
    public static function Get_Doses_Type_Reason() {
        $typeclassname = \MyCustomHelperClassTools::My_Core_Get_Classname('coreavailablepaymenttype');
        $type = $typeclassname::find(array(
                    "conditions" => "bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima: AND aliasname = :aliasname:",
                    "bind" => [
                        'bldeleted' => 0,
                        'bldisabled' => 0,
                        'blpublished' => 1,
                        'mykatastima' => \CHCrmCParams::My_get_mykatastima(),
                        'aliasname' => 'creditcard'
                    ]
        ))->toArray();        
        $reasonclassname = \MyCustomHelperClassTools::My_Core_Get_Classname('coreavailablepaymentreason');
        $reason = $reasonclassname::find(array(
                    "conditions" => "bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND mykatastima = :mykatastima: AND aliasname = :aliasname:",
                    "bind" => [
                        'bldeleted' => 0,
                        'bldisabled' => 0,
                        'blpublished' => 1,
                        'mykatastima' => \CHCrmCParams::My_get_mykatastima(),
                        'aliasname' => 'installment'
                    ]
        ))->toArray();
        return [
            'type' => '<input class="hidden" type="text" name="dosestype" data-id="'. $type[0]['id'] .'"/>',
            'reason' => '<input class="hidden" type="text" name="dosesreason" data-id="'. $reason[0]['id'] .'"/>'
        ];
    }

    public static function Get_Doses_Main_Tbl() {
        $tbl = '<div class="col-md-2 col-sm-2">&nbsp;</div><div class="col-md-8 col-sm-8">'
                . '<table id="doses-preview-tbl" class="table table-striped table-bordered table-hover table-checkable" style="width: 100%;">'
                . '<thead>'
                . '<tr>'
                . '<th style="width: 20%;">&nbsp;</th>'
                . '<th class="text-center" style="width: 10%;">#</th>'
                . '<th class="text-center" style="width: 25%;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('hmdoshstitle') . '</th>'
                . '<th class="text-center" style="width: 25%;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('doshtitle') . '</th>'
                . '<th style="width: 20%;">&nbsp;</th>'
                . '</tr>'
                . '</thead>'
                . '<tbody>'
                . self::$dosesTbodyContnetPlaceholder
                . '</tbody>'
                . '</table>'
                . '</div><div class="col-md-2 col-sm-2">&nbsp;</div>';
        return $tbl;
    }

    public static function Get_Doses_Single_Row_Data() {
        $typereason = self::Get_Doses_Type_Reason();
        $row = '<tr class="new-record-extra-data-records">'
                . '<td class="hidden">'. $typereason['type'] .'</td>'
                . '<td class="hidden">'. $typereason['reason'] .'</td>'
                . '<td style="width: 20%;"></td>'
                . '<td class="text-center" style="width: 10%;">' . self::$dosesRowNumPlaceholder . '</td>'
                . '<td class="text-center" style="width: 25%;"><label class="new-record-field-doses-date" class="control-lagel" data-dose-date="' . self::$dosesRowDateDbPlaceholder . '">' . self::$dosesRowDatePlaceholder . '</label></td>'
                . '<td class="text-center" style="width: 25%;">'
                . '<div class="input-group">'
                . '<span class="input-group-addon">'
                . '<i class="fa fa-euro"></i>'
                . '</span>'
                . '<input class="form-control text-center new-record-field-dose-cost" value="' . self::$dosesRowCostPlaceholder . '" readonly="readonly"/>'
                . '</div>'
                . '</td>'
                . '<td style="width: 20%;"></td>'
                . '</tr>';
        return $row;
    }

}