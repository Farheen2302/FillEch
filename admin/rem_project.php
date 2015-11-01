<?php
include 'connection.php';

if(isset($_POST['submit2'])){
if(!empty($_POST['projectName'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['projectName']);

// Loop to store and display values of individual checked checkbox.
foreach($_POST['projectName'] as $selected) {
	echo "<p>".$selected;
	$sql8="delete from user where u_name in(select pm_name from project_manager,project where project.p_id=project_manager.p_id and project.p_name='$selected')";
	$sql6="delete from task where v_id in(select v_id from volunteer,project where volunteer.p_id=project.p_id and project.p_name='$selected')";
	$sql9="delete from user where u_name in(select v_name from volunteer,project where project.p_id=volunteer.p_id and project.p_name='$selected')";
	$sql7="delete from volunteer where v_id in(select p_id from project where p_name='$selected')";
	$sql1="delete from project_manager where p_id in(select p_id from project where p_name='$selected')";
	$sql2="delete from expenses where p_id in(select p_id from project where p_name='$selected')";
	$sql3="delete from location where p_id in(select p_id from project where p_name='$selected')";
	$sql4="delete from achievement where p_id in(select p_id from project where p_name='$selected')";
	$sql5="delete from fund where p_id in(select p_id from project where p_name='$selected')";
	$sql="delete from project where p_name= '$selected'";
	$conn->query($sql8);
	$conn->query($sql6);
	$conn->query($sql9);
	$conn->query($sql7);
	$conn->query($sql1);
	$conn->query($sql2);
	$conn->query($sql3);
	$conn->query($sql4);
	$conn->query($sql5);
	if ($conn->query($sql) === TRUE) {
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