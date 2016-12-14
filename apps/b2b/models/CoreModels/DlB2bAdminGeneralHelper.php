<?php

namespace B2b\Models\CoreModels;
// DLS20161111
class DlB2bAdminGeneralHelper extends DlB2bAdminFullCalendar {

    private static $functionPrefix = 'Create_';
    private static $errorFn = 'Error';
    private static $permissions = array('r' => '1', 'w' => '0');
    private static $dashboardResultsParentID = 'dashboard_results_container_row_parent';
    private static $dashboardResultsChildID = 'dashboard_results_container_12_child';

    public static function Create_Field($field) {
        $fnField = self::Get_Function_Name($field['type']);
        return self::$fnField($field);
    }

    private static function Check_Permissions($field) {
        if (!isset($field['permissions'])) {
            return self::$permissions;
        }
        return $field['permissions'];
    }

    public static function Create_Attributes($attrs = array()) {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        foreach ($attrs as $attr_name => $attr_value) {
            if (strpos($attr_value, 'request_param') !== false) {
                $attr_value = $di->controller_params_array[explode('_', $attr_value)[1]];
            }
            $ret .= $attr_name . '="' . $attr_value . '" ';
        }
        return $ret;
    }

    // DLS20161107
    public static function Create_Attributes_Advanced($attrs = array()) {
        $ret = '';
        foreach ($attrs as $attr_name => $attr_value) {
            $ret .= $attr_name . '="' . ( is_array($attr_value) && !empty($attr_value) ? self::Get_Advanced_Attribute_Value($attr_value) : $attr_value ) . '" ';
        }
        return $ret;
    }

    private static function Get_Advanced_Attribute_Value($data) {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        $adv = isset($data['advanced']) ? $data['advanced'] : [];
        $from = isset($adv['from']) ? $adv['from'] : '';
        $var = isset($adv['var']) ? $adv['var'] : '';
        $type = isset($adv['gettype']) ? $adv['gettype'] : '';
        $by = isset($adv['by']) ? $adv['by'] : '';
        $value = isset($adv['value']) ? $adv['value'] : '';
        if ($from === 'request') {
            $tmp = $di->controller_params_array['glb_request'][$var];
            if ($type === 'split') {
                $tmp2 = explode($by, $tmp);
                $ret = $tmp2[$value];
            }
        }
        return $ret;
    }

    // DLE20161107

    private static function Create_Field_Label($label) {
        return '<label ' .
                self::Create_Attributes($label['attributes']) . '>' .
                PpB2bAdminVftranslate::getKeyvalueFromKeyname($label['trans_text']) .
                ( isset($label['required']) && $label['required'] == '1' ? '&nbsp;&nbsp;<span class="required" aria-required="true">*</span>' : '' ) .
                '</label>';
    }

    private static function Create_Field_Icon_Fa($class) {
        return '<i class="fa ' . $class . '"></i>';
    }

    private static function Create_Field_Icon_Icon($class) {
        return '<span class="item">'
                . '<span class="' . $class . '" aria-hidden="true"></span>'
                . '</span>';
    }

    private static function Create_Field_Icon_Glyphicon($class) {
        return '<span class="glyphicon ' . $class . '"></span>';
    }

    private static function Create_Field_Icon_By_Type($icon) {
        if ($icon['type'] == 'fa') {
            return self::Create_Field_Icon_Fa($icon['class']);
        } else if ($icon['type'] == 'icon') {
            return self::Create_Field_Icon_Icon($icon['class']);
        } else if ($icon['type'] == 'glyphicon') {
            return self::Create_Field_Icon_Glyphicon($icon['class']);
        } else {
            return '';
        }
    }

    private static function Create_Field_Icon($icon) {
        if ($icon['static'] == '1') {
            return '
            <div class="input-group">
                {FIELD_RIGHT}
                <span class="input-group-addon">'
                    . self::Create_Field_Icon_By_Type($icon) .
                    '</span>
                 {FIELD_LEFT}
            </div>';
        } else {
            return '
            <div class="input-group">
                {FIELD_RIGHT}
                <span class="input-group-addon">
                    <a ' . (isset($icon['attributes']) ? self::Create_Attributes($icon['attributes']) : '') . '>'
                    . self::Create_Field_Icon_By_Type($icon) .
                    '</a>
                </span>
                {FIELD_LEFT}
            </div>';
        }
    }

    private static function Create_Input($field) {
        $permissions = self::Check_Permissions($field);
        if (isset($field['edit']['enable']) && $field['edit']['enable'] == 1) {
            self::Get_Field_Preset_Value($field);
        }
        if ($permissions['r'] == '0') {
            return '';
        } else {
            $attrs = isset($field['attributes']) ? self::Create_Attributes($field['attributes']) : '';
            $labelHTML = isset($field['label']) ? self::Create_Field_Label($field['label']) : '';
            $fieldHTML = '';
            if ($permissions['w'] == '0') {
                $fieldHTML = '<input ' . $attrs . ' disabled="disabled" />';
            } else {
                $fieldHTML = '<input ' . $attrs . ' />';
            }
            if (isset($field['hide']) && $field['hide'] == 1) {
                return $fieldHTML;
            } else {
                if (isset($field['icon'])) {
                    $iconHTML = isset($field['icon']) ? self::Create_Field_Icon($field['icon']) : '';
                    if (isset($field['icon']['placement']) && strtoupper($field['icon']['placement']) == 'R') {
                        $iconHTML = str_replace('{FIELD_RIGHT}', $fieldHTML, $iconHTML);
                        $iconHTML = str_replace('{FIELD_LEFT}', '', $iconHTML);
                        return $labelHTML . $iconHTML;
                    } else {
                        $iconHTML = str_replace('{FIELD_LEFT}', $fieldHTML, $iconHTML);
                        $iconHTML = str_replace('{FIELD_RIGHT}', '', $iconHTML);
                        return $labelHTML . $iconHTML;
                    }
                } else {
                    return $labelHTML . $fieldHTML;
                }
            }
        }
    }

    private static function Get_Select_Options($datasource) {
        $di = \Phalcon\DI::getDefault();
        if (empty($datasource)) {
            return '';
        } else {
            foreach ($datasource['params'] as $key => $value) {
                if (strpos($value, 'request_param') !== false) {
                    $datasource['params'][$key] = $di->controller_params_array[explode('_', $value)[1]];
                }
            }
            $ret = isset($datasource['defval']) && $datasource['defval'] != '' ? '' : '<option data-id="-1" selected="selected">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('selectavaluetitle') . '</option>';
            foreach (PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($datasource) as $key => $option) {
                if ($option[isset($datasource['cmpval']) ? $datasource['cmpval'] : $datasource['showval']] == $datasource['defval']) {
                    $ret .= '<option data-id="' . $option[isset($datasource['datavalid']) ? $datasource['datavalid'] : 'id'] . '" data-custom-id="' . $option[isset($datasource['dataval']) ? $datasource['dataval'] : 'id'] . '" selected="selected">' . $option[$datasource['showval']] . '</option>';
                } else {
                    $ret .= '<option data-id="' . $option[isset($datasource['datavalid']) ? $datasource['datavalid'] : 'id'] . '" data-custom-id="' . $option[isset($datasource['dataval']) ? $datasource['dataval'] : 'id'] . '" >' . $option[$datasource['showval']] . '</option>';
                }
            }
            return $ret;
        }
    }

    private static function Create_Select($field) {
        $permissions = self::Check_Permissions($field);
        if ($permissions['r'] == '0') {
            return '';
        } else {
            $attrs = isset($field['attributes']) ? self::Create_Attributes($field['attributes']) : '';
            $labelHTML = isset($field['label']) ? self::Create_Field_Label($field['label']) : '';
            $fieldOptions = self::Get_Select_Options($field['datasource']);
            if (isset($field['edit']['enable']) && $field['edit']['enable'] == 1) {
                self::Get_Field_Preset_Value($field);
            }
            $fieldHTML = '';
            if ($permissions['w'] == '0') {
                $fieldHTML = '<select ' . $attrs . ' disabled="disabled">' . $fieldOptions . '</select>';
            } else {
                $fieldHTML = '<select ' . $attrs . '>' . $fieldOptions . '</select>';
            }

            if (isset($field['hide']) && $field['hide'] == 1) {
                return $fieldHTML;
            } else {
                if (isset($field['icon'])) {
                    $iconHTML = isset($field['icon']) ? self::Create_Field_Icon($field['icon']) : '';
                    if (isset($field['icon']['placement']) && strtoupper($field['icon']['placement']) == 'R') {
                        $iconHTML = str_replace('{FIELD_RIGHT}', $fieldHTML, $iconHTML);
                        $iconHTML = str_replace('{FIELD_LEFT}', '', $iconHTML);
                        return $labelHTML . $iconHTML;
                    } else {
                        $iconHTML = str_replace('{FIELD_LEFT}', $fieldHTML, $iconHTML);
                        $iconHTML = str_replace('{FIELD_RIGHT}', '', $iconHTML);
                        return $labelHTML . $iconHTML;
                    }
                } else {
                    return $labelHTML . $fieldHTML;
                }
            }
        }
    }

    private static function Create_Div($field) {
        return 'Will create <div></div> element';
    }

    private static function Create_Span($field) {
        return 'Will create <span></span> element';
    }

    private static function Create_A($field) {
        return 'Will create <a></a> element';
    }

    private static function Create_I($field) {
        return 'Will create <i></i> element';
    }

    private static function Error($msg = '', $log = true) {
        $log ? error_log('ERROR : [ ECF_' . date('d-m-Y H:i:s') . ' ]. ' . $msg) : '';
        return 'ECF_' . date('d-m-Y H:i:s'); // ERROR_CREATING_FIELD
    }

    private static function Get_Function_Name($name = '') {
        if (method_exists(new DlB2bAdminGeneralHelper(), self::$functionPrefix . ucwords($name))) {
            return self::$functionPrefix . ucwords($name);
        } else {
            return ucwords(self::$errorFn);
        }
    }

    private static function Get_Field_Preset_Value($field) {
        $di = \Phalcon\DI::getDefault();
        $mode = $di->controller_params_array['Is_Edit_Mode'];
        if ($mode) {
            $edit = $field['edit'];
            $readkey = $field['attributes']['data-name'];
            $readvalue = 'id';
            $readtmode = 'single';
            $readtype = 'input';
            if (isset($edit['read']['key'])) {
                $readkey = $edit['read']['key'];
            }
            if (isset($edit['read']['value'])) {
                $readvalue = $edit['read']['value'];
            }
            if (isset($edit['read']['mode'])) {
                $readtmode = $edit['read']['mode'];
            }
            if (isset($edit['read']['type'])) {
                $readtype = $edit['read']['type'];
            }
            $edit['datasource']['params'] = self::Fix_Datasource_Params($field['edit']['datasource']['params']);
            $datasource = $edit['datasource'];
            $data = PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($datasource);
            self::Create_Field_Preset_Value_Arr($readkey, $readvalue, $readtmode, $readtype, $data, $field);
        }
    }

    private static function Create_Field_Preset_Value_Arr($key = '', $value = '', $mode = '', $type = '', $data = [], $field = []) {
        $val = '';
        $selector = '[name="' . $field['attributes']['name'] . '"]';
        if ($mode === 'multiple') {
            $arr = [];
            foreach ($data as $dKey => $dValue) {
                $arr[$dValue[$key]] = $dValue[$value];
            }
            $val = $arr;
        } else {
            $val = $data[0][$key];
        }
        if (isset($field['edit']['selector'])) {
            $by = $field['edit']['selector']['by'];
            $equals = $field['edit']['selector']['equals'];
            $selector = '[' . $by . '="' . $equals . '"]';
        }
        self::Set_Field_Preset_Value($type, $val, $selector);
    }

    private static function Set_Field_Preset_Value($type, $valuetoset, $fieldselector) {
        $di = \Phalcon\DI::getDefault();
        $di->controller_params_array['Preset_Values'][] = [
            'type' => $type,
            'value' => $valuetoset,
            'selector' => $fieldselector
        ];
    }

    private static function Fix_Datasource_Params($params) {
        $di = \Phalcon\DI::getDefault();
        foreach ($params as $key => $value) {
            if (strpos($value, 'request_param') !== false) {
                $params[$key] = $di->controller_params_array[explode('_', $value)[1]];
            }
        }
        return $params;
    }

    public static function Get_Dashboard_Container_Parent_ID() {
        return self::$dashboardResultsParentID;
    }

    public static function Get_Dashboard_Container_Child_ID() {
        return self::$dashboardResultsChildID;
    }

    public static function Get_Dashboard_Results_Container() {
        $di = \Phalcon\DI::getDefault();
        return '
            <div id="' . self::$dashboardResultsParentID . '" class="row">
                <div id="' . self::$dashboardResultsChildID . '" class="col-md-12 col-sm-12" style="display:;"></div>
            </div>
                ';
    }

    public static function Get_Dashboard_Notifier($blshow = true, $blexpand = true) {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        if ($blshow) {
            $expand = 'collapse';
            $portletbodystyle = '';
            if (!$blexpand) {
                $expand = 'expand';
                $portletbodystyle = 'display: none;';
            }
            $ret = '
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="portlet box grey-mint">
                        <div class="portlet-title">
                            <div class="caption">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlnotifiertitle') . '</div>
                            <div class="tools">
                                <a class="' . $expand . '" href="" title="Hide/Show"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="' . $portletbodystyle . '">
                            <div class="row">
                                <div class="note note-success note-bordered" style="margin-bottom: 5px;">
                                    <h3>Quick Notifier for...</h3>
                                    <p>
                                        Day summary for April 10 2016...<br><br>
                                    </p>
                                    <span class="label label-danger">NOTES:</span><span> Be carefully with subscriptions...</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
        }
        return $ret;
    }

    public static function Get_Dashboard_Counters($blshow = true, $blexpand = true) {
        $di = \Phalcon\DI::getDefault();
        $ret = '';
        if ($blshow) {
            $expand = 'collapse';
            $portletbodystyle = '';
            if (!$blexpand) {
                $expand = 'expand';
                $portletbodystyle = 'display: none;';
            }
            $ret = '
            <div class="row">
                
                <div class="col-md-12 col-sm-12">
                    <div class="portlet box grey-mint">
                        <div class="portlet-title">
                            <div class="caption">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlcountersset1title') . '</div>
                            <div class="tools">
                                <a class="' . $expand . '" href="" title="Hide/Show"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="' . $portletbodystyle . '">
                            <div class="row margin-bottom-15">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat blue">
                                        <div class="visual">
                                            <!--<i class="fa fa-comments"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="1349">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dltotalmemberstitle') . '</div>
                                        </div>
                                        <a class="more" href="javascript:;"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat red-intense">
                                        <div class="visual">
                                            <!--<i class="fa fa-bar-chart-o"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="925">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlactivememberstitle') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat green-haze">
                                        <div class="visual">
                                            <!--<i class="fa fa-shopping-cart"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="20">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlsindromespoulingouminatitle') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat purple-plum">
                                        <div class="visual">
                                            <!--<i class="fa fa-globe"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="89">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlpelatesmeypoloipotitle') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat green">
                                        <div class="visual">
                                            <!--<i class="fa fa-comments"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="181,223.78">0</span>
                                                &nbsp;&euro;
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dletisiaesodatitle') . '</div>
                                        </div>
                                        <a class="more" href="javascript:;"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat red-flamingo">
                                        <div class="visual">
                                            <!--<i class="fa fa-bar-chart-o"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="2,981.23">0</span>
                                                &nbsp;&euro;
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlminieaesodatitle') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat grey-cascade">
                                        <div class="visual">
                                            <!--<i class="fa fa-shopping-cart"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="31">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlmembersbeenexercising') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat blue-dark">
                                        <div class="visual">
                                            <!--<i class="fa fa-globe"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="76">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlmembershaveexercised') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
		
            </div>
        ';
        }
        return $ret;
    }

    public static function Get_Dashboard_Buttons($portlet = true) {
        $di = \Phalcon\DI::getDefault();
        if ($portlet) {
            return '
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="portlet box grey-mint">
                            <div class="portlet-title">
                                <div class="caption">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlbuttonsset1title') . '</div>
                                <div class="tools">
                                    <a class="collapse" href="" title="Hide/Show"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">' . self::Get_Dashboard_Buttos_Inner() . '</div>
                        </div>
                    </div>
                </div>';
        } else {
            return self::Get_Dashboard_Buttos_Inner();
        }
    }

    private static function Get_Dashboard_Buttos_Inner() {
        $di = \Phalcon\DI::getDefault();
        return '
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('studiotitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">
                                <a class="btn default dark-stripe btn-block" href="' . \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_INDEX) . '#/' . $di->controller_params_array['lng'] . '/' . \CHCrmCParams::My_get_mykatastima() . '/inner_home_crm_calendar.html" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('calendartitle') . '</a>
                                <a class="btn default dark-stripe btn-block" href="javascript:DlDashboard.AddPacket();" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('ypiresiestitle') . '</a>
                                <a class="btn default dark-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('katigoriestitle') . '</a>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('meloititle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">
                                <a class="btn default blue-stripe btn-block" href="javascript:DlDashboard.AddMembers();" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('meloititle') . '</a>
                                <a class="btn default blue-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('anazitisimeloustitle') . '</a>
                                <a class="btn default blue-stripe btn-block" href="javascript:DlDashboard.NewMember();" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('neomelostitle') . '</a>
                                <a class="btn default blue-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('ypoloipatitle') . '</a>
                                <a class="btn default blue-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('liksiprothesmatitle') . '</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('syndromestitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">
                                <a class="btn default red-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('syndromestitle') . '</a>
                                <a id="AddSC" class="btn default red-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('neasyndromititle') . '</a>
                                <a class="btn default red-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('energessyndromestitle') . '</a>
                                <a class="btn default red-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('energapaketatitle') . '</a>
                                <a class="btn default red-stripe btn-block" href="" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('pragmatopoihmenestitle') . '</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('oikonomikatitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('esodaeksodatitle') . '</a>
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('misthodosiatitle') . '</a>
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('apodikseistitle') . '</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-4 col-sm-4">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('oikonomikatitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlligoparanapeltitle') . '</a>
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlperparanapeltitle') . '</a>
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlligoparanamathtitle') . '</a>   
                                <a class="btn default green-stripe btn-block" href="javascript:;" style="margin-bottom:12px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlperparouanamathititle') . '</a>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-md-1 col-sm-1">&nbsp;</div>
            </div>-->
            ';
    }

    public static function Get_AddSC_Search_Tpl() {
        $tpl = '
            <div class="input-group suggestion-parent" style="margin-bottom: 12px;">
                <input id="SCMembersSuggestion" class="form-control text-center"  placeholder="Επιλογή πελάτη..." />
                <span class="input-group-btn">
                    <a type="button" class="btn btn-default close-suggestion">
                        <i class="fa fa-times"></i>
                    </a>
                </span>
            </div>
        ';
        return $tpl;
    }

}