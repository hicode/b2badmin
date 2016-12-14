<?php

class MyCustomHelpeHtmlSelectList extends \Phalcon\Tag {

    public static function getHtmlSelectList($valsarray = null, $selectedkeyval = null) {

        $ret = '';
        foreach ($valsarray as $key => $value) {
            $selected = '';
            if (isset($selectedkeyval) && $key == $selectedkeyval) {
                $selected = 'selected';
            }
            $ret = $ret . '<option value="' . $key . '" ' . $selected . '>' . $value . '</option>';
        }
        return $ret;
    }

}
