<?php include 'connection.php'; 
$msg1="";
if(isset($_GET['msg']))
	
{
		
	if($_GET['msg']==1)
		
	{
			
		$msg1 = "New record created successfully";
			
				
	}
		
	else		
	{
		$msg1="ERROR";		
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
  <script src="jquery-1.10.2.min.js"></script>
  <script src="jquery-ui.js"></script>   
<script>$(document).ready(function() {
    $("#proj").accordion({collapsible: true, active: false});
});</script>
    
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
						<a href="#">WELCOME</a>
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
							  <li><a href="../view_projects/index.php"><strong>VIEW PROJECTS</strong></a></li>
							  <li><a href="#manage_projects"><strong>MANAGE PROJECTS</strong></a></li>
							</ul> 
						</li>
							<li><a href="#employees">EMPLOYEES</a></li>
							<li><a href="#funds">FUNDS</a></li>
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
										  <li><a data-toggle="tab" href="#remove">Remove</a></li>
										  <li><a data-toggle="tab" href="#update">Update</a></li>
										</ul>

										<div class="tab-content">
										  <div id="add" class="tab-pane fade in active">
										  	<h3><font color=maroon><?php echo $msg1?></font></h3>
										    <h3>Add</h3>
										     <form action="addproj.php" method="post">
											
											<table border="0">
												<tr>
													<td>
														<h5><font color=maroon>Project Name&nbsp;&nbsp;</h5></td>
														<td>
														 <input type="text" name="p_name"></font>
														</td>
												</tr>
												<tr>
													<td><h5><font color=maroon>Start Date</h5></td>
													<td><input type="date" name="start_date"></font></td>
												</tr>
												<tr>
													<td><h5><font color=maroon>End Date</h5></td>
													<td><input type="date" name="end_date"></font></td>
												</tr>
												<tr>
													<td><h5><font color=maroon>Status</h5></td>
													<td><input type="text" name="status"></font></td>
												</tr>
												<tr>
													<td><h5><font color=maroon>Budget</h5></td>
													<td><input type="number" name="budget"></font></td>
												</tr>
												<tr>
													<td><h5><font color=maroon>Details</h5></td>
													<td><textarea rows="4" cols="50" name="details" type="text">Enter text here...</textarea></font></td>
												</tr>
												<tr>
													<td><input type="submit" name="submit1" value="Add"></td>
												</tr>
											</table>
											</form>
										  </div>
										  <div id="remove" class="tab-pane fade">
										    <h3>Remove</h3>
										    <p>Some content in menu 1.</p>
										  </div>
										  <div id="update" class="tab-pane fade">
										    <h3>Update</h3>
										    <p>Some content in menu 2.</p>
										  </div>
										</div>
				</div>				
			</div>
		</div>
	</section>	
	
	<!-- services -->
    <section class="aboutus" id="employees">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
						<h1>EMPLOYEES</h1>
					</div>	
					<div class="col-sm-7">
						<h4>Project manegers</h4>
						 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#all">All managers</a></li>
										  <li><a data-toggle="tab" href="#adda">Add</a></li>
										  <li><a data-toggle="tab" href="#remove">Remove</a></li>
						</ul>

									<div class="tab-content">
										<div id="all" class="tab-pane fade in active">
										    <h3>All Details</h3>
										    <p>Some content.</p>
									  </div>
									  <div id="adda" class="tab-pane fade">
										    <h3>Add</h3>
										    <p>Some content in menu 1.</p>
										 </div>
									  <div id="remove" class="tab-pane fade ">
										    <h3>Remove</h3>
										    <p>Some content.</p>
									  </div>
							
										 
									</div>
			
						</div>
					</div>
				</div>
			</div>
	</section>				
	<section class="aboutus" id="funds">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wow bounceInLeft" data-wow-delay="0.1s">
					<h1>FUNDS</h1>
				</div>	
				<div class="col-sm-7">
					 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#det">Details</a></li>
										  <li><a data-toggle="tab" href="#ad">Add new</a></li>
										</ul>

										<div class="tab-content">
										  <div id="det" class="tab-pane fade in active">
										    <h3>Details</h3>
										    <p>Some content.</p>
										  </div>
										  <div id="ad" class="tab-pane fade">
										    <h3>Add new</h3>
										    <p>Some content in menu 1.</p>
										  </div>
										 
										</div>

						
					</div>
					
				</div>
			</div>
		</div>				
	</section>	
	
			
	
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
