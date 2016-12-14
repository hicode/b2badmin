<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcountersm extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcountersmInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
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
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $totcustomers;
             
                        /**
                        * Get totcustomers.
                        * 
                             /**
                                * @return int
                            */  
                    public function getTotcustomers()
                    {
                        return $this->totcustomers;
                    }  /**
                        * Set totcustomers.
                        *@param int $totcustomers    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setTotcustomers($totcustomers) 
                        {      
                            $this->totcustomers = (int) $totcustomers;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $totsindromesenerges;
             
                        /**
                        * Get totsindromesenerges.
                        * 
                             /**
                                * @return int
                            */  
                    public function getTotsindromesenerges()
                    {
                        return $this->totsindromesenerges;
                    }  /**
                        * Set totsindromesenerges.
                        *@param int $totsindromesenerges    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setTotsindromesenerges($totsindromesenerges) 
                        {      
                            $this->totsindromesenerges = (int) $totsindromesenerges;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $totcustomersenerga;
             
                        /**
                        * Get totcustomersenerga.
                        * 
                             /**
                                * @return int
                            */  
                    public function getTotcustomersenerga()
                    {
                        return $this->totcustomersenerga;
                    }  /**
                        * Set totcustomersenerga.
                        *@param int $totcustomersenerga    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setTotcustomersenerga($totcustomersenerga) 
                        {      
                            $this->totcustomersenerga = (int) $totcustomersenerga;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $totcustomerswithipoloipo;
             
                        /**
                        * Get totcustomerswithipoloipo.
                        * 
                             /**
                                * @return int
                            */  
                    public function getTotcustomerswithipoloipo()
                    {
                        return $this->totcustomerswithipoloipo;
                    }  /**
                        * Set totcustomerswithipoloipo.
                        *@param int $totcustomerswithipoloipo    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setTotcustomerswithipoloipo($totcustomerswithipoloipo) 
                        {      
                            $this->totcustomerswithipoloipo = (int) $totcustomerswithipoloipo;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $annualpaymenttotal;
             
                        /**
                        * Get annualpaymenttotal.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAnnualpaymenttotal()
                    {
                        return $this->annualpaymenttotal;
                    }  /**
                        * Set annualpaymenttotal.
                        *@param float $annualpaymenttotal    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setAnnualpaymenttotal($annualpaymenttotal) 
                        {      
                            $this->annualpaymenttotal = (float) $annualpaymenttotal;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $monthlypaymenttotal;
             
                        /**
                        * Get monthlypaymenttotal.
                        * 
                             /**
                                * @return float
                            */  
                    public function getMonthlypaymenttotal()
                    {
                        return $this->monthlypaymenttotal;
                    }  /**
                        * Set monthlypaymenttotal.
                        *@param float $monthlypaymenttotal    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setMonthlypaymenttotal($monthlypaymenttotal) 
                        {      
                            $this->monthlypaymenttotal = (float) $monthlypaymenttotal;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $expiremonthtotal;
             
                        /**
                        * Get expiremonthtotal.
                        * 
                             /**
                                * @return int
                            */  
                    public function getExpiremonthtotal()
                    {
                        return $this->expiremonthtotal;
                    }  /**
                        * Set expiremonthtotal.
                        *@param int $expiremonthtotal    
                        *@return B2bB2badminschemaVfcrmcountersmInterface*/
                         public function setExpiremonthtotal($expiremonthtotal) 
                        {      
                            $this->expiremonthtotal = (int) $expiremonthtotal;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_counters_m";

}
        

             