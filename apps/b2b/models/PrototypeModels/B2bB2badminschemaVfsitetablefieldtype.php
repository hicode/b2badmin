<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfsitetablefieldtype extends \B2b\Models\BaseModel implements B2bB2badminschemaVfsitetablefieldtypeInterface {
    

    public function initialize() {
        parent::initialize();
        
    }
    public function getSequenceName()
    {
        return self::getSchema(). '.' .parent::PK_NAME;
    }
    public function beforeValidationOnCreate()
    {
        parent::beforeValidationOnCreate();
        
    }
    public function beforeValidationOnUpdate()
    {
        parent::beforeValidationOnUpdate();
        
    }
        
                            /**
                                * @var int
                            */
                            protected $id;
             
                        /**
                        * Get id.
                        * 
                             /**
                                * @return int
                            */  
                    public function getId()
                    {
                        return $this->id;
                    }  /**
                        * Set id.
                        *@param int $id    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_created;
             
                        /**
                        * Get dt_created.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_created()
                    {
                        return $this->dt_created;
                    }  /**
                        * Set dt_created.
                        *@param string $dt_created    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setDt_created($dt_created) 
                        {      
                            $this->dt_created = (string) $dt_created;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fklng;
             
                        /**
                        * Get fklng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFklng()
                    {
                        return $this->fklng;
                    }  /**
                        * Set fklng.
                        *@param int $fklng    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $fkmigrationsite;
             
                        /**
                        * Get fkmigrationsite.
                        * 
                             /**
                                * @return float
                            */  
                    public function getFkmigrationsite()
                    {
                        return $this->fkmigrationsite;
                    }  /**
                        * Set fkmigrationsite.
                        *@param float $fkmigrationsite    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFkmigrationsite($fkmigrationsite) 
                        {      
                            $this->fkmigrationsite = (float) $fkmigrationsite;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $sitename;
             
                        /**
                        * Get sitename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getSitename()
                    {
                        return $this->sitename;
                    }  /**
                        * Set sitename.
                        *@param string $sitename    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setSitename($sitename) 
                        {      
                            $this->sitename = (string) $sitename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $maincontrollername;
             
                        /**
                        * Get maincontrollername.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMaincontrollername()
                    {
                        return $this->maincontrollername;
                    }  /**
                        * Set maincontrollername.
                        *@param string $maincontrollername    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setMaincontrollername($maincontrollername) 
                        {      
                            $this->maincontrollername = (string) $maincontrollername;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktable;
             
                        /**
                        * Get fktable.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktable()
                    {
                        return $this->fktable;
                    }  /**
                        * Set fktable.
                        *@param int $fktable    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFktable($fktable) 
                        {      
                            $this->fktable = (int) $fktable;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $tablename;
             
                        /**
                        * Get tablename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTablename()
                    {
                        return $this->tablename;
                    }  /**
                        * Set tablename.
                        *@param string $tablename    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setTablename($tablename) 
                        {      
                            $this->tablename = (string) $tablename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dbtablename;
             
                        /**
                        * Get dbtablename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDbtablename()
                    {
                        return $this->dbtablename;
                    }  /**
                        * Set dbtablename.
                        *@param string $dbtablename    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setDbtablename($dbtablename) 
                        {      
                            $this->dbtablename = (string) $dbtablename;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkfield;
             
                        /**
                        * Get fkfield.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkfield()
                    {
                        return $this->fkfield;
                    }  /**
                        * Set fkfield.
                        *@param int $fkfield    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFkfield($fkfield) 
                        {      
                            $this->fkfield = (int) $fkfield;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fieldname;
             
                        /**
                        * Get fieldname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFieldname()
                    {
                        return $this->fieldname;
                    }  /**
                        * Set fieldname.
                        *@param string $fieldname    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFieldname($fieldname) 
                        {      
                            $this->fieldname = (string) $fieldname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dbfieldname;
             
                        /**
                        * Get dbfieldname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDbfieldname()
                    {
                        return $this->dbfieldname;
                    }  /**
                        * Set dbfieldname.
                        *@param string $dbfieldname    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setDbfieldname($dbfieldname) 
                        {      
                            $this->dbfieldname = (string) $dbfieldname;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $blrequired;
             
                        /**
                        * Get blrequired.
                        * 
                             /**
                                * @return float
                            */  
                    public function getBlrequired()
                    {
                        return $this->blrequired;
                    }  /**
                        * Set blrequired.
                        *@param float $blrequired    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setBlrequired($blrequired) 
                        {      
                            $this->blrequired = (float) $blrequired;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $blnullable;
             
                        /**
                        * Get blnullable.
                        * 
                             /**
                                * @return float
                            */  
                    public function getBlnullable()
                    {
                        return $this->blnullable;
                    }  /**
                        * Set blnullable.
                        *@param float $blnullable    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setBlnullable($blnullable) 
                        {      
                            $this->blnullable = (float) $blnullable;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $prevdbtype;
             
                        /**
                        * Get prevdbtype.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPrevdbtype()
                    {
                        return $this->prevdbtype;
                    }  /**
                        * Set prevdbtype.
                        *@param string $prevdbtype    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setPrevdbtype($prevdbtype) 
                        {      
                            $this->prevdbtype = (string) $prevdbtype;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $defvaluetext;
             
                        /**
                        * Get defvaluetext.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDefvaluetext()
                    {
                        return $this->defvaluetext;
                    }  /**
                        * Set defvaluetext.
                        *@param string $defvaluetext    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setDefvaluetext($defvaluetext) 
                        {      
                            $this->defvaluetext = (string) $defvaluetext;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $defvaluenumeric;
             
                        /**
                        * Get defvaluenumeric.
                        * 
                             /**
                                * @return float
                            */  
                    public function getDefvaluenumeric()
                    {
                        return $this->defvaluenumeric;
                    }  /**
                        * Set defvaluenumeric.
                        *@param float $defvaluenumeric    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setDefvaluenumeric($defvaluenumeric) 
                        {      
                            $this->defvaluenumeric = (float) $defvaluenumeric;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $defvaluetwtz;
             
                        /**
                        * Get defvaluetwtz.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDefvaluetwtz()
                    {
                        return $this->defvaluetwtz;
                    }  /**
                        * Set defvaluetwtz.
                        *@param string $defvaluetwtz    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setDefvaluetwtz($defvaluetwtz) 
                        {      
                            $this->defvaluetwtz = (string) $defvaluetwtz;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkfieldtype;
             
                        /**
                        * Get fkfieldtype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkfieldtype()
                    {
                        return $this->fkfieldtype;
                    }  /**
                        * Set fkfieldtype.
                        *@param int $fkfieldtype    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFkfieldtype($fkfieldtype) 
                        {      
                            $this->fkfieldtype = (int) $fkfieldtype;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fieldtype;
             
                        /**
                        * Get fieldtype.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFieldtype()
                    {
                        return $this->fieldtype;
                    }  /**
                        * Set fieldtype.
                        *@param string $fieldtype    
                        *@return B2bB2badminschemaVfsitetablefieldtypeInterface*/
                         public function setFieldtype($fieldtype) 
                        {      
                            $this->fieldtype = (string) $fieldtype;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_sitetablefieldtype";

}
        

             