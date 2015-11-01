<?php
session_start();
include('../connection.php');

$p_id=$_SESSION["p_id"];
$l1=$_POST['l1'];
$l2=$_POST['l2'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];

if (isset($_POST['submit1'])) 
{
	$p_id = stripslashes($p_id);
	$l1 = stripslashes($l1);
	$l2 = stripslashes($l2);
	$city = stripslashes($city);
	$state = stripslashes($state);
	$pin = stripslashes($pin);
	$p_id = $conn->real_escape_string($p_id);
	$l1 = $conn->real_escape_string($l1);
	$l2 = $conn->real_escape_string($l2);
	$city = $conn->real_escape_string($city);
	$state = $conn->real_escape_string($state);
	$pin = $conn->real_escape_string($pin);
	$sql = "INSERT INTO location(p_id,add1,add2,city,state,pin)VALUES ('$p_id','$l1','$l2','$city','$state','$pin')";
	if ($conn->query($sql) === TRUE ) 
	{
    $msg1="New record created successfully";
    header("Location: location.php?msg=1");
	} 
	else
	{
    $msg2=$conn->error;
    header("Location: location.php?msg=2");
    }
 }

$conn->close();
?>