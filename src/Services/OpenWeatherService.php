<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:33
 */

namespace App\Services;


use App\Contracts\IWeatherService;
use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;

class OpenWeatherService implements IWeatherService
{
    public function fetchWeather(GeoDTO $geoDTO): WeatherDTO
    {
        return new WeatherDTO();
    }
}