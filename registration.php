<?php include 'header.html'; ?>

<?php
// Database connection credentials
$host = 'localhost';
$username = 'root';
$password = ''; // Replace with your MySQL password if set
$database = 'flightdb';

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['register'])) {
    // Fetch form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Validation
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('All fields are required!');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
     
        $check_query = "SELECT * FROM regi WHERE email = '$email'";
        $check_result = mysqli_query($con, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('Email is already registered! Please log in or use a different email.');</script>";
        } else {
            // Encrypt the password for secure storage
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert into the regi table
            $query = "INSERT INTO regi (name, email, password,confirm_password) VALUES ('$name', '$email', '$hashed_password','$confirm_password')";

            if (mysqli_query($con, $query)) {
                echo "<script>alert('Registration successful! You can now log in.');</script>";
            } else {
                echo "<script>alert('Database error: " . mysqli_error($con) . "');</script>";
            }
        }
    }
}

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="w-100" style="max-width: 400px;">
      <h3 class="text-center mb-4">Register</h3>
      <form action="" method="POST">
        <div class="mb-3">
          <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
        </div>
        <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
      </form>
      <div class="text-center mt-3">
        <small>Already have an account? <a href="login.php">Login</a></small>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'footer.html'; ?>
