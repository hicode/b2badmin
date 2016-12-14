<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfviewwherevalueselect extends \B2b\Models\BaseModel implements B2bB2badminschemaVfviewwherevalueselectInterface {
    

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
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
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
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
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
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setFkview($fkview) 
                        {      
                            $this->fkview = (int) $fkview;
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
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setViewname($viewname) 
                        {      
                            $this->viewname = (string) $viewname;
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
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setDbviewname($dbviewname) 
                        {      
                            $this->dbviewname = (string) $dbviewname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkviewtablefield;
             
                        /**
                        * Get fkviewtablefield.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkviewtablefield()
                    {
                        return $this->fkviewtablefield;
                    }  /**
                        * Set fkviewtablefield.
                        *@param int $fkviewtablefield    
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setFkviewtablefield($fkviewtablefield) 
                        {      
                            $this->fkviewtablefield = (int) $fkviewtablefield;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dbfieldname;
             
                        /**
                        * Get dbfieldname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDbfieldname()
                    {
                        return $this->dbfieldname;
                    }  /**
                        * Set dbfieldname.
                        *@param string $dbfieldname    
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setDbfieldname($dbfieldname) 
                        {      
                            $this->dbfieldname = (string) $dbfieldname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $wherealias;
             
                        /**
                        * Get wherealias.
                        * 
                             /**
                                * @return string
                            */  
                    public function getWherealias()
                    {
                        return $this->wherealias;
                    }  /**
                        * Set wherealias.
                        *@param string $wherealias    
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setWherealias($wherealias) 
                        {      
                            $this->wherealias = (string) $wherealias;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $whereoperator;
             
                        /**
                        * Get whereoperator.
                        * 
                             /**
                                * @return string
                            */  
                    public function getWhereoperator()
                    {
                        return $this->whereoperator;
                    }  /**
                        * Set whereoperator.
                        *@param string $whereoperator    
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setWhereoperator($whereoperator) 
                        {      
                            $this->whereoperator = (string) $whereoperator;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $wherevalue;
             
                        /**
                        * Get wherevalue.
                        * 
                             /**
                                * @return string
                            */  
                    public function getWherevalue()
                    {
                        return $this->wherevalue;
                    }  /**
                        * Set wherevalue.
                        *@param string $wherevalue    
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setWherevalue($wherevalue) 
                        {      
                            $this->wherevalue = (string) $wherevalue;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $wherevalueselect;
             
                        /**
                        * Get wherevalueselect.
                        * 
                             /**
                                * @return string
                            */  
                    public function getWherevalueselect()
                    {
                        return $this->wherevalueselect;
                    }  /**
                        * Set wherevalueselect.
                        *@param string $wherevalueselect    
                        *@return B2bB2badminschemaVfviewwherevalueselectInterface*/
                         public function setWherevalueselect($wherevalueselect) 
                        {      
                            $this->wherevalueselect = (string) $wherevalueselect;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_viewwherevalueselect";

}
        

             