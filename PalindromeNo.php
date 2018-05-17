<?php
echo "enter a four digit nunber:";
$number = trim(fgets(STDIN));

$digit1 = intval($number/1000);

$r1 = $number % 1000;

$digit2 = intval($r1/100);

$r2 = $r1 % 100;

$digit3 = intval($r2/10);

$digit4 = $r2 % 10;
$sum =  $digit1 + $digit2 + $digit3 + $digit4;

$reverse = ($digit4 * 1000) + ($digit3 * 100) + ($digit2 * 10) + $digit1;

if($number == $reverse){
  echo $number. " is a palindrome number.";
}else {
  echo $number. " is not a palindrome number.";
}

?>
