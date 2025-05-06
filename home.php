<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Kitchen - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: black;
            scroll-behavior: smooth; /* Smooth scrolling */
        }
        /* Navbar styles */
        .navbar {
            background-color: #343a40;
        }
        .navbar-nav .nav-link {
            color: white !important;
        }
        .navbar-nav .nav-link:hover {
            color: #ffcc00 !important;
        }
        .navbar .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #ffcc00 !important;
        }
        .navbar .navbar-brand:hover {
            color: #fff !important;
        }
        .navbar .form-inline input {
            width: 300px;
        }
        .hero-section {
            background-image: url('font_img2.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            height: 400px;
            display: flex;
            justify-content: right;
            align-items: center;
            text-align: center;
        }
        .hero-section:hover{
            color:  orange;
        }
        .hero-section h2 {
            font-size: 50px;
            font-weight: bold;
        }
        .section-title {
            text-align: center;
            margin-top: 50px;
            font-size: 32px;
            color: #0066cc;
        }
        .about-us, .menu, .contact-us {
            padding: 50px 20px;
            color:#fff
        }
        .container{
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .food-box{
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            background-color: #fff;
            width: 200px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .food-box img{
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .food-box h3{
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }
        .food-box .price{
            font-size: 16px;
            color: #28a742;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .food-box .buy-now{
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .food-box .buy-now:hover{
            background-color: #218838;
        }

        /* Footer (full-width) */
        .footer {
            width: 100%;  /* Ensure the footer spans the full width */
            text-align: center;
            padding: 20px 0;  /* Add padding for better spacing */
            background-color: #343a40; /* Dark background to match navbar */
            color: #ffffff; /* White text color */
            font-size: 14px;
            margin-top: 50px; /* Add top margin to separate from content above */
        }

        .footer p {
            margin: 0;
        }

        .footer a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer .social-links {
            margin-top: 10px;
        }

        .footer .social-links a {
            margin: 0 10px;
            font-size: 20px;
            color: #ffcc00;
        }

        .footer .social-links a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo image added here -->
            <a class="navbar-brand" href="#">
                <img src="logo.jpeg" alt="Cloud Kitchen Logo" width="150" height="50"> <!-- Replace 'logo.png' with your logo file -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex ms-3" action="/search" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="home" class="hero-section">
        <div>
            <h2>Welcome to Cloud Kitchen</h2>
            <p>Delicious food delivered right to your door</p>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about-us" class="about-us">
        <h2 class="section-title">About Us</h2>
        <div class="container">
            <p class="text-center">At Cloud Kitchen, we provide freshly made, healthy, and delicious meals. Our menu is inspired by global cuisine and is designed to delight your taste buds with every bite. We prioritize quality, affordability, and great service to ensure your dining experience is unforgettable.</p>
        </div>
    </div>

    <!-- Menu Section -->
    <div id="menu" class="container">
        <div class="food-box">
            <img src="p9_image.jpg" alt="French fries">
            <h3>French fries</h3>
            <p class="Price">Rs.60-120</p>
            <button class="buy-now"><a href="items.php?item=fries" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="p6_image.jpg" alt="Pizza">
            <h3>Pizza</h3>
            <p class="Price">Rs.140-359</p>
            <button class="buy-now"><a href="items.php?item=pizza" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="p3_image.webp" alt="Burger">
            <h3>Burger</h3>
            <p class="Price">Rs.60-120</p>
            <button class="buy-now"><a href="items.php?item=burger" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="pasta_1.avif" alt="Pasta">
            <h3>Pasta</h3>
            <p class="Price">Rs.199-399</p>
            <button class="buy-now"><a href="items.php?item=pasta" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="salad_1.jpeg" alt="Salad">
            <h3>Salad</h3>
            <p class="Price">Rs.150-250</p>
            <button class="buy-now"><a href="items.php?item=salad" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="p4_images.webp" alt="coffee">
            <h3>Coffee</h3>
            <p class="Price">Rs.40-100</p>
            <button class="buy-now"><a href="items.php?item=coffee" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="juicestock1.jpeg" alt="Juice">
            <h3>Juice</h3>
            <p class="Price">Rs.50-200</p>
            <button class="buy-now"><a href="items.php?item=juice" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
        <div class="food-box">
            <img src="sandwich1.jpeg" alt="Sandwich">
            <h3>Sandwich</h3>
            <p class="Price">Rs.100-200</p>
            <button class="buy-now"><a href="items.php?item=sandwich" style="color: white; text-decoration: none;">See more items</a></button>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div id="contact-us" class="contact-us">
        <h2 class="section-title">Contact Us</h2>
        <div class="container">
            <p class="text-center">Feel free to reach out to us for any inquiries or to place an order.</p>
            <p class="text-center">Email: contact@cloudkitchen.com</p>
            <p class="text-center">Phone: +123 456 7890</p>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2025 Cloud Kitchen | All rights reserved.</p>
        <p>
            <a href="#contact-us">Contact Us</a> | 
            <a href="#">Privacy Policy</a> | 
            <a href="#">Terms & Conditions</a>
        </p>
        <div class="social-links">
            <a href="https://www.facebook.com" target="_blank">Facebook</a>
            <a href="https://www.twitter.com" target="_blank">Twitter</a>
            <a href="https://www.instagram.com" target="_blank">Instagram</a>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
