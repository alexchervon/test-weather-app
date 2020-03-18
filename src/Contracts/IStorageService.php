<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * Interface IStorageService
 */
interface IStorageService
{
    public function save(string $array, string $path) : bool;
}
