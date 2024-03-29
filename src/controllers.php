<?php

use Atrapalo\Oms\Interactor\GenericUseCaseRequest;
use Chinook\Store\Domain\Album;
use Chinook\Store\Domain\Artist;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {

    $entityManager = $app['entity_manager'];

    $startTime = microtime(true);
    $artists = $entityManager->getRepository('Chinook\Store\Domain\Artist')->findAll();
    $endTime = microtime(true);

    return $app['twig']->render('index.html.twig', [
        'artists' => $artists,
        'totalTime' => ($endTime - $startTime)
    ]);

})
->bind('homepage')
;

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html.twig, or 40x.html.twig, or 4xx.html.twig, or error.html.twig
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
