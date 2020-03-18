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

    public function save(string $string, string $path): bool
    {
        if (!$this->filesystem->has($path)) {
            $this->filesystem->write($path, $string);
        }

        $this->filesystem->update($path, $string);

        return  true;
    }
}