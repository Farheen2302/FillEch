<?php
include 'connection.php';

if(isset($_POST['submit2'])){
if(!empty($_POST['taskName'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['taskName']);

// Loop to store and display values of individual checked checkbox.
foreach($_POST['taskName'] as $selected) {

	$sql="update task set task_status='completed' where task_name= '$selected'";
	if ($conn->query($sql) === TRUE) {
   header("Location: index.php?msg=3");
		} 
	else {
    	header("Location: index.php?msg=4");
		} 



}
}

}
$conn->close();
?>
