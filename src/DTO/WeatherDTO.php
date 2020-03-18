<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:35
 */

namespace App\DTO;


class WeatherDTO extends BaseEntity
{
    private $city;
    private $temperature;
    private $humidity;
    private $pressure;
    private $windSpeed;
    private $windDirection;
    private $clouds;
    private $precipitation;
    private $sun;
    private $weather;
    private $date;

    public function __construct(
        string $city,
        string $temperature,
        string $humidity,
        string $pressure,
        string $windSpeed,
        string $windDirection,
        string $clouds,
        string $precipitation,
        string $sun,
        string $weather,
        string $date
    )
    {
        $this->city = $city;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->windSpeed = $windSpeed;
        $this->windDirection = $windDirection;
        $this->clouds = $clouds;
        $this->precipitation = $precipitation;
        $this->sun = $sun;
        $this->weather = $weather;
        $this->date = $date;
    }

    public function toArray(): array
    {
        return [
            'city' => $this->city,
            'temperature' => $this->temperature,
            'humidity' => $this->humidity,
            'pressure' => $this->pressure,
            'wind_speed' => $this->windSpeed,
            'wind_direction' => $this->windDirection,
            'clouds' => $this->clouds,
            'precipitation' => $this->precipitation,
            'sun' => $this->sun,
            'weather' => $this->weather,
            'date' => $this->date
        ];
    }
}