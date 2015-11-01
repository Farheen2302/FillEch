<?php 
include 'connection.php'; 
session_start();
$msg1="";
if(isset($_GET['msg']))
	
{
		
	if($_GET['msg']==1)
		
	{
			
		$msg1 = "Successfully updated!";
			
				
	}
		
	else		
	{
		$msg1="Error!";		
	}	
	
}

$radio=$_POST['radio'];
$_SESSION["p_id"]=$radio;
$qry="select * from project where p_id=$radio";
$result=$conn->query($qry);
 $row=$result->fetch_assoc();
$p_name=$row['p_name'];
$start_date=$row['p_start_date'];
$end_date=$row['p_end_date'];
$status=$row['p_status'];
$budget=$row['p_budget'];
$details=$row['p_details'];
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
						<a href="../admin/index.php#manage_projects">BACK</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
			
						<li><a href="../admin/index.php">HOME</a></li>
					</ul>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>	
	<!-- banner -->
	<!-- /.banner -->

	<section class="aboutus" id="manage_projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h1>UPDATE PROJECT</h1> 
					</div>
						 <ul class="nav nav-tabs">
						  <li class="active" ><a data-toggle="tab" href="#update">Update</a></li>
										</ul>

										<div class="tab-content">
										  <div id="update" class="tab-pane fade in active">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										     <form action="update.php" method="post">
											
											<table border="0">
												<tr>
													<td>
														<h5>Project Name&nbsp;&nbsp;</h5></td>
														<td>
														 <input type="text" name="p_name" value="<?php echo $p_name ?>" size=40></font>

														</td>
												</tr>
												<tr>
													<td><h5>Start Date</h5></td>
													<td><input type="date" name="start_date" value="<?php echo $start_date ?>" size=40></font></td>
												</tr>
												<tr>
													<td><h5>End Date</h5></td>
													<td><input type="date" name="end_date" placeholder="YYYY-MM-DD" value="<?php echo $end_date ?>" size=40></font></td>
												</tr>
												<tr>
													<td><h5>Status</h5></font></td>
													<td><input list="status" name="status" value="<?php echo $status ?>" size=40>
														<datalist id="status">
															<option value="In progress">
																<option value="Finished">
																</datalist></td>
												</tr>
												<tr>
													<td><h5>Budget</h5></td>
													<td><input type="number" name="budget" value="<?php echo $budget ?>" size=40 step="1000" min="0"></font></td>
												</tr>
												<tr>
													<td><h5>Details</h5></td>
													<td><textarea rows="4" cols="40" name="details" type="text" value="<?php echo $details ?>" placeholder="<?php echo $details ?>"></textarea></font></td>
												</tr>
												<tr>
													<td><input type="submit" name="submit1" value="Update"></td>
												</tr>
											</table>

											<br>
									
											</form>
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