<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books4U - Sign Up</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-box {
            background-color: white;
            padding: 3rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .toggle-buttons button {
            padding: 0.8rem 1.5rem;
            margin: 0 0.5rem;
            border: none;
            background-color: #28a745;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .toggle-buttons button:hover {
            background-color: #218838;
        }
        .signup-form {
            display: none; /* Initially hide all forms */
        }
        .signup-form input {
            width: 100%;
            padding: 0.8rem;
            margin: 0.8rem 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        .signup-form button {
            padding: 0.8rem 1.5rem;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 1rem;
        }
        .signup-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <div class="signup-box">
        <h2>Books4U Sign Up</h2>
        
        <!-- Toggle Buttons -->
        <div class="toggle-buttons">
            <button id="customer-btn" onclick="showCustomerForm()">Customer</button>
            <button id="admin-btn" onclick="showAdminForm()">Administrator</button>
        </div>

        <!-- Customer Sign-Up Form -->
        <form id="customer-form" class="signup-form" method="POST" action="customer_register.php" onsubmit="return validateCustomerForm()">
            <input type="text" id="customer_name" name="username" placeholder="Full Name" required>
            <input type="email" id="customer_email" name="email" placeholder="Email" required>
            <input type="password" id="customer_password" name="password" placeholder="Password" required>
            <input type="password" id="customer_confirm_password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Sign Up as Customer</button>
        </form>

        <!-- Administrator Sign-Up Form -->
        <form id="admin-form" class="signup-form" method="POST" action="admin1.php" onsubmit="return validateAdminForm()">
            <input type="text" id="admin_name" name="admin_username" placeholder="Admin Full Name" required>
            <input type="email" id="admin_email" name="admin_email" placeholder="Admin Email" required>
            <input type="password" id="admin_password" name="admin_password" placeholder="Password" required>
            <input type="password" id="admin_confirm_password" name="admin_confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Sign Up as Administrator</button>
        </form>
    </div>
</div>

<!-- JavaScript to Toggle Forms and Validate Inputs -->
<script>
    function showCustomerForm() {
        document.getElementById('customer-form').style.display = 'block'; // Show customer form
        document.getElementById('admin-form').style.display = 'none'; // Hide admin form
    }

    function showAdminForm() {
        document.getElementById('admin-form').style.display = 'block'; // Show admin form
        document.getElementById('customer-form').style.display = 'none'; // Hide customer form
    }

    // Customer Form Validation
    function validateCustomerForm() {
        const password = document.getElementById('customer_password').value;
        const confirmPassword = document.getElementById('customer_confirm_password').value;

        if (password !== confirmPassword) {
            alert("Customer Passwords do not match.");
            return false;
        }
        return true;
    }

    // Admin Form Validation
    function validateAdminForm() {
        const password = document.getElementById('admin_password').value;
        const confirmPassword = document.getElementById('admin_confirm_password').value;

        if (password !== confirmPassword) {
            alert("Administrator Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
