<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Custom Styling */
        .payment-option {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
            background-color: white;
            width: 100%;
            height: 180px; /* Ensures all cards have the same height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .payment-option:hover {
            transform: scale(1.05);
        }

        .payment-option img {
            max-width: 80px;
            margin-bottom: 10px;
        }

        .payment-btn {
            display: block;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        body {
            background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
        }

        .container {
            background-color: whitesmoke;
            padding: 30px;
            border-radius: 10px;
        }

        .proceed-btn {
            margin-top: 30px;
            padding: 12px 24px;
            font-size: 1.2rem;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <!-- Checkout Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Choose Payment Method</h2>

            <!-- Payment Options in Single Row with Same Size Cards -->
            <div class="row text-center g-3">
                <div class="col-md-4">
                    <div class="payment-option">
                        <a href="gpay.php" class="payment-btn">
                            <img src="payment images\Gpay.png" alt="Google Pay">
                            <p>Google Pay</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="payment-option">
                        <a href="phonepay.php" class="payment-btn">
                            <img src="payment images\phonepay.jpg" alt="PhonePe">
                            <p>PhonePe</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="payment-option">
                        <a href="creditcart2.php" class="payment-btn">
                            <img src="payment images\credit.jpg" alt="Credit Card">
                            <p>Credit Card (Visa)</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Proceed to Payment Button (Moved Below Payment Options) -->
            <div class="text-center">
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>