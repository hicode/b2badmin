<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 

        interface B2bB2badminschemaVfcrmcustomercontractpaymentgroupInterface 
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setFkcustomerfkparentlng($fkcustomerfkparentlng);
                     
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
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setFklng($fklng);
                     
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
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setMykatastima($mykatastima);
                     
        /**
     * Get fkcorecrmavailableserviceid.
     *
     * @return int
     */
    public function getFkcorecrmavailableserviceid();

    /**
     * Set bldeleted.
     *
     * @param int $fkcorecrmavailableserviceid
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setFkcorecrmavailableserviceid($fkcorecrmavailableserviceid);
                     
        /**
     * Get corecrmavailableservicetitle.
     *
     * @return string
     */
    public function getCorecrmavailableservicetitle();

    /**
     * Set bldeleted.
     *
     * @param string $corecrmavailableservicetitle
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCorecrmavailableservicetitle($corecrmavailableservicetitle);
                     
        /**
     * Get customercontractid.
     *
     * @return int
     */
    public function getCustomercontractid();

    /**
     * Set bldeleted.
     *
     * @param int $customercontractid
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontractid($customercontractid);
                     
        /**
     * Get customercontracttitle.
     *
     * @return string
     */
    public function getCustomercontracttitle();

    /**
     * Set bldeleted.
     *
     * @param string $customercontracttitle
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontracttitle($customercontracttitle);
                     
        /**
     * Get fkavailablepacket.
     *
     * @return int
     */
    public function getFkavailablepacket();

    /**
     * Set bldeleted.
     *
     * @param int $fkavailablepacket
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setFkavailablepacket($fkavailablepacket);
                     
        /**
     * Get corecrmavailablepackettitle.
     *
     * @return string
     */
    public function getCorecrmavailablepackettitle();

    /**
     * Set bldeleted.
     *
     * @param string $corecrmavailablepackettitle
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCorecrmavailablepackettitle($corecrmavailablepackettitle);
                     
        /**
     * Get customercontracttotaldays.
     *
     * @return float
     */
    public function getCustomercontracttotaldays();

    /**
     * Set bldeleted.
     *
     * @param float $customercontracttotaldays
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontracttotaldays($customercontracttotaldays);
                     
        /**
     * Get customercontracttotalweeks.
     *
     * @return float
     */
    public function getCustomercontracttotalweeks();

    /**
     * Set bldeleted.
     *
     * @param float $customercontracttotalweeks
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontracttotalweeks($customercontracttotalweeks);
                     
        /**
     * Get customercontracttotalmonths.
     *
     * @return float
     */
    public function getCustomercontracttotalmonths();

    /**
     * Set bldeleted.
     *
     * @param float $customercontracttotalmonths
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontracttotalmonths($customercontracttotalmonths);
                     
        /**
     * Get customercontractdtstart.
     *
     * @return string
     */
    public function getCustomercontractdtstart();

    /**
     * Set bldeleted.
     *
     * @param string $customercontractdtstart
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontractdtstart($customercontractdtstart);
                     
        /**
     * Get customercontractdtend.
     *
     * @return string
     */
    public function getCustomercontractdtend();

    /**
     * Set bldeleted.
     *
     * @param string $customercontractdtend
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontractdtend($customercontractdtend);
                     
        /**
     * Get customercontracttotaltimes.
     *
     * @return float
     */
    public function getCustomercontracttotaltimes();

    /**
     * Set bldeleted.
     *
     * @param float $customercontracttotaltimes
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontracttotaltimes($customercontracttotaltimes);
                     
        /**
     * Get customercontractdonetimes.
     *
     * @return float
     */
    public function getCustomercontractdonetimes();

    /**
     * Set bldeleted.
     *
     * @param float $customercontractdonetimes
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontractdonetimes($customercontractdonetimes);
                     
        /**
     * Get customercontractprice.
     *
     * @return float
     */
    public function getCustomercontractprice();

    /**
     * Set bldeleted.
     *
     * @param float $customercontractprice
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomercontractprice($customercontractprice);
                     
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
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomerfname($customerfname);
                     
        /**
     * Get customerfull.
     *
     * @return string
     */
    public function getCustomerfull();

    /**
     * Set bldeleted.
     *
     * @param string $customerfull
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomerfull($customerfull);
                     
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setCustomerphotourl($customerphotourl);
                     
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
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
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setBlpublished($blpublished);
                     
        /**
     * Get sumactualpaymenttotal.
     *
     * @return float
     */
    public function getSumactualpaymenttotal();

    /**
     * Set bldeleted.
     *
     * @param float $sumactualpaymenttotal
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setSumactualpaymenttotal($sumactualpaymenttotal);
                     
        /**
     * Get sumipoloipo.
     *
     * @return float
     */
    public function getSumipoloipo();

    /**
     * Set bldeleted.
     *
     * @param float $sumipoloipo
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setSumipoloipo($sumipoloipo);
                     
        /**
     * Get paymentviewtitle.
     *
     * @return string
     */
    public function getPaymentviewtitle();

    /**
     * Set bldeleted.
     *
     * @param string $paymentviewtitle
     * @return VfcrmcustomercontractpaymentgroupInterface
     */
    public function setPaymentviewtitle($paymentviewtitle);
             
        }
                  