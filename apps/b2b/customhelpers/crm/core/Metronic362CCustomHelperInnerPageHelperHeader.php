<?php

class Metronic362CCustomHelperInnerPageHelperHeader extends \Phalcon\Tag {

    

    public static function Get_Page_Header() {
        $di = \Phalcon\DI::getDefault();
        $blshowactions = true;
        if (isset($di->controller_params_array[CHCrmCParams::$keyarrPageHelperHeader]['blshowactions'])) {
            $blshowactions = $di->controller_params_array[CHCrmCParams::$keyarrPageHelperHeader]['blshowactions'];
        }
        
        $ret = '<h3 class="page-title">
        ' . $di->controller_params_array[CHCrmCParams::$keyarrPageHelperHeader]['pagetitle'] . ' <!-- <small>database tables</small>-->
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="#/dashboard.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#/datatables/advanced.html">Settings</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            ' . $di->controller_params_array[CHCrmCParams::$keyarrPageHelperHeader]['breadcrumb']['title'] . '
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">';
        if ($blshowactions == true) {
            $ret = $ret . '<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                Actions <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">
                        <i class="icon-user"></i> New User </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-basket"></i> New order </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="#">
                        <i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
                    </a>
                </li>
            </ul>';
        }
        $ret = $ret . '    
        </div>
    </div>
</div>';
        return $ret;
    }

}
