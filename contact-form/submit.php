<?php
// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Clean the input data by removing unnecessary spaces using trim() and prevent special characters using htmlspecialchars()
    $name = htmlspecialchars(trim($_POST['name']));  // Clean and retrieve the 'name' field from the form
    $msg = htmlspecialchars(trim($_POST['message'])); // Clean and retrieve the 'message' field from the form

    // Show a thank you message with the submitted data
    echo "Thanks, $name! Your message: $msg";  // Output a confirmation message displaying the name and message
}
?>

