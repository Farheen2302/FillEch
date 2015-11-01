<?php
session_start();
include 'connection.php';
$p_id=$_POST['p_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$doj=$_POST['doj'];
if (isset($_POST['submit1'])) 
{
	$p_id = stripslashes($p_id);
	$name = stripslashes($name);
	$address = stripslashes($address);
	$contact = stripslashes($contact);
	$email = stripslashes($email);
	$salary = stripslashes($salary);
	$doj = stripslashes($doj);
	$p_id = $conn->real_escape_string($p_id);
	$name = $conn->real_escape_string($name);
	$address = $conn->real_escape_string($address);
	$contact = $conn->real_escape_string($contact);
	$email = $conn->real_escape_string($email);
	$salary = $conn->real_escape_string($salary);
	$doj = $conn->real_escape_string($doj);
	$sql = "INSERT INTO volunteer(p_id,v_id,v_name,v_address,v_contact,v_email,v_sal,v_doj)VALUES ('$p_id',NULL,'$name','$address','$contact','$email','$salary','$doj')";
	$sql1 = "INSERT INTO user(u_name,u_email,u_level,u_password)VALUES ('$name','$email','3','$contact')";
	if ($conn->query($sql) === TRUE ) 
	{
		if($conn->query($sql1) === TRUE)
         {
         	$msg1="New record created successfully";
    		header("Location: volunteer.php?msg=1");
    	}
    	else
    	{
    		$sql="delete from volunteer where v_name= '$name'";
    		$result=$conn->query($sql);
    		header("Location: volunteer.php?msg=3");
    	}
	} 

	else
	{
    $msg2=$conn->error;
    header("Location: volunteer.php?msg=2");
    }
 }


$conn->close();
?>