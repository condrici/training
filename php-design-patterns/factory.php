<?php

/*
|--------------------------------------------------------------------------
| Factory Pattern
|--------------------------------------------------------------------------
|
| The factory pattern works as on would expect, as a factory
| There are two classes, the factory and the manufactured product (yacht)
| The factory creates an instance of a the 'manufactured product'
|
*/

$yacht = (new YachtFactory)->create('Benetti', 'Big Five');
echo $yacht->getMakeAndModel();


class YachtFactory {

    final static function create($make, $model): Yacht {
        return new Yacht($make, $model);
    }

}

class Yacht {

    private $make;
    private $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getMakeAndModel() {
        return $this->make . ' ' . $this->model;
    }

}