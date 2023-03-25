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



$c_id=$_POST['c_id']; 
$c_name = $_POST['c_name']; 
$exp = $_POST['exp'];   
$c_phone = $_POST['c_phone'];  
$c_street = $_POST['c_street'];
$c_city = $_POST['c_city'];  
$c_state = $_POST['c_state'];
$sports = $_POST['sports']; 


//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '', 'academy'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server'); 
} 
//Create Insert query 
$query = "INSERT INTO coach (C_Name, EXP, C_Phone, C_Street, C_City, C_State, sports) VALUES ('$c_name','$exp', '$c_phone', '$c_street', '$c_city', '$c_state','$sports')"; 

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
if(!$_POST['c_id']) 
echo 'Enter the ID of the Coach as it is the primary key.'; 
else{ 
$validationFlag = true;


$c_id= $_POST['c_id'];
$c_name = $_POST['c_name'];  
$c_phone = $_POST['c_phone'];   
$exp = $_POST['exp'];
$c_street = $_POST['c_street'];
$c_city = $_POST['c_city'];
$c_state = $_POST['c_state']; 
$sports = $_POST['sports']; 

if($_POST['c_name']){ 
    $update = "UPDATE coach SET c_name = '$c_name' WHERE c_id = '$c_id'"; 
} 

if($_POST['c_phone']){ 
    $update = "UPDATE coach SET c_phone = '$c_phone' WHERE c_id = '$c_id'"; 
} 
if($_POST['exp']){ 
    $update = "UPDATE coach SET exp = '$exp' WHERE c_id = '$c_id'"; 
} 
if($_POST['c_street']){ 
    $update = "UPDATE coach SET c_street = '$c_street' WHERE c_id = '$c_id'"; 
} 
if($_POST['c_city']){ 
    $update = "UPDATE coach SET c_city = '$c_city' WHERE c_id = '$c_id'"; 
} 
if($_POST['c_state']){ 
    $update = "UPDATE coach SET c_state = '$c_state' WHERE c_id = '$c_id'"; 
}
if($_POST['sports']){ 
    $update = "UPDATE athlete SET sports = '$sports' WHERE a_id = '$a_id'"; 
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
if(!$_POST['c_id']) 
echo 'Enter the coach ID as it is the primary key.'; 
else{ 

    $c_id= $_POST['c_id'];
    $c_name = $_POST['c_name'];  
    $c_phone = $_POST['c_phone'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    $exp = $_POST['exp']; 
    $c_street = $_POST['c_street'];
    $c_city = $_POST['c_city'];
    $c_state = $_POST['c_state'];  
    $sports = $_POST['sports']; 

$delete = "DELETE FROM coach WHERE c_id = '$c_id'"; 
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
header('location:login_form.html'); 
exit(); 
} 
?>
