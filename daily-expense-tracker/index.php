<?php
// Set the timezone so the date and time are accurate for Bangladesh
date_default_timezone_set('Asia/Dhaka');

// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Clean and store the input name from the form
    $name = trim($_POST['name']);

    // Clean and store the input amount from the form
    $amount = trim($_POST['amount']);

    // Get current date and time in Y-m-d H:i:s format
    $time = date('Y-m-d H:i:s');

    // Prepare a line to save: date|name|amount
    $entry = "$time|$name|$amount\n";

    // Save the entry in the file called "expenses.txt" (append mode)
    file_put_contents("expenses.txt", $entry, FILE_APPEND);
}
?>

<!-- Start of HTML content -->
<h2>Daily Expense Tracker</h2>

<!-- Form to submit a new expense -->
<form method="POST">
    Name: <input name="name" required> <br><br> <!-- Input for expense name -->
    Amount: <input name="amount" type="number" required> <br><br> <!-- Input for amount -->
    <button>Add Expense</button> <!-- Submit button -->
</form>

<hr> <!-- Horizontal line to separate form and expense list -->

<?php
// Read all lines from the expenses.txt file into an array
$lines = file("expenses.txt");

// Initialize total amount to 0
$total = 0;

// Get today’s date in Y-m-d format
$today = date('Y-m-d');

echo "<h3>Today's Expenses</h3>";

// Loop through each line in the file
foreach ($lines as $line) {

    // Split each line into 3 parts: datetime, item name, amount
    list($datetime, $item, $amt) = explode('|', trim($line));

    // Check if the date matches today's date
    if (strpos($datetime, $today) === 0) {

        // Show the expense entry
        echo "$datetime - $item: ৳$amt <br>";

        // Add the amount to the total
        $total += (float)$amt;
    }
}

// Show the total expenses for today
echo "<br><strong>Total Today: ৳$total</strong>";
?>
