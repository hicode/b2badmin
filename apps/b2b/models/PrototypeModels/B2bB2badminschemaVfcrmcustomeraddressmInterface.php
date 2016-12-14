<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:36 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

        interface B2bB2badminschemaVfcrmcustomeraddressmInterface 
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
     * @return VfcrmcustomeraddressmInterface
     */
    public function setId($id);
                     
        /**
     * Get fkcustomerid.
     *
     * @return int
     */
    public function getFkcustomerid();

    /**
     * Set bldeleted.
     *
     * @param int $fkcustomerid
     * @return VfcrmcustomeraddressmInterface
     */
    public function setFkcustomerid($fkcustomerid);
                     
        /**
     * Get fkcustomerfkparentlng.
     *
     * @return int
     */
    public function getFkcustomerfkparentlng();

    /**
     * Set bldeleted.
     *
     * @param int $fkcustomerfkparentlng
     * @return VfcrmcustomeraddressmInterface
     */
    public function setFkcustomerfkparentlng($fkcustomerfkparentlng);
                     
        /**
     * Get fkcustomeraddressid.
     *
     * @return int
     */
    public function getFkcustomeraddressid();

    /**
     * Set bldeleted.
     *
     * @param int $fkcustomeraddressid
     * @return VfcrmcustomeraddressmInterface
     */
    public function setFkcustomeraddressid($fkcustomeraddressid);
                     
        /**
     * Get fkcustomeraddressfkparentlng.
     *
     * @return int
     */
    public function getFkcustomeraddressfkparentlng();

    /**
     * Set bldeleted.
     *
     * @param int $fkcustomeraddressfkparentlng
     * @return VfcrmcustomeraddressmInterface
     */
    public function setFkcustomeraddressfkparentlng($fkcustomeraddressfkparentlng);
                     
        /**
     * Get fkaddresstype.
     *
     * @return int
     */
    public function getFkaddresstype();

    /**
     * Set bldeleted.
     *
     * @param int $fkaddresstype
     * @return VfcrmcustomeraddressmInterface
     */
    public function setFkaddresstype($fkaddresstype);
                     
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
     * @return VfcrmcustomeraddressmInterface
     */
    public function setFklng($fklng);
                     
        /**
     * Get customerfname.
     *
     * @return string
     */
    public function getCustomerfname();

    /**
     * Set bldeleted.
     *
     * @param string $customerfname
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomerfname($customerfname);
                     
        /**
     * Get customerlname.
     *
     * @return string
     */
    public function getCustomerlname();

    /**
     * Set bldeleted.
     *
     * @param string $customerlname
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomerlname($customerlname);
                     
        /**
     * Get customertelmobile.
     *
     * @return string
     */
    public function getCustomertelmobile();

    /**
     * Set bldeleted.
     *
     * @param string $customertelmobile
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomertelmobile($customertelmobile);
                     
        /**
     * Get customertelland.
     *
     * @return string
     */
    public function getCustomertelland();

    /**
     * Set bldeleted.
     *
     * @param string $customertelland
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomertelland($customertelland);
                     
        /**
     * Get customerbirthday.
     *
     * @return string
     */
    public function getCustomerbirthday();

    /**
     * Set bldeleted.
     *
     * @param string $customerbirthday
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomerbirthday($customerbirthday);
                     
        /**
     * Get customeremail.
     *
     * @return string
     */
    public function getCustomeremail();

    /**
     * Set bldeleted.
     *
     * @param string $customeremail
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeremail($customeremail);
                     
        /**
     * Get customerphotourl.
     *
     * @return string
     */
    public function getCustomerphotourl();

    /**
     * Set bldeleted.
     *
     * @param string $customerphotourl
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomerphotourl($customerphotourl);
                     
        /**
     * Get addresstypetitle.
     *
     * @return string
     */
    public function getAddresstypetitle();

    /**
     * Set bldeleted.
     *
     * @param string $addresstypetitle
     * @return VfcrmcustomeraddressmInterface
     */
    public function setAddresstypetitle($addresstypetitle);
                     
        /**
     * Get customeraddressaddressname.
     *
     * @return string
     */
    public function getCustomeraddressaddressname();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddressaddressname
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressaddressname($customeraddressaddressname);
                     
        /**
     * Get customeraddressfkregion.
     *
     * @return int
     */
    public function getCustomeraddressfkregion();

    /**
     * Set bldeleted.
     *
     * @param int $customeraddressfkregion
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressfkregion($customeraddressfkregion);
                     
        /**
     * Get customeraddressfkcountry.
     *
     * @return int
     */
    public function getCustomeraddressfkcountry();

    /**
     * Set bldeleted.
     *
     * @param int $customeraddressfkcountry
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressfkcountry($customeraddressfkcountry);
                     
        /**
     * Get customeraddressfkprefecture.
     *
     * @return int
     */
    public function getCustomeraddressfkprefecture();

    /**
     * Set bldeleted.
     *
     * @param int $customeraddressfkprefecture
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressfkprefecture($customeraddressfkprefecture);
                     
        /**
     * Get customeraddressfktown.
     *
     * @return int
     */
    public function getCustomeraddressfktown();

    /**
     * Set bldeleted.
     *
     * @param int $customeraddressfktown
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressfktown($customeraddressfktown);
                     
        /**
     * Get customeraddressfkpoc.
     *
     * @return int
     */
    public function getCustomeraddressfkpoc();

    /**
     * Set bldeleted.
     *
     * @param int $customeraddressfkpoc
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressfkpoc($customeraddressfkpoc);
                     
        /**
     * Get customeraddresscountryname.
     *
     * @return string
     */
    public function getCustomeraddresscountryname();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddresscountryname
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddresscountryname($customeraddresscountryname);
                     
        /**
     * Get customeraddressprefecturename.
     *
     * @return string
     */
    public function getCustomeraddressprefecturename();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddressprefecturename
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressprefecturename($customeraddressprefecturename);
                     
        /**
     * Get customeraddresstownname.
     *
     * @return string
     */
    public function getCustomeraddresstownname();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddresstownname
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddresstownname($customeraddresstownname);
                     
        /**
     * Get customeraddressregionaddressorvillage.
     *
     * @return string
     */
    public function getCustomeraddressregionaddressorvillage();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddressregionaddressorvillage
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressregionaddressorvillage($customeraddressregionaddressorvillage);
                     
        /**
     * Get customeraddressregionstreetnum.
     *
     * @return string
     */
    public function getCustomeraddressregionstreetnum();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddressregionstreetnum
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddressregionstreetnum($customeraddressregionstreetnum);
                     
        /**
     * Get customeraddresspocname.
     *
     * @return string
     */
    public function getCustomeraddresspocname();

    /**
     * Set bldeleted.
     *
     * @param string $customeraddresspocname
     * @return VfcrmcustomeraddressmInterface
     */
    public function setCustomeraddresspocname($customeraddresspocname);
                     
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
     * @return VfcrmcustomeraddressmInterface
     */
    public function setBldisabled($bldisabled);
                     
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
     * @return VfcrmcustomeraddressmInterface
     */
    public function setBldeleted($bldeleted);
                     
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
     * @return VfcrmcustomeraddressmInterface
     */
    public function setBlpublished($blpublished);
             
        }
                  