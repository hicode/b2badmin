<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfplugin extends \B2b\Models\BaseModel implements B2bB2badminschemaVfpluginInterface {
    

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
                            protected $fkplugin;
             
                        /**
                        * Get fkplugin.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkplugin()
                    {
                        return $this->fkplugin;
                    }  /**
                        * Set fkplugin.
                        *@param int $fkplugin    
                        *@return B2bB2badminschemaVfpluginInterface*/
                         public function setFkplugin($fkplugin) 
                        {      
                            $this->fkplugin = (int) $fkplugin;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginaliasname;
             
                        /**
                        * Get pluginaliasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginaliasname()
                    {
                        return $this->pluginaliasname;
                    }  /**
                        * Set pluginaliasname.
                        *@param string $pluginaliasname    
                        *@return B2bB2badminschemaVfpluginInterface*/
                         public function setPluginaliasname($pluginaliasname) 
                        {      
                            $this->pluginaliasname = (string) $pluginaliasname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginfirstkey;
             
                        /**
                        * Get pluginfirstkey.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginfirstkey()
                    {
                        return $this->pluginfirstkey;
                    }  /**
                        * Set pluginfirstkey.
                        *@param string $pluginfirstkey    
                        *@return B2bB2badminschemaVfpluginInterface*/
                         public function setPluginfirstkey($pluginfirstkey) 
                        {      
                            $this->pluginfirstkey = (string) $pluginfirstkey;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginparamname;
             
                        /**
                        * Get pluginparamname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginparamname()
                    {
                        return $this->pluginparamname;
                    }  /**
                        * Set pluginparamname.
                        *@param string $pluginparamname    
                        *@return B2bB2badminschemaVfpluginInterface*/
                         public function setPluginparamname($pluginparamname) 
                        {      
                            $this->pluginparamname = (string) $pluginparamname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginparamvalue;
             
                        /**
                        * Get pluginparamvalue.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginparamvalue()
                    {
                        return $this->pluginparamvalue;
                    }  /**
                        * Set pluginparamvalue.
                        *@param string $pluginparamvalue    
                        *@return B2bB2badminschemaVfpluginInterface*/
                         public function setPluginparamvalue($pluginparamvalue) 
                        {      
                            $this->pluginparamvalue = (string) $pluginparamvalue;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $pluginblenabled;
             
                        /**
                        * Get pluginblenabled.
                        * 
                             /**
                                * @return float
                            */  
                    public function getPluginblenabled()
                    {
                        return $this->pluginblenabled;
                    }  /**
                        * Set pluginblenabled.
                        *@param float $pluginblenabled    
                        *@return B2bB2badminschemaVfpluginInterface*/
                         public function setPluginblenabled($pluginblenabled) 
                        {      
                            $this->pluginblenabled = (float) $pluginblenabled;
                            return $this;
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
                        *@return B2bB2badminschemaVfpluginInterface*/
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
    const CONST_TABLE = "vf_plugin";

}
        

             