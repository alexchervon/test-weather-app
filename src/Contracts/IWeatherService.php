<?php

declare(strict_types=1);

namespace App\Contracts;

use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;

/**
 * Interface IWeatherService
 */
interface IWeatherService
{
    public function fetchWeather(GeoDTO $geoDTO) : WeatherDTO;
}
