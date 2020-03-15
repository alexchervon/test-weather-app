<?php

declare(strict_types=1);

namespace chervon\weather;

use chervon\Application\Contracts\IStorageService;
use chervon\Application\Contracts\IWeatherService;
use chervon\Application\DTO\GeoDTO;
use chervon\Application\DTO\WeatherDTO;
use chervon\Exception\InvalidDTOPassed;
use chervon\weather\Exception\LogicException;

class WeatherApplicationFacade
{
    private $weatherService;
    private $geoDTO;

    public function __construct(IWeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
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
            $weather = $this->weatherService->getWeather($this->geoDTO);
            $storageService->save($weather,$path);
        }

        throw new InvalidDTOPassed(InvalidDTOPassed::MESSAGE);
    }
}
