<?php


// indexed arrays

$people = array('Kevin', 'Thando', 'Mncedi');
$ids = array(23, 53, 12);
$cars = ['honda', 'Toyota', 'kia'];
$cars[3] = 'Jagua';
$cars[] = 'Masdang';

// print_r($cars);
//var_dump($cars);
// echo count($cars);


//Associative Arrays
$people = [
    'Brad' => 35,
    'Jose' => 32,
    'William' => 38
];
$ids = [
    22 => 'Brad',
    44 => 'Jose',
    63 => 'William'
];

// echo $people['Brad'];
// echo $ids[22];
// print_r($people);

// Multi-Dimensional
$cars = [
    array('Honda', 20, 40),
    array('Toyota', 30, 20),
    array('Jagua', 23, 12)
];

echo $cars[1][2];