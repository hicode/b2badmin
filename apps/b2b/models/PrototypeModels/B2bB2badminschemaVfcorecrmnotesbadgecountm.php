<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcorecrmnotesbadgecountm extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcorecrmnotesbadgecountmInterface {
    

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
                        *@return B2bB2badminschemaVfcorecrmnotesbadgecountmInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fknote;
             
                        /**
                        * Get fknote.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFknote()
                    {
                        return $this->fknote;
                    }  /**
                        * Set fknote.
                        *@param int $fknote    
                        *@return B2bB2badminschemaVfcorecrmnotesbadgecountmInterface*/
                         public function setFknote($fknote) 
                        {      
                            $this->fknote = (int) $fknote;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_core_crm_notes_badge_count_m";

}
        

             