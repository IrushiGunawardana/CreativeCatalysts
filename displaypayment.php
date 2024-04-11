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
?>


    
<html>
<head>
<title>Payment Details</title>
<link rel="stylesheet"  href="styles/displaycss.css">
<link rel="stylesheet"  href="styles/footer.css"> 
</head>
<body>
<ul class="menu">
            <li class="menu"><img src="images/creativecatalyst.png" height="70px" width="70px"></li>
            <li class="menu" style="margin-left: 15px;"><a href="homepage.html">Home</a></li>
            <li class="menu"><a href="dashboard.html">Dashboard</a></li>
            <li class="menu"><a href="aboutus.html">About Us</a></li>
            <li class="menu"><a href="Packagepage.html">Packages</a></li>
            <li class="menu"><a href="feedback.html">Feedback</a></li>
            <li class="menu"><a href="contactus.html">Contact Us</a></li>
            <li class="menu"><a href="inquiry.html">Inquiry</a></li>
        </ul>
<div class= "tabledata">


<center>
<h1 class="platinum1">PAYMENT DETAILS</h1><br>
</center>

<table>
    <tr>
      <th>Name In Card</th>
      <th>Card Number</th>
      <th>Expiry Month</th>
      <th>Expiry Year</th>
      <th>CVV</th>
     </tr> 
   
   <?php
   $query = mysqli_query($conn,"select*FROM payment_info");
   $sql="select * from payment_info";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result))
   {
    $id=$row['id'];
   }
   

   if($result)
   while($row = mysqli_fetch_array($query))


   
   {
   
   ?>
   
     <tr>
      <td><?php echo $row['cus_name']; ?></td>
      <td><?php echo $row['card_num']; ?></td>
      <td><?php echo $row['exp_month']; ?></td>
      <td><?php echo $row['exp_year']; ?></td>
      <td><?php echo $row['cvv']; ?></td>

   <td>
      <button class="btn1"><a href="paymentupdate.php?updateid='.$id.'" class="hi">Edit Payment</a></button>
      <button class="btn1"><a href="paymentdelete.php?deleteid='.$id.'" class="hi">Delete Payment</a></button>
 </td>
      </tr>

     <?php
     }
     ?>
     </table><br><br>
     </div>
     <center>
  <h3 class="thank">Thank You For Choosing Creative Catalyst</h3>
  <br>
  <button class="btn2"><a href="statuspay.html" class="edit" >Proceed To CheckOut</a> </button>
  <br>
  <button class="btn2"><a href=""class="edit">Back to Packages</a></button>
</center>


<footer class="footer">
            <div class="containerf">
                <div class="row">
                    <div class="footer-col">
                        <h4>CreativeCatalyst</h4>
                        <ul >
                            <li><a href="AboutUs.html">About us</a></li>
                            <li><a href="feedback.html">Feedback</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Get in touch with us</h4>
                        <ul>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="contactus.html">ContactUs</a></li>
                            <li><a href="inquiry.html">Inquiry</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-col">
                    
                        <div class="social-links">
                          <img src="images/creativecatalyst.png" height="200px" width="200px">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </br>
    </br>
</br>
        
            <center>
                <p class="copyc">&copy; CreativeCatalyst. All rights reserved.</p>
            </center>
       </footer>

     </body>
     </html>