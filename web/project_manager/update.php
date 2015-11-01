<?php  
include('../connection.php');

$p_id=$_POST['p_id']; 
$p_name=$_POST['p_name'];
$p_start_date=$_POST['start_date'];
$p_end_date=$_POST['end_date'];
$p_status=$_POST['status'];
$p_budget=$_POST['budget'];
$p_details=$_POST['details'];

if ($p_end_date==NULL) {
	$sql= "update project set p_name='".$p_name."', p_start_date='".$p_start_date."', p_end_date=NULL, p_status='".$p_status."', p_budget='".$p_budget."',p_details='".$p_details."' WHERE p_id='".$p_id."'";
}
else
{
	$sql= "update project set p_name='".$p_name."', p_start_date='".$p_start_date."', p_end_date='".$p_end_date."', p_status='".$p_status."', p_budget='".$p_budget."',p_details='".$p_details."' WHERE p_id='".$p_id."'";
}
	if ($conn->query($sql) === TRUE) {
    $msg1="New record created successfully";
    header('Location:index.php?msg=1#projects');
	} 
	else {
    echo "Failed".mysql_error();
}




/*if(!$qury)
{
echo "Failed".mysql_error();
}
else 
{   header('Location:index.php?msg=1');
	//echo "Successful";
	}*/

?>