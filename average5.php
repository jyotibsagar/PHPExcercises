<?php 

$sum = 0;

$number = array();

echo "Enter the numbers: " ;

for ($i = 0; $i <5; $i++) 

{
 
$number[$i] = trim(fgets(STDIN));
$sum = $sum +  $number[$i] ;

}

$average = $sum/5;

echo  "Average of 5 numbers you entered is " . $average; sleep(5);


?>
