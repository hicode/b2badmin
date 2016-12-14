<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmrecinvissuedprinted extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmrecinvissuedprintedInterface {
    

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
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmrecinvissued;
             
                        /**
                        * Get fkcorecrmrecinvissued.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmrecinvissued()
                    {
                        return $this->fkcorecrmrecinvissued;
                    }  /**
                        * Set fkcorecrmrecinvissued.
                        *@param int $fkcorecrmrecinvissued    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setFkcorecrmrecinvissued($fkcorecrmrecinvissued) 
                        {      
                            $this->fkcorecrmrecinvissued = (int) $fkcorecrmrecinvissued;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmcustomercontractpayment;
             
                        /**
                        * Get fkcorecrmcustomercontractpayment.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmcustomercontractpayment()
                    {
                        return $this->fkcorecrmcustomercontractpayment;
                    }  /**
                        * Set fkcorecrmcustomercontractpayment.
                        *@param int $fkcorecrmcustomercontractpayment    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setFkcorecrmcustomercontractpayment($fkcorecrmcustomercontractpayment) 
                        {      
                            $this->fkcorecrmcustomercontractpayment = (int) $fkcorecrmcustomercontractpayment;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailablerecinvtype;
             
                        /**
                        * Get fkavailablerecinvtype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailablerecinvtype()
                    {
                        return $this->fkavailablerecinvtype;
                    }  /**
                        * Set fkavailablerecinvtype.
                        *@param int $fkavailablerecinvtype    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setFkavailablerecinvtype($fkavailablerecinvtype) 
                        {      
                            $this->fkavailablerecinvtype = (int) $fkavailablerecinvtype;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dtissued;
             
                        /**
                        * Get dtissued.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDtissued()
                    {
                        return $this->dtissued;
                    }  /**
                        * Set dtissued.
                        *@param string $dtissued    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setDtissued($dtissued) 
                        {      
                            $this->dtissued = (string) $dtissued;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $recinvnum;
             
                        /**
                        * Get recinvnum.
                        * 
                             /**
                                * @return int
                            */  
                    public function getRecinvnum()
                    {
                        return $this->recinvnum;
                    }  /**
                        * Set recinvnum.
                        *@param int $recinvnum    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setRecinvnum($recinvnum) 
                        {      
                            $this->recinvnum = (int) $recinvnum;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $recinvnumprefix;
             
                        /**
                        * Get recinvnumprefix.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRecinvnumprefix()
                    {
                        return $this->recinvnumprefix;
                    }  /**
                        * Set recinvnumprefix.
                        *@param string $recinvnumprefix    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setRecinvnumprefix($recinvnumprefix) 
                        {      
                            $this->recinvnumprefix = (string) $recinvnumprefix;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dtprinted;
             
                        /**
                        * Get dtprinted.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDtprinted()
                    {
                        return $this->dtprinted;
                    }  /**
                        * Set dtprinted.
                        *@param string $dtprinted    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setDtprinted($dtprinted) 
                        {      
                            $this->dtprinted = (string) $dtprinted;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $crmavailablerecinvtypealiasname;
             
                        /**
                        * Get crmavailablerecinvtypealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCrmavailablerecinvtypealiasname()
                    {
                        return $this->crmavailablerecinvtypealiasname;
                    }  /**
                        * Set crmavailablerecinvtypealiasname.
                        *@param string $crmavailablerecinvtypealiasname    
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setCrmavailablerecinvtypealiasname($crmavailablerecinvtypealiasname) 
                        {      
                            $this->crmavailablerecinvtypealiasname = (string) $crmavailablerecinvtypealiasname;
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
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
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
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
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
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
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
                        *@return B2bB2badminschemaVfcrmrecinvissuedprintedInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_recinv_issued_printed";

}
        

             