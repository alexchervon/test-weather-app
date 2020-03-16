<?php

declare(strict_types=1);

namespace App;

use App\Contracts\IStorageService;
use App\Contracts\IWeatherService;
use App\DTO\GeoDTO;
use App\Exception\InvalidDTOPassed;

class WeatherApplicationFacade
{
    private $WeatherService;
    private $geoDTO;

    public function __construct(IWeatherService $WeatherService)
    {
        $this->WeatherService = $WeatherService;
    }

    public function setGeo(GeoDTO $geoDTO)
    {
        $this->geoDTO = $geoDTO;

        return $this;
    }

    /**
     * @param IStorageService $storageService
     * @param $path
     * @param $sort
     * @throws InvalidDTOPassed
     */
    public function save(IStorageService $storageService, $path, $sort)
    {
        if ($this->geoDTO instanceof GeoDTO) {
            $Weather = $this->WeatherService->getWeather($this->geoDTO);
            $storageService->save($Weather,$path);
        }

        throw new InvalidDTOPassed(InvalidDTOPassed::MESSAGE);
    }
}
