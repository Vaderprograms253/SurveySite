<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the necessary files
require_once('vendor/autoload.php');


//Start a session
session_start();

$f3 = Base::instance();
$con = new Controller($f3);

$f3->route('GET /', function () {
    $GLOBALS['con']->home();
});

//route to login page from nav
$f3->route('GET|POST /login', function () {
    $GLOBALS['con']->login();
});


//route to review page
$f3->route('GET /review', function () {
    $GLOBALS['con']->reviews();
});

//route to home page from nav
$f3->route('GET /home', function () {
   $GLOBALS['con']->home();
});

//route to loggedIn page from nav
$f3->route('GET /logout', function () {
    $GLOBALS['con']->logout();
});

//route to new user page from nav
$f3->route('GET|POST /newUser', function () {
    $GLOBALS['con']->newUser();
});

//route to new user page from nav
$f3->route('GET /addReview', function () {
    $GLOBALS['con']->addReview();
});

$f3 ->run();