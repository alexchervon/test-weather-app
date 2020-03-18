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

/**
 * Class StorageService
 * @package App\Services
 */
class StorageService implements IStorageService
{
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * StorageService constructor.
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * @param string $string
     * @param string $path
     * @return bool
     * @throws \League\Flysystem\FileExistsException
     * @throws \League\Flysystem\FileNotFoundException
     */
    public function save(string $string, string $path): bool
    {
        if (!$this->filesystem->has($path)) {
            $this->filesystem->write($path, $string);
        }

        $this->filesystem->update($path, $string);

        return  true;
    }
}