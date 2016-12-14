<?php

class MyCustomHelperCssBase64 extends \Phalcon\Tag {

    public static function My_Static_CssBase64_From_Json_Key_MD5($puburl, $jsonurl, $cssurl) {
        return md5($puburl . $jsonurl . $cssurl) . '.css';
    }

    static function My_Static_CssBase64_From_Json($puburl, $jsonurl, $cssurl, $jsoncssarr = null, $key = null, $savefilename = null) {
        $di = \Phalcon\DI::getDefault();
        $txt = '';
        if (!isset($key)) {
            $key = self::My_Static_CssBase64_From_Json_Key_MD5($puburl, $jsonurl, $cssurl);
        }
        if (!isset($savefilename)) {
            $savefilename = $key;
        }
        $mycache = new MyCustomHelperCache( $key, MyCustomHelperCache::My_Cache_Lifetime_Content, MyCustomHelperCache::My_Cache_Category_Css);
        $di->controller_params_array['preexist'][$savefilename] = true;
        if (!$mycache->getContentExist()) {
            $di->controller_params_array['preexist'][$savefilename] = false;
            if (isset($jsoncssarr)) {
                foreach ($jsoncssarr as $key1 => $line) {
                    $txt = $txt . self::My_Static_CssBase64_From_Json_Make_Txt( $puburl, $line);
                }
            } else {
                $jsonfile = MyCustomHelperCoreToolsParams::Public_Dir_Base() . $jsonurl;
                $handle = fopen($jsonfile, "r");
                if ($handle) {
                    while (($line = fgets($handle)) !== false) {
                        $txt = $txt . self::My_Static_CssBase64_From_Json_Make_Txt( $puburl, $line);
                    }
                }
            }
            $mycache->setContent($txt);
        }

        return $mycache;
    }

    private static function My_Static_CssBase64_From_Json_Make_Txt( $puburl, $line) {
       
        $arrline = json_decode($line, true);
        $width = $arrline['width'];
        $height = $arrline['height'];
        $backgroundurl = $arrline['backgroundurl'];
        if (!MyCustomHelperStringTools::startsWith($backgroundurl, '/')) {
            $backgroundurl = $puburl . $backgroundurl;
        }
        $imgfilename = MyCustomHelperCoreToolsParams::Public_Dir_Base() . $backgroundurl;
        $bltransparent = $arrline['bltransparent'];
        if ($bltransparent === 0) {
            $bltransparent = false;
        } else {
            $bltransparent = true;
        }
        if (file_exists($imgfilename)) {
            $imgbin = CHMod20130918DConstantsSettings::CONST_F_GET_BIN_IMAGE_FROM_FILE( $imgfilename, $arrline['width'], $arrline['height'], $bltransparent);
            $txt = '#' . $arrline['divid'] . '{' . $arrline['customcss'] . 'background: url(data:image/png;base64,' . base64_encode($imgbin) . ') ' . $arrline['backgroundurl-extra'] . ';' . '}';
        }
        return $txt;
    }

    public static function My_Static_Get_Md5_RightLinkFilename($imgurl, $elid, $width, $height, $bladdtocssfile) {
        $ret = md5($imgurl . $elid . $width . $height . $bladdtocssfile);
        return $ret;
    }

    static function My_Static_CssBase64_RightLink( $imgurl, $elid, $width, $height) {
        $di = \Phalcon\DI::getDefault();
        $bltransparent = true;
        $key = self::My_Static_Get_Md5_RightLinkFilename($imgurl, $elid, $width, $height);
        $mycache = new MyCustomHelperCache( $key, MyCustomHelperCache::My_Cache_Lifetime_Css, MyCustomHelperCache::My_Cache_Category_Css);
        if (!$mycache->getContentExist()) {
            $imgfilename = MyCustomHelperCoreToolsParams::Public_Dir_Base() . $imgurl;
            if (file_exists($imgfilename)) {
                $imgbin = CHMod20130918DConstantsSettings::CONST_F_GET_BIN_IMAGE_FROM_FILE( $imgfilename, $width, $height, $bltransparent);
                $txt = $txt . '#' . $elid . '{width:' . $width . 'px; height:' . $height . 'px;background-size: cover;float: left;background: url(data:image/jpg;base64,' . base64_encode($imgbin) . ') no-repeat left top;}';
                $mycache->setContent($txt);
            }
        }

        return $mycache;
    }

}
