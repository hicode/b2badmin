<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfpluginavailable extends \B2b\Models\BaseModel implements B2bB2badminschemaVfpluginavailableInterface {
    

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
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
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
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailableplugin;
             
                        /**
                        * Get fkavailableplugin.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailableplugin()
                    {
                        return $this->fkavailableplugin;
                    }  /**
                        * Set fkavailableplugin.
                        *@param int $fkavailableplugin    
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setFkavailableplugin($fkavailableplugin) 
                        {      
                            $this->fkavailableplugin = (int) $fkavailableplugin;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailablepluginparam;
             
                        /**
                        * Get fkavailablepluginparam.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailablepluginparam()
                    {
                        return $this->fkavailablepluginparam;
                    }  /**
                        * Set fkavailablepluginparam.
                        *@param int $fkavailablepluginparam    
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setFkavailablepluginparam($fkavailablepluginparam) 
                        {      
                            $this->fkavailablepluginparam = (int) $fkavailablepluginparam;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailablepluginparamvalue;
             
                        /**
                        * Get fkavailablepluginparamvalue.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailablepluginparamvalue()
                    {
                        return $this->fkavailablepluginparamvalue;
                    }  /**
                        * Set fkavailablepluginparamvalue.
                        *@param int $fkavailablepluginparamvalue    
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setFkavailablepluginparamvalue($fkavailablepluginparamvalue) 
                        {      
                            $this->fkavailablepluginparamvalue = (int) $fkavailablepluginparamvalue;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepluginname;
             
                        /**
                        * Get availablepluginname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepluginname()
                    {
                        return $this->availablepluginname;
                    }  /**
                        * Set availablepluginname.
                        *@param string $availablepluginname    
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setAvailablepluginname($availablepluginname) 
                        {      
                            $this->availablepluginname = (string) $availablepluginname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepluginaliasname;
             
                        /**
                        * Get availablepluginaliasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepluginaliasname()
                    {
                        return $this->availablepluginaliasname;
                    }  /**
                        * Set availablepluginaliasname.
                        *@param string $availablepluginaliasname    
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setAvailablepluginaliasname($availablepluginaliasname) 
                        {      
                            $this->availablepluginaliasname = (string) $availablepluginaliasname;
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
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
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
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setAvailableparamvalue($availableparamvalue) 
                        {      
                            $this->availableparamvalue = (string) $availableparamvalue;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepluginparamvaluealiasname;
             
                        /**
                        * Get availablepluginparamvaluealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepluginparamvaluealiasname()
                    {
                        return $this->availablepluginparamvaluealiasname;
                    }  /**
                        * Set availablepluginparamvaluealiasname.
                        *@param string $availablepluginparamvaluealiasname    
                        *@return B2bB2badminschemaVfpluginavailableInterface*/
                         public function setAvailablepluginparamvaluealiasname($availablepluginparamvaluealiasname) 
                        {      
                            $this->availablepluginparamvaluealiasname = (string) $availablepluginparamvaluealiasname;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_pluginavailable";

}
        

             