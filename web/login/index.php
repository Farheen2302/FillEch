<?php
session_start();
	$msg1="";
	
$msg2="";
	
$msg3="";
$name="";
	
if(isset($_GET['error']))
	
{
		
	if($_GET['error']==1)
		
	{
			
		$msg1 = "Invalid Username or Password!";
			
				
	}
		
	else if($_GET['error']==2)
		
	{
			
		$msg2 = "Username required!";
		
	}
	else		
	{
			
		$msg3 = "Password required!";

		$name=$_GET['name'];		
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
    
    
</head>

<style>
	.err{color: red;}
</style>
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
					   <!--<p style="font-family:'Myriad Pro','sans-serif'; font-size:40px; "><strong>PROJECT MANAGEMENT</strong></p>-->
					</div>
				</div>
				
				<!-- Collect the nav links and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="dropdown-box-1">
					
					<ul class="nav navbar-nav">
						<li class="active"><a href="../index.php">BACK</a></li>
					</ul>
					
				</div>
				
			</div> <!-- /.container -->
		</nav> <!-- /.nav -->
	</header>
	
	
	<section class="testimonials-banner" id="login"></section>
	
	
		<div class="container">

			
		
		<form class="form" action="../verify.php" method="POST">
		<div id="menu" align="middle" >
			<h1><strong>WELCOME</strong></h1>
			<p><input type="text" placeholder="Username" size=30 name="username"><span class="err"><br><?php echo $msg2?></span></p>
			<p><input type="password" placeholder="Password" size=30 name="password"><span class="err"><br><?php echo $msg3?></span></p>
			<p><input type="submit" name="submit" value="LOGIN"><br>
			<span class="err"><?php echo $msg1?></span></p>
			
			<p></p>
			<p></p>	
		</div>
		</form>
	</div>
	
</div>

	
	
	
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
