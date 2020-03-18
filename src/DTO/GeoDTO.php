<?php

declare(strict_types=1);

namespace App\DTO;

/**
 * Class GeoDTO
 */
class GeoDTO
{
    private $lat;
    private $lon;

    /**
     * GeoDTO constructor.
     *
     * @param $lat
     * @param $lon
     */
    public function __construct($lat, $lon)
    {
        $this->setLat($lat);
        $this->setLon($lon);
    }

    /**
     * @param $value
     */
    public function setLat($value) : void
    {
        $this->lat = $value;
    }

    /**
     * @param $value
     */
    public function setLon($value) : void
    {
        $this->lon = $value;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function getLon()
    {
        return $this->lon;
    }
}
