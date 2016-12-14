<?php

class CustomHelperBackendControllerHelperNewRecord extends \Phalcon\Tag {

    public static function Do_Action() {
        $di = \Phalcon\DI::getDefault();
        $req = $_REQUEST;
        $jsonarr = array('success' => 0, 'msg' => 'Failed to update', 'pk' => '-1');

        $lng = $di->controller_params_array['lng'];
        $helperpage = isset($di->controller_params_array['helperpage']) ? $di->controller_params_array['helperpage'] : null;
        $param1 = isset($di->controller_params_array['param1']) ? $di->controller_params_array['param1'] : null;
        $param2 = isset($di->controller_params_array['param2']) ? $di->controller_params_array['param2'] : null;
        $param3 = isset($di->controller_params_array['param3']) ? $di->controller_params_array['param3'] : null;
        $param4 = isset($di->controller_params_array['param4']) ? $di->controller_params_array['param4'] : null;
        if (isset($helperpage, $param1, $param2)) {
            if ($param1 == B2b\Models\CoreModels\PpB2bAdminMetronic454PluginNewRecord::Get_Post_PluginGetNewRecordTplAction()) {
                $jsonarr = B2b\Models\CoreModels\PpB2bAdminMetronic454PluginNewRecord::Get_New_Record_Tpl();
            }
        }
        $di->controller_params_array['jsondata'] = json_encode($jsonarr);
    }

}
