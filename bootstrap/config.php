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

return [
    IWeatherService::class => DI\create(OpenWeatherService::class),
    IStorageService::class => DI\factory(function (ContainerInterface $container) {

        $adapter = new Local(__DIR__);
        $fileSystem = new Filesystem($adapter);;

        return new StorageService($fileSystem);
    }),
    IArrayConverterService::class => DI\create(ArrayConverterService::class),
];