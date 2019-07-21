<?php

/*
|--------------------------------------------------------------------------
| Dependency Injection Pattern
|--------------------------------------------------------------------------
|
| One object supplies the dependencies of another object
| This is a more of a manual approach
|
*/

interface GeolocationService {}
class GoogleMaps implements GeolocationService {}
class OpenStreetMap implements GeolocationService {}


class StoreService {

    private $geolocationService;

    public function __construct(GeolocationService $geolocationService) {
        $this->geolocationService = $geolocationService;
    }

    public function getStoreCoordinates($store) {
        return $this->geolocationService->getCoordinatesFromAddress($store->getAddress());
    }
}

$dependency = new GoogleMaps();
$service = new StoreService($dependency);

/*
|--------------------------------------------------------------------------
| Dependency Injection Container (Autowiring)
|--------------------------------------------------------------------------
|
| Uses the pattern of dependency injection but via a container
| This is a more of an automated approach
| Based on the PHP ReflectionClass
|
*/