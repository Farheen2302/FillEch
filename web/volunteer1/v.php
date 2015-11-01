<?php
$uname=$_SESSION['username'];
//echo $uname;?>
	session_start();
include('../connection.php');

	if(isset($_SESSION['level']) and $_SESSION['level']==3)
	{

	}
	else
	{
		echo '<meta http-equiv="refresh" content="1;http://localhost/project/pro/new1/web">';
		die("Please Login First");
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
						<a href="#">WELCOME  <?php echo $uname;?></a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home">HOME</a></li>
						<li><a href="#projects">PROJECT</a></li>
						<li><a href="#volunteers">TASK</a></li>
						<li><a href="../logout.php">LOGOUT</a></li>
					</ul>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>
		<?php
		$result=$conn->query("select * from project where project.p_id in(select p_id from volunteer where v_name='$uname')");
		 $row=$result->fetch_assoc();?>

	<!-- banner -->
    <section class="banner" id="home">
		<div class="container">
			<div class="slogan">
				<h2><?php echo $row["p_name"];?></h2>
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

	<!-- aboutus -->
    <section class="aboutus" id="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h1>Project</h1> 
					</div>
					<div class="col-sm-7">
							 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#add">Details</a></li>
										</ul>

										<div class="tab-content">
										  <div id="detail" class="tab-pane fade in active">
										    <h3>Details</h3>
										    <div id="proj">								

<h3><?php echo $row["p_name"];?></h3>
            <div>
<table border="0" width="75%">
<tr>
<td><<h3><font color="green">Project Status </font></td>
<td><font color="maroon"><?php echo $row['p_status'];?></font></h3></td>
</tr>
<tr>
<td valign="top"><h3><font color="green">Project Start Date </font></td>
<td><font color="maroon"><?php echo $row['p_start_date'];?></font></h3></td>
</tr>
<tr>
<td><h3><font color="green">Project End Date </font></td>
<td><font color="maroon"><?php echo $row['p_end_date'];?></font></h3></td>
</tr>
<tr>
<td><h3><font color="green">Project Budget :</font></td>
<td><font color="maroon"><?php echo $row['p_budget'];?></font></h3></td>
</tr>
<tr><h3><font color="green">Project Details :</font></td>
<td><font color="maroon"><?php echo $row['p_details'];?></font></h3></td>
</tr>
<td><?php echo $row["p_details"];?></td>
</tr>
</table>
</br>
</br>
</div>

</div>
										  
										 
										</div>

					</div>
					
				</div>				
			</div>
		</div>
	</section>	
	<!-- /.aboutus -->
	
	
	<!-- services -->
    <section class="aboutus" id="volunteers">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s">
						<h1>Task</h1>
					</div>	
					<div class="col-sm-7">
						 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#current">Current</a></li>
										  <li><a data-toggle="tab" href="#previous">Previous</a></li>
								
						</ul>

									<div class="tab-content">
										<div id="current" class="tab-pane fade in active">
										    <h3>All Details</h3>
										    <p>Some content.</p>
									  </div>
									  <div id="previous" class="tab-pane fade">
										    <h3>Add</h3>
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
