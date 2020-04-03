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
            $targetPath = "aboutinfo/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
$com=$_POST["heading"];
$comment=$_POST["content"];
$contents=$_POST["contents"];
mysql_query("insert into aboutinfo (image,heading,content,contents)values('$uploadedFile','$com','$comment','$contents')");
}
?>

		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li>About Page<span>«</span></li>
									<li><a href="aboutinfo.php">Info</a><span>«</span></li>
									</ul>
							</div>
						</div>
						
						              <div class="panel-body">
               <form id="Contact-form" method="post" class="form-horizontal" enctype="multipart/form-data" action="aboutinfo.php">

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

<textarea name="heading"  class="form-control"  placeholder="Enter heading"></textarea>
</div></div></div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<textarea name="content"  class="form-control"  placeholder="Enter content1"></textarea>
</div></div></div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<textarea name="contents"  class="form-control"  placeholder="Enter content2"></textarea>
</div></div></div>
<div class="form-group">

<div class="col-md-12 col-md-offset-5">

<input type="submit" name="submit" class="btn btn-success"> 
</div></div>
</form> 
                
                
               <?php

include('db.php');


$results = "select * from aboutinfo";
 $select = mysql_query($results);
 
?>
 <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">About Info</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
						<th>Heading</th>
						<th>Content</th>
                        <th>Action</th>
                      </tr>
                      </thead>
    <tbody>

	  <?php
while($row =mysql_fetch_array($select)){?> 
<tr>
<td> <?php echo $row["id"]?></td>
        <td><img src="aboutinfo/<?php echo $row["image"]?>" class="img-thumbnail" width="50" height="60"></td>
<td> <?php echo $row["heading"]?></td>
<td> <?php echo $row["content"]?></td>
<td><button type="button" onClick="deleteme(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button></td><?php }?>
	  </tr>
	  
    </tbody>
  </table>
                </div>
              </div>
          </div>
        </div>
      </div>  
              </div>

						</div>			
			
<script type="text/javascript">

function deleteme(delid)
{
	if(confirm("Do you want Delete!"))
	{
		window.location.href='infodelete.php?del=' +delid+'';
		return true;
	}
	
}
</script>

