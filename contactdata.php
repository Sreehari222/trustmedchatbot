<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "trust";

// Establish database connection
$connect = mysqli_connect($host, $username, $password, $database) or die("Connection Failed");

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare the query to prevent SQL injection
    $query = "INSERT INTO contact (fullname, email, subject, phone, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $fullname, $email, $subject, $phone, $message);
    mysqli_stmt_execute($stmt);

    // Check if data is inserted successfully
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Data stored successfully');</script>";
    } else {
        echo "<script>alert('Failed to store data');</script>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($connect);
?>
