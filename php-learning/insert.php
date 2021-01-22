<?php
include("connectiondatabase.php")
?>

<?php
$name=$_POST['name'];
$address=$_POST['address'];

$query = "INSERT INTO FORMS (name, address) VALUES('$name','$address')";
$data = mysqli_query($conn, $query);

if ($data)
{
	echo "Data inserted into Database";
	header('location:index.php');
}else{
	echo "error";
}



?>