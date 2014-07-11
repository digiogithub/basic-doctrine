<?php

namespace Atrapalo\Oms\Domain\Order;

class OrderItem
{
    /**
     * @var OrderItemId
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Atrapalo\Oms\Domain\Order\OrderItemId $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \Atrapalo\Oms\Domain\Order\OrderItemId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}