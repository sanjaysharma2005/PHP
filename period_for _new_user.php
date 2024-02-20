<?php
$userIsNew = true; // Replace with the actual condition to check if the user is new
$userHasActiveSubscription = false; // Replace with the actual condition to check if the user has an active subscription

if ($userIsNew && !$userHasActiveSubscription) {
    echo "You are eligible for a trial period!";
} else {
    echo "Sorry, you are not eligible for a trial period.";
}
?>