<?php
session_start();

// Mark the user as subscribed after payment success
$_SESSION['isSubscribed'] = true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .confirmation-box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .checkmark {
            font-size: 50px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <div class="checkmark">✔</div>
        <h2>Payment Successful!</h2>
        <p>Thank you for subscribing. Your payment of ₹500 has been successfully processed.</p>
        <a href="rent.php" class="btn btn-primary mt-3">Go to Rent On Page</a>
        <br>
        <a href="#" id="downloadReceipt" class="btn btn-secondary mt-3">Download Receipt</a>
    </div>

    <script>
        document.getElementById("downloadReceipt").addEventListener("click", function() {
            const receiptContent = `Payment Receipt\n\nSubscription Payment Successful!\nAmount: ₹500\nDate: ${new Date().toLocaleString()}\nThank you for subscribing!`;
            const blob = new Blob([receiptContent], { type: "text/plain" });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = "Payment_Receipt.txt";
            link.click();
        });
    </script>
</body>
</html>
