<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaCorecrmcustomercontractpayment extends \B2b\Models\BaseModel implements B2bB2badminschemaCorecrmcustomercontractpaymentInterface {
    

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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setJobremarks($jobremarks) 
                        {      
                            $this->jobremarks = (string) $jobremarks;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcustomercontract;
             
                        /**
                        * Get fkcustomercontract.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcustomercontract()
                    {
                        return $this->fkcustomercontract;
                    }  /**
                        * Set fkcustomercontract.
                        *@param int $fkcustomercontract    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setFkcustomercontract($fkcustomercontract) 
                        {      
                            $this->fkcustomercontract = (int) $fkcustomercontract;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkpaymenttype;
             
                        /**
                        * Get fkpaymenttype.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkpaymenttype()
                    {
                        return $this->fkpaymenttype;
                    }  /**
                        * Set fkpaymenttype.
                        *@param int $fkpaymenttype    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setFkpaymenttype($fkpaymenttype) 
                        {      
                            $this->fkpaymenttype = (int) $fkpaymenttype;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkpaymentreason;
             
                        /**
                        * Get fkpaymentreason.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkpaymentreason()
                    {
                        return $this->fkpaymentreason;
                    }  /**
                        * Set fkpaymentreason.
                        *@param int $fkpaymentreason    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setFkpaymentreason($fkpaymentreason) 
                        {      
                            $this->fkpaymentreason = (int) $fkpaymentreason;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $theordtpayment;
             
                        /**
                        * Get theordtpayment.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTheordtpayment()
                    {
                        return $this->theordtpayment;
                    }  /**
                        * Set theordtpayment.
                        *@param string $theordtpayment    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setTheordtpayment($theordtpayment) 
                        {      
                            $this->theordtpayment = (string) $theordtpayment;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $theorpayment;
             
                        /**
                        * Get theorpayment.
                        * 
                             /**
                                * @return float
                            */  
                    public function getTheorpayment()
                    {
                        return $this->theorpayment;
                    }  /**
                        * Set theorpayment.
                        *@param float $theorpayment    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setTheorpayment($theorpayment) 
                        {      
                            $this->theorpayment = (float) $theorpayment;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $actualdtpayment;
             
                        /**
                        * Get actualdtpayment.
                        * 
                             /**
                                * @return string
                            */  
                    public function getActualdtpayment()
                    {
                        return $this->actualdtpayment;
                    }  /**
                        * Set actualdtpayment.
                        *@param string $actualdtpayment    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setActualdtpayment($actualdtpayment) 
                        {      
                            $this->actualdtpayment = (string) $actualdtpayment;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $actualpaymenttotal;
             
                        /**
                        * Get actualpaymenttotal.
                        * 
                             /**
                                * @return float
                            */  
                    public function getActualpaymenttotal()
                    {
                        return $this->actualpaymenttotal;
                    }  /**
                        * Set actualpaymenttotal.
                        *@param float $actualpaymenttotal    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setActualpaymenttotal($actualpaymenttotal) 
                        {      
                            $this->actualpaymenttotal = (float) $actualpaymenttotal;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $actualpaymentwithouttaxis;
             
                        /**
                        * Get actualpaymentwithouttaxis.
                        * 
                             /**
                                * @return float
                            */  
                    public function getActualpaymentwithouttaxis()
                    {
                        return $this->actualpaymentwithouttaxis;
                    }  /**
                        * Set actualpaymentwithouttaxis.
                        *@param float $actualpaymentwithouttaxis    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setActualpaymentwithouttaxis($actualpaymentwithouttaxis) 
                        {      
                            $this->actualpaymentwithouttaxis = (float) $actualpaymentwithouttaxis;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $actualpaymenttaxis;
             
                        /**
                        * Get actualpaymenttaxis.
                        * 
                             /**
                                * @return float
                            */  
                    public function getActualpaymenttaxis()
                    {
                        return $this->actualpaymenttaxis;
                    }  /**
                        * Set actualpaymenttaxis.
                        *@param float $actualpaymenttaxis    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setActualpaymenttaxis($actualpaymenttaxis) 
                        {      
                            $this->actualpaymenttaxis = (float) $actualpaymenttaxis;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabletaxes;
             
                        /**
                        * Get fkavailabletaxes.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabletaxes()
                    {
                        return $this->fkavailabletaxes;
                    }  /**
                        * Set fkavailabletaxes.
                        *@param int $fkavailabletaxes    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setFkavailabletaxes($fkavailabletaxes) 
                        {      
                            $this->fkavailabletaxes = (int) $fkavailabletaxes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $blppdlbw;
             
                        /**
                        * Get blppdlbw.
                        * 
                             /**
                                * @return float
                            */  
                    public function getBlppdlbw()
                    {
                        return $this->blppdlbw;
                    }  /**
                        * Set blppdlbw.
                        *@param float $blppdlbw    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setBlppdlbw($blppdlbw) 
                        {      
                            $this->blppdlbw = (float) $blppdlbw;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $blisissued;
             
                        /**
                        * Get blisissued.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBlisissued()
                    {
                        return $this->blisissued;
                    }  /**
                        * Set blisissued.
                        *@param int $blisissued    
                        *@return B2bB2badminschemaCorecrmcustomercontractpaymentInterface*/
                         public function setBlisissued($blisissued) 
                        {      
                            $this->blisissued = (int) $blisissued;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "core_crm_customer_contract_payment";

}
        

             