<?php
session_start();
include("connection.php");
?>

<form action="" method="post">
	Username: <input type="text" name="username" value=""/><br><br>
	Password: <input type="text" name="password" value=""/><br><br>
	<input type="submit" name="submit" value="Login"/>
</form>

<?php
if (isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM STUDENT WHERE username='$user' && Password='$pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
        $_SESSION['user_name']=$user;
		header('location:home.php');
	}
	else
	{
		echo "Login Faild";
	}
}
?>	