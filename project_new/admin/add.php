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
	//echo $project_name."<br>" ;
	//echo $detail."<br>";
	if($edate!=NULL){
	$sql = "INSERT INTO project VALUES (NULL,'$project_name', '$sdate','$edate','$status','$budget','$detail')";
	}
	else
	{
		$sql = "INSERT INTO project VALUES (NULL,'$project_name', '$sdate',NULL,'$status','$budget','$detail')";	
	}
	if ($conn->query($sql) === TRUE) {
    $msg1="New record created successfully";
    header("Location: index.php?msg=1#manage_projects");
	} 
	else {
    header("Location: index.php?msg=2#manage_projects");
}
}
$conn->close();
?>