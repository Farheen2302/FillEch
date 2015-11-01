<?php
session_start();
include 'connection.php';
$uname=$_SESSION['user'];
$tname=$_POST['task_name'];
$tdetail=$_POST['task_detail'];
$deadline=$_POST['dos'];

if (isset($_POST['submit']))
{
	if(!empty($_POST['volunteer'])) 
	{
		
		$uname = stripslashes($uname);
		$tname = stripslashes($tname);
		$tdetail = stripslashes($tdetail);
		$deadline = stripslashes($deadline);
		$uname = $conn->real_escape_string($uname);
		$tname = $conn->real_escape_string($tname);
		$tdetail=$conn->real_escape_string($tdetail);
		$deadline = $conn->real_escape_string($deadline);
		$sql="Select pm_id from project_manager where pm_name='$uname'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			if($row=$result->fetch_assoc())
		{
			$id=$row["pm_id"];
		}
	}
		// Counting number of checked checkboxes.
		$checked_count = count($_POST['volunteer']);
		foreach($_POST['volunteer'] as $selected)
		{
			$sql1="Insert into task values('$id','$selected','$tname','running',CURDATE(),'$deadline','$tdetail')";
			if ($conn->query($sql1) === TRUE) {
    		$msg1="New record created successfully";
    		header("Location: index.php?msg=1");
		} 
	else {
    	header("Location: index.php?msg=2");
   //echo "  updated successfully";
   // header('Location:index2.php?msg=1');
		} 
	}
 }

}
$conn->close();
?>
