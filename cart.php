<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cartData'])) {
    $cart = json_decode($_POST['cartData'], true);

    // Save the cart in the session
    $_SESSION['cart'] = $cart;

    // Calculate the total amount
    $totalAmount = array_sum(array_column($cart, 'price'));

    // Save total amount
    $_SESSION['totalAmount'] = $totalAmount;

    // Redirect to payment page
    header('Location: detailspay.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        }
        h1 {
            color: black;
        }
        .table {
            background-color: white;
            border-radius: 8px;
        }
        .btn-clear {
            background-color: red;
            color: white;
        }
        .btn-remove {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-remove:hover {
            background-color: #c82333;
        }
        .btn-payment {
            background-color: green;
            color: white;
        }
        .btn-download {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">Your Cart</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price (₹)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="cartTableBody"></tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between">
            <h3 id="totalPrice" class="text-black"></h3>
            <div>
                <button class="btn btn-clear" onclick="clearCart()">Clear Cart</button>
                <form id="paymentForm" method="POST" action="">
                    <input type="hidden" name="cartData" id="cartData">
                    <button type="button" class="btn btn-payment" onclick="proceedToPayment()">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function loadCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartTableBody = document.getElementById('cartTableBody');
            const totalPriceElement = document.getElementById('totalPrice');
            cartTableBody.innerHTML = ''; 
            let totalPrice = 0;
            cart.forEach((item, index) => {
                totalPrice += item.price;
                cartTableBody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.name}</td>
                        <td>₹${item.price}</td>
                        <td><button class="btn-remove" onclick="removeItem(${index})">Remove</button></td>
                    </tr>
                `;
            });
            totalPriceElement.textContent = `Total Price: ₹${totalPrice}`;
        }
        
        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }
        
        function clearCart() {
            if (confirm('Are you sure you want to clear the cart?')) {
                localStorage.removeItem('cart');
                loadCart();
            }
        }
        
        function proceedToPayment() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert('Your cart is empty!');
                return;
            }
            document.getElementById('cartData').value = JSON.stringify(cart);
            document.getElementById('paymentForm').submit();
        }
        
        window.onload = loadCart;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
