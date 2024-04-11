<!DOCTYPE html>
<html>
<head>
  <title>User Profile Form</title>
  <link rel="stylesheet" type="text/css" href="styles/settings.css"> 
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
  <h1>Change Profile</h1>
  
    <form action="insert.php" method="POST">
      <div class="container">
       <center>
        <h5>Change Profile Picture</h5>
        <img id="profileImage" src="default-profile.png" alt="Profile Picture">
      
        <input type="file" id="fileInput" accept="image/*">
        <button><label for="fileInput">Choose Image</label></button>
        </center>
      <script>
        // Get the necessary elements
        const profileImage = document.getElementById('profileImage');
        const fileInput = document.getElementById('fileInput');
    
        // Handle the file input change event
        fileInput.addEventListener('change', function(event) {
          const file = event.target.files[0];
    
          // Check if a file is selected
          if (file) {
            // Create a file reader object
            const reader = new FileReader();
    
            // Set up the file reader onload event
            reader.onload = function() {
              // Update the profile image source
              profileImage.src = reader.result;
            };
    
            // Read the file as a data URL
            reader.readAsDataURL(file);
          }
        });
      </script>
      
      <div class="form-group">
        <label for="Email">Enter your current Email:</label>
        <input type="Email" id="Email" name="Email" required>
      </div>

      <div class="form-group">

        <label for="FirstName">First Name:</label>
        <input type="text" id="FirstName" name="FirstName" required>
      </div>
      <div class="form-group">

        <label for="LastName">Last Name:</label>
        <input type="text" id="LastName" name="LastName" required>
      </div>
      
      <div class="form-group">
        <label for="ContactNumber">Contact Number:</label>
        <input type="tel" id="ContactNumber" name="ContactNumber" required>
      </div>

      <div class="form-group">
        <label for="Password">Password:</label>
        <input type="password" id="Password" name="Password" required>
      </div>
      

     
      <div class="form-group">
      <input type="submit" name="updateDetails" value="Update Details" >
      </div>
      
    
     
   
   
  
  </div> 
    </form>
  <button><h4><a href="user dash board.html">Back To Dashboard</a></h4></button>
  
</body>
</html>

  


  
