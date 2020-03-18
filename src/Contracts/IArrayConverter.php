<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * Interface IArrayConverter
 */
interface IArrayConverter
{
    public function convert(array $array) : string;
}
