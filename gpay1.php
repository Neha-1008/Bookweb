<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Pay Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-image: linear-gradient(to right, #74ebd5 0%, #9face6 100%);
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            font-size: 1.8rem;
            font-weight: 600;
            text-align: center;
        }

        p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Navbar */
        nav {
            background-color: #4285F4;
        }

        nav .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 1.3rem;
        }

        nav .navbar-nav .nav-link {
            color: white;
            font-size: 1rem;
        }

        nav .navbar-nav .nav-link:hover {
            color: #e3f2fd;
        }

        /* Form Container */
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border-top: 5px solid #4285F4;
        }

        .form-container input,
        .form-container button {
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-container input {
            padding: 12px;
            margin-bottom: 15px;
            width: 100%;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-container input:focus {
            border-color: #4285F4;
            outline: none;
            box-shadow: 0 0 5px rgba(66, 133, 244, 0.5);
        }

        .form-container button {
            padding: 12px;
            background-color: #4285F4;
            color: white;
            border: none;
            width: 100%;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #357ae8;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.6rem;
            }

            .form-container {
                padding: 20px;
            }

            .form-container input,
            .form-container button {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>

    

    <!-- Google Pay Information Form -->
    <div class="container">
        <div class="form-container">
            <h2>Google Pay Account Information</h2>
            <p>Please enter your Google Pay account details to complete the payment.</p>
            <form action="confirmation.php" method="post">
                <div class="mb-3">
                    <label for="gpay-name" class="form-label">Account Holder's Name</label>
                    <input type="text" class="form-control" id="gpay-name" name="gpay-name" required>
                </div>
                <div class="mb-3">
                    <label for="gpay-number" class="form-label">Google Pay Number (Mobile Number)</label>
                    <input type="text" class="form-control" id="gpay-number" name="gpay-number" required>
                </div>
                <div class="mb-3">
                    <label for="gpay-email" class="form-label">Registered Email Address</label>
                    <input type="email" class="form-control" id="gpay-email" name="gpay-email" required>
                </div>
                <a href="confirmation.php" class="btn btn-success">Proceed with Payment</a>
            </form>
        </div>
    </div>

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>