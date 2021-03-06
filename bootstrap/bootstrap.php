<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\WeatherApplicationFacade;

// load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// create DI container
$builder = new DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->useAnnotations(false);
$builder->addDefinitions(__DIR__ . '/config.php');
$container = $builder->build();

$application = new WeatherApplicationFacade($container);
