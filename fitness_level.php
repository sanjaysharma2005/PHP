<?php
$steps = 7000; // You can change this value to test different scenarios

if ($steps < 5000) {
    $fitnessLevel = 'Beginner';
} elseif ($steps >= 5000 && $steps <= 10000) {
    $fitnessLevel = 'Intermediate';
} else {
    $fitnessLevel = 'Advanced';
}

echo "Your fitness level is: " . $fitnessLevel;
?>
