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
    $CompanyName = $_POST['companyname'];
    $AddType = $_POST['selectadd'];
    $TargetAudience = $_POST['targetaudience'];
    $KeyMessage = $_POST['keym'];
    $ContactNumber = $_POST['contactnumber'];
    $Email = $_POST['email'];
    $DueDate = $_POST['ddate'];

    $sql = "INSERT INTO platinumorderdetails (companyname,adtype,targetaudience,keymessage,contactnumber,email,dudedate)
     VALUES (' $CompanyName','$AddType', '$TargetAudience',' $KeyMessage', '$ContactNumber','$Email','$DueDate')";

    if ($conn->query($sql) === TRUE) {
        echo"<script>
        alert('Data submitted successfully');
        window.location.href='platinumdisplay.php';
      
        </script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>