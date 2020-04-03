
<!DOCTYPE html>
<html>
<head>
<title>ADMIN PANEL</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<style>
.btn {
    
    margin-bottom: 9px;
	}
	
.lable {
    margin-bottom: 20px;
    font-size: 20px;
    margin: 17px auto;
}
	
	.gn-menu-main > li:last-child {
    float: right;
    border-left: 1px solid #1372bf;
    padding-top: 20px;
}
.padding_none
{padding:0;}
.boder_page
{
	border:2px solid;
}
.memmberdetails {
    border: 2px solid;
    margin-top: 40px;
    padding: 30px;
}
.reglist
{
	text-align:center;
	padding: 10px;
}
</style>
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Home Page <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="slider.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Slider Update</a></li>
										<li class="mini_list_w3"><a href="homewelcome.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Welcome Section </a></li>
										<li class="mini_list_w3"><a href="teammember.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Team Update Section </a></li>
									</ul>
								</li>
								<li>
									<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Gallery <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="photo.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Photo Update</a></li>
										<li class="mini_list_w3"><a href="video.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Video Update</a></li>
									</ul>
								</li>
								<li><a href="memberregisterlist.php"> <i class="fa fa-table" aria-hidden="true"></i> Membership List</a></li>
								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>About Page Update</a>
								     	<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="aboutinfo.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>Info section</a></li>
										<li class="mini_list_w3"><a href="aboutcharities.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Charities Section</a></li>
										<li class="mini_list_w3"><a href="upcomingevent.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Upcoming Event Section</a></li>
										<li class="mini_list_w3"><a href="support.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Support Section</a></li>
										
									</ul>
								</li>
								
								<li><a href="blogs.php"> <i class="fa fa-line-chart" aria-hidden="true"></i> Blogs</a></li>
								
								<li><a href="detailsmember.php"> <i class="fa fa-table" aria-hidden="true"></i> Details Membership List</a></li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="dashboard.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin Panel </a></h1></li>
<li class="second w3l_search"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				       

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		
			

<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>
