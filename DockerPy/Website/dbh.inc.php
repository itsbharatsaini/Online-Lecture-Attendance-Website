<?php 
 $dbServername = "localhost";
 $dbUsername = "mywebsite_data";
 $dbPassword = "12345";
 $dbName = "mydb";
 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn){
    echo "connection error ".mysqli_connect_error();
}
 ?>
 
