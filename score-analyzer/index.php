<?php
// Step 1: Create an array of student scores
$scores = [75, 85, 90, 60];

// Step 2: Calculate and show average score
$average = array_sum($scores) / count($scores);
echo "Average: " . $average;

// Step 3: Find and show the highest score
$highest = max($scores);
echo "<br>Highest: " . $highest;

// (Optional) Step 4: Show all scores as a string
echo "<br>All Scores: " . implode(", ", $scores);
?>
