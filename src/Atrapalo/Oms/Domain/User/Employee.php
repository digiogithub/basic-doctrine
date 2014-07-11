<?php

namespace Atrapalo\Oms\Domain\User;

class Employee extends User
{
    /**
     * @var int
     */
    private $atrapaloIdentifier;

    /**
     * @param int $atrapaloIdentifier
     */
    public function setAtrapaloIdentifier($atrapaloIdentifier)
    {
        $this->atrapaloIdentifier = $atrapaloIdentifier;
    }

    /**
     * @return int
     */
    public function getAtrapaloIdentifier()
    {
        return $this->atrapaloIdentifier;
    }
}