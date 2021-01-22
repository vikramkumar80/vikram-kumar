<?php
include("connectiondatabase.php");
$id= $_GET['id'];

$query = "DELETE FROM forms WHERE id='$id'";
$data =mysqli_query($conn, $query);
 	if($data)
 		{
 		echo "<script>alert('Record Deleted')</script>";
 		?>
 		<META HTTP-EQUIV="Refresh" CONTENT="0;	URL=http://localhost/php-learning/alldatadisplay.php">
 		<?php 
 	}
 	else
 	{
 		echo "<font color= 'red'>Sorry, deleted  process faile";
 	}





?>	