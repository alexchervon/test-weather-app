<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\IArraySorterService;

/**
 * Class ArraySorterService
 */
class ArraySorterService implements IArraySorterService
{
    public function sort(array $array, array $direction) : array
    {
        $result = [];

        if (! empty($array) && ! empty($direction)) {
            foreach ($direction as $dirKey) {
                $result[$dirKey] = $array[$dirKey];
            }

            $result = array_merge($result, $array);
        }

        return $result;
    }
}
