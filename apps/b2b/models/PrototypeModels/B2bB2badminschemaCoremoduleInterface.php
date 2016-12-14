<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

        interface B2bB2badminschemaCoremoduleInterface 
        {
                    
        /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Set bldeleted.
     *
     * @param int $id
     * @return CoremoduleInterface
     */
    public function setId($id);
                     
        /**
     * Get myid.
     *
     * @return int
     */
    public function getMyid();

    /**
     * Set bldeleted.
     *
     * @param int $myid
     * @return CoremoduleInterface
     */
    public function setMyid($myid);
                     
        /**
     * Get mykatastima.
     *
     * @return string
     */
    public function getMykatastima();

    /**
     * Set bldeleted.
     *
     * @param string $mykatastima
     * @return CoremoduleInterface
     */
    public function setMykatastima($mykatastima);
                     
        /**
     * Get fkusercreated.
     *
     * @return int
     */
    public function getFkusercreated();

    /**
     * Set bldeleted.
     *
     * @param int $fkusercreated
     * @return CoremoduleInterface
     */
    public function setFkusercreated($fkusercreated);
                     
        /**
     * Get dt_created.
     *
     * @return string
     */
    public function getDt_created();

    /**
     * Set bldeleted.
     *
     * @param string $dt_created
     * @return CoremoduleInterface
     */
    public function setDt_created($dt_created);
                     
        /**
     * Get fkuserlastupdated.
     *
     * @return int
     */
    public function getFkuserlastupdated();

    /**
     * Set bldeleted.
     *
     * @param int $fkuserlastupdated
     * @return CoremoduleInterface
     */
    public function setFkuserlastupdated($fkuserlastupdated);
                     
        /**
     * Get dt_updated.
     *
     * @return string
     */
    public function getDt_updated();

    /**
     * Set bldeleted.
     *
     * @param string $dt_updated
     * @return CoremoduleInterface
     */
    public function setDt_updated($dt_updated);
                     
        /**
     * Get blpublished.
     *
     * @return int
     */
    public function getBlpublished();

    /**
     * Set bldeleted.
     *
     * @param int $blpublished
     * @return CoremoduleInterface
     */
    public function setBlpublished($blpublished);
                     
        /**
     * Get fkuserpublishup.
     *
     * @return int
     */
    public function getFkuserpublishup();

    /**
     * Set bldeleted.
     *
     * @param int $fkuserpublishup
     * @return CoremoduleInterface
     */
    public function setFkuserpublishup($fkuserpublishup);
                     
        /**
     * Get dt_publishup.
     *
     * @return string
     */
    public function getDt_publishup();

    /**
     * Set bldeleted.
     *
     * @param string $dt_publishup
     * @return CoremoduleInterface
     */
    public function setDt_publishup($dt_publishup);
                     
        /**
     * Get fkuserpublishdown.
     *
     * @return int
     */
    public function getFkuserpublishdown();

    /**
     * Set bldeleted.
     *
     * @param int $fkuserpublishdown
     * @return CoremoduleInterface
     */
    public function setFkuserpublishdown($fkuserpublishdown);
                     
        /**
     * Get dt_publishdown.
     *
     * @return string
     */
    public function getDt_publishdown();

    /**
     * Set bldeleted.
     *
     * @param string $dt_publishdown
     * @return CoremoduleInterface
     */
    public function setDt_publishdown($dt_publishdown);
                     
        /**
     * Get fklng.
     *
     * @return int
     */
    public function getFklng();

    /**
     * Set bldeleted.
     *
     * @param int $fklng
     * @return CoremoduleInterface
     */
    public function setFklng($fklng);
                     
        /**
     * Get fkparentlng.
     *
     * @return int
     */
    public function getFkparentlng();

    /**
     * Set bldeleted.
     *
     * @param int $fkparentlng
     * @return CoremoduleInterface
     */
    public function setFkparentlng($fkparentlng);
                     
        /**
     * Get fkbelong.
     *
     * @return int
     */
    public function getFkbelong();

    /**
     * Set bldeleted.
     *
     * @param int $fkbelong
     * @return CoremoduleInterface
     */
    public function setFkbelong($fkbelong);
                     
        /**
     * Get updatestatus.
     *
     * @return int
     */
    public function getUpdatestatus();

    /**
     * Set bldeleted.
     *
     * @param int $updatestatus
     * @return CoremoduleInterface
     */
    public function setUpdatestatus($updatestatus);
                     
        /**
     * Get fkuserupdatestatus.
     *
     * @return int
     */
    public function getFkuserupdatestatus();

    /**
     * Set bldeleted.
     *
     * @param int $fkuserupdatestatus
     * @return CoremoduleInterface
     */
    public function setFkuserupdatestatus($fkuserupdatestatus);
                     
        /**
     * Get bldisabled.
     *
     * @return int
     */
    public function getBldisabled();

    /**
     * Set bldeleted.
     *
     * @param int $bldisabled
     * @return CoremoduleInterface
     */
    public function setBldisabled($bldisabled);
                     
        /**
     * Get fkuserdisabled.
     *
     * @return int
     */
    public function getFkuserdisabled();

    /**
     * Set bldeleted.
     *
     * @param int $fkuserdisabled
     * @return CoremoduleInterface
     */
    public function setFkuserdisabled($fkuserdisabled);
                     
        /**
     * Get dt_disabled.
     *
     * @return string
     */
    public function getDt_disabled();

    /**
     * Set bldeleted.
     *
     * @param string $dt_disabled
     * @return CoremoduleInterface
     */
    public function setDt_disabled($dt_disabled);
                     
        /**
     * Get bldeleted.
     *
     * @return int
     */
    public function getBldeleted();

    /**
     * Set bldeleted.
     *
     * @param int $bldeleted
     * @return CoremoduleInterface
     */
    public function setBldeleted($bldeleted);
                     
        /**
     * Get fkuserdeleted.
     *
     * @return int
     */
    public function getFkuserdeleted();

    /**
     * Set bldeleted.
     *
     * @param int $fkuserdeleted
     * @return CoremoduleInterface
     */
    public function setFkuserdeleted($fkuserdeleted);
                     
        /**
     * Get dt_deleted.
     *
     * @return string
     */
    public function getDt_deleted();

    /**
     * Set bldeleted.
     *
     * @param string $dt_deleted
     * @return CoremoduleInterface
     */
    public function setDt_deleted($dt_deleted);
                     
        /**
     * Get remarks.
     *
     * @return string
     */
    public function getRemarks();

    /**
     * Set bldeleted.
     *
     * @param string $remarks
     * @return CoremoduleInterface
     */
    public function setRemarks($remarks);
                     
        /**
     * Get title.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set bldeleted.
     *
     * @param string $title
     * @return CoremoduleInterface
     */
    public function setTitle($title);
                     
        /**
     * Get shorttitle.
     *
     * @return string
     */
    public function getShorttitle();

    /**
     * Set bldeleted.
     *
     * @param string $shorttitle
     * @return CoremoduleInterface
     */
    public function setShorttitle($shorttitle);
                     
        /**
     * Get jobremarks.
     *
     * @return string
     */
    public function getJobremarks();

    /**
     * Set bldeleted.
     *
     * @param string $jobremarks
     * @return CoremoduleInterface
     */
    public function setJobremarks($jobremarks);
                     
        /**
     * Get moduleposition.
     *
     * @return string
     */
    public function getModuleposition();

    /**
     * Set bldeleted.
     *
     * @param string $moduleposition
     * @return CoremoduleInterface
     */
    public function setModuleposition($moduleposition);
                     
        /**
     * Get modulewidth.
     *
     * @return string
     */
    public function getModulewidth();

    /**
     * Set bldeleted.
     *
     * @param string $modulewidth
     * @return CoremoduleInterface
     */
    public function setModulewidth($modulewidth);
                     
        /**
     * Get moduleheight.
     *
     * @return string
     */
    public function getModuleheight();

    /**
     * Set bldeleted.
     *
     * @param string $moduleheight
     * @return CoremoduleInterface
     */
    public function setModuleheight($moduleheight);
                     
        /**
     * Get modulecss.
     *
     * @return string
     */
    public function getModulecss();

    /**
     * Set bldeleted.
     *
     * @param string $modulecss
     * @return CoremoduleInterface
     */
    public function setModulecss($modulecss);
                     
        /**
     * Get modulename.
     *
     * @return string
     */
    public function getModulename();

    /**
     * Set bldeleted.
     *
     * @param string $modulename
     * @return CoremoduleInterface
     */
    public function setModulename($modulename);
             
        }
                  