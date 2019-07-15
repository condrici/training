<?php

//config
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

/**
 * [0]
 *
 * Type declarations
 * Additions: argument declarations (int, string, float) + return type declarations
 */
class BamBam
{

    public static $age;

    public static function setAge(int $age): int
    {
        self::$age = $age;
        return self::$age;
    }

    public static function getAge(): string
    {
        return "Your age is " . self::$age . PHP_EOL;
    }

}

BamBam::setAge(10);
echo "[0] " . BamBam::getAge() . PHP_EOL . "<br />";

/**
 * [1]
 *
 * Spaceship operator
 * Returns -1,0,1 for <, =, >
 * Example: Validate minimum age
 */
$age_input = 17;
$age_legal = 20;

echo "[1]: " . empty($age_input <=> $age_legal) ?
    '[1] Welcome...' . "<br />" :
    'Please come back in ' . ($age_legal - $age_input) . ' years' . "<br />";

/**
 * [2]
 *
 * Null coalescing operator
 */

$username = $_GET['username'] ?? 'Anonymous';
echo '[2] You are user: ' . $username . "<br/ >";

/**
 * [3]
 *
 * Constant arrays with define (before only const worked)
 */

define('OPTIONS', ['red', 'green', 'blue']);
echo "[3] Selected color: " . OPTIONS[0] . "<br />";

/**
 * [4]
 *
 * Anonymous classes
 */
interface Car {
    public function create(string $model);
}
class CarsFactory {
    private $car;
    public function setCar(Car $car) {
        $this->car = $car;
    }
    public function getCar(): Car {
        return $this->car;
    }
}

$car = new CarsFactory;
$car->setCar(new class implements Car {
    public function create(string $model) {
        echo $model;
    }
});
echo '[4] ';
print_r($car->getCar());
echo "<br />";

/**
 * [5]
 *
 * Unicode codepoint escape syntax
 *
 */
echo "[5] Niceee" . "\u{0021}" . "<br />";

/**
 * [6]
 *
 * Closure::call()
 * Bind an object scope to a closure and invoke it
 */
class MyClass { private $number = 300; }
$test = function() {
    return $this->number;
};
echo '[6] ' . $test->call(new MyClass) . "<br />";

/**
 * [7]
 *
 * Filter unserialize()
 * Choose which classes to unserialize (prevent code injection)
 * Unsafe for user data
 */

class MyClassTwo {
    public $test = "Olee";
}
$data = serialize (new MyClassTwo());
echo "[7] ";
print_r(unserialize($data, ["allowed_classes" => true]));
echo "<br />";

/**
 * [8]
 *
 * IntlChar
 * Requirements: php72-php-intl
 * TODO: Will have to retest, there are some issues with the php module
 */
echo '[8] Intl' . "<br />";
//printf('%x', IntlChar::CODEPOINT_MAX);
//echo IntlChar::charName('@');
//var_dump(IntlChar::ispunct('!'));
//var_dump(extension_loaded('intl'));

/**
 * [9]
 *
 * Expectations
 * Backwards compatible enhancements to assert()
 * TODO: Pending test
 */
echo '[9] Expectations ' . '<br />';
ini_set('assert.exception', 'on');
class CustomError extends AssertionError {}
assert(false, new CustomError('You have a new error!'));

/**
 * [10]
 *
 * Group use declarations
 */

//use {path\to\namespace\{ClassA, ClassB, ClassC as C}
echo "[10] Group use declarations" . "<br />";

/**
 * [11]
 *
 * Generator return expressions
 */

$x = (function() {
    yield 1;
    yield 2;
    return 3;
})();

foreach($x as $val) {
    echo $val . "<br />";
}

echo $x->getReturn() . PHP_EOL;
echo '<br />';

/**
 * [12]
 *
 * Generator delegation
 * Yield values from other generators
 */
echo '[12] <br />';
function gen() {
    yield 1;
    yield 2;
    yield from gen2();
};

function gen2() {
    yield 3;
    yield 4;
};

foreach (gen() as $value) {
    //echo $value;
}

/**
 * [13]
 *
 * Integer division with intdiv()
 */
echo '[13]' . '<br />';
var_dump(intdiv(10,3));

/**
 * [14]
 *
 * Session options
 */
echo '[14]' . "<br />";
session_start([
    'read_and_close' => true
]);