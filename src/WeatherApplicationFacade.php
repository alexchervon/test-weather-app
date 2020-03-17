<?php

declare(strict_types=1);

namespace App;

use App\Contracts\IArrayConverterService;
use App\Contracts\IArraySorterService;
use App\Contracts\IStorageService;
use App\Contracts\IWeatherService;
use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;
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
    private $sorter;

    private $converter;

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
        $this->sorter = $container->get(IArraySorterService::class);
        $this->converter = $container->get(IArrayConverterService::class);
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


    public function store(string $path, string $type):bool
    {
        if (!$this->location || !($this->location instanceof GeoDTO)) {
            throw new InvalidLocationPassed(InvalidLocationPassed::MESSAGE);
        }

        /** @var WeatherDTO $weather */
        $weather = $this->weatherService->fetchWeather($this->location);
        $sortedArray = $this->sorter->sort($weather->getRaw(), $this->direction);
        $convertedArray = $this->converter->convert($sortedArray);

        return $this->storageService->save($convertedArray, $path, $type);
    }
}
