<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfviewfieldsalias extends \B2b\Models\BaseModel implements B2bB2badminschemaVfviewfieldsaliasInterface {
    

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
                                * @var float
                            */
                            protected $id;
             
                        /**
                        * Get id.
                        * 
                             /**
                                * @return float
                            */  
                    public function getId()
                    {
                        return $this->id;
                    }  /**
                        * Set id.
                        *@param float $id    
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (float) $id;
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setDt_created($dt_created) 
                        {      
                            $this->dt_created = (string) $dt_created;
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setFkview($fkview) 
                        {      
                            $this->fkview = (int) $fkview;
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setFkviewtablefield($fkviewtablefield) 
                        {      
                            $this->fkviewtablefield = (int) $fkviewtablefield;
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setDbviewname($dbviewname) 
                        {      
                            $this->dbviewname = (string) $dbviewname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dbtablename;
             
                        /**
                        * Get dbtablename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDbtablename()
                    {
                        return $this->dbtablename;
                    }  /**
                        * Set dbtablename.
                        *@param string $dbtablename    
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setDbtablename($dbtablename) 
                        {      
                            $this->dbtablename = (string) $dbtablename;
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setDbfieldname($dbfieldname) 
                        {      
                            $this->dbfieldname = (string) $dbfieldname;
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
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setRemarks($remarks) 
                        {      
                            $this->remarks = (string) $remarks;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $aliasname;
             
                        /**
                        * Get aliasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAliasname()
                    {
                        return $this->aliasname;
                    }  /**
                        * Set aliasname.
                        *@param string $aliasname    
                        *@return B2bB2badminschemaVfviewfieldsaliasInterface*/
                         public function setAliasname($aliasname) 
                        {      
                            $this->aliasname = (string) $aliasname;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_viewfieldsalias";

}
        

             