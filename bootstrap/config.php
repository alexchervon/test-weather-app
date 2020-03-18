<?php

declare(strict_types=1);

use App\Contracts\IArraySorterService;
use App\Contracts\IStorageService;
use App\Contracts\IWeatherService;
use App\Services\ArraySorterService;
use App\Services\OpenWeatherService;
use App\Services\StorageService;
use Cmfcmf\OpenWeatherMap;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Factory\Guzzle\RequestFactory;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Psr\Container\ContainerInterface;

return [
    IWeatherService::class => DI\factory(function (ContainerInterface $container) {
        $httpRequestFactory = new RequestFactory();
        $httpClient = GuzzleAdapter::createWithConfig([]);

        $openWeatherClient = new OpenWeatherMap(getenv('OPEN_WEATHER_API_SECRET_KEY'), $httpClient, $httpRequestFactory);

        return new OpenWeatherService($openWeatherClient);
    }),
    IStorageService::class => DI\factory(function (ContainerInterface $container) {
        $adapter = new Local(__DIR__ . '/../');
        $fileSystem = new Filesystem($adapter);

        return new StorageService($fileSystem);
    }),
    IArraySorterService::class => DI\create(ArraySorterService::class),
];
