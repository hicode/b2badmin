<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminMetronic454PluginPageHelperHeader extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'pageheaderv100';

    public static function Make_keyarrPageHelperHeader() {
        
    }

    public static function Get_Page_Header($blshowbreadmenu = true, $blshowtitle = true) {
        $di = \Phalcon\DI::getDefault();
        $blshowactions = true;
        $mytmparr = $di->controller_params_array[\CHCrmCParams::$keyarrPageHelperHeader];
        $blshowactions = ( isset($mytmparr['blshowactions']) ? $mytmparr['blshowactions'] : false);
        $pagetitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $mytmparr, 'pagetitle');
        $breadcrumbtitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $mytmparr['breadcrumb'], 'title');
        $defaultpage = '';
        $defaulturl = '#';
        $breadmenu = '';
        if (isset($di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu])) {
            $arroutersidebar = $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu];
            $breadmenu = self::GetBreadRoad($arroutersidebar, 1);
        }
        $ret = '';
        if ($blshowtitle) {
            $ret.= '<h3 class="page-title">
        ' . $pagetitle . ' <!-- <small>database tables</small>-->
</h3>';
        }


        $ret.= '
<div class="page-bar">';
        if ($blshowbreadmenu) {
            $ret.='<ul class="page-breadcrumb">
    ' . $breadmenu . '
       <!-- <li>
            <i class="fa fa-home"></i>
            <a href="' . $defaulturl . '">' . $defaultpage . '</a>  <a href="#/dashboard.html">Home</a> 
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#/datatables/advanced.html">Settings</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            ' . $breadcrumbtitle . '
        </li>-->
    </ul>';
        }
        $ret.='
    <div class="page-toolbar">
        <div class="btn-group pull-right">';
        if ($blshowactions) {
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

    private static function GetBreadRoad($elm, $level) {
        $di = \Phalcon\DI::getDefault();
        $blfound = false;
        $helperpage = isset($di->controller_params_array['helperpage']) ? $di->controller_params_array['helperpage'] : '';
        $defaultpage = null;
        $defaultkatastima = null;
        if (isset($elm['item'])) {
            foreach ($elm['item'] as $key => $value) {
                if ($level == 1) {
                    $defaultpage = $elm['angular']['defaultpage'];
                    $defaultpagearr = $elm['angular']['defaultpagearr'];
                    $defaultkatastima = $defaultpagearr['mykatastima'];
                    $defaultpageurl = \MyCustomHelperPages::makePageAngularForBread($defaultpage, array('mykatastima' => $defaultkatastima));

                    $ret = '<li>
                                <i class="fa fa-home"></i>
                                <a href="' . $defaultpageurl . '">' . PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $defaultpagearr, 'pagetitle') . '</a> 
                                <i class="fa fa-angle-right"></i>
                            </li>';
                }
                $breadcrumbtitle = PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig(self::$AvailablePluginAliasName, $value['a']['span']['0'], 'content');
                $pageid = isset($value['pageid']) ? $value['pageid'] : null;
                $mykatastima = isset($value['mykatastima']) ? $value['mykatastima'] : null;
                $type = isset($value['type']) ? $value['type'] : null;
                if (isset($pageid, $mykatastima)) {
                    if ((isset($defaultpage, $defaultkatastima) && $pageid != $defaultpage && $mykatastima != $defaultkatastima) || !isset($defaultpage)) {
                        if ($level == 1) {
                            $ret.='<li>';
                        } else {
                            $ret = '<li>';
                        }
//                    if ($level == 1) {
//                        $ret.='<i class="fa fa-home"></i>';
//                    }
                        if ($helperpage == $pageid && $mykatastima == \CHCrmCParams::My_get_mykatastima()) {
                            $ret.= $breadcrumbtitle;

                            $blfound = true;
                        } else {
                            if ($type == 'link') {
                                $ret.=' 
                                    <a href="' . $pageid . '">' . $breadcrumbtitle . '</a>
                                    <i class="fa fa-angle-right"></i>
                                ';
                            } else {
                                $ret.= $breadcrumbtitle;
                            }
                            $ret.=' 
                                    <i class="fa fa-angle-right"></i>
                                ';
                        }
                        $ret.='</li>';
                    }
                    if ($helperpage == $pageid && \CHCrmCParams::My_get_mykatastima() == $mykatastima) {
                        $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['currentpagearr'] = $value;
                        $blfound = true;
                    }
                } else {
                    if ($level == 1) {
                        $ret.='<li>';
                    } else {
                        $ret = '<li>';
                    }
                    $ret.= $breadcrumbtitle;
                    $ret.=' 
                                    <i class="fa fa-angle-right"></i>
                                ';
                }
                if ($blfound) {
                    break;
                } else {
                    $blfound = self::GetBreadRoad($value, $level + 1);
                    if ($blfound) {
                        $ret.=$blfound;
                        break;
                    }
                }
            }
        }
        if ($blfound) {
            $blfound = $ret;
        }
        return $blfound;
    }

}
