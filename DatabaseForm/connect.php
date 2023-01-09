<?php
    $host='localhost';
    $username='ashok';
    $password='8848';
    $dbname = "RegForm";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
