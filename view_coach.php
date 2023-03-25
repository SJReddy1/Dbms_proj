<html>
<head>
<title>Coach Page</title>
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
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
 
 /*Connect to mysql server*/ 
$link = mysqli_connect('localhost', 'root', '', 'academy');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ');
 } 

 /*Create query*/ 
$qry = 'SELECT * FROM coach'; 

/*Execute query*/ 
$result = mysqli_query($link, $qry);
echo '<h1>The Coach Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> S no. </th>
<th> Coach_name </th> 
 <th> Phone </th> 
 <th>Experience</th>
 <th>Street</th>
 <th>City</th>
 <th>State</th>
 <th>Sports</th>';


/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['C_ID'].'</td>
<td>'.$row['C_Name'].'</td>
<td>'.$row['C_Phone'].'</td>   
<td>'.$row['EXP'].'</td>
<td>'.$row['C_Street'].'</td> 
<td>'.$row['C_City'].'</td>
<td>'.$row['C_State'].'</td>
<td>'.$row['sports'].'</td>
</tr>'; 
}

echo '</table>';
} 
else{ 
header('location:login_form.php'); 
exit(); 
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