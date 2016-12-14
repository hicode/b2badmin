<?php

namespace B2b\Models\CoreModels;

class DlB2bAdminCreateEventQuickTplsHelper extends DlB2bAdminFullCalendar {

    public static function Get_Quick_Tpl_ID() {
        return '';
    }

    public static function Get_Quick_Tpl_Content() {
        $di = \Phalcon\DI::getDefault();
        $function = self::Create_Fn($di->controller_params_array['param2']);
        return self::$function();
    }

    private static function Get_More_Tpl_Body_Contents() {
        return '
        <div class="row">
            <div class="col-md-12">
               <div class="tabbable-line boxless tabbable-reversed">
                    <ul class="nav nav-tabs">' . self::Get_More_Quick_Tpl_Tabs() .
                '</ul>                        
                    <div class="tab-content" style="padding-bottom: 0px;">' .
                self::Get_More_Quick_Tpls_Tab_Contetns() .
                '</div>
                </div>
            </div>
        </div>';
    }

    private static function Get_More_Quick_Tpl_Tabs() {
        $di = \Phalcon\DI::getDefault();
        $tabs = $di->controller_params_array[\CHCrmCParams::$keyarrCreateEventQuickTpls]['qtplscontents'][$di->controller_params_array['param2']]['tabs'];
        $ret = '';
        foreach ($tabs as $key => $tab) {
            $tmp = '<li' . (isset($tab['active']) && $tab['active'] == 1 ? ' class="active" ' : '') . '>'
                    . '<a href="#qtpls_tab_' . $key . '" data-toggle="tab">' .
                    (isset($tab['icon']) ? self::Get_Icon_HTML($tab['icon']) : '')
                    . '</a>'
                    . '</li>';
            $ret .= str_replace('{LABEL}', PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, $tab['label']), $tmp);
        }
        return $ret;
    }

    private static function Get_Icon_HTML($icon = array()) {
        if (empty($icon)) {
            return '';
        } else {
            if ($icon['type'] == 'icon') {
                return '<span class="item">'
                        . '<span class="' . $icon['class'] . '" aria-hidden="true"></span>{LABEL}'
                        . '</span>';
            } else if ($icon['type'] == 'fa') {
                return '<i class="fa ' . $icon['class'] . '"></i>{LABEL}';
            } else if ($icon['type'] == 'glyph') {
                return '<span class="glyphicon ' . $icon['class'] . '"></span>{LABEL}';
            } else {
                return '';
            }
        }
    }

    private static function Get_More_Quick_Tpls_Tab_Contetns() {
        $di = \Phalcon\DI::getDefault();
        $tabs = $di->controller_params_array[\CHCrmCParams::$keyarrCreateEventQuickTpls]['qtplscontents'][$di->controller_params_array['param2']]['tabs'];
        $ret = '';
        foreach ($tabs as $key => $tab) {
            $function = self::Create_Fn($tab['html']);
            $ret .= '<div class="tab-pane row' . (isset($tab['active']) && $tab['active'] == 1 ? ' active ' : '') . '" id="qtpls_tab_' . $key . '">' .
                    ( isset($tab['fields']) ? self::Create_Fields_More_Tab($tab['fields'], (int)$tab['row_max_fields']) : '' )
                    . '</div>';
        }
        return $ret;
    }
    
    private static function Create_Fields_More_Tab($fields, $colsPerRow) {
        $cFields = array();
        foreach ($fields as $key => $field) {
            $cFields[] = DlB2bAdminGeneralHelper::Create_Field($field);
        }
        $form = DlB2bAdminFormHelper::Get_Form(false, true, true, 'horizontal-form', count($cFields), $colsPerRow);        
        $form = DlB2bAdminFormHelper::Fix_Form($form, $cFields);
        // DLS20161016
        $form = '<div class="form-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>formerrorstitle' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('formerrorstitle') .
                    '</div>' . $form
                . '</div>';
        // DLE20161016
        return $form;
    }
    
    private static function Get_Addmembers_Tpl() {
        // TODO : Na ftiaksw to colsPerRow na to pernw apo general settings tou plugin i tou crm
        $di = \Phalcon\DI::getDefault();
        $fields = $di->controller_params_array[\CHCrmCParams::$keyarrCreateEventQuickTpls]['qtplscontents'][$di->controller_params_array['param2']]['fields'];
        $cFields = array();
        foreach ($fields as $key => $field) {
            $cFields[] = DlB2bAdminGeneralHelper::Create_Field($field);
        }
        $form = DlB2bAdminFormHelper::Get_Form(false, true, true, 'horizontal-form', count($cFields), 2);
        foreach ($cFields as $key => $value) {
            $form = str_replace(DlB2bAdminFormHelper::$formChildPrefixPlaceholder . $key . '}' , $value, $form);
        }
        // TO DO : Na ftiaksw mia sinartisi pou na kanw replace ta Contetns tou form, ekei pou einai idia.
        $form = str_replace(DlB2bAdminFormHelper::$formCancelBtnPlaceholder, PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, 'formcanceltitle'), $form);
        $form = str_replace(DlB2bAdminFormHelper::$formSubmitBtnPlaceholder, PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(DlB2bAdminMetronic454PluginModalGeneral::$AvailablePluginAliasName, 'formsavetitle'), $form);
        $form = preg_replace('#\{GEN_FORM_CHILD[^\]]+\}#', '', $form);
        /* 18092016 START ALLAGES */
        $form = preg_replace('/' . preg_quote(DlB2bAdminFormHelper::$formExtraBodyContentStartPlaceholder) . '.*?' . preg_quote(DlB2bAdminFormHelper::$formExtraBodyContentEndPlaceholder) . '/', '', $form);
        /* 18092016 END ALLAGES */
        return $form;
    }
    
    private static function Get_Addtrainers_Tpl() {}

    private static function Get_Copy_Tpl() {}
    
    private static function Get_Delete_Tpl() {}

    private static function Get_More_Tpl() {
        return self::Get_More_Tpl_Body_Contents();
    }

    private static function Create_Fn ($name) {
        return 'Get_'. ucwords($name) .'_Tpl';
    }
}