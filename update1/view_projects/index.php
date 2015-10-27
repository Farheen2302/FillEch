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
						<a href="../admin/index.php">BACK</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li class="active"><a href="#home">HOME</a></li>
							<li><a href="../admin/index.php#manage_projects">EDIT</a></li>
						<li><a href="../logout.php">LOGOUT</a></li>
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
						<h3>
							Currently running projects
		                </h3>

						<p>
<div id="proj">								
<?php $result=$conn->query("select * from project where p_status=0");
if($result->num_rows>0)
{
	$roll=0;
	 
	while($row=$result->fetch_assoc())
{
?>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse<?=$roll?>"><?php echo $row["p_name"];?></a>
      </h4>
    </div>
    <div  class="panel-collapse collapse" id="collapse<?=$roll?>">
      <h4>Description</h4>
<p><?php echo $row["p_details"];?></p>
<p>Estimated budget for this project is around Rs.<?php echo $row["p_budget"];?><br>
Project has been in progress from <?php echo $row["p_start_date"];?></p>
</div>
</div>
</div>
<?php 
$roll++;

}
}
else 
{
echo "There are no running projects!";
}?>
    </div>
  </div>
</div>
						<h3>completed projects</h3>

 <p>
<div id="proj">								
<?php $result=$conn->query("select * from project where p_status=1");
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
{
?>
	
<h3><?php echo $row["p_name"];?></h3>
            <div>
<table border="1" width="75%">
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
</table>
</br>
</br>
</div>
<?php }
}
else 
{
echo "There are no running projects!";
}?>	
</div>		
</p>
					</div>
					
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
