<?php
session_start();
include('../connection.php');

$uname=$_POST['username'];
$pass=$_POST['password'];
$_SESSION['username']=$_POST['username'];
if (isset($_POST['submit'])) 
{
	if($_POST['username']!="" && $_POST['password']!="")

	{
	$uname = stripslashes($uname);
	$pass = stripslashes($pass);
	$uname = $conn->real_escape_string($uname);
	$pass = $conn->real_escape_string($pass);


	$result=$conn->query("select u_name,u_level,u_password from user where u_name='$uname' and u_password='$pass'");

		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			$level=$row["u_level"];
			$_SESSION['username']=$_POST['username'];
			
                        if($level=="1")
                         {
				header('Location: admin/index.php?var=<?php echo $row["u_name"] ?>');
			}
			else if($level=="2"){
				header('Location: project_manager/index.php');
			}
			else {
				header('Location: volunteer.php');
			}

		}
		else
		{
			header("Location:login/index.php?error=1");
			
		}	

	
	}
	elseif($_POST['username']=="")
	{
		header("Location:login/index.php?error=2");
	}
	else
	{
		header("Location:login/index.php?error=3&name=".$_POST['name']);
	}
}
else
{
	header("Location:login/index.php");
	
}

$conn->close();
?>