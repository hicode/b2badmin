<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcustomeraddress extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcustomeraddressInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setFkcustomerfkparentlng($fkcustomerfkparentlng) 
                        {      
                            $this->fkcustomerfkparentlng = (int) $fkcustomerfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomeraddressid;
             
                        /**
                        * Get fkcustomeraddressid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomeraddressid()
                    {
                        return $this->fkcustomeraddressid;
                    }  /**
                        * Set fkcustomeraddressid.
                        *@param int $fkcustomeraddressid    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setFkcustomeraddressid($fkcustomeraddressid) 
                        {      
                            $this->fkcustomeraddressid = (int) $fkcustomeraddressid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomeraddressfkparentlng;
             
                        /**
                        * Get fkcustomeraddressfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomeraddressfkparentlng()
                    {
                        return $this->fkcustomeraddressfkparentlng;
                    }  /**
                        * Set fkcustomeraddressfkparentlng.
                        *@param int $fkcustomeraddressfkparentlng    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setFkcustomeraddressfkparentlng($fkcustomeraddressfkparentlng) 
                        {      
                            $this->fkcustomeraddressfkparentlng = (int) $fkcustomeraddressfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkaddresstype;
             
                        /**
                        * Get fkaddresstype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkaddresstype()
                    {
                        return $this->fkaddresstype;
                    }  /**
                        * Set fkaddresstype.
                        *@param int $fkaddresstype    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setFkaddresstype($fkaddresstype) 
                        {      
                            $this->fkaddresstype = (int) $fkaddresstype;
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomerlname($customerlname) 
                        {      
                            $this->customerlname = (string) $customerlname;
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomerphotourl($customerphotourl) 
                        {      
                            $this->customerphotourl = (string) $customerphotourl;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $addresstypetitle;
             
                        /**
                        * Get addresstypetitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAddresstypetitle()
                    {
                        return $this->addresstypetitle;
                    }  /**
                        * Set addresstypetitle.
                        *@param string $addresstypetitle    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setAddresstypetitle($addresstypetitle) 
                        {      
                            $this->addresstypetitle = (string) $addresstypetitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddressaddressname;
             
                        /**
                        * Get customeraddressaddressname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddressaddressname()
                    {
                        return $this->customeraddressaddressname;
                    }  /**
                        * Set customeraddressaddressname.
                        *@param string $customeraddressaddressname    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressaddressname($customeraddressaddressname) 
                        {      
                            $this->customeraddressaddressname = (string) $customeraddressaddressname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customeraddressfkregion;
             
                        /**
                        * Get customeraddressfkregion.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomeraddressfkregion()
                    {
                        return $this->customeraddressfkregion;
                    }  /**
                        * Set customeraddressfkregion.
                        *@param int $customeraddressfkregion    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressfkregion($customeraddressfkregion) 
                        {      
                            $this->customeraddressfkregion = (int) $customeraddressfkregion;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customeraddressfkcountry;
             
                        /**
                        * Get customeraddressfkcountry.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomeraddressfkcountry()
                    {
                        return $this->customeraddressfkcountry;
                    }  /**
                        * Set customeraddressfkcountry.
                        *@param int $customeraddressfkcountry    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressfkcountry($customeraddressfkcountry) 
                        {      
                            $this->customeraddressfkcountry = (int) $customeraddressfkcountry;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customeraddressfkprefecture;
             
                        /**
                        * Get customeraddressfkprefecture.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomeraddressfkprefecture()
                    {
                        return $this->customeraddressfkprefecture;
                    }  /**
                        * Set customeraddressfkprefecture.
                        *@param int $customeraddressfkprefecture    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressfkprefecture($customeraddressfkprefecture) 
                        {      
                            $this->customeraddressfkprefecture = (int) $customeraddressfkprefecture;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customeraddressfktown;
             
                        /**
                        * Get customeraddressfktown.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomeraddressfktown()
                    {
                        return $this->customeraddressfktown;
                    }  /**
                        * Set customeraddressfktown.
                        *@param int $customeraddressfktown    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressfktown($customeraddressfktown) 
                        {      
                            $this->customeraddressfktown = (int) $customeraddressfktown;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customeraddressfkpoc;
             
                        /**
                        * Get customeraddressfkpoc.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomeraddressfkpoc()
                    {
                        return $this->customeraddressfkpoc;
                    }  /**
                        * Set customeraddressfkpoc.
                        *@param int $customeraddressfkpoc    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressfkpoc($customeraddressfkpoc) 
                        {      
                            $this->customeraddressfkpoc = (int) $customeraddressfkpoc;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddresscountryname;
             
                        /**
                        * Get customeraddresscountryname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddresscountryname()
                    {
                        return $this->customeraddresscountryname;
                    }  /**
                        * Set customeraddresscountryname.
                        *@param string $customeraddresscountryname    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddresscountryname($customeraddresscountryname) 
                        {      
                            $this->customeraddresscountryname = (string) $customeraddresscountryname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddressprefecturename;
             
                        /**
                        * Get customeraddressprefecturename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddressprefecturename()
                    {
                        return $this->customeraddressprefecturename;
                    }  /**
                        * Set customeraddressprefecturename.
                        *@param string $customeraddressprefecturename    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressprefecturename($customeraddressprefecturename) 
                        {      
                            $this->customeraddressprefecturename = (string) $customeraddressprefecturename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddresstownname;
             
                        /**
                        * Get customeraddresstownname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddresstownname()
                    {
                        return $this->customeraddresstownname;
                    }  /**
                        * Set customeraddresstownname.
                        *@param string $customeraddresstownname    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddresstownname($customeraddresstownname) 
                        {      
                            $this->customeraddresstownname = (string) $customeraddresstownname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddressregionaddressorvillage;
             
                        /**
                        * Get customeraddressregionaddressorvillage.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddressregionaddressorvillage()
                    {
                        return $this->customeraddressregionaddressorvillage;
                    }  /**
                        * Set customeraddressregionaddressorvillage.
                        *@param string $customeraddressregionaddressorvillage    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressregionaddressorvillage($customeraddressregionaddressorvillage) 
                        {      
                            $this->customeraddressregionaddressorvillage = (string) $customeraddressregionaddressorvillage;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddressregionstreetnum;
             
                        /**
                        * Get customeraddressregionstreetnum.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddressregionstreetnum()
                    {
                        return $this->customeraddressregionstreetnum;
                    }  /**
                        * Set customeraddressregionstreetnum.
                        *@param string $customeraddressregionstreetnum    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddressregionstreetnum($customeraddressregionstreetnum) 
                        {      
                            $this->customeraddressregionstreetnum = (string) $customeraddressregionstreetnum;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $customeraddresspocname;
             
                        /**
                        * Get customeraddresspocname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCustomeraddresspocname()
                    {
                        return $this->customeraddresspocname;
                    }  /**
                        * Set customeraddresspocname.
                        *@param string $customeraddresspocname    
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
                         public function setCustomeraddresspocname($customeraddresspocname) 
                        {      
                            $this->customeraddresspocname = (string) $customeraddresspocname;
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomeraddressInterface*/
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
    const CONST_TABLE = "vf_crm_customer_address";

}
        

             