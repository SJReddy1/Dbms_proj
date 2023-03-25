<html>
<head>
<title>Main Page</title>
<link rel="stylesheet" href="main_page_css.css">
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
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 
require('menu.php'); 
echo '<center><h1>Welcome to the AIST Academy</h1> 
<table border="1" width="560" cellpadding="5" cellspacing="1" bordercolor="black" style="border-right-width:1;"> 
<tr><td colspan="2" align="center"> - STUDENT - </td></tr> 
<tr><td><a href="view_student.php">View All Student Details</a> 
<br><a href="studentstat.php">View Student Information</a></td> 
<td><a href="register_student.php">Register/Update Student</a><td></tr> 
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td colspan="2" align="center"> - COACH - </td></tr> 
<tr><td><a href="view_coach.php">View All Coach Details</a> 
<td><a href="register_coach.php">Register/Update Coach</a><td></tr> 
<tr><td colspan="2">&nbsp;</td></tr>
 
</table> 
</center>'; 
} 

?>
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
