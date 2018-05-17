<?php
$sum = 0;
echo "enter nunber:";
$number = trim(fgets(STDIN));

$digit1 = intval($number/1000);

$r1 = $number % 1000;

$digit2 = intval($r1/100);

$r2 = $r1 % 100;

$digit3 = intval($r2/10);

$digit4 = $r2 % 10;
$sum =  $digit1 + $digit2 + $digit3 + $digit4;

echo "Sum of 4 digits is: ". $sum;
?>
