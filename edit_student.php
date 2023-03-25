<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
// Code to be executed when 'Insert' is clicked. 
if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 



$a_id=$_POST['a_id']; 
$student_name = $_POST['student_name']; 
$email = $_POST['email'];   
$phone = $_POST['phone'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$education = $_POST['education'];  
$sports = $_POST['sports']; 
$address = $_POST['address']; 


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '', 'academy'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
//Create Insert query 
$query = "INSERT INTO athlete (Name, EmailId, Phone, Gender, DOB, Education, Sports, Address) VALUES ('$student_name','$email', '$phone', '$gender', '$dob', '$education','$sports', '$address')"; 
//Execute query 
$results = mysqli_query($link, $query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data inserted successfully! '; 
} 
} 
 
// Code to be executed when 'Update' is clicked. 
if ($_POST['submit'] == 'Update'){ 
if(!$_POST['a_id']) 
echo 'Enter the ID of the Student as it is the primary key.'; 
else{ 
$validationFlag = true;


$a_id= $_POST['a_id'];
$student_name = $_POST['student_name']; 
$email = $_POST['email']; 
$phone = $_POST['phone'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
$gender = $_POST['gender']; 
$dob = $_POST['dob'];
$education = $_POST['education'];  
$sports = $_POST['sports']; 
$address = $_POST['address']; 

if($_POST['student_name']){ 
    $update = "UPDATE athlete SET student_name = '$student_name' WHERE a_id = '$a_id'"; 
} 
if($_POST['email']){ 
$update = "UPDATE athlete SET email = '$email' WHERE a_id = '$a_id'"; 
} 

if($_POST['phone']){ 
    $update = "UPDATE athlete SET phone = '$phone' WHERE a_id = '$a_id'"; 
} 
if($_POST['gender']){ 
    $update = "UPDATE athlete SET gender = '$gender' WHERE a_id = '$a_id'"; 
} 
if($_POST['dob']){ 
    $update = "UPDATE athlete SET dob = '$dob' WHERE a_id = '$a_id'"; 
} 
if($_POST['education']){ 
    $update = "UPDATE athlete SET education = '$education' WHERE a_id = '$a_id'"; 
} 
if($_POST['sports']){ 
    $update = "UPDATE athlete SET sports = '$sports' WHERE a_id = '$a_id'"; 
} 
if($_POST['address']){ 
    $update = "UPDATE athlete SET address = '$address' WHERE a_id = '$a_id'"; 
} 



//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '','academy'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: '); 
} 
//Execute query 
$results = mysqli_query($link, $update); 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else 
echo mysqli_info($link); 
} 
} 
} 
// Code to be executed when 'Delete' is clicked. 
if ($_POST['submit'] == 'Delete'){ 
if(!$_POST['a_id']) 
echo 'Enter the student ID as it is the primary key.'; 
else{ 

    $a_id= $_POST['a_id'];
    $student_name = $_POST['student_name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    $gender = $_POST['gender']; 
    $dob = $_POST['dob'];
    $education = $_POST['education'];  
    $sports = $_POST['sports']; 
    $address = $_POST['address']; 

$delete = "DELETE FROM athlete WHERE a_id = '$a_id'"; 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '','academy'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: '); 
} 
//Execute query 
$results = mysqli_query($link, $delete); 
if($results == FALSE) 
echo mysqli_error() . '<br>'; 
else 
echo 'Data deleted successfully'; 
} 
} 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
