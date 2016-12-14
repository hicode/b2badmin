<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmtrainer extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmtrainerInterface {
    

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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setTagstext($tagstext) 
                        {      
                            $this->tagstext = (string) $tagstext;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setLname($lname) 
                        {      
                            $this->lname = (string) $lname;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFname($fname) 
                        {      
                            $this->fname = (string) $fname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $trainerfull;
             
                        /**
                        * Get trainerfull.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTrainerfull()
                    {
                        return $this->trainerfull;
                    }  /**
                        * Set trainerfull.
                        *@param string $trainerfull    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setTrainerfull($trainerfull) 
                        {      
                            $this->trainerfull = (string) $trainerfull;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktrainerfkusercreated;
             
                        /**
                        * Get fktrainerfkusercreated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktrainerfkusercreated()
                    {
                        return $this->fktrainerfkusercreated;
                    }  /**
                        * Set fktrainerfkusercreated.
                        *@param int $fktrainerfkusercreated    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFktrainerfkusercreated($fktrainerfkusercreated) 
                        {      
                            $this->fktrainerfkusercreated = (int) $fktrainerfkusercreated;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fktrainerdt_created;
             
                        /**
                        * Get fktrainerdt_created.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFktrainerdt_created()
                    {
                        return $this->fktrainerdt_created;
                    }  /**
                        * Set fktrainerdt_created.
                        *@param string $fktrainerdt_created    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFktrainerdt_created($fktrainerdt_created) 
                        {      
                            $this->fktrainerdt_created = (string) $fktrainerdt_created;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktrainerfkuserlastupdated;
             
                        /**
                        * Get fktrainerfkuserlastupdated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktrainerfkuserlastupdated()
                    {
                        return $this->fktrainerfkuserlastupdated;
                    }  /**
                        * Set fktrainerfkuserlastupdated.
                        *@param int $fktrainerfkuserlastupdated    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFktrainerfkuserlastupdated($fktrainerfkuserlastupdated) 
                        {      
                            $this->fktrainerfkuserlastupdated = (int) $fktrainerfkuserlastupdated;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fktrainerdt_updated;
             
                        /**
                        * Get fktrainerdt_updated.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFktrainerdt_updated()
                    {
                        return $this->fktrainerdt_updated;
                    }  /**
                        * Set fktrainerdt_updated.
                        *@param string $fktrainerdt_updated    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFktrainerdt_updated($fktrainerdt_updated) 
                        {      
                            $this->fktrainerdt_updated = (string) $fktrainerdt_updated;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $trainerupdatestatus;
             
                        /**
                        * Get trainerupdatestatus.
                        * 
                             /**
                                * @return int
                            */  
                    public function getTrainerupdatestatus()
                    {
                        return $this->trainerupdatestatus;
                    }  /**
                        * Set trainerupdatestatus.
                        *@param int $trainerupdatestatus    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setTrainerupdatestatus($trainerupdatestatus) 
                        {      
                            $this->trainerupdatestatus = (int) $trainerupdatestatus;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setEmail($email) 
                        {      
                            $this->email = (string) $email;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fktrainerfkparentlng;
             
                        /**
                        * Get fktrainerfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFktrainerfkparentlng()
                    {
                        return $this->fktrainerfkparentlng;
                    }  /**
                        * Set fktrainerfkparentlng.
                        *@param int $fktrainerfkparentlng    
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setFktrainerfkparentlng($fktrainerfkparentlng) 
                        {      
                            $this->fktrainerfkparentlng = (int) $fktrainerfkparentlng;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
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
                        *@return B2bB2badminschemaVfcrmtrainerInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_trainer";

}
        

             