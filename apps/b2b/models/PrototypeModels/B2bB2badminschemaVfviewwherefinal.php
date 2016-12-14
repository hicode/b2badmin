<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfviewwherefinal extends \B2b\Models\BaseModel implements B2bB2badminschemaVfviewwherefinalInterface {
    

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
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
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
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkview;
             
                        /**
                        * Get fkview.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkview()
                    {
                        return $this->fkview;
                    }  /**
                        * Set fkview.
                        *@param int $fkview    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFkview($fkview) 
                        {      
                            $this->fkview = (int) $fkview;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dbviewname;
             
                        /**
                        * Get dbviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDbviewname()
                    {
                        return $this->dbviewname;
                    }  /**
                        * Set dbviewname.
                        *@param string $dbviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setDbviewname($dbviewname) 
                        {      
                            $this->dbviewname = (string) $dbviewname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $viewname;
             
                        /**
                        * Get viewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getViewname()
                    {
                        return $this->viewname;
                    }  /**
                        * Set viewname.
                        *@param string $viewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setViewname($viewname) 
                        {      
                            $this->viewname = (string) $viewname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $afkview;
             
                        /**
                        * Get afkview.
                        * 
                             /**
                                * @return int
                            */  
                    public function getAfkview()
                    {
                        return $this->afkview;
                    }  /**
                        * Set afkview.
                        *@param int $afkview    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setAfkview($afkview) 
                        {      
                            $this->afkview = (int) $afkview;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $adbviewname;
             
                        /**
                        * Get adbviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAdbviewname()
                    {
                        return $this->adbviewname;
                    }  /**
                        * Set adbviewname.
                        *@param string $adbviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setAdbviewname($adbviewname) 
                        {      
                            $this->adbviewname = (string) $adbviewname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $aviewname;
             
                        /**
                        * Get aviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAviewname()
                    {
                        return $this->aviewname;
                    }  /**
                        * Set aviewname.
                        *@param string $aviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setAviewname($aviewname) 
                        {      
                            $this->aviewname = (string) $aviewname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bfkview;
             
                        /**
                        * Get bfkview.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBfkview()
                    {
                        return $this->bfkview;
                    }  /**
                        * Set bfkview.
                        *@param int $bfkview    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setBfkview($bfkview) 
                        {      
                            $this->bfkview = (int) $bfkview;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bdbviewname;
             
                        /**
                        * Get bdbviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBdbviewname()
                    {
                        return $this->bdbviewname;
                    }  /**
                        * Set bdbviewname.
                        *@param string $bdbviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setBdbviewname($bdbviewname) 
                        {      
                            $this->bdbviewname = (string) $bdbviewname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bviewname;
             
                        /**
                        * Get bviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBviewname()
                    {
                        return $this->bviewname;
                    }  /**
                        * Set bviewname.
                        *@param string $bviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setBviewname($bviewname) 
                        {      
                            $this->bviewname = (string) $bviewname;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $finalfkview;
             
                        /**
                        * Get finalfkview.
                        * 
                             /**
                                * @return float
                            */  
                    public function getFinalfkview()
                    {
                        return $this->finalfkview;
                    }  /**
                        * Set finalfkview.
                        *@param float $finalfkview    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFinalfkview($finalfkview) 
                        {      
                            $this->finalfkview = (float) $finalfkview;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $finaldbviewname;
             
                        /**
                        * Get finaldbviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFinaldbviewname()
                    {
                        return $this->finaldbviewname;
                    }  /**
                        * Set finaldbviewname.
                        *@param string $finaldbviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFinaldbviewname($finaldbviewname) 
                        {      
                            $this->finaldbviewname = (string) $finaldbviewname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $finalviewname;
             
                        /**
                        * Get finalviewname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFinalviewname()
                    {
                        return $this->finalviewname;
                    }  /**
                        * Set finalviewname.
                        *@param string $finalviewname    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFinalviewname($finalviewname) 
                        {      
                            $this->finalviewname = (string) $finalviewname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $aordering;
             
                        /**
                        * Get aordering.
                        * 
                             /**
                                * @return int
                            */  
                    public function getAordering()
                    {
                        return $this->aordering;
                    }  /**
                        * Set aordering.
                        *@param int $aordering    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setAordering($aordering) 
                        {      
                            $this->aordering = (int) $aordering;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bordering;
             
                        /**
                        * Get bordering.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBordering()
                    {
                        return $this->bordering;
                    }  /**
                        * Set bordering.
                        *@param int $bordering    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setBordering($bordering) 
                        {      
                            $this->bordering = (int) $bordering;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $finalordering;
             
                        /**
                        * Get finalordering.
                        * 
                             /**
                                * @return float
                            */  
                    public function getFinalordering()
                    {
                        return $this->finalordering;
                    }  /**
                        * Set finalordering.
                        *@param float $finalordering    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFinalordering($finalordering) 
                        {      
                            $this->finalordering = (float) $finalordering;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $afinalrowwhere;
             
                        /**
                        * Get afinalrowwhere.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAfinalrowwhere()
                    {
                        return $this->afinalrowwhere;
                    }  /**
                        * Set afinalrowwhere.
                        *@param string $afinalrowwhere    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setAfinalrowwhere($afinalrowwhere) 
                        {      
                            $this->afinalrowwhere = (string) $afinalrowwhere;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $bfinalrowwhere;
             
                        /**
                        * Get bfinalrowwhere.
                        * 
                             /**
                                * @return string
                            */  
                    public function getBfinalrowwhere()
                    {
                        return $this->bfinalrowwhere;
                    }  /**
                        * Set bfinalrowwhere.
                        *@param string $bfinalrowwhere    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setBfinalrowwhere($bfinalrowwhere) 
                        {      
                            $this->bfinalrowwhere = (string) $bfinalrowwhere;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $finalrowwhere;
             
                        /**
                        * Get finalrowwhere.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFinalrowwhere()
                    {
                        return $this->finalrowwhere;
                    }  /**
                        * Set finalrowwhere.
                        *@param string $finalrowwhere    
                        *@return B2bB2badminschemaVfviewwherefinalInterface*/
                         public function setFinalrowwhere($finalrowwhere) 
                        {      
                            $this->finalrowwhere = (string) $finalrowwhere;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_viewwherefinal";

}
        

             