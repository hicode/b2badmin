<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcustomeripoloipam extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcustomeripoloipamInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcustomeripoloipamInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
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
                        *@return B2bB2badminschemaVfcrmcustomeripoloipamInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomerfkparentlng;
             
                        /**
                        * Get fkcustomerfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomerfkparentlng()
                    {
                        return $this->fkcustomerfkparentlng;
                    }  /**
                        * Set fkcustomerfkparentlng.
                        *@param int $fkcustomerfkparentlng    
                        *@return B2bB2badminschemaVfcrmcustomeripoloipamInterface*/
                         public function setFkcustomerfkparentlng($fkcustomerfkparentlng) 
                        {      
                            $this->fkcustomerfkparentlng = (int) $fkcustomerfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $totalipoloipo;
             
                        /**
                        * Get totalipoloipo.
                        * 
                             /**
                                * @return float
                            */  
                    public function getTotalipoloipo()
                    {
                        return $this->totalipoloipo;
                    }  /**
                        * Set totalipoloipo.
                        *@param float $totalipoloipo    
                        *@return B2bB2badminschemaVfcrmcustomeripoloipamInterface*/
                         public function setTotalipoloipo($totalipoloipo) 
                        {      
                            $this->totalipoloipo = (float) $totalipoloipo;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_customer_ipoloipa_m";

}
        

             