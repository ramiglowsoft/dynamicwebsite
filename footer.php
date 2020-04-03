 <?php
include("db.php");
if(isset($_POST["subscribe"]))
{
	$email=$_POST['email'];

$memberregister=mysql_query("insert into subscriber(email)values('$email')");
	
	
	echo "Form Submitted Succesfully";
	header('location:index.php');
}
	?>
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
			                      <form action="footer.php" method="post">
								  <div class="group">
                                     <input type="text" class="form-control email" placeholder="Drop Your E-Mail" name="email">
                                   </div>
                               
	            <button class="btn btn-subs btn-block" name="subscribe">SUBSCRIBE</button>
	         </form>
                             
			      		 
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
	
	
	