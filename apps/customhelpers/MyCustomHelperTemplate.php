<?php

class MyCustomHelperTemplate extends \Phalcon\Tag {

    public static function My_core_make_string_from_template($strtemplate, $paramsarr) {
        $data = $strtemplate;
        $data = str_ireplace("--copyright--", MyCustomHelperCoreStaticVars::get_copyright(), $data);
        foreach ($paramsarr as $key => $value) {
            if (!is_array($value)) {
                $data = str_ireplace("--" . $key . "--", $value, $data);
            }
        }
        
        return $data;
    }

    public static function Get_Template_For_Portlet() {
        return '
            
<div class="row">
    <div class="col-md-12">
        <div class="portlet box --portlet-div-class-portlet-colour--">
            <div class="portlet-title">
                <div class="caption">
                    <i class="--portlet-div-class-caption-headicon-icon-- --portlet-div-class-caption-headicon-colour--"></i>
            <i class="--portlet-div-class-caption-headicon-icon2-- --portlet-div-class-caption-headicon-colour2--"></i>--portlet-title-- 
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>

                    <a href="#" class="reload" data-load="true" data-url="--portlet-url--">
                    </a>

                </div>
            </div>
            <div class="portlet-body form">
                
                        --rowscontent--
                    
                
            </div>
        </div>
    </div>
</div>

     ';
    }

    public static function Get_Template_For_Form() {
        return '
            
<div class="row">
    <div class="col-md-12">
        <div class="modal-header">
                    
            <div class="modal-body">
                    <div id="bootstrap_alert">
							</div>
                    <p>
                             Alias Name
                    </p>
                    <div class="form-group">
                            <input name="id1" id="id1" class="form-control" type="text" data-tabindex="1">
                    </div>
                                        
                    
            </div>
            <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn red">Cancel</button>
                    <a id="okid" name="okid" class="btn green formclick" data-toggle="modal" data-target="#--nextmodalid--" href="--nextmodalurl--">
                        <i class="fa"></i>
                        <span class="hidden-480"> Ok </span>
                    </a>
                    <input id="hidden1" name="hidden1" type="hidden" value="--nextmodalurl--"/>
            </div>
    </div>
</div>
<script>

</script>
     ';
    }

    public static function Get_Metronic_Alert($metronic_alert_arr_params) {
        $ret = 'Metronic.alert({';
        foreach ($metronic_alert_arr_params as $key => $value) {
            $ret = $ret . $key . ':' . $value.',
                     ';
        }
        $ret = $ret . '});';
        return $ret;
    }

    public static function Get_Metronic_Alert_Default_Arr_Params_Success_Yes() {
        $metronic_alert_arr_params = array(
            'container' => '"#bootstrap_alert"',
            'place' => '"append"', // append or prepent in container 
            'type' => '"success"', // alert type
            'message' => '"The operation has completed succesfully"', // alert message
            'close' => '1', // make alert closable
            'reset' => '0', // close all previouse alerts first
            'focus' => '1', // auto scroll to the alert after shown
            'closeInSeconds' => '0', // auto close after defined seconds
            'icon' => '"warning"' // put icon before the message
        );
        return $metronic_alert_arr_params;
    }
    
    public static function Get_Metronic_Alert_Default_Arr_Params_Success_No() {
        $metronic_alert_arr_params = array(
            'container' => '"#bootstrap_alert"',
            'place' => '"append"', // append or prepent in container 
            'type' => '"danger"', // alert type
            'message' => '"Error during operation"', // alert message
            'close' => '1', // make alert closable
            'reset' => '0', // close all previouse alerts first
            'focus' => '1', // auto scroll to the alert after shown
            'closeInSeconds' => '0', // auto close after defined seconds
            'icon' => '"warning"' // put icon before the message
        );
        return $metronic_alert_arr_params;
    }

}
