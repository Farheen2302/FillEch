<?php 
$p_id = $_GET['var'];
include 'connection.php'; ?>
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
						<a href="../view_projects/index.php">BACK</a>
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
	<!-- aboutus -->
    <section class="aboutus" id="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h1>Project Details</h1> 
					</div>
												<?php $result=$conn->query("select * from project where p_id='$p_id'");
							 $row=$result->fetch_assoc();?>
							<h3><font color="blue">PROJECT</font></h3>
							<h5><font color="green">Project Name : </font><font color="maroon"><?php echo $row['p_name'];?></font></h5>
							<h5><font color="green">Project Start Date  : </font><font color="maroon"><?php echo $row['p_start_date'];?></font></h5>
							<h5><font color="green">Project End Date  :</font><font color="maroon"><?php echo $row['p_end_date'];?></font></h5>
							<h5><font color="green">Project Budget  :</font><font color="maroon"><?php echo $row['p_budget'];?></font></h5>
							<h5><font color="green">Project Details :</font><font color="maroon"><?php echo $row['p_details'];?></font></h5>
							<br><br>
							<?php $result=$conn->query("select * from achievement where p_id='$p_id'");?>
							<?php //if($result->num_rows>0)
							$row=$result->fetch_assoc();?>
							<h3><font color="blue">ACHIEVEMENTS</font></h3>
							<h5><font color="green">Achievement Title:</font><font color="maroon"><?php echo $row['ac_title'];?></font></h5>
							<h5><font color="green">Achievement Details:</font><font color="maroon"><?php echo $row['ac_details'];?></font></h5>
							<br><br>
							<?php $result=$conn->query("select * from fund where p_id='$p_id'");
							//if($result->num_rows>0)
							$row=$result->fetch_assoc();?>
							<h3><font color="blue">FUND</font></h3>
							<h5><font color="green">Fund Amount:</font><font color="maroon"><?php echo $row['fund_amount'];?></font></h5>
							<h5><font color="green">Fund By :</font><font color="maroon"><?php echo $row['fund_by'];?></font></h5>
							<br><br>

							<?php $result=$conn->query("select * from volunteer where p_id='$p_id'");
							//if($result->num_rows>0)
							$row=$result->fetch_assoc();?>
							<h3><font color="blue">VOLUNTEER</font></h3>
							<h5><font color="green">Volunteer Name:</font><font color="maroon"><?php echo $row['v_name'];?></font></h5>
							<h5><font color="green">Volunteer Contact :</font><font color="maroon"><?php echo $row['v_contact'];?></font></h5>
							<br><br>
							<?php 
							$result=$conn->query("select * from project_manager where p_id='$p_id'");
							//if($result->num_rows>0)
							$row=$result->fetch_assoc();?>
							<h3><font color="blue">PROJECT MANAGER</font></h3>
							<h5><font color="green"> Project Manager Name:</font><font color="maroon"><?php echo $row['pm_name'];?></font></h5>
							<h5><font color="green">Manager Contact :</font><font color="maroon"><?php echo $row['pm_contact'];?></font></h5>
							<br><br>

					</div>
					
				</div>				
			</div>
	</section>	
	<!-- /.aboutus -->
	
	
	
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
