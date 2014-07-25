<?php

use Atrapalo\Oms\Interactor\GenericUseCase;
use Doctrine\Common\Cache\RedisCache;
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
    /*
    $cache = new RedisCache();
    $redis = new Redis();
    $redis->connect('127.0.0.1');
    $cache->setRedis($redis);
    $config = Setup::createXMLMetadataConfiguration([__DIR__ . '/../config/mapping/doctrine'], false, null, $cache);
    */
    $config = Setup::createXMLMetadataConfiguration([__DIR__ . '/../config/mapping/doctrine'], $app['debug']);

    return EntityManager::create(
        [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../data/chinook.sqlite'
        ],
        $config
    );
});

return $app;
