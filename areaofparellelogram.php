<?php
echo "Enter the length of Base: ";
$base = trim(fgets(STDIN));
echo "Enter ther length of Height: ";
$height = trim(fgets(STDIN));

$area = $base * $height;

echo "The area of the parellelogram is ", $area;

?>
