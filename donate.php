<?php

include('db.php');
include('header.php');


$query=mysql_query("select * from gallery");
$rowcount=mysql_num_rows($query);

?>

  
  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">Donations</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">DONATIONS</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	
	<!--banner-bottom-->
	<div class="donations">
		<div class="container">
			<div class="col-md-8 donate-right">
				<div class="donate-top">
					<h3>Pay with Credit card or Login</h3>
					<form>
						
						<div>
							<span>First Name<label>:</label></span>
								<input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
								<span>Last Name<label>:</label></span>
								<input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
								 <span>Email Address<label>:</label></span>
								 <input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
					 		<div>
								 <span>Address<label>:</label></span>
								 <input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
							<span>Credit card No<label>:</label></span>
								<input type="text"> 
							 </div>
							 	 <div class="clearfix"> </div>
							<div>
							<span>Payment Tpe<label>:</label></span>
								<div class="cards"><img src="image/cards.jpg" alt=""></div>
							 </div>
							 	 <div class="clearfix"> </div>
								 <div>
							<span>Expiry Date<label>:</label></span>
								<div class="expaire"> <select name="city">
								<option value="select your location">Month</option>
								<option value="saab">Jan</option>
								<option value="fiat">Feb</option>
								<option value="audi">March</option>
							    <option value="audi">Apr</option>
								<option value="audi">May</option>
								<option value="audi">Jun</option>
								<option value="audi">July</option>
								<option value="audi">Aug</option>
								<option value="audi">Sep</option>
							    <option value="audi">Oct</option>
							    <option value="audi">Nov</option>
								<option value="audi">Dec</option>
								</select>
								<select name="city">
								<option value="select your location">Year</option>
								<option value="saab">1994</option>
								<option value="fiat">1995</option>
								<option value="audi">1996</option>
								<option value="saab">1997</option>
								<option value="fiat">1998</option>
								<option value="audi">1999</option>
								<option value="saab">2010</option>
								<option value="fiat">2011</option>
								<option value="audi">2012</option>
								<option value="saab">2013</option>
								<option value="fiat">2014</option>
								<option value="audi">2015</option>
								</select> </div>
							 </div>
							 	 <div class="clearfix"> </div>
							<div>
								<span>City<label>:</label></span>
								 <input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
									<span>State/Territory<label>:</label></span>
						 		<select name="city">
								<option value="select your location"> States</option>
								<option value="saab">Location1</option>
								<option value="fiat">Location2</option>
								<option value="audi">Location3</option>
								</select>
								</div>
								<div class="clearfix"> </div>
					   			<div>
								 <span>Zip<label>:</label></span>
									<input type="text"> 
								</div>
								<div class="clearfix"> </div>
								<input type="submit" value="Donate">
					
							</form>
					</div>
						<div class="clearfix"> </div>
				</div>
			<div class="col-md-4 donate-left">
				<div class="login-form">
					<h3>Already have a PayPal Account</h3>
						<form>
								<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
								<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
								<div class="submit">
									<input type="submit" onclick="myFunction()" value="LOGIN" >
							</div>	
							<p><a href="#">Forgot email address or Password ?</a></p>
						</form>
					</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
	include('footer.php');
	?>
 
	