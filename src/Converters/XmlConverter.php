<?php

declare(strict_types=1);

namespace App\Converters;

use App\Contracts\IArrayConverter;
use SimpleXMLElement;

/**
 * Class XmlConverter
 */
class XmlConverter implements IArrayConverter
{
    public function convert(array $array) : string
    {
        $xml = new SimpleXMLElement('<weather/>');

        array_walk_recursive($array, function ($value, $key) use ($xml) : void {
            $xml->addChild($key, $value);
        });

        $dom = dom_import_simplexml($xml)->ownerDocument;
        $dom->formatOutput = true;

        return $dom->saveXML();
    }
}
