<?php
session_start(); // Start session

// Ensure that cart2.php only handles localStorage data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Books4U</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);  
            padding: 20px;
        }
        .header {
            background-color: #f8fafc;
        }
        .header a {
            transition: color 0.2s;
        }
        .header a:hover {
            color: #1d4ed8;
        }
        table th, table td {
            text-align: left;
        }
        .rent-now-btn {
            background-color: #22c55e;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .rent-now-btn:hover {
            background-color: #16a34a;
        }
    </style>
</head>
<body>
<header class="header mb-6">
    <div class="flex justify-between items-center bg-white p-4 shadow-md rounded-lg">
        <a href="index.php" class="text-2xl font-bold text-green-600">Books4U</a>
        <h1 class="text-xl font-semibold">Your Cart</h1>
        <a href="rent.php" class="text-blue-500">Continue Shopping</a>
    </div>
</header>

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b">
                <th class="p-3 text-lg font-semibold">Book Title</th>
                <th class="p-3 text-lg font-semibold">Price</th>
                <th class="p-3 text-lg font-semibold">Remove</th>
            </tr>
        </thead>
        <tbody id="cart-items">
            <!-- Cart items will be dynamically added here -->
        </tbody>
    </table>
    <div class="flex justify-between items-center mt-6">
        <p class="text-lg font-bold">Total: ₹<span id="total-price">0</span></p>
        <div class="flex gap-4">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg" onclick="clearCart()">Clear Cart</button>
            <form action="checkout3.php" method="POST" onsubmit="submitCartData(event)">
                <input type="hidden" name="cart" id="cart-data">
                <button type="submit" class="rent-now-btn">Rent Now</button>
            </form>
        </div>
    </div>
</div>

<script>
    function loadCart() {
        let cart = JSON.parse(localStorage.getItem('cart2')) || [];
        let cartItemsContainer = document.getElementById('cart-items');
        let totalPrice = 0;
        cartItemsContainer.innerHTML = '';

        cart.forEach((item, index) => {
            totalPrice += item.price;
            cartItemsContainer.innerHTML += `
                <tr class="border-b">
                    <td class="p-3">${item.title}</td>
                    <td class="p-3">₹${item.price}</td>
                    <td class="p-3"><button class="text-red-500" onclick="removeItem(${index})">Remove</button></td>
                </tr>
            `;
        });
        document.getElementById('total-price').innerText = totalPrice;
    }

    function removeItem(index) {
        let cart = JSON.parse(localStorage.getItem('cart2')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cart2', JSON.stringify(cart));
        loadCart();
    }

    function clearCart() {
        localStorage.removeItem('cart2');
        loadCart();
    }

    function submitCartData(event) {
        let cart = JSON.parse(localStorage.getItem('cart2')) || [];
        document.getElementById('cart-data').value = JSON.stringify(cart);
        localStorage.removeItem('cart2');
    }

    window.onload = loadCart;
</script>
</body>
</html>
