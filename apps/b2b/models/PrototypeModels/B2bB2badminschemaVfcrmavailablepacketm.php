<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcrmavailablepacketm extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcrmavailablepacketmInterface {
    

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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setFkavailablepacketid($fkavailablepacketid) 
                        {      
                            $this->fkavailablepacketid = (int) $fkavailablepacketid;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setFkparentlng($fkparentlng) 
                        {      
                            $this->fkparentlng = (int) $fkparentlng;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $packetprice;
             
                        /**
                        * Get packetprice.
                        * 
                             /**
                                * @return float
                            */  
                    public function getPacketprice()
                    {
                        return $this->packetprice;
                    }  /**
                        * Set packetprice.
                        *@param float $packetprice    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setPacketprice($packetprice) 
                        {      
                            $this->packetprice = (float) $packetprice;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $tagsid;
             
                        /**
                        * Get tagsid.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTagsid()
                    {
                        return $this->tagsid;
                    }  /**
                        * Set tagsid.
                        *@param string $tagsid    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setTagsid($tagsid) 
                        {      
                            $this->tagsid = (string) $tagsid;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setTagstext($tagstext) 
                        {      
                            $this->tagstext = (string) $tagstext;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabledurationtitle;
             
                        /**
                        * Get fkavailabledurationtitle.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabledurationtitle()
                    {
                        return $this->fkavailabledurationtitle;
                    }  /**
                        * Set fkavailabledurationtitle.
                        *@param int $fkavailabledurationtitle    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setFkavailabledurationtitle($fkavailabledurationtitle) 
                        {      
                            $this->fkavailabledurationtitle = (int) $fkavailabledurationtitle;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setAvailabledurationtitle($availabledurationtitle) 
                        {      
                            $this->availabledurationtitle = (string) $availabledurationtitle;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailabletotaltimes;
             
                        /**
                        * Get fkavailabletotaltimes.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailabletotaltimes()
                    {
                        return $this->fkavailabletotaltimes;
                    }  /**
                        * Set fkavailabletotaltimes.
                        *@param int $fkavailabletotaltimes    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setFkavailabletotaltimes($fkavailabletotaltimes) 
                        {      
                            $this->fkavailabletotaltimes = (int) $fkavailabletotaltimes;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $availabletotaltimes;
             
                        /**
                        * Get availabletotaltimes.
                        * 
                             /**
                                * @return float
                            */  
                    public function getAvailabletotaltimes()
                    {
                        return $this->availabletotaltimes;
                    }  /**
                        * Set availabletotaltimes.
                        *@param float $availabletotaltimes    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setAvailabletotaltimes($availabletotaltimes) 
                        {      
                            $this->availabletotaltimes = (float) $availabletotaltimes;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailableservice;
             
                        /**
                        * Get fkavailableservice.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailableservice()
                    {
                        return $this->fkavailableservice;
                    }  /**
                        * Set fkavailableservice.
                        *@param int $fkavailableservice    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setFkavailableservice($fkavailableservice) 
                        {      
                            $this->fkavailableservice = (int) $fkavailableservice;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availableservice;
             
                        /**
                        * Get availableservice.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailableservice()
                    {
                        return $this->availableservice;
                    }  /**
                        * Set availableservice.
                        *@param string $availableservice    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setAvailableservice($availableservice) 
                        {      
                            $this->availableservice = (string) $availableservice;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availableservicealiasname;
             
                        /**
                        * Get availableservicealiasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailableservicealiasname()
                    {
                        return $this->availableservicealiasname;
                    }  /**
                        * Set availableservicealiasname.
                        *@param string $availableservicealiasname    
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setAvailableservicealiasname($availableservicealiasname) 
                        {      
                            $this->availableservicealiasname = (string) $availableservicealiasname;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
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
                        *@return B2bB2badminschemaVfcrmavailablepacketmInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_crm_available_packet_m";

}
        

             