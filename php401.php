<?php

//Calling a function
function welcome(){
    echo "Hi, welcome to Thailand";
}

//calling by value
function sayHi($name, $age){
    echo "$name $age";
}

//Call by Reference
function adder(&$str,&$std1){
    $str = "Call By Reference";
    $std1= "James";
}

//Default  argument Value
function lastName($name="Sakaberg"){
    echo "Hello $name<br />";
}

welcome(); //Calling a function
echo "<br />";
sayHi("Mark", 25); //calling by value
echo "<br />";
sayhi("Jhon", 30); //calling by value
echo "<br />";
adder($str,$std1); //Call by Reference
echo $str," ", $std1;;
echo "<br />";
echo lastName();

