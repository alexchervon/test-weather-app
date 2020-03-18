<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * Interface IArraySorterService
 */
interface IArraySorterService
{
    public function sort(array $array, array $direction) : array;
}
