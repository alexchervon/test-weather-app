<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:44
 */

namespace App\Services;


use App\Contracts\IStorageService;
use App\DTO\WeatherDTO;

class XMLStorageService implements IStorageService
{
    public function save(WeatherDTO $WeatherDTO, $path): bool
    {
        return true;
    }
}