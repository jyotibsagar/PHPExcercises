<?php
echo "Enter the price of a product: ";
$price_before_discount = trim(fgets(STDIN));

echo "Enter the discount offered (0-100): ";
$discount = trim(fgets(STDIN));

$discount_amount = $price_before_discount * $discount/100;
$price_after_discount = $price_before_discount - $discount_amount;

echo "The price after discount is: ", $price_after_discount;

?>