<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:15 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminVftemplate {

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('vftemplate', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params)
    {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }
    
    public static function getTemplateParams() {
        $di = \Phalcon\DI::getDefault();
        $ret = array();
        $extendclassname = self::getExtendClassname();
        $params = $extendclassname::find(array(
                    "conditions" => "templatealiasname = :templatealiasname:",
                    "bind" => array('templatealiasname' => $di->controller_params_array['selectedtemplate'])
                ))->toArray();
        foreach ($params as $key => $value) {
            $ret[$value['templateparamname']] = $value['templateparamvalue'];
        }
        //$ret['template_admin_path_with_assets_path'] = $ret['template_admin_path'] . $ret['template_admin_path_assets'];
        //$ret['template_view_dir'] = "backend/template/" . $ret['template_admin_name'] . "/";
        $di->controller_params_array['template'] = $ret;
    }

}
