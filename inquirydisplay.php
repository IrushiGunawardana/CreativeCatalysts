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
<title>Inquiry Details</title>
<link rel="stylesheet" type="text/css" href="styles/inquirydisplay.css"> 
<link rel="stylesheet" type="text/css" href="styles/footer.css"> 

</head>
<body>
<ul class="menu">
            <li class="menu"><img src="images/creativecatalyst.png" height="70px" width="70px"></li>
            <li class="menu" style="margin-left: 15px;"><a href="homepage.html">Home</a></li>
            <li class="menu"><a href="user dash board.html">Dashboard</a></li>
            <li class="menu"><a href="aboutus.html">About Us</a></li>
            <li class="menu"><a href="Packagepage.html">Packages</a></li>
            <li class="menu"><a href="feedback.html">Feedback</a></li>
            <li class="menu"><a href="contactus.html">Contact Us</a></li>
            <li class="menu"><a href="inquiry.html">Inquiry</a></li>
        </ul>
    
<div class= "tabledata">
        <center>
        <h1 class="inq">Inquiry Details</h1>
      </center>

<table>
 <tr>
   <th>Full Name</th>
   <th>Email</th>
   <th>Inquiry Type</th>
   <th>Other</th>
   <th>Message</th>
  </tr> 

<?php
$query = mysqli_query($conn,"select*FROM inquiries");
while($row = mysqli_fetch_array($query)){
$ID = $row['id'];
$name = $row['Full_Name'];
$Email = $row['Email'];
$InquiryType = $row['InquiryType'];
$Other = $row['Other'];
$Message = $row['Message'];


 echo '<tr>
            <th scope="row">' . $name . '</th>
            <td>' . $Email . '</td>
            <td>' . $InquiryType . '</td>
            <td>' . $Other . '</td>
            <td>' . $Message . '</td>
            
            <td><button class="btn1"><a href="inquiryupdate.php?updateid='.$ID.'" class="hi">Edit Inquiry</a></button>
            <button class="btn1"><a href="deleteinquiry.php?deleteid='.$ID.'" class="hi">Delete Inquiry</a></button>
        
      </tr>
         
      <tr>';

}
?>

</table><br><br>
</div>

  <center>
          <button onclick = "gotoLink(this)" value = "trending.html">Home Page</button>
          </div>
  </center>
        
        <script>
            function gotoLink(link){
                console.log(link.value);
                location.href = 'trending.html'
            }
        </script>

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
            <center>
                <p class="copyc">&copy; CreativeCatalyst. All rights reserved.</p>
            </center>
       </footer>
    
</body>
</html>