<?php  
	session_start();
include 'menu.php';

include 'connection.php';	
if(isset($_SESSION['username']))
	
{
		
	echo "<h3>You are logged in</h3>";

	$user=$_SESSION['username'];
	$result=$conn->query("select * from project where pmanager_id='$user'");
	if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
{
?>
	
<h3><?php echo $row["p_name"];?></h3>
<table border="1" width="50%">
<tr>
<td valign="top">Description</td>
<td><?php echo $row["p_details"];?></td>
</tr>
<tr>
<td>Budget</td>
<td><?php echo $row["p_budget"];?></td>
</tr>
<tr>
<td>Start Date</td>
<td><?php echo $row["p_start_date"];?></td>
</tr>
<tr>
<td>End Date</td>
<td><?php echo $row["p_end_date"];?></td>
</tr>
<tr>
<td>Status</td>
<td><?php echo $row["p_status"];?></td>
</tr>
</table>
</br>
</br>
<?php }
}
else if($result->num_rows==0)
{
header("Location:manager.php?error=1");
}		
	if(isset($_POST['submit1']) && $_POST['submit1']=="LogOut")
	
	{
			
	session_destroy();
			
	header('Location:web/index.php');

	}

	else if(isset($_POST['submit2']) && $_POST['submit2']=="Edit")

	{

			header('Location:signup.php');
		
	}
	
}
	
else
	
{
		die("Invalid Access!");
	}
?>

<form method="POST">
	
<input type="submit" name="submit1" value="LogOut"/>
</form>

	