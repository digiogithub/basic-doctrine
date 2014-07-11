<?php

namespace Atrapalo\Oms\Domain\Order;

use Rhumsaa\Uuid\Uuid;

class OrderItemId
{
    /**
     * @var Uuid
     */
    private $id;

    private function __construct(Uuid $anId)
    {
        $this->id = $anId;
    }

    /**
     * Creates a new HikeId
     */
    public static function create()
    {
        return new OrderItemId(
            Uuid::uuid4()
        );
    }

    public function __toString()
    {
        return $this->id->toString();
    }
}
