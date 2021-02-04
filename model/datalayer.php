<?php

//328/week5/model/datalayer.php

//Define a function to get data from somewhere

/**
 * Return array of fruits
 * @return string[] fruits
 */
function getFruit() {

    $fruits = array('apple', 'banana', 'orange', 'kiwi', 'lime');
    return $fruits;
}

/**
 * @return int[] Salaries
 */
function getSalary() {
    $salaries = array('Jessica' =>200000, 'Heather' =>250000, 'Blezyl' => 300000);
    return $salaries;
}

function getDesserts() {
    $desserts = array('chocolate' =>'chocolate mousse', 'vanilla' =>'vanilla custard', 'strawberry' => "Strawberry Shortcake");
    return $desserts;
}

