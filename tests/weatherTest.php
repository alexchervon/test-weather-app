<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{
    /**
     * @var WeatherApplicationFacade
     */
    protected $Weather;

    protected function setUp() : void
    {
        $this->Weather = new WeatherApplicationFacade;
    }

    public function testIsInstanceOfWeather() : void
    {
        $actual = $this->Weather;
        $this->assertInstanceOf(WeatherApplicationFacade::class, $actual);
    }
}
