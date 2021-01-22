<style>
	td
	{
		padding:10px;
	}
</style>
<?php
include("connectiondatabase.php");
$query = "SELECT * FROM FORMS ";
$data =  mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !=0)

?>
	<table>
<tr>
		<th>name</th> 	
		<th>address</th>
		<th colspan ="2">operations</th>
	</tr>
<?php

while($row = mysqli_fetch_assoc($data))
{
	echo"<tr>
		<td>".$row['name']."</td>
		<td>".$row['address']." </td>
		<td><a href = 'update.php?id=$row[id]&na=$row[name]&ad=$row[address]'>Edit</a></td>
        <td><a href = 'delete.php?id=".$row['id']."'onclick=' return chekdelete()'>Delete</a></td>
		</tr>";
}
?>
</table>
 <script>
 	function chekdelete()
 	{
 		 return confirm('Are you  sure want to delete this data???');
 	}
 </script>








