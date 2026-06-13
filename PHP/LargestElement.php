<?php

//Question: Find the Largest Number in an Array
$array =[10,60,85,63,47,21];
$largest = $array[0];
foreach($array as $value){
    if($value > $largest){
        $largest = $value;
    }
}
echo "The largest number in the array is: " . $largest;
?>