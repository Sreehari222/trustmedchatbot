<?php
$host = "localhost";
$username = "root";
$password = "root";
$database = "trust";

// Establish database connection
$connect = mysqli_connect($host, $username, $password, $database) or die("Connection Failed");

if (isset($_POST['save'])) {
    $email = $_POST['email'];
    $password = $_POST['pw'];

    // Prepare the query to prevent SQL injection
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        if ($role == 'admin') {
            // Redirect to the admin dashboard page
            header("Location:Dashboard/html/index-hos-dashboard.html");
            exit();
        } else {
            // Redirect to the appointment page
            header("Location: appoinment.html");
            exit();
        }
        
    } else {
        echo "<script>alert('Login Not Successful'); window.location.href = 'login.html';</script>";
    }
}

// Close the database connection
mysqli_close($connect);
?>
