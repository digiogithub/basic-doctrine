<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Symfony\Component\Debug\Debug;

require_once __DIR__.'/vendor/autoload.php';

Debug::enable();

$app = require __DIR__.'/src/app.php';
require __DIR__.'/config/dev.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = $app['entity_manager'];

return ConsoleRunner::createHelperSet($entityManager);