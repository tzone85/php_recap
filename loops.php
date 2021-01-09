<?php
// for, while, do-while, foreach.

// for ($i = 0; $i < 10; $i++) {
//     echo "Number: ".$i;
//     echo "<br>";
// }

// while

// $i = 0;

// while($i < 10) {
//     echo $i;
//     echo "<br>";
//     $i++;
// }

// $i = 0;

// do{
//     echo "Number: ".$i;
//     echo '<br>';
//     $i++;
// }while( $i < 10 );

// foreach (meant for arrays)
// indexed array

// $people = ['Thando', 'Mncedi', 'Mini', 'Sompbolo'];
// foreach($people as $person){
//     echo $person;
//     echo '<br>';
// }

// associative arrays

$people = [
    'Thando' => 'thando@mail.com',
    'Mncedi' => 'mncedi@mail.co.za', 
    'Mini'=> 'mini@mail.co.za', 
    'Sompbolo' => 'sompbolo@github.com'
];

foreach($people as $person => $email) {
    echo $person. ': '.$email;
    echo '<br>';
}