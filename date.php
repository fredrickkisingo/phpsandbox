<?php
//echo date('Y');

//echo date('m-d-Y');

//echo date('i'); //min

//set time zone
date_default_timezone_set('Africa/Nairobi');
// echo date('h:i:sa');

$timestamp = mktime(10,14,54,8,10,1981);

echo date('m/d/Y', $timestamp);

echo $timestamp2;

echo date();

?>
