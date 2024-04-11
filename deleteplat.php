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

    $sql="delete from `platinumorderdetails` where id= $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        echo "Order deleted successfully";
        header('location:platinumdisplay.php');
        
    }
    else{
        die(mysqli_error($conn)); 
    }
}
?>