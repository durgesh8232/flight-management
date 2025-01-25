<?php include 'header.html'; ?>
<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection credentials
$host = 'localhost';
$username = 'root';
$password = ''; // Replace with your MySQL password if set
$database = 'flightdb';

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start session
session_start();

// Handle form submission
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password']; // Do not escape; password_verify does not require escaped values.

    // Query to find the user by email
    $query = "SELECT * FROM regi WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Start a session for the user
            $_SESSION['user'] = $user;

            // Display success message and redirect using JavaScript
            echo "<script>
                alert('Login successful! Redirecting to home page.');
                window.location.href = 'home.php';
            </script>";
            exit();
        } else {
            // Password mismatch
            echo "<script>alert('Invalid password! Please try again.');</script>";
        }
    } else {
        // Email not found
        echo "<script>alert('Email not found! Please check your email or register first.');</script>";
    }
}

// Close the connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="w-100" style="max-width: 400px;">
            <h3 class="text-center mb-3">Login</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="text-center mt-3">
                <small>Don't have an account? <a href="registration.php">Register</a></small>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'footer.html'; ?>