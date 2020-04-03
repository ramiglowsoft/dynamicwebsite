<?php

include('db.php');
include('header.php');
$query=mysql_query("select * from slider");
$rowcount=mysql_num_rows($query);

?>
  
 <div class="slider_section">
           <div class="container-fluid slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
				 <?php
for($i=1;$i<=$rowcount;$i++)
{
$row= mysql_fetch_array($query);
?>
<?php
if($i==1)
{
?>
                     <div class="item active">
                          <img src="sliderimage/<?php echo $row["image"]?>" alt="Los Angeles" class="banner_slider"  >
		 				  <div class="container">
		                     <div class="banner_text">
							     <div class="finacalplan padding_none col-md-6 col-sm-6 col-xs-6">
                                     <p class="plan"><?php echo $row["description"]?></p>
                                      <p class="subpara"><?php echo $row["content"]?> </p>
                                      

								
								     <div class="learnmore">	  
	  	                                 <div class="learn_buttons">
	                                         <a href="sliderreadmore.php?slider=<?php echo $row['id'];?>" class="btn btn-texts"> READ MORE</a>
	                                     </div>
	                                 </div>
								   </div>
								</div>							 
						  </div>
						</div>
						<?php
}
else
{
?>
						
						
						 <div class="item">
                          <img src="sliderimage/<?php echo $row["image"]?>" alt="Los Angeles" class="banner_slider"  >
		 				  <div class="container">
		                     <div class="banner_text">
							     <div class="finacalplan padding_none col-md-6 col-sm-6 col-xs-6">
                                     <p class="plan"><?php echo $row["description"]?></p>
                                      <p class="subpara"><?php echo $row["content"]?> </p>
                                      

								
								     <div class="learnmore">	  
	  	                                 <div class="learn_buttons">
	                                         <a href="sliderreadmore.php?slider=<?php echo $row['id'];?>" class="btn btn-texts"> READ MORE</a>
	                                     </div>
	                                 </div>
								   </div>
								</div>							 
						  </div>
						</div>
						
						
						 <?php
 }?>
  <?php
 }?>
						
	                </div>
               </div>
           </div>
		   </div><!--end-->
          <!--welcome-->
   <?php

include('db.php');

$querys=mysql_query("select * from welcome");
$rowcount=mysql_fetch_array($querys);

?>
  <div class="welcome_section">
             <div class="container">
			     <div class="finance_image padding_none col-lg_6 col-sm-6 col-md-6 col-xs-12">
				         <div class="welcome_bannne">
						 <img src="admin/welcomesection/<?php echo $rowcount["image"]?>" alt="Los Angeles" class="img-responsive welocomeimage">
					    </div>
				  </div>
				  <div class=" cont padding_none col-lg_6 col-sm-6 col-md-6 col-xs-12">
				  <div class="welcome_content">
				     <h1 class="cont_head"><?php echo $rowcount["heading"]?></h1>
					   <p class="conte_para"><?php echo $rowcount["content"]?></p>
                         <p class="conte_para"><?php echo $rowcount['contents']?></p>
				  
				  </div>
				 
			  
			 </div>
         </div>
		 
		 <div class="space hidden-sm hidden-xs">
 </div>
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


<?php

include('db.php');

$query=mysql_query("select * from teammember");
$rowcount=mysql_num_rows($query);

?>
<!--TEAM---->
<div class="client_say">
	  
	     <div class="container">
		    
			 <h3 class="client_heads">Meet Our Team</h3>
		     
			 <div class="team padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
			     <div class="team_slick" role="toolbar">
 <?php
while($row =mysql_fetch_array($query)){?> 
				 <div class="img_team  padding_none col-lg-3 col-sm-3 col-md-3 col-xs-12">
			<div class="team_img">
			 <a href=""> <img src="teammember/<?php echo $row['image'];?>" class="img-responsive img-circle" alt="image"></a>
			 </div>
			 

	  <div class="teammember">
	     <table class="content_table">
			    <tr><td class="labelig"> Name:</td>
				<td><p class="label_content"><span class="membername"><?php echo $row['name'];?></span> </p></td><tr>
				 <tr><td class="labelig"> Designation:</td>
				<td> <p class="label_content"><span class="designation"><?php echo $row['designation'];?></span> </p></td><tr>
				 <tr><td class="labelig"> City:</td>
				<td> <p class="label_content"><span class="city"><?php echo $row['city'];?></span> </p></td><tr>
				   
			   </table>
			   </div>
			   
			   </div>
			<?php }?>
			  
            
			
			 </div>
			 </div>
		 
		 
		 
		 
		    </div> 
	</div>
  
  
<?php
include('footer.php');
?>