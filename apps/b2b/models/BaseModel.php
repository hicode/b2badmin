<?php
namespace B2b\Models;

//This file was created by autogenerator php on 2016-12-15 00:52:35 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

use Phalcon\Mvc\Model\Behavior\SoftDelete;
use Phalcon\Db\Column as Column;

class BaseModel extends \Phalcon\Mvc\Model {
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

}