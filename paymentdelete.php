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


if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql="DELETE FROM payment_info where id= $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        echo "Payment information deleted successfully";
        header('location:displaypayment.php');
        
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
    
    