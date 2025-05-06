<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardholder_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $billing_address = $_POST['billing_address'];

    $sql = "INSERT INTO payments (cardholder_name, card_number, expiry_date, cvv, billing_address) 
            VALUES ('$cardholder_name', '$card_number', '$expiry_date', '$cvv', '$billing_address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Payment successful!'); window.location.href='confirmation.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Card Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
        }
        .payment-container {
            max-width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .payment-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: none;
        }
        .btn-primary {
            width: 100%;
            border-radius: 5px;
            padding: 10px;
            font-size: 18px;
        }
        .btn-primary:hover {
            background-color: #004085;
        }
        .card-icons {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Enter Card Details</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="card_name">Cardholder Name</label>
                <input type="text" class="form-control" name="card_name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <label for="card_number">Card Number</label>
                <input type="text" class="form-control" name="card_number" placeholder="XXXX XXXX XXXX XXXX" required maxlength="16">
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="expiry_date">Expiry Date</label>
                    <input type="month" class="form-control" name="expiry_date" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="cvv">CVV</label>
                    <input type="password" class="form-control" name="cvv" placeholder="XXX" required maxlength="3">
                </div>
            </div>
            <div class="form-group">
                <label for="billing_address">Billing Address</label>
                <input type="text" class="form-control" name="billing_address" placeholder="Street, City, ZIP Code" required>
            </div>
            <button type="submit" class="btn btn-primary">Proceed to Payment</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
