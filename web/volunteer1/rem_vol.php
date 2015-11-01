<?php
include('../connection.php');


if(isset($_POST['submit2'])){
if(!empty($_POST['projectName'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['projectName']);

// Loop to store and display values of individual checked checkbox.
foreach($_POST['projectName'] as $selected) {
	echo "<p>".$selected;
	$sql="delete from volunteer where v_name= '$selected'";
	$sql1="delete from user where u_name= '$selected'";
	if ($conn->query($sql) === TRUE and $conn->query($sql1) === TRUE) {
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