<?php
include 'connection.php';

if(isset($_POST['submit2'])){
if(!empty($_POST['projectName'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['projectName']);

// Loop to store and display values of individual checked checkbox.
foreach($_POST['projectName'] as $selected) {
	echo "<p>".$selected;
	$sql2="delete from task where task.pm_id=project_manager.pm_id and project_manager.pm_name='$selected'";
	$sql="delete from project_manager where pm_name= '$selected'";
	$sql1="delete from user where u_name= '$selected'";
	if ($conn->query($sql2) === TRUE and $conn->query($sql) === TRUE and $conn->query($sql1) === TRUE) {
    echo " deleted successfully </p>";
    //header("Location: index.php#manage_projects");
	} 
	else {
    echo "Unsuccessful Operation!!";
	}


}
}

}
$conn->close();
?>