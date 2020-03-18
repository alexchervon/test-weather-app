<?php

declare(strict_types=1);

namespace App\DTO;

/**
 * Class BaseEntity
 */
abstract class BaseEntity
{
    abstract public function toArray() : array;
}
