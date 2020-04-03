<?php

include('db.php');
include('header.php');


$query=mysql_query("select * from gallery");
$rowcount=mysql_num_rows($query);

?>

  
  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">Gallery</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">GALLERY</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	
	<!--banner-bottom-->
	<div class="container">
		<div class="gallery">
		<div class="container">
		<div class="gallery-top">
					<h3>Photo</h3>
				  </div>
			<div class="portfolio-bottom">
				<div class="gallery-one">
				 <?php
while($row =mysql_fetch_array($query)){?> 
					<div class="col-md-3 gallery-left">
						<a href="gallery/<?php echo $row['image'];?>" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
						<img src="gallery/<?php echo $row['image'];?>" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<?php
}?> 
					
					
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<!--video-->
	<?php

include('db.php');

$query=mysql_query("select * from video");
$rowcount=mysql_num_rows($query);

?>
	<div class="container">
	<div class="gallery-top">
					<h3>Video</h3>
				  </div>
      <div class="row ">
	  
	  <?php
while($row =mysql_fetch_array($query)){?> 
	<div class="col-md-4">
	  
	<div class="img-thumbnail">      
 <video class="embed-responsive-item col-md-12"  controls="true" > <source src="video/<?php echo $row['video'];?>">
 </video>
 <div>
</div>
</div> 

</div>
<?php }?>
</div>

 
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
	include('footer.php');
	?>