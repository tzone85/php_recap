<?php

// echo date('d');          //Day
// echo date('m');          //Month
// echo date('Y');          //Year
// echo date('l');             //Day of the week

// echo date('Y/m/d');
// echo date('m-d-Y');

// echo date('h');          //hours
// echo date('i');          //min
// echo date('s');          //seconds
// echo date('a');             //AM or PM

// set Time Zone

date_default_timezone_set('Africa/Johannesburg');

// echo date('h:i:s a');

$timestamp = mktime(12, 15, 44, 4, 27, 1985);
// echo $timestamp;

// echo date('m/d/Y h:i:sa', $timestamp);

$timestamp2 = strtotime('12:15pm 27 April 2021');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next sunday');
$timestamp5 = strtotime('+2months');
// echo $timestamp2;

echo date('m-d-Y h:i:s a', $timestamp5);