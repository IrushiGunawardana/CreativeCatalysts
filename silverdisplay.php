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
<title>Silver Package Order</title>
<link rel="stylesheet" type="text/css" href="styles/platorderdisplay.css"> 
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
        <img src = "images/silver.png" width="200" height="200" alt="platinum"></div>
        <h1 class="silver1">Silver Package -$500</h1>
      </center>

<table>
 <tr>
 <th>Pid</th>
   <th>Company Name</th>
   <th>Add Type</th>
   <th>Target Audience</th>
   <th>Key Message</th>
   <th>Contact Number</th>
   <th>Email</th>
   <th>Due Date</th>
  </tr> 
  
<?php
$query = mysqli_query($conn,"select*FROM  silverorderdetails");
while($row = mysqli_fetch_array($query))

{

?>

  <tr>
  <td><?php echo $row ['id']; ?></td> 
   <td><?php echo $row['companyname']; ?></td>
   <td><?php echo $row['adtype']; ?></td>
   <td><?php echo $row['targetaudience']; ?></td>
   <td><?php echo $row['keymessage']; ?></td>
   <td><?php echo $row['contactnumber']; ?></td>
   <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['duedate']; ?></td>
   <td>
        <button class="btn1"><a href="platorderupdate=<?php echo $row['id'];?>" class="hi">Edit Order</a></button>
        <button class="btn1"><a href="deletesilver.php?deleteid=<?php echo $row['id']; ?>" class="hi">Delete Order</a></button>

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
  <button class="btn2"><a href=""class="edit">Proceed To CheckOut</a></button>
  <br>
  <button class="btn2"><a href="Packagepage.html"class="edit">Back to Packages</a></button>
</center>

</body>
</html>