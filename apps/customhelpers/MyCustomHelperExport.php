<?php

class MyCustomHelperExport extends \Phalcon\Tag {

    protected static function MyCreateDirForExport() {
        $di = \Phalcon\DI::getDefault();
        $dir = AGCHParams::$Settings__Dir_Public_Tmp_Export_0;
        if (!file_exists($dir) && !mkdir($dir, 0777, true)) {
            die('Failed to create ' . $dir);
        }
        else
        {
            chmod($dir, 0777);
        }
        return $dir;
    }

}
