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
 include_once 'connect.php';

    $sql = "SELECT * FROM Form;";
    $result = $conn -> query($sql);
	if (!$result) {
    		echo 'Could not run query: ' . $conn -> mysql_error;
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
    $result = $conn -> query($sql);
    print"<br>";
echo "(special case) Total Rows: ";
echo $result -> num_rows;

$conn -> close();
?>
</table>
	</center>
</body>

</html>
