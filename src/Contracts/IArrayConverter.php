<?php


namespace App\Contracts;

/**
 * Interface IArrayConverter
 * @package App\Contracts
 */
interface IArrayConverter
{
    /**
     * @param array $array
     * @return string
     */
    public function convert(array $array):string;
}