<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:37
 */

namespace App\DTO;


abstract class BaseEntity
{
    public function getRaw():array
    {
        return [];
    }
}