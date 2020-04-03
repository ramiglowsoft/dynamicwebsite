<?php
include('db.php');
include ('header.php'); 
session_start();
if($_SESSION["email"])
{
if(isset($_GET['edit']))
{
$id=$_GET['edit'];

$select = mysql_query("SELECT * FROM memberregister WHERE id='$id'");

$row=mysql_fetch_array($select);

}
?>
<body>
<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									
									<li><a href="memberregisterlist.php">Memberregister List</a></li>
									</ul>
							</div>
						</div>

<div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"> Edit Registration List</h3>
                </div>
                <div class="panel-body">
				 
   
            <form id="registration-form" method="post" class="form-horizontal" action="updatereg.php">

<input type="text" name="id" id="id" class="hidden" value="<?php echo $row['id'];?>">

<div class="form-group">
<label class="col-md-4 control-label" for="name"> First Name :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="firstname" id="name" class="form-control" value="<?php echo $row['firstname'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="fname">Last Name :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $row['lastname'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="fname">Father Name :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="fathername" id="fathername" class="form-control" value="<?php echo $row['fathername'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="email"> Email id :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope " ></i></span>

<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
</div></div></div>
<div class="form-group">
<label class="col-md-4 control-label" for="address"> Address :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home " ></i></span>

<textarea  name="address" class="form-control" cols="2" rows="1"><?php echo $row['address'];?></textarea>
</div></div></div>

<div class ="form-group">
<label class="col-md-4 control-label" for="gender">Gender :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="gender" id="gender" class="form-control" value="<?php echo $row['gender'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="qulification"> Qulification :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt " ></i></span>

<input type="text" name="qulification" id="qulification" class="form-control" value="<?php echo $row['qulification'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="date"> Date Of Birth :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar " ></i></span>

<input type="date" name="date" id="date" class="form-control" value="<?php echo $row['dateofbirth'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="fname">Age:</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="age" id="age" class="form-control" value="<?php echo $row['age'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="occupation"> City :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt " ></i></span>

<input type="text" name="city" id="occupation" class="form-control" value="<?php echo $row['city'];?>">
</div></div></div>
<div class="form-group">
<label class="col-md-4 control-label" for="occupation"> State :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt " ></i></span>

<input type="text" name="state" id="state" class="form-control" value="<?php echo $row['state'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="occupation"> Zip Code :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt " ></i></span>

<input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $row['code'];?>">
</div></div></div>

<div class="form-group">
<label class="col-md-4 control-label" for="blood"> Blood Group :</label>
<div class="col-md-6">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-plus " ></i></span>

<input type="text" name="blood" id="blood" class="form-control" value="<?php echo $row['bloodgroup'];?>">
</div></div></div>


<div class="form-group">
<label class="col-md-4 control-label" for="tel"> Mobile Number :</label>
<div class="col-md-6">

<div class="input-group">

		<span class="input-group-addon"><i class="glyphicon glyphicon-phone " ></i></span>

        
        <input type="tel" class="form-control" value="<?php echo $row['contact'];?>" name="tel">
       
</div>        </div></div>

<div class ="from-group">
<label class="col-md-4 control-label" for="Status"> Id Proof :</label>
<div class="col-md-6 ">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="idproof" id="status" class="form-control" value="<?php echo $row['idproof'];?>">
</div></div></div>

<div class ="from-group">
<label class="col-md-4 control-label" for="Status"> Id Proof Number :</label>
<div class="col-md-6 ">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user " ></i></span>

<input type="text" name="idnumber" id="status" class="form-control" value="<?php echo $row['idproofnumber'];?>">
</div></div></div>
<div class="col-md-12 col-lg-12">
<img src="memberregisterphoto/<?php echo $row['photo'];?>" class="img-responsive" width="100" height="100" style="margin: 0 auto;">
</div>
								<div class="form-group">
			
		<label class="col-md-4 control-label" for="Status"> Photo:</label>
							<div class="col-md-6 ">		 <input type="file" id="file" name="file"  /></div>
								</div>
																<div class="form-group">
			
		<label class="col-md-4 control-label" for="Status">Id Proof Photo:</label>
							<div class="col-md-6 ">		 <input type="file" id="idphoto" name="idphoto"  /></div>
								</div>
								<div class="col-md-12 col-lg-12">
<img src="idproofphoto/<?php echo $row['idproofphoto'];?>" class="img-responsive" width="100" height="100" style="margin: 0 auto;">
</div>
								
								
								

<br><br>





<hr>

<div class="form-group">

<div class="col-md-12 col-md-offset-4 ">

<input type="submit" name="submit" id="submit" class="btn btn-success">
<input type="reset" name="reset" id="reset" class="btn btn-danger"> 


</div>

</div>
</form>
<?php }?>
</div>
</div>
</div>
</body>
</html>
								