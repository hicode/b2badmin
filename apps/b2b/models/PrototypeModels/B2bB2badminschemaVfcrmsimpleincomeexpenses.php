<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmsimpleincomeexpenses extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmsimpleincomeexpensesInterface {
    

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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmexpenses;
             
                        /**
                        * Get fkcorecrmexpenses.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmexpenses()
                    {
                        return $this->fkcorecrmexpenses;
                    }  /**
                        * Set fkcorecrmexpenses.
                        *@param int $fkcorecrmexpenses    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setFkcorecrmexpenses($fkcorecrmexpenses) 
                        {      
                            $this->fkcorecrmexpenses = (int) $fkcorecrmexpenses;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcoreavailableexpensestype;
             
                        /**
                        * Get fkcoreavailableexpensestype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcoreavailableexpensestype()
                    {
                        return $this->fkcoreavailableexpensestype;
                    }  /**
                        * Set fkcoreavailableexpensestype.
                        *@param int $fkcoreavailableexpensestype    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setFkcoreavailableexpensestype($fkcoreavailableexpensestype) 
                        {      
                            $this->fkcoreavailableexpensestype = (int) $fkcoreavailableexpensestype;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcoreavailablepaymenttype;
             
                        /**
                        * Get fkcoreavailablepaymenttype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcoreavailablepaymenttype()
                    {
                        return $this->fkcoreavailablepaymenttype;
                    }  /**
                        * Set fkcoreavailablepaymenttype.
                        *@param int $fkcoreavailablepaymenttype    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setFkcoreavailablepaymenttype($fkcoreavailablepaymenttype) 
                        {      
                            $this->fkcoreavailablepaymenttype = (int) $fkcoreavailablepaymenttype;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcoreavailabletaxes;
             
                        /**
                        * Get fkcoreavailabletaxes.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcoreavailabletaxes()
                    {
                        return $this->fkcoreavailabletaxes;
                    }  /**
                        * Set fkcoreavailabletaxes.
                        *@param int $fkcoreavailabletaxes    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setFkcoreavailabletaxes($fkcoreavailabletaxes) 
                        {      
                            $this->fkcoreavailabletaxes = (int) $fkcoreavailabletaxes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dtpayment;
             
                        /**
                        * Get dtpayment.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDtpayment()
                    {
                        return $this->dtpayment;
                    }  /**
                        * Set dtpayment.
                        *@param string $dtpayment    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setDtpayment($dtpayment) 
                        {      
                            $this->dtpayment = (string) $dtpayment;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $cost;
             
                        /**
                        * Get cost.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCost()
                    {
                        return $this->cost;
                    }  /**
                        * Set cost.
                        *@param float $cost    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setCost($cost) 
                        {      
                            $this->cost = (float) $cost;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $remarks;
             
                        /**
                        * Get remarks.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRemarks()
                    {
                        return $this->remarks;
                    }  /**
                        * Set remarks.
                        *@param string $remarks    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setRemarks($remarks) 
                        {      
                            $this->remarks = (string) $remarks;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $coreavailablepaymenttypetitle;
             
                        /**
                        * Get coreavailablepaymenttypetitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCoreavailablepaymenttypetitle()
                    {
                        return $this->coreavailablepaymenttypetitle;
                    }  /**
                        * Set coreavailablepaymenttypetitle.
                        *@param string $coreavailablepaymenttypetitle    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setCoreavailablepaymenttypetitle($coreavailablepaymenttypetitle) 
                        {      
                            $this->coreavailablepaymenttypetitle = (string) $coreavailablepaymenttypetitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $coreavailablepaymenttypealiasname;
             
                        /**
                        * Get coreavailablepaymenttypealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCoreavailablepaymenttypealiasname()
                    {
                        return $this->coreavailablepaymenttypealiasname;
                    }  /**
                        * Set coreavailablepaymenttypealiasname.
                        *@param string $coreavailablepaymenttypealiasname    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setCoreavailablepaymenttypealiasname($coreavailablepaymenttypealiasname) 
                        {      
                            $this->coreavailablepaymenttypealiasname = (string) $coreavailablepaymenttypealiasname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $coreavailabletaxestitle;
             
                        /**
                        * Get coreavailabletaxestitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCoreavailabletaxestitle()
                    {
                        return $this->coreavailabletaxestitle;
                    }  /**
                        * Set coreavailabletaxestitle.
                        *@param string $coreavailabletaxestitle    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setCoreavailabletaxestitle($coreavailabletaxestitle) 
                        {      
                            $this->coreavailabletaxestitle = (string) $coreavailabletaxestitle;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $coreavailabletaxestaxpercentage;
             
                        /**
                        * Get coreavailabletaxestaxpercentage.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCoreavailabletaxestaxpercentage()
                    {
                        return $this->coreavailabletaxestaxpercentage;
                    }  /**
                        * Set coreavailabletaxestaxpercentage.
                        *@param float $coreavailabletaxestaxpercentage    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setCoreavailabletaxestaxpercentage($coreavailabletaxestaxpercentage) 
                        {      
                            $this->coreavailabletaxestaxpercentage = (float) $coreavailabletaxestaxpercentage;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $coreavailableexpensestypealiasname;
             
                        /**
                        * Get coreavailableexpensestypealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCoreavailableexpensestypealiasname()
                    {
                        return $this->coreavailableexpensestypealiasname;
                    }  /**
                        * Set coreavailableexpensestypealiasname.
                        *@param string $coreavailableexpensestypealiasname    
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setCoreavailableexpensestypealiasname($coreavailableexpensestypealiasname) 
                        {      
                            $this->coreavailableexpensestypealiasname = (string) $coreavailableexpensestypealiasname;
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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
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
                        *@return B2bB2badminschemaVfcrmsimpleincomeexpensesInterface*/
                         public function setFkparentlng($fkparentlng) 
                        {      
                            $this->fkparentlng = (int) $fkparentlng;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_simple_income_expenses";

}
        

             