<?php
include('db.php');
include ('header.php'); 
session_start();

if(isset($_POST["submit"]))
{
$content1=$_POST["content1"];
$content2=$_POST["content2"];
$content3=$_POST["content3"];

mysql_query("insert into support(content1,content2,content3)values('$content1','$content2','$content3')");
header('location:support.php');
}

?>

<html>
<head>
</head>
<body>
<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li>About Page<span>«</span></li>
									<li><a href="support.php">Support Update</a><span>«</span></li>
									</ul>
							</div>
						</div>
							     <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"> Support Upload</h3>
              </div>
              <div class="panel-body">
         <form id="Contact-form" method="post" class="form-horizontal" enctype="multipart/form-data" action="support.php">



<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="content1"  class="form-control"  placeholder="Enter abouttrust1 "></textarea>
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="content2"  class="form-control"  placeholder="Enter abouttrust2"></textarea>
</div></div></div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="content3"  class="form-control"  placeholder="Enter abouttrust3"></textarea>
</div></div></div>

<div class="form-group">

<div class="col-md-12 col-md-offset-5">

<input type="submit" name="submit" class="btn btn-success"> 
</div></div>
</form>
                
                
                
              </div>
              </div>
              <?php

include('db.php');


$results = "select * from support";
 $select = mysql_query($results);
 
?>
			  <div class="col-md-12 col-lg-12 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">Upcoming Event List</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															   <th>ID</th>
                        <th>Section 1</th>
						<th>Section 2</th>
						<th>Section 3</th>
						
						<th>ACTION</th>
														  </tr>
													  </thead>
													  <tbody>
														<?php
while($row =mysql_fetch_array($select)){?> 
<tr>
<td><?php echo $row["id"]?></td>
        
<td><?php echo $row["content1"]?></td>
<td><?php echo $row["content2"]?></td>
<td><?php echo $row["content3"]?></td>

 <td> 

		<button type="button" onClick="deleteme(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button></a>
   
</td><?php }?>
	  </tr>
													 
												  </tbody>
											  </table>
											</div>
										</div>											
								</div>
            
						</div>		



<script type="text/javascript">

function deleteme(delid)
{
	if(confirm("Do you want Delete!"))
	{
		window.location.href='supportdelete.php?del=' +delid+'';
		return true;
	}
	
}

</script>




</body>

</html>
