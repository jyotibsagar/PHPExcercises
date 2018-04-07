<?php
echo "Enter weight(in pounds): ";
$weight = trim(fgets(STDIN));

echo "Enter height(in inches): ";
$height = trim(fgets(STDIN));

$bmi = $weight*703 / ($height * $height);

echo "BMI= ", $bmi;

?>



