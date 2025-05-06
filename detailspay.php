<?php
session_start();
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $pin = htmlspecialchars($_POST['pin']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);

    $_SESSION['details'] = [
        'name' => $name,
        'address' => $address,
        'pin' => $pin,
        'email' => $email,
        'phone' => $phone,
        'paymentMethod' => $paymentMethod
    ];

    header('Location: checkout1.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            padding: 20px;
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        }
        .form-container {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            margin: auto;
        }
        .fa {
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="container">
  <h3 class="text-center mb-5">Contact Details For Delivery of Product</h3>
  <div class="form-container">
    <form method="POST" action="">
      <div class="mb-3">
        <label for="name" class="form-label"><i class="fa fa-user"></i>Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label"><i class="fa fa-home"></i>Address</label>
        <textarea class="form-control" id="address" name="address" required></textarea>
      </div>
      <div class="mb-3">
        <label for="pin" class="form-label"><i class="fa fa-map-pin"></i>PIN</label>
        <input type="text" class="form-control" id="pin" name="pin" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label"><i class="fa fa-envelope"></i>Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label"><i class="fa fa-phone"></i>Phone No.</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>


      <button type="submit" class="btn btn-primary w-100"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
