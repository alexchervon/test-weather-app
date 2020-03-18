<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:45
 */

namespace App\Contracts;

/**
 * Interface IArrayConverterService
 * @package App\Contracts
 */
interface IArrayConverterService
{
    /**
     * @param array $array
     * @return mixed
     */
    public function convertToJson(array $array);

    /**
     * @param array $array
     * @return mixed
     */
    public function convertToXml(array $array);
}