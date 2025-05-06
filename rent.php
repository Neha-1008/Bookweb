<?php
session_start(); // Start the session
$isSubscribed = isset($_SESSION['isSubscribed']) && $_SESSION['isSubscribed'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books4U</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
         body {
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);  
            padding: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Ensure only 4 books per row */
            grid-gap: 3rem;
            margin-top: 3rem;
        }

        .card {
            padding: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0.75rem;
            background: white;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .book-image {
            width: 100%;
            height: 250px;
            object-fit: contain;
            border-radius: 8px;
            background-color: #f4f4f4;
            padding: 10px;
        }

        h2 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #2d3748;
            margin-top: 0.75rem;
        }

        p {
            color: #4a5568;
            font-size: 0.95rem;
            margin-top: 0.5rem;
        }

        .text-lg {
            font-size: 1.1rem;
            font-weight: bold;
            color: #1a202c;
            margin-top: 0.5rem;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin-top: 1rem;
            text-align: center;
            font-weight: bold;
            color: white;
            background-color: #2563eb;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-1 flex justify-between items-center">
            <a href="#" class="logo flex items-center"> 
                <i class="fas fa-book text-4xl"></i> 
                <span class="ml-2 text-4xl font-extrabold">Books4U</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Books on Rent</h1>
            <div class="icons flex items-center">
                <div id="search-btn" class="fas fa-search text-xl mr-4 cursor-pointer"></div>
                <a href="cart2.php" class="fas fa-shopping-cart text-xl mr-4"></a>
            </div>
        </div>
    </header>

    <?php if (!$isSubscribed): ?>
        <p class="text-red-600 text-lg font-bold">Please subscribe to add items to your cart.</p>
    <?php endif; ?>

    <div class="grid">
        <div class="card">
            <img src="rent images/to good.jpg" alt="Too Good To Be True" class="book-image">
            <h2>Too Good To Be True</h2>
            <p>A thrilling novel about unexpected love and deception.</p>
            <p class="text-lg">Rent Price: ₹50</p>
            <button class="btn" onclick="addToCart('Too Good To Be True', 50)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Before The Coffee Gets Cold.jpg" alt="Before The Coffee Gets Cold" class="book-image">
            <h2>Before The Coffee Gets Cold</h2>
            <p>A heartwarming tale of time travel and second chances.</p>
            <p class="text-lg">Rent Price: ₹40</p>
            <button class="btn" onclick="addToCart('Before The Coffee Gets Cold', 40)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/The Alchemist.jpg" alt="The Alchemist" class="book-image">
            <h2>The Alchemist</h2>
            <p>An inspiring story about chasing dreams and destiny.</p>
            <p class="text-lg">Rent Price: ₹45</p>
            <button class="btn" onclick="addToCart('The Alchemist', 45)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/The Art of Laziness.jpg" alt="The Art of Laziness" class="book-image">
            <h2>The Art of Laziness</h2>
            <p>A guide to efficiency and smart work over hard work.</p>
            <p class="text-lg">Rent Price: ₹30</p>
            <button class="btn" onclick="addToCart('The Art of Laziness', 30)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/The Art of Not Overthinking.jpg" alt="The Art of Not Overthinking" class="book-image">
            <h2>The Art of Not Overthinking</h2>
            <p>Learn to simplify decision-making and stress less.</p>
            <p class="text-lg">Rent Price: ₹35</p>
            <button class="btn" onclick="addToCart('The Art of Not Overthinking', 35)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Murakami.jpg" alt="Murakami" class="book-image">
            <h2>Murakami</h2>
            <p>A collection of the author's best literary works.</p>
            <p class="text-lg">Rent Price: ₹55</p>
            <button class="btn" onclick="addToCart('Murakami', 55)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Atomic Habits.jpg" alt="Atomic Habits" class="book-image">
            <h2>Atomic Habits</h2>
            <p>A powerful book on building good habits and breaking bad ones.</p>
            <p class="text-lg">Rent Price: ₹60</p>
            <button class="btn" onclick="addToCart('Atomic Habits', 60)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Secret.jpg" alt="Secret" class="book-image">
            <h2>Secret</h2>
            <p>Unravel the mysteries of attraction and manifestation.</p>
            <p class="text-lg">Rent Price: ₹45</p>
            <button class="btn" onclick="addToCart('Secret', 45)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Focus On What Matters.jpg" alt="Focus On What Matters" class="book-image">
            <h2>Focus On What Matters</h2>
            <p>A practical book on prioritizing life's essentials.</p>
            <p class="text-lg">Rent Price: ₹35</p>
            <button class="btn" onclick="addToCart('Focus On What Matters', 35)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/How To Talk To Anyone.png" alt="How To Talk To Anyone" class="book-image">
            <h2>How To Talk To Anyone</h2>
            <p>A communication guide to mastering social interactions.</p>
            <p class="text-lg">Rent Price: ₹38</p>
            <button class="btn" onclick="addToCart('How To Talk To Anyone', 38)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Silent Patien.jpg" alt="Silent Patient" class="book-image">
            <h2>Silent Patient</h2>
            <p>A psychological thriller filled with suspense.</p>
            <p class="text-lg">Rent Price: ₹40</p>
            <button class="btn" onclick="addToCart('Silent Patient', 40)">Add to Cart</button>
        </div>

        <div class="card">
            <img src="rent images/Lallen Sweets.jpg" alt="Lallen Sweets" class="book-image">
            <h2>Lallen Sweets</h2>
            <p>A delightful story about family, tradition, and sweets.</p>
            <p class="text-lg">Rent Price: ₹25</p>
            <button class="btn" onclick="addToCart('Lallen Sweets', 25)">Add to Cart</button>
        </div>
    </div>

    <script>
     function addToCart(title, price) {
        if (<?php echo $isSubscribed ? 'true' : 'false'; ?>) {
            let cart2 = JSON.parse(localStorage.getItem('cart2')) || [];
            cart2.push({ title, price });
            localStorage.setItem('cart2', JSON.stringify(cart2));
            alert(`${title} added to cart!`);
        } else {
            alert('You need a subscription to add items to the cart.');
        }
    }
    </script>
</body>
</html>
