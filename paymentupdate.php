<?php
  include 'connect.php';
  
  $id = $_GET['updateid'];
  $sql = "Select * from payment_info where id = $id";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  $cus_name = $row['name'];
  $card_num = $row['cardnum'];
  $exp_month = $row['expmonth'];
  $exp_year = $row['expyear'];
  $cvv=$row['cvv']

  if(isset($_POST['submit'])){
    
    $Name= $_POST['Name'];
    $Email = $_POST['Email'];
    $Address= $_POST['Address'];
    $City = $_POST['City'];
    $ContactNum= $_POST['ContactNum'];
    $Invoice= $_POST['Invoice'];

    $sql = "UPDATE payment_info set id=$id,Name='$Name',Email='$Email', Address='$Address',  $Address= $_POST['Address'],$City = $_POST['City'],$ContactNum= $_POST['ContactNum'], $Invoice= $_POST['Invoice']; where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
      //echo "updated";
      header('location:displayMessage.php');
      
    }else{
        die(mysqli_error($conn));
    }
  }
?>