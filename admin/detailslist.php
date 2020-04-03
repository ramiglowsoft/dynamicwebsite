<?php
include('header.php');
include('db.php');
if(isset($_POST['details']))
{

$id=$_POST["id"];
$date=$_POST["date"];
$select = mysql_query("select * from `memberregister` where `id`='$id' and `dateofbirth`='$date'");
$row =mysql_fetch_array($select);
}
?>
<div class="inner_content"style="margin-top: 6%;">

<div class="container-fluid">

<div class="boder_page">
    <h1 class="reglist"> Membership Register List</h1>
<div class="memmberdetails padding_none col-lg-12 col-md-12 col-sm-12 col-xs-12">


<div class="col-lg-12 padding_none lable">Application Id: &nbsp;&nbsp;<?php echo $row["id"]?></div>

<div class="col-lg-6 padding_none lable">FirstName: &nbsp;&nbsp;<?php echo $row["firstname"]?></div>
<div class="col-lg-6 padding_none lable">LastName: &nbsp;&nbsp;<?php echo $row["lastname"]?></div>
<div class="col-lg-6  padding_none lable">FatherName: &nbsp;&nbsp;<?php echo $row["fathername"]?></div>
<div class="col-lg-6 padding_none lable">Gender: &nbsp;&nbsp;<?php echo $row["gender"]?></div>
<div class="col-lg-6 padding_none lable">Date Of Birth: &nbsp;&nbsp;<?php echo $row["dateofbirth"]?></div>
<div class="col-lg-6padding_none lable">Age: &nbsp;&nbsp;<?php echo $row["age"]?></div>
<div class="col-lg-12 padding_none lable">Address: &nbsp;&nbsp;<?php echo $row["address"]?></div>
<div class="col-lg-4 padding_none lable">City: &nbsp;&nbsp;<?php echo $row["city"]?></div>
<div class="col-lg-4 padding_none lable">State: &nbsp;&nbsp;<?php echo $row["state"]?></div>
<div class="col-lg-4 padding_none lable">Pincode: &nbsp;&nbsp;<?php echo $row["code"]?></div>
<div class="col-lg-4 padding_none lable">Blood Group: &nbsp;&nbsp;<?php echo $row["bloodgroup"]?></div>
<div class="col-lg-4 padding_none lable">Mobile Number: &nbsp;&nbsp;<?php echo $row["contact"]?></div>
<div class="col-lg-4 padding_none lable">Email: &nbsp;&nbsp;<?php echo $row["email"]?></div>
<div class="col-lg-12 padding_none lable">Photo: &nbsp;&nbsp;<img src="memberregisterphoto/<?php echo $row["photo"]?>" width="200" height="200"></div>


</div>

</div>

</div>
</div>

<div class="padding_none col-md-12" style="margin:0 auto; text-align:center;"><a href="detailsmember.php">	<button type="button" class="btn btn-primary">
	  <i class="glyphicon glyphicon-back"></i>Back</button></a>
	  <button type="button" class="btn btn-info" onclick="myFunction()">
	 Print</button></div>
       
  <script>function myFunction(){window.print();}</script></div>