<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:45
 */

namespace App\Contracts;

/**
 * Interface IArraySorterService
 * @package App\Contracts
 */
interface IArraySorterService
{
    /**
     * @param array $array
     * @param array $direction
     * @return array
     */
    public function sort(array $array, array $direction):array;
}