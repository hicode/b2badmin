<?php

use Phalcon\Cache\Backend\File as BackFile;
use Phalcon\Cache\Frontend\Output as FrontOutput;

class MyCustomHelperCache extends \Phalcon\Tag {

    const My_Cache_Lifetime_Image = 172800; //2 days
    const My_Cache_Lifetime_Content = 300; //5 min
    const My_Cache_Lifetime_Css = 60; //1 min
    const My_Cache_Lifetime_Js = 60; //1 min
    const My_Cache_Lifetime_Xml = 300; //5 min
    const My_Cache_Lifetime_Bash_Db = 300; //5 min
    const My_Cache_Category_Image = 'image';
    const My_Cache_Category_Css = 'css';
    const My_Cache_Category_Js = 'js';
    const My_Cache_Category_Content = 'content';
    const My_Cache_Category_Xml = 'xml';
    const My_Cache_Category_Bash_Db = 'bashdb';

    private $my_app;
    private $my_site;
    private $my_lifetime;
    private $my_key;
    private $my_cache;
    private $my_cachedir;
    private $my_filename;
    private $my_pubfilename;
    private $my_cachecategory;
    private $my_cacheenabled;
    private $my_content;

    // $lifetime = 172800. Cache the files for 2 days
    public function __construct($key, $lifetime = 172800, $cachecategory = self::My_Cache_Category_Content) {
        $di = \Phalcon\DI::getDefault();
        $this->my_app = $di->controller_params_array['app'];
        $this->my_site = $di->controller_params_array['site'];
        $this->my_key = $key;
        $this->my_lifetime = $lifetime;
        $this->my_cachecategory = $cachecategory;
        if ($cachecategory == self::My_Cache_Category_Css || $cachecategory == self::My_Cache_Category_Js) {
            $this->my_cacheenabled = MyCustomHelperCoreDi::Get_CacheCssJsEnabled();
        } else {
            $this->my_cacheenabled = MyCustomHelperCoreDi::Get_Cacheenabled();
        }
        if ($this->getCacheEnable()) {
            $this->my_cachedir = MyCustomHelperCoreToolsParams::Data_Dir_Cache($this->getApp(), $this->getSite(), $cachecategory);
            $this->my_pubfilename = MyCustomHelperCoreToolsParams::Rel_Dir_Cache($this->getApp(), $this->getSite(), $cachecategory) . $key;
            if ($cachecategory == self::My_Cache_Category_Css || $cachecategory == self::My_Cache_Category_Js) {
                $this->my_cachedir = MyCustomHelperCoreToolsParams::Public_Dir_Base_Tmp();
                $this->my_pubfilename = MyCustomHelperCoreToolsParams::Rel_Dir_Tmp() . $key;
            }


            $frontCache = new FrontOutput(
                    array(
                "lifetime" => $this->getLifetime()
                    )
            );
            $this->my_cache = new BackFile(
                    $frontCache, array(
                "cacheDir" => $this->getCacheDir()
                    )
            );
            $this->my_filename = $this->getCacheDir() . $key;
        }
    }

    public function getContentExist() {
        $ret = false;
        if (null !== $this->getContent()) {
            $ret = true;
        }

        return $ret;
    }

    public function getCacheEnable() {
        return $this->my_cacheenabled;
    }

    public function setContent($content) {
        if ($this->getCacheEnable()) {
            $this->getCache()->save($this->getKey(), $content);
        } else {
            if (isset($content)) {
                $this->my_content = $content;
            } else {
                $this->my_content = '';
            }
        }
    }

    public function removeCache() {
        if ($this->getCache()) {
            $this->getCache()->delete($this->getKey());
        }
    }

    private function getApp() {
        return $this->my_app;
    }

    private function getSite() {
        return $this->my_site;
    }

    private function getKey() {
        return $this->my_key;
    }

    private function getLifetime() {
        return $this->my_lifetime;
    }

    private function getCache() {
        return $this->my_cache;
    }

    public function getContent() {
        if ($this->getCacheEnable()) {
            return $this->getCache()->get($this->getKey());
        } else {
            return $this->my_content;
        }
    }

    public function getContentInlineCssTags() {

        return '<style>' . $this->my_content . '</style>';
    }

    private function getFilename() {
        return $this->my_filename;
    }

    private function getCacheDir() {
        return $this->my_cachedir;
    }

    public function getPubFilename() {
        return $this->my_pubfilename;
    }

    private function getCacheCategory() {
        return $this->my_cachecategory;
    }

    public function addContentToOtherCacheKey($othercachekey) {

        $otherobj = new MyCustomHelperCache($othercachekey, $this->getLifetime(), $this->getCacheCategory());
        $othercontent = $otherobj->getContent();
        $otherobj->setContent($othercontent . $this->getContent());
    }

}
