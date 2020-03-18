<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:33
 */

namespace App\Services;


use App\Contracts\IWeatherService;
use App\DTO\GeoDTO;
use App\DTO\WeatherDTO;
use GuzzleHttp\ClientInterface;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\CurrentWeather;

/**
 * Class OpenWeatherService
 * @package App\Services
 */
class OpenWeatherService implements IWeatherService
{
    /**
     * @var OpenWeatherMap
     */
    private $client;

    /**
     * OpenWeatherService constructor.
     * @param OpenWeatherMap $client
     */
    public function __construct(OpenWeatherMap $client)
    {
        $this->client = $client;
    }

    /**
     * @param GeoDTO $geoDTO
     * @return WeatherDTO
     * @throws OpenWeatherMap\Exception
     */
    public function fetchWeather(GeoDTO $geoDTO): WeatherDTO
    {
        $response = $this->client->getWeather([
            'lat' => $geoDTO->getLat(),
            'lon' => $geoDTO->getLon()
        ], 'metric');

        return $this->constructDTO($response);
    }

    /**
     * @param CurrentWeather $weather
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