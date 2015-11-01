<?php include('../connection.php');

$msg1="";
if(isset($_GET['msg']))
	
{
		
	if($_GET['msg']==1)
		
	{
			
		$msg1 = "Successfully added!";
			
				
	}
		
	else if($_GET['msg']==3)
		{
			$msg1="User name already exists!";	
		}	
		else	
		{
		$msg1="Enter All the Entries or user already exists!";		
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
   <section class="aboutus" id="manage_projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wow bounceInLeft" data-wow-delay="0.1s"> 
						<h1>Volunteers</h1> 
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
									  <?php $result=$conn->query("select v_id,v_name,v_address,v_contact,v_email,v_doj,v_sal,p_name from volunteer,project  where project.p_id=volunteer.p_id");
									if($result->num_rows>0)
									{ 
										$i=1;
										while($row=$result->fetch_assoc())
										{ 
										?> <div class="panel panel-default">
 							   <div class="panel-heading">
      								<h5 class="panel-title">
       				 				<?php echo '<a data-toggle="collapse" href="#'.$i.'">'.$row["v_name"]."</a>";?>
     							 	</h5>
    							</div>
    							<?php echo '<div  class="panel-collapse collapse" id="'.$i.'">';?>
     									<h5><font color="blue">Volunteer  ID:<?php echo $row['v_id'];?></font></h5>
											<h5><font color="green">Working On Project  :</font><font color="maroon"><?php echo $row['p_name'];?></font></h5>
											<h5><font color="green">Address  :</font><font color="maroon"><?php echo $row['v_address'];?></font></h5>
											<h5><font color="green">Contact  :</font><font color="maroon"><?php echo $row['v_contact'];?></font></h5>
											<h5><font color="green">Email :</font><font color="maroon"><?php echo $row['v_email'];?></font></h5>
											<h5><font color="green">Date Of Joining:</font><font color="maroon"><?php echo $row['v_doj'];?></font></h5>
											<h5><font color="green">Salary :</font><font color="maroon"><?php echo $row['v_sal'];?></font></h5>
											<br><br>
	  							</div>
 										
    							</div>

 										<?php
 										$i++;
 										}   		
									 
									}
									else 
									{
										echo "There are no volunteers!";
									}?>

										   
										 </div>
</div>
										
										  <div id="add" class="tab-pane fade ">
										  	<h4><font color=green><?php echo $msg1?></font></h4>
										    <h3>Add</h3>


										     <form action="add_vol.php" method="post">
											
											<table border="0">
												<tr>
													<td>
														<h5>Working on Project &nbsp;&nbsp;</h5></td>
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
														<h5>Name </h5></td>
														<td>
														 <input type="text" name="name" placeholder="Volunteer Name" size=40></font>
														</td>
												</tr>
													<tr>
													<td><h5>Address</h5></td>
													<td><textarea rows="4" cols="40" name="address" type="text" placeholder="Enter text here..."></textarea></font></td>
												</tr>
												<tr>
													<td>
														<h5>Contact </h5></td>
														<td>
														 <input type="tel" name="contact" placeholder="Mobile No." size=40></font>
														</td>
												</tr>
												<tr>
													<td>
														<h5>Email </h5></td>
														<td>
														 <input type="mail" name="email" placeholder="Email address" size=40></font>
														</td>
												</tr>
												<tr>
													<td>
														<h5>Salary </h5></td>
														<td>
														 <input type="text" name="salary" placeholder="Salary" size=40></font>
														</td>
												</tr>
												<tr>
													<td><h5>Date of joining</h5></td>
													<td><input type="date" name="doj" placeholder="YYYY-MM-DD" size=40></font></td>
												</tr>
													<tr>
													<td><input type="submit" name="submit1" value="Add"></td>
												</tr>
											</table>

											<br>
									
											</form>
										  </div>
										  
										  <div id="remove" class="tab-pane fade">
										      <h3>Select the Volunteers you want to remove</h3>

													    <form action="index.php" onSubmit="return myfunction();" method="post">
										    	<?php $result1=$conn->query("select * from volunteer");
													if($result1->num_rows>0)
													{
														while($row=$result1->fetch_assoc())
													{
														echo '<input type="checkbox" id="id1" name="projectName[]" value="'.$row["v_name"].'">'.$row["v_name"]."<br>";
  													 }
  													}
  													else 
													{
														echo "There are no Volunteers on roll!";
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
													<?php include 'rem_vol.php';?>
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
