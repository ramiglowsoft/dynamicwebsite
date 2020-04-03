

<!DOCTYPE html>
 <html lang="en">
 <head>
   <title>LOVETRUST</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/truststyle.css">
   <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
   <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="js/Chart.bundle.js"></script>
	<script src="js/utils.js"></script>
   <script src="js/jquery-3.2.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
	
  </head>
  <body class="template_about">
  
  <!--header section-->
  <header>
     <div class="container-fluid head">
         <div class="container">
		     <div class="headersection padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
			     <div class="contact padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
				     <div class="callus">
					     <ul>
						 <li><p> <img src="image/callme.png" alt="icons">&nbsp;&nbsp;&nbsp;&nbsp;Call Us Free   :<a href="tel:(+123) 456 789" class="calus"> (+123) 456 789</a></p></li>
						 </ul>
					  </div>
				     <div class="callus tellus">
					     <ul>
						 <li><p><img src="image/mail.png" alt="icons">&nbsp;&nbsp;&nbsp;Text Us :<a href="mailto:myfinance@gmail.com" class="malus">  lovetrust@gmail.com</a></p></li>
						 </ul>
					  </div>
				 
				 </div>
			      <div class="socialmedia_icons  padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12 ">
			         <ul class="socialmediaicons">
			             <li class="socialmediaicons"> <a href="https://www.facebook.com/" target="_blank" ><img src="image/facebook.png" alt="icons"></a></li>
						  <li class="socialmediaicons"> <a href="https://www.twitter.com/" target="_blank" ><img src="image/twiitter.png" alt="icons"></a></li>
						   <li class="socialmediaicons"><a href="https://www.pinterest.com/" target="_blank" ><img src="image/pinterest.png" alt="icons"></a></li>
				           <li class="socialmediaicons"> <a href="https://www.linkedin.com/" target="_blank" ><img src="image/linkadin.png" alt="icons"></a></li>
						   <li class="socialmediaicons"> <a href="https://www.google-plus.com/" target="_blank"><img src="image/googleplus.png" alt="icons"></a></li>
	 		            
	 		            
		 	         </ul> 	         
			       </div>
			 </div> 
		 </div>
	  </div>
	  
	  <!--navbar section-->
	  <div class="container">
          <nav class="navbar navgation">
                 <div class="navbar-header">
                      <a class="navbar-brand logo" href="#"><img src="image/logo.png" class="img-responsive" alt="logo"></a>
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span> 
                      </button>
                 </div>
<div class="collapse navbar-collapse" id="myNavbar">
                         <ul class="nav navbar-nav navbar-right">
                             <li class="nav-item"><a href="index.php" class="nav-item">HOME</a></li>
							 <li class="nav-item"><a href="gallery.php" class="nav-item">GALLERY</a></li>						                         
                             <li class="nav-item"><a href="registration.php" class="nav-item">MEMBER REGISTER </a></li>
                             <li class="nav-item"><a href="donate.php" class="nav-item">DONATIONS</a></li>
                             <li class="nav-item"><a href="blogs.php" class="nav-item">BLOGS</a></li>
							 <li class="nav-item"><a href="about.php" class="nav-item">ABOUT US</a></li>
							 <li class="nav-item"><a href="contactus.php" class="nav-item nav-items">CONTACT US</a></li>
                        </ul>
			     </div>
             </nav>
	   </div>   
  </header><!--end-->
  
  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">Slider</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">Slider</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	
	<!--welcome-->
	<div class="blog-section">
		<div class="container singlepage">	
	       <div class="blog-top">
		   <?php
include('db.php');

if(isset($_GET['slider']))
{
$id=$_GET['slider'];

$select = mysql_query("SELECT * FROM slider WHERE id='$id'");

$row=mysql_fetch_array($select);


?>
			  <div class="grid_3 two">
					<h3><?php echo $row["description"]?></h3>
					<a href="sliderimage/<?php echo $row['image'];?>"><img src="sliderimage/<?php echo $row['image'];?>" class="img-responsive" title="admin" alt=""/></a>
                      <p><?php echo $row["content"]?></p>
					
					<p><?php echo $row["fullcontent"]?></p>
		</div>
		<?php }?>
				</div>
				</div>
			</div>	
						   
						  
	
	
	
	
	
	
	
	
	
	
	
	
	<!--footer-->
  
  <footer>
  
      <div class="container">
	     <div class="footer padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
		    <div class="right_footer padding_none col-lg-6 col-md-6 col-sm-6 col-xs-12">
		       <div class="about about_my padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
			     <h4 class="footer_head">ABOUT LOVE TRUST</h4>
			      <p class="about_content">Vim no error choro nusquam, affert dissentias te vix,
				  tantas voluptua partiendo id eam.Ad ubique nonumes dissen-tiet mel, ea sint dicunt impe-tus.</p>
			 
			      <div class="socials_icons">
	                    <ul  id="navlists">
	                       <li id="facebook_icons"><a href=="https://www.facebook.com/"  target="_blank" class="fb"></a></li>
	                       <li id="google-plus_icons"><a href="https://www.google-plus.com/" target="_blank" class="gp"></a></li>
	                       <li id="instagram_icons"><a href="https://www.instagram.com/" target="_blank" class="ins"></a></li>
		                    <li id="twitter_icons"><a href="https://www.twitter.com/" target="_blank" class="tw"></a></li>
		                    <li id="prinest_icons"><a href="https://www.printest.com/" target="_blank" class="pri"></a></li>
	                   </ul>
	  
	              </div>
  
			 
			 </div>
		     
			
		       <div class="about contact_us padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
			     <h4 class="footer_head">CONTACT US</h4>
			      <ul class="footer_item">
				     <li class="nav_list"><img src="image/locat_gray.png" class="contact_icons" alt="icons"><span class="item"><a href="index.html" class="nav_item loca"> 2nd North Street, Syracuse, NY, USA</a></span></li>
					 <li class="nav_list"><img src="image/phone_gray.png" class="contact_icons" alt="icons"><span class="item"><a href="tel:(+123) 456 789" class="nav_item mobil">+1 234 567 890</a></span></li>
					 <li class="nav_list"><img src="image/print_gray.png" class="contact_icons" alt="icons"><span class="item"><a href="" class="nav_item fax">1 2345 6789 0123</a></span></li>
					 <li class="nav_list"><img src="image/email_gray.png" class="contact_icons" alt="icons"><span class="item"><a href="mailto:myfinance@gmail.com" class="nav_item mailid">lovetrust@gmail.com</a></span></li>
					 
	              </ul>
			      		 
			 </div>
			 </div>
			  <div class="left_footer padding_none col-lg-6 col-md-6 col-sm-6 col-xs-12">
			 <div class="about useful_link padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
			     <h4 class="footer_head">USEFUL LINKS </h4>
			      <ul class="footer_item">
				     <li class="nav_list"><img src="image/dots.png" class="arrowicons" alt="icons"><span class="item"><a href="index.html" class="nav_item">Adoption Child</a></span></li>
					 <li class="nav_list"><img src="image/dots.png" class="arrowicons" alt="icons"><span class="item"><a href="" class="nav_item">Charity actions</a></span></li>
					 <li class="nav_list"><img src="image/dots.png" class="arrowicons" alt="icons"><span class="item"><a href="" class="nav_item">Child Protection</a></span></li>
			
	              </ul>
			      		 
			 </div>
		      
			  
			  			 <div class="about newletter padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
			                      <h5 class="footer_head"> SUBSCRIBE OUR NEWSLETTER</h5>
				                   <p class="Subscribe">Subscribe to our newsletter to get the latest news and offers</p>
			                      <div class="group">
                                     <input type="text" class="form-control email" placeholder="Drop Your E-Mail" name="email">
                    
					               </div>
                               
	            <a href="" class="btn btn-subs btn-block">SUBSCRIBE</a>
	         
                             
			      		 
	     </div>
		 </div>
		 
		 
		 
		 
		</div>
	  
 </div>
  <hr>
   <div class="container">
   <div class="footer_last padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <ul class="footer_nav">
                             <li class="footernav_item"><a href="index.html" class="footernav_item">Home</a></li>
							 <li class="footernav_item"><a href="service.html" class="footernav_item">Services</a></li>
							 <li class="footernav_item"><a href="registration.html" class="footernav_item">Member Register</a></li>
	                         <li class="footernav_item"><a href="donate.html" class="footernav_item">Donations</a></li>
							 <li class="footernav_item"><a href="blogs.html" class="footernav_item">Blogs</a></li>
                             <li class="footernav_item"><a href="adout.html" class="footernav_item">About Us</a></li>
							 
                        </ul>
	</div>
  <div class="footer_last copy_footer padding_none col-lg-6 col-sm-6 col-md-6 col-xs-12">
      <p class="footerright"><img src="image/copyright.png" class="copyright_icons" alt="icons"> Copyright  2018.All rights Reserved by<a href="index.html" class="footerright"> lovetrust</a></p>
 </div>
 </div>
  </footer>
	
	
	
	
	</body>
  </html>