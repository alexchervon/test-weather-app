<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\IWeatherService;
use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\CurrentWeather;

/**
 * Class OpenWeatherService
 */
class OpenWeatherService implements IWeatherService
{
    /**
     * @var OpenWeatherMap
     */
    private $client;

    /**
     * OpenWeatherService constructor.
     */
    public function __construct(OpenWeatherMap $client)
    {
        $this->client = $client;
    }

    /**
     * @throws OpenWeatherMap\Exception
     */
    public function fetchWeather(GeoDTO $geoDTO) : WeatherDTO
    {
        $response = $this->client->getWeather([
            'lat' => $geoDTO->getLat(),
            'lon' => $geoDTO->getLon()
        ], 'metric');

        return $this->constructDTO($response);
    }

    /**
     * @return WeatherDTO
     */
    private function constructDTO(CurrentWeather $weather)
    {
        return new WeatherDTO(
            $weather->city->name,
            $weather->temperature->getValue(),
            $weather->humidity->getValue(),
            $weather->pressure->getValue(),
            $weather->wind->speed->getValue(),
            $weather->wind->direction->getValue(),
            $weather->clouds->getValue(),
            $weather->precipitation->getValue(),
            $weather->sun->rise->getTimestamp(),
            $weather->weather->description,
            $weather->lastUpdate->getTimestamp()
        );
    }
}
