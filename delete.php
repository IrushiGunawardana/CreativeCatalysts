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

if(isset($_GET['deleteemail'])){
   $Email=$_GET['deleteemail']; 

   $sql="DELETE FROM SignupDetails WHERE email=$Email";

   $result=mysqli_query($conn,$sql);
   if ($result){
    echo "Deleted Successfull";
    header('location:./profile.php');
   }else  {
    die(mysqli_error($conn));
   }
}

/*if(isset($_POST['deleteProfile'])){
    $Email=$_POST['Email']; 
 
    $sql="DELETE FROM signupdetails WHERE email='$Email'";
 
    $result=mysqli_query($conn,$sql);
    if ($result){
     echo "Deleted Successfull";
     header('location:profile.php');
    }else  {
     die(mysqli_error($conn));
    }
 }*/
