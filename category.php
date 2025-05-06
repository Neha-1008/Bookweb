<?php
// Static array of books categorized by type
$books = [
    'Epic Books' => [
        ['title' => 'Mahabharata', 'image_url' => 'category images/epic1.jpg', 'description' => 'An epic tale of ancient India.'],
        ['title' => 'Ramayana', 'image_url' => 'category images/epic2.jpg', 'description' => 'The story of Lord Rama.']
    ],
    'Story Books' => [
        ['title' => 'Panchatantra', 'image_url' => 'category images/story book.jpg', 'description' => 'A collection of moral stories.']
    ],
    'Thriller/Mystery Books' => [
        ['title' => 'Sherlock Holmes', 'image_url' => 'category images/mystery.jpg', 'description' => 'The adventures of a famous detective.']
    ],
    'Fiction' => [
        ['title' => 'The Great Gatsby', 'image_url' => 'category images/fictional.jpg', 'description' => 'A classic novel by F. Scott Fitzgerald.']
    ]
];

// Get the selected category from the URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Check if the category exists in the array
if (isset($books[$category])) {
    echo "<h1>Books in " . htmlspecialchars($category) . "</h1>";
    echo '<div class="book-list">';
    foreach ($books[$category] as $book) {
        echo '<div class="book-item">';
        echo '<img src="' . htmlspecialchars($book['image_url']) . '" alt="' . htmlspecialchars($book['title']) . '">';
        echo '<h3>' . htmlspecialchars($book['title']) . '</h3>';
        echo '<p>' . htmlspecialchars($book['description']) . '</p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "<h1>No books found in this category.</h1>";
}
?>
