<?php
// Simulate transaction data (usually retrieved from payment gateway or database)
$transactionID = "TXN123456";
$name = "John Doe";
$amount = "50.00";
$date = date("Y-m-d H:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Receipt</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .receipt-container {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .receipt-container h1 {
      color: #495057;
      margin-bottom: 20px;
    }
    .receipt-container p {
      color: #6c757d;
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <div class="receipt-container">
    <h1>Payment Receipt</h1>
    <p><strong>Transaction ID:</strong> <?php echo $transactionID; ?></p>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Amount:</strong> $<?php echo $amount; ?></p>
    <p><strong>Date:</strong> <?php echo $date; ?></p>
    <a href="index.php" class="btn btn-primary mt-3">Return to Home</a>
  </div>
</body>
</html>
