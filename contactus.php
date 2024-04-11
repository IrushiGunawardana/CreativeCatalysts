<?php
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
    $CUSTOMERNAME = $_POST['YourName'];
    $CUSTOMEREMAIL = $_POST['useremail'];
    $ISSUE = $_POST['YourMessage'];

    $sql = "INSERT INTO ContactIssues (customer_name,customer_email,customer_issue) VALUES ('$CUSTOMERNAME', '$CUSTOMEREMAIL', '$ISSUE')";

    if ($conn->query($sql) === TRUE) {
        echo"<script>
        alert('Data submitted successfully');
        </script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>