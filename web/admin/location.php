<?php include 'connection.php';
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
						<a href="index.php">BACK</a>
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
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
						<h1>Locations</h1> 
					</div>
					<div class="col-sm-7">
						 <ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#details">Details</a></li>
										  <li><a data-toggle="tab" href="#add">Add</a></li>
										  <li><a data-toggle="tab" href="#remove">Remove</a></li>
										</ul>
										<div class="tab-content">
									
										<div id="details" class="tab-pane fade in active">
										<div class="panel-group">
										<br>
					  <?php $result=$conn->query("select add1,add2,city,state,pin,p_name from location,project where location.p_id=project.p_id");
									if($result->num_rows>0)
									{ 
										$i=1;
										while($row=$result->fetch_assoc())
										{

										?> <div class="panel panel-default">
 							   <div class="panel-heading">
      								<h5 class="panel-title">
       				 				<?php echo '<a data-toggle="collapse" href="#'.$i.'">'.$row["add1"]." ,  ".$row["add2"]."</a>";?>
     							 	</h5>
    							</div>
    							<?php echo '<div  class="panel-collapse collapse" id="'.$i.'">';?>
     						

											<h5><font color="green">Address Line1  :</font><font color="maroon"><?php echo $row['add1'];?></font></h5>
											<h5><font color="green">Address Line2  :</font><font color="maroon"><?php echo $row['add2'];?></font></h5>
											<h5><font color="green">City :</font><font color="maroon"><?php echo $row['city'];?></font></h5>
											<h5><font color="green">State:</font><font color="maroon"><?php echo $row['state'];?></font></h5>
											<h5><font color="green">Pincode :</font><font color="maroon"><?php echo $row['pin'];?></font></h5>
											<br><br>
	  							</div>
 										
    							</div>

 										<?php
 										$i++;
 										}   		
									 
									}
									else 
									{
										echo "There are no locations!";
									}?>

										   
										 </div>
</div>
										
										  <div id="add" class="tab-pane fade ">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										    <h3>Add</h3>


										     <form action="add_loc.php" method="post">
											
											<table border="0">
										        <tr>
													<td>
														<h5>Location for Project &nbsp;&nbsp;</h5></td>
														<td>
														<select name="p_id">
													<option selected="selected">select project name</option>
													<?php $result1=$conn->query("select * from project");
													if($result1->num_rows>0)
													{
														while($row=$result1->fetch_assoc())
													{
														?>
														<option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
													<?php
  													 }
  													}
  													else 
													{
														echo "There are no running projects!";
													}?>	
													<br>
												
													</select><br />

													</td>
												</tr>
	                                            
										        <tr>
													<td>
														<h5>Address Line1 </h5></td>
														<td>
														 <input type="text" name="l1" placeholder=" Enter Address" size=40></font>
													
														</td>
												</tr>
													<tr>
													<td><h5>Address Line2</h5></td>
													<td><input type="text" name="l2" placeholder="Enter Address" size=40></font></td>
												</tr>
												<tr>
													<td>
														<h5>City </h5></td>
														<td>
														 <input type="text" name="city" placeholder="Enter city" size=40></font>
														</td>
												</tr>
												<tr>
													<td>
														<h5>State </h5></td>
														<td>
														 <input type="text" name="state" placeholder="Enter state" size=40></font>
														</td>
												</tr>
												<tr>
													<td>
														<h5>Pincode </h5></td>
														<td>
														 <input type="text" name="pin" placeholder="Pincode of your city" size=40></font>
														</td>
												</tr>
											
													<tr>
													<td><input type="submit" name="submit1" value="Add"></td>
												</tr>
											</table>

											<br>
									
											</form>
										  </div>
										  
										  <div id="remove" class="tab-pane fade">
										      <h3>Select the Location you want to remove</h3>

													    <form action="location.php" onSubmit="return myfunction();" method="post">
										    	<?php $result1=$conn->query("select * from location ");
													if($result1->num_rows>0)
													{
														while($row=$result1->fetch_assoc())
													{
														echo '<input type="checkbox" id="id1" name="projectName[]" value="'.$row["l_id"].'">'.$row["add1"]." ,  ".$row["add2"]."<br>";
  													 }
  													}
  													else 
													{
														echo "There are no locations yet!";
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
    														var r=confirm("Are you sure you want to delete?");
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
													<?php include 'rem_loc.php';?>
											</form>
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
