<?php


namespace App\Converters;


use App\Contracts\IArrayConverter;

class JsonConverter implements IArrayConverter
{
    public function convert(array $array):string
    {
        return json_encode($array, JSON_PRETTY_PRINT);
    }
}