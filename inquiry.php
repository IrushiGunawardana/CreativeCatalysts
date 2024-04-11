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
    $Full_Name = $_POST['fullname'];
    $Email = $_POST['email'];
    $Inquiry_Type = $_POST['inquirytype'];
    $Other = $_POST['other'];
    $Message = $_POST['message'];

    $sql = "INSERT INTO inquiries (Full_Name, Email, InquiryType, Other, Message) VALUES ('$Full_Name', '$Email', '$Inquiry_Type', '$Other','$Message')";

    if ($conn->query($sql) === TRUE) {
        echo"<script>
        alert('Data submitted successfully');
        window.location.href='inquirydisplay.php';
        </script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>