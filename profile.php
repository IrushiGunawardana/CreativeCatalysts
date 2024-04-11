<?php
require 'connect.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="styles/profile.css"> 
  <link rel="stylesheet" type="text/css" href="styles/footer.css"> 
</head>
<body>
<ul class="menu">
    <li class="menu"><a href="home.html">Home</a></li>
    <li class="menu"><a href="dashboard.html">Dashboard</a></li>
    <li class="menu"><a href="aboutus.html">About Us</a></li>
    <li class="menu"><a href="Packagepage.html">Packages</a></li>
    <li class="menu"><a href="feedback.html">Feedback</a></li>
    <li class="menu"><a href="contactus.html">Contact Us</a></li>
    <li class="menu"><a href="inquiry.html">Inquiry</a></li>

</ul>
   <h1>Profile</h1>

  <div class="container">
   
    <div class="profile">

      <?php
      $sql = "select * from SignupDetails ;";
      $result = mysqli_query( $con,$sql);
    while ($row = mysqli_fetch_array($result)) {
      $ID = $row['id'];
      $FirstName = $row['first_name'];
      $LastName = $row['last_name'];
      $Email = $row['email'];
      $ContactNumber = $row['contact_number'];
    
    
    ?>
       <span id="result-FirstName" ><h4> First Name       : </h4></span><?php echo $FirstName;?><br><br>
       <span id="result-LastName" ><h4> Last Name      :</h4></span><?php echo $LastName;?><br><br>
       <span id="result-email" > <h4> Email             : </h4></span><?php echo $Email;?><br><br> 
        <span id="result-phoneNumber" ><h4> Contact Number :</h4></span><?php echo $ContactNumber;?><br><br>
      
  </div><br>

  <!--<button><h3><a href="settings page.html">Edit profile</a></h3></button>-->

  <a href="settings page.php"><input class="button1" type="submit" name="updateProfile" value="Update Profile"></a>
  <!--<button><h3><a href="delete.php?deleteemail=' . $Email . '">Delete Account</a></h3></button>-->

 <a href="delete.html"><input class="button1" type="submit" name="deleteProfile" value="Delete Profile"></a>


</body>
<?php
}
?>

   
  
</html>
