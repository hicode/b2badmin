<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaAab2badminbasesettings extends \B2b\Models\BaseModel implements B2bB2badminschemaAab2badminbasesettingsInterface {
    

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
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
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
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $schemaname;
             
                        /**
                        * Get schemaname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getSchemaname()
                    {
                        return $this->schemaname;
                    }  /**
                        * Set schemaname.
                        *@param string $schemaname    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setSchemaname($schemaname) 
                        {      
                            $this->schemaname = (string) $schemaname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dbusername;
             
                        /**
                        * Get dbusername.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDbusername()
                    {
                        return $this->dbusername;
                    }  /**
                        * Set dbusername.
                        *@param string $dbusername    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setDbusername($dbusername) 
                        {      
                            $this->dbusername = (string) $dbusername;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $tblcoreprefix;
             
                        /**
                        * Get tblcoreprefix.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTblcoreprefix()
                    {
                        return $this->tblcoreprefix;
                    }  /**
                        * Set tblcoreprefix.
                        *@param string $tblcoreprefix    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setTblcoreprefix($tblcoreprefix) 
                        {      
                            $this->tblcoreprefix = (string) $tblcoreprefix;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $tblgenprefix;
             
                        /**
                        * Get tblgenprefix.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTblgenprefix()
                    {
                        return $this->tblgenprefix;
                    }  /**
                        * Set tblgenprefix.
                        *@param string $tblgenprefix    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setTblgenprefix($tblgenprefix) 
                        {      
                            $this->tblgenprefix = (string) $tblgenprefix;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $viewgenprefix;
             
                        /**
                        * Get viewgenprefix.
                        * 
                             /**
                                * @return string
                            */  
                    public function getViewgenprefix()
                    {
                        return $this->viewgenprefix;
                    }  /**
                        * Set viewgenprefix.
                        *@param string $viewgenprefix    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setViewgenprefix($viewgenprefix) 
                        {      
                            $this->viewgenprefix = (string) $viewgenprefix;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $colgenprefix;
             
                        /**
                        * Get colgenprefix.
                        * 
                             /**
                                * @return string
                            */  
                    public function getColgenprefix()
                    {
                        return $this->colgenprefix;
                    }  /**
                        * Set colgenprefix.
                        *@param string $colgenprefix    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setColgenprefix($colgenprefix) 
                        {      
                            $this->colgenprefix = (string) $colgenprefix;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $mykatastimadefault;
             
                        /**
                        * Get mykatastimadefault.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMykatastimadefault()
                    {
                        return $this->mykatastimadefault;
                    }  /**
                        * Set mykatastimadefault.
                        *@param string $mykatastimadefault    
                        *@return B2bB2badminschemaAab2badminbasesettingsInterface*/
                         public function setMykatastimadefault($mykatastimadefault) 
                        {      
                            $this->mykatastimadefault = (string) $mykatastimadefault;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "aab2badmin_basesettings";

}
        

             