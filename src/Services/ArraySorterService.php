<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:44
 */

namespace App\Services;

use App\Contracts\IArraySorterService;

class ArraySorterService implements IArraySorterService
{
    public function sort(array $array, array $direction): array
    {
        $result = [];

        if (!empty($array) && !empty($direction)) {
            foreach ($direction as $dirKey) {
                $result[$dirKey] = $array[$dirKey];
            }

            $result = array_merge($result, $array);
        }

        return $result;
    }
}