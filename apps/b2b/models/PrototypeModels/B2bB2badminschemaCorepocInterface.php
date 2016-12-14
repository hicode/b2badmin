<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

        interface B2bB2badminschemaCorepocInterface 
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
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
     * @return CorepocInterface
     */
    public function setJobremarks($jobremarks);
             
        }
                  