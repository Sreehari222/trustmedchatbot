<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "trust";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$department = $_POST['department'];
$doctor = $_POST['doctor'];
$age = $_POST['age'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$datetime = $_POST['datetime'];
$address = $_POST['address'];

// Generate appointment ID (e.g., random alphanumeric string)
$appointmentId = generateAppointmentId();

// Prepare and execute SQL statement to insert data into the table
$stmt = $conn->prepare("INSERT INTO appointments (department, doctor, age, name, phone, email, datetime, address, appointment_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissssss", $department, $doctor, $age, $name, $phone, $email, $datetime, $address, $appointmentId);
$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Display the appointment ID to the user
echo "Thank you, $name! Your appointment has been scheduled.<br>";
echo "Appointment ID: $appointmentId";

// Function to generate random alphanumeric string
function generateAppointmentId() {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $length = 8;
  $randomString = '';
  
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
  }
  
  return $randomString;
}
?>
