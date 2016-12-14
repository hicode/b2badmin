<?php

class MyCustomHelperClassTools extends \Phalcon\Tag {

    public static function My_Class_Get_User_Prop_Or_Method($str) {
        $val = null;
        $tmparr = explode('::', $str);
        if (count($tmparr) == 2) {
            $classname = $tmparr[0];
            if (!MyCustomHelperStringTools::startsWith($classname, '\\')) {
                $classname = '\\' . $classname;
            }
            $tmparr = explode('(', $tmparr[1]);
            $functionname = $tmparr[0];
            if (count($tmparr) == 2) {
                $tmparr = explode(')', $tmparr[1]);
                if (count($tmparr) == 2) {
                    $params = ($tmparr[0] == '' ? array() : explode(',', $tmparr[0]));
                    //$params = explode(',', $tmparr[0]);
                    //$tmparr[0]==''
                    if (method_exists($classname, $functionname)) {
                        $val = call_user_func_array(array($classname, $functionname), $params);
                    }
                    if (!isset($val)) {
                        if (MyCustomHelperStringTools::startsWith($classname, '\\')) {
                            $classname = ltrim($classname, '\\');
                            if (method_exists($classname, $functionname)) {
                                $val = call_user_func_array(array($classname, $functionname), $params);
                            }
                        }
                    }
                }
            } else {
                if (MyCustomHelperStringTools::startsWith($functionname, '$')) {
                    $functionname = ltrim($functionname, '$');
                    $val = self::My_Class_Get_User_Prop($classname, $functionname);
                }
                if (!isset($val)) {
                    $val = constant($classname . "::" . $functionname);
                    if (!isset($val)) {
                        $val = self::My_Class_Get_User_Prop($classname, $functionname);
                        if (!isset($val)) {
                            if (MyCustomHelperStringTools::startsWith($classname, '\\')) {
                                $classname = ltrim($classname, '\\');
                                $val = self::My_Class_Get_User_Prop($classname, $functionname);
                                if (!isset($val)) {
                                    $val = $classname::$$functionname;
                                }
                            }
                        }
                    }
                }
            }
            if (!isset($val)) {
                MyCustomHelperErrorLog::My_error_log('Class or function or property not found. Params : ' . $str);
            }
        }

        return $val;
    }

    public static function My_Class_Get_User_Prop($className, $property) {
        if (!class_exists($className))
            return null;
        if (!property_exists($className, $property))
            return null;

        $vars = get_class_vars($className);
        return $vars[$property];
    }

    private static function Class_Prefix_App_Schema($kind = 'production', $user = 'pp', $schemaname = null) {
        $di = \Phalcon\DI::getDefault();
        $classprefix = '';
        if (!isset($kind)) {
            $kind = 'production';
        }


        $app = MyCustomHelperCoreStaticVars::Model_App_Default();

        if (isset($di->controller_params_array['app'])) {
            $app = $di->controller_params_array['app'];
        }
        $classprefix = '\\' . ucwords($app) . '\Models\\' . ucwords($kind) . 'Models\\';
        if (!isset($schemaname)) {
            $schemaname = MyCustomHelperCoreStaticVars::Model_Schema_Default();
            if (isset($di->controller_params_array['schemaname'])) {
                $schemaname = $di->controller_params_array['schemaname'];
            }
        }
        if ($kind == 'core') {
            $classprefix = $classprefix . ucwords($user) . ucwords($app) . 'Admin';
        } else {
            $classprefix = $classprefix . ucwords($app) . ucwords($schemaname);
        }

        return $classprefix;
    }

    public static function My_Core_Get_Classname($tblname, $kind = 'production', $user = 'pp', $schemaname = null) {
        $di = \Phalcon\DI::getDefault();
        $classprefix = self::Class_Prefix_App_Schema($kind, $user, $schemaname);

        $classname = $classprefix . str_ireplace('_', '', ucwords($tblname));
        if (!class_exists($classname)) {
            MyCustomHelperErrorLog::My_error_log('Class ' . $classname . ' Does not exist Params : tblname=' . $tblname . ' kind=' . $kind . ' schemaname=' . $di->controller_params_array['schemaname'] . ' caller=' . debug_backtrace()[1]['function']);
        }

        return $classname;
    }

    public static function getOriginalField($tblname, $fieldid) {
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname($tblname, 'alias');
        $method = 'getOriginalField' . ucwords($fieldid) . '()';
        $ret = \MyCustomHelperClassTools::My_Class_Get_User_Prop_Or_Method($classname . '::' . $method);
        if (!$ret) {
            $ret = $fieldid;
            //$method = 'get' . ucwords($fieldid) . '()';
            //$ret = \MyCustomHelperClassTools::My_Class_Get_User_Prop_Or_Method($classname . '::' . $method);
        }
        return $ret;
        return \B2b\Models\AliasModels\B2bPpgymppItems::getOriginalFieldContenttitle();
    }

}
