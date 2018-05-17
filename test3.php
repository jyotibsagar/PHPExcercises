//Define an array of 15 numbers and print the max and min number in the array.
<?php
$number = array();
for ($i=0; $i<14; $i++) {
echo "Enter number: ";
$anynumber = trim(fgets(STDIN));

echo $number[$anynumber];
}
sort($number);
print_r($anynumber);
 ?>
