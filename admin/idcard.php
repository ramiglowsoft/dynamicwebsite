<?php
include('db.php');
include ('header.php'); 
session_start();

if(isset($_GET['idcard']))
{
$id=$_GET['idcard'];

$select = mysql_query("SELECT * FROM memberregister WHERE id='$id'");

$row=mysql_fetch_array($select);


?>
<html>
<head>
<style>
.idcardtemplate .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 302px;
    margin: auto;
    text-align: center;
    font-family: arial;
    height: 404px;
    border-radius: 30px;
}
</style>
</head>
<body>
<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->



       
	 <div class="padding_none col-md-9">   <h2 style="text-align:center"> MemberShip Card</h2></div>
	   
	   
	   
	   
	   
	   
	   
	   <div class=" cardsid padding_none col-md-6">
            <!-- Website Overview -->
      		  
	  


 

<div class="card" style="background-image:url(image/back.jpg);">
<div class="head"><h1>LOVE TRUST</h1>
<p class="ship">MemberShip Card</p> </div>
 <img src="memberregisterphoto/<?php echo $row["photo"]?>" class="img-circle" width="120" height="120">
  <h3 class="names"><?php echo $row["firstname"]?> <?php echo $row["lastname"]?></h3>
  <table class="tanl"> <tr><td><p class="gr">Gender:</p></td><td><p class="det"> <?php echo $row["gender"]?></p></td></tr>
   <tr><td><p class="gr">Blood group:</p></td><td><p class="det"> <?php echo $row["bloodgroup"]?></p></td></tr>
   <tr><td><p class="gr">Email:</p></td> <td><p class="deti"><?php echo $row["email"]?></p></td></tr>
   </table>
  
 
</div>

</div>
<div class=" cardsid padding_none col-md-6">
            <!-- Website Overview -->
                  
  
			  
	  


 

<div class="card" style="background-image:url(image/back.jpg);">
<div class="qrcode">
 <img src="image/qrcode.png" class="img-responsive code" width="100" height="100">
 </div>
  <table class="tanl"> 
   <tr><td><p class="gr">City:</p></td> <td><p class="det"><?php echo $row["city"]?></p></td></tr>
 <tr><td> <p class="gr">State:</p></td><td><p class="det"> <?php echo $row["state"]?></p></td></tr>
  <tr><td> <p class="gr">Contant: </p></td><td><p class="det"><?php echo $row["contact"]?></p></td></tr>
  <tr><td> <p class="gr">Address: </p></td><td><p class="det"><?php echo $row["address"]?></p></td></tr>
   </table>

 
</div>
<?php 
}
?>
</div>


</div>

<div class="padding_none col-md-3"><a href="memberregisterlist.php">	<button type="button" class="btn btn-primary">
	  <i class="glyphicon glyphicon-back"></i>Back</button></a>
	  <button type="button" class="btn btn-info" onclick="myFunction()">
	 Print</button></div>
       
  <script>function myFunction(){window.print();}</script></div>
</body>
</html>
								