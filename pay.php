<?php
session_start();

// Check if cart data and total amount exist in the session
if (!isset($_SESSION['cart']) || !isset($_SESSION['totalAmount'])) {
    echo '<h1>No items in cart. <a href="cart.php">Go back to cart</a></h1>';
    exit();
}

// Retrieve the cart and total amount from the session
$cart = $_SESSION['cart'];
$totalAmount = $_SESSION['totalAmount'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .payment-container {
            max-width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .payment-container h1 {
            text-align: center;
            color: #495057;
            margin-bottom: 30px;
        }
        .input-group-text {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            color: #6c757d;
        }
        .btn-pay {
            background-color: #28a745;
            color: white;
            transition: background-color 0.3s;
        }
        .btn-pay:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
  <div class="payment-container shadow-sm">
    <h1><i class="fas fa-credit-card"></i> Payment</h1>
    <form id="paymentForm" action="successfull.php" method="POST">
      <!-- Cardholder Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Cardholder Name</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
          <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
        </div>
      </div>
      <!-- Card Number -->
      <div class="mb-3">
        <label for="cardNumber" class="form-label">Card Number</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
          <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" maxlength="19" required>
        </div>
      </div>
      <!-- Expiry Date and CVV -->
      <div class="row g-3">
        <div class="col-md-6">
          <label for="expiry" class="form-label">Expiry Date (MM/YY)</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/YY" maxlength="5" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="cvv" class="form-label">CVV</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" maxlength="3" required>
          </div>
        </div>
      </div>
      <!-- Total Amount -->
      <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
          <input type="text" class="form-control" id="amount" name="amount" value="<?php echo number_format($totalAmount, 2); ?>" readonly>
        </div>
      </div>
      <!-- Submit Button -->
      <button type="submit" class="btn btn-pay w-100 mt-3"><i class="fas fa-check-circle"></i> Pay Now</button>
    </form>
  </div>
</body>
</html>