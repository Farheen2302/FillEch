<?php
session_start();
include 'connection.php';
$p_id=$_POST['p_id'];
$bill=$_POST['bill'];
$amount=$_POST['amount'];
$party=$_POST['party'];
$details=$_POST['details'];
if (isset($_POST['submit1'])) 
{
	$p_id = stripslashes($p_id);
	$bill = stripslashes($bill);
	$amount = stripslashes($amount);
	$party = stripslashes($party);
	$details = stripslashes($details);
	$p_id = $conn->real_escape_string($p_id);
	$bill = $conn->real_escape_string($bill);
	$amount = $conn->real_escape_string($amount);
	$party = $conn->real_escape_string($party);
	$details = $conn->real_escape_string($details);
	$sql = "INSERT INTO fund(bill_no,fund_amount,fund_by,p_id,party_detail)VALUES ('$bill','$amount','$party','$p_id','$details')";
	if ($conn->query($sql) == TRUE) 
	{
    $msg1="New record created successfully";
    header("Location: fund.php?msg=1");
	} 
	else
	{
    $msg2=$conn->error;
    header("Location: fund.php?msg=2");
    }
 }

$conn->close();
?>