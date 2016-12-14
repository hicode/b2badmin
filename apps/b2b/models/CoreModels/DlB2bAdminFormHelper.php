<?php
// DLS20161111
namespace B2b\Models\CoreModels;

class DlB2bAdminFormHelper extends DlB2bAdminFullCalendar {

    public static $formSubmitBtnPlaceholder = '{GEN_FORM_SUBMIT_BTN}';
    public static $formCancelBtnPlaceholder = '{GEN_FORM_CANCEL_BTN}';
    public static $formExtraBodyContentPlaceholder = '{GEN_FORM_EXTRA_CONTENT}';
    public static $formExtraBodyContentStartPlaceholder = '{GEN_FORM_EXTRA_CONTENT_START}';
    public static $formExtraBodyContentEndPlaceholder = '{GEN_FORM_EXTRA_CONTENT_END}';
    public static $formChildPrefixPlaceholder = '{GEN_FORM_CHILD_';
    public static $formHiddenFieldsPlaceholder = '{GEN_FORM_HIDDEN_FIELDS}';
    private static $defaultAvailableColsPerRow = 2;
    private static $availableColsPerRow = array(1, 2, 3, 4, 6);
    private static $availableColsPerRowClasses = array(
        1 => 'col-md-12',
        2 => 'col-md-6',
        3 => 'col-md-4',
        4 => 'col-md-3',
        6 => 'col-md-2'
    );
    
    public static function Get_Form_Part ($header = false, $body = true, $footer = true, $class = 'horizontal-form', $cols = 0, $colsPerRow = 2) {
        return '<form action="javascript:;" class="' . $class . '">' . self::$formHiddenFieldsPlaceholder .
                        self::Get_Form_Header($header) .
                        self::Get_Form_Body($body, $cols, $colsPerRow) .
                        self::Get_Form_Footer($footer)
               . '</form>';
    }
    
    public static function Get_Form($header = false, $body = true, $footer = true, $class = 'horizontal-form', $cols = 0, $colsPerRow = 2) {
        return ''
        . '<div class="portlet">'
            . '<div class="portlet-body form">'
                 . self::Get_Form_Part($header, $body, $footer, $class, $cols, $colsPerRow)
           . '</div>'
       . '</div>';
    }

    private static function Get_Form_Header($header) {
        if ($header) {
            
        } else {
            return '';
        }
    }

    private static function Get_Form_Body($body, $cols, $colsPerRows = 2) {
        if ($body) {
            $colsRows = self::Get_Child_Class($colsPerRows);
            $rows = self::Get_Rows($cols, $colsRows['colsPerRow']);
            $ret = self::Create_Rows($rows, $colsRows['colsPerRow'], $colsRows['colsClasses']);
            return '<div class="form-body" style="padding-bottom: 10px;">' . $ret .
                    self::$formExtraBodyContentStartPlaceholder .
                    self::$formExtraBodyContentPlaceholder .
                    self::$formExtraBodyContentEndPlaceholder .
                    '</div>';
        } else {
            return '';
        }
    }
    
    private static function Get_Form_Buttons () {
        $di = \Phalcon\DI::getDefault();
        $cpa = $di->controller_params_array;
        $ret = '<button type="button" class="btn btn-circle btn-outline red close-form-btn" data-dismiss="modal">' . self::$formCancelBtnPlaceholder . '</button>
                    <button type="submit" class="btn btn-circle btn-outline blue submit-form-btn">' . self::$formSubmitBtnPlaceholder . '</button>';
        if ( isset($cpa['Form_Custom_Buttons']) ) {
            $buttons = $cpa['Form_Custom_Buttons'];
            $tmp = []; $tmp2 = '';
            foreach ($buttons as $key => $value) {
                $title = PpB2bAdminVftranslate::getKeyvalueFromKeyname($value['title']);
                $attrs = DlB2bAdminGeneralHelper::Create_Attributes($value['attributes']);
                $tmp[$key] = '<button '. $attrs .' >'. $title .'</button>';
            }
            ksort($tmp);
            foreach ($tmp as $key => $btn) {
                $tmp2 .= $btn;
            }
            $ret = $tmp2 != '' ? $tmp2 : $ret;
        }
        return $ret;
    }
    
    private static function Get_Form_Footer($footer) {
        if ($footer) {
            $buttons = self::Get_Form_Buttons();
            return '<div class="form-footer text-center" style="padding-bottom: 20px;">
                    '. self::Get_Form_Buttons() .'
                    </div>';
        } else {
            return '';
        }
    }

    public static function Fix_Form($form = '', $fields = array(), $extra = '', $hfields = array()) {
        if ($form != '' && !empty($fields)) {
            $hiddentxt = '<input id="mykatastima" value="'. \CHCrmCParams::My_get_mykatastima() .'" style="display: none;"/>';
            foreach ($hfields as $key => $value) {
                $hiddentxt .= $value;
            }
            foreach ($fields as $key => $value) {
                $form = str_replace(DlB2bAdminFormHelper::$formChildPrefixPlaceholder . $key . '}', $value, $form);
            }
            $form = str_replace(DlB2bAdminFormHelper::$formCancelBtnPlaceholder, PpB2bAdminVftranslate::getKeyvalueFromKeyname('formcanceltitle'), $form);
            $form = str_replace(DlB2bAdminFormHelper::$formSubmitBtnPlaceholder, PpB2bAdminVftranslate::getKeyvalueFromKeyname('formsavetitle'), $form);
            $form = str_replace(DlB2bAdminFormHelper::$formExtraBodyContentStartPlaceholder, '', $form);
            $form = str_replace(DlB2bAdminFormHelper::$formExtraBodyContentEndPlaceholder, '', $form);
            if( $extra != '' ) {
                $form = str_replace(DlB2bAdminFormHelper::$formExtraBodyContentPlaceholder, $extra, $form);
            } else {
                $form = str_replace(DlB2bAdminFormHelper::$formExtraBodyContentPlaceholder, '', $form);
            }
            $form = str_replace(DlB2bAdminFormHelper::$formHiddenFieldsPlaceholder, $hiddentxt, $form);
            $form = preg_replace('#\{GEN_FORM_CHILD[^\]]+\}#', '', $form);
            return $form;
        } else {
            return '';
        }
    }

    private static function Get_Rows($cols, $colsPerRow) {
        if ($cols <= $colsPerRow) {
            return 1;
        } else {
            if ($cols % $colsPerRow == 0) {
                return $cols / $colsPerRow;
            } else {
                $r = 1;
                while ($cols > $colsPerRow) {
                    $r++;
                    $cols = $cols - $colsPerRow;
                }
                return $r;
            }
        }
    }

    private static function Create_Rows($rows, $cols, $colsClass = '') {
        $ret = '';
        for ($i = 1, $k = 0; $i <= $rows; $i++) {
            $ret .= '<div class="row">';
            for ($j = 1; $j <= $cols; $j++, $k++) {
                $ret .= self::Get_Child($colsClass, $k);
            }
            $ret .= '</div>';
        }
        return $ret;
    }

    private static function Get_Child($class, $cnt) {
        return '<div class="' . $class . '">
                    <div class="form-group">' .
                ( self::$formChildPrefixPlaceholder . $cnt . '}' ) .
                '</div>
                </div>';
    }

    private static function Get_Child_Class($cols) {
        if (in_array($cols, self::$availableColsPerRow, true)) {
            return array(
                'colsClasses' => self::$availableColsPerRowClasses[$cols],
                'colsPerRow' => $cols
            );
        } else {
            return array(
                'colsClasses' => self::$availableColsPerRowClasses[self::$defaultAvailableColsPerRow],
                'colsPerRow' => self::$defaultAvailableColsPerRow
            );
        }
    }

}