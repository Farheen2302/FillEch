<?php  
include 'connection.php';
	session_start();
	$uname=$_SESSION['user'];
$msg1="";
$msg2="";
if(isset($_GET['msg']))
	
{
		
	if($_GET['msg']==1)
		
	{
			
		$msg1 = "Added Successfully!";
			
				
	}
		
	else if($_GET['msg']==2)		
	{
		$msg1="Error while assigning task!! Please try again.";		
	}	
	else if($_GET['msg']==3)
	{
			$msg2="Records updated Successfully";	
	}
	else
	{
		$msg2="Error while updating records!! Please try again.";	
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Font Awesome -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- Animation -->
	<link href="css/animate.css" rel="stylesheet" />
	
    <!-- MyTemplate CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="jquery-ui.css">
 
    
</head>


<body>

	<header id="header-banner">
		<nav class="navbar navbar-default navbar-fixed-top fadeIn" role="navigation">
			<div class="container">
				
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-box-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<a href="../project_manager/index.php">BACK</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li><a href="../project_manager/index.php">Home</a></li>
					</ul>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>	
	<!-- banner -->
	<!-- aboutus -->
   <section class="aboutus" id="manage_projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h1>Tasks</h1> 
					</div>
							<div class="col-sm-7">
						 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#details">Task Details</a></li>
										  <li><a data-toggle="tab" href="#add">Add Task</a></li>
										  <li><a data-toggle="tab" href="#update">Update Task</a></li>
									
										</ul>
										<div class="tab-content">
									
										<div id="details" class="tab-pane fade in active">
										<div class="panel-group">
										<br>
									  <?php $result=$conn->query("select * from task where task.pm_id in(select pm_id from project_manager where pm_name='$uname') group by task_name");
									if($result->num_rows>0)
									{ 
										$i=1;
										while($row=$result->fetch_assoc())
										{  
											$_SESSION["pm_id"]=$row["pm_id"];
											$tname=$row["task_name"];
										?> <div class="panel panel-default">
 							   <div class="panel-heading">
      								<h5 class="panel-title">
       				 				<?php echo '<a data-toggle="collapse" href="#'.$i.'">'.$row["task_name"]."</a>";?>
     							 	</h5>
    							</div>
   
    							<?php echo '<div  class="panel-collapse collapse" id="'.$i.'">';?>
     									<table  border="0">
     										<tr>
     											<td><h5><font color="green">Task Status</font></h5></td>
     											<td><h5><font color="maroon"><?php echo $row["task_status"];?></font></h5></td>
     										</tr>
     										<tr>
     											<td><h5><font color="green">Start Date</font></h5></td>
     											<td><h5><font color="maroon"><?php echo $row["date_of_sub"];?></font></h5></td>
     										</tr>
     										<tr>
     											<td><h5><font color="green">Dead Line</font></h5></td>
     											<td><h5><font color="maroon"><?php echo $row["dead_line"];?></font></h5></td>
     										</tr>
     										<tr>
     											<td><h5><font color="green">Task Details&nbsp;&nbsp;</font></h5></td>
     											<td><h5><font color="maroon"><?php echo $row["task_detail"];?></font></h5></td>
     										</tr>
     										<tr>
     											<td><h5><font color="green">Assigned to</font></h5></td>
											<?php $result1=$conn->query("select v_name from volunteer where v_id in(select v_id from task where task_name='$tname')");
											if($result1->num_rows>0)
											{ 
						
											while($row1=$result1->fetch_assoc())
											{ 
											?> 
											<td><h5><font color="maroon"><?php echo $row1["v_name"];?></font></h5></td>
										</tr>
										<tr>
											<td></td>
											<?php }
										}?>
									</table>
											<br><br>
											<br>
	  							</div>
 										
    							</div>

 										<?php
 										$i++;
 										}   		
									 
									}
									else 
									{
										echo "<font color=green>There are no Tasks!</font>";
									}?>

										 
										 </div>
</div>
										
										  <div id="add" class="tab-pane fade ">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										    <h3>Add</h3>
										     <form action="assign_task.php" onSubmit="return myfunction();" method="post">
											
											<table border="0">
	                                            <tr>
													<td>
														<h5>Task Name</h5></td>
														<td>
														 <input type="text" name="task_name" placeholder="Task Name" size=40></font>
													
														</td>
												</tr>
												<tr>
													<td><h5>Task Details</h5></td>
													<td><textarea rows="4" cols="40" name="task_detail" type="text" placeholder="Enter text here..."></textarea></font></td>
												</tr>
											<tr>
													<td><h5>Dead Line</h5></td>
													<td><input type="date" name="dos" placeholder="YYYY-MM-DD" size=40></font></td>
											</tr>
										</table>


											<br>
									<h3>Select the volunteer you want to assign to the task</h3>
									<?php $result1=$conn->query("select * from volunteer where volunteer.p_id in(select p_id from project_manager where pm_name='$uname')");
									if($result1->num_rows>0)
									{
												while($row=$result1->fetch_assoc())
												{
														echo '<input type="checkbox" id="id1" name="volunteer[]" value="'.$row["v_id"].'">'.$row["v_name"]."<br>";
  												}
  									}
  									else 
									{
											echo "<font color=green>There are no Volunteers on roll!</font>";
									}?>	
												
									<br>
									<input type="submit" name="submit" value="add" >
											<script type="text/JavaScript">
													function myfunction() 
													{
														
														var checkboxs=document.getElementsByName("volunteer[]");
    													var ans=false;
    													var len=checkboxs.length;
    													for(var i=0;i<len;i++)
    													{
        													if(checkboxs[i].checked==true)
        													{
        														//confirm("in for loop");
            													ans=true;
            													break;
        													}
    												    }

    													if(ans)
    													{
    														var r=confirm("Are you sure you want to assign these volunteer?");
															return r;
    														
    													}
    													else 
    													{
    														alert("Please select atleast one entry!");
    														return false;
    													}
																									

													}
													</script>
													<br>
													<br>			

											</form>

										  </div>
										  <div id="update" class="tab-pane fade ">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										  	<h3>Select the Tasks you want to set as completed</h3>

													    <form action="update_task.php" onSubmit="return myfunction1();" method="post">
										    	<?php 
										    	$result1=$conn->query("select * from task where task.pm_id in(select pm_id from project_manager where pm_name='$uname') and task_status='running'");
													if($result1->num_rows>0)
													{
														while($row=$result1->fetch_assoc())
													{
														echo '<input type="checkbox" id="id1" name="taskName[]" value="'.$row["task_name"].'">'.$row["task_name"]."<br>";
  													 }
  													}
  													else 
													{
														echo "<font color=green> All Tasks are upto Date!</font>";
													}?>	
													<br>
													<br>
													<input type="submit" name="submit2" value="update" >
													<script type="text/JavaScript">
													function myfunction1() 
													{
														
														var checkboxs=document.getElementsByName("taskName[]");
    													var ans=false;
    													var len=checkboxs.length;
    													for(var i=0;i<len;i++)
    													{
        													if(checkboxs[i].checked==true)
        													{
        														//confirm("in for loop");
            													ans=true;
            													break;
        													}
    												    }

    													if(ans)
    													{
    														var r=confirm("Are you sure these tasks are completed?");
															return r;
    														
    													}
    													else 
    													{
    														alert("Please select atleast one entry!");
    														return false;
    													}
																									
							

													}
													</script>
													<br>
													<br>
													
											</form>
										  </div>
									  </div>
						 </div>
					</div>
				</div>				
			</div>
		</div>
	</section>
	
	</section>						
	<!-- Core JavaScript Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>			<!-- Reveal animation when you scroll by wow.js. It need animate.css library -->
	<!-- Custom Theme JavaScript -->
	<script src="js/custom.js"></script>

</body>

</html>
