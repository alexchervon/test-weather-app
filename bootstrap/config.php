<?php
use App\WeatherApplicationFacade;
use Psr\Container\ContainerInterface;
use App\Services\OpenWeatherService;

return [
    WeatherApplicationFacade::class => DI\factory(function (\App\Contracts\IWeatherService $c) {
        return new OpenWeatherService();
    }),
];