<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "vkgphp";

    $conn=mysqli_connect("localhost", "root", "", "vkgphp"); 
  
    if(mysqli_connect_error()) {
        //echo "Connection Error."; 
    }
    else{
       // echo "Database Connection Successfully."; 
    }
?> 

<!-- 
$conn=mysqli_connect($servername,$username,$password,$dbname);

if ($conn)
{
	echo "connection ok";
}
else
{
	echo " connection failed"
}
 -->