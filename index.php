<?php

//This is my controller

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require
require_once ('vendor/autoload.php');

//Instantiate the F3 Base Class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){
    echo '<h1>Hello Fat-Free!</h1>';
});

//Run Fat-Free
$f3->run();