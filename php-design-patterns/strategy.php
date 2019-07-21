<?php

/*
|--------------------------------------------------------------------------
| Strategy Pattern [1]
|--------------------------------------------------------------------------
|
| You encapsulate specific families of algorithms allowing the client class
| responsible for instantiating a particular algorithm to have no knowledge
| of the actual implementation.
| Various implementations
|
*/

interface Human {
    public function getHands();
    public function getLegs();
}

class Man implements Human {
    public function getHands() { return 2;}
    public function getLegs()  { return 2;}
}

class Woman implements Human {
    public function getHands() { return 2;}
    public function getLegs()  { return 2;}
}

/*
|--------------------------------------------------------------------------
| Strategy Pattern [2]
|--------------------------------------------------------------------------
|
| You encapsulate specific families of algorithms allowing the client class
| responsible for instantiating a particular algorithm to have no knowledge
| of the actual implementation.
| Various implementations
|
*/

$client = new SomeClient();

// Want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();

// Want some JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();


interface OutputInterface {
    public function load();
}

class ArrayOutput implements OutputInterface {
    public function load() { return $arrayOfData; }
}

class JsonStringOutput implements OutputInterface {
    public function load() { return json_encode($arrayOfData); }
}


class SomeClient {

    private $output;

    public function setOutput(OutputInterface $outputType) {
        $this->output = $outputType;
    }

    public function loadOutput() {
        return $this->output->load();
    }
}

