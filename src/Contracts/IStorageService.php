<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:45
 */

namespace App\Contracts;


use App\DTO\WeatherDTO;

interface IStorageService
{
    public function save(string $array, string $path):bool;
}