<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:34
 */

namespace chervon\Application\Contracts;


use chervon\Application\DTO\GeoDTO;
use chervon\Application\DTO\WeatherDTO;

interface IWeatherService
{
    public function getWeather(GeoDTO $geoDTO) : WeatherDTO;
}