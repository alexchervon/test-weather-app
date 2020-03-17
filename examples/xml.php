<?php

require_once __DIR__ . '/../bootstrap/bootstrap.php';

use App\DTO\GeoDTO;
use App\WeatherApplicationFacade;
use App\Services\XMLStorageService;
use App\Constants\FileTypes;

// location: city Perm
$location = new GeoDTO(58.0192548,55.6738898);

/** @var WeatherApplicationFacade $run */
$run = $application
    ->setLocation($location)
    ->setSortDirection([])
    ->store('test.json',FileTypes::XML);