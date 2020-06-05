<?php

//$path ='/dir0/dirl/myfile.php';
$file = 'file1.txt';


//echo basename($path);

//return filename without ext
//echo basename($path, '.php');

//return the dir name from path
// echo dirname($path);

//check if file exists
// echo file_exists($file);

//get absolute path
// echo  realpath($file);

//checks to see if file

// echo is_file($file);

//check if a file s writeable

//

//get file size
// echo filesize($file);


//create a  directory

//mkdir('testing');

//remove directory if empty
// 

//copy file

// echo copy('file1.txt','file2.txt');

//renamme file
//rename('file2.txt', 'myfile.txt');

//delete fiel

//unlink('myfile.txt');

//write from file to string

// echo file_get_contents($file);

//write a string to a file

// echo file_put_contents($file, 'Goodbye World');

// $current= file_get_contents($file);

// $current .= 'Goodbye world';

// file_put_contents($file, $current);

//open file for reading
// $handle = fopen($file ,'r');
// $data = fread($handle, filesize($file));

// echo $data;

//open file for writng
$handle = fopen('file2.txt', 'w');
$txt= "Fredrick Kisingo\n";
fwrite($handle,$txt);
$txt= "Steve Njao\n";
fwrite($handle,$txt);
fclose($handle);



?>