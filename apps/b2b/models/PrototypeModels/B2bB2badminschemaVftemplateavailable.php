<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVftemplateavailable extends \B2b\Models\BaseModel implements B2bB2badminschemaVftemplateavailableInterface {
    

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
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
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
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabletemplate;
             
                        /**
                        * Get fkavailabletemplate.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabletemplate()
                    {
                        return $this->fkavailabletemplate;
                    }  /**
                        * Set fkavailabletemplate.
                        *@param int $fkavailabletemplate    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setFkavailabletemplate($fkavailabletemplate) 
                        {      
                            $this->fkavailabletemplate = (int) $fkavailabletemplate;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabletemplateparam;
             
                        /**
                        * Get fkavailabletemplateparam.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabletemplateparam()
                    {
                        return $this->fkavailabletemplateparam;
                    }  /**
                        * Set fkavailabletemplateparam.
                        *@param int $fkavailabletemplateparam    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setFkavailabletemplateparam($fkavailabletemplateparam) 
                        {      
                            $this->fkavailabletemplateparam = (int) $fkavailabletemplateparam;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabletemplateparamvalue;
             
                        /**
                        * Get fkavailabletemplateparamvalue.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabletemplateparamvalue()
                    {
                        return $this->fkavailabletemplateparamvalue;
                    }  /**
                        * Set fkavailabletemplateparamvalue.
                        *@param int $fkavailabletemplateparamvalue    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setFkavailabletemplateparamvalue($fkavailabletemplateparamvalue) 
                        {      
                            $this->fkavailabletemplateparamvalue = (int) $fkavailabletemplateparamvalue;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availabletemplatename;
             
                        /**
                        * Get availabletemplatename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailabletemplatename()
                    {
                        return $this->availabletemplatename;
                    }  /**
                        * Set availabletemplatename.
                        *@param string $availabletemplatename    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setAvailabletemplatename($availabletemplatename) 
                        {      
                            $this->availabletemplatename = (string) $availabletemplatename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availabletemplatealiasname;
             
                        /**
                        * Get availabletemplatealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailabletemplatealiasname()
                    {
                        return $this->availabletemplatealiasname;
                    }  /**
                        * Set availabletemplatealiasname.
                        *@param string $availabletemplatealiasname    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setAvailabletemplatealiasname($availabletemplatealiasname) 
                        {      
                            $this->availabletemplatealiasname = (string) $availabletemplatealiasname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availableparamname;
             
                        /**
                        * Get availableparamname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailableparamname()
                    {
                        return $this->availableparamname;
                    }  /**
                        * Set availableparamname.
                        *@param string $availableparamname    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setAvailableparamname($availableparamname) 
                        {      
                            $this->availableparamname = (string) $availableparamname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availableparamvalue;
             
                        /**
                        * Get availableparamvalue.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailableparamvalue()
                    {
                        return $this->availableparamvalue;
                    }  /**
                        * Set availableparamvalue.
                        *@param string $availableparamvalue    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setAvailableparamvalue($availableparamvalue) 
                        {      
                            $this->availableparamvalue = (string) $availableparamvalue;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availabletemplateparamvaluealiasname;
             
                        /**
                        * Get availabletemplateparamvaluealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailabletemplateparamvaluealiasname()
                    {
                        return $this->availabletemplateparamvaluealiasname;
                    }  /**
                        * Set availabletemplateparamvaluealiasname.
                        *@param string $availabletemplateparamvaluealiasname    
                        *@return B2bB2badminschemaVftemplateavailableInterface*/
                         public function setAvailabletemplateparamvaluealiasname($availabletemplateparamvaluealiasname) 
                        {      
                            $this->availabletemplateparamvaluealiasname = (string) $availabletemplateparamvaluealiasname;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_templateavailable";

}
        

             