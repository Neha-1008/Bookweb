<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "book_store";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    // Basic validation
    if (empty($name) || empty($email) || empty($phone)) {
        $_SESSION['message'] = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email format!";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $_SESSION['message'] = "Phone number must be 10 digits!";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM login WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['message'] = "Email already registered!";
        } else {
            // Insert data into database
            $stmt = $conn->prepare("INSERT INTO login (Name, Email, Phone_No, Date) VALUES (?, ?, ?, CURRENT_TIMESTAMP())");
            $stmt->bind_param("sss", $name, $email, $phone);

            if ($stmt->execute()) {
                $_SESSION['message'] = "Registration successful!";
            } else {
                $_SESSION['message'] = "Error: " . $stmt->error;
            }
        }
    }
    // Redirect to success page
    header("Location: success.php");
    exit();
}

// Close database connection
$conn->close();
?>
