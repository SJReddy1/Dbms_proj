<html>
<head>
<title>Student_update Page</title>
<link rel="stylesheet" href="view_student_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
  <div class="content">
    <div position='relative'>
      <img src="images\blury-table-designify.png" style="position:absolute;margin-left:185px;height:100px;width:110px;">
    </div>
    <div class="heading" style='background-color:#FF2626;opacity:1;'>
    <span style="padding-top:50px;"> ALL INDIA SPORTS TRAINING ACADEMY </span>
    </div>
<br>
<br><br>
 
<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
} 
else{ 
header('location:login_form.html'); 
exit(); 
} 
?> 

<center> 
<h1>Student Registration/Updation Form</h1> 
<form action="edit_student.php" method="post"> 
<table cellpadding = "10"> 
<tr> 
<td>Student ID*</td> 
<td><input type="number" name="a_id" maxlength="8"></td> 
</tr> 
<tr> 
<td>Student Name</td> 
<td><input type="text" name="student_name" maxlength="50"></td> 
</tr> 
<tr>  
<td>Email ID</td> 
<td><input type="text" name="email" maxlength="50"></td> 
</tr>
<tr>
<td>Phone</td> 
<td><input type="text" name="phone" maxlength="10"></td> 
</tr> 
<tr>
<td>Gender</td> 
<td><input type="text" name="gender" maxlength="30"></td> 
</tr>
<tr>
<td>DOB</td> 
<td><input type="date" name="dob" ></td> 
</tr>
<tr>
<td>Education</td> 
<td><input type="text" name="education" maxlength="30"></td> 
</tr>
<tr>
<td>Sports</td> 
<td><input type="text" name="sports" maxlength="30"></td> 
</tr>
<tr>
<td>Address</td> 
<td><input type="text" name="address" maxlength="50"></td> 
</tr>
<td><input type="submit" name="submit" value="Insert"></td> 
<td><input type="submit" name="submit" value="Update"></td> 
<td><input type="submit" name="submit" value="Delete"></td> 
</tr> 
</table> 
</form> 
</center> 
<footer>
  <div class="welcome">
    <img src='images\blury-table-designify.png' alt="Image" height="140" width="160">
    <span style="color: white;font-size: 25 px;"><br><br>Welcome to AIST Academy. It is <br> a leading sports academy in Jabalpur,<br>providing training for different sports <br> for the aspirants to achieve their goals.<br> </span>
    <div class="vl"></div>
  </div>
  <div class="timing">
    <span style="color: white;font-size: 30px;">Training Time: </span>
    <hr style="width:40%;margin-left:0px;">
    <br><span style="color: white;font-size: 27px;">Morning: &emsp; &emsp; 6.30 am - 8.30 am<br>
      <br>Evening: &emsp; &emsp; 4.00 pm - 6.00 pm<br><br>
      Sun: &emsp; &emsp; &emsp; &ensp; Closed<br></span>
    <div class="vl" style="margin-left:425px;"></div>
  </div>

  <div class="address">
    <span style="color: white;font-size: 30px;">Office Address:</span>
    <hr style="color:black;width:45%;margin-left:0px;">
    <span style="color: white;font-size: 25px;">All India Sports Training Academy,<br>Airport Rd, PDPM IIITDM Jabalpur Campus, <br>Khamaria, Jabalpur, Madhya Pradesh 482005
      <br><br>mob: 076127 94094 Fax: +91-761-2632524<br>
      <br> Email id: aista21@gmail.com<br></span>

  </div>
  <div class="developer">Web team- Adarsh Kumar, Soreddy Jitendra Reddy</div>

</footer>
</body>
</html>
