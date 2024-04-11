
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

$id = $_GET['updateid'];
$sql = "Select * from platinumorderdetails where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$CompanyName = $row['companyname'];
$AddType = $row['selectadd'];
$TargetAudience = $row['targetaudience'];
$KeyMessage = $row['keym'];
$ContactNumber = $row['contactnumber'];
$Email = $row['email'];
$DueDate = $row['ddate'];

if(isset($_POST['submit'])){

    $CompanyName = $_POST['companyname'];
    $AddType = $_POST['selectadd'];
    $TargetAudience = $_POST['targetaudience'];
    $KeyMessage = $_POST['keym'];
    $ContactNumber = $_POST['contactnumber'];
    $Email = $_POST['email'];
    $DueDate = $_POST['ddate'];

 $sql = "UPDATE platinumorderdetails set id=$id,$CompanyName=companyname,$AddType=adtype,$TargetAudience=targetaudience,$KeyMessage=keymessage,$ContactNumber=contactnumber,$Email=email,$DueDate=duedate where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
      //echo "updated";
      header('location:platinumdisplay.php');
      
    }else{
        die(mysqli_error($conn));
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Details</title>
        <link rel="stylesheet" type="text/css" href="styles/adddetails1.css"> 

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
        <h1>Add Details</h1>
        <div class="container">
              <form   method="POST" action="platinumdisplay.php">

                <div class="input_filed">
                    <label>Company Name</label><br>
                    <input type="text" id="companyname" name="companyname" placeholder=" Company name" >
                </div>

                <div class="input_filed">
                    <label>Addvertisement Type</label><br>
                    <div class="custom_select" >
                        <select name="selectadd">
                            <option value="">Select</option>
                            <option value="videos">Video</option>
                            <option value="Post">Post</option>
                            <option value="Article">Article</option>
                        </select>
                    </div>
                </div>
               
                <div class="input_filed">
                    <label>Target Audience</label><br>
                    <input type="text" id="targetaudience" name="targetaudience" placeholder="Target Audience" >
                </div>
               
                <div class="input_filed">
                    <label>Key Message</label><br>
                    <input type="text" id="keym" name="keym" placeholder="Key Message" >
                </div>
                <div class="input_filed">
                    <label>Visual Assests</label><br>
                    <input type="file" id="filem">
                </div>
                <div class="input_filed">
                    <label>Contact Number</label><br>
                    <input type="text" id="contactnumber" name="contactnumber" placeholder="Contact Number" >
                </div>
                <div class="input_filed">
                    <label>Email</label><br>
                    <input type="text" id="email" name="email" placeholder="Email" >
                </div>
                <div class="input_filed">
                    <label>Due Date</label><br>
                    <input type="date" id="ddate" name="ddate" >
                </div>
                <br>
                <div class="input_filed">
                    <input type="submit" value="Update" class="btn" />
                </div>

            

        </form>

        </div>


    </body>
</html>