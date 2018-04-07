<?php
define("VAT", 0.19);

echo "Enter the price of a product: ";
$price_before_discount = trim(fgets(STDIN));

echo "Enter the discount offered: ";
$discount = trim(fgets(STDIN));

$discount_amount = $price_before_discount * $discount/100;
$price_after_discount = $price_before_discount - $discount_amount;

$sales_tax = $price_after_discount*VAT;
$price_after_tax = $price_after_discount + $sales_tax;

echo "The discounted after-tax price is: ", $price_after_tax;

?>