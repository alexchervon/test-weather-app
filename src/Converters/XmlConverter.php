<?php


namespace App\Converters;

use App\Contracts\IArrayConverter;
use SimpleXMLElement;

/**
 * Class XmlConverter
 * @package App\Converters
 */
class XmlConverter implements IArrayConverter
{
    /**
     * @param array $array
     * @return string
     */
    public function convert(array $array):string
    {
        $xml = new SimpleXMLElement('<weather/>');

        array_walk_recursive($array, function($value, $key)use($xml){
            $xml->addChild($key, $value);
        });

        $dom = dom_import_simplexml($xml)->ownerDocument;
        $dom->formatOutput = true;

        return $dom->saveXML();
    }
}