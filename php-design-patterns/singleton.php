<?php

/*
|--------------------------------------------------------------------------
| Singleton Pattern
|--------------------------------------------------------------------------
|
| The singleton pattern allows access only to one instance of a class
| Often used for databases, to keep the connection active
| It reduces testability since it induces a global state
|
*/

$instance = Database::getInstance();

class Database {

    private static $instance = null;

    protected function __construct() {
        //database connection
    }

    public static function getInstance() {
        if (self::$instance) {
            return self::$instance;
        }

        return new Database();
    }

}