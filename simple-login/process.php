<?php
// Start the session to store user data
session_start();

// Check if the submitted username and password are correct
if ($_POST['username'] === 'admin' && $_POST['password'] === '123') {
    // Store 'admin' in the session variable 'user'
    $_SESSION['user'] = 'admin';
    
    // Display a message saying the user is logged in
    echo "Logged in!";
} else {
    // If the login credentials are wrong, show an error message
    echo "Wrong login!";
}
?>
