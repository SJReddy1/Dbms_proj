
 <?php 
//Start the session to see if the user is authenticated user. 
session_start(); 

if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 

if ($_POST['submit'] == 'Submit') 
{ 
if($_POST['a_id']) 
{ 
require('menu.php'); 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '','academy'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server '); 
} 

//Prepare query 
$a_id = $_POST['a_id']; 
$query = "SELECT * FROM athlete WHERE A_ID = '$a_id'";
//Execute query 
$result = mysqli_query($link, $query); 
echo '<h1>The Student Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> S no. </th>
<th> Student_name </th> 
<th> Email </th>
 <th> Phone </th> 
 <th> Gender</th>
 <th>Dob</th>
 <th>Education</th>
 <th>Sports</th>
 <th>Address</th>
 <th>Profile Pic</th>';

while($row = mysqli_fetch_array($result)) 
 
{ 
    
    ?>
    <tr> 
    <td><?php echo $row['A_ID'];?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['EmailId'];?></td>
    <td><?php echo $row['Phone'];?></td> 
    <td><?php echo $row['Gender'];?></td>
    <td><?php echo $row['DOB'];?></td>
    <td><?php echo $row['Education'];?></td> 
    <td><?php echo $row['Sports'];?></td>   
    <td><?php echo $row['Address'];?></td>
    <td><img src="<?php echo $row['Profile'];?>"height="100px"width="100px"></td>
    </tr>';
    <?php 
    
} 
echo "<br/>"; 
} 
echo "</table></center>"; 
} 
else 
{ 
include("student_stat.php"); 
echo "<center>Enter the Student ID</ center>"; 
} 
} 

 
 
else{ 
header('location:login_form.php'); 

exit(); 
} 
?>
