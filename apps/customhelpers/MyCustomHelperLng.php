<?php

class MyCustomHelperLng extends \Phalcon\Tag {

    public static $Static_Lng_Available = '{"1":"el","2":"en"}';
    public static $Static_Lng_Flags = '{"1":"gr.png","2":"us.png"}';
    public static $Static_Lng_El_Prefix = 'el';
    public static $Static_Lng_En_Prefix = 'en';
    public static $Static_Lng_All_Id = 0;
    public static $Static_Lng_El_Id = 1;
    public static $Static_Lng_En_Id = 2;

    public static function My_get_current_lng_shortname() {
        $di = \Phalcon\DI::getDefault();
        return $di->controller_params_array['lng'];
    }

    public static function My_get_current_lng_id() {
        $di = \Phalcon\DI::getDefault();
        return self::My_get_languages_id_from_shortname(self::My_get_current_lng_shortname());
    }

    public static function My_get_lng_shortname_from_id_or_shortname($lng) {
        $ret = self::My_get_lng_shortname_default();
        if (isset($lng)) {
            if (is_string($lng)) {
                $lng = mb_strtolower($lng);
            }

            if (self::My_get_languages_id_from_shortname($lng)) {
                $ret = $lng;
            } elseif (self::My_get_languages_shortname_from_id($lng)) {
                $ret = self::My_get_languages_shortname_from_id($lng);
            }
        }
        return $ret;
    }

    public static function My_get_lng_id_from_id_or_shortname($lng) {
        $ret = self::My_get_lng_id_default();
        if (isset($lng)) {
            if (is_string($lng)) {
                $lng = mb_strtolower($lng);
            }

            if (self::My_get_languages_id_from_shortname($lng)) {
                $ret = self::My_get_languages_id_from_shortname($lng);
            } elseif (self::My_get_languages_shortname_from_id($lng)) {
                $ret = $lng;
            }
        }
        return $ret;
    }

    public static function My_get_lng_shortname_default() {
        $di = \Phalcon\DI::getDefault();
        if (isset($di->controller_params_array['lng_prefix_default'])) {
            $ret = $di->controller_params_array['lng_prefix_default'];
        } elseif (isset($di->myglobal_params_array['lng_prefix_default'])) {
            $ret = $di->myglobal_params_array['lng_prefix_default'];
        } else {
            $ret = self::$Static_Lng_El_Prefix;
        }
        return $ret;
    }

    public static function My_get_lng_id_default() {
        $ret = self::My_get_languages_id_from_shortname(self::My_get_lng_shortname_default());
        return $ret;
    }

    private static function My_get_languages_shortname_from_id($lngid) {
        $arr = self::My_get_available_languages_id_keys();
        $ret = false;
        if (isset($arr[$lngid])) {
            $ret = $arr[$lngid];
        }
        return $ret;
    }

    public static function My_get_languages_id_from_shortname($lngshortname) {
        $arr = self::My_get_available_languages_shortname_keys();
        $ret = false;
        if (isset($arr[$lngshortname])) {
            $ret = $arr[$lngshortname];
        }
        return $ret;
    }

    public static function My_get_available_languages_id_keys() {
        return json_decode(self::$Static_Lng_Available, true);
    }

    public static function My_get_available_languages_shortname_keys() {
        return array_flip(json_decode(self::$Static_Lng_Available, true));
    }

    public static function My_get_languages_flag_from_id($lngid) {
        $arr = json_decode(self::$Static_Lng_Flags, true);
        $ret = false;
        if (isset($arr[$lngid])) {
            $ret = $arr[$lngid];
        }
        return $ret;
    }

}
