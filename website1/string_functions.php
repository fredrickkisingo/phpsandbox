<?php

#substring
#returns a portion of a string

// $output = substr('Hello', -2);
// echo $output;'

#strlen
#returns the length of a string
// $output = strlen('HelloWorld');
// echo $output;

// $output = strpos('Hello World', 'o');
// echo$output;

#strrpos finds positon of the last occurrence

// $output = strrpos('Hello World', 'o');
// echo$output;

// $text = 'Hello World'
// //
// $trimmed = trim($text);
// var_dump($trimmed);


// $output = ucwords('hello world');
// echo $output;
// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;

#is_string;
#check if string
// $val ='22';
// $output =is_string($val);

// echo $output;

$values = array(true, false, null, 'abc', 43, '33',22.4, '22.4', '', 0, '0');

foreach($values as $value){
    if(is_string($value)){
        echo "{$value} is a string<br>";
    }
}
#gzcompress
$string=
"Possimus nesciunt totam fuga quia quas voluptas saepe et expedita.
Dolores similique occaecati omnis ut optio labore beatae voluptas.
Architecto ut iste nihil in ut enim.
Ipsam porro et.
Unde et modi explicabo deleniti quia aperiam numquam.";

$compressed= gzcompress($string);

$original= gzuncompress($compressed);
echo $original;
?>