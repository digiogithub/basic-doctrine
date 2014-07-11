<?php

namespace Atrapalo\Oms\Domain\Order;

use DateTime;

class Order
{
    /**
     * @var OrderId
     */
    private $id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var int
     */
    private $userId;

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param OrderId $id
     */
    public function setId(OrderId $id)
    {
        $this->id = $id;
    }

    /**
     * @return OrderId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
