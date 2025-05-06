<?php
// Check if query is set
if (isset($_GET['query'])) {
    $query = strtolower($_GET['query']);

    // List of books
    $books = [
        "Dark Verse Series",
        "Grandma's Bag of Stories",
        "Do It Today",
        "A Good Girl's Guide to Murder",
        "Rich Dad Poor Dad",
        "It Ends With Us",
        "Too Good To Be True",
        "The Adventures of Sherlock Holmes",
        "The Power of Your Subconscious Mind",
        "Samsara",
        "Jungle Book",
        "Hanuman",
        "Panchatantra",
        "Jataka Tales",
        "Vikram and Betaal",
        "Akbar and Birbal",
        "The Hound of the Baskervilles",
        "Death on the Nile",
        "Sharp Objects",
        "Angels and Demons",
        "Big Little Lies",
        "The Detective",
        "Murder on the Orient Express",
        "Gone Girl",
        "The Da Vinci Code",
        "Curious Incident of the Dog in the Night",
        "A Murder in Dehradun",
        "Dune",
        "Foundation",
        "Neuromancer",
        "Hyperion",
        "Snow Crash",
        "Red Mars",
        "The Mystery of the Forgotten Forest",
        "Galactic Odyssey",
        "The Dragon's Legend",
        "Chronos Crossing",
        "The Arranged Marriage Murder",
        "Pride and Prejudice",
        "The Little Mermaid",
        "Cinderella",
        "Snow White",
        "Rapunzel",
        "Beauty and the Beast",
        "The Ramayan",
        "The Mahabharata",
        "Bhagavad Gita",
        "Shiva Purana",
        "Vishnu Purana",
        "Steve Jobs",
        "Long Walk to Freedom",
        "Becoming",
        "Einstein",
        "Mary Kom",
        "A.P.J Abdul Kalam"
    ];

    // Search books
    $searchResults = array_filter($books, function($book) use ($query) {
        return stripos($book, $query) !== false;
    });

    if (empty($searchResults)) {
        echo "<p>No results found for '<b>$query</b>'</p>";
    } else {
        echo "<p>Results for '<b>$query</b>':</p>";
        echo "<ul>";
        foreach ($searchResults as $result) {
            echo "<li>$result</li>";
        }
        echo "</ul>";
    }
} else {
    echo "<p>Please enter a search query.</p>";
}
?>
