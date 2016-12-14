<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcustomerevent extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcustomereventInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmeventcustomers;
             
                        /**
                        * Get fkcorecrmeventcustomers.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmeventcustomers()
                    {
                        return $this->fkcorecrmeventcustomers;
                    }  /**
                        * Set fkcorecrmeventcustomers.
                        *@param int $fkcorecrmeventcustomers    
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setFkcorecrmeventcustomers($fkcorecrmeventcustomers) 
                        {      
                            $this->fkcorecrmeventcustomers = (int) $fkcorecrmeventcustomers;
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
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
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
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bldisabled;
             
                        /**
                        * Get bldisabled.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBldisabled()
                    {
                        return $this->bldisabled;
                    }  /**
                        * Set bldisabled.
                        *@param int $bldisabled    
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
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
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
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
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkparentlng;
             
                        /**
                        * Get fkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkparentlng()
                    {
                        return $this->fkparentlng;
                    }  /**
                        * Set fkparentlng.
                        *@param int $fkparentlng    
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setFkparentlng($fkparentlng) 
                        {      
                            $this->fkparentlng = (int) $fkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmcustomerfkcorecrmeventcustomers;
             
                        /**
                        * Get fkcorecrmcustomerfkcorecrmeventcustomers.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmcustomerfkcorecrmeventcustomers()
                    {
                        return $this->fkcorecrmcustomerfkcorecrmeventcustomers;
                    }  /**
                        * Set fkcorecrmcustomerfkcorecrmeventcustomers.
                        *@param int $fkcorecrmcustomerfkcorecrmeventcustomers    
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setFkcorecrmcustomerfkcorecrmeventcustomers($fkcorecrmcustomerfkcorecrmeventcustomers) 
                        {      
                            $this->fkcorecrmcustomerfkcorecrmeventcustomers = (int) $fkcorecrmcustomerfkcorecrmeventcustomers;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmeventfkcorecrmeventcustomers;
             
                        /**
                        * Get fkcorecrmeventfkcorecrmeventcustomers.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmeventfkcorecrmeventcustomers()
                    {
                        return $this->fkcorecrmeventfkcorecrmeventcustomers;
                    }  /**
                        * Set fkcorecrmeventfkcorecrmeventcustomers.
                        *@param int $fkcorecrmeventfkcorecrmeventcustomers    
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setFkcorecrmeventfkcorecrmeventcustomers($fkcorecrmeventfkcorecrmeventcustomers) 
                        {      
                            $this->fkcorecrmeventfkcorecrmeventcustomers = (int) $fkcorecrmeventfkcorecrmeventcustomers;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customerfull;
             
                        /**
                        * Get customerfull.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomerfull()
                    {
                        return $this->customerfull;
                    }  /**
                        * Set customerfull.
                        *@param string $customerfull    
                        *@return B2bB2badminschemaVfcrmcustomereventInterface*/
                         public function setCustomerfull($customerfull) 
                        {      
                            $this->customerfull = (string) $customerfull;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_customer_event";

}
        

             