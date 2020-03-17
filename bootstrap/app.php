<?php

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new DI\ContainerBuilder();
$builder->addDefinitions('config.php');

$container = $builder->build();
