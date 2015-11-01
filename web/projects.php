<?php include 'menu.php';
include 'connection.php'?>
<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-1.10.2.min.js"></script>
  <script src="jquery-ui.js"></script>   
<script>$(document).ready(function() {
    $("#proj").accordion({collapsible: true, active: false});
});</script>
	</head>
	<body>
        <div id="proj">
<?php $result=$conn->query("select * from project");
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
{
?>
	
<h3><?php echo $row["p_name"];?></h3>
            <div>
                <table border="1" width="50%">
<tr>
<td valign="top">Description</td>
<td><?php echo $row["p_details"];?></td>
</tr>
<tr>
<td>Budget</td>
<td><?php echo $row["p_budget"];?></td>
</tr>
<tr>
<td>Start Date</td>
<td><?php echo $row["p_start_date"];?></td>
</tr>
<tr>
<td>End Date</td>
<td><?php echo $row["p_end_date"];?></td>
</tr>
<tr>
<td>Status</td>
<td><?php echo $row["p_status"];?></td>
</tr>
</table>
</br>
</br>
</div>
<?php }
}
else 
{
header("Location:admin.php?error=1");
}?>
        </div>
	</body>
</html>