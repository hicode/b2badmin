<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVftranslateavailablepluginjson extends \B2b\Models\BaseModel implements B2bB2badminschemaVftranslateavailablepluginjsonInterface {
    

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
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
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
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $paramjson;
             
                        /**
                        * Get paramjson.
                        * 
                             /**
                                * @return string
                            */  
                    public function getParamjson()
                    {
                        return $this->paramjson;
                    }  /**
                        * Set paramjson.
                        *@param string $paramjson    
                        *@return B2bB2badminschemaVftranslateavailablepluginjsonInterface*/
                         public function setParamjson($paramjson) 
                        {      
                            $this->paramjson = (string) $paramjson;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_translate_available_plugin_json";

}
        

             