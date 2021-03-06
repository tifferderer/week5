<?php

//This is my CONTROLLER

//Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);


//Require the autoload file
require_once('vendor/autoload.php');
require_once ('model/datalayer.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function($f3) {

    //save variables
    $f3->set('username', "jshmo");
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('veggies', array('carrot', 'potato'));

    $f3->set('color', 'purple');
    $f3->set('radius', 10);

    $f3->set('fruits', getFruit());
    $f3->set('salaries', getSalary());
    $f3->set('desserts', getDesserts());

    $f3->set('num', 10);
    $f3->set('customer', true);



     $view = new Template();
    echo $view->render('view/home.html');
});

//Run fat free
$f3->run();