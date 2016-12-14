<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVftemplate extends \B2b\Models\BaseModel implements B2bB2badminschemaVftemplateInterface {
    

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
                            protected $fktemplate;
             
                        /**
                        * Get fktemplate.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktemplate()
                    {
                        return $this->fktemplate;
                    }  /**
                        * Set fktemplate.
                        *@param int $fktemplate    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setFktemplate($fktemplate) 
                        {      
                            $this->fktemplate = (int) $fktemplate;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $templatealiasname;
             
                        /**
                        * Get templatealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTemplatealiasname()
                    {
                        return $this->templatealiasname;
                    }  /**
                        * Set templatealiasname.
                        *@param string $templatealiasname    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setTemplatealiasname($templatealiasname) 
                        {      
                            $this->templatealiasname = (string) $templatealiasname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $templateparamname;
             
                        /**
                        * Get templateparamname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTemplateparamname()
                    {
                        return $this->templateparamname;
                    }  /**
                        * Set templateparamname.
                        *@param string $templateparamname    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setTemplateparamname($templateparamname) 
                        {      
                            $this->templateparamname = (string) $templateparamname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $templateparamvalue;
             
                        /**
                        * Get templateparamvalue.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTemplateparamvalue()
                    {
                        return $this->templateparamvalue;
                    }  /**
                        * Set templateparamvalue.
                        *@param string $templateparamvalue    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setTemplateparamvalue($templateparamvalue) 
                        {      
                            $this->templateparamvalue = (string) $templateparamvalue;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $templateblenabled;
             
                        /**
                        * Get templateblenabled.
                        * 
                             /**
                                * @return float
                            */  
                    public function getTemplateblenabled()
                    {
                        return $this->templateblenabled;
                    }  /**
                        * Set templateblenabled.
                        *@param float $templateblenabled    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setTemplateblenabled($templateblenabled) 
                        {      
                            $this->templateblenabled = (float) $templateblenabled;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $templatesitename;
             
                        /**
                        * Get templatesitename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTemplatesitename()
                    {
                        return $this->templatesitename;
                    }  /**
                        * Set templatesitename.
                        *@param string $templatesitename    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setTemplatesitename($templatesitename) 
                        {      
                            $this->templatesitename = (string) $templatesitename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $templatecontrollername;
             
                        /**
                        * Get templatecontrollername.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTemplatecontrollername()
                    {
                        return $this->templatecontrollername;
                    }  /**
                        * Set templatecontrollername.
                        *@param string $templatecontrollername    
                        *@return B2bB2badminschemaVftemplateInterface*/
                         public function setTemplatecontrollername($templatecontrollername) 
                        {      
                            $this->templatecontrollername = (string) $templatecontrollername;
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
                        *@return B2bB2badminschemaVftemplateInterface*/
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
    const CONST_TABLE = "vf_template";

}
        

             