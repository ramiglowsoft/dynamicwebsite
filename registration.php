<?php

include('db.php');
include('header.php');


$query=mysql_query("select * from teammember");
$rowcount=mysql_num_rows($query);

?>


  <!--banner-->
  
  <div class="container-fluid inner_banner padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
     
	 <div class="project_text">
	 <h1 class="title_banner">MemberShip Register</h1>
	 </div>
  
  </div><!--end-->
  
  <!-- breadcrumb section -->

	<section class="bread">
      <div class="container-fluid breadcrumbnav">
	  <div class="container">
       <div class="bs-example padding_none col-lg-12 col-sm-12 col-md-12 col-xs-12">
    <ul class="breadcrumb">
        <li class="crumb_nav"><a href="index.php" class="bread_home">HOME</a></li>
        <li class=" crumb_nav active">MEMBERSHIP REGISTER</li>
    </ul>
</div>
      </div>
	  </div>
    </section><!-- end-->
	
	
	<!--banner-bottom-->
	<div class="donations">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding_none memberregister">
				<div class="donate-top">
					<h3>MemberShip Register</h3>
					<p class="statusMsg"></p>
					<form id="registration"  class="form-horizontal" action="register.php" method="post"enctype="multipart/form-data">
												    
						<div class="form-group">
						 <span>FirstName<label>:</label></span>
								<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter name.." required>
							 </div>
							 <div class="clearfix"> </div>
							 <div class="form-group">
				               <span>LastName<label>:</label></span>
								<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter lastname.." required> 
							 </div>
							 <div class="clearfix"> </div>
							 <div class="form-group">
				               <span>Father Name<label>:</label></span>
								<input type="text" name="fathername" id="fathername" class="form-control" placeholder="Enter fathername.." required> 
							 </div>
							 <div class="clearfix"> </div>
							
							 <div class="form-group">
							 	<span>Gender<label>:</label></span>
							       <select class="selectgender" id="gender" name="gender"  required>
								   <option>Gender</option>
								   <option name="gender" id="gender" value="male">Male</option>
							          <option name="gender" id="gender" value="female">Female</option>
									  <option name="gender" id="gender" value="other">Other</option>
									  </select>
							 </div>
							 	 <div class="clearfix"> </div>
							<div class="form-group">
							<span>Date Of Birth<label>:</label></span>
							<input type="date" name="date" id="date" class="form-control" placeholder="Enter Date Of Birth.." required>
								
							 </div>
							 	 <div class="clearfix"> </div>
								  <div class="form-group">
				               <span>Age<label>:</label></span>
								<input type="text" name="age" id="age" class="form-control" placeholder="Enter Age.." required> 
							 </div>
							 <div class="clearfix"> </div>
					 		<div class="form-group">
							<span>Address<label>:</label></span>
					            <input type="text"  name="address" id="address" class="form-control address" placeholder="Enter Address.." cols="2" rows="1" required></textarea>
							 </div>
							 <div class="clearfix"> </div>
							 						
							<div class="form-group">
								<span>City<label>:</label></span>
								 <input type="text" name="city" id="city" class="form-control" placeholder="Enter City.." required > 
							 </div>
							 <div class="clearfix"> </div>
							 <div class="form-group">
									<span>State/Territory<label>:</label></span>
                                  <input type="text" name="state" id="state" class="form-control" placeholder="Enter State.." required /> 
								</div>
								<div class="clearfix"> </div>
					   			<div class="form-group">
								 <span>Zip<label>:</label></span>
									<input type="text"  name="pincode" id="pincode" class="form-control" placeholder="Enter Zipcode/Pincode.."required /> 
								</div>
								<div class="clearfix"> </div>
								 
							<div class="form-group">
							<span>Qulification<label>:</label></span>
							<input type="text" name="qulification" id="qulification" class="form-control" placeholder="Enter Qulification.." required />
							 </div>
							 	 <div class="clearfix"> </div>
							 <div class="form-group">
								 <span>Blood Group<label>:</label></span>
									 <select class="selectgender" id="bloodgroup" name="bloodgroup" required />
								   <option>Blood Group</option>
								      <option name="bloodgroup" id="bloodgroup" value="A+">A+</option>
							          <option name="bloodgroup" id="bloodgroup" value="O+">O+</option>
									  <option name="bloodgroup" id="bloodgroup" value="B+">B+</option>
									  <option name="bloodgroup" id="bloodgroup" value="AB+">AB+</option>
									  <option name="bloodgroup" id="bloodgroup" value="A-">A-</option>
							          <option name="bloodgroup" id="bloodgroup" value="O-">O-</option>
									  <option name="bloodgroup" id="bloodgroup" value="B+">B-</option>
									  <option name="bloodgroup" id="bloodgroup" value="AB-">AB-</option>
									  </select>
								</div>
								<div class="form-group">
								<span>Email<label>:</label></span>
								<input type="email" name="email" id="emails" class="form-control" placeholder="Enter Email.." required />
							 </div>
							 <div class="clearfix"> </div>
								 <div class="form-group">
								 <span>Mobile Number<label>:</label></span>
									 <input type="tel" class="form-control" placeholder="Mobile Number" name="tel" id="tel" required />
								</div>
								
								<div class="form-group">
								 <span>Id Proof <label>:</label></span>
									 <select class="selectgender" id="idProof" name="idproof" required />
								   <option>Id Proof</option>
								      <option name="idproof" id="idProof" value="aadhar">Aadhar Card</option>
							           <option name="idproof" id="idProof" value="pan">Pan Card</option>
									   <option name="idproof" id="idProof" value="voter">Voter Id</option>
									   <option name="idproof" id="idProof" value="drivinglicence">Driving Licence</option>
									   <option name="idproof" id="idProof" value="passport">Passport</option>
									  </select>
								</div>
                       <div class="form-group">
								 <span>Id Proof Number<label>:</label></span>
									 <input type="text" class="form-control" placeholder="Enter idproof Number" name="idnumber" id="idnumber" required />
								</div>
								<div class="form-group">
								 <span>Id Proof Photo<label>:</label></span>
									 <input type="file" id="idphoto" name="idphoto" required />
                                      
								</div>
								<div class="form-group">
								 <span>Photo<label>:</label></span>
									 <input type="file" id="file" name="file" onchange="loadfile(event)">
								</div>
                                 <div class="form-group">
				       						<img src="image/co.png" id="previews" style="width: 160px;margin: 0 auto;text-align: center;"/></div><br>
											
									 
								<div class="button_src">
								<input type="submit" name="submit" id="submit"  class="submitBtn"  value="Register"  />
					            <input type="reset" name="reset" id="reset"  class="resetbtn"  value="Reset"  />
								</div>
							</form>
					</div>
					<div id="err"></div>
					<script src="scripts.js"></script>
						<div class="clearfix"> </div>
				</div>

			<div class="clearfix"></div>
		</div>
	</div>
	

		
		
		
		
	</div>
	
	
	
	<script type="text/javascript">
	  
	  function loadfile(event)
	  {
		  var reader = new FileReader();
		  var imagefield = document.getElementById("previews");
		  reader.onload = function(){
			  if(reader.readystate == 2)
			  {
		  imagefield.src = reader.result;
			  }
		  }
		  
		  reader.readAsDataURL(event.target.files[0]);
	  }
	
	</script>
	
	
	
	
	
	
	
	
	
	
	
	<?php
	include('footer.php');
	?>
 