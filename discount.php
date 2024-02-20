php
<?php
// Define the total price
$totalPrice = 5500;

// Check if the total price is over Rs. 5000
if ($totalPrice > 5000) {
  // Apply a 10% discount
  $discountedPrice = $totalPrice - ($totalPrice * 0.1);
  echo "Congratulations! Your discounted price is Rs. " . $discountedPrice;
} else {
  // Log the original price
  echo "Your total price is Rs. " . $totalPrice;
}
?>