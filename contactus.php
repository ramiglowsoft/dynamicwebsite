<?php
include('db.php');
include ('header.php'); 
if(isset($_POST['submit']))
{
$name=$_POST['username'];
$tel=$_POST['phone'];
$email=$_POST['email'];
$subject="Enquriy";
$comment=$_POST['message'];
$to="ramkumarcse2k18@gmail.com";
$headers= "From:$name<$email>";
$message="Name: $name\n\n Mobile Number: $tel\n\n Email: $email\n\n Comment: $comment";
mail($to,$subject,$message,$headers);

header('location:contactus.php');
}






?>



  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">Contact</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">CONTACT US</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	
	 <!--Map-->
   
   <div class="container-fluid map" id="map">
	
    <script>
       function myMap() {
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
               center: new google.maps.LatLng(9.9252,78.1198), zoom: 10,
	           disableDefaultUI: true
               };
          var map = new google.maps.Map(mapCanvas, mapOptions);
           }
    </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqwTdpFuCFxxt-EEREspzeXuE6w3Pxkhk&callback=myMap"></script>
	
	
	</div><!--END-->
	
	
	<div class="container-fluid getintouchme">
     <div class="container">
	    <div class="contantus padding_none col-lg-12 col-md-12 col-sm-12 col-xs-12">
		 <div class="getintouch padding_none col-lg-6 col-md-6 col-sm-6 col-xs-12">
		     <div class="touch">
			      <p class="getin_head">&nbsp;Get In Touch With Us</p>
			 </div>
			 <div class="tabp padding_none col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <form class="form-horizontal" action="#">
			     <div class="form-group">
			         <input type="text" class="form-control name col-md-10 col-sm-10 col-lg-12 col-xs-12" name="username" placeholder="Your Name">
				</div>
				 <div class="form-group">
			         <input type="text" class="form-control name col-md-10 col-sm-10 col-lg-12 col-xs-12" name="email" placeholder="Your Mobile">
				</div>
				<div class="form-group">
			         <input type="text" class="form-control name col-md-10 col-sm-10 col-lg-12 col-xs-12" name="phone" placeholder="Your E-Mail">
				</div>
				<div class="form-group message wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
			         <textarea rows="5" class="form-control message col-md-10 col-sm-10 col-lg-12 col-xs-12" name="message" placeholder="Your Message"></textarea>
			    </div>
				
			  </form>
			   <div class="learn_buttons">
				<button type="button" class="btn btn-send">SEND</button>
				</div>
             </div>
			 
		 </div>
		 
		 
		 <div class="contactinfo padding_none col-lg-6 col-md-6 col-sm-6 col-xs-12">
		     <div class="info">
			      <p class="Contact_head">&nbsp;Contact Details</p>
			 </div>
			 <div class="address-info padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
		         <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-title">
							 Home Address</a>
                             </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class= " join padding_none col-lg-12 col-md-12 col-md-12 col-xs-12">							  		  
						          <img src="image/locat_gray.png" class="contact_icons" alt="icons">
				                   <span><a href="index.html" class="social"> 2nd North Street, Syracuse, NY, USA</a>
				                   </span>
							  </div>
                           </div>
                         </div>
                     </div>
		
		              <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="panel-title">
							 Fax</a>
                             </h4>
                          </div>
                          <div id="collapsetwo" class="panel-collapse collapse ">
                            <div class="panel-body">
                               <div class= " join padding_none col-lg-12 col-md-12 col-md-12 col-xs-12">
							   <img src="image/print_gray.png"" class="contact_icons" alt="icons">
				<span><a href="index.html" class="social"> 1 2345 6789 0123</a>
				</span></div>
                           </div>
                         </div>
                     </div>
		               
					   
					   <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree" class="panel-title">
							Call & Text</a>
                             </h4>
                          </div>
                          <div id="collapsethree" class="panel-collapse collapse ">
                            <div class="panel-body">
                               <div class= "join padding_none col-lg-12 col-md-12 col-md-12 col-xs-12">
							   <p><img src="image/phone_gray.png" class="contact_icons" alt="icons"> 
							   <span class="social">1 2345 6789 0123</span></p>

        						<p><img src="image/email_gray.png" class="contact_icons" alt="icons"> 
								<span class="social">lovetrust@gmail.com</span>
				           </div>
                           </div>
                         </div>
                     </div>
					 
					 
					 <div class="panel panel-default">
                          <div class="panel-heading socialpanel">
                              <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="panel-title">
							 Social Networks</a>
                             </h4>
                          </div>
                          <div id="collapsefour" class="panel-collapse collapse in ">
                            <div class="panel-body">
                           				  
				         <div class= "join padding_none col-lg-12 col-md-12 col-md-12 col-xs-12">
				     
					     <p class="social">Join With Us Via Social Network </p>
			         <div class="social_icons">
	                      <ul  id="navlist_tab">
	                              <li id="facebook_icon"><a href=="https://www.facebook.com/"  target="_blank" class="fb"></a></li>
	                    <li id="google-plus_icon"><a href="https://www.google-plus.com/" target="_blank" class="gp"></a></li>
	                   <li id="instagram_icon"><a href="https://www.instagram.com/" target="_blank" class="ins"></a></li>
		              <li id="twitter_icon"><a href="https://www.twitter.com/" target="_blank" class="tw"></a></li>
		              <li id="prinest_icon"><a href="https://www.printest.com/" target="_blank" class="pri"></a></li>
	                 </ul>
	  
	              </div>
             </div>                    
          </div>
		</div>				
			 </div>
		
		 
		</div>
	 
	 </div>
   </div>
   </div>
   </div>
   </div><!--end-->
   
   
	
	
	
	<?php
include ('footer.php');
?>