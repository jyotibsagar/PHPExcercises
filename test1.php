//program to input any number and check if it is
//a palindrome $number
<?php
echo "Enter a number: ";
$number = trim(fgets(STDIN));

$digit1 = intval($number/10000);

$r1 = $number % 10000;

echo $digit1."\n";
echo $r1;


 ?>
