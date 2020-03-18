<?php

declare(strict_types=1);

namespace App\Exception;

/**
 * Class InvalidLocationPassed
 */
class InvalidLocationPassed extends \Exception
{
    public const MESSAGE = 'Invalid DTO object passed';
}
