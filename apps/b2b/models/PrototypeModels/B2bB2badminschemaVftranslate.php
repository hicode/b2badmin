<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVftranslate extends \B2b\Models\BaseModel implements B2bB2badminschemaVftranslateInterface {
    

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
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $keyid;
             
                        /**
                        * Get keyid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getKeyid()
                    {
                        return $this->keyid;
                    }  /**
                        * Set keyid.
                        *@param int $keyid    
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setKeyid($keyid) 
                        {      
                            $this->keyid = (int) $keyid;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $mykatastima;
             
                        /**
                        * Get mykatastima.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMykatastima()
                    {
                        return $this->mykatastima;
                    }  /**
                        * Set mykatastima.
                        *@param string $mykatastima    
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $keyname;
             
                        /**
                        * Get keyname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getKeyname()
                    {
                        return $this->keyname;
                    }  /**
                        * Set keyname.
                        *@param string $keyname    
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setKeyname($keyname) 
                        {      
                            $this->keyname = (string) $keyname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $keyvalueid;
             
                        /**
                        * Get keyvalueid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getKeyvalueid()
                    {
                        return $this->keyvalueid;
                    }  /**
                        * Set keyvalueid.
                        *@param int $keyvalueid    
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setKeyvalueid($keyvalueid) 
                        {      
                            $this->keyvalueid = (int) $keyvalueid;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $keyvalue;
             
                        /**
                        * Get keyvalue.
                        * 
                             /**
                                * @return string
                            */  
                    public function getKeyvalue()
                    {
                        return $this->keyvalue;
                    }  /**
                        * Set keyvalue.
                        *@param string $keyvalue    
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setKeyvalue($keyvalue) 
                        {      
                            $this->keyvalue = (string) $keyvalue;
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
                        *@return B2bB2badminschemaVftranslateInterface*/
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
                        *@return B2bB2badminschemaVftranslateInterface*/
                         public function setFksite($fksite) 
                        {      
                            $this->fksite = (int) $fksite;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_translate";

}
        

             