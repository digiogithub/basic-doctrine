<?php

namespace Chinook\Store\Domain;

use DateTime;

class Invoice
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var DateTime
     */
    private $invoiceDate;

    /**
     * @var string
     */
    private $billingAddress;

    /**
     * @var string
     */
    private $billingCity;

    /**
     * @var string
     */
    private $billingState;

    /**
     * @var string
     */
    private $billingCountry;

    /**
     * @var string
     */
    private $billingPostalCode;

    /**
     * @var string
     */
    private $total;

    /**
     * @var integer
     */
    private $invoiceId;

    /**
     * Set customerid
     *
     * @param Customer $aCustomer
     * @return Invoice
     */
    public function setCustomer($aCustomer)
    {
        $this->customer = $aCustomer;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return integer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set invoicedate
     *
     * @param DateTime $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoicedate
     *
     * @return DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set billingaddress
     *
     * @param string $billingaddress
     * @return Invoice
     */
    public function setBillingAddress($billingaddress)
    {
        $this->billingAddress = $billingaddress;

        return $this;
    }

    /**
     * Get billingaddress
     *
     * @return string 
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set billingcity
     *
     * @param string $billingcity
     * @return Invoice
     */
    public function setBillingCity($billingcity)
    {
        $this->billingCity = $billingcity;

        return $this;
    }

    /**
     * Get billingcity
     *
     * @return string 
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Set billingstate
     *
     * @param string $billingstate
     * @return Invoice
     */
    public function setBillingState($billingstate)
    {
        $this->billingState = $billingstate;

        return $this;
    }

    /**
     * Get billingstate
     *
     * @return string 
     */
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * Set billingcountry
     *
     * @param string $billingcountry
     * @return Invoice
     */
    public function setBillingCountry($billingcountry)
    {
        $this->billingCountry = $billingcountry;

        return $this;
    }

    /**
     * Get billingcountry
     *
     * @return string 
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * Set billingpostalcode
     *
     * @param string $billingpostalcode
     * @return Invoice
     */
    public function setBillingPostalCode($billingpostalcode)
    {
        $this->billingPostalCode = $billingpostalcode;

        return $this;
    }

    /**
     * Get billingpostalcode
     *
     * @return string 
     */
    public function getBillingPostalCode()
    {
        return $this->billingPostalCode;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Invoice
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Get invoiceid
     *
     * @return integer 
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }
}
