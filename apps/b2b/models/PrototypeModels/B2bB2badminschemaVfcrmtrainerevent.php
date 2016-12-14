<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmtrainerevent extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmtrainereventInterface {
    

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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
                         public function setFkparentlng($fkparentlng) 
                        {      
                            $this->fkparentlng = (int) $fkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmtrainerfkcorecrmeventtrainers;
             
                        /**
                        * Get fkcorecrmtrainerfkcorecrmeventtrainers.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmtrainerfkcorecrmeventtrainers()
                    {
                        return $this->fkcorecrmtrainerfkcorecrmeventtrainers;
                    }  /**
                        * Set fkcorecrmtrainerfkcorecrmeventtrainers.
                        *@param int $fkcorecrmtrainerfkcorecrmeventtrainers    
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
                         public function setFkcorecrmtrainerfkcorecrmeventtrainers($fkcorecrmtrainerfkcorecrmeventtrainers) 
                        {      
                            $this->fkcorecrmtrainerfkcorecrmeventtrainers = (int) $fkcorecrmtrainerfkcorecrmeventtrainers;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmeventfkcorecrmeventtrainers;
             
                        /**
                        * Get fkcorecrmeventfkcorecrmeventtrainers.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmeventfkcorecrmeventtrainers()
                    {
                        return $this->fkcorecrmeventfkcorecrmeventtrainers;
                    }  /**
                        * Set fkcorecrmeventfkcorecrmeventtrainers.
                        *@param int $fkcorecrmeventfkcorecrmeventtrainers    
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
                         public function setFkcorecrmeventfkcorecrmeventtrainers($fkcorecrmeventfkcorecrmeventtrainers) 
                        {      
                            $this->fkcorecrmeventfkcorecrmeventtrainers = (int) $fkcorecrmeventfkcorecrmeventtrainers;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $trainerfull;
             
                        /**
                        * Get trainerfull.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTrainerfull()
                    {
                        return $this->trainerfull;
                    }  /**
                        * Set trainerfull.
                        *@param string $trainerfull    
                        *@return B2bB2badminschemaVfcrmtrainereventInterface*/
                         public function setTrainerfull($trainerfull) 
                        {      
                            $this->trainerfull = (string) $trainerfull;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_trainer_event";

}
        

             