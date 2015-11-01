<?php
include 'connection.php';

if(isset($_POST['submit2'])){
if(!empty($_POST['projectName'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['projectName']);

// Loop to store and display values of individual checked checkbox.
foreach($_POST['projectName'] as $selected) {
	echo "<p>".$selected;
	$sql="update task set task_status='completed' where task_name= '$selected'";
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
