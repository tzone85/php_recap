<?php

/**
 * ==
 * ===
 * >
 * <
 * <=
 * >=
 * !=
 * !==
 */
$num = '5';
 /*
 
 if ($num === 5) {
     echo '5 passed';
 } else {
     echo 'did not pass';
 }
*/

/*
if ($num > 4 OR $num < 10) {
    echo "$num passed";
}
*/

$favColor = 'red';

switch($favColor) {
    case 'blue':
        echo "Your fav colour is blue";
        break;
    
    case 'red':
        echo 'You fav colour is red';
        break;

    default:
        echo "You don't have a fav colour";
}

