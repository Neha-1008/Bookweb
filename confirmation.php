<?php
// Start the session
session_start();

// Retrieve the cart data from the session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$totalAmount = 0;

// Calculate the total amount if the cart exists
if (!empty($cart)) {
    foreach ($cart as $item) {
        $totalAmount += $item['price'];
    }
} else {
    // If cart data is missing, redirect back to the cart page
    header('Location: cart.php');
    exit();
}

// Clear the cart session after successful payment
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Confirmation</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .confirmation-container {
      max-width: 700px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .confirmation-container h1 {
      color: #28a745;
      font-size: 2rem;
    }
    .confirmation-container p {
      color: #6c757d;
    }
    .table {
      margin-top: 20px;
      background-color: white;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="confirmation-container">
    <h1><i class="fas fa-check-circle"></i> Payment Successful!</h1>
    <p>Thank you for your order. Your transaction has been completed successfully.</p>
    <h3>Order Summary</h3>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cart as $index => $item): ?>
          <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo htmlspecialchars($item['name']); ?></td>
            <td>₹<?php echo number_format($item['price'], 2); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2" class="text-end">Total Amount:</th>
            <th>₹<?php echo number_format($totalAmount, 2); ?></th>
          </tr>
        </tfoot>
      </table>
    </div>
    <p>We appreciate your business and hope you enjoy your purchase!</p>
    <a href="index.php" class="btn btn-primary mt-3">Return to Home</a>
  </div>
</body>
</html>
