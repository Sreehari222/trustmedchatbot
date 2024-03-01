<?php
// Establish a database connection
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'trust';

$mysqli = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Retrieve the pending submissions
$query = "SELECT * FROM users WHERE approved = 0";
$result = $mysqli->query($query);

// Loop through the pending submissions and update the 'approved' field to 1
while ($row = $result->fetch_assoc()) {
    $submissionId = $row['id'];
    // Perform any additional processing or validation before updating the 'approved' field

    // Update the 'approved' field for the submission
    $updateQuery = "UPDATE users SET approved = 1 WHERE id = $submissionId";
    $mysqli->query($updateQuery);
}

// Close the database connection
$mysqli->close();

// Optionally, redirect the admin to a confirmation page or display a success message
?>
