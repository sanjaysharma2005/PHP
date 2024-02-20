<?php
$totalAmount = 1200; // You can change this value to test different order amounts

if ($totalAmount > 1000) {
    $discount = 100;
    $finalAmount = $totalAmount - $discount;
    echo "Congratulations! You qualify for a discount of Rs. " . $discount . ". Your final amount is Rs. " . $finalAmount . ".";
} else {
    echo "Sorry, your order total does not qualify for the discount.";
}
?>