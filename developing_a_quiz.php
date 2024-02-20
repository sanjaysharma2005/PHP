php
<?php
$correctAnswers = 8; // Replace with the actual number of correct answers
$totalQuestions = 10; // Replace with the total number of questions in the quiz

$score = ($correctAnswers / $totalQuestions) * 100;

echo "Your score is: " . $score . "%";
?>