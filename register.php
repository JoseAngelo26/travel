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

// Process registration form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform SQL query to insert user information into the database
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header('Location://localhost/travel/loginform.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>