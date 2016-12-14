<?php

class MyCustomHelperStringTools extends \Phalcon\Tag {

    public static function startsWith($haystack, $needle) {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    public static function endsWith($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    public static function minifyHTML($content) {
        $tmpcontent = str_replace(array("\r\r"), "\r", $content);
        while ($content !== $tmpcontent) {
            $content = $tmpcontent;
            $tmpcontent = str_replace(array("\r\r"), "\r", $tmpcontent);
        }
        $tmpcontent = str_replace(array("\n\n"), "\n", $content);
        while ($content !== $tmpcontent) {
            $content = $tmpcontent;
            $tmpcontent = str_replace(array("\n\n"), "\n", $tmpcontent);
        }
        $content = str_replace(array("\t"), " ", $content);
        while ($content !== $tmpcontent) {
            $content = $tmpcontent;
            $tmpcontent = str_replace(array("\t\t"), "\t", $tmpcontent);
        }
        $content = str_replace(array("  ", "   ", "    "), ' ', $content);
        while ($content !== $tmpcontent) {
            $content = $tmpcontent;
            $tmpcontent = str_replace(array("  "), " ", $tmpcontent);
        }
        return $content;
    }

    public static function getParamsbyparamname($paramsstr, $paramname) {
        $paramsstr = str_replace('&#92;', '\\', $paramsstr);
        $myArray = explode('\n', $paramsstr);
        $ret = '';
        foreach ($myArray as $key => $value) {
            $myArray2 = explode('=', $value);
            if (isset($myArray2[0], $myArray2[1]) && $myArray2[0] == $paramname) {
                $ret = $myArray2[1];
                break;
            }
        }
        return $ret;
    }

}
