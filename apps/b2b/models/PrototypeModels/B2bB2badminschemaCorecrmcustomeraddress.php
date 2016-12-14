<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaCorecrmcustomeraddress extends \B2b\Models\BaseModel implements B2bB2badminschemaCorecrmcustomeraddressInterface {
    

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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $myid;
             
                        /**
                        * Get myid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getMyid()
                    {
                        return $this->myid;
                    }  /**
                        * Set myid.
                        *@param int $myid    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setMyid($myid) 
                        {      
                            $this->myid = (int) $myid;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkusercreated;
             
                        /**
                        * Get fkusercreated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkusercreated()
                    {
                        return $this->fkusercreated;
                    }  /**
                        * Set fkusercreated.
                        *@param int $fkusercreated    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkusercreated($fkusercreated) 
                        {      
                            $this->fkusercreated = (int) $fkusercreated;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_created;
             
                        /**
                        * Get dt_created.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_created()
                    {
                        return $this->dt_created;
                    }  /**
                        * Set dt_created.
                        *@param string $dt_created    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setDt_created($dt_created) 
                        {      
                            $this->dt_created = (string) $dt_created;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserlastupdated;
             
                        /**
                        * Get fkuserlastupdated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserlastupdated()
                    {
                        return $this->fkuserlastupdated;
                    }  /**
                        * Set fkuserlastupdated.
                        *@param int $fkuserlastupdated    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkuserlastupdated($fkuserlastupdated) 
                        {      
                            $this->fkuserlastupdated = (int) $fkuserlastupdated;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_updated;
             
                        /**
                        * Get dt_updated.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_updated()
                    {
                        return $this->dt_updated;
                    }  /**
                        * Set dt_updated.
                        *@param string $dt_updated    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setDt_updated($dt_updated) 
                        {      
                            $this->dt_updated = (string) $dt_updated;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserpublishup;
             
                        /**
                        * Get fkuserpublishup.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserpublishup()
                    {
                        return $this->fkuserpublishup;
                    }  /**
                        * Set fkuserpublishup.
                        *@param int $fkuserpublishup    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkuserpublishup($fkuserpublishup) 
                        {      
                            $this->fkuserpublishup = (int) $fkuserpublishup;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_publishup;
             
                        /**
                        * Get dt_publishup.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_publishup()
                    {
                        return $this->dt_publishup;
                    }  /**
                        * Set dt_publishup.
                        *@param string $dt_publishup    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setDt_publishup($dt_publishup) 
                        {      
                            $this->dt_publishup = (string) $dt_publishup;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserpublishdown;
             
                        /**
                        * Get fkuserpublishdown.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserpublishdown()
                    {
                        return $this->fkuserpublishdown;
                    }  /**
                        * Set fkuserpublishdown.
                        *@param int $fkuserpublishdown    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkuserpublishdown($fkuserpublishdown) 
                        {      
                            $this->fkuserpublishdown = (int) $fkuserpublishdown;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_publishdown;
             
                        /**
                        * Get dt_publishdown.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_publishdown()
                    {
                        return $this->dt_publishdown;
                    }  /**
                        * Set dt_publishdown.
                        *@param string $dt_publishdown    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setDt_publishdown($dt_publishdown) 
                        {      
                            $this->dt_publishdown = (string) $dt_publishdown;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkparentlng($fkparentlng) 
                        {      
                            $this->fkparentlng = (int) $fkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkbelong;
             
                        /**
                        * Get fkbelong.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkbelong()
                    {
                        return $this->fkbelong;
                    }  /**
                        * Set fkbelong.
                        *@param int $fkbelong    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkbelong($fkbelong) 
                        {      
                            $this->fkbelong = (int) $fkbelong;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $updatestatus;
             
                        /**
                        * Get updatestatus.
                        * 
                             /**
                                * @return int
                            */  
                    public function getUpdatestatus()
                    {
                        return $this->updatestatus;
                    }  /**
                        * Set updatestatus.
                        *@param int $updatestatus    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setUpdatestatus($updatestatus) 
                        {      
                            $this->updatestatus = (int) $updatestatus;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserupdatestatus;
             
                        /**
                        * Get fkuserupdatestatus.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserupdatestatus()
                    {
                        return $this->fkuserupdatestatus;
                    }  /**
                        * Set fkuserupdatestatus.
                        *@param int $fkuserupdatestatus    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkuserupdatestatus($fkuserupdatestatus) 
                        {      
                            $this->fkuserupdatestatus = (int) $fkuserupdatestatus;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserdisabled;
             
                        /**
                        * Get fkuserdisabled.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserdisabled()
                    {
                        return $this->fkuserdisabled;
                    }  /**
                        * Set fkuserdisabled.
                        *@param int $fkuserdisabled    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkuserdisabled($fkuserdisabled) 
                        {      
                            $this->fkuserdisabled = (int) $fkuserdisabled;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_disabled;
             
                        /**
                        * Get dt_disabled.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_disabled()
                    {
                        return $this->dt_disabled;
                    }  /**
                        * Set dt_disabled.
                        *@param string $dt_disabled    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setDt_disabled($dt_disabled) 
                        {      
                            $this->dt_disabled = (string) $dt_disabled;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserdeleted;
             
                        /**
                        * Get fkuserdeleted.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserdeleted()
                    {
                        return $this->fkuserdeleted;
                    }  /**
                        * Set fkuserdeleted.
                        *@param int $fkuserdeleted    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkuserdeleted($fkuserdeleted) 
                        {      
                            $this->fkuserdeleted = (int) $fkuserdeleted;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_deleted;
             
                        /**
                        * Get dt_deleted.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_deleted()
                    {
                        return $this->dt_deleted;
                    }  /**
                        * Set dt_deleted.
                        *@param string $dt_deleted    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setDt_deleted($dt_deleted) 
                        {      
                            $this->dt_deleted = (string) $dt_deleted;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setRemarks($remarks) 
                        {      
                            $this->remarks = (string) $remarks;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $title;
             
                        /**
                        * Get title.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTitle()
                    {
                        return $this->title;
                    }  /**
                        * Set title.
                        *@param string $title    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setTitle($title) 
                        {      
                            $this->title = (string) $title;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $shorttitle;
             
                        /**
                        * Get shorttitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getShorttitle()
                    {
                        return $this->shorttitle;
                    }  /**
                        * Set shorttitle.
                        *@param string $shorttitle    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setShorttitle($shorttitle) 
                        {      
                            $this->shorttitle = (string) $shorttitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $jobremarks;
             
                        /**
                        * Get jobremarks.
                        * 
                             /**
                                * @return string
                            */  
                    public function getJobremarks()
                    {
                        return $this->jobremarks;
                    }  /**
                        * Set jobremarks.
                        *@param string $jobremarks    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setJobremarks($jobremarks) 
                        {      
                            $this->jobremarks = (string) $jobremarks;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomer;
             
                        /**
                        * Get fkcustomer.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomer()
                    {
                        return $this->fkcustomer;
                    }  /**
                        * Set fkcustomer.
                        *@param int $fkcustomer    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkcustomer($fkcustomer) 
                        {      
                            $this->fkcustomer = (int) $fkcustomer;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $addressname;
             
                        /**
                        * Get addressname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAddressname()
                    {
                        return $this->addressname;
                    }  /**
                        * Set addressname.
                        *@param string $addressname    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setAddressname($addressname) 
                        {      
                            $this->addressname = (string) $addressname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkregion;
             
                        /**
                        * Get fkregion.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkregion()
                    {
                        return $this->fkregion;
                    }  /**
                        * Set fkregion.
                        *@param int $fkregion    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkregion($fkregion) 
                        {      
                            $this->fkregion = (int) $fkregion;
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
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkaddresstype($fkaddresstype) 
                        {      
                            $this->fkaddresstype = (int) $fkaddresstype;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcountry;
             
                        /**
                        * Get fkcountry.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcountry()
                    {
                        return $this->fkcountry;
                    }  /**
                        * Set fkcountry.
                        *@param int $fkcountry    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkcountry($fkcountry) 
                        {      
                            $this->fkcountry = (int) $fkcountry;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkprefecture;
             
                        /**
                        * Get fkprefecture.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkprefecture()
                    {
                        return $this->fkprefecture;
                    }  /**
                        * Set fkprefecture.
                        *@param int $fkprefecture    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkprefecture($fkprefecture) 
                        {      
                            $this->fkprefecture = (int) $fkprefecture;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktown;
             
                        /**
                        * Get fktown.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktown()
                    {
                        return $this->fktown;
                    }  /**
                        * Set fktown.
                        *@param int $fktown    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFktown($fktown) 
                        {      
                            $this->fktown = (int) $fktown;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkpoc;
             
                        /**
                        * Get fkpoc.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkpoc()
                    {
                        return $this->fkpoc;
                    }  /**
                        * Set fkpoc.
                        *@param int $fkpoc    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setFkpoc($fkpoc) 
                        {      
                            $this->fkpoc = (int) $fkpoc;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $countryname;
             
                        /**
                        * Get countryname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCountryname()
                    {
                        return $this->countryname;
                    }  /**
                        * Set countryname.
                        *@param string $countryname    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setCountryname($countryname) 
                        {      
                            $this->countryname = (string) $countryname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $prefecturename;
             
                        /**
                        * Get prefecturename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPrefecturename()
                    {
                        return $this->prefecturename;
                    }  /**
                        * Set prefecturename.
                        *@param string $prefecturename    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setPrefecturename($prefecturename) 
                        {      
                            $this->prefecturename = (string) $prefecturename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $townname;
             
                        /**
                        * Get townname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTownname()
                    {
                        return $this->townname;
                    }  /**
                        * Set townname.
                        *@param string $townname    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setTownname($townname) 
                        {      
                            $this->townname = (string) $townname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $regionaddressorvillage;
             
                        /**
                        * Get regionaddressorvillage.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRegionaddressorvillage()
                    {
                        return $this->regionaddressorvillage;
                    }  /**
                        * Set regionaddressorvillage.
                        *@param string $regionaddressorvillage    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setRegionaddressorvillage($regionaddressorvillage) 
                        {      
                            $this->regionaddressorvillage = (string) $regionaddressorvillage;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $regionstreetnum;
             
                        /**
                        * Get regionstreetnum.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRegionstreetnum()
                    {
                        return $this->regionstreetnum;
                    }  /**
                        * Set regionstreetnum.
                        *@param string $regionstreetnum    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setRegionstreetnum($regionstreetnum) 
                        {      
                            $this->regionstreetnum = (string) $regionstreetnum;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pocname;
             
                        /**
                        * Get pocname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPocname()
                    {
                        return $this->pocname;
                    }  /**
                        * Set pocname.
                        *@param string $pocname    
                        *@return B2bB2badminschemaCorecrmcustomeraddressInterface*/
                         public function setPocname($pocname) 
                        {      
                            $this->pocname = (string) $pocname;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "core_crm_customer_address";

}
        

             