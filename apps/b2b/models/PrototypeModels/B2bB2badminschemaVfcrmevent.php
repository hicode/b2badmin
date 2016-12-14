<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmevent extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmeventInterface {
    

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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkevent;
             
                        /**
                        * Get fkevent.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkevent()
                    {
                        return $this->fkevent;
                    }  /**
                        * Set fkevent.
                        *@param int $fkevent    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setFkevent($fkevent) 
                        {      
                            $this->fkevent = (int) $fkevent;
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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setFkplugincalendarresource($fkplugincalendarresource) 
                        {      
                            $this->fkplugincalendarresource = (int) $fkplugincalendarresource;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkplugincalendar;
             
                        /**
                        * Get fkplugincalendar.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkplugincalendar()
                    {
                        return $this->fkplugincalendar;
                    }  /**
                        * Set fkplugincalendar.
                        *@param int $fkplugincalendar    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setFkplugincalendar($fkplugincalendar) 
                        {      
                            $this->fkplugincalendar = (int) $fkplugincalendar;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkresource;
             
                        /**
                        * Get fkresource.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkresource()
                    {
                        return $this->fkresource;
                    }  /**
                        * Set fkresource.
                        *@param int $fkresource    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setFkresource($fkresource) 
                        {      
                            $this->fkresource = (int) $fkresource;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $restitle;
             
                        /**
                        * Get restitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRestitle()
                    {
                        return $this->restitle;
                    }  /**
                        * Set restitle.
                        *@param string $restitle    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setRestitle($restitle) 
                        {      
                            $this->restitle = (string) $restitle;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $resblenabled;
             
                        /**
                        * Get resblenabled.
                        * 
                             /**
                                * @return int
                            */  
                    public function getResblenabled()
                    {
                        return $this->resblenabled;
                    }  /**
                        * Set resblenabled.
                        *@param int $resblenabled    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setResblenabled($resblenabled) 
                        {      
                            $this->resblenabled = (int) $resblenabled;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $ordering;
             
                        /**
                        * Get ordering.
                        * 
                             /**
                                * @return int
                            */  
                    public function getOrdering()
                    {
                        return $this->ordering;
                    }  /**
                        * Set ordering.
                        *@param int $ordering    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setOrdering($ordering) 
                        {      
                            $this->ordering = (int) $ordering;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $resgeneralcolour;
             
                        /**
                        * Get resgeneralcolour.
                        * 
                             /**
                                * @return string
                            */  
                    public function getResgeneralcolour()
                    {
                        return $this->resgeneralcolour;
                    }  /**
                        * Set resgeneralcolour.
                        *@param string $resgeneralcolour    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setResgeneralcolour($resgeneralcolour) 
                        {      
                            $this->resgeneralcolour = (string) $resgeneralcolour;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $restextcolour;
             
                        /**
                        * Get restextcolour.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRestextcolour()
                    {
                        return $this->restextcolour;
                    }  /**
                        * Set restextcolour.
                        *@param string $restextcolour    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setRestextcolour($restextcolour) 
                        {      
                            $this->restextcolour = (string) $restextcolour;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $evblallday;
             
                        /**
                        * Get evblallday.
                        * 
                             /**
                                * @return int
                            */  
                    public function getEvblallday()
                    {
                        return $this->evblallday;
                    }  /**
                        * Set evblallday.
                        *@param int $evblallday    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvblallday($evblallday) 
                        {      
                            $this->evblallday = (int) $evblallday;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evdtstart;
             
                        /**
                        * Get evdtstart.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvdtstart()
                    {
                        return $this->evdtstart;
                    }  /**
                        * Set evdtstart.
                        *@param string $evdtstart    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvdtstart($evdtstart) 
                        {      
                            $this->evdtstart = (string) $evdtstart;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evdtend;
             
                        /**
                        * Get evdtend.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvdtend()
                    {
                        return $this->evdtend;
                    }  /**
                        * Set evdtend.
                        *@param string $evdtend    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvdtend($evdtend) 
                        {      
                            $this->evdtend = (string) $evdtend;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evurl;
             
                        /**
                        * Get evurl.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvurl()
                    {
                        return $this->evurl;
                    }  /**
                        * Set evurl.
                        *@param string $evurl    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvurl($evurl) 
                        {      
                            $this->evurl = (string) $evurl;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $evbleditable;
             
                        /**
                        * Get evbleditable.
                        * 
                             /**
                                * @return int
                            */  
                    public function getEvbleditable()
                    {
                        return $this->evbleditable;
                    }  /**
                        * Set evbleditable.
                        *@param int $evbleditable    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvbleditable($evbleditable) 
                        {      
                            $this->evbleditable = (int) $evbleditable;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $evbloverlap;
             
                        /**
                        * Get evbloverlap.
                        * 
                             /**
                                * @return int
                            */  
                    public function getEvbloverlap()
                    {
                        return $this->evbloverlap;
                    }  /**
                        * Set evbloverlap.
                        *@param int $evbloverlap    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvbloverlap($evbloverlap) 
                        {      
                            $this->evbloverlap = (int) $evbloverlap;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evcolor;
             
                        /**
                        * Get evcolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvcolor()
                    {
                        return $this->evcolor;
                    }  /**
                        * Set evcolor.
                        *@param string $evcolor    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvcolor($evcolor) 
                        {      
                            $this->evcolor = (string) $evcolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evbackgroundcolor;
             
                        /**
                        * Get evbackgroundcolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvbackgroundcolor()
                    {
                        return $this->evbackgroundcolor;
                    }  /**
                        * Set evbackgroundcolor.
                        *@param string $evbackgroundcolor    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvbackgroundcolor($evbackgroundcolor) 
                        {      
                            $this->evbackgroundcolor = (string) $evbackgroundcolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evbordercolor;
             
                        /**
                        * Get evbordercolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvbordercolor()
                    {
                        return $this->evbordercolor;
                    }  /**
                        * Set evbordercolor.
                        *@param string $evbordercolor    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvbordercolor($evbordercolor) 
                        {      
                            $this->evbordercolor = (string) $evbordercolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evtextcolor;
             
                        /**
                        * Get evtextcolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvtextcolor()
                    {
                        return $this->evtextcolor;
                    }  /**
                        * Set evtextcolor.
                        *@param string $evtextcolor    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvtextcolor($evtextcolor) 
                        {      
                            $this->evtextcolor = (string) $evtextcolor;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $evtitle;
             
                        /**
                        * Get evtitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getEvtitle()
                    {
                        return $this->evtitle;
                    }  /**
                        * Set evtitle.
                        *@param string $evtitle    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setEvtitle($evtitle) 
                        {      
                            $this->evtitle = (string) $evtitle;
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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
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
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setFkstatus($fkstatus) 
                        {      
                            $this->fkstatus = (int) $fkstatus;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $corcrmeventstatustitle;
             
                        /**
                        * Get corcrmeventstatustitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCorcrmeventstatustitle()
                    {
                        return $this->corcrmeventstatustitle;
                    }  /**
                        * Set corcrmeventstatustitle.
                        *@param string $corcrmeventstatustitle    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setCorcrmeventstatustitle($corcrmeventstatustitle) 
                        {      
                            $this->corcrmeventstatustitle = (string) $corcrmeventstatustitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $corecrmeventstatustitle;
             
                        /**
                        * Get corecrmeventstatustitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCorecrmeventstatustitle()
                    {
                        return $this->corecrmeventstatustitle;
                    }  /**
                        * Set corecrmeventstatustitle.
                        *@param string $corecrmeventstatustitle    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setCorecrmeventstatustitle($corecrmeventstatustitle) 
                        {      
                            $this->corecrmeventstatustitle = (string) $corecrmeventstatustitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $corecrmeventstatuscolor;
             
                        /**
                        * Get corecrmeventstatuscolor.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCorecrmeventstatuscolor()
                    {
                        return $this->corecrmeventstatuscolor;
                    }  /**
                        * Set corecrmeventstatuscolor.
                        *@param string $corecrmeventstatuscolor    
                        *@return B2bB2badminschemaVfcrmeventInterface*/
                         public function setCorecrmeventstatuscolor($corecrmeventstatuscolor) 
                        {      
                            $this->corecrmeventstatuscolor = (string) $corecrmeventstatuscolor;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_event";

}
        

             