<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * Interface IArrayConverterService
 */
interface IArrayConverterService
{
    public function convertToJson(array $array);

    public function convertToXml(array $array);
}
