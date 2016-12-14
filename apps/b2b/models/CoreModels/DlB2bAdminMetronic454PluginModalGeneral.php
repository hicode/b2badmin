<?php

namespace B2b\Models\CoreModels;

class DlB2bAdminMetronic454PluginModalGeneral extends PpB2bAdminVfroutepagepluginnoavailableparams {
    public static $AvailablePluginAliasName = 'modalgeneralv100';
    public static $HeaderContentPlaceholder = '{MODAL-HEADER-CONTENT}';
    public static $HeaderTitlePlaceholder = '{MODAL-HEADER-TITLE}';
    public static $BodyContentPlaceholder = '{MODAL-BODY-CONTENT}';
    public static $FooterContentPlaceholder = '{MODAL-FOOTER-CONTENT}';
    
    private static function Get_Modal_Header_Content ($header = true) {
        return $header ? '<div class="modal-header">'. self::$HeaderContentPlaceholder .'</div>' : '';
    }
    
    private static function Get_Modal_Body_Content ($body = true) {
        return $body ? '<div class="modal-body">' . self::$BodyContentPlaceholder . '</div>' : '';
    }
    
    private static function Get_Modal_Footer_Content ($footer = true) {
        return $footer ? '<div class="modal-footer">' . self::$FooterContentPlaceholder . '</div>' : '';
    }
    
    public static function Get_Modal_HTML ($id) {
        return '<div id="' . $id . '" class="modal fade" tabindex="-1"></div>';
    }
    
    public static function Get_Modal($header = true, $body = true, $footer = true){
        return (self::Get_Modal_Header_Content($header) . self::Get_Modal_Body_Content($body) . self::Get_Modal_Footer_Content($footer));
    }
    
}