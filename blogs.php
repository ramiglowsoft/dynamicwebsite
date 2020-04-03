<?php

include('db.php');
include('header.php');
	


$query=mysql_query("select * from blogs");
$rowcount=mysql_num_rows($query);

?>


  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">Blogs</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">BLOGS</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	
	<!--welcome-->
	<div class="blog-section">
		<div class="container">
	       <div class="blog-top">
		    <?php
while($row =mysql_fetch_array($query)){?> 
			  <div class="col-md-6 grid_3">
					<h3><a href="single.php"><?php echo $row["shorttitle"]?></a></h3>
					<a href="blogs/<?php echo $row['image'];?>"><img src="blogs/<?php echo $row['image'];?>" class="img-responsive" title="admin" alt=""/></a>
					<div class="blog-poast-admin">
						<a href="#"><img src="image/b_small.jpg" class="img-responsive" title="admin" alt=""/></a>
						
					</div>
					<div class="blog-poast-info">
						<ul>
							<li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
							<li><i class="date"> </i><span> </span><?php echo $row["date"]?></li>
							<li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>3 Comments </a></li>
						</ul>
				    </div>
					<p><?php echo $row["abstractevent"]?></p>
					<div class="button"><a href="single.php?single=<?php echo $row['id'];?>" class="read trd">Read More</a></div>
				</div>
				<?php
}?> 
				
				<div class="clearfix"></div>
			  </div>
			 
			  
			<!--start-blog-pagenate-->
				<div class="blog-pagenat">
					<ul>
						<li><a class="frist" href="#">Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a class="last" href="#">Next</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
			<!--//End-blog-pagenate-->
		</div>
	</div>
		
	
	
	<?php
	include('footer.php');
	?>
	