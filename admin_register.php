<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'Books4U';

// Connect to MySQL
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_name = $_POST['admin_username'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Hash the password for security
    $admin_password_hash = password_hash($admin_password, PASSWORD_BCRYPT);

    // Insert data into Administrators table
    $query = "INSERT INTO Administrators (full_name, email, password_hash) VALUES ('$admin_name', '$admin_email', '$admin_password_hash')";

    if (mysqli_query($conn, $query)) {
        // Redirect to admin.php after successful insertion
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
