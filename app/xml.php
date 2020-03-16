<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\DTO\GeoDTO;

$t = new GeoDTO(1,2);
print_r($t);

?>