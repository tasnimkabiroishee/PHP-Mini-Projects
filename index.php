<?php 
// First number
$num1 = 10; 

// Second number
$num2 = 5; 

// The operation to perform: +, -, *, or /
$operation = '+'; 

// If the operation is addition
if ($operation == '+') {
    echo $num1 + $num2; 
} 
// If the operation is subtraction
elseif ($operation == '-') {
    echo $num1 - $num2; 
} 
// If the operation is multiplication
elseif ($operation == '*') {
    echo $num1 * $num2; 
} 
// If the operation is division
elseif ($operation == '/') {
    echo $num1 / $num2; 
} 
// If the operation is not valid
else {
    echo "Invalid operation";
}
?>

