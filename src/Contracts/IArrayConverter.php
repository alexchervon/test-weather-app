<?php


namespace App\Contracts;


interface IArrayConverter
{
    public function convert(array $array):string;
}