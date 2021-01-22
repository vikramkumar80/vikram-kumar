<?php
include("connectiondatabase.php");
$_GET['na'];
$_GET['ad'];


?>
<?php
 if (isset($_POST['save']))
 {
 	$name = $_POST['name'];
 	$address= $_POST['address'];
 	$id = $_POST['id'];
 	// echo "UPDATE FORMS SET name = '$name', address ='$address' WHERE id='".$id."'";die;
 	$query = "UPDATE FORMS SET name = '$name', address ='$address' WHERE id='".$id."'";
 	$data =mysqli_query($conn, $query);
 	if($data)
 	{
 		echo"<font color='green'>Record Save Successfully. <a href= 'display.php'>Check Save list Here</a>"; 
 	}
 	else
 	{
 		echo "<font color= 'red'>Record Not Save. <a href= 'display.php'>Check Save list Here</a>"; 
 	}
 }
 else
 {
 	echo"<font color= 'blue'> Click on Save Button to save the change"; 
 }



?>
<html>
<head>
</head>
<body>
	<form method="post" action="" >
		<div class="input-group">
			<label>Name</label>  
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			<input type="text" name="name" value="<?php echo $_GET['na']?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $_GET['ad']?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>


 </body>
</html>
 