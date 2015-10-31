<?php
session_start();
include 'connection.php';
$p_id=$_SESSION['p_id'];
$title=$_POST['title'];
$details=$_POST['details'];
if (isset($_POST['submit1'])) 
{
	$p_id = stripslashes($p_id);
	$title = stripslashes($title);
	$details = stripslashes($details);
	$p_id = $conn->real_escape_string($p_id);
	$title = $conn->real_escape_string($title);
	$details = $conn->real_escape_string($details);
	$sql = "INSERT INTO achievement(ac_title,p_id,ac_details,updated_on)VALUES ('$title','$p_id','$details',curdate())";
	if ($conn->query($sql) == TRUE) 
	{
    $msg1="New record created successfully";
    header("Location: index.php?msg=1");
	} 
	else
	{
    $msg2=$conn->error;
    header("Location: index.php?msg=2");
    }
 }

$conn->close();
?>