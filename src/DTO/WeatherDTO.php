<?php

declare(strict_types=1);

namespace App\DTO;

/**
 * Class WeatherDTO
 */
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

    /**
     * WeatherDTO constructor.
     */
    public function __construct(
        string $city,
        float $temperature,
        float $humidity,
        float $pressure,
        float $windSpeed,
        float $windDirection,
        float $clouds,
        float $precipitation,
        float $sun,
        string $weather,
        float $date
    ) {
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

    public function toArray() : array
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
