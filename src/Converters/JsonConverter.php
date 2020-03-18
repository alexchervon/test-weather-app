<?php


namespace App\Converters;


use App\Contracts\IArrayConverter;

/**
 * Class JsonConverter
 * @package App\Converters
 */
class JsonConverter implements IArrayConverter
{
    /**
     * @param array $array
     * @return string
     */
    public function convert(array $array):string
    {
        return json_encode($array, JSON_PRETTY_PRINT);
    }
}