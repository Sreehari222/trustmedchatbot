<?php

// Database configuration
$host = 'localhost';
$username = 'root'; // Replace with your actual database username
$password = 'root'; // Replace with your actual database password
$database = 'trust'; // Replace with your actual database name

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Perform your database operations here

// Close the database connection
mysqli_close($conn);
?>