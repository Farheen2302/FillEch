<?php
session_start();
include('../connection.php');

$uname=$_SESSION['user'];
$name=$_POST['name'];
$details=$_POST['t_details'];
$doj=$_POST['doj'];
if (isset($_POST['submit3']))
{
	if(!empty($_POST['projectName'])) 
	{
		

		$uname = stripslashes($uname);
		$name = stripslashes($name);
		$address = stripslashes($address)
		$doj = stripslashes($doj);
		$p_id = $conn->real_escape_string($p_id);
		$name = $conn->real_escape_string($name);
		$details=$conn->real_escape_string($details);
		$doj = $conn->real_escape_string($doj);
		$sql="Select pm_id from project_manager where user='$uname'";
		$result=query($sql);
		
		// Counting number of checked checkboxes.
		$checked_count = count($_POST['projectName']);
		foreach($_POST['projectName'] as $selected)
		{
			$sql="Insert into task(pm_id,v_id,task_name,task_status,date_of_sub,dead_line,task_detail) values('$result','$selected','$task_name','running',curdate(),'$doj')"
			if ($conn->query($sql) === TRUE) {
    $msg1="New record created successfully";
   echo "  updated successfully";
   // header('Location:index2.php?msg=1');
	} 
	else {
    echo "Failed".mysql_error();
}

	}
 }

}
$conn->close();
?>
