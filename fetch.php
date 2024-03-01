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

// Check if the database connection is successful
if ($conn === false) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}

// Perform your database query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if ($result === false) {
    die('Query execution failed: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Fetch the data from the database</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>id</td>
                                <td>Name</td>
                                <td>Password</td>
                                <td>Email</td>
                                <td>DOB</td>
                                <td>Phonenumber</td>
                                <td>Address</td>
                                <td>Appoiment</td>
                                
                            </tr>
                            <?php while($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['dateofbirth']; ?></td>
                                    <td><?php echo $row['phonenumber']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><button id="approveButton" class="btn btn-primary">Approve</button></td>
                                   
                                </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  <script>
    // Attach an event listener to the button
    document.getElementById('approveButton').addEventListener('click', function() {
      // Send an AJAX request to the approve.php script
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'approve.php', true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Handle success response, if needed
          alert('Submissions approved successfully!');
        } else {
          // Handle error response, if needed
          alert('An error occurred while approving submissions.');
        }
      };
      xhr.send();
    });
  </script>
</body>
</html>
