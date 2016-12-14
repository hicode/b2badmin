<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcustomersindromesexpiremonth extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcustomersindromesexpiremonthInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcustomersindromesexpiremonthInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomersindromesexpiremonthInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customercontractid;
             
                        /**
                        * Get customercontractid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomercontractid()
                    {
                        return $this->customercontractid;
                    }  /**
                        * Set customercontractid.
                        *@param int $customercontractid    
                        *@return B2bB2badminschemaVfcrmcustomersindromesexpiremonthInterface*/
                         public function setCustomercontractid($customercontractid) 
                        {      
                            $this->customercontractid = (int) $customercontractid;
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
                        *@return B2bB2badminschemaVfcrmcustomersindromesexpiremonthInterface*/
                         public function setFkcustomerfkparentlng($fkcustomerfkparentlng) 
                        {      
                            $this->fkcustomerfkparentlng = (int) $fkcustomerfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customercontractdtend;
             
                        /**
                        * Get customercontractdtend.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomercontractdtend()
                    {
                        return $this->customercontractdtend;
                    }  /**
                        * Set customercontractdtend.
                        *@param string $customercontractdtend    
                        *@return B2bB2badminschemaVfcrmcustomersindromesexpiremonthInterface*/
                         public function setCustomercontractdtend($customercontractdtend) 
                        {      
                            $this->customercontractdtend = (string) $customercontractdtend;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_customer_sindromes_expire_month";

}
        

             