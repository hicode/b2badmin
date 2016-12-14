<?php

class CHCParams extends \Phalcon\Tag {

    public static function My_get_controller_params(&$objcontroller) {

        $di = \Phalcon\DI::getDefault();

        $di->controller_params_array['schemaname'] = MyCustomHelperCoreStaticVars::Model_Schema_Default();
        $schemaname = $objcontroller->dispatcher->getParam("schemaname");
        if (isset($schemaname)) {
            $di->controller_params_array['schemaname'] = $schemaname;
        } else {
            unset($schemaname);
        }
        $con = $di->get('dbopen', $di);
        //$classname = MyCustomHelperClassTools::My_Core_Get_Classname('aab2badmin_basesettings');
        //$arrbasesettings = $classname::find()->toArray();
        $arrbasesettings = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . ".aab2badmin_basesettings", Phalcon\Db::FETCH_ASSOC);
        foreach ($arrbasesettings as $key => $value) {
            foreach ($value as $key1 => $value1) {
                $di->controller_params_array['basesettings'][$key1] = $value1;
            }
        }
        
    }

}
