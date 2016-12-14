<?php

class CHCrmCHelperPageJs extends \Phalcon\Tag {

    public static function Do_Action() {
        $di = \Phalcon\DI::getDefault();
        if ($di->controller_params_array['helperpage'] === $di->controller_params_array['settings']['Helper_Page_Js_Form_Editable']) {
            $di->controller_params_array['extraparam1param'] = '';
            if ($di->controller_params_array['param1'] === \AGCHParams::$Settings_Param1_Async_Portlet_Body_Static_Texts_Edit_2) {
                $di->controller_params_array['extraparam1param'] = $di->controller_params_array['param1'] . '/';
                $di->controller_params_array['static_translates_all'] = \CHCrmCParams::My_get_static_translate_all();
            }
        } elseif ($di->controller_params_array['helperpage'] === $di->controller_params_array['settings']['Js_Table_Ajax_Page']) {
            $paramsarr = explode(':', $di->controller_params_array['param1']);
            $viewarr = array();
            foreach ($paramsarr as $key => $value) {
                $keyval = explode('=', $value);
                $viewarr[$keyval[0]] = isset($keyval[1]) ? $keyval[1] : '';
            }
            $di->controller_params_array['viewarr'] = $viewarr;
        }
    }

}
