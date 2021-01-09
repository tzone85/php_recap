<?php

    $user = ['name' => 'Thando', 'email'=>'thando@mail.com', 'age'=>35];

    $user = serialize($user);
    // echo $user.'<br>';
    setcookie('user', $user, time()+(86400 + 30));

    $user = unserialize($_COOKIE['user']);

    // echo $user['email'];

    print_r($user);