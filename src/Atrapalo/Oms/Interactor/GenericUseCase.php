<?php

namespace Atrapalo\Oms\Interactor;

use Doctrine\ORM\EntityManager;

class GenericUseCase
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function execute(GenericUseCaseRequest $aRequest)
    {
        return new GenericUseCaseResponse([
            'message' => 'Welcome to your new Silex Application!'
        ]);
    }
}