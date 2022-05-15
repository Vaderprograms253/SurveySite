<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');

});

//route to review page
$f3->route('GET /review', function () {
    $view = new Template();
    echo $view->render('views/reviews.html');

});

//route to home page from nav
$f3->route('GET /home', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

//route to login page from nav
$f3->route('GET /login', function () {
    $view = new Template();
    echo $view->render('login.php');
});

//route to loggedIn page from nav
$f3->route('GET /loggedIn', function () {
    $view = new Template();
    echo $view->render('loggedIn.php');
});

$f3 ->run();