<?php

/*
|--------------------------------------------------------------------------
| Front Controller Pattern
|--------------------------------------------------------------------------
|
| The front controller pattern is where you have a single entrance point
| for your web application (e.g. index.php or action.php)
| It encourages modular code and gives you a central place to hook in code
| php7 code here
|
*/

$requested_page = $_GET['page'] ?? 'home';

switch($requested_page) {
    case "blog":
        include(__DIR__ ."/blog.php");
        break;
    case "home":
        include(__DIR__."/home.php");
        break;
    default:
    include(__DIR__."/404.php");
}
