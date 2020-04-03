<?php
	include ('db.php');
	
	session_start();
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$password = $_POST['password'];
 $select ="select * from `superadmin` where `email`='$email' and `password`='$password'";

$query= mysql_query($select);
 $num=mysql_num_rows($query);
if($num>=1)
{
$_SESSION["email"]= $_POST['email'];
    if(!empty($_POST["rememeber"]))
	{
	  setcookie ("email",$_POST['email'],time()+ (10*365*24*60*60));
	  	  setcookie ("password",$_POST['password'],time()+ (10*365*24*60*60));

	}
	else
	{
	if(isset($_COOKIE["email"]))
	{
	setcookie ("email","");
	}
	if(isset($_COOKIE["password"]))
	{
	setcookie ("password",'');
	
	}
	
	}
	header('location:dashboard.php');
	
	
}
else
{
	$message = "Invalid Login";
	
}
	
	
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title> Admin Login </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Admin" />

<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">

				<!-- //nav_agile_w3l -->
                <li class="second logo admin"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin Panel </a></h1></li>
					



			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					

							<div class="registration admin_agile">
								
												<div class="signin-form profile admin">
													<h2>Admin Login</h2>
													<div class="login-form">
														<form id="login-form" method="post" enctype="multipart/form-data" class="form-horizontal" action="index.php">
															<input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_COOKIE["email"])){ echo $_COOKIE["email"];}?>" placeholder=" Email Id..">
<input type="password" name="password" id="password" class="form-control" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];}?>" placeholder="Password..">
															
															<input type="checkbox" name="remember"  <?php if(isset($_COOKIE["email"])) { ?> checked <?php }?>  /> 
<label for="remember-me">Remember me</label>
															<div class="tp">
																<input type="submit" name="submit" value="LOGIN">
															</div>
															
														</form>
													</div>
													
												
													 <h6><a href="../index.php">Back To Home</a><h6>

													 
												</div>

					

				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 LOVE TRUST . All Rights Reserved .</p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>