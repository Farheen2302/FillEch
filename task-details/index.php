<?php 
$task = $_GET['var'];
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
						<a href="../volunteer1/index.php#task">BACK</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				
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
						<h1>Task Details</h1> 
					</div>
												<?php $result=$conn->query("select * from task where task_name='$task'");
							 $row=$result->fetch_assoc();?>
							<h2><font color="blue">TASK</font></h2>
							<div>
<table border="0" width="50%">
<tr>
<td><h4><font color="green">Name </font></h4></td>
<td><h5><font color="maroon"><?php echo $row['task_name'];?></font></h5></td>
</tr>
<tr>
<td><h4><font color="green">Assigned On </font></h4></td>
<td><h5><font color="maroon"><?php echo $row['date_of_sub'];?></font></h5></td>
</tr>
<tr>
<td><h4><font color="green">DeadLine </font></h4></td>
<td><h5><font color="maroon"><?php echo $row['dead_line'];?></font></h5></td>
</tr>
<tr>
<td><h4><font color="green">Details </font></h4></td>
<td><h5><font color="maroon"><?php echo $row['task_detail'];?></font></h5></td>
</tr>
<tr>
</table>
</div>
							
							<br><br>
							<?php $result=$conn->query("select * from project_manager where pm_id=(select pm_id from task where task_name='$task')");?>
							<?php //if($result->num_rows>0)
							$row=$result->fetch_assoc();?>
							<h3><font color="blue">Assigned by:</font></h3>
							<table border="0">
								<tr>
									<td><h4><font color="green">Project Manager&nbsp;&nbsp;</font></h4></td>
									<td><h5><font color="maroon"><?php echo $row['pm_name'];?></font></h5></td>
								</tr>
								<tr>
									<td><h4><font color="green">Contact </font></h4></td>
									<td><h5><font color="maroon"><?php echo $row['pm_contact'];?></font></h5></td>
								</tr>
								<tr>
									<td><h4><font color="green">E-mail Id</font></h4></td>
									<td><h5><font color="maroon"><?php echo $row['pm_email'];?></font></h5></td>
								</tr>
							</table>
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
