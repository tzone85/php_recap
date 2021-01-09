<?php

$path = 'dir0/dir1/myfile.php';
$file = '../website6/file1.txt';
/*
//return filename
echo basename($path);

// return filename without extension
echo basename($path, '.php');

// return the directory name from the path
echo dirname($path);

// check if file exists
echo file_exists($file);

// get the absolute path
echo realpath($file);

// check to see if file exists
echo file_exists($file);

// check if writable
echo is_writable($file);

// check if readable
echo is_readable($file);

// get file size
echo filesize($file);


// Create a directory
mkdir('testing');


// Delete directory (as long as there's no files within it)
if ((dir('testing'))){
    rmdir('testing');
} else {
    echo "Requested Folder for deletion doesn't exist";
}


// Copy file
echo copy($file, 'file2.txt');


// Rename a file
rename('file2.txt', 'BozzaFile.php');


// Delete file
unlink('BozzaFile.php');


// write from file to string 
echo file_get_contents($file);


// Write a string to a file (replaces what's currently there with the new data)
echo file_put_contents($file, ' Goodbye for now!');


// Write to a file, and append new data
$current = file_get_contents($file);
$current .= ' Hola Hops My Ninjas';

file_put_contents($file, $current);


// Open file for reading  ('r' - read, 'w' - write)
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
*/

// Create a file (file2), Open file for writing

$handle = fopen('file2.txt', 'w');
$text = "John Doe\n";
fwrite($handle, $text);
$text = "Mncedi Mini\n";
fwrite($handle, $text);
fclose($handle);


