<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "petcare";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

 
<div class= "tabledata">
<table border="1px">
 <tr>
   <th></th>
   <th>Service</th>
   <th>Date</th>
   <th>Time</th>
   <th>Additionalinfo</th>
   <th>ID</th>
   <th></th>
  </tr> 

<?php
$query = mysqli_query($conn,"select*FROM book_appoinment");
while($row = mysqli_fetch_array($query))

{

?>

  <tr>
   <td><?php echo $row['PetType']; ?></td>
   <td><?php echo $row['Service']; ?></td>
   <td><?php echo $row['Date']; ?></td>
   <td><?php echo $row['Time']; ?></td>
   <td><?php echo $row['Additionalinfo']; ?></td>
   <td><?php echo $row['ID']; ?></td>
   <td>
        <button class="ctn"><a href="editcontact.php?updateid='.$id.'">Edit Appoinment</a></button>
        <button class="ctn"><a href="delete.php?deleteid='.$id.'" >Cancel Appoinment</a></button>
   </td>

 </tr>
<?php
}
?>
</table><br><br>
</div>