<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfviewwherefinalunionaggr extends \B2b\Models\BaseModel implements B2bB2badminschemaVfviewwherefinalunionaggrInterface {
    

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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
                         public function setViewname($viewname) 
                        {      
                            $this->viewname = (string) $viewname;
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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
                         public function setOrdering($ordering) 
                        {      
                            $this->ordering = (int) $ordering;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $logicaloperatorbefore;
             
                        /**
                        * Get logicaloperatorbefore.
                        * 
                             /**
                                * @return string
                            */  
                    public function getLogicaloperatorbefore()
                    {
                        return $this->logicaloperatorbefore;
                    }  /**
                        * Set logicaloperatorbefore.
                        *@param string $logicaloperatorbefore    
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
                         public function setLogicaloperatorbefore($logicaloperatorbefore) 
                        {      
                            $this->logicaloperatorbefore = (string) $logicaloperatorbefore;
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
                        *@return B2bB2badminschemaVfviewwherefinalunionaggrInterface*/
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
    const CONST_TABLE = "vf_viewwherefinalunionaggr";

}
        

             