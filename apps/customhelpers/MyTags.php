<?php

class MyTags extends \Phalcon\Tag {

    private static function MyCreateDirForDelete() {
        $di = \Phalcon\DI::getDefault();
        $dir = $di->controller_params_array['settings']['Dir_Public_Tmp_For_Delete'];
        if (!file_exists($dir) && !mkdir($dir, 0777, true)) {
            die('Failed to create ' . $dir);
        }
        return $dir;
    }

    /**
     * Generates a widget to show a HTML5 audio tag
     *
     * @param array
     * @return string
     */
    static private function MyCollectionCss($str, $path) {
        $path = MyCustomHelperCoreDi::Get_Html_base_path() . $path;
        $str = str_replace("url(\"..", "url(\"" . $path . "..", $str);
        $str = str_replace("url('..", "url('" . $path . "..", $str);
        $str = str_replace("url(..", "url(" . $path . "..", $str);
        $str = str_replace("url(fonts", "url(" . $path . "fonts", $str);
        $str = str_replace("url(../fonts", "url(" . $path . "../fonts", $str);
        $str = str_replace("url('fonts/", "url('" . $path . "fonts/", $str);
        return $str;
    }

    static public function MyCollectionCssGenerate($arr, $collectionname, $blangular = false) {
        return self::MyCollectionGenerateCustomMinify($arr, $collectionname, 'css', $blangular);
    }

    static private function MyCollectionJs($str) {
        $assetspath = MyCustomHelperCoreDi::Get_Template_admin_path_with_assets_path();
        if (isset($assetspath)) {
            $str = str_replace("'../../../assets/", "'" . $assetspath, $str);
        }

        return $str;
    }

    static public function MyCollectionJsGenerate($arr, $collectionname, $blangular = false) {
        return self::MyCollectionGenerateCustomMinify($arr, $collectionname, 'js', $blangular);
    }

    private static function MyReadFileFromWeb($fileurl, $filesave) {
        $ret = false;
        $str = file_get_contents($fileurl);
        if ($str) {
            $ret = file_put_contents($filesave, $str);
        }
        return $ret;
    }

    private static function MyFixHttpUrl($url) {
        $di = \Phalcon\DI::getDefault();
        $remoteurl = $url;
        if (strpos($url, '//') === false) {
            $remoteurl = MyCustomHelperCoreDi::Get_Base_path_with_publicpath() . $url;
        }
        return $remoteurl;
    }

    static public function MyCollectionGenerateCustomMinify($arr, $collectionname, $ext, $blangular = false) {
        $view = new Phalcon\Mvc\View();
        $collection = '';
        $md5collectionname = md5('custom' . $collectionname);
        $comments_start = '/*';
        $comments_end = '*/';
        if ($ext == 'js') {
            $cache = new MyCustomHelperCache($md5collectionname . '.' . $ext, MyCustomHelperCache::My_Cache_Lifetime_Js, MyCustomHelperCache::My_Cache_Category_Js);
        } elseif ($ext == 'css') {
            $cache = new MyCustomHelperCache($md5collectionname . '.' . $ext, MyCustomHelperCache::My_Cache_Lifetime_Css, MyCustomHelperCache::My_Cache_Category_Css);
        } else {
            MyCustomHelperErrorLog::My_error_log('Extention not found : ' . $ext);
        }
        $arr = isset($arr) ? $arr : array();
        $content = '';
        if (!$cache->getContentExist()) {
            $cache->setContent($content);
            if ($cache->getCacheEnable()) {
                foreach ($arr as $key => $value) {
                    $fname = null;
                    if (isset($value['localurl'])) {
                        $fname = self::MyFixHttpUrl($value['localurl']);
                    } elseif (isset($value['remoteurl'])) {
                        $fname = $value['remoteurl'];
                    } elseif (isset($value['path'], $value['filename'])) {
                        $fname = MyCustomHelperCoreDi::Get_Scriptdocumentroot() . DIRECTORY_SEPARATOR . $value['path'] . DIRECTORY_SEPARATOR . $value['filename'];
                    }
                    if (isset($fname)) {
                        $str = file_get_contents($fname);
                    } elseif (isset($value['partialviewdir'], $value['partialviewname'])) {

                        $str = $view->getRender($value['partialviewdir'], $value['partialviewname'], array(
                                ), function ($view) {
                            // Set any extra options here
                            $view->setViewsDir(__DIR__ . '/../b2b/views/');
                            $view->setRenderLevel(Phalcon\Mvc\View::LEVEL_LAYOUT);
                        }
                        );
                        //self::MyCollectionCss($collectionfordeletecss, $value['partialviewdir'], $value['partialviewname'], $key, $view);
                    } else {
                        $fname = 'Not setted file name.';
                    }
                    if (!$str) {
                        MyCustomHelperErrorLog::My_error_log('File not found : ' . $fname);
                    } else {
                        if ($ext == 'css') {
                            $str = MyTags::MyCollectionCss($str, $value['path']);
                        } elseif ($ext == 'js') {
                            $str = MyTags::MyCollectionJs($str);
                        }
                        $content.=$comments_start . 'Adding File : ' . $collectionname . ', ' . $key . $comments_end . '  
                         ' . $str;
                    }
                }
                if ($ext === 'css') {
                    // make it into one long line */
                    $content = str_replace(array("\n", "\r\n", "\r"), '', $content);
                    $content = str_replace(chr(13), ' ', $content);
                    $content = preg_replace('!\s+!', ' ', $content);
                    $content = str_replace("\r\n", "\n", $content);
                    $content = str_replace("\n", " ", $content);
                } else {
                    $content = str_replace(array("\n\n", "\r\n", "\r", chr(13)), "\n", $content);
                    $content = str_replace(array("\n\n", "\n\n\n", "\n\n\n"), "\n", $content);
                    $content = str_replace(array("\t"), " ", $content);
                    $content = preg_replace('/[[:blank:]]+/', ' ', $content);
                    //$content = preg_replace('!\s+!', ' ', $content);
                }
                $cache->setContent($content);
            } else {
                $i = 0;
                foreach ($arr as $key => $value) {
                    $fname = null;
                    if (isset($value['localurl'])) {
                        $fname = self::MyFixHttpUrl($value['localurl']);
                        $fname = $fname . '1.' . $ext;
                    } elseif (isset($value['remoteurl'])) {
                        $fname = $value['remoteurl'];
                    } elseif (isset($value['path'], $value['filename'])) {
                        $fname = MyCustomHelperCoreDi::Get_Html_base_path() . $value['path'] . $value['filename'];
                    }
                    if (isset($fname)) {
                        if ($blangular === true) {
                            if ($i > 0) {
                                $collection = $collection . ',';
                            }
                            $collection = $collection . '\'' . $fname . '\'';
                        } else {
                            if ($ext == 'css') {
                                $collection = $collection . '
<link rel="stylesheet" type="text/css" href="' . $fname . '" />
                                         ';
                            } elseif ($ext == 'js') {
                                $collection = $collection . '
<script type="text/javascript" src="' . $fname . '"></script>
          ';
                            }
                        }
                    } elseif (isset($value['partialviewdir'], $value['partialviewname'])) {

                        $str = $view->getRender($value['partialviewdir'], $value['partialviewname'], array(
                                ), function ($view) {
                            // Set any extra options here
                            $view->setViewsDir(__DIR__ . '/../b2b/views/');
                            $view->setRenderLevel(Phalcon\Mvc\View::LEVEL_LAYOUT);
                        }
                        );
                        if ($ext == 'css') {
                            $collection = $collection . ' 
<style> 
                                    ' . $str . ' 
</style>';
                        } elseif ($ext == 'js') {
                            $collection = $collection . '
<script type="text/javascript">
                                    ' . $str . '
</script>
                                    ';
                        }
                    }
                    $i++;
                }
            }
        }
        if ($cache->getCacheEnable()) {
            $collection = MyCustomHelperCoreDi::Get_Html_base_path() . $cache->getPubFilename();
            if ($blangular === true) {
                $collection = '\'' . $collection . '\'';
            } else {
                if ($ext == 'css') {
                    $collection = ' 
                                <link rel="stylesheet" type="text/css" href="' . $collection . '" /> 
                                 ';
                } elseif ($ext == 'js') {
                    $collection = '
          <script type="text/javascript" src="' . $collection . '"></script>
          ';
                }
            }
        }

        return $collection;
    }

    static public function MyCollectionGenerateCustomMinifyBottom() {
        $di = \Phalcon\DI::getDefault();
        $assetspath = $di->controller_params_array['template']['template_admin_path_with_assets_path'];
        $globalpath = $assetspath . 'global/';
        $pluginspath = $globalpath . 'plugins/';
        $templateadmincustompath = $di->controller_params_array['template']['template_admin_custom_path'];

        $jsminify = '';
        $currentpagearr = $di->controller_params_array[\CHCrmCParams::$keyarrOuterSidebarMenu]['angular']['currentpagearr'];
        $jsarr = $currentpagearr['angularbottom']['js'];
        $collectionname = 'BottomJs' . $currentpagearr['pageid'] . $currentpagearr['a']['span']['0']['trans_content'];

        $arr = array();

        foreach ($jsarr as $key => $value) {
            if (isset($value['path'])) {
                $path = '';
                foreach ($value['path'] as $key1 => $value1) {
                    if ($value1 == 'assetspath') {
                        $path.=$assetspath;
                    } elseif ($value1 == 'globalpath') {
                        $path.=$globalpath;
                    } elseif ($value1 == 'pluginspath') {
                        $path.=$pluginspath;
                    } elseif ($value1 == 'templateadmincustompath') {
                        $path.=$templateadmincustompath;
                    } else {
                        $path.=$value1;
                    }
                }
                $arr[] = array('path' => $path, 'filename' => $value['filename']);
            } elseif (isset($value['localurl'])) {
                $arr[] = self::MyMakeFromDbLocalurl($value);
//                $localurl = '';
//                if ($value['localurl']['pagename'] == 'helperpage') {
//                    $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $value['localurl']['helperpage']));
//                } elseif ($value['localurl']['pagename'] == 'helperpageparam1') {
//                    $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $value['localurl']['helperpage'], 'param1' => $value['localurl']['param1']));
//                } elseif ($value['localurl']['pagename'] == 'helperpageparam2') {
//                    $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $value['localurl']['helperpage'], 'param1' => $value['localurl']['param1'], 'param2' => $value['localurl']['param2']));
//                }
//                $arr[] = array('localurl' => $localurl);
            }
        }
        if (count($arr) > 0) {
            $jsminify = self::MyCollectionGenerateCustomMinify($arr, $collectionname, 'js', false);
        }

        return $jsminify;
    }

    static public function MyMakeFromDbLocalurl($arr) {
        $di = \Phalcon\DI::getDefault();
        $ret = null;
        if (isset($arr['localurl'])) {
            $localurl = '';
            $helperpage = isset($arr['localurl']['helperpage']) ? $arr['localurl']['helperpage'] : null;
            $mykatastima =isset($arr['localurl']['mykatastima']) ? $arr['localurl']['mykatastima'] : $di->controller_params_array['mykatastima'];
            if ($helperpage) {
                if ($arr['localurl']['pagename'] == 'helperpage') {
                    $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE, array('helperpage' => $helperpage,'mykatastima'=>$mykatastima));
                } elseif ($arr['localurl']['pagename'] == 'helperpageparam1') {
                    $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM1, array('helperpage' => $helperpage,'mykatastima'=>$mykatastima, 'param1' => $arr['localurl']['param1']));
                } elseif ($arr['localurl']['pagename'] == 'helperpageparam2') {
                    $localurl = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_DYNPAGE_HELPERPAGE_PARAM2, array('helperpage' => $helperpage,'mykatastima'=>$mykatastima, 'param1' => $arr['localurl']['param1'], 'param2' => $arr['localurl']['param2']));
                }
            }
            $ret = array('localurl' => $localurl);
        }
        return $ret;
    }

}
