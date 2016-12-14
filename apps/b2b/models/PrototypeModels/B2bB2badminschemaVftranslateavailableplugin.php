<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVftranslateavailableplugin extends \B2b\Models\BaseModel implements B2bB2badminschemaVftranslateavailablepluginInterface {
    

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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
                         public function setFkavailableplugin($fkavailableplugin) 
                        {      
                            $this->fkavailableplugin = (int) $fkavailableplugin;
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
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
                         public function setPluginaliasname($pluginaliasname) 
                        {      
                            $this->pluginaliasname = (string) $pluginaliasname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $blpublished;
             
                        /**
                        * Get blpublished.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBlpublished()
                    {
                        return $this->blpublished;
                    }  /**
                        * Set blpublished.
                        *@param int $blpublished    
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bldeleted;
             
                        /**
                        * Get bldeleted.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBldeleted()
                    {
                        return $this->bldeleted;
                    }  /**
                        * Set bldeleted.
                        *@param int $bldeleted    
                        *@return B2bB2badminschemaVftranslateavailablepluginInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_translate_available_plugin";

}
        

             