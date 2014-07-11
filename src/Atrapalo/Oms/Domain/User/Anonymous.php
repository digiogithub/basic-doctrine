<?php

namespace Atrapalo\Oms\Domain\User;

class Anonymous extends User
{
    /**
     * @var string
     */
    private $nif;

    /**
     * @param string $nif
     */
    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    /**
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }
}