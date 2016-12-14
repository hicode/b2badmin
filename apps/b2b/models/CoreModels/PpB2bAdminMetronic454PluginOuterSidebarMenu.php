<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminMetronic454PluginOuterSidebarMenu extends PpB2bAdminVfroutepagepluginnoavailableparams {

//    private static function Make_If_Not_Exist_outersidebarmenuv100_outer_sidebar_menu() {
//        $di = \Phalcon\DI::getDefault();
//        if (!isset($di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu])) {
//            $retarr = \B2b\Models\CoreModels\PpB2bAdminVfpluginnoavailableparams::Get_Params_By_Aliasname('outersidebarmenuv100_outer_sidebar_menu');
//            $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu] = $retarr[\CHCrmCParams::$keyarrOuterSidebarMenu];
//            self::Make_keyarrOuterSidebarMenu();
//        }
//    }
    public static $AvailablePluginAliasName = 'outersidebarmenuv100';

    public static function Get_Angular_stateProvider() {
        $di = \Phalcon\DI::getDefault();
//        self::Make_If_Not_Exist_outersidebarmenuv100_outer_sidebar_menu();
        return $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['stateProvider'];
    }

    public static function Get_Angular_defaultpage() {
        $di = \Phalcon\DI::getDefault();
        return $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['defaultpage'];
    }

    public static function Get_Angular_defaultpagearr() {
        $di = \Phalcon\DI::getDefault();
        return $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['defaultpagearr'];
    }

    public static function Get_Angular_defaultpagearr_mykatastima() {
        $di = \Phalcon\DI::getDefault();
        $mykatastima = isset($di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['defaultpagearr']['mykatastima']) ? $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['defaultpagearr']['mykatastima'] : $di->controller_params_array['mykatastima'];
        return $mykatastima;
    }

    public static function Make_keyarrOuterSidebarMenu() {
        $di = \Phalcon\DI::getDefault();
        if (isset($di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu])) {
            $mytmparr = $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu];
            $txt = self::Make_Item($mytmparr);
            $mytmparr['finaltxt'] = $txt;
        }
        $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu] = $mytmparr;
        self::Make_Angularjs();
    }

    private static function Make_Angularjs() {
        $di = \Phalcon\DI::getDefault();
        $str = '';
        $defaultpage = '';
        $defaultpagearr = '';
        foreach ($di->controller_params_array['angular'] as $pageidwithkatastima => $value) {
            $mykatastima=$value['mykatastima'];
            $pageid = $value['pageid'];
            if (isset($value['defaultpage']) && $value['defaultpage']) {
                $defaultpage = $pageid;
                $defaultpagearr = $value;
            }

            $pagetitle = isset($value['pagetitle']) ? $value['pagetitle'] : '';
            $pageidsimple = str_ireplace('_', '', $pageidwithkatastima);
            $trans_pagetitle = isset($value['trans_pagetitle']) ? $value['trans_pagetitle'] : null;
            $pagetitle.=PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, $trans_pagetitle);
            $str.= ' 
                    .state(\'' . $pageidsimple . '\', {
                    url: "/:lng/' . $mykatastima . '/' . $pageid . '.html",
                    templateUrl: function (params) {
                        return ' . \MyCustomHelperPages::makePageAngular($pageid, array('mykatastima' => $mykatastima)) . ';
                    },
                    data: {pageTitle: \'' . $pagetitle . '\'},
                    controller: "' . $value['controller'] . '",
                    resolve: {
                        deps: [\'$ocLazyLoad\', function ($ocLazyLoad) {
                                return $ocLazyLoad.load({
                                    name: \'MetronicApp\',
                                    insertBefore: \'#ng_load_plugins_before\', 
                                    files: [';
            $arrcss = isset($value['css']) ? $value['css'] : null;
            $cssminify = self::Make_Angularjs_Minify($arrcss, $pageidsimple, 'css');
            $arrjs = isset($value['js']) ? $value['js'] : null;
            $jsminify = self::Make_Angularjs_Minify($arrjs, $pageidsimple, 'js');
            $str.=$cssminify . ',' . $jsminify . ']
                                });
                            }]
                    }
                })';
        }
        unset($di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']);
        $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['stateProvider'] = $str;
        $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['defaultpage'] = $defaultpage;
        $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['defaultpagearr'] = $defaultpagearr;
    }

    private static function Make_Angularjs_Minify($arrfiles, $pageidsimple, $type = 'css') {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['template']['template_admin_path_with_assets_path'];
        $globalpath = $assetspath . 'global/';
        $pluginspath = $globalpath . 'plugins/';
        $templateadmincustompath = $di->controller_params_array['template']['template_admin_custom_path'];

        $arr = array();
        $collectionname = $type . $pageidsimple;
        if (isset($arrfiles) && is_array($arrfiles) && count($arrfiles) > 0) {
            foreach ($arrfiles as $key => $value1) {
                if (isset($value1['path'])) {
                    $path = '';
                    if ($value1['path'][0] == 'assetspath') {
                        $path = $assetspath;
                    } elseif ($value1['path'][0] == 'globalpath') {
                        $path = $globalpath;
                    } elseif ($value1['path'][0] == 'pluginspath') {
                        $path = $pluginspath;
                    } elseif ($value1['path'][0] == 'templateadmincustompath') {
                        $path = $templateadmincustompath;
                    }
                    $path.=$value1['path'][1];
                    $arr[] = array('path' => $path, 'filename' => $value1['filename']);
                } elseif (isset($value1['localurl'])) {
                    $arr[] = \MyTags::MyMakeFromDbLocalurl($value1);
//                    $localurl = '';
//                    if ($value1['localurl']['pagename'] == 'helperpage') {
//                        $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $value1['localurl']['helperpage']));
//                    } elseif ($value1['localurl']['pagename'] == 'helperpageparam1') {
//                        $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $value1['localurl']['helperpage'], 'param1' => $value1['localurl']['param1']));
//                    } elseif ($value1['localurl']['pagename'] == 'helperpageparam2') {
//                        $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $value1['localurl']['helperpage'], 'param1' => $value1['localurl']['param1'], 'param2' => $value1['localurl']['param2']));
//                    }
//                    $arr[] = array('localurl' => $localurl);
                }
            }
        }
        $minify = \MyTags::MyCollectionGenerateCustomMinify($arr, $collectionname, $type, true);
        return $minify;
    }

    private static function Make_Item($arrin) {
        $di = \Phalcon\DI::getDefault();
        $txt = '';

        foreach ($arrin['item'] as $key => $arr) {
            $mykatastima = \CHCrmCParams::My_get_mykatastima($arrin);
            $mykatastima = isset($arr['mykatastima']) ? $arr['mykatastima'] : $mykatastima;
            $arr['mykatastima'] = $mykatastima;
            $type = $arr['type'];
            if (isset($arr['angular'])) {
                $arr['angular']['mykatastima'] = $mykatastima;
                $arr['angular']['pageid'] = $arr['pageid'];
                $di->controller_params_array['angular'][$arr['pageid'] . $mykatastima] = $arr['angular'];
            }
            if ($type == 'link') {
                $txt.= self::Make_Type_Link($arr);
            } elseif ($type == 'group') {
                $txt.= self::Make_Type_Group($arr);
            }
        }
        return $txt;
    }

    private static function Make_Type_Link($arr) {
        $di = \Phalcon\DI::getDefault();
        $txt = '';
        $pageid = $arr['pageid'];
        $mykatastima = \CHCrmCParams::My_get_mykatastima($arr);
        $a = '<a id="sidebar_menu_link_' . \MyCustomHelperLng::My_get_current_lng_shortname() . '_' . $mykatastima . '_' . $pageid . '" href="' . \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_INDEX) . '#/' . \MyCustomHelperLng::My_get_current_lng_shortname() . '/' . $mykatastima . '/' . $pageid . '.html">';
        $liclass = isset($arr['li']['class']) ? $arr['li']['class'] : '';
        $i = self::Make_Tag_I($arr);
        $span = self::Make_Tag_Span($arr);
        $text = isset($arr['a']['text']) ? $arr['a']['text'] : '';
        $txt.= '<li class="' . $liclass . '">';
        $txt.= $a;
        $txt.= $i;
        $txt.= ' ' . $text;
        $txt.= $span;
        $txt.= '</a>';
        $txt.= '</li>';
        return $txt;
    }

    private static function Make_Tag_I($arr) {
        $i = '';
        foreach ($arr['a']['i'] as $key => $value) {
            $i = $i . '<i ';
            if (isset($value['class'])) {
                $i = $i . ' class="' . $value['class'] . '"';
            }
            $i = $i . '>';
            $i = $i . '</i>';
        }
        return $i;
    }

    private static function Make_Tag_Span($arr) {
        $span = '';
        foreach ($arr['a']['span'] as $key => $value) {
            $span = $span . '<span ';
            if (isset($value['class'])) {
                $span = $span . ' class="' . $value['class'] . '"';
            }
            $span = $span . '> ';
            $content = isset($value['content']) ? $value['content'] : '';
            $trans_content = isset($value['trans_content']) ? $value['trans_content'] : null;
            $content.=PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation(self::$AvailablePluginAliasName, $trans_content);
            $span = $span . $content;
            $span = $span . '</span>';
        }
        return $span;
    }

    private static function Make_Type_Group($arr) {
        $txt = '';
        $a = '<a href="javascript:;" class="nav-link nav-toggle">';
        $liclass = isset($arr['li']['class']) ? $arr['li']['class'] : '';
        $i = self::Make_Tag_I($arr);
        $span = self::Make_Tag_Span($arr);
        $txt.= '<li class="' . $liclass . '">';
        $txt.= $a;
        $txt.= $i;
        $txt.= $span;
        $txt.= '</a>';
        $txt.='<ul class="sub-menu">';
        $txt.=self::Make_Item($arr);
        $txt.='</ul>';
        $txt.= '</li>';
        return $txt;
    }

}
