<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:37
 */

namespace App\DTO;

/**
 * Class BaseEntity
 * @package App\DTO
 */
abstract class BaseEntity
{
    /**
     * @return array
     */
    abstract public function toArray():array;
}