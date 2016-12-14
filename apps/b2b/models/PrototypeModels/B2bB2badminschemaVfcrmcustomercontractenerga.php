<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcustomercontractenerga extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcustomercontractenergaInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomerid;
             
                        /**
                        * Get fkcustomerid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomerid()
                    {
                        return $this->fkcustomerid;
                    }  /**
                        * Set fkcustomerid.
                        *@param int $fkcustomerid    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setFkcustomerid($fkcustomerid) 
                        {      
                            $this->fkcustomerid = (int) $fkcustomerid;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setFkcustomerfkparentlng($fkcustomerfkparentlng) 
                        {      
                            $this->fkcustomerfkparentlng = (int) $fkcustomerfkparentlng;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorecrmavailableserviceid;
             
                        /**
                        * Get fkcorecrmavailableserviceid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorecrmavailableserviceid()
                    {
                        return $this->fkcorecrmavailableserviceid;
                    }  /**
                        * Set fkcorecrmavailableserviceid.
                        *@param int $fkcorecrmavailableserviceid    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setFkcorecrmavailableserviceid($fkcorecrmavailableserviceid) 
                        {      
                            $this->fkcorecrmavailableserviceid = (int) $fkcorecrmavailableserviceid;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $corecrmavailableservicetitle;
             
                        /**
                        * Get corecrmavailableservicetitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCorecrmavailableservicetitle()
                    {
                        return $this->corecrmavailableservicetitle;
                    }  /**
                        * Set corecrmavailableservicetitle.
                        *@param string $corecrmavailableservicetitle    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCorecrmavailableservicetitle($corecrmavailableservicetitle) 
                        {      
                            $this->corecrmavailableservicetitle = (string) $corecrmavailableservicetitle;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractid($customercontractid) 
                        {      
                            $this->customercontractid = (int) $customercontractid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailablepacket;
             
                        /**
                        * Get fkavailablepacket.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailablepacket()
                    {
                        return $this->fkavailablepacket;
                    }  /**
                        * Set fkavailablepacket.
                        *@param int $fkavailablepacket    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setFkavailablepacket($fkavailablepacket) 
                        {      
                            $this->fkavailablepacket = (int) $fkavailablepacket;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $corecrmavailablepackettitle;
             
                        /**
                        * Get corecrmavailablepackettitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCorecrmavailablepackettitle()
                    {
                        return $this->corecrmavailablepackettitle;
                    }  /**
                        * Set corecrmavailablepackettitle.
                        *@param string $corecrmavailablepackettitle    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCorecrmavailablepackettitle($corecrmavailablepackettitle) 
                        {      
                            $this->corecrmavailablepackettitle = (string) $corecrmavailablepackettitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customercontracttitle;
             
                        /**
                        * Get customercontracttitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomercontracttitle()
                    {
                        return $this->customercontracttitle;
                    }  /**
                        * Set customercontracttitle.
                        *@param string $customercontracttitle    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontracttitle($customercontracttitle) 
                        {      
                            $this->customercontracttitle = (string) $customercontracttitle;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontracttotalminutes;
             
                        /**
                        * Get customercontracttotalminutes.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontracttotalminutes()
                    {
                        return $this->customercontracttotalminutes;
                    }  /**
                        * Set customercontracttotalminutes.
                        *@param float $customercontracttotalminutes    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontracttotalminutes($customercontracttotalminutes) 
                        {      
                            $this->customercontracttotalminutes = (float) $customercontracttotalminutes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontracttotaldays;
             
                        /**
                        * Get customercontracttotaldays.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontracttotaldays()
                    {
                        return $this->customercontracttotaldays;
                    }  /**
                        * Set customercontracttotaldays.
                        *@param float $customercontracttotaldays    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontracttotaldays($customercontracttotaldays) 
                        {      
                            $this->customercontracttotaldays = (float) $customercontracttotaldays;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontracttotalweeks;
             
                        /**
                        * Get customercontracttotalweeks.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontracttotalweeks()
                    {
                        return $this->customercontracttotalweeks;
                    }  /**
                        * Set customercontracttotalweeks.
                        *@param float $customercontracttotalweeks    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontracttotalweeks($customercontracttotalweeks) 
                        {      
                            $this->customercontracttotalweeks = (float) $customercontracttotalweeks;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontracttotalmonths;
             
                        /**
                        * Get customercontracttotalmonths.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontracttotalmonths()
                    {
                        return $this->customercontracttotalmonths;
                    }  /**
                        * Set customercontracttotalmonths.
                        *@param float $customercontracttotalmonths    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontracttotalmonths($customercontracttotalmonths) 
                        {      
                            $this->customercontracttotalmonths = (float) $customercontracttotalmonths;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customercontractdtstart;
             
                        /**
                        * Get customercontractdtstart.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomercontractdtstart()
                    {
                        return $this->customercontractdtstart;
                    }  /**
                        * Set customercontractdtstart.
                        *@param string $customercontractdtstart    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractdtstart($customercontractdtstart) 
                        {      
                            $this->customercontractdtstart = (string) $customercontractdtstart;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractdtend($customercontractdtend) 
                        {      
                            $this->customercontractdtend = (string) $customercontractdtend;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontracttotaltimes;
             
                        /**
                        * Get customercontracttotaltimes.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontracttotaltimes()
                    {
                        return $this->customercontracttotaltimes;
                    }  /**
                        * Set customercontracttotaltimes.
                        *@param float $customercontracttotaltimes    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontracttotaltimes($customercontracttotaltimes) 
                        {      
                            $this->customercontracttotaltimes = (float) $customercontracttotaltimes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontractprevtimes;
             
                        /**
                        * Get customercontractprevtimes.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontractprevtimes()
                    {
                        return $this->customercontractprevtimes;
                    }  /**
                        * Set customercontractprevtimes.
                        *@param float $customercontractprevtimes    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractprevtimes($customercontractprevtimes) 
                        {      
                            $this->customercontractprevtimes = (float) $customercontractprevtimes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontractdonetimes;
             
                        /**
                        * Get customercontractdonetimes.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontractdonetimes()
                    {
                        return $this->customercontractdonetimes;
                    }  /**
                        * Set customercontractdonetimes.
                        *@param float $customercontractdonetimes    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractdonetimes($customercontractdonetimes) 
                        {      
                            $this->customercontractdonetimes = (float) $customercontractdonetimes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontractprice;
             
                        /**
                        * Get customercontractprice.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontractprice()
                    {
                        return $this->customercontractprice;
                    }  /**
                        * Set customercontractprice.
                        *@param float $customercontractprice    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractprice($customercontractprice) 
                        {      
                            $this->customercontractprice = (float) $customercontractprice;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontractdiscountnum;
             
                        /**
                        * Get customercontractdiscountnum.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontractdiscountnum()
                    {
                        return $this->customercontractdiscountnum;
                    }  /**
                        * Set customercontractdiscountnum.
                        *@param float $customercontractdiscountnum    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractdiscountnum($customercontractdiscountnum) 
                        {      
                            $this->customercontractdiscountnum = (float) $customercontractdiscountnum;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $customercontractdiscountper;
             
                        /**
                        * Get customercontractdiscountper.
                        * 
                             /**
                                * @return float
                            */  
                    public function getCustomercontractdiscountper()
                    {
                        return $this->customercontractdiscountper;
                    }  /**
                        * Set customercontractdiscountper.
                        *@param float $customercontractdiscountper    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractdiscountper($customercontractdiscountper) 
                        {      
                            $this->customercontractdiscountper = (float) $customercontractdiscountper;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customercontractfkavailabletaxes;
             
                        /**
                        * Get customercontractfkavailabletaxes.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomercontractfkavailabletaxes()
                    {
                        return $this->customercontractfkavailabletaxes;
                    }  /**
                        * Set customercontractfkavailabletaxes.
                        *@param int $customercontractfkavailabletaxes    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomercontractfkavailabletaxes($customercontractfkavailabletaxes) 
                        {      
                            $this->customercontractfkavailabletaxes = (int) $customercontractfkavailabletaxes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $taxpercentage;
             
                        /**
                        * Get taxpercentage.
                        * 
                             /**
                                * @return float
                            */  
                    public function getTaxpercentage()
                    {
                        return $this->taxpercentage;
                    }  /**
                        * Set taxpercentage.
                        *@param float $taxpercentage    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setTaxpercentage($taxpercentage) 
                        {      
                            $this->taxpercentage = (float) $taxpercentage;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customerfname;
             
                        /**
                        * Get customerfname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomerfname()
                    {
                        return $this->customerfname;
                    }  /**
                        * Set customerfname.
                        *@param string $customerfname    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomerfname($customerfname) 
                        {      
                            $this->customerfname = (string) $customerfname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customerlname;
             
                        /**
                        * Get customerlname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomerlname()
                    {
                        return $this->customerlname;
                    }  /**
                        * Set customerlname.
                        *@param string $customerlname    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomerlname($customerlname) 
                        {      
                            $this->customerlname = (string) $customerlname;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomerfull($customerfull) 
                        {      
                            $this->customerfull = (string) $customerfull;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customertelmobile;
             
                        /**
                        * Get customertelmobile.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomertelmobile()
                    {
                        return $this->customertelmobile;
                    }  /**
                        * Set customertelmobile.
                        *@param string $customertelmobile    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomertelmobile($customertelmobile) 
                        {      
                            $this->customertelmobile = (string) $customertelmobile;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customertelland;
             
                        /**
                        * Get customertelland.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomertelland()
                    {
                        return $this->customertelland;
                    }  /**
                        * Set customertelland.
                        *@param string $customertelland    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomertelland($customertelland) 
                        {      
                            $this->customertelland = (string) $customertelland;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customerbirthday;
             
                        /**
                        * Get customerbirthday.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomerbirthday()
                    {
                        return $this->customerbirthday;
                    }  /**
                        * Set customerbirthday.
                        *@param string $customerbirthday    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomerbirthday($customerbirthday) 
                        {      
                            $this->customerbirthday = (string) $customerbirthday;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeremail;
             
                        /**
                        * Get customeremail.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeremail()
                    {
                        return $this->customeremail;
                    }  /**
                        * Set customeremail.
                        *@param string $customeremail    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomeremail($customeremail) 
                        {      
                            $this->customeremail = (string) $customeremail;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customerphotourl;
             
                        /**
                        * Get customerphotourl.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomerphotourl()
                    {
                        return $this->customerphotourl;
                    }  /**
                        * Set customerphotourl.
                        *@param string $customerphotourl    
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setCustomerphotourl($customerphotourl) 
                        {      
                            $this->customerphotourl = (string) $customerphotourl;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomercontractenergaInterface*/
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
    const CONST_TABLE = "vf_crm_customer_contract_energa";

}
        

             