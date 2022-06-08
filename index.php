<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');
require 'config.php';

$f3 = Base::instance();
$con = new Controller($f3);

$f3->route('GET /', function () {
    $GLOBALS['con']->home();
});

//route to login page from nav
$f3->route('GET /login', function () {
    $GLOBALS['con']->login();
});


//route to review page
$f3->route('GET /review', function () {
    $GLOBALS['con']->reviews();
});

//route to home page from nav
$f3->route('GET /home', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});


//route to loggedIn page from nav
$f3->route('GET /loggedIn', function () {
    $view = new Template();
    echo $view->render('loggedIn.php');
});

$f3 ->run();