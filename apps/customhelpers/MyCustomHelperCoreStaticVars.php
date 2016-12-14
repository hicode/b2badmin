<?php

class MyCustomHelperCoreStaticVars extends \Phalcon\Tag {

    public static function get_copyright() {
        $str = '//This file was created by autogenerator php on ' . date("Y-m-d H:i:s") . ' 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : --remarkstblview--';
        return $str;
    }

    protected static function Model_Core_Namespace_Alias() {
        return'--appname--\Models\AliasModels';
    }

    protected static function Model_Core_Namespace_Models() {
        return'--appname--\Models';
    }

    protected static function Model_Core_Namespace_Prototype() {
        return'--appname--\Models\PrototypeModels';
    }

    protected static function Model_Core_Namespace_Production() {
        return'--appname--\Models\ProductionModels';
    }

    protected static function Model_Core_Class_Directory_Alias() {
        return'..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . '--appname--' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'AliasModels' . DIRECTORY_SEPARATOR;
    }

    protected static function Model_Core_Class_Directory_Models() {
        return'..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . '--appname--' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR;
    }

    protected static function Model_Core_Class_Directory_Production() {
        return'..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . '--appname--' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'ProductionModels' . DIRECTORY_SEPARATOR;
    }

    protected static function Model_Core_Class_Directory_Prototype() {
        return'..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . '--appname--' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'PrototypeModels' . DIRECTORY_SEPARATOR;
    }

    public static function Custom_Helper_Directory() {
        return'..' . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR . '--appname--' . DIRECTORY_SEPARATOR . 'customhelpers' . DIRECTORY_SEPARATOR;
    }

    protected static function Model_Core_Class_Tmp_Model_Name() {
        return'TmpModel';
    }

    protected static function Model_Core_Class_Base_Model_Name() {
        return'BaseModel';
    }

    public static function Model_App_Default() {
        $di = \Phalcon\DI::getDefault();
        return $di->getdefaultApp();
    }

    public static function Model_Schema_Default() {
        $di = \Phalcon\DI::getDefault();
        return $di->getdefaultSchema();
    }

    protected static function Model_Core_Prototype_Model_Function_Related() {
        return' 
        public function get--subclassname--s($parameters=null)
                    {
                        
                        return $this->getRelated("--productionnamespacename--\--subclassnamealias--", $parameters);
                    } 
             ';
    }

    protected static function Model_Core_Prototype_Model_Extrainitialize_Belong() {
        return' 
        $this->belongsTo("--fkname--","--productionnamespacename--\--refclassnamealias--", "--refpk--", array(
            "alias" => "--refclassnamealias--"
        ));
             ';
    }

    protected static function Model_Core_Prototype_Model_Extrainitialize_Has_Many() {
        return' 
        $this->hasMany("--pkname--","--productionnamespacename--\--classnamealias--", "--fkname--");
             ';
    }

    protected static function Model_Core_Prototype_Model_Class() {
        return'<?php
namespace --namespacename--;

--copyright--



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class --classname-- extends \--app--\Models\BaseModel implements --interfacename-- {
    

    public function initialize() {
        parent::initialize();
        --initializename--
    }
    public function getSequenceName()
    {
        return self::getSchema(). \'.\' .parent::PK_NAME;
    }
    public function beforeValidationOnCreate()
    {
        parent::beforeValidationOnCreate();
        --beforecreate--
    }
    public function beforeValidationOnUpdate()
    {
        parent::beforeValidationOnUpdate();
        --beforeupdate--
    }
    --extrafunctionsname--
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "--schemaname--";
    const CONST_TABLE = "--tablename--";

}
        

             ';
    }

    protected static function Model_Core_Prototype_Model_Property_Set() {
        return'/**
                        * Set --fieldname--.
                        *@param --fieldtype-- $--fieldname--    
                        *@return --interfacename--*/
                         public function set--upperfieldname--($--fieldname--) 
                        {      
                            $this->--fieldname-- = --fieldtypeinto--;
                            return $this;
                        }';
    }

    protected static function Model_Core_Prototype_Model_Property_Get() {
        return'
                        /**
                        * Get --fieldname--.
                        * 
                             /**
                                * @return --fieldtype--
                            */  
                    public function get--upperfieldname--()
                    {
                        return $this->--fieldname--;
                    }  ';
    }

    protected static function Model_Core_Prototype_Model_Var() {
        return'    
                            /**
                                * @var --fieldtype--
                            */
                            protected $--fieldname--;
             ';
    }

    protected static function Model_Core_Prototype_Model_Alias_Property_Set() {
        return'/**
                        * Set --fieldname--.
                        *@param $--fieldname--    
                        */
                         public function setAlias--upperfieldname--($--fieldname--) 
                        {      
                            $this->set--upperparentfieldname--($--fieldname--);
                            return $this;
                        }';
    }

    protected static function Model_Core_Prototype_Model_Alias_Property_Get() {
        return'
                        /**
                        * Get --fieldname--.
                        * 
                        */  
                    public function getAlias--upperfieldname--()
                    {
                        return $this->get--upperparentfieldname--();
                    }  ';
    }

    protected static function Model_Core_Prototype_Model_Class_Interface() {
        return'<?php
namespace --namespacename--;

--copyright--

        interface --interfacename-- 
        {
            --interfacebody--
        }
                  ';
    }

    protected static function Model_Core_Prototype_Model_Class_Interface_Properties() {
        return'        
        /**
     * Get --fieldname--.
     *
     * @return --fieldtype--
     */
    public function get--upperfieldname--();

    /**
     * Set bldeleted.
     *
     * @param --fieldtype-- $--fieldname--
     * @return --uppertablename--Interface
     */
    public function set--upperfieldname--($--fieldname--);
             ';
    }

    protected static function Model_Core_Production_Model_Class() {
        return'<?php
namespace --namespacename--;

--copyright--

class --classname-- extends \--aliasnamespacename--\--classname-- {

    

}';
    }

    protected static function Model_Core_Alias_Model_Class() {
        return'<?php
namespace --aliasnamespacename--;

--copyright--

class --classname-- extends \--prototypenamespacename--\--extendclassname-- {

    --extrafunctionsname--

}';
    }

    protected static function Model_Core_Tmp_Model_Class() {
        return'<?php
namespace --namespacename--;

--copyright--

class --classname-- extends \Phalcon\Mvc\Model {

    public function initialize() {
        
    }

}';
    }

    protected static function Model_Core_Base_Model_Class() {
        return'<?php
namespace --namespacename--;

--copyright--

use Phalcon\Mvc\Model\Behavior\SoftDelete;
use Phalcon\Db\Column as Column;

class --classname-- extends \Phalcon\Mvc\Model {
    const DELETED = 1;
    const NOT_DELETED = 0;
    const PK_NAME = "mitra_mitrapk_id_seq";

    public function initialize() {
        $this->setReadConnectionService("dbB2bdbSlave");
        $this->setWriteConnectionService("dbB2bdbMaster");
        $this->addBehavior(new SoftDelete(
                array(
            "field" => "bldeleted",
            "value" => self::DELETED
                )
                //Users::findFirst(2)->delete();
        ));
    }

    public function getSuperConnection()
    {
        return $this->getDI()->get("dbB2badminSuper");
    }

    public function beforeValidationOnCreate() {
        //Set the creation and updated date
        $this->setBldeleted(\AGCHParams::$Static_Bl_Not_Deleted);
        $dt = date("Y-m-d H:i:s");
        $this->setDt_created($dt);
        $this->setDt_updated($dt);
        $metaData = $this->getModelsMetaData();
        $attributes = $metaData->getNotNullAttributes($this);

        // Set all not null fields to their default value.
        foreach ($attributes as $field) {
            if (!isset($this->{$field}) || is_null($this->{$field})) {
                if ($field == "mykatastima") {
                    $this->setMykatastima(\CHCrmCParams::My_get_mykatastima());
                } else {
                    $this->{$field} = new \Phalcon\Db\RawValue("default");
                }
            }
        }
    }

    public function beforeValidationOnUpdate() {
        //Set the modification date
        $this->setDt_updated(date("Y-m-d H:i:s"));
        if ($this->getFkparentlng() === null) {
            $this->setFkparentlng($this->getId());
        }
    }

    public function beforeValidation() {
        $notNullAttributes = $this->getModelsMetaData()->getNotNullAttributes($this);
        foreach ($notNullAttributes as $field) {
            if (isset($this->$field) && $this->$field === "") {
                $this->$field = " ";
            }
        }
        foreach ($this->getModelsMetaData()->getDataTypes($this) as $key => $value) {
            if ($value == 17 && trim($this->$key, " ") == "") {
                $this->$key = null;
            }
        }
        return true;
    }

    public function toArray($columns = NULL) {
        $array = parent::toArray($columns);
        $metadata = $this->getDI()->get("modelsMetadata");
        $types = $metadata->getDataTypes($this);
        foreach ($types as $attribute => $type) {
            if (!is_null($array[$attribute])) {
                switch ($type) {
                    case Column::TYPE_INTEGER:
                    case 14:
                        $array[$attribute] = (int) $array[$attribute];
                        break;
                    case Column::TYPE_DECIMAL:
                    case Column::TYPE_FLOAT:
                    case Column::TYPE_DOUBLE:
                    case 3:
                        $array[$attribute] = (float) $array[$attribute];
                        break;
                    case Column::TYPE_BOOLEAN:
                        $array[$attribute] = (bool) $array[$attribute];
                        break;
                }
            }
        }
        return $array;
    }

    public function beforeSave() {
        $this->fkuserlastupdated = \MyCustomHelperSession::My_get_param_val_jsonrowuser_id();
    }

    public function beforeCreate() {
        $this->fkusercreated = \MyCustomHelperSession::My_get_param_val_jsonrowuser_id();
        $this->myid=  \MyCustomHelperDateTools::getMicrotimeUniqueid();
    }

    public function afterSave() {
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        if ($this->getFkparentlng() === null || $this->getMykatastima() === null) {
            if ($this->getFkparentlng() === null) {
                $this->setFkparentlng($this->getId());
            }
            if ($this->getMykatastima() === null) {
                $this->setMykatastima(\CHCrmCParams::My_get_mykatastima());
            }
            $this->save();
        }
        if (!isset($cpa["updatemvdependends"]) || !is_array($cpa["updatemvdependends"]) || count($cpa["updatemvdependends"]) == 0) {
            CoreModels\PpB2bAdminMaterializedViews::refreshMaterializedViewDependByTblnamePg($this->getSchema(), $this->getSource());
        }
    }

}';
    }

    protected static function Model_Core_Alias_Model_Function_Related() {
        return' 
        public function get--subclassnamealias--s($parameters=null)
                    {
                        
                        return $this->get--subclassname--s($parameters);
                    } 
             ';
    }

    protected static function Model_Core_Alias_Model_Field() {
        return' 
        public static function getOriginalField--subclassnamealias--()
                    {
                        
                        return "--originalfield--";
                    } 
             ';
    }

    protected static function CustomHelper_Auto_Gen_File() {
        return'<?php

class AGCH--controllerschema--Params extends \Phalcon\Tag {
    static $Static_Bl_False = 0;
    static $Static_Bl_True = 1;
    static $Static_Bl_Enabled = 1;
    static $Static_Bl_Not_Enabled = 0;
    static $Static_Bl_Deleted = 1;
    static $Static_Bl_Not_Deleted = 0;
    static $Static_Bl_Disabled = 1;
    static $Static_Bl_Not_Disabled = 0;
    static $Static_Status_All = -1;
    static $Static_Status_Active = 0;
    static $Static_Status_Disabled = 1;
    static $Static_Status_Trashed = 2;
    static $Static_Status_Deleted = 3;
    static $Static_Show_All = -1;
    static $Static_Order_Asc = "asc";
    --staticparams--
}';
    }

    protected static function CustomHelper_Auto_Gen_Modules_File() {
        return'<?php

class AGCH--controllerschema--Modules extends \Phalcon\Tag {
    public static function GetModule($id,$blarray=true)
    {
        $ret=false;
        --modulesdata--
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
}';
    }

    protected static function CustomHelper_Auto_Gen_Migrationmodlive_File() {
        return'<?php

class AGCH--controllerschema--Migrationmodlive--class-name-- extends \Phalcon\Tag {

    self::$json = \'--jsondata--\';}
    private static $arr = --arrdata--;

    public static function GetRecord($blarray=true)
    {
        $ret = self::$json;
        if($blarray==true)
        {
            $ret =  self::GetValsArray();
        }
        return $ret;
    }
    
    public static function GetKeyVal($key)
    {
        $ret = false;
        $retarr =  self::GetValsArray();
        if(isset($retarr[$key]))
        {
            $ret =  $retarr[$key];
        }
        return $ret;
    }
    
    public static function GetValsArray()
    {
        //return json_decode(self::$json,true);
        return private static function arr;
    }
}';
    }

    protected static function CustomHelper_Auto_Gen_Migrationmodlive_By_Search_File() {
        return'<?php

class --class-name-- extends \Phalcon\Tag {
    private static $json = \'--jsondata--\';
    public static function GetRecord($id = null, $bykey = null)
    {
        $ret=false;
        $retarr =  self::GetValsArray();
        if(isset($id))
        {
            if(isset($retarr[$id]))
            {
                $ret = $retarr[$id];
            }
        }
        elseif(isset($bykey))
        {
            $retarr = array_flip($retarr);
            if(isset($retarr[$bykey]))
            {
                $ret = $retarr[$bykey];
            }
            
        }
        else
        {
            $ret = $retarr;
        }
        return $ret;
    }
    public static function GetValsArray()
    {
        return json_decode(self::$json,true);
    }
}';
    }

    protected static function CustomHelper_Auto_Gen_Migrationmodlive_Functions_File() {
        return'<?php

class --class-name-- extends \Phalcon\Tag {
    --jsonmetadata--
    public static function GetRecordValByCol($schemaname, $tblname, $pkid, $colname)
    {
        $ret = null;
        $rec = self::GetRecordByPkid($schemaname, $tblname, $pkid);
        if(isset($rec) && isset($rec[$colname]))
        {
            $ret = $rec[$colname];
        }
        return $ret;
    }
    
    public static function GetRecordByPkid($schemaname, $tblname, $pkid, $bldecode = true, $blarray = true)
    {
        $ret = null;
        $dirname = \'..\'.DIRECTORY_SEPARATOR.\'apps\'.DIRECTORY_SEPARATOR.\'--app--\'.DIRECTORY_SEPARATOR.\'customhelpers\'.DIRECTORY_SEPARATOR.\'Tables\'.DIRECTORY_SEPARATOR.\'--controllerschema----tbl--\'.DIRECTORY_SEPARATOR.\'Id\'.DIRECTORY_SEPARATOR.\'\' . $schemaname . \'\'.DIRECTORY_SEPARATOR.\'\' . $tblname . \'\'.DIRECTORY_SEPARATOR;
        $filename = $dirname . $pkid . \'.json\';
        if (file_exists($filename)) {
            $ret = file_get_contents($filename);
            if($bldecode==true)
            {
                $ret = json_decode($ret, $blarray);
            }
        }
        return $ret;
    }
    
    public static function GetIndex($schemaname, $tblname, $bykey, $bldecode = true, $blarray = true)
    {
        $ret = null;
        $dirname = \'..\'.DIRECTORY_SEPARATOR.\'apps\'.DIRECTORY_SEPARATOR.\'--app--\'.DIRECTORY_SEPARATOR.\'customhelpers\'.DIRECTORY_SEPARATOR.\'Tables\'.DIRECTORY_SEPARATOR;
        $filename = $dirname . \'--controllerschema----tbl--\'.DIRECTORY_SEPARATOR.\'By\'.ucfirst($bykey).ucfirst($schemaname). ucfirst($tblname) . \'.json\';
        if (file_exists($filename)) {
            $ret = file_get_contents($filename);
            if($bldecode==true)
            {
                $ret = json_decode($ret, $blarray);
            }
        }
        return $ret;
    }
    
    public static function GetIndexPkidFromBykey($schemaname, $tblname, $bykey, $searchvalue)
    {
        $ret = null;
        $searchvalue = str_replace(\' \', \'\', $searchvalue);
        $json = self::GetIndex($schemaname, $tblname, $bykey, false);
        $json = str_replace(\' \', \'\', $json);

        $searchstr = \':"\' . $searchvalue . \'"\';
        $pos1 = stripos($json, $searchstr);
        if ($pos1!== false) {
            $substr1 = substr($json, 0, $pos1 - 1);
            $searchstr = \'","\';
            $pos2 = strrpos($substr1, $searchstr);
            if ($pos2 === false) {
                $searchstr = \'{"\';
                $pos2 = strrpos($substr1, $searchstr);
            }
            if ($pos2 !== false) {
                $ret = substr($substr1, $pos2 + strlen($searchstr));
            }
        }
        return $ret;
    }
    
    public static function CreateTranslates() {
        $ret = true;
        $schemaname = \'mod\';
        $tblname = \'jfcontent\';
        $bykey = \'idstr\';
        $index = self::GetIndex($schemaname, $tblname, $bykey);
        foreach ($index as $pkid => $value) {
            $data = \'\';
            $recarr = self::GetRecordByPkid($schemaname, $tblname, $pkid);
            if (isset($recarr[\'referenceschema\'], $recarr[\'referencetable\'])) {
                $refidstr = $recarr[self::$F_ModJfcontentReferenceid];
                $schemaname2 = $recarr[\'referenceschema\'];
                $tblname2 = $recarr[\'referencetable\'];
                $bykey = \'idstr\';
                $searchvalue = $refidstr;
                $refid = self::GetIndexPkidFromBykey($schemaname2, $tblname2, $bykey, $searchvalue);
                $customdirname = \'..\'.DIRECTORY_SEPARATOR.\'apps\'.DIRECTORY_SEPARATOR.\'b2b\'.DIRECTORY_SEPARATOR.\'customhelpers\'.DIRECTORY_SEPARATOR.\'Tables\'.DIRECTORY_SEPARATOR.\'B2bAioTbl20\'.DIRECTORY_SEPARATOR.\'Custom\'.DIRECTORY_SEPARATOR.\'\' . $schemaname . \'\'.DIRECTORY_SEPARATOR.\'\' . $tblname . \'\'.DIRECTORY_SEPARATOR.\'\' . $schemaname2 . \'\'.DIRECTORY_SEPARATOR.\'\' . $tblname2 . \'\'.DIRECTORY_SEPARATOR;
                if (!file_exists($customdirname) && !mkdir($customdirname, 0777, true)) {
                    die(\'Failed to create \' . $customdirname);
                }
                $filename = $customdirname . $refid . \'.json\';
                file_put_contents($filename, $data);
            }
        }
        foreach ($index as $pkid => $value) {
            $recarr = self::GetRecordByPkid($schemaname, $tblname, $pkid);
            //$data = $recarr;
            if (isset($recarr[\'referenceschema\'], $recarr[\'referencetable\'])) {
                $refidstr = $recarr[self::$F_ModJfcontentReferenceid];
                $schemaname2 = $recarr[\'referenceschema\'];
                $tblname2 = $recarr[\'referencetable\'];
                $bykey = \'idstr\';
                $searchvalue = $refidstr;
                $refid = self::GetIndexPkidFromBykey($schemaname2, $tblname2, $bykey, $searchvalue);
                $refrecarr = self::GetRecordByPkid($schemaname2, $tblname2, $refid);


                $customdirname = \'..\'.DIRECTORY_SEPARATOR.\'apps\'.DIRECTORY_SEPARATOR.\'b2b\'.DIRECTORY_SEPARATOR.\'customhelpers\'.DIRECTORY_SEPARATOR.\'Tables\'.DIRECTORY_SEPARATOR.\'B2bAioTbl20\'.DIRECTORY_SEPARATOR.\'Custom\'.DIRECTORY_SEPARATOR.\'\' . $schemaname . \'\'.DIRECTORY_SEPARATOR.\'\' . $tblname . \'\'.DIRECTORY_SEPARATOR.\'\' . $schemaname2 . \'\'.DIRECTORY_SEPARATOR.\'\' . $tblname2 . \'\'.DIRECTORY_SEPARATOR;
                if (!file_exists($customdirname) && !mkdir($customdirname, 0777, true)) {
                    die(\'Failed to create \' . $customdirname);
                }
                $filename = $customdirname . $refid . \'.json\';
                $data = $refrecarr;
                if (file_exists($filename)) {
                    $data = file_get_contents($filename);
                    $data = json_decode($data, true);
                    if (is_array($data) === false) {
                        $data = $refrecarr;
                    }
                }
                $data[$recarr[self::$F_ModJfcontentReferencefield]] = $recarr[self::$F_ModJfcontentJfvalue];
                $data = json_encode($data);

                $fh = fopen($filename, \'w\') or die(\'Error during operation for file \' . $filename);
                fwrite($fh, $data);
                fclose($fh);
            }
        }

        return $ret;
    }
    
}';
    }

}
