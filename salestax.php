<?php
define("VAT", 0.19);

echo "Enter the before-tax price of the product: ";
$price_before_tax = trim(fgets(STDIN));

$sales_tax = $price_before_tax* VAT;
$price_after_tax = $price_before_tax + $sales_tax;

echo "The after-tax price is: ", $price_after_tax;

?>
