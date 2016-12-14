<?php

namespace B2b\Models\CoreModels;

class PpB2bAdminMetronic454PluginNewRecord extends DlB2bAdminMetronic454PluginNewRecord {

    protected static $postPluginGetNewRecordTplAction = 'getnewrecordtpl';
    protected static $postParam1TableMapping = ['inner_home_crm_service_contracts_new' => 'core_crm_customer_contract'];

    public static function Get_Post_Param1_Key_inner_home_crm_service_contracts_new() {
        return 'inner_home_crm_service_contracts_new';
    }

    public static function Get_Post_PluginGetNewRecordTplAction() {
        return self::$postPluginGetNewRecordTplAction;
    }

    public static function Get_Post_Param1_From_Param1TableMapping($keyname) {
        $ret = isset(self::$postParam1TableMapping[$keyname]) ? self::$postParam1TableMapping[$keyname] : 'notblname';
        return $ret;
    }

    public static function Make_keyarrNewRecord() {
        
    }

}
