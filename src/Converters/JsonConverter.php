<?php

declare(strict_types=1);

namespace App\Converters;

use App\Contracts\IArrayConverter;

/**
 * Class JsonConverter
 */
class JsonConverter implements IArrayConverter
{
    public function convert(array $array) : string
    {
        return json_encode($array, JSON_PRETTY_PRINT);
    }
}
