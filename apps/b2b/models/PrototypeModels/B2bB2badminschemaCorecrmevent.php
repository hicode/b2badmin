<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaCorecrmevent extends \B2b\Models\BaseModel implements B2bB2badminschemaCorecrmeventInterface {
    

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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
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
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setJobremarks($jobremarks) 
                        {      
                            $this->jobremarks = (string) $jobremarks;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkplugincalendarresource;
             
                        /**
                        * Get fkplugincalendarresource.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkplugincalendarresource()
                    {
                        return $this->fkplugincalendarresource;
                    }  /**
                        * Set fkplugincalendarresource.
                        *@param int $fkplugincalendarresource    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setFkplugincalendarresource($fkplugincalendarresource) 
                        {      
                            $this->fkplugincalendarresource = (int) $fkplugincalendarresource;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $blallday;
             
                        /**
                        * Get blallday.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBlallday()
                    {
                        return $this->blallday;
                    }  /**
                        * Set blallday.
                        *@param int $blallday    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setBlallday($blallday) 
                        {      
                            $this->blallday = (int) $blallday;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dtstart;
             
                        /**
                        * Get dtstart.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDtstart()
                    {
                        return $this->dtstart;
                    }  /**
                        * Set dtstart.
                        *@param string $dtstart    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setDtstart($dtstart) 
                        {      
                            $this->dtstart = (string) $dtstart;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dtend;
             
                        /**
                        * Get dtend.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDtend()
                    {
                        return $this->dtend;
                    }  /**
                        * Set dtend.
                        *@param string $dtend    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setDtend($dtend) 
                        {      
                            $this->dtend = (string) $dtend;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkstatus;
             
                        /**
                        * Get fkstatus.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkstatus()
                    {
                        return $this->fkstatus;
                    }  /**
                        * Set fkstatus.
                        *@param int $fkstatus    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setFkstatus($fkstatus) 
                        {      
                            $this->fkstatus = (int) $fkstatus;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktype;
             
                        /**
                        * Get fktype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktype()
                    {
                        return $this->fktype;
                    }  /**
                        * Set fktype.
                        *@param int $fktype    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setFktype($fktype) 
                        {      
                            $this->fktype = (int) $fktype;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcategory;
             
                        /**
                        * Get fkcategory.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcategory()
                    {
                        return $this->fkcategory;
                    }  /**
                        * Set fkcategory.
                        *@param int $fkcategory    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setFkcategory($fkcategory) 
                        {      
                            $this->fkcategory = (int) $fkcategory;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkrepeat;
             
                        /**
                        * Get fkrepeat.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkrepeat()
                    {
                        return $this->fkrepeat;
                    }  /**
                        * Set fkrepeat.
                        *@param int $fkrepeat    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setFkrepeat($fkrepeat) 
                        {      
                            $this->fkrepeat = (int) $fkrepeat;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $url;
             
                        /**
                        * Get url.
                        * 
                             /**
                                * @return string
                            */  
                    public function getUrl()
                    {
                        return $this->url;
                    }  /**
                        * Set url.
                        *@param string $url    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setUrl($url) 
                        {      
                            $this->url = (string) $url;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bleditable;
             
                        /**
                        * Get bleditable.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBleditable()
                    {
                        return $this->bleditable;
                    }  /**
                        * Set bleditable.
                        *@param int $bleditable    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setBleditable($bleditable) 
                        {      
                            $this->bleditable = (int) $bleditable;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bloverlap;
             
                        /**
                        * Get bloverlap.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBloverlap()
                    {
                        return $this->bloverlap;
                    }  /**
                        * Set bloverlap.
                        *@param int $bloverlap    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setBloverlap($bloverlap) 
                        {      
                            $this->bloverlap = (int) $bloverlap;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $color;
             
                        /**
                        * Get color.
                        * 
                             /**
                                * @return string
                            */  
                    public function getColor()
                    {
                        return $this->color;
                    }  /**
                        * Set color.
                        *@param string $color    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setColor($color) 
                        {      
                            $this->color = (string) $color;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $backgroundcolor;
             
                        /**
                        * Get backgroundcolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBackgroundcolor()
                    {
                        return $this->backgroundcolor;
                    }  /**
                        * Set backgroundcolor.
                        *@param string $backgroundcolor    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setBackgroundcolor($backgroundcolor) 
                        {      
                            $this->backgroundcolor = (string) $backgroundcolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bordercolor;
             
                        /**
                        * Get bordercolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBordercolor()
                    {
                        return $this->bordercolor;
                    }  /**
                        * Set bordercolor.
                        *@param string $bordercolor    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setBordercolor($bordercolor) 
                        {      
                            $this->bordercolor = (string) $bordercolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $textcolor;
             
                        /**
                        * Get textcolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTextcolor()
                    {
                        return $this->textcolor;
                    }  /**
                        * Set textcolor.
                        *@param string $textcolor    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setTextcolor($textcolor) 
                        {      
                            $this->textcolor = (string) $textcolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $timestart;
             
                        /**
                        * Get timestart.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTimestart()
                    {
                        return $this->timestart;
                    }  /**
                        * Set timestart.
                        *@param string $timestart    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setTimestart($timestart) 
                        {      
                            $this->timestart = (string) $timestart;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $timeend;
             
                        /**
                        * Get timeend.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTimeend()
                    {
                        return $this->timeend;
                    }  /**
                        * Set timeend.
                        *@param string $timeend    
                        *@return B2bB2badminschemaCorecrmeventInterface*/
                         public function setTimeend($timeend) 
                        {      
                            $this->timeend = (string) $timeend;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "core_crm_event";

}
        

             