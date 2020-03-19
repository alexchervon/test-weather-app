
# Weather App

It is necessary to implement a functionality that will receive weather information from any public API. He should be able to save the received data in a json and xml format file depending on the file type parameter passed to it.

*Sort for JSON:*

 - Date
 - Temperature
 - Wind Direction
 - e.t.c

*Sort for XML:*

 - Date
 - Wind speed
 - Temperature
 - e.t.c


## Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be:

**Run in this directory:**
```bash
docker-compose up
```

**To build dependencies, do the following:**
```bash
docker exec -it weather-app composer install
```

**Create .env file:**

```bash
docker exec -it weather-app cp .env.example .env
```
**Generate access key for API :**

Open [https://openweathermap.org/api](https://openweathermap.org/api) , register and get a token

**Set API token to env variable :**
```bash
OPEN_WEATHER_API_SECRET_KEY=token_here
```

## How to use?

### Create GeoDTO object, and put the necessary coordinates in it:

```php
<?php

// location: city Perm  
$location = new GeoDTO(58.0192548, 55.6738898);
```


### Select the desired converter

Available converters:

 - JsonConverter
 - XmlConverter

### Choose sort direction

Select the fields that should go first
```php
<?php
/** @var WeatherApplicationFacade $run */  
$run = $application->setSortDirection(['date', 'wind_speed', 'temperature']);
```

### Example save to JSON

```php
<?php  
  
declare(strict_types=1);  
  
require_once __DIR__ . '/../bootstrap/bootstrap.php';  
  
use App\Converters\JsonConverter;  
use App\DTO\GeoDTO;  
use App\WeatherApplicationFacade;  
  
// location: city Perm  
$location = new GeoDTO(58.0192548, 55.6738898);  
  
try {  
  /** @var WeatherApplicationFacade $run */  
  $run = $application  
	  ->setLocation($location)  
	  ->setArrayConverter(JsonConverter::class)  
	  ->setSortDirection(['date', 'temperature', 'wind_direction'])  
	  ->store('response/open-weather.json');  
} catch (\App\Exception\InvalidLocationPassed $e) {  
 print_r('Не указана локация');  
} catch (\App\Exception\InvalidArrayConverterPassed $e) {  
 print_r('Не указан конвертер');  
}
```

### Example save to XML
```php
<?php  
  
declare(strict_types=1);  
  
require_once __DIR__ . '/../bootstrap/bootstrap.php';  
  
use App\Converters\XmlConverter;  
use App\DTO\GeoDTO;  
use App\WeatherApplicationFacade;  
  
// location: city Perm  
$location = new GeoDTO(58.0192548, 55.6738898);  
  
try {  
  /** @var WeatherApplicationFacade $run */  
  $run = $application  
	  ->setLocation($location)  
	  ->setArrayConverter(XmlConverter::class)  
	  ->setSortDirection(['date', 'wind_speed', 'temperature'])  
	  ->store('response/open-weather.xml');  
} catch (\App\Exception\InvalidLocationPassed $e) {  
 print_r('Не указана локация');  
} catch (\App\Exception\InvalidArrayConverterPassed $e) {  
 print_r('Не указан конвертер');  
}
```



## License

This project is licensed under the MIT License