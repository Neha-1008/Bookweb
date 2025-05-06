<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Top 10 Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Admin Dashboard</h1>

        <!-- Top 10 Books Section -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Top 10 Books</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Book Title</th>
                            <th>Rentals</th>
                            <th>Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection
                        $conn = new mysqli("localhost", "root", "", "books4u_db");

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Fetch top 10 books
                        $sql = "SELECT title, rentals, revenue FROM books ORDER BY rentals DESC LIMIT 10";
                        $result = $conn->query($sql);
                        $rank = 1;

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $rank++ . "</td>";
                                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['rentals']) . "</td>";
                                echo "<td>₹" . number_format($row['revenue'], 2) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Analysis Section -->
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Rental Analysis</h4>
            </div>
            <div class="card-body">
                <p><strong>Total Rentals:</strong> 
                    <?php
                    // Display total rentals
                    $conn = new mysqli("localhost", "root", "", "books4u_db");

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT SUM(rentals) AS total_rentals FROM books";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo htmlspecialchars($row['total_rentals']);
                    $conn->close();
                    ?>
                </p>
                <p><strong>Total Revenue:</strong> 
                    <?php
                    // Display total revenue
                    $conn = new mysqli("localhost", "root", "", "books4u_db");

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT SUM(revenue) AS total_revenue FROM books";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo "₹" . number_format($row['total_revenue'], 2);
                    $conn->close();
                    ?>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
