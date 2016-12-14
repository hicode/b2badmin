<?php

class MyCustomHelperSession extends \Phalcon\Tag {

    private static function My_get_session() {
        $di = \Phalcon\DI::getDefault();
        return $di->getShared('session');
    }

    public static function My_get_session_id() {
        self::My_start();
        return self::My_get_session()->getId();
    }

    public static function My_get_started() {
        return self::My_get_session()->isStarted();
    }

    public static function My_start() {
        if (self::My_get_started() !== TRUE) {
            self::My_get_session()->start();
        }
    }

    public static function My_regenerate() {
        self::My_start();
        self::My_get_session()->destroy();
        self::My_start();

        //$old_sessionid = session_id();

        session_regenerate_id();

        //$new_sessionid = session_id();
    }

    public static function My_set_param_val($param, $val) {
        $param=self::My_Get_Sess_Prefix().$param;
        $ret = false;
        self::My_start();
        if (self::My_get_started() == TRUE) {
            self::My_get_session()->set($param, $val);
        }
        return $ret;
    }

    public static function My_get_param_val($param) {
        $param=self::My_Get_Sess_Prefix().$param;
        $ret = null;
        self::My_start();
        if (self::My_get_session()->has($param)) {
            $ret = self::My_get_session()->get($param);
        }
        return $ret;
    }

    public static function My_get_param_val_jsonrowuser() {
        $ret = self::My_get_param_val('jsonrowuser');
        return $ret;
    }

    public static function My_get_param_val_jsonrowuser_array() {
        $ret = self::My_get_param_val_jsonrowuser();
        if ($ret) {
            $ret = json_decode($ret, true);
        }
        return $ret;
    }

    public static function My_get_param_val_jsonrowuser_id() {
        $ret = self::My_get_param_val_jsonrowuser_array();
        if ($ret) {
            $ret = $ret['id'];
        }
        return $ret;
    }

    public static function My_check_is_login() {
        $ret = false;
        $param = 'sessid';
        $val = self::My_get_param_val($param);
        if (isset($val) && $val == session_id()) {
            $param = 'jsonrowuser';
            $val = self::My_get_param_val($param);
            if (isset($val)) {
                $ret = true;
            }
        }
        return $ret;
    }

    public static function My_login_user($arrparams) {
        foreach ($arrparams as $key => $value) {
            self::My_set_param_val($key, $value);
        }
        self::My_set_param_val('lock', false);
    }

    public static function My_lock_user() {
        self::My_set_param_val('lock', true);
    }

    public static function My_check_is_lock() {
        $ret = false;
        if (self::My_check_is_login()) {
            if (self::My_get_param_val('lock')) {
                $ret = true;
            }
        }

        return $ret;
    }

    public static function My_check_is_login_and_unlock() {
        $ret = false;
        if (!self::My_check_is_login()) {
            return MyCustomHelperRedirector::RedirectToPage(MyCustomHelperPages::makePage(CHCrmCConstantsPages::CONST_PAGES_ADMIN_LOGIN));
        } elseif (self::My_check_is_lock()) {
            return MyCustomHelperRedirector::RedirectToPage(MyCustomHelperPages::makePage(CHCrmCConstantsPages::CONST_PAGES_ADMIN_LOCK));
        } else {
            $ret = true;
        }
        return $ret;
    }

    public static function My_do_login($sessid, $username, $userpassword) {
        $blfound = false;
        self::My_start();
        if ($sessid == self::My_get_session()->getId()) {
            $rowuser = \B2b\Models\CoreModels\PpB2bAdminUsers::doLogin($username, $userpassword);
            if ($rowuser) {
                $blfound = true;
                self::My_login_user(array('sessid' => self::My_get_session()->getId(),
                    'jsonrowuser' => json_encode($rowuser)));
            }
        }

        return $blfound;
    }

    private static function My_Get_Sess_Prefix() {
        $di = \Phalcon\DI::getDefault();
        $prefix = md5($di->controller_params_array['base_path_with_publicpath']);
        return $prefix;
    }

}
