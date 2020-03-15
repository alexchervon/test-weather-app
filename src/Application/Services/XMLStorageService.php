<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:44
 */

namespace chervon\Application\Services;


use chervon\Application\Contracts\IStorageService;
use chervon\Application\DTO\WeatherDTO;

class XMLStorageService implements IStorageService
{
    public function save(WeatherDTO $weatherDTO): bool
    {
        return true;
    }
}