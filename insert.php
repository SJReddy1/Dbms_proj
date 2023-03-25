<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
</head>

<body>
	<center>
	 <?php



		// servername => localhost
		// username => root
		// password => empty

		$conn = mysqli_connect("localhost", "root", "", "academy");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

    
		$filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];    
	  $folder = 'profile/'.$filename;
	  move_uploaded_file($tempname,$folder);
		
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$education = $_REQUEST['education'];
		$sports = $_REQUEST['sports'];
		$address = $_REQUEST['address'];
		
		
		// Performing insert query execution
		$sql = "INSERT INTO athlete(Name, EmailId, Phone, Gender, DOB, Education, Sports, Address, Profile) VALUES ('$name','$email','$phone', 
			'$gender', '$dob', '$education', '$sports', '$address','$folder')";
		
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				."</h3>";

				echo '<h1>The Student Details are - </h1>';
				
				 /*Draw the table for Players*/ 
				echo '<table border="1"> 
				
				
				<th> Student_name </th> 
				<th> Email </th>
				 <th> Phone </th> 
				 <th> Gender</th>
				 <th>Dob</th>
				 <th>Education</th>
				 <th>Sports</th>
				 <th>Address</th>
				 <th>Profile Pic</th>';
				
					
					?>
					<tr> 
					<td><?php echo $name;?></td>
					<td><?php echo $email;?></td>
					<td><?php echo $phone;?></td> 
					<td><?php echo $gender;?></td>
					<td><?php echo $dob;?></td>
					<td><?php echo $education;?></td> 
					<td><?php echo $sports;?></td>   
					<td><?php echo $address;?></td>
					<td><img src="<?php echo $folder;?>"height="100px"width="100px"></td>
					</tr>';
					<?php 
					
			
				echo "<br/>"; 
				echo "</table></center>"; 
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	
	
		?>
	</center>
</body>
</html>