<?php

require_once __DIR__ . '/../bootstrap/app.php';

use App\DTO\GeoDTO;
use App\WeatherApplicationFacade;

// location: city Perm
$geoDTOObject = new GeoDTO(58.0192548,55.6738898);
$weatherService = new WeatherApplicationFacade();