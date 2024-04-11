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
    $cus_name = $_POST['name'];
    $card_num= $_POST['cardnum'];
    $exp_month = $_POST['expmonth'];
    $exp_year= $_POST['expyear'];
    $cvv= $_POST['cvv'];
    
    $sql = "INSERT INTO payment_info (cus_name, card_num,exp_month,exp_year,cvv) VALUES ('$cus_name', '$card_num', '$exp_month', '$exp_year','$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo"<script>
        alert('Data submitted successfully');
        window.location.href='displaypayment.php';
        </script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>