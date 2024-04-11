
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['pnumber'];
$password = $_POST['pass'];

	// Database connection
	$conn = new mysqli('localhost','root','','CreativeCatalyst');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("INSERT INTO SignupDetails (first_Name, last_Name, email, contact_number, c_password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstName, $lastName, $email, $number, $password);
		$execval = $stmt->execute();
		echo $execval;
		header("Location: homepage.html");
		exit();
		$stmt->close();
		$conn->close();
	}
?>