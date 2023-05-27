<?php
// Database connection parameters
$servername = "localhost"; // Change to your MySQL server name if needed
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "travel"; // Change to your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform SQL query to check user credentials
    $sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated successfully
        echo "Login successful!";
        header('Location://localhost/travel/homepage.php');
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}

// Close the database connection
$conn->close();
?>