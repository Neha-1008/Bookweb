<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        
        <!-- Centered Link to view without subscription -->
        <div class="text-center mb-4">
            <a href="rent.php" class="text-blue-600 font-semibold hover:underline">
                Show Page Without Subscription
            </a>
        </div>

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Subscribe & Pay ₹500</h2>
        
        <form id="subscriptionForm" action="checkout.php" method="POST">
            <!-- Name -->
            <label class="block text-gray-700 font-semibold">Full Name</label>
            <input type="text" name="name" required placeholder="Enter your full name"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">
            
            <!-- Mobile Number -->
            <label class="block text-gray-700 font-semibold">Mobile Number</label>
            <input type="tel" name="mobile" required pattern="[0-9]{10}" placeholder="Enter your mobile number"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">
            
            <!-- Email -->
            <label class="block text-gray-700 font-semibold">Email Address</label>
            <input type="email" name="email" required placeholder="Enter your email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4">
            
            <!-- Address -->
            <label class="block text-gray-700 font-semibold">Address</label>
            <textarea name="address" required placeholder="Enter your full address"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4"></textarea>

            <!-- Payment (Fixed ₹500) -->
            <label class="block text-gray-700 font-semibold">Payment (₹500 Required)</label>
            <input type="text" value="₹500" disabled
                class="w-full px-4 py-2 border rounded-lg bg-gray-200 mb-4">
            
            <!-- Pay Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Pay ₹500 & Subscribe
            </button>
        </form>
    </div>

</body>
</html>
