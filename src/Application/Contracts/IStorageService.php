<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:45
 */

namespace chervon\Application\Contracts;


use chervon\Application\DTO\WeatherDTO;

interface IStorageService
{
    public function save(WeatherDTO $weatherDTO, $path):bool;
}