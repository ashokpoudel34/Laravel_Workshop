<?php
    $conn = new mysqli("localhost","ashok","8848","RegForm");
	if ($conn -> connect_errno) 
	{
  	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}
	//$conn = mysqli_connect("localhost", "ashok", "8848", "RegForm");
		//$conn = new mysqli("localhost","ashok","8848","RegForm");
		
		// Check connection
		/*if (mysqli_connect_errno()) {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
 			 exit();
		}*/
		
		//if ($conn -> connect_errno) {
  			//echo "Failed to connect to MySQL: " . $conn -> connect_error;
			//  exit();
		//}
?>


