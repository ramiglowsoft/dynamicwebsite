<?php
include('db.php');
include ('header.php'); 
session_start();

if(isset($_POST["submit"]))
{


$eventname=$_POST["eventname"];
$date=$_POST["eventdate"];
$month=$_POST["monthname"];
$eventday=$_POST["dayname"];
$time=$_POST["timeevent"];
mysql_query("insert into eventupdate(eventname,date,month,day,time)values('$eventname','$date','$month','$eventday','$time')");

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
									
									<li><a href="blogs.php">Blogs Update</a><span>«</span></li>
									</ul>
							</div>
						</div>
							     <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"> Event Upload</h3>
              </div>
              <div class="panel-body">
         <form id="Contact-form" method="post" class="form-horizontal" enctype="multipart/form-data" action="eventupdate.php">



<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="eventname"  class="form-control"  placeholder="Enter eventname"></textarea>
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="eventdate"  class="form-control"  placeholder="Enter eventdate"></textarea>
</div></div></div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="monthname"  class="form-control"  placeholder="Enter monthname"></textarea>
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="dayname"  class="form-control"  placeholder="Enter dayname"></textarea>
</div></div></div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="timeevent"  class="form-control"  placeholder="Enter timeevent"></textarea>
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


$results = "select * from eventupdate";
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
                        <th>EVENT NAME</th>
						<th>EVENT DATE</th>
						<th>EVENT MONTH</th>
						<th>EVENT DAY</th>
						<th>EVENT TIME</th>
						<th>ACTION</th>
														  </tr>
													  </thead>
													  <tbody>
														<?php
while($row =mysql_fetch_array($select)){?> 
<tr>
<td><?php echo $row["id"]?></td>
        
<td><?php echo $row["eventname"]?></td>
<td><?php echo $row["date"]?></td>
<td><?php echo $row["month"]?></td>
<td><?php echo $row["day"]?></td>
<td><?php echo $row["time"]?></td>
<td><button type="button" onClick="deleteme(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button>  
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
		window.location.href='eventdelete.php?del=' +delid+'';
		return true;
	}
	
}
</script>


</body>

</html>
