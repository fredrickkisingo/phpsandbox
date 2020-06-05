<?php
$people = array('Kevin', 'Jeremy','Sara');
$cars=['Honda', 'Toyota','Ford'];
$cars[3]= 'Chevy';
$cars[]= 'BMW';
//echo $people[0];

//echo count  ($cars);

//print_r($cars);
//var_dump($cars);

//associative
$people =array('Brad' =>35, 'Jose'=>32, 'William'=> 37);

$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

//echo $ids[44];
$people['Jill'] = 42;
//echo $people['Jill'];
//print_r($people);
//var_dump($people);

//multi-dimensional
$cars = array(
    array('Honda',20,10),
    array('Toyota', 30,20),
    array('Mustang',23 ,12)
);
echo $cars[1][2];

?>