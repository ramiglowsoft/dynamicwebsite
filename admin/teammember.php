
<?php
session_start();

include('db.php');
include('header.php');
if(isset($_POST["submit"]))
{
$uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "../teammember/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
$name=$_POST["teammembername"];
$designation=$_POST["teammemberdesignation"];
$city=$_POST["city"];
mysql_query("insert into teammember(image,name,city,designation)values('$uploadedFile','$name','$city','$designation')");

}
?>

		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li>Home Page Update<span>«</span></li>
									<li><a href="teammember.php">Team Member Update</a><span>«</span></li>
									</ul>
							</div>
						</div>
							      <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"> Team Member Upload</h3>
              </div>
              <div class="panel-body">
         <form id="teammemberform"  method="post" class="form-horizontal" enctype="multipart/form-data" action="teammember.php"> 

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="file" name="file"  class="form-control" >
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="teammembername"  class="form-control"  placeholder="Enter teammembername"></textarea>
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="teammemberdesignation"  class="form-control"  placeholder="Enter teammemberdesignation"></textarea>
</div></div></div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="city"  class="form-control"  placeholder="Enter city"></textarea>
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


$results = "select * from teammember";
 $select = mysql_query($results);
 
?>
			  <div class="col-md-12 col-lg-12 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">Team Member</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th>ID</th>
                        <th>IMAGE</th>
						<th>TEAM MEMBER NAME</th>
						<th>TEAM MEMBER DESIGNATION</th>
						<th>ACTION</th>
														  </tr>
													  </thead>
													  <tbody>
														 <?php
while($row =mysql_fetch_array($select)){?> 
<tr>
<td><?php echo $row["id"]?></td>
        <td><img src="../teammember/<?php echo $row["image"]?>" class="img-thumbnail" width="50" height="60"></td>
        
<td><?php echo $row["name"]?></td>
<td><?php echo $row["designation"]?></td>
<td>

<button type="button" onClick="deleteme(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button>
</td><?php }?>
	  </tr>
									<!-- Modal -->
								<div id="view<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel"> View</h3>
								</div>
								<div class="modal-body">
								<form id="teammemberform"  method="post" class="form-horizontal" enctype="multipart/form-data" action="teammember.php"> 

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="file" name="file"  class="form-control" >
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="teammembername"  class="form-control"  placeholder="Enter teammembername"></textarea>
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="teammemberdesignation"  class="form-control"  placeholder="Enter teammemberdesignation"></textarea>
</div></div></div>


<div class="form-group">

<div class="col-md-12 col-md-offset-5">

<input type="submit" name="submit" class="btn btn-success"> 
</div></div>
</form>
								</div>
								<hr>
							
								</div>
								</div>				 
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
		window.location.href='teammemberdelete.php?del=' +delid+'';
		return true;
	}
	
}
</script>

