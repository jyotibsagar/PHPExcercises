<?php
echo "Enter Full Name: ";
$fullName = trim(fgets(STDIN));
$nameParts = explode(" ", $fullName);

echo $nameParts[2] ." ". $nameParts[1]." ". $nameParts[0];

?>
