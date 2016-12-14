<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaCorecrmcustomer extends \B2b\Models\BaseModel implements B2bB2badminschemaCorecrmcustomerInterface {
    

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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setJobremarks($jobremarks) 
                        {      
                            $this->jobremarks = (string) $jobremarks;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkgender;
             
                        /**
                        * Get fkgender.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkgender()
                    {
                        return $this->fkgender;
                    }  /**
                        * Set fkgender.
                        *@param int $fkgender    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setFkgender($fkgender) 
                        {      
                            $this->fkgender = (int) $fkgender;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fksalutation;
             
                        /**
                        * Get fksalutation.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFksalutation()
                    {
                        return $this->fksalutation;
                    }  /**
                        * Set fksalutation.
                        *@param int $fksalutation    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setFksalutation($fksalutation) 
                        {      
                            $this->fksalutation = (int) $fksalutation;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fname;
             
                        /**
                        * Get fname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFname()
                    {
                        return $this->fname;
                    }  /**
                        * Set fname.
                        *@param string $fname    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setFname($fname) 
                        {      
                            $this->fname = (string) $fname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $lname;
             
                        /**
                        * Get lname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getLname()
                    {
                        return $this->lname;
                    }  /**
                        * Set lname.
                        *@param string $lname    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setLname($lname) 
                        {      
                            $this->lname = (string) $lname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $telmobile;
             
                        /**
                        * Get telmobile.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTelmobile()
                    {
                        return $this->telmobile;
                    }  /**
                        * Set telmobile.
                        *@param string $telmobile    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setTelmobile($telmobile) 
                        {      
                            $this->telmobile = (string) $telmobile;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $telland;
             
                        /**
                        * Get telland.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTelland()
                    {
                        return $this->telland;
                    }  /**
                        * Set telland.
                        *@param string $telland    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setTelland($telland) 
                        {      
                            $this->telland = (string) $telland;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $birthday;
             
                        /**
                        * Get birthday.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBirthday()
                    {
                        return $this->birthday;
                    }  /**
                        * Set birthday.
                        *@param string $birthday    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setBirthday($birthday) 
                        {      
                            $this->birthday = (string) $birthday;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $email;
             
                        /**
                        * Get email.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEmail()
                    {
                        return $this->email;
                    }  /**
                        * Set email.
                        *@param string $email    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setEmail($email) 
                        {      
                            $this->email = (string) $email;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $photourl;
             
                        /**
                        * Get photourl.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPhotourl()
                    {
                        return $this->photourl;
                    }  /**
                        * Set photourl.
                        *@param string $photourl    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setPhotourl($photourl) 
                        {      
                            $this->photourl = (string) $photourl;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $doy;
             
                        /**
                        * Get doy.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDoy()
                    {
                        return $this->doy;
                    }  /**
                        * Set doy.
                        *@param string $doy    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setDoy($doy) 
                        {      
                            $this->doy = (string) $doy;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $afm;
             
                        /**
                        * Get afm.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAfm()
                    {
                        return $this->afm;
                    }  /**
                        * Set afm.
                        *@param string $afm    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setAfm($afm) 
                        {      
                            $this->afm = (string) $afm;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $profession;
             
                        /**
                        * Get profession.
                        * 
                             /**
                                * @return string
                            */  
                    public function getProfession()
                    {
                        return $this->profession;
                    }  /**
                        * Set profession.
                        *@param string $profession    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setProfession($profession) 
                        {      
                            $this->profession = (string) $profession;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $code;
             
                        /**
                        * Get code.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCode()
                    {
                        return $this->code;
                    }  /**
                        * Set code.
                        *@param string $code    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setCode($code) 
                        {      
                            $this->code = (string) $code;
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setAddressname1($addressname1) 
                        {      
                            $this->addressname1 = (string) $addressname1;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $regionname1;
             
                        /**
                        * Get regionname1.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRegionname1()
                    {
                        return $this->regionname1;
                    }  /**
                        * Set regionname1.
                        *@param string $regionname1    
                        *@return B2bB2badminschemaCorecrmcustomerInterface*/
                         public function setRegionname1($regionname1) 
                        {      
                            $this->regionname1 = (string) $regionname1;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "core_crm_customer";

}
        

             