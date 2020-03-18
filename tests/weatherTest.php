<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;

class weatherTest extends TestCase
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
