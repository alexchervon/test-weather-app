<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:45
 */

namespace App\Contracts;


interface IArraySorterService
{
    public function sort(array $array, array $direction):array;
}