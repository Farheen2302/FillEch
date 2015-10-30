<?php include 'connection.php';?> 

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
						<a href="../admin/index.php">BACK</a>
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
						<h1>PROJECTS</h1> 
					</div>
					<div class="col-sm-7">
						<div class="panel-group">
 							 <div class="panel panel-default">
 							   <div class="panel-heading">
      								<h4 class="panel-title">
       				 				<a data-toggle="collapse" href="#collapse1">Projects in progress</a>
     							 	</h4>
    							</div>
    							<div  class="panel-collapse collapse" id="collapse1">
     								<?php $result=$conn->query("select * from project where p_status='In progress'");
									if($result->num_rows>0)
									{ 
										while($row=$result->fetch_assoc())
										{ 
										?>
        								<h5><a href="../p-details/index.php?var=<?php echo $row["p_id"] ?>"><?php echo $row["p_name"];?></a>
 										</h5>
 										<?php
 										}   		
									 
									}
									else 
									{
										echo "There are no running projects!";
									}?>
    							</div>
  							</div>
  							<div class="panel panel-default">
   								 <div class="panel-heading">
      								<h4 class="panel-title">
							        <a data-toggle="collapse" href="#collapse2">Projects Completed</a>
							      </h4>
							    </div>
    							<div  class="panel-collapse collapse" id="collapse2">
									  <?php $result=$conn->query("select * from project where p_status='Finished'");
									if($result->num_rows>0)
									{ 
										while($row=$result->fetch_assoc())
										{ 
										?>
        								<a href="../p-details/index.php?var=<?php echo $row["p_id"] ?>"><?php echo $row["p_name"];?></a>
 										<br>
 										<?php
 										}   		
									 
									}
									else 
									{
										echo "There are no completed projects!";
									}?>
 
									</div>
								</div>
		

						</div>
					</div>
					
				</div>	
				
			</div>
			<div><button onclick="location.href='../admin/index.php#manage_projects'" type="button" id="add-button">Manage Project</button>
			</div>
		</div>

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
