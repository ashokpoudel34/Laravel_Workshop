<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
//Both OOM & Procedural Method !!

		//$conn = mysqli_connect("localhost", "ashok", "8848", "RegForm");
		$conn = new mysqli("localhost","ashok","8848","RegForm");
		
		// Check connection
		/*if (mysqli_connect_errno()) {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			 exit();
		}*/
		
		if ($conn -> connect_errno) {
  			echo "Failed to connect to MySQL: " . $conn -> connect_error;
			  exit();
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['firstname'];
		$middle_name = $_REQUEST['middlename'];
		$last_name = $_REQUEST['lastname'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$country = $_REQUEST['country'];
		
		if($first_name != null && $last_name != null){
		
		// Performing insert query execution
		$sql = "INSERT INTO Form VALUES ('$first_name','$middle_name','$last_name','$address','$phone','$email','$city','$state','$country')";
		
		//if(mysqli_query($conn, $sql)){
		if($conn -> query($sql)){
			echo "<h3>data stored in a database successfully. Please browse your localhost php myadmin to view the updated data</h3>";

			echo nl2br("\n$first_name\n$middle_name\n $last_name\n "
				. "$address\n $phone\n $email\n$city\n$state\n$country");
				
		} else{
			echo "ERROR: Sorry ! $sql. " .$conn -> mysql_error;
		
		}
		}
		else{
		echo "Enter Required Field !";
		}
		// Close connection
		//mysqli_close($conn);
		$conn->close();
		?>
			<br><br><button name='redirect' onclick="window.location.href='database.php'">See Database</button>
	</center>
</body>

</html>
