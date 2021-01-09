<?php
// change cookie to Frank
setcookie('username', 'Frank', time()+(86400 * 30)); //expires in 1 day


// delete cookie (change time to the passed)
setcookie('username', 'Frank', time() - 3600);

if (count($_COOKIE) > 0 ) {
    echo 'There are '.count($_COOKIE).' cookies saved<br>';
} else {
    echo 'Three are no cookies saved';
}

if (isset($_COOKIE['username'])){
    echo 'User '.$_COOKIE['username']. ' is set <br>';
} else {
    echo 'User is not set';
}