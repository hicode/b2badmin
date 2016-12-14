<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmcustomerfullipoloipam extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmcustomerfullipoloipamInterface {
    

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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomerid($fkcustomerid) 
                        {      
                            $this->fkcustomerid = (int) $fkcustomerid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $tagsid;
             
                        /**
                        * Get tagsid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getTagsid()
                    {
                        return $this->tagsid;
                    }  /**
                        * Set tagsid.
                        *@param int $tagsid    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setTagsid($tagsid) 
                        {      
                            $this->tagsid = (int) $tagsid;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $tagstext;
             
                        /**
                        * Get tagstext.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTagstext()
                    {
                        return $this->tagstext;
                    }  /**
                        * Set tagstext.
                        *@param string $tagstext    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setTagstext($tagstext) 
                        {      
                            $this->tagstext = (string) $tagstext;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomerfkusercreated;
             
                        /**
                        * Get fkcustomerfkusercreated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomerfkusercreated()
                    {
                        return $this->fkcustomerfkusercreated;
                    }  /**
                        * Set fkcustomerfkusercreated.
                        *@param int $fkcustomerfkusercreated    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomerfkusercreated($fkcustomerfkusercreated) 
                        {      
                            $this->fkcustomerfkusercreated = (int) $fkcustomerfkusercreated;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fkcustomerdt_created;
             
                        /**
                        * Get fkcustomerdt_created.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFkcustomerdt_created()
                    {
                        return $this->fkcustomerdt_created;
                    }  /**
                        * Set fkcustomerdt_created.
                        *@param string $fkcustomerdt_created    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomerdt_created($fkcustomerdt_created) 
                        {      
                            $this->fkcustomerdt_created = (string) $fkcustomerdt_created;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomerfkuserlastupdated;
             
                        /**
                        * Get fkcustomerfkuserlastupdated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomerfkuserlastupdated()
                    {
                        return $this->fkcustomerfkuserlastupdated;
                    }  /**
                        * Set fkcustomerfkuserlastupdated.
                        *@param int $fkcustomerfkuserlastupdated    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomerfkuserlastupdated($fkcustomerfkuserlastupdated) 
                        {      
                            $this->fkcustomerfkuserlastupdated = (int) $fkcustomerfkuserlastupdated;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fkcustomerdt_updated;
             
                        /**
                        * Get fkcustomerdt_updated.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFkcustomerdt_updated()
                    {
                        return $this->fkcustomerdt_updated;
                    }  /**
                        * Set fkcustomerdt_updated.
                        *@param string $fkcustomerdt_updated    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomerdt_updated($fkcustomerdt_updated) 
                        {      
                            $this->fkcustomerdt_updated = (string) $fkcustomerdt_updated;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $customerupdatestatus;
             
                        /**
                        * Get customerupdatestatus.
                        * 
                             /**
                                * @return int
                            */  
                    public function getCustomerupdatestatus()
                    {
                        return $this->customerupdatestatus;
                    }  /**
                        * Set customerupdatestatus.
                        *@param int $customerupdatestatus    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomerupdatestatus($customerupdatestatus) 
                        {      
                            $this->customerupdatestatus = (int) $customerupdatestatus;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomerfkparentlng($fkcustomerfkparentlng) 
                        {      
                            $this->fkcustomerfkparentlng = (int) $fkcustomerfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fkcustomeruniqid;
             
                        /**
                        * Get fkcustomeruniqid.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFkcustomeruniqid()
                    {
                        return $this->fkcustomeruniqid;
                    }  /**
                        * Set fkcustomeruniqid.
                        *@param string $fkcustomeruniqid    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcustomeruniqid($fkcustomeruniqid) 
                        {      
                            $this->fkcustomeruniqid = (string) $fkcustomeruniqid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkgenderid;
             
                        /**
                        * Get fkgenderid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkgenderid()
                    {
                        return $this->fkgenderid;
                    }  /**
                        * Set fkgenderid.
                        *@param int $fkgenderid    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkgenderid($fkgenderid) 
                        {      
                            $this->fkgenderid = (int) $fkgenderid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkgenderfkparentlng;
             
                        /**
                        * Get fkgenderfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkgenderfkparentlng()
                    {
                        return $this->fkgenderfkparentlng;
                    }  /**
                        * Set fkgenderfkparentlng.
                        *@param int $fkgenderfkparentlng    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkgenderfkparentlng($fkgenderfkparentlng) 
                        {      
                            $this->fkgenderfkparentlng = (int) $fkgenderfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $gendertitle;
             
                        /**
                        * Get gendertitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getGendertitle()
                    {
                        return $this->gendertitle;
                    }  /**
                        * Set gendertitle.
                        *@param string $gendertitle    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setGendertitle($gendertitle) 
                        {      
                            $this->gendertitle = (string) $gendertitle;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fksalutationid;
             
                        /**
                        * Get fksalutationid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFksalutationid()
                    {
                        return $this->fksalutationid;
                    }  /**
                        * Set fksalutationid.
                        *@param int $fksalutationid    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFksalutationid($fksalutationid) 
                        {      
                            $this->fksalutationid = (int) $fksalutationid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fksalutationfkparentlng;
             
                        /**
                        * Get fksalutationfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFksalutationfkparentlng()
                    {
                        return $this->fksalutationfkparentlng;
                    }  /**
                        * Set fksalutationfkparentlng.
                        *@param int $fksalutationfkparentlng    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFksalutationfkparentlng($fksalutationfkparentlng) 
                        {      
                            $this->fksalutationfkparentlng = (int) $fksalutationfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $salutationtitle;
             
                        /**
                        * Get salutationtitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getSalutationtitle()
                    {
                        return $this->salutationtitle;
                    }  /**
                        * Set salutationtitle.
                        *@param string $salutationtitle    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setSalutationtitle($salutationtitle) 
                        {      
                            $this->salutationtitle = (string) $salutationtitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $gensrch;
             
                        /**
                        * Get gensrch.
                        * 
                             /**
                                * @return string
                            */  
                    public function getGensrch()
                    {
                        return $this->gensrch;
                    }  /**
                        * Set gensrch.
                        *@param string $gensrch    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setGensrch($gensrch) 
                        {      
                            $this->gensrch = (string) $gensrch;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomerfull($customerfull) 
                        {      
                            $this->customerfull = (string) $customerfull;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomerlname($customerlname) 
                        {      
                            $this->customerlname = (string) $customerlname;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomerfname($customerfname) 
                        {      
                            $this->customerfname = (string) $customerfname;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomerphotourl($customerphotourl) 
                        {      
                            $this->customerphotourl = (string) $customerphotourl;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcountry1;
             
                        /**
                        * Get fkcountry1.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcountry1()
                    {
                        return $this->fkcountry1;
                    }  /**
                        * Set fkcountry1.
                        *@param int $fkcountry1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkcountry1($fkcountry1) 
                        {      
                            $this->fkcountry1 = (int) $fkcountry1;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $countryname1;
             
                        /**
                        * Get countryname1.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCountryname1()
                    {
                        return $this->countryname1;
                    }  /**
                        * Set countryname1.
                        *@param string $countryname1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCountryname1($countryname1) 
                        {      
                            $this->countryname1 = (string) $countryname1;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkprefecture1;
             
                        /**
                        * Get fkprefecture1.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkprefecture1()
                    {
                        return $this->fkprefecture1;
                    }  /**
                        * Set fkprefecture1.
                        *@param int $fkprefecture1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkprefecture1($fkprefecture1) 
                        {      
                            $this->fkprefecture1 = (int) $fkprefecture1;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $prefecture1;
             
                        /**
                        * Get prefecture1.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPrefecture1()
                    {
                        return $this->prefecture1;
                    }  /**
                        * Set prefecture1.
                        *@param string $prefecture1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setPrefecture1($prefecture1) 
                        {      
                            $this->prefecture1 = (string) $prefecture1;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktown1;
             
                        /**
                        * Get fktown1.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktown1()
                    {
                        return $this->fktown1;
                    }  /**
                        * Set fktown1.
                        *@param int $fktown1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFktown1($fktown1) 
                        {      
                            $this->fktown1 = (int) $fktown1;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $townname1;
             
                        /**
                        * Get townname1.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTownname1()
                    {
                        return $this->townname1;
                    }  /**
                        * Set townname1.
                        *@param string $townname1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setTownname1($townname1) 
                        {      
                            $this->townname1 = (string) $townname1;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkpoc1;
             
                        /**
                        * Get fkpoc1.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkpoc1()
                    {
                        return $this->fkpoc1;
                    }  /**
                        * Set fkpoc1.
                        *@param int $fkpoc1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setFkpoc1($fkpoc1) 
                        {      
                            $this->fkpoc1 = (int) $fkpoc1;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pocname1;
             
                        /**
                        * Get pocname1.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPocname1()
                    {
                        return $this->pocname1;
                    }  /**
                        * Set pocname1.
                        *@param string $pocname1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setPocname1($pocname1) 
                        {      
                            $this->pocname1 = (string) $pocname1;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $addressname1;
             
                        /**
                        * Get addressname1.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAddressname1()
                    {
                        return $this->addressname1;
                    }  /**
                        * Set addressname1.
                        *@param string $addressname1    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setAddressname1($addressname1) 
                        {      
                            $this->addressname1 = (string) $addressname1;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomercontracttitle($customercontracttitle) 
                        {      
                            $this->customercontracttitle = (string) $customercontracttitle;
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
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
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setCustomercontractdtend($customercontractdtend) 
                        {      
                            $this->customercontractdtend = (string) $customercontractdtend;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $sumcustomercontractprice;
             
                        /**
                        * Get sumcustomercontractprice.
                        * 
                             /**
                                * @return float
                            */  
                    public function getSumcustomercontractprice()
                    {
                        return $this->sumcustomercontractprice;
                    }  /**
                        * Set sumcustomercontractprice.
                        *@param float $sumcustomercontractprice    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setSumcustomercontractprice($sumcustomercontractprice) 
                        {      
                            $this->sumcustomercontractprice = (float) $sumcustomercontractprice;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $sumactualpaymenttotal;
             
                        /**
                        * Get sumactualpaymenttotal.
                        * 
                             /**
                                * @return float
                            */  
                    public function getSumactualpaymenttotal()
                    {
                        return $this->sumactualpaymenttotal;
                    }  /**
                        * Set sumactualpaymenttotal.
                        *@param float $sumactualpaymenttotal    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setSumactualpaymenttotal($sumactualpaymenttotal) 
                        {      
                            $this->sumactualpaymenttotal = (float) $sumactualpaymenttotal;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $sumipoloipo;
             
                        /**
                        * Get sumipoloipo.
                        * 
                             /**
                                * @return float
                            */  
                    public function getSumipoloipo()
                    {
                        return $this->sumipoloipo;
                    }  /**
                        * Set sumipoloipo.
                        *@param float $sumipoloipo    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setSumipoloipo($sumipoloipo) 
                        {      
                            $this->sumipoloipo = (float) $sumipoloipo;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $sumdiscounttotal;
             
                        /**
                        * Get sumdiscounttotal.
                        * 
                             /**
                                * @return float
                            */  
                    public function getSumdiscounttotal()
                    {
                        return $this->sumdiscounttotal;
                    }  /**
                        * Set sumdiscounttotal.
                        *@param float $sumdiscounttotal    
                        *@return B2bB2badminschemaVfcrmcustomerfullipoloipamInterface*/
                         public function setSumdiscounttotal($sumdiscounttotal) 
                        {      
                            $this->sumdiscounttotal = (float) $sumdiscounttotal;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_customer_full_ipoloipa_m";

}
        

             