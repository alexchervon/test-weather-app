<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 23:17
 */

namespace chervon\Exception;


class InvalidDTOPassed extends \Exception
{
    public const MESSAGE = 'Invalid DTO object passed';
}