<?php 
if ($_POST['submit'] == 'Login'){ 
//Collect POST values 
$login = $_POST['login']; 
$password = $_POST['password']; 
if($login && $password){ 
//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', '','academy'); 
//Check link to the mysql server 
if(!$link) { 
die('Failed to connect to server: '); 
} 
//Create query (if you have a Logins table the you can select login id and password from there)
$qry='SELECT * FROM Logins WHERE login_id = "ABC" AND password = "12345"'; 
//Execute query 
$result=mysqli_query($link, $qry); 
//Check whether the query was successful or not 
if($login == 'ABC' && $password =='12345'){ 
//$count = mysql_num_rows($result);
$count = 1; 
} 
else{ 
//Login failed 
include('login.html'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
//if query was successful it should fetch 1 matching record from the table. 
if( $count == 1){ 
//Login successful set session variables and redirect to main page. 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login; 
header('location:main_page.php'); 
} 
else{ 
//Login failed 
include('login_form.html'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
include('login_form.html'); 
echo '<center>Username or Password missing!!</center>'; 
exit(); 
} 
} 
else{ 
header("location: login_form.html"); 
exit(); 
} 
?>
