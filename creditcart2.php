<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Card Payment - Fashion Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Custom Styling */
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

        .card-icons img {
            width: 60px;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <!-- Card Payment Form -->
    <div class="payment-container">
        <h2>Enter Card Details</h2>

        <div class="card-icons">
            <img src="credit card" alt="Visa">
        </div>

        <form action="successfull.php" method="POST">
            <div class="form-group">
                <label for="card-name">Cardholder Name</label>
                <input type="text" class="form-control" id="card-name" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" class="form-control" id="card-number" placeholder="XXXX XXXX XXXX XXXX" required maxlength="16">
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="month" class="form-control" id="expiry-date" required>
                </div>

                <div class="col-md-6 form-group">
                    <label for="cvv">CVV</label>
                    <input type="password" class="form-control" id="cvv" placeholder="XXX" required maxlength="3">
                </div>
            </div>

            <div class="form-group">
                <label for="billing-address">Billing Address</label>
                <input type="text" class="form-control" id="billing-address" placeholder="Street, City, ZIP Code" required>
            </div>
            <button type="submit" class="btn btn-primary">Proceed to Payment</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
