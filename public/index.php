<?php

    // FRONT CONTROLLER
    // COMMON SETTING
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    // SYSTEM FILE UPLOAD
    define("ROOT", dirname(__DIR__, 1) . "/src"); 
    //Gets directory with the project, only works with PHP 7.0+
    require_once dirname(__DIR__, 1) . "/vendor/autoload.php";
    // CALLING ROUTER
    $router = new \App\Components\Router();
    $router->run();
