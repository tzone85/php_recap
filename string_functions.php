<?php

#substr()
#returns a portion of a string

// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);

// echo $output;

#strlen()
#returns a length of string

// $output = strlen('Hello Mncedi');
// echo $output;

#strpos()
#Findes the position of the first occurence of a sub string

// $output = strpos('Hello Mncedi Mfondini', 'M');
// echo $output;

#strrpos()
#Finds the last position of the sub string

// $output = strrpos('Hello Mncedi Mfondini', 'M');
// echo $output;

#trim()
#Strips white space

// $text = 'Sawbona Mfo Ka Bawo                                ';
// var_dump($text);

// $trimmed = trim($text);
// var_dump($trimmed);

#strtoupper
#Makes everything to uppercase

// $output = strtoupper('Sawbona Nantsika');
// echo $output;

#strtolower
#Makes everything into lower case

// $output = strtolower('AWE, OLA, HOPS');
// echo $output;

#ucfirst
#Makes the first word only, a capital letter 

// $output = ucfirst('this is a definite test');
// echo $output;

#ucwords
#makes every word a capital letter
// $output = ucwords('A test of upper case every word');
// echo $output;

#str_replace()
#Replace all occurences of a search string with the replacement

// $text = 'Hello Mncedi';
// $output = str_replace('Mncedi', 'Dishman', $text);

// echo $output;

#is_string()
#check if string

// $val = 'Hello';
// $output = is_string($val);
// echo $output;

// $values = [true, false, null, 'abc', 33, '33', 2.22, '2.22', '', ' ', 0, '0'];

// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "{$value} is a string <br>";
//     }
// }

#gzcompress()
#compress a string

$string = " Jan  1 23:49:24 2021] ::1:55600 [200]: /string_functions.php  
Jan  1 23:50:09 2021] ::1:55599 [200]: /string_functions.php  
Jan  1 23:50:28 2021] ::1:55624 [200]: /string_functions.php  
Jan  1 23:50:35 2021] ::1:55634 [200]: /string_functions.php  
Jan  1 23:51:29 2021] ::1:55638 [200]: /string_functions.php  
Jan  1 23:52:35 2021] ::1:55704 [200]: /string_functions.php  
Jan  1 23:54:00 2021] ::1:55748 [200]: /string_functions.php  
Jan  1 23:55:12 2021] ::1:55788 [200]: /string_functions.php  
Jan  1 23:56:27 2021] ::1:55826 [200]: /string_functions.php  
Jan  1 23:57:30 2021] ::1:55858 [200]: /string_functions.php  
Jan  1 23:58:00 2021] ::1:55859 [200]: /string_functions.php  
Jan  1 23:58:01 2021] ::1:55873 [200]: /string_functions.php  
Jan  1 23:58:07 2021] ::1:55875 [200]: /string_functions.php  
Jan  1 23:58:07 2021] ::1:55878 [404]: /favicon.ico - No such 
Jan  1 23:58:10 2021] ::1:55882 [200]: /string_functions.php  
Jan  1 23:58:10 2021] ::1:55881 [404]: /favicon.ico - No such 
Jan  1 23:58:12 2021] ::1:55885 [200]: /string_functions.php  
Jan  1 23:58:26 2021] ::1:55884 [200]: /string_functions.php  
Jan  1 23:59:05 2021] ::1:55892 [200]: /string_functions.php  
Jan  1 23:59:15 2021] ::1:55913 [200]: /string_functions.php  
Jan  2 00:00:47 2021] ::1:55967 [200]: /string_functions.php  
Jan  2 00:42:29 2021] ::1:57218 [200]: /string_functions.php  
Jan  2 00:43:09 2021] ::1:57217 [200]: /string_functions.php  
Jan  2 00:44:51 2021] ::1:57305 [200]: /string_functions.php  
Jan  2 00:45:09 2021] ::1:57306 [200]: /string_functions.php  
Jan  2 00:47:00 2021] ::1:57375 [200]: /string_functions.php  
Jan  2 00:48:05 2021] ::1:57412 [200]: /string_functions.php  
Jan  2 00:48:12 2021] ::1:57411 [200]: /string_functions.php  
Jan  2 00:48:21 2021] ::1:57416 [200]: /string_functions.php  
Jan  2 00:52:01 2021] ::1:57537 [200]: /string_functions.php  
Jan  2 00:52:34 2021] ::1:57536 [200]: /string_functions.php";

$compressed = gzcompress($string);
echo $compressed;
"<br>";
$original = gzuncompress($compressed);
echo $original;