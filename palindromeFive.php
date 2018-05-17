<?php
$sum = 0;
echo "enter a five digit nunber:";
$number = trim(fgets(STDIN));

$digit1 = intval($number/10000);

$r1 = $number % 10000;

$digit2 = intval($r1/1000);

$r2 = $r1 % 1000;

$digit3 = intval($r2/100);

$r3 = $r2 % 100;

$digit4 = intval($r3/10);

$digit5 = $r3 % 10;


$sum =  $digit1 + $digit2 + $digit3 + $digit4 + $digit5;

$reverse = ($digit5 * 10000) + ($digit4 * 1000) + ($digit3 * 100) + ($digit2 * 10) + $digit1;

if($number == $reverse){
  echo $number. " is a palindrome number."."\n";
}else {
  echo $number. " is not a palindrome number.";
}
echo "Sum of five digits is: ". $sum;
?>
