<?php
// Define a function named 'showTable' that takes one parameter called $number
function showTable($number) {
    
    // Start a for loop that runs from 1 to 10
    for ($i = 1; $i <= 10; $i++) {
        
        // Inside the loop, multiply $number by $i and display it in the format "number x i = result"
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
}

// Call the function 'showTable' with the argument 5 to generate the multiplication table of 5
showTable(5);
?>
