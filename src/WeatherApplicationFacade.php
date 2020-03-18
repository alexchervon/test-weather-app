<?php

declare(strict_types=1);

namespace App;

use App\Contracts\IArrayConverterService;
use App\Contracts\IArraySorterService;
use App\Contracts\IStorageService;
use App\Contracts\IWeatherService;
use App\Converters\IArrayConverter;
use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;
use App\Exception\InvalidArrayConverterPassed;
use App\Exception\InvalidLocationPassed;
use Psr\Container\ContainerInterface;

class WeatherApplicationFacade
{
    /**
     * @var IWeatherService
     */
    private $weatherService;

    /**
     * @var IStorageService
     */
    private $storageService;

    /**
     * @var IArraySorterService
     */
    private $sorterService;

    /**
     * @var IArrayConverter
     */
    private $arrayConverter;

    /**
     * @var GeoDTO
     */
    private $location;

    /**
     * @var array
     */
    private $direction = [];


    public function __construct(ContainerInterface $container)
    {
        $this->weatherService = $container->get(IWeatherService::class);
        $this->storageService = $container->get(IStorageService::class);
        $this->sorterService = $container->get(IArraySorterService::class);
    }

    public function setLocation(GeoDTO $location)
    {
        $this->location = $location;

        return $this;
    }

    public function setSortDirection(array $direction)
    {
        $this->direction = $direction;

        return $this;
    }

    public function setArrayConverter(string $arrayConverter)
    {
        $this->arrayConverter = new $arrayConverter;

        return $this;
    }


    public function store(string $path):bool
    {
        if (!$this->location || !($this->location instanceof GeoDTO)) {
            throw new InvalidLocationPassed(InvalidLocationPassed::MESSAGE);
        }

        if (!$this->arrayConverter) {
            throw new InvalidArrayConverterPassed(InvalidArrayConverterPassed::MESSAGE);
        }

        /** @var WeatherDTO $weather */
        $weather = $this->weatherService->fetchWeather($this->location);
        $sortedArray = $this->sorterService->sort($weather->toArray(), $this->direction);
        $convertedArray = $this->arrayConverter->convert($sortedArray);

        return $this->storageService->save($convertedArray, $path);
    }
}
