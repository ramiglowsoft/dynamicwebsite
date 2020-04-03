<?php
include('db.php');
include ('header.php');
session_start();

if(isset($_GET['form']))
{
$id=$_GET['form'];

$select = mysql_query("SELECT * FROM memberregister WHERE id='$id'");

$row=mysql_fetch_array($select);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
  <style>
  .container.forms_id {
    border: 2px solid;
}
 h1.titles {
    font-size: 46px;
    border-bottom: 1px solid;
    margin-bottom: 0;
    padding-bottom: 10px;
}
p.contents {
    font-size: 27px;
    text-transform: uppercase;
    margin: 30px;
}
.header {
    text-align: center;
}
.formstable {
    margin: 0 auto;
    text-align: left;
}
  td.hd_label {
    font-size: 22px;
    height: 52px;
    width: 382px;
}
td.fill_lables {
    font-size: 17px;
    width: 400px;
    height: 50px;
}
.profile{text-align: center;
    
}
p.delcontent {
    font-size: 17px;
    max-width: 1130px;
    text-align: center;
    margin: 0 auto;
}
.sign {
    width: 100%;
    margin: 35px auto;
    text-align: center;
    font-size: 20px;padding-top: 50px;
}
.delcationcontent {
    margin: 0 auto;
    text-align: center;
}

p.places {
    text-align: left;
    margin-left: 61px;
}
p.dates {
    text-align: left;
}

h3.delca {
    text-align: left;
    margin-left: 65px;
}
.buttons {
    margin: 20px;
    text-align: center;
}
  </style>
  </head>
  <body>
  <div class="inner_content">
  <div class="container forms_id">
  
      <div class="header">
	  <h1 class="titles">LOVE TRUST</h1>
	  <p class="contents"> Application  FOrm</p>
	  </div>
  
  <table class="formstable">
     
	 <tr> <td class="hd_label">First Name:</td><td class="fill_lables"><?php echo $row["firstname"]?></td></tr><tr> <td class="hd_label"> Last Name:</td><td class="fill_lables"><?php echo $row["lastname"]?></td></tr>
	 <tr><td class="hd_label">Photo:</td><td><img src="memberregisterphoto/<?php echo $row["photo"]?>" class="img-responsive profile" width="100" height="100"></td></tr>
      <tr> <td class="hd_label">Father Name:</td><td class="fill_lables"><?php echo $row["fathername"]?></td></tr>
   <tr> <td class="hd_label">Address:</td><td class="fill_lables"><?php echo $row["address"]?></td></tr>
  <tr> <td class="hd_label">Date Of Birth:</td><td class="fill_lables"><?php echo $row["dateofbirth"]?></td></tr>
  <tr> <td class="hd_label">Age:</td><td class="fill_lables"><?php echo $row["age"]?></td></tr><tr> 
   <tr> <td class="hd_label">Gender:</td><td class="fill_lables"><?php echo $row["gender"]?></td></tr>
  <tr> <td class="hd_label">Blood Group:</td><td class="fill_lables"><?php echo $row["bloodgroup"]?></td></tr>
  <tr> <td class="hd_label">Mobile Number:</td><td class="fill_lables"><?php echo $row["contact"]?></td></tr>
  <tr> <td class="hd_label">Email Id:</td><td class="fill_lables"><?php echo $row["email"]?></td></tr>
  </table>
  
  
  
  
  
  
<?php
}
?>
  
  <div class="delcationcontent">
     <h3 class="delca"> Declaration</h3>  
  <p class="delcontent">I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and
  I undertake to inform you of any changes therein, immediately.</p>
  </div>
  
  <div class="sign">
    
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 padding_none place"> <p class="places">Place:</p></div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 padding_none Date"><p class="dates">Date:</p></div>
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 padding_none applicant"><p class="signature">SIGNATURE</p></div>
  </div>
  
  
  </div>
  </div>
  <div class="buttons">
  <a href="reg.php">	<button type="button" class="btn btn-primary">
	  <i class="glyphicon glyphicon-back"></i>Back</button></a>
       
  	<button type="button" class="btn btn-info" onclick="myFunction()">
	 Print</button></div>
       
  <script>function myFunction(){window.print();}</script>
  
  </body>
  </html>