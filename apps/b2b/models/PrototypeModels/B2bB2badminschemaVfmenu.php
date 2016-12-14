<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfmenu extends \B2b\Models\BaseModel implements B2bB2badminschemaVfmenuInterface {
    

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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $viewordering;
             
                        /**
                        * Get viewordering.
                        * 
                             /**
                                * @return int
                            */  
                    public function getViewordering()
                    {
                        return $this->viewordering;
                    }  /**
                        * Set viewordering.
                        *@param int $viewordering    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setViewordering($viewordering) 
                        {      
                            $this->viewordering = (int) $viewordering;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $menuid;
             
                        /**
                        * Get menuid.
                        * 
                             /**
                                * @return int
                            */  
                    public function getMenuid()
                    {
                        return $this->menuid;
                    }  /**
                        * Set menuid.
                        *@param int $menuid    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenuid($menuid) 
                        {      
                            $this->menuid = (int) $menuid;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setDt_created($dt_created) 
                        {      
                            $this->dt_created = (string) $dt_created;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserlastupdated;
             
                        /**
                        * Get fkuserlastupdated.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserlastupdated()
                    {
                        return $this->fkuserlastupdated;
                    }  /**
                        * Set fkuserlastupdated.
                        *@param int $fkuserlastupdated    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkuserlastupdated($fkuserlastupdated) 
                        {      
                            $this->fkuserlastupdated = (int) $fkuserlastupdated;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setDt_updated($dt_updated) 
                        {      
                            $this->dt_updated = (string) $dt_updated;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserpublishup;
             
                        /**
                        * Get fkuserpublishup.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserpublishup()
                    {
                        return $this->fkuserpublishup;
                    }  /**
                        * Set fkuserpublishup.
                        *@param int $fkuserpublishup    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkuserpublishup($fkuserpublishup) 
                        {      
                            $this->fkuserpublishup = (int) $fkuserpublishup;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_publishup;
             
                        /**
                        * Get dt_publishup.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_publishup()
                    {
                        return $this->dt_publishup;
                    }  /**
                        * Set dt_publishup.
                        *@param string $dt_publishup    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setDt_publishup($dt_publishup) 
                        {      
                            $this->dt_publishup = (string) $dt_publishup;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserpublishdown;
             
                        /**
                        * Get fkuserpublishdown.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserpublishdown()
                    {
                        return $this->fkuserpublishdown;
                    }  /**
                        * Set fkuserpublishdown.
                        *@param int $fkuserpublishdown    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkuserpublishdown($fkuserpublishdown) 
                        {      
                            $this->fkuserpublishdown = (int) $fkuserpublishdown;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_publishdown;
             
                        /**
                        * Get dt_publishdown.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_publishdown()
                    {
                        return $this->dt_publishdown;
                    }  /**
                        * Set dt_publishdown.
                        *@param string $dt_publishdown    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setDt_publishdown($dt_publishdown) 
                        {      
                            $this->dt_publishdown = (string) $dt_publishdown;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkparentlng($fkparentlng) 
                        {      
                            $this->fkparentlng = (int) $fkparentlng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkbelong;
             
                        /**
                        * Get fkbelong.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkbelong()
                    {
                        return $this->fkbelong;
                    }  /**
                        * Set fkbelong.
                        *@param int $fkbelong    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkbelong($fkbelong) 
                        {      
                            $this->fkbelong = (int) $fkbelong;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $updatestatus;
             
                        /**
                        * Get updatestatus.
                        * 
                             /**
                                * @return int
                            */  
                    public function getUpdatestatus()
                    {
                        return $this->updatestatus;
                    }  /**
                        * Set updatestatus.
                        *@param int $updatestatus    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setUpdatestatus($updatestatus) 
                        {      
                            $this->updatestatus = (int) $updatestatus;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setBldisabled($bldisabled) 
                        {      
                            $this->bldisabled = (int) $bldisabled;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserdisabled;
             
                        /**
                        * Get fkuserdisabled.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserdisabled()
                    {
                        return $this->fkuserdisabled;
                    }  /**
                        * Set fkuserdisabled.
                        *@param int $fkuserdisabled    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkuserdisabled($fkuserdisabled) 
                        {      
                            $this->fkuserdisabled = (int) $fkuserdisabled;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_disabled;
             
                        /**
                        * Get dt_disabled.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_disabled()
                    {
                        return $this->dt_disabled;
                    }  /**
                        * Set dt_disabled.
                        *@param string $dt_disabled    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setDt_disabled($dt_disabled) 
                        {      
                            $this->dt_disabled = (string) $dt_disabled;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkuserdeleted;
             
                        /**
                        * Get fkuserdeleted.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkuserdeleted()
                    {
                        return $this->fkuserdeleted;
                    }  /**
                        * Set fkuserdeleted.
                        *@param int $fkuserdeleted    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkuserdeleted($fkuserdeleted) 
                        {      
                            $this->fkuserdeleted = (int) $fkuserdeleted;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $dt_deleted;
             
                        /**
                        * Get dt_deleted.
                        * 
                             /**
                                * @return string
                            */  
                    public function getDt_deleted()
                    {
                        return $this->dt_deleted;
                    }  /**
                        * Set dt_deleted.
                        *@param string $dt_deleted    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setDt_deleted($dt_deleted) 
                        {      
                            $this->dt_deleted = (string) $dt_deleted;
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
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setRemarks($remarks) 
                        {      
                            $this->remarks = (string) $remarks;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $title;
             
                        /**
                        * Get title.
                        * 
                             /**
                                * @return string
                            */  
                    public function getTitle()
                    {
                        return $this->title;
                    }  /**
                        * Set title.
                        *@param string $title    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setTitle($title) 
                        {      
                            $this->title = (string) $title;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $shorttitle;
             
                        /**
                        * Get shorttitle.
                        * 
                             /**
                                * @return string
                            */  
                    public function getShorttitle()
                    {
                        return $this->shorttitle;
                    }  /**
                        * Set shorttitle.
                        *@param string $shorttitle    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setShorttitle($shorttitle) 
                        {      
                            $this->shorttitle = (string) $shorttitle;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $jobremarks;
             
                        /**
                        * Get jobremarks.
                        * 
                             /**
                                * @return string
                            */  
                    public function getJobremarks()
                    {
                        return $this->jobremarks;
                    }  /**
                        * Set jobremarks.
                        *@param string $jobremarks    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setJobremarks($jobremarks) 
                        {      
                            $this->jobremarks = (string) $jobremarks;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fksite;
             
                        /**
                        * Get fksite.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFksite()
                    {
                        return $this->fksite;
                    }  /**
                        * Set fksite.
                        *@param int $fksite    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFksite($fksite) 
                        {      
                            $this->fksite = (int) $fksite;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkparentmenu;
             
                        /**
                        * Get fkparentmenu.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkparentmenu()
                    {
                        return $this->fkparentmenu;
                    }  /**
                        * Set fkparentmenu.
                        *@param int $fkparentmenu    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setFkparentmenu($fkparentmenu) 
                        {      
                            $this->fkparentmenu = (int) $fkparentmenu;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menulink;
             
                        /**
                        * Get menulink.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenulink()
                    {
                        return $this->menulink;
                    }  /**
                        * Set menulink.
                        *@param string $menulink    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenulink($menulink) 
                        {      
                            $this->menulink = (string) $menulink;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menuparams;
             
                        /**
                        * Get menuparams.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenuparams()
                    {
                        return $this->menuparams;
                    }  /**
                        * Set menuparams.
                        *@param string $menuparams    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenuparams($menuparams) 
                        {      
                            $this->menuparams = (string) $menuparams;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menuname;
             
                        /**
                        * Get menuname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenuname()
                    {
                        return $this->menuname;
                    }  /**
                        * Set menuname.
                        *@param string $menuname    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenuname($menuname) 
                        {      
                            $this->menuname = (string) $menuname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menualias;
             
                        /**
                        * Get menualias.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenualias()
                    {
                        return $this->menualias;
                    }  /**
                        * Set menualias.
                        *@param string $menualias    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenualias($menualias) 
                        {      
                            $this->menualias = (string) $menualias;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menutype;
             
                        /**
                        * Get menutype.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenutype()
                    {
                        return $this->menutype;
                    }  /**
                        * Set menutype.
                        *@param string $menutype    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenutype($menutype) 
                        {      
                            $this->menutype = (string) $menutype;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $menusublevel;
             
                        /**
                        * Get menusublevel.
                        * 
                             /**
                                * @return float
                            */  
                    public function getMenusublevel()
                    {
                        return $this->menusublevel;
                    }  /**
                        * Set menusublevel.
                        *@param float $menusublevel    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenusublevel($menusublevel) 
                        {      
                            $this->menusublevel = (float) $menusublevel;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $menuordering;
             
                        /**
                        * Get menuordering.
                        * 
                             /**
                                * @return float
                            */  
                    public function getMenuordering()
                    {
                        return $this->menuordering;
                    }  /**
                        * Set menuordering.
                        *@param float $menuordering    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenuordering($menuordering) 
                        {      
                            $this->menuordering = (float) $menuordering;
                            return $this;
                        }    
                            /**
                                * @var float
                            */
                            protected $blmenuhome;
             
                        /**
                        * Get blmenuhome.
                        * 
                             /**
                                * @return float
                            */  
                    public function getBlmenuhome()
                    {
                        return $this->blmenuhome;
                    }  /**
                        * Set blmenuhome.
                        *@param float $blmenuhome    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setBlmenuhome($blmenuhome) 
                        {      
                            $this->blmenuhome = (float) $blmenuhome;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menuliextraclass;
             
                        /**
                        * Get menuliextraclass.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenuliextraclass()
                    {
                        return $this->menuliextraclass;
                    }  /**
                        * Set menuliextraclass.
                        *@param string $menuliextraclass    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenuliextraclass($menuliextraclass) 
                        {      
                            $this->menuliextraclass = (string) $menuliextraclass;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $menuextralispancss;
             
                        /**
                        * Get menuextralispancss.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMenuextralispancss()
                    {
                        return $this->menuextralispancss;
                    }  /**
                        * Set menuextralispancss.
                        *@param string $menuextralispancss    
                        *@return B2bB2badminschemaVfmenuInterface*/
                         public function setMenuextralispancss($menuextralispancss) 
                        {      
                            $this->menuextralispancss = (string) $menuextralispancss;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_menu";

}
        

             