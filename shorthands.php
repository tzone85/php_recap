<?php

$loggedIn = true;
$arr = [1,2,3,4,5,6];
/*
// if ($loggedIn) {
//     echo "You are logged in";
// } else {
//     echo "You are not logged in";
// }

// echo ($loggedIn) ? "You are logged in" : "You are not logged in";

$isRegistered = ($loggedIn == true) ? true : false;
// echo $isRegistered;

$age = 8;
$score = 5;

echo "your score is: ".($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average2'));

*/

?>

<div>
    <?php if ($loggedIn)  {?>
        <h1>Welcome User</h1>
    <?php } else {?>
        <h1>User not Logged In</h1>
    <?php } ?>
</div>

<div>
        <?php if($loggedIn): ?>
            <h1>LoggedIn</h1>
        <?php else: ?>
            <h1>Not Logged In</h1>
        <?php endif ?>
</div>

<div>
            <?php foreach($arr as $item): ?>
                <?php echo $item; ?>
            <?php endforeach; ?>
</div>

<div>
            <?php for($i = 0; $i < 10; $i++): ?>
                <li><?php echo $i; ?></li>
            <?php endfor; ?>
</div>