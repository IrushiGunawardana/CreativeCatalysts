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

if (isset($_POST['updateDetails'])) {
    $Email = $_POST['Email'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $ContactNumber = $_POST['ContactNumber'];
    $Password = $_POST['Password'];

    $sql = "UPDATE signupdetails SET first_name='$FirstName', last_name='$LastName', contact_number='$ContactNumber', c_password='$Password' WHERE email='$Email'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Data submitted successfully');
        window.location.href='profile.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
