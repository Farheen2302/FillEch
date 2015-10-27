<?php
session_start();
include 'connection.php';
$project_name=$_POST['p_name'];
$sdate=$_POST['start_date'];
$edate=$_POST['end_date'];
$status=$_POST['status'];
$detail=$_POST['details'];
$budget=$_POST['budget'];
if (isset($_POST['submit1'])) 
{
	
	$project_name = stripslashes($project_name);
	$sdate = stripslashes($sdate);
	$edate = stripslashes($edate);
	$status = stripslashes($status);
	$detail = stripslashes($detail);
	$budget = stripslashes($budget);
	$project_name = $conn->real_escape_string($project_name);
	$sdate = $conn->real_escape_string($sdate);
	$edate = $conn->real_escape_string($edate);
	$status = $conn->real_escape_string($status);
	$detail = $conn->real_escape_string($detail);
	$budget = $conn->real_escape_string($budget);
	$sql = "INSERT INTO project (p_id,p_name,p_start_date,p_end_date,p_status,p_budget,p_details)VALUES ('104','$project_name, '$sdate','$edate','$status','$budget','$detail')";
	$conn->query($sql);
	if ($conn->query($sql) === TRUE) {
    $msg1="New record created successfully";
    header("Location: index.php?msg=1#manage_projects");
	} 
	else {
    $msg2=$conn->error;
    header("Location: index.php?msg=2#manage_projects");
	}
}

$conn->close();
?>