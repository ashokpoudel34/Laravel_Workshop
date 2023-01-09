<!DOCTYPE html>
<html>

<head>
	<title>Database page</title>
</head>

<body>
	<center>
	<table border="1">
   <tr>
      <th>Fname</th>
      <th>Mname</th>
      <th>Lname</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email</th>
      <th>City</th>
      <th>State</th>
      <th>Country</th>
    </tr>
    
 <?php
 //Object Oriented Method !!
$mysqli = new mysqli("localhost","ashok","8848","RegForm");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

    $sql = "SELECT * FROM Form;";
    $result = $mysqli -> query($sql);
	if (!$result) {
    		echo 'Could not run query: ' . $mysqli -> mysql_error;
    		exit;
	}
	
echo "Total Rows: ";
echo $result -> num_rows;
 	    while ($array = $result ->fetch_row())
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> <td>";
        echo $array[4]; 
        print "</td> <td>";
        echo $array[5]; 
        print "</td> <td>";
        echo $array[6]; 
        print "</td> <td>";
        echo $array[7]; 
        print "</td> <td>";
        echo $array[8];
        print "</td> </tr>";
    }

//to check free_result method working !!
    $result -> free_result();
        $sql = "SELECT * FROM Form WHERE fname='Ashok';";
    $result = $mysqli -> query($sql);
    print"<br>";
echo "(special case) Total Rows: ";
echo $result -> num_rows;

$mysqli -> close();
?>
</table>
	</center>
</body>

</html>
