<?php

namespace Atrapalo\Oms\Domain\User;

use Rhumsaa\Uuid\Uuid;

class UserId
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
        return new UserId(
            Uuid::uuid4()
        );
    }

    public function __toString()
    {
        return $this->id->toString();
    }
}
