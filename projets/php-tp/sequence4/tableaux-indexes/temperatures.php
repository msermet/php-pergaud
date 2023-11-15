<?php

$tempCelcius=[15,14,2,6,98];
$tempFar=[]; // faire tableau far
echo "Les températures en Fahrenheit sont : ";
foreach ($tempCelcius as $far) {
    $far=$far*(9/5)+32;
    $tempFar[]=$far;
    echo $far." ";
}

//foreach ($tempFar as $v) {
//    echo $v." ";                  //TEST TABLEAU FAHRENHEIT
//}