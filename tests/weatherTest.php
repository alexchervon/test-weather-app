<?php

declare(strict_types=1);

namespace chervon\weather;

use PHPUnit\Framework\TestCase;

class weatherTest extends TestCase
{
    /**
     * @var WeatherApplicationFacade
     */
    protected $weather;

    protected function setUp() : void
    {
        $this->weather = new WeatherApplicationFacade;
    }

    public function testIsInstanceOfweather() : void
    {
        $actual = $this->weather;
        $this->assertInstanceOf(WeatherApplicationFacade::class, $actual);
    }
}
