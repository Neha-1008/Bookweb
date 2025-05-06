<?php
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding books to the cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['book_title'])) {
    $book = [
        'title' => $_POST['book_title'],
        'price' => $_POST['book_price'],
        'image' => $_POST['book_image']
    ];

    // Add book to cart
    $_SESSION['cart'][] = $book;
}

// Remove an item from the cart
if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    array_splice($_SESSION['cart'], $index, 1);
    header("Location: cart.php");
    exit();
}

// Clear the cart
if (isset($_GET['clear'])) {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        .cart-container { width: 50%; margin: auto; text-align: center; }
        .cart-item { display: flex; align-items: center; justify-content: space-between; margin: 10px 0; padding: 10px; border: 1px solid #ccc; }
        .cart-item img { width: 80px; height: auto; }
        .cart-item button { background: red; color: white; border: none; padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Your Shopping Cart</h2>

<div class="cart-container">
    <?php if (!empty($_SESSION['cart'])): ?>
        <?php foreach ($_SESSION['cart'] as $index => $book): ?>
            <div class="cart-item">
                <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>">
                <p><?php echo $book['title']; ?></p>
                <p><strong>₹<?php echo $book['price']; ?></strong></p>
                <a href="cart.php?remove=<?php echo $index; ?>"><button>Remove</button></a>
            </div>
        <?php endforeach; ?>
        <a href="cart.php?clear=true"><button style="background: black;">Clear Cart</button></a>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>

</body>
</html>
