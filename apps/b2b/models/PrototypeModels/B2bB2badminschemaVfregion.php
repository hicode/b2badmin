<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfregion extends \B2b\Models\BaseModel implements B2bB2badminschemaVfregionInterface {
    

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
                        *@return B2bB2badminschemaVfregionInterface*/
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
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $countrytitle;
             
                        /**
                        * Get countrytitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getCountrytitle()
                    {
                        return $this->countrytitle;
                    }  /**
                        * Set countrytitle.
                        *@param string $countrytitle    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setCountrytitle($countrytitle) 
                        {      
                            $this->countrytitle = (string) $countrytitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $prefecturetitle;
             
                        /**
                        * Get prefecturetitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPrefecturetitle()
                    {
                        return $this->prefecturetitle;
                    }  /**
                        * Set prefecturetitle.
                        *@param string $prefecturetitle    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setPrefecturetitle($prefecturetitle) 
                        {      
                            $this->prefecturetitle = (string) $prefecturetitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $towntitle;
             
                        /**
                        * Get towntitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTowntitle()
                    {
                        return $this->towntitle;
                    }  /**
                        * Set towntitle.
                        *@param string $towntitle    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setTowntitle($towntitle) 
                        {      
                            $this->towntitle = (string) $towntitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $addressorvillage;
             
                        /**
                        * Get addressorvillage.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAddressorvillage()
                    {
                        return $this->addressorvillage;
                    }  /**
                        * Set addressorvillage.
                        *@param string $addressorvillage    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setAddressorvillage($addressorvillage) 
                        {      
                            $this->addressorvillage = (string) $addressorvillage;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $streetnum;
             
                        /**
                        * Get streetnum.
                        * 
                             /**
                                * @return string
                            */  
                    public function getStreetnum()
                    {
                        return $this->streetnum;
                    }  /**
                        * Set streetnum.
                        *@param string $streetnum    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setStreetnum($streetnum) 
                        {      
                            $this->streetnum = (string) $streetnum;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $poctitle;
             
                        /**
                        * Get poctitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPoctitle()
                    {
                        return $this->poctitle;
                    }  /**
                        * Set poctitle.
                        *@param string $poctitle    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setPoctitle($poctitle) 
                        {      
                            $this->poctitle = (string) $poctitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $alltitles;
             
                        /**
                        * Get alltitles.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAlltitles()
                    {
                        return $this->alltitles;
                    }  /**
                        * Set alltitles.
                        *@param string $alltitles    
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setAlltitles($alltitles) 
                        {      
                            $this->alltitles = (string) $alltitles;
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
                        *@return B2bB2badminschemaVfregionInterface*/
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
                        *@return B2bB2badminschemaVfregionInterface*/
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
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setFktown($fktown) 
                        {      
                            $this->fktown = (int) $fktown;
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
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setFkregion($fkregion) 
                        {      
                            $this->fkregion = (int) $fkregion;
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
                        *@return B2bB2badminschemaVfregionInterface*/
                         public function setFkpoc($fkpoc) 
                        {      
                            $this->fkpoc = (int) $fkpoc;
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
                        *@return B2bB2badminschemaVfregionInterface*/
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
                        *@return B2bB2badminschemaVfregionInterface*/
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
                        *@return B2bB2badminschemaVfregionInterface*/
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
    const CONST_TABLE = "vf_region";

}
        

             