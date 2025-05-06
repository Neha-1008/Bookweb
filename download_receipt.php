<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ensure cart is loaded from session
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    die("No items found in the cart.");
}

$cart = $_SESSION['cart'];
$totalAmount = $_SESSION['totalAmount'] ?? 0;

// Generate receipt content
$receiptContent = "Receipt\n";
$receiptContent .= "=======================\n";
foreach ($cart as $index => $item) {
    $itemName = htmlspecialchars($item['name'] ?? "Unknown Item");
    $itemPrice = number_format($item['price'] ?? 0, 2);
    $receiptContent .= ($index + 1) . ". " . $itemName . " - ₹" . $itemPrice . "\n";
}
$receiptContent .= "-----------------------\n";
$receiptContent .= "Total Amount: ₹" . number_format($totalAmount, 2) . "\n";
$receiptContent .= "=======================\n";
$receiptContent .= "Thank you for your purchase!\n";

// Ensure no output before headers
ob_clean();
flush();

// Set headers for file download
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="receipt.txt"');
header('Content-Length: ' . strlen($receiptContent));

// Output receipt content
echo $receiptContent;

// Destroy session after download
session_destroy();
exit();
?>
