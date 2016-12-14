<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmavailableserviceduration extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmavailableservicedurationInterface {
    

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
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
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
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailablepacketfkparentlng;
             
                        /**
                        * Get fkavailablepacketfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailablepacketfkparentlng()
                    {
                        return $this->fkavailablepacketfkparentlng;
                    }  /**
                        * Set fkavailablepacketfkparentlng.
                        *@param int $fkavailablepacketfkparentlng    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFkavailablepacketfkparentlng($fkavailablepacketfkparentlng) 
                        {      
                            $this->fkavailablepacketfkparentlng = (int) $fkavailablepacketfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailablepacketid;
             
                        /**
                        * Get fkavailablepacketid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailablepacketid()
                    {
                        return $this->fkavailablepacketid;
                    }  /**
                        * Set fkavailablepacketid.
                        *@param int $fkavailablepacketid    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFkavailablepacketid($fkavailablepacketid) 
                        {      
                            $this->fkavailablepacketid = (int) $fkavailablepacketid;
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
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailableserviceid;
             
                        /**
                        * Get fkavailableserviceid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailableserviceid()
                    {
                        return $this->fkavailableserviceid;
                    }  /**
                        * Set fkavailableserviceid.
                        *@param int $fkavailableserviceid    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFkavailableserviceid($fkavailableserviceid) 
                        {      
                            $this->fkavailableserviceid = (int) $fkavailableserviceid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailableservicefkparentlng;
             
                        /**
                        * Get fkavailableservicefkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailableservicefkparentlng()
                    {
                        return $this->fkavailableservicefkparentlng;
                    }  /**
                        * Set fkavailableservicefkparentlng.
                        *@param int $fkavailableservicefkparentlng    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFkavailableservicefkparentlng($fkavailableservicefkparentlng) 
                        {      
                            $this->fkavailableservicefkparentlng = (int) $fkavailableservicefkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabledurationid;
             
                        /**
                        * Get fkavailabledurationid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabledurationid()
                    {
                        return $this->fkavailabledurationid;
                    }  /**
                        * Set fkavailabledurationid.
                        *@param int $fkavailabledurationid    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFkavailabledurationid($fkavailabledurationid) 
                        {      
                            $this->fkavailabledurationid = (int) $fkavailabledurationid;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabledurationfkparentlng;
             
                        /**
                        * Get fkavailabledurationfkparentlng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabledurationfkparentlng()
                    {
                        return $this->fkavailabledurationfkparentlng;
                    }  /**
                        * Set fkavailabledurationfkparentlng.
                        *@param int $fkavailabledurationfkparentlng    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setFkavailabledurationfkparentlng($fkavailabledurationfkparentlng) 
                        {      
                            $this->fkavailabledurationfkparentlng = (int) $fkavailabledurationfkparentlng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepackettitle;
             
                        /**
                        * Get availablepackettitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepackettitle()
                    {
                        return $this->availablepackettitle;
                    }  /**
                        * Set availablepackettitle.
                        *@param string $availablepackettitle    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailablepackettitle($availablepackettitle) 
                        {      
                            $this->availablepackettitle = (string) $availablepackettitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availabledurationtitle;
             
                        /**
                        * Get availabledurationtitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailabledurationtitle()
                    {
                        return $this->availabledurationtitle;
                    }  /**
                        * Set availabledurationtitle.
                        *@param string $availabledurationtitle    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailabledurationtitle($availabledurationtitle) 
                        {      
                            $this->availabledurationtitle = (string) $availabledurationtitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availableservicetitle;
             
                        /**
                        * Get availableservicetitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailableservicetitle()
                    {
                        return $this->availableservicetitle;
                    }  /**
                        * Set availableservicetitle.
                        *@param string $availableservicetitle    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailableservicetitle($availableservicetitle) 
                        {      
                            $this->availableservicetitle = (string) $availableservicetitle;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $availabledurationtotaldays;
             
                        /**
                        * Get availabledurationtotaldays.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAvailabledurationtotaldays()
                    {
                        return $this->availabledurationtotaldays;
                    }  /**
                        * Set availabledurationtotaldays.
                        *@param float $availabledurationtotaldays    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailabledurationtotaldays($availabledurationtotaldays) 
                        {      
                            $this->availabledurationtotaldays = (float) $availabledurationtotaldays;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $availabledurationtotalweeks;
             
                        /**
                        * Get availabledurationtotalweeks.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAvailabledurationtotalweeks()
                    {
                        return $this->availabledurationtotalweeks;
                    }  /**
                        * Set availabledurationtotalweeks.
                        *@param float $availabledurationtotalweeks    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailabledurationtotalweeks($availabledurationtotalweeks) 
                        {      
                            $this->availabledurationtotalweeks = (float) $availabledurationtotalweeks;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $availabledurationtotalmonths;
             
                        /**
                        * Get availabledurationtotalmonths.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAvailabledurationtotalmonths()
                    {
                        return $this->availabledurationtotalmonths;
                    }  /**
                        * Set availabledurationtotalmonths.
                        *@param float $availabledurationtotalmonths    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailabledurationtotalmonths($availabledurationtotalmonths) 
                        {      
                            $this->availabledurationtotalmonths = (float) $availabledurationtotalmonths;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $availablepacketrectotaltimes;
             
                        /**
                        * Get availablepacketrectotaltimes.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAvailablepacketrectotaltimes()
                    {
                        return $this->availablepacketrectotaltimes;
                    }  /**
                        * Set availablepacketrectotaltimes.
                        *@param float $availablepacketrectotaltimes    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailablepacketrectotaltimes($availablepacketrectotaltimes) 
                        {      
                            $this->availablepacketrectotaltimes = (float) $availablepacketrectotaltimes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $availablepacketrecprice;
             
                        /**
                        * Get availablepacketrecprice.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAvailablepacketrecprice()
                    {
                        return $this->availablepacketrecprice;
                    }  /**
                        * Set availablepacketrecprice.
                        *@param float $availablepacketrecprice    
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
                         public function setAvailablepacketrecprice($availablepacketrecprice) 
                        {      
                            $this->availablepacketrecprice = (float) $availablepacketrecprice;
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
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
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
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
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
                        *@return B2bB2badminschemaVfcrmavailableservicedurationInterface*/
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
    const CONST_TABLE = "vf_crm_available_service_duration";

}
        

             