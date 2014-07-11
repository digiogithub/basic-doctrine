<?php

namespace Atrapalo\Catalog\Interactor;

use Atrapalo\Catalog\Domain\Hike\Hike;
use Atrapalo\Catalog\Domain\Hike\HikeId;
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