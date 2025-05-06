<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Books4U</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .confirmation-container {
            max-width: 600px;
            margin: 3rem auto;
            background-color: #f8fafc;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .confirmation-container h1 {
            color: #22c55e;
        }
        .confirmation-container button {
            background-color: #2563eb;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .confirmation-container button:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="confirmation-container">
        <h1 class="text-2xl font-bold">Thank You for Renting with Books4U!</h1>
        <p class="text-lg mt-3">Your order has been successfully placed.</p>
        <p class="text-lg mt-1">We hope you enjoy your books!</p>
        <p class="text-lg mt-1">Please return books within 7 days or you will be fine ₹50 per day</p>
        <p class="mt-4 text-gray-600">Transaction ID: <span id="transaction-id"></span></p>
        <button class="mt-6" onclick="goHome()">Back to Home</button>
    </div>

    <script>
        // Generate a random transaction ID for display purposes
        function generateTransactionID() {
            return Math.floor(100000 + Math.random() * 900000);
        }

        function goHome() {
            window.location.href = "rent.php"; // Redirect to the homepage
        }

        // Display the transaction ID on the confirmation page
        document.getElementById('transaction-id').innerText = generateTransactionID();
    </script>

</body>
</html>
