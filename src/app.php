<?php

use Atrapalo\Catalog\Interactor\GenericUseCase;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;

$app = new Application();
$app->register(new UrlGeneratorServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
}));

$app['entity_manager'] = $app->share(function($app) {
    $config = Setup::createYAMLMetadataConfiguration([__DIR__ . '/../config/mapping/doctrine'], $app['debug']);
    return EntityManager::create(
        [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../data/database.sqlite'
        ],
        $config
    );
});

$app['generic_use_case'] = $app->share(function($app) {
    return new GenericUseCase(
        $app['entity_manager']
    );
});

return $app;
