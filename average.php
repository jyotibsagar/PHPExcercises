<?php echo "Enter first number: "; 
$first_number = trim(fgets(STDIN));

echo "Enter second number: ";
$second_number = trim(fgets(STDIN)); 

echo "Enter third number: ";
$third_number = trim(fgets(STDIN)); 

echo "Enter fourth number: ";
$fourth_number = trim(fgets(STDIN)); 

echo "Enter fifth number: ";
$fifth_number = trim(fgets(STDIN)); 


$average= ($first_number+$second_number+$third_number+$fourth_number+$fifth_number)/5;

echo "Average of " . $first_number . " + " . $second_number . " + " . $third_number . " + " . $fourth_number . " + " . $fifth_number . " is " . $average;


?>