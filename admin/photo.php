
<?php
session_start();

include('db.php');
include ('header.php'); 
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
            $targetPath = "../gallery/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
mysql_query("insert into gallery(image)values('$uploadedFile')");

}
?>
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li>Gallery <span>«</span></li>
									<li><a href="photo.php">Photo Update</a><span>«</span></li>
									</ul>
							</div>
						</div>
							      	      <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"> Gallery Upload</h3>
              </div>
              <div class="panel-body">
         <form id="Contact-form" method="post" class="form-horizontal" enctype="multipart/form-data" action="photo.php">

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="file" name="file"  class="form-control" >
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


$results = "select * from gallery";
 $select = mysql_query($results);
 
?>
			  <div class="col-md-12 col-lg-12 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">Photo Upload</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th>ID</th>
															  <th>Image</th>
															  <th>Action</th>
														  </tr>
													  </thead>
													  <tbody>
														 <?php
while($row =mysql_fetch_array($select)){?> 
<tr>
<td><?php echo $row["id"]?></td>
<td><img src="../gallery/<?php echo $row["image"]?>" class="img-thumbnail" width="50" height="60"></td>
 

<td><button type="button" onClick="deleteme(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button></a>
   
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
		window.location.href='gallerydelete.php?del=' +delid+'';
		return true;
	}
	
}
</script>