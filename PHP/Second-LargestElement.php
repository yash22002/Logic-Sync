<?php
//Question: Find the Largest Number in an Array

$array = [52,41,98,56,23,12,89,34,67];
$Largest = $array[0];
$SecondLargest = $array[0];
foreach($array as $number){
    if($number > $Largest){
    $SecondLargest = $Largest;
    $Largest = $number;
    }else if($number > $SecondLargest && $number != $Largest){
        $SecondLargest = $number;
    }
}
echo "The Largest Number is: ".$Largest."<br>";
echo "The Second Largest Number is: ".$SecondLargest;
?>