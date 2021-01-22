<?php
include("connectiondatabase.php");
$query = "SELECT * FROM forms";
$data =  mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
echo $total;

?>