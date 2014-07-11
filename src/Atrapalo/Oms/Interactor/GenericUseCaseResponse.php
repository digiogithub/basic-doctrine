<?php

namespace Atrapalo\Oms\Interactor;

class GenericUseCaseResponse
{
    /**
     * @var array
     */
    private $params;

    public function __construct(array $aListOfParams)
    {
        $this->params = $aListOfParams;
    }

    public function getAll()
    {
        return $this->params;
    }
}