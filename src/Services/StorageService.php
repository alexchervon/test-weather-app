<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:44
 */

namespace App\Services;


use App\Contracts\IStorageService;
use League\Flysystem\Filesystem;

class StorageService implements IStorageService
{
    private $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function save(array $array, string $path, string $type): bool
    {
        $this->filesystem->write($path,json_encode($array));

        return  true;
    }
}