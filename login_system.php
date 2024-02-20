<?php
$storedUsername = "myusername";
$storedPassword = "mypassword";

$userInputUsername = "myusername"; // Replace with the user's input
$userInputPassword = "mypassword"; // Replace with the user's input

if ($userInputUsername === $storedUsername && $userInputPassword === $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}
?>