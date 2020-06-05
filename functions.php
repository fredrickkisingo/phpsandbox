<?php

//block of code that can be repeatedly called
/*
camel case -myFunction()
lower case



*/

//heree you creating
function simpleFunction(){
  echo 'Hello World';
}
// //here you running simple function
// simpleFunction();

function sayHello($name ='World'){
    echo "Hello $name<br>";
}

// sayHello('Joe');
// sayhello('Bob');


//Return Value
function addNumbers($num1,$num2){
    return $num1+$num2;

}
//echo addNumbers(2,3);

//by reference
$myNum =10;
function addFive($myNum){
    $myNum+= 5;
}
function addTen(&$num){
    $num+=10;
}
addFive($myNum);
echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";
?>