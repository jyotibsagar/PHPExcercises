<?php
echo "Enter miles driven: ";
$miles_driven = trim(fgets(STDIN));
echo "Enter gallons of gas used: ";
$gallons = trim(fgets(STDIN));

$mpg = $miles_driven/$gallons;

echo "Your car's MPG is: ", $mpg;

?>