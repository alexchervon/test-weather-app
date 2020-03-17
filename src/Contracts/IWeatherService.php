<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:34
 */

namespace App\Contracts;


use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;

interface IWeatherService
{
    public function fetchWeather(GeoDTO $geoDTO) : WeatherDTO;
}