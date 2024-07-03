<?php
//Declaring variable

$num1 = 4;
$num2 = 5;
$num3 = 6;

//performing operation using if else 

if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 is the largest number";
} else if ($num2 > $num1 && $num2 > $num3) {
    echo "$num2 is the largest number";
} else {
    echo "$num3 is the largest number";
}

