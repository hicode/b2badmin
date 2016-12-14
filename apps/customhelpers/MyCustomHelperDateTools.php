<?php

class MyCustomHelperDateTools extends \Phalcon\Tag {

    private static function getSeparator() {
        return '-';
    }

    public static function getDateDayMonthYear($datestr) {
        $time = strtotime($datestr);
        $myFormatForView = date("d" . self::getSeparator() . "m" . self::getSeparator() . "Y", $time);
        return $myFormatForView;
    }

    public static function getDateDayMonth($datestr) {
        $time = strtotime($datestr);
        $myFormatForView = date("d" . self::getSeparator() . "m", $time);
        return $myFormatForView;
    }

    public static function getDateDayMonthYearHourMin($datestr) {
        $time = strtotime($datestr);
        $myFormatForView = date("d" . self::getSeparator() . "m" . self::getSeparator() . "Y - H:i", $time);
        return $myFormatForView;
    }

    public static function getDateYearMonthNear($datestr) {
        $time = strtotime($datestr);
        $myFormatForView = date("Ym", $time);
        return $myFormatForView;
    }

    public static function getMicrotimeUniqueid() {
        return round(microtime(true) * 1000);
    }

    public static function getCurrDateTimeForDB() {
        $date = date('Y-m-d H:i:s');
        return $date;
    }

}
