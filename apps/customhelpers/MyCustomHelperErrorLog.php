<?php

class MyCustomHelperErrorLog extends \Phalcon\Tag {

    public static function My_error_log($str) {
        $trace = debug_backtrace();
        if (isset($trace[1])) {

            $classnamefunctionname = $trace[1]['class'] . '::' . $trace[1]['function'];
        }
        error_log('PpB2bAdmin-Errorlog in function ' . $classnamefunctionname . ' : ' . $str);
    }

}
