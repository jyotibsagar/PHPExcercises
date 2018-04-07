<?php

define("PI", 3.14159);

echo "Enter the length of the Radius: ";
$radius = trim(fgets(STDIN));
$area = PI*$radius*$radius;

echo "The area of the circle is  ", $area;

?>

