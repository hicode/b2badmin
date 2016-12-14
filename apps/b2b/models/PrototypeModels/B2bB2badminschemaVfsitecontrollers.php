<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfsitecontrollers extends \B2b\Models\BaseModel implements B2bB2badminschemaVfsitecontrollersInterface {
    

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
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
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
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
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
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fksite;
             
                        /**
                        * Get fksite.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFksite()
                    {
                        return $this->fksite;
                    }  /**
                        * Set fksite.
                        *@param int $fksite    
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
                         public function setFksite($fksite) 
                        {      
                            $this->fksite = (int) $fksite;
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
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
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
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
                         public function setMaincontrollername($maincontrollername) 
                        {      
                            $this->maincontrollername = (string) $maincontrollername;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $controllername;
             
                        /**
                        * Get controllername.
                        * 
                             /**
                                * @return string
                            */  
                    public function getControllername()
                    {
                        return $this->controllername;
                    }  /**
                        * Set controllername.
                        *@param string $controllername    
                        *@return B2bB2badminschemaVfsitecontrollersInterface*/
                         public function setControllername($controllername) 
                        {      
                            $this->controllername = (string) $controllername;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_sitecontrollers";

}
        

             