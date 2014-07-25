<?php

namespace Chinook\Store\Domain;

class InvoiceLine
{
    /**
     * @var integer
     */
    private $invoiceId;

    /**
     * @var integer
     */
    private $trackId;

    /**
     * @var double
     */
    private $unitPrice;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * Set an invoice
     *
     * @param integer $anInvoiceId
     * @return Invoiceline
     */
    public function setInvoiceId($anInvoiceId)
    {
        $this->invoiceId = $anInvoiceId;

        return $this;
    }

    /**
     * Get an invoice
     *
     * @return Invoice
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set a track
     *
     * @param integer $aTrackId
     * @return Invoiceline
     */
    public function setTrackId($aTrackId)
    {
        $this->trackId = $aTrackId;

        return $this;
    }

    /**
     * Get trackid
     *
     * @return integer 
     */
    public function getTrackId()
    {
        return $this->trackId;
    }

    /**
     * Set unitprice
     *
     * @param double $unitprice
     * @return Invoiceline
     */
    public function setUnitPrice($unitprice)
    {
        $this->unitPrice = $unitprice;

        return $this;
    }

    /**
     * Get unitprice
     *
     * @return string 
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Invoiceline
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
