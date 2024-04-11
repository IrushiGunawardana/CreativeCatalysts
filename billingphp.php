<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "creativecatalyst";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST['fullname'];
    $Email= $_POST['email'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $ContactNum= $_POST['cnum'];
    $Invoice = $_POST['invoice'];

    $sql = "INSERT INTO billing_info (Name,Email,Address,City, ContactNum, Invoice) VALUES ('$Name', '$Email', '$Address', '$City','$ContactNum','$Invoice ')";

    if ($conn->query($sql) === TRUE) {
        echo"<script>
        alert('Data submitted successfully');
        window.location.href='finalpayment.html';
        </script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>