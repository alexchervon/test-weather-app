<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 15.03.2020
 * Time: 22:39
 */

namespace App\DTO;

/**
 * Class GeoDTO
 * @package App\DTO
 */
class GeoDTO
{
    private $lat;
    private $lon;

    /**
     * GeoDTO constructor.
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
    public function setLat($value)
    {
        $this->lat = $value;
    }

    /**
     * @param $value
     */
    public function setLon($value)
    {
        $this->lon = $value;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return mixed
     */
    public function getLon()
    {
        return $this->lon;
    }
}