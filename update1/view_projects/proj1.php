<?php

session_start();

include 'connection.php';

$mesg="";
$message="";

//$_SESSION['user_id']=$_POST['user_id'];

print_r($_POST);

$_SESSION['p_name']=$_POST['p_name'];

$_SESSION['start_date']=$_POST['start_date'];

$_SESSION['end_date']=$_POST['end_date'];

$_SESSION['status']=$_POST['status'];

$_SESSION['budget']=$_POST['budget'];

$_SESSION['details']=$_POST['details'];

//$user_id=$_POST['user_id'];

$p_name=$_POST['p_name'];

$start_date=$_POST['start_date'];

$end_date=$_POST['end_date'];

$status=$_POST['status'];

$budget=$_POST['budget'];

$details=$_POST['details'];

//////////////////////////
echo $details;

if(isset($_POST['back']))

{
	
header('Location:project.php');

}

else if(isset($_POST['submit3']))
{
	
header('Location:location.php');

}

else if(isset($_POST['submit2']))

{

	header('Location:volunteer.php');

}

else if(isset($_POST['submit4']))
{

	header('Location:achievement.php');

}

else if(isset($_POST['submit5']))
{

	header('Location:fund.php');

}
 
if(isset($_POST['submit1.php']))

{

if(empty($p_name) and empty($start_date) and empty($end_date) and empty($status) and empty($budget) /*and !empty($details)*/)

{   header('Location:project.php?error=12');
}

	//////////////////////////
else
{

	$qry="select * from project where p_name='".$_POST['p_name']."'";

	$qt=mysql_query($qry);

			$row=mysql_fetch_array($qt);

		print_r($row);
	
	if(!empty($row))

	{

	$n=$row['p_name'];

	if($n==$p_name)
	{
 
             header('Location:project.php?error=13');

	}
	
}}}

///////////////////////////////////
	else if(isset($_POST['submit']))
		{
			$sql= "update project set p_name='".$p_name."',start_date='".$start_date."',end_date='".$end_date."',status='".$status."',budget='".$budget."',details='".$details."'". "WHERE p_name='".$p_name."'"; 
   


$qury=mysql_query($sql);


}
?>

<!DOCTYPE html>

<html>

<head>

<title>Save</title>

</head>

<body>

<form action="proj1.php" method="post">

<h3>
<font color=red>
<?php echo $mesg?>
</font>
</h3>

Project_Name<font color=red>*</font>:<input type="text" name="p_name" value="<?php echo $p_name?>">
<br><br>

Start_Date<font color=red>*</font>  :<input type="text" name="start_date" value="<?php echo $start_date?>" >
<br><br>

End_Date<font color=red>*</font> :<input type="text" name="end_date" value="<?php echo $end_date?>">
<br><br>

Status <font color=red>*</font>     :<input type="text" name="status" value="<?php echo $status?>">
<br><br>

Budget <font color=red>*</font>     :<input type="number" name="budget" value="<?php echo $budget?>">
<font color=red><?php echo $message?></font>
<br><br>

<h1>Details:<br></h1>
<textarea rows="4" cols="50" name="details" type="text" value="<?php echo $details?>"></textarea>
<br><br> 

<input type="submit" name="submit" value="Save">
<input type="submit" name="back" value="Back">

<input  type="submit" name="submit2" value="Add volunteer">

<input type="submit" name="submit3" value="Add Location">

<input type="submit" name="submit4" value="Add Achievement">

<input type="submit" name="submit5" value="Add Fund">

</body>
</html>
