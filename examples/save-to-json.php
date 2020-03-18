<?php

declare(strict_types=1);

require_once __DIR__ . '/../bootstrap/bootstrap.php';

use App\Converters\JsonConverter;
use App\DTO\GeoDTO;
use App\WeatherApplicationFacade;

// location: city Perm
$location = new GeoDTO(58.0192548, 55.6738898);

try {
    /** @var WeatherApplicationFacade $run */
    $run = $application
        ->setLocation($location)
        ->setArrayConverter(JsonConverter::class)
        ->setSortDirection(['date', 'temperature', 'wind_direction'])
        ->store('response/open-weather.json');
} catch (\App\Exception\InvalidLocationPassed $e) {
    print_r('Не указана локация');
} catch (\App\Exception\InvalidArrayConverterPassed $e) {
    print_r('Не указан конвертер');
}
