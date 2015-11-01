<?php
include 'connection.php';

if(isset($_POST['submit2'])){
if(!empty($_POST['projectName'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['projectName']);

// Loop to store and display values of individual checked checkbox.
foreach($_POST['projectName'] as $selected) {
	//echo "<p>".$selected;
	$sql="delete from location where l_id= '$selected'";
	if ($conn->query($sql) === TRUE ) {
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