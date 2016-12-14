<?php

class MyCustomHelperNumberTools extends \Phalcon\Tag {

    public static function getNumberFloat($num) {
        return number_format((float) $num, 2, '.', '');
    }

    public static function getNumberInt($num) {
        return number_format((float) $num, 0, '.', '');
    }

    public static function getNumberMoney($num, $blshowcurrency = false) {
        $ret = number_format((float) $num, 2, '.', '');
        if ($blshowcurrency) {
            $ret.='&nbsp;&euro;';
        }
        return $ret;
    }

}
