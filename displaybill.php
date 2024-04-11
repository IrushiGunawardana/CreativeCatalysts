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
<title>Billing Details</title>
<link rel="stylesheet" type="text/css" href="styles/displaycss.css"> 
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
<h1 class="platinum1">BILLING DETAILS</h1><br>
</center>

<table>
    <tr>
      <th>Customer Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>City</th>
      <th>Contact Number</th>
      <th>Invoice</th>
     </tr> 
   
   <?php
   $query = mysqli_query($conn,"select*FROM billing_info");
   while($row = mysqli_fetch_array($query))
   
   {
   
   ?>
   
     <tr>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['Email']; ?></td>
      <td><?php echo $row['Address']; ?></td>
      <td><?php echo $row['City']; ?></td>
      <td><?php echo $row['ContactNumber']; ?></td>
      <td><?php echo $row['Invoice']; ?></td>
     
      </tr>
     <?php
     }
     ?>
     </table><br><br>
     </div>
     </body>
     </html>