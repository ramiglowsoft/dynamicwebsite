<?php
include('header.php')
?>
  
  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">About Us</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">ABOUT US</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	<!--welcome-->
	<!--start-about-->
	<?php

include('db.php');

$query=mysql_query("select * from aboutinfo");
$rows=mysql_fetch_array($query);

?>
	<div class="about">
		<div class="container">
				<div class="about-top">
					<div class="col-md-7 about-top-right">
						<h4><?php echo $rows["heading"]?></h4>
						<p><?php echo $rows["content"]?></p>
						<p><?php echo $rows["contents"]?></p>
					</div>
					<div class="col-md-5 about-top-left">
						<img src="admin/aboutinfo/<?php echo $rows["image"]?>" class="img-responsive" alt=""/>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>	 
	</div>
	<?php

include('db.php');

$query=mysql_query("select * from charities");
$rowcount=mysql_num_rows($query);

?>
	 <!--charities-->
		<div class="welcome">
			<div class="container">
				 <!--start-content-->
				<div class="welcome-top">
					<h3>Charities</h3>
				  </div>
				  
				 <div class="charitys">
				 <?php
while($row =mysql_fetch_array($query)){?> 
					 <div class="col-md-4 chrt_grid">
						 <div class="chrty">
							  <h3><?php echo $row['heading'];?></h3>
							  <p><?php echo $row['content'];?></p>
						 </div>
						 
					 </div>
					 <?php }?>
					 
					 <div class="clearfix"></div>
					
				 </div>
		 </div>		 
		 <!---->
		</div>
		
	 <?php

include('db.php');

$query=mysql_query("select * from eventupdate");
$rowcount=mysql_num_rows($query);

?>
  <!-- events -->
  
  
  
  
  
  
	<div class="events">
		<div class="container">
		    <h3 class="ourserv_head">News & Events</h3>
		
		
		<div class="event-grids">
			<div class="col-md-6 upcoming">
				<h3>Upcoming Events</h3>
		<div class="events_slick" role="toolbar">
		<?php
while($row =mysql_fetch_array($query)){?> 
				<div class="family">
					<div class="twenty">
						<h4><?php echo $row["date"]?></h4>
						<p><?php echo $row["month"]?></p>
					</div>
					<div class="sunday">
						<h5><?php echo $row["eventname"]?></h5>
						<p><?php echo $row["day"]?> | <?php echo $row["time"]?></p>
					</div>
					<div class="mor">
						<a class="more" href="single.php">MORE</a>
					</div>
						<div class="clearfix"> </div>
				</div>
			<?php }?>
				
			</div>
			</div>
			<div class="col-md-6 keep">
			<?php

include('db.php');

$query=mysql_query("select * from support");
$rowcount=mysql_fetch_array($query);

?>
				<h3>Keep Your Support</h3>
				<p><?php echo $rowcount["content1"]?></p>
				<p><?php echo $rowcount["content2"]?></p>
				<p><?php echo $rowcount["content3"]?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
	
		 
		 
		 
		 
		    </div> 
	</div>
	
	<?php
	  include('footer.php');
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	