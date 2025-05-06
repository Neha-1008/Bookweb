<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle deletion
if (isset($_GET['delete_id'])) {
    $userId = $_GET['delete_id'];
    $sql = "DELETE FROM customers WHERE user_id = $userId";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Customer removed successfully'); window.location.href='admin.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Customers</title>
    <style>
        body {
            background: linear-gradient(to right,rgb(250, 144, 250),rgb(169, 135, 248));
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .top-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding: 10px 20px;
        }
        .top-buttons a {
            text-decoration: none;
            padding: 10px 15px;
            color: white;
            background-color: #333;
            border-radius: 5px;
        }
        h2 {
            font-weight: bold;
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .remove-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
    <script>
        function removeCustomer(userId) {
            if (confirm("Are you sure you want to remove this customer?")) {
                window.location.href = "?delete_id=" + userId;
            }
        }
    </script>
</head>
<body>
    <div class="top-buttons">
        <a href="index.php">Go to Website</a>
        <a href="logout.php">Logout</a>
    </div>
    <h2>Admin Dashboard - Customer Management</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Order of Books</th>
            <th>Total Price (₹)</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['orders']}</td>
                    <td>₹{$row['total_price']}</td>
                    <td><button class='remove-btn' onclick='removeCustomer({$row['user_id']})'>Remove</button></td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No customers found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>