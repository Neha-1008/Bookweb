<?php
// Start the session
session_start();

// Retrieve the cart data and total amount from the session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$totalAmount = 0;

// Calculate the total amount if the cart exists
if (!empty($cart)) {
    foreach ($cart as $item) {
        $totalAmount += $item['price'];
    }
} else {
    // If cart data is missing, redirect to the cart page
    header('Location: cart.php');
    exit();
}

// Check if the user requested to download the receipt
if (isset($_GET['download']) && $_GET['download'] === 'true') {
    // Generate a downloadable text file for the receipt
    $filename = "receipt_" . date('YmdHis') . ".txt";
    header("Content-Type: text/plain");
    header("Content-Disposition: attachment; filename=$filename");

    // Generate receipt content
    echo "Receipt\n";
    echo "========================\n";
    foreach ($cart as $index => $item) {
        echo ($index + 1) . ". " . $item['name'] . " - ₹" . number_format($item['price'], 2) . "\n";
    }
    echo "------------------------\n";
    echo "Total Amount: ₹" . number_format($totalAmount, 2) . "\n";
    echo "========================\n";
    echo "Thank you for your purchase!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Receipt</h1>
        <div class="table-responsive mt-4">
            <table class="table table-bordered">
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
        <div class="text-center mt-4">
            <a href="payment_confirmation.php" class="btn btn-primary">Back to Payment Confirmation</a>
            <a href="receipt.php?download=true" class="btn btn-success">Download Receipt</a>
        </div>
    </div>
</body>
</html>
