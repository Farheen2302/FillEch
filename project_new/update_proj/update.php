<?php  
$link = mysql_connect("localhost","root","");
$db=mysql_select_db("project",$link); 
//include 'connection.php';
$p_id=1; 
$p_name=$_POST['p_name'];
$p_start_date=$_POST['start_date'];
$p_end_date=$_POST['end_date'];
$p_status=$_POST['status'];
$p_budget=$_POST['budget'];
$p_details=$_POST['details'];
/*
$sql="update project set p_name='harbhajan singh' where p_id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
/*
$sql= "update project set p_name='".$name."' where 
$qury=mysql_query($sql);*/
$sql= "update project set p_name='".$p_name."', p_start_date='".$p_start_date."', p_end_date='".$p_end_date."', p_status='".$p_status."', p_budget='".$p_budget."',p_details='".$p_details."' WHERE p_id='".$p_id."'";
           
$qury=mysql_query($sql);
if(!$qury)
{
echo "Failed".mysql_error();
}
else 
{   header('Location:index.php?msg=1');
	//echo "Successful";
	}

?>