<?php

namespace Atrapalo\Oms\Interactor;

class GenericUseCaseRequest
{
    /**
     * @var array
     */
    private $params;

    public function __construct(array $aListOfParams)
    {
        $this->params = $aListOfParams;
    }

    public function get($aParamenter)
    {
        if (isset($this->params[$aParamenter])) {
            return $this->params[$aParamenter];
        }
    }
}