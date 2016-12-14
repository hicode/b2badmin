<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaCorecrmcustomerhealth extends \B2b\Models\BaseModel implements B2bB2badminschemaCorecrmcustomerhealthInterface {
    

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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
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
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setFkcustomer($fkcustomer) 
                        {      
                            $this->fkcustomer = (int) $fkcustomer;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl01;
             
                        /**
                        * Get bl01.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl01()
                    {
                        return $this->bl01;
                    }  /**
                        * Set bl01.
                        *@param int $bl01    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl01($bl01) 
                        {      
                            $this->bl01 = (int) $bl01;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl02;
             
                        /**
                        * Get bl02.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl02()
                    {
                        return $this->bl02;
                    }  /**
                        * Set bl02.
                        *@param int $bl02    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl02($bl02) 
                        {      
                            $this->bl02 = (int) $bl02;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl03;
             
                        /**
                        * Get bl03.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl03()
                    {
                        return $this->bl03;
                    }  /**
                        * Set bl03.
                        *@param int $bl03    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl03($bl03) 
                        {      
                            $this->bl03 = (int) $bl03;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl04;
             
                        /**
                        * Get bl04.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl04()
                    {
                        return $this->bl04;
                    }  /**
                        * Set bl04.
                        *@param int $bl04    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl04($bl04) 
                        {      
                            $this->bl04 = (int) $bl04;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl05;
             
                        /**
                        * Get bl05.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl05()
                    {
                        return $this->bl05;
                    }  /**
                        * Set bl05.
                        *@param int $bl05    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl05($bl05) 
                        {      
                            $this->bl05 = (int) $bl05;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl06;
             
                        /**
                        * Get bl06.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl06()
                    {
                        return $this->bl06;
                    }  /**
                        * Set bl06.
                        *@param int $bl06    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl06($bl06) 
                        {      
                            $this->bl06 = (int) $bl06;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl07;
             
                        /**
                        * Get bl07.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl07()
                    {
                        return $this->bl07;
                    }  /**
                        * Set bl07.
                        *@param int $bl07    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl07($bl07) 
                        {      
                            $this->bl07 = (int) $bl07;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl08;
             
                        /**
                        * Get bl08.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl08()
                    {
                        return $this->bl08;
                    }  /**
                        * Set bl08.
                        *@param int $bl08    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl08($bl08) 
                        {      
                            $this->bl08 = (int) $bl08;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl09;
             
                        /**
                        * Get bl09.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl09()
                    {
                        return $this->bl09;
                    }  /**
                        * Set bl09.
                        *@param int $bl09    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl09($bl09) 
                        {      
                            $this->bl09 = (int) $bl09;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl10;
             
                        /**
                        * Get bl10.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl10()
                    {
                        return $this->bl10;
                    }  /**
                        * Set bl10.
                        *@param int $bl10    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl10($bl10) 
                        {      
                            $this->bl10 = (int) $bl10;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl11;
             
                        /**
                        * Get bl11.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl11()
                    {
                        return $this->bl11;
                    }  /**
                        * Set bl11.
                        *@param int $bl11    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl11($bl11) 
                        {      
                            $this->bl11 = (int) $bl11;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl12;
             
                        /**
                        * Get bl12.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl12()
                    {
                        return $this->bl12;
                    }  /**
                        * Set bl12.
                        *@param int $bl12    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl12($bl12) 
                        {      
                            $this->bl12 = (int) $bl12;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl13;
             
                        /**
                        * Get bl13.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl13()
                    {
                        return $this->bl13;
                    }  /**
                        * Set bl13.
                        *@param int $bl13    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl13($bl13) 
                        {      
                            $this->bl13 = (int) $bl13;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl14;
             
                        /**
                        * Get bl14.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl14()
                    {
                        return $this->bl14;
                    }  /**
                        * Set bl14.
                        *@param int $bl14    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl14($bl14) 
                        {      
                            $this->bl14 = (int) $bl14;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl15;
             
                        /**
                        * Get bl15.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl15()
                    {
                        return $this->bl15;
                    }  /**
                        * Set bl15.
                        *@param int $bl15    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl15($bl15) 
                        {      
                            $this->bl15 = (int) $bl15;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bl16;
             
                        /**
                        * Get bl16.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBl16()
                    {
                        return $this->bl16;
                    }  /**
                        * Set bl16.
                        *@param int $bl16    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl16($bl16) 
                        {      
                            $this->bl16 = (int) $bl16;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl01notes;
             
                        /**
                        * Get bl01notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl01notes()
                    {
                        return $this->bl01notes;
                    }  /**
                        * Set bl01notes.
                        *@param string $bl01notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl01notes($bl01notes) 
                        {      
                            $this->bl01notes = (string) $bl01notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl02notes;
             
                        /**
                        * Get bl02notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl02notes()
                    {
                        return $this->bl02notes;
                    }  /**
                        * Set bl02notes.
                        *@param string $bl02notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl02notes($bl02notes) 
                        {      
                            $this->bl02notes = (string) $bl02notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl03notes;
             
                        /**
                        * Get bl03notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl03notes()
                    {
                        return $this->bl03notes;
                    }  /**
                        * Set bl03notes.
                        *@param string $bl03notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl03notes($bl03notes) 
                        {      
                            $this->bl03notes = (string) $bl03notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl04notes;
             
                        /**
                        * Get bl04notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl04notes()
                    {
                        return $this->bl04notes;
                    }  /**
                        * Set bl04notes.
                        *@param string $bl04notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl04notes($bl04notes) 
                        {      
                            $this->bl04notes = (string) $bl04notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl05notes;
             
                        /**
                        * Get bl05notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl05notes()
                    {
                        return $this->bl05notes;
                    }  /**
                        * Set bl05notes.
                        *@param string $bl05notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl05notes($bl05notes) 
                        {      
                            $this->bl05notes = (string) $bl05notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl06notes;
             
                        /**
                        * Get bl06notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl06notes()
                    {
                        return $this->bl06notes;
                    }  /**
                        * Set bl06notes.
                        *@param string $bl06notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl06notes($bl06notes) 
                        {      
                            $this->bl06notes = (string) $bl06notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl07notes;
             
                        /**
                        * Get bl07notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl07notes()
                    {
                        return $this->bl07notes;
                    }  /**
                        * Set bl07notes.
                        *@param string $bl07notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl07notes($bl07notes) 
                        {      
                            $this->bl07notes = (string) $bl07notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl08notes;
             
                        /**
                        * Get bl08notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl08notes()
                    {
                        return $this->bl08notes;
                    }  /**
                        * Set bl08notes.
                        *@param string $bl08notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl08notes($bl08notes) 
                        {      
                            $this->bl08notes = (string) $bl08notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl09notes;
             
                        /**
                        * Get bl09notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl09notes()
                    {
                        return $this->bl09notes;
                    }  /**
                        * Set bl09notes.
                        *@param string $bl09notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl09notes($bl09notes) 
                        {      
                            $this->bl09notes = (string) $bl09notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl10notes;
             
                        /**
                        * Get bl10notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl10notes()
                    {
                        return $this->bl10notes;
                    }  /**
                        * Set bl10notes.
                        *@param string $bl10notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl10notes($bl10notes) 
                        {      
                            $this->bl10notes = (string) $bl10notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl11notes;
             
                        /**
                        * Get bl11notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl11notes()
                    {
                        return $this->bl11notes;
                    }  /**
                        * Set bl11notes.
                        *@param string $bl11notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl11notes($bl11notes) 
                        {      
                            $this->bl11notes = (string) $bl11notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl12notes;
             
                        /**
                        * Get bl12notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl12notes()
                    {
                        return $this->bl12notes;
                    }  /**
                        * Set bl12notes.
                        *@param string $bl12notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl12notes($bl12notes) 
                        {      
                            $this->bl12notes = (string) $bl12notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl13notes;
             
                        /**
                        * Get bl13notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl13notes()
                    {
                        return $this->bl13notes;
                    }  /**
                        * Set bl13notes.
                        *@param string $bl13notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl13notes($bl13notes) 
                        {      
                            $this->bl13notes = (string) $bl13notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl14notes;
             
                        /**
                        * Get bl14notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl14notes()
                    {
                        return $this->bl14notes;
                    }  /**
                        * Set bl14notes.
                        *@param string $bl14notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl14notes($bl14notes) 
                        {      
                            $this->bl14notes = (string) $bl14notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl15notes;
             
                        /**
                        * Get bl15notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl15notes()
                    {
                        return $this->bl15notes;
                    }  /**
                        * Set bl15notes.
                        *@param string $bl15notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl15notes($bl15notes) 
                        {      
                            $this->bl15notes = (string) $bl15notes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bl16notes;
             
                        /**
                        * Get bl16notes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBl16notes()
                    {
                        return $this->bl16notes;
                    }  /**
                        * Set bl16notes.
                        *@param string $bl16notes    
                        *@return B2bB2badminschemaCorecrmcustomerhealthInterface*/
                         public function setBl16notes($bl16notes) 
                        {      
                            $this->bl16notes = (string) $bl16notes;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "core_crm_customer_health";

}
        

             