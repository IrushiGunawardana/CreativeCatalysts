<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "CreativeCatalyst";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $useremail = $_POST['useremail'];
    $password = $_POST['userpass'];

    // Prepare the SQL statement using a prepared statement
    $stmt = $conn->prepare("SELECT * FROM SignupDetails WHERE email = ?");
    
    // Bind the parameter to the prepared statement
    $stmt->bind_param("s", $useremail);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result of the query
    $result = $stmt->get_result();

    // Check if the customer exists and verify the password
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['c_password'];

        // Verify the password
        if ($password === $storedPassword) {
            // Additional code for successful login (e.g., session management, redirect)
            header("Location: homepage.html");
            exit();
      
        } else {

            header("Location: login.html");
            exit();
        }
    } else {

        header("Location: login.html");
        exit();
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>