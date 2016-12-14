<?php

class CHCrmCDataTableAjax extends \Phalcon\Tag {

    public static $keyarr = 'DataTableAjax';

    public static function Get_Bootstrap_Alert_Unique_Id($tabuniqueid = '') {
        return self::Get_HTML_Unique_Id('bootstrap_alert', $tabuniqueid);
    }

    public static function Get_Tr_Unique_Id($tabuniqueid = '') {
        return self::Get_HTML_Unique_Id('tr_details', $tabuniqueid);
    }

    public static function Get_Frm_Tr_Unique_Id($tabuniqueid = '') {
        return self::Get_Tr_Unique_Id($tabuniqueid . 'frm_');
    }

    public static function Get_Portlet_Unique_Id($tabuniqueid = '') {
        return self::Get_HTML_Unique_Id('portlet_details', $tabuniqueid);
    }

    public static function Get_Portlet_Details_Title_Unique_Id($tabuniqueid = '') {
        return self::Get_HTML_Unique_Id('portlet_details_title', $tabuniqueid);
    }

    public static function Get_Tab_Unique_Id($tabnum) {
        return self::Get_HTML_Unique_Id('tab' . $tabnum);
    }

    private static function Get_HTML_Unique_Id($prefix, $tabuniqueid = '') {
        //$di = \Phalcon\DI::getDefault();
        //$req = $di->controller_params_array['glb_request'];
        $dataID = isset(MyCustomHelperCoreDi::Get_Glb_request()['dataID']) ? MyCustomHelperCoreDi::Get_Glb_request()['dataID'] : '';
        $tr_id = $tabuniqueid . $prefix . '_' . $dataID;
        return $tr_id;
    }

}
