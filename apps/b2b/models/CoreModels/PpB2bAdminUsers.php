<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com


class PpB2bAdminUsers {

    private static function getExtendClassname() {
        return \MyCustomHelperClassTools::My_Core_Get_Classname('Coreusers', 'production');
    }

    public function __call($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function __callStatic($name, $params) {
        return call_user_func_array(array(self::getExtendClassname(), $name), $params);
    }

    public static function doLogin($username, $userpassword) {
        $extendclassname = self::getExtendClassname();
        $rowuser = false;
        $security = new \Phalcon\Security;
        $security->setWorkFactor(13);
        $security->setDefaultHash(\Phalcon\Security::CRYPT_BLOWFISH_Y);

        $obj = $extendclassname::find(array(
                    "conditions" => "username = :username: and blpublished=:blpublished:",
                    "bind" => array('username' => $username, 'blpublished' => 1)
                ))->toArray();
        if (count($obj) === 1) {
            $obj = $obj[0];
            $hash = $obj['userpassword'];
            if ($security->checkHash($userpassword, $hash)) {
                $rowuser = $obj;
            }
        }

        return $rowuser;
    }

    public static function getUsers() {
        $extendclassname = self::getExtendClassname();
        $arr = $extendclassname::find(array(
                    "order" => "username ASC"
                ))->toArray();
        return $arr;
    }

    public static function getById($id) {
        $extendclassname = self::getExtendClassname();
        $rowuser = false;
        $obj = $extendclassname::find(array(
                    "conditions" => "id = :id:",
                    "bind" => array('id' => $id)
                ))->toArray();
        if (count($obj) === 1) {
            $rowuser = $obj[0];
        }
        unset($obj);

        return $rowuser;
    }

    public static function getPass($plainpass) {
        $security = new \Phalcon\Security;
        $security->setWorkFactor(13);
        $security->setDefaultHash(\Phalcon\Security::CRYPT_BLOWFISH_Y);
        return $security->hash($plainpass);
    }

}
