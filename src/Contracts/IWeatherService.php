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

/**
 * Interface IWeatherService
 * @package App\Contracts
 */
interface IWeatherService
{
    /**
     * @param GeoDTO $geoDTO
     * @return WeatherDTO
     */
    public function fetchWeather(GeoDTO $geoDTO) : WeatherDTO;
}