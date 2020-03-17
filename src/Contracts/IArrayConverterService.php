<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:45
 */

namespace App\Contracts;


interface IArrayConverterService
{
    public function convert(array $array):array;
}