<?php include 'connection.php';
session_start();
$uname=$_SESSION["user"];
$msg1="";
if(isset($_GET['msg']))
	
{
		
	if($_GET['msg']==1)
		
	{
			
		$msg1 = "Successfully added!";
			
				
	}
		
	else		
	{
		$msg1="Enter All the Entries!";		
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
						<h1>Expenses</h1> 
					</div>
							<div class="col-sm-7">
						 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#details">Details</a></li>
										  <li><a data-toggle="tab" href="#add">Add</a></li>
									
										</ul>
										<div class="tab-content">
									
										<div id="details" class="tab-pane fade in active">
										<div class="panel-group">
										<br>
									  <?php $result=$conn->query("select * from expenses where expenses.p_id in(select p_id from project_manager where pm_name='$uname')");
									if($result->num_rows>0)
									{ 
										$i=1;
										while($row=$result->fetch_assoc())
										{  $_SESSION["p_id"]=$row["p_id"];
										?> <div class="panel panel-default">
 							   <div class="panel-heading">
      								<h5 class="panel-title">
       				 				<?php echo '<a data-toggle="collapse" href="#'.$i.'">'."Amount   :".$row["amount"]."</a>";?>
     							 	</h5>
    							</div>
   
    							<?php echo '<div  class="panel-collapse collapse" id="'.$i.'">';?>
     									
										<h5><font color="green">Details:</font><font color="maroon"><?php echo $row["detail"];?></font></h5>
										
										<h5><font color="green">Added On: </font><font color="maroon"><?php echo $row["added_on"];?></font></h5>	
											<br>
	  							</div>
 										
    							</div>

 										<?php
 										$i++;
 										}   		
									 
									}
									else 
									{
										echo "There are no Expenses!";
									}?>

										   
										 </div>
</div>
										
										  <div id="add" class="tab-pane fade ">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										    <h3>Add</h3>


										     <form action="add.php" method="post">
											
											<table border="0">
												<tr>
													<td>
														<h5>Amount : </h5></td>
														<td>
														 <input type="text" name="amount" placeholder="Enter Amount" size=40></font>
														</td>
												</tr>
													
												<tr>
													<td>
														<h5>Details :</h5></td>
														<td><textarea rows="4" cols="40" name="details" type="text" placeholder="Enter details here..."></textarea></font>
														</td>
												</tr>

												<tr>
													<td><input type="submit" name="submit1" value="Add Expense"></td>
												</tr>
											</table>

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
