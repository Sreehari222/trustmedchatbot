<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "trust";

// Fetch input data from signup
$name = $_POST["name"];
$password1 = $_POST["password"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$phonenumber = $_POST["phonenumber"];
$address = $_POST["address"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare an SQL query to insert the data into the table
$sql = "INSERT INTO users (name, password, email, dateofbirth, phonenumber, address) 
        VALUES ('$name', '$password1', '$email', '$dob', '$phonenumber', '$address')";

// Check if the email already exists in the table
$checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
$checkEmailResult = mysqli_query($conn, $checkEmailQuery);

if (mysqli_num_rows($checkEmailResult) > 0) {
    echo "Error: Email already exists";
} else {
    // Execute the query and insert the data into the table
    if (mysqli_query($conn, $sql)) {
        echo "Data saved successfully";
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>
