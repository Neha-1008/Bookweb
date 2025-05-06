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
    $full_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for security
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Insert data into Customers table
    $query = "INSERT INTO Customers (full_name, email, password_hash) VALUES ('$full_name', '$email', '$password_hash')";

    if (mysqli_query($conn, $query)) {
        // Redirect to index.php after successful insertion
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
