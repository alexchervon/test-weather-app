<?php

use App\Contracts\IStorageService;
use App\Contracts\IWeatherService;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use App\Services\OpenWeatherService;
use Psr\Container\ContainerInterface;
use App\Services\StorageService;
use App\Contracts\IArrayConverterService;
use App\Services\ArrayConverterService;
use App\Contracts\IArraySorterService;
use App\Services\ArraySorterService;
use GuzzleHttp\Client;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Cmfcmf\OpenWeatherMap;

return [
    IWeatherService::class => DI\factory(function (ContainerInterface $container) {

        $httpRequestFactory = new RequestFactory();
        $httpClient = GuzzleAdapter::createWithConfig([]);

        $openWeatherClient = new OpenWeatherMap(getenv('OPEN_WEATHER_API_SECRET_KEY'), $httpClient, $httpRequestFactory);
        $sevice = new OpenWeatherService($openWeatherClient);

        return $sevice;
    }),
    IStorageService::class => DI\factory(function (ContainerInterface $container) {

        $adapter = new Local(__DIR__ . '/../');
        $fileSystem = new Filesystem($adapter);;

        return new StorageService($fileSystem);
    }),
    IArraySorterService::class => DI\create(ArraySorterService::class),
];