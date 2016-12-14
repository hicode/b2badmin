<?php

class MyCustomHelperPages extends \Phalcon\Tag {

    public static function makePage($constpage, $arrparams = null) {
        $di = \Phalcon\DI::getDefault();
        $link = $constpage;
        if ($arrparams && is_array($arrparams)) {
            foreach ($arrparams as $key => $value) {
                $link = str_replace('/:' . $key, '/' . $value, $link);
            }
        }

        $link = str_replace('/:base_controller', '/' . $di->controller_params_array['base_controller'], $link);
        $link = str_replace('/:mykatastima', '/' . $di->controller_params_array['mykatastima'], $link);
        $link = str_replace('/:lng', '/' . $di->controller_params_array['lng'], $link);
        //if ($bladdpublicpath === false) {
        if (substr($link, 0, 1) === '/') {
            $link = substr($link, 1);
        }
        //} else {
        //    $link = '/' . $di->controller_params_array['publicpath'] . $link;
        //}
        return $link;
    }

    public static function makePageAngular($pageid, $arrparams = null) {
        $di = \Phalcon\DI::getDefault();
        $link = '\'' . $di->controller_params_array['html_base_path'] . ':base_controller/\'+params.lng+\'/admin/dynhelperpage/:mykatastima/:pageid/';
        if ($arrparams && is_array($arrparams)) {
            foreach ($arrparams as $key => $value) {
                $link = str_replace('/:' . $key, '/' . $value, $link);
            }
        }
        $link = str_replace('/:base_controller', '/' . $di->controller_params_array['base_controller'], $link);
        $link = str_replace('/:mykatastima', '/' . $di->controller_params_array['mykatastima'], $link);
        $link = str_replace('/:lng', '/' . $di->controller_params_array['lng'], $link);
        $link = str_replace('/:pageid', '/' . $pageid, $link);
        $link = $link . '?unid=\'+Math.random()';
        return $link;
    }

    public static function makePageAngularForBread($pageid, $arrparams = null, $bldatatableajax = false) {
        $di = \Phalcon\DI::getDefault();
        $link = $di->controller_params_array['html_base_path'] . ':base_controller/:lng/admin/index/#/:lng/:mykatastima/:pageid';
        if($bldatatableajax)
        {
            $link = $di->controller_params_array['html_base_path'] . ':base_controller/:lng/admin/index/#/:lng/:mykatastima/data-table-ajax-level1/:pageid';
        }
        if ($arrparams && is_array($arrparams)) {
            foreach ($arrparams as $key => $value) {
                $link = str_replace('/:' . $key, '/' . $value, $link);
            }
        }
        $link = str_replace('/:base_controller', '/' . $di->controller_params_array['base_controller'], $link);
        $link = str_replace('/:mykatastima', '/' . $di->controller_params_array['mykatastima'], $link);
        $link = str_replace('/:lng', '/' . $di->controller_params_array['lng'], $link);
        $link = str_replace('/:pageid', '/' . $pageid, $link);
        $link = $link . '?unid=' . rand(1, 9999999);
        return $link;
    }

}
