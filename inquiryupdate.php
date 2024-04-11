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
<!DOCTYPE HTML>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/inquiries.css">

		<title>Inquiries</title>


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
<div class = "form">	
            <form action = "inquiry.php" method = "POST"><br>
                <div class="input_filed">
                    <label>Full Name</label><br>
                    <input type="text" class="input" id = "fullname" name = "fullname" required>
                </div>

				<div class="input_filed">
                    <label>Email</label><br>
                    <input type="text" class="input" id = "email" name = "email">
                </div><br>
            
                <div class="input_filed">
                    <label>Inquiry Type</label><br>
                    <div class="custom_select">
                        <select name="inquirytype">
							<option value="">Select</option>
							<option value="service">Service</option> 
							<option value="campaign_planning">Campaign Planning</option> 
							<option value="creative_concept">Creative Concept</option> 
							<option value="campaign_performance">Campaign Performance</option> 
							<option value="account_management">Account Management</option> 
							<option value="other">Other</option> 
                        </select>
                    </div>
                </div><br>
               
                <div class="input_filed">
                    <label>If other please mention your inquiry type here</label><br>
                    <input type="text" class="input" id = "other" name = "other">
                </div><br>

                <div class="input_filed">
                    <label>Message</label><br>
					<textarea name="message" id = "message" cols="107" rows="8" placeholder="Enter your message here" required>
					</textarea>
			    </div><br>
            
                <div class="input_filed">
                    <input type="submit" value="Submit" class="btn">
                </div>
        </div>

<?php
// Get form data
$ID = $row['id'];
$name = $row['Full_Name'];
$Email = $row['Email'];
$InquiryType = $row['InquiryType'];
$Other = $row['Other'];
$Message = $row['Message'];

// Prepare and execute the update query
$sql = "UPDATE inquiries SET name='$name', InquiryType='$InquiryType', Other='$Other', Message='$Message'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
