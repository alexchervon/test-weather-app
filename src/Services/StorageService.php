<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\IStorageService;
use League\Flysystem\Filesystem;

/**
 * Class StorageService
 */
class StorageService implements IStorageService
{
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * StorageService constructor.
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * @throws \League\Flysystem\FileExistsException
     * @throws \League\Flysystem\FileNotFoundException
     */
    public function save(string $string, string $path) : bool
    {
        if (! $this->filesystem->has($path)) {
            $this->filesystem->write($path, $string);
        }

        $this->filesystem->update($path, $string);

        return  true;
    }
}
