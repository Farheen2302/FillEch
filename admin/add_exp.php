<?php
include 'connection.php';
$p_id=$_POST['p_id'];
$amount=$_POST['amount'];
$details=$_POST['details'];
if (isset($_POST['submit1'])) 
{
	$p_id = stripslashes($p_id);
	$amount = stripslashes($amount);
	$details = stripslashes($details);
	$p_id = $conn->real_escape_string($p_id);
	$amount = $conn->real_escape_string($amount);
	$details = $conn->real_escape_string($details);
	$sql = "INSERT INTO expenses(e_id,p_id,amount,detail,added_on)VALUES (NULL,'$p_id','$amount','$details',curdate())";
	if ($conn->query($sql) == TRUE) 
	{
    $msg1="New record created successfully";
    header("Location: expenses.php?msg=1");
	} 
	else
	{
    $msg2=$conn->error;
    header("Location: expenses.php?msg=2");
    }
 }

$conn->close();
?>