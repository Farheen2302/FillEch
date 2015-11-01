<?php include('../connection.php');

 session_start();
if(isset($_SESSION['level']) and $_SESSION['level']==1)
{	
	/* if($_SESSION['user']==NULL)
	{
	header("Location:ss.php");
	}*/
	$msg1="";
	if(isset($_GET['msg']))
		
	{
			
		if($_GET['msg']==1)
			
		{
				
			$msg1 = "Successfully done!";
				
					
		}
			
		else		
		{
			$msg1="Error!";		
		}	
		
	}
}
else
{
	echo '<meta http-equiv="refresh" content="1;http://localhost/project_new/login/index.php">';
	sleep(1);
	die("Please Login First!");
	
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
						<a href="#">WELCOME  ADMIN</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home">HOME</a></li>
							<li class="dropdown" role="presentation">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							  PROJECT<span class="caret"></span>
							</a>
							<ul class="dropdown-menu bullet fadeIn" role="menu">
							  <li><a href="view_projects.php"><strong>View Projects</strong></a></li>
							  <li><a href="location.php"><strong>Locations</strong></a></li>
							  <li><a href="achievement.php"><strong>Achievements</strong></a></li>

							</ul> 
						</li>
						
							<li class="dropdown" role="presentation">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							  EMPLOYEES<span class="caret"></span>
							</a>
							<ul class="dropdown-menu bullet fadeIn" role="menu">
							  <li><a href="manager.php"><strong>Project Managers</strong></a></li>
							  <li><a href="volunteer.php"><strong>Volunteers</strong></a></li>
							</ul> 
						</li>
							<li class="dropdown" role="presentation">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							  MONEY<span class="caret"></span>
							</a>
							<ul class="dropdown-menu bullet fadeIn" role="menu">
							  <li><a href="fund.php"><strong>Funds</strong></a></li>
							  <li><a href="expenses.php"><strong>Expenses</strong></a></li>
							</ul> 
						</li>					
							<li><a href="../logout.php">LOGOUT</a></li>
					</ul>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>	
	<!-- banner -->
    <section class="banner" id="home">
		<div class="container">
			<div class="slogan">
				<h2>REACHING HAND </h2>
				<h3>Project Management</h3>
			</div>
			
			<div class="btn-circle-scroll fadeIn">
				<a href="#section-footer" class="btn-circle">
					<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
			
		</div>
    </section>
	<!-- /.banner -->

	<section class="aboutus" id="manage_projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h1>MANAGE PROJECTS</h1> 
					</div>
						 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#add">Add</a></li>
										  <li><a data-toggle="tab" href="#update">Update</a></li>
										  <li><a data-toggle="tab" href="#remove">Remove</a></li>
										</ul>

										<div class="tab-content">
										  <div id="add" class="tab-pane fade in active">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										    <h3>Add</h3>
										     <form action="add_proj.php" method="post">
											
											<table border="0">
												<tr>
													<td>
														<h5>Project Name&nbsp;&nbsp;</h5></td>
														<td>
														 <input type="text" name="p_name" placeholder="Project Name" size=40></font>
														</td>
												</tr>
												<tr>
													<td><h5>Start Date</h5></td>
													<td><input type="date" name="start_date" placeholder="YYYY-MM-DD" size=40></font></td>
												</tr>
												<tr>
													<td><h5>End Date</h5>
														<h6><font color=red>*Leave Blank if currently running</font></h6>
													</td>
													<td><input type="date" name="end_date" placeholder="YYYY-MM-DD" size=40></font></td>
												</tr>
												<tr>
													<td><h5>Status</h5></td>
													<td><input list="status" name="status" size=40>
														<datalist id="status">
															<option value="In progress"></option>
																<option value="Finished"></option>
															</datalist>
															</td>
											</tr>
												<tr>
													<td><h5>Budget</h5></td>
													<td><input type="number" name="budget" size=40 step="1000" min="0"></font></td>
												</tr>
												<tr>
													<td><h5>Details</h5></td>
													<td><textarea rows="4" cols="40" name="details" type="text" placeholder="Enter text here..."></textarea></font></td>
												</tr>
												<tr>
													<td><input type="submit" name="submit1" value="Add"></td>
												</tr>
											</table>

											<br>
									
											</form>
										  </div>
										  
										 <div id="remove" class="tab-pane fade">
										      <h3>Select the Projects you want to remove</h3>

													    <form action="index.php#manage_projects" onSubmit="return myfunction();" method="post">
										    	<?php $result1=$conn->query("select * from project");
													if($result1->num_rows>0)
													{
														while($row=$result1->fetch_assoc())
													{
														echo '<input type="checkbox" id="id1" name="projectName[]" value="'.$row["p_name"].'">'.$row["p_name"]."<br>";
  													 }
  													}
  													else 
													{
														echo "There are no running projects!";
													}?>	
													<br>
													<br>
													<br>
													<input type="submit" name="submit2" value="Remove" >
													<script type="text/JavaScript">
													function myfunction() 
													{
														
														var checkboxs=document.getElementsByName("projectName[]");
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
    														var r=confirm("Are you sure you want to delete?All the related data will be permanently deleted!");
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
													<?php include 'rem_project.php';?>
											</form>
										  </div>
										  <div id="update" class="tab-pane fade">
										    <h3>Select the Project you want to update</h3>
										    <p>
										    	<form id="update_id" action="../update_proj/index.php"  method="post">

										    	<?php 
										    		include('../connection.php');
										    		$result2=$conn->query("select * from project");
													if($result2->num_rows>0)
													{
														$i=1;
														while($row=$result2->fetch_assoc())
													{
															
                                                        echo '<input type="radio" name="radio" id="'.$i. '" value="'.$row["p_id"].'" >'.$row["p_name"]."<br>";
														$i++;
														//echo '<input type="checkbox" id="id1" name="projectName[]" value="'.$row["p_name"].'">'.$row["p_name"]."<br>";
  													}
  													}
  													else 
													{
														echo "There are no running projects!";
													}?>	
													<br>
													<br>
													<br>
													<input type="submit" name="submit3" value="Next" >
							
												</form>
										    </p>
										  </div>
										</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- services -->
    				
	
	<!-- footer -->
	<footer id="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow fadeIn" data-wow-delay="0.4s">
						<div class="btn-circle-scroll">
							<a href="#header-banner" class="btn-circle">
								<i class="fa fa-angle-double-up animated"></i>
							</a>
						</div>
					</div>
					<p>© Copyright 2013 by www.reachinghand.org. All Rights Reserved.</p>
				</div>
			</div>	
		</div>
	</footer>
	<!-- /.footer -->
	
	
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
