<?php

function simpleFunction() {
    echo 'Yo Yo';
}

// simpleFunction();


function sayHellow($name = 'World') {
    echo "Hello $name <br>";
}

// sayHellow();

// returns a value
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

//echo addNumbers(2, 3);

// by reference

$myNum = 10;

function addFive($num) {
    $num += 5;
}

function addTen(&$num) {
    $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";