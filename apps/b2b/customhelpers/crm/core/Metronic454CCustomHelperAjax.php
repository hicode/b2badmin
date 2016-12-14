<?php

class Metronic454CCustomHelperAjax extends \Phalcon\Tag {

    public static function get_div_ajax_large() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['base_path_with_publicpath'].'/'.$di->controller_params_array['template']['template_admin_path_with_assets_path'];
        return ' <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
<div class="modal fade bs-modal-lg" id="ajax-large" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <div class="modal-body">
                <img src="' . $assetspath . 'global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span>
                    &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
         ';
    }

    public static function get_div_ajax_full() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['base_path_with_publicpath'].'/'.$di->controller_params_array['template']['template_admin_path_with_assets_path'];
        return ' <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
<div class="modal fade" id="ajax-full" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-body">
                <img src="' . $assetspath . 'global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span>
                    &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
         ';
    }

    public static function get_div_ajax_large_stack1() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['base_path_with_publicpath'].'/'.$di->controller_params_array['template']['template_admin_path_with_assets_path'];
        return ' <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
<div class="modal fade bs-modal-lg" id="ajax-large-stack1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <div class="modal-body">
                <img src="' . $assetspath . 'global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span>
                    &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
         ';
    }

    public static function get_div_ajax_full_stack1() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['base_path_with_publicpath'].'/'.$di->controller_params_array['template']['template_admin_path_with_assets_path'];
        return ' <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
<div class="modal fade" id="ajax-full-stack1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-body">
                <img src="' . $assetspath . 'global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span>
                    &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
         ';
    }

    public static function get_div_ajax_small() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['base_path_with_publicpath'].'/'.$di->controller_params_array['template']['template_admin_path_with_assets_path'];
        return ' <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
<div class="modal fade bs-modal-sm" id="ajax-small" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <div class="modal-body">
                <img src="' . $assetspath . 'global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span>
                    &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
         ';
    }

    public static function get_div_ajax_small_stack1() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['base_path_with_publicpath'].'/'.$di->controller_params_array['template']['template_admin_path_with_assets_path'];
        return ' <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
<div class="modal fade bs-modal-sm" id="ajax-small-stack1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content">
            <div class="modal-body">
                <img src="' .$assetspath . 'global/img/loading-spinner-grey.gif" alt="" class="loading">
                <span>
                    &nbsp;&nbsp;Loading... </span>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
         ';
    }

}
