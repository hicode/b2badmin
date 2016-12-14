<?php

class AGCHModules extends \Phalcon\Tag {
    public static function GetModule($id,$blarray=true)
    {
        $ret=false;
        
        if(isset($modulesarr[$id]))
        {
            $ret=$modulesarr[$id];
            if($blarray==true)
            {
                $ret=  json_decode($ret,true);
            }
        }
        return $ret;
    }
}