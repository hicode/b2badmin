<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfcorecrmnotesm extends \B2b\Models\BaseModel implements B2bB2badminschemaVfcorecrmnotesmInterface {
    

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
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
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
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setFknote($fknote) 
                        {      
                            $this->fknote = (int) $fknote;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkusercreated;
             
                        /**
                        * Get fkusercreated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkusercreated()
                    {
                        return $this->fkusercreated;
                    }  /**
                        * Set fkusercreated.
                        *@param int $fkusercreated    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setFkusercreated($fkusercreated) 
                        {      
                            $this->fkusercreated = (int) $fkusercreated;
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
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setDt_created($dt_created) 
                        {      
                            $this->dt_created = (string) $dt_created;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_updated;
             
                        /**
                        * Get dt_updated.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_updated()
                    {
                        return $this->dt_updated;
                    }  /**
                        * Set dt_updated.
                        *@param string $dt_updated    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setDt_updated($dt_updated) 
                        {      
                            $this->dt_updated = (string) $dt_updated;
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
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $note;
             
                        /**
                        * Get note.
                        * 
                             /**
                                * @return string
                            */  
                    public function getNote()
                    {
                        return $this->note;
                    }  /**
                        * Set note.
                        *@param string $note    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setNote($note) 
                        {      
                            $this->note = (string) $note;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserdone;
             
                        /**
                        * Get fkuserdone.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserdone()
                    {
                        return $this->fkuserdone;
                    }  /**
                        * Set fkuserdone.
                        *@param int $fkuserdone    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setFkuserdone($fkuserdone) 
                        {      
                            $this->fkuserdone = (int) $fkuserdone;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $userdonenotes;
             
                        /**
                        * Get userdonenotes.
                        * 
                             /**
                                * @return string
                            */  
                    public function getUserdonenotes()
                    {
                        return $this->userdonenotes;
                    }  /**
                        * Set userdonenotes.
                        *@param string $userdonenotes    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setUserdonenotes($userdonenotes) 
                        {      
                            $this->userdonenotes = (string) $userdonenotes;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $fullname;
             
                        /**
                        * Get fullname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getFullname()
                    {
                        return $this->fullname;
                    }  /**
                        * Set fullname.
                        *@param string $fullname    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setFullname($fullname) 
                        {      
                            $this->fullname = (string) $fullname;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $done;
             
                        /**
                        * Get done.
                        * 
                             /**
                                * @return float
                            */  
                    public function getDone()
                    {
                        return $this->done;
                    }  /**
                        * Set done.
                        *@param float $done    
                        *@return B2bB2badminschemaVfcorecrmnotesmInterface*/
                         public function setDone($done) 
                        {      
                            $this->done = (float) $done;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_core_crm_notes_m";

}
        

             