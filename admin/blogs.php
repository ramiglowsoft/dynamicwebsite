<?php
include('db.php');
include ('header.php'); 
session_start();

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
            $targetPath = "../blogs/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }

$shorttitles=$_POST["shorttitles"];
$title=$_POST["headeingblog"];
$dates=$_POST["admindates"];
$abstractevents=$_POST["abstractevents"];
$contents=$_POST["contents"];
mysql_query("insert into blogs(image,shorttitle,title,date,abstractevent,content)values('$uploadedFile','$shorttitles','$title','$dates','$abstractevents','$contents')");

header('location: blogs.php');
}
?>

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
                <h3 class="panel-title"> Blogs Update</h3>
              </div>
              <div class="panel-body">
         <form id="blogs" method="post" class="form-horizontal" enctype="multipart/form-data" action="blogs.php">

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

<input type="text" name="admindates"  class="form-control"  placeholder="Enter update date"></textarea>
</div></div></div>

<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="shorttitles"  class="form-control"  placeholder="Enter heading"></textarea>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="headeingblog"  class="form-control"  placeholder="Enter Title"></textarea>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<input type="text" name="abstractevents"  class="form-control"  placeholder="Enter abstract_event"></textarea>
</div>
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture " ></i></span>

<textarea  name="contents"  class="form-control"  placeholder="Enter content"></textarea>
</div>

</div>
</div>


<div class="form-group">

<div class="col-md-12 col-md-offset-5">

<input type="submit" name="submit" class="btn btn-success"> 
</div></div>
</form>
                
                
                
              </div>
              </div>
              <?php

include('db.php');


$results = "select * from blogs";
 $select = mysql_query($results);
 
?>
			  <div class="col-md-12 col-lg-12 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">Blogs</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															   <th>ID</th>
                        <th>IMAGE</th>
						<th>TITLE</th>
						<th>DATE</th>
						<th>ACTION</th>
														  </tr>
													  </thead>
													  <tbody>
														<?php
while($row =mysql_fetch_array($select)){?> 
<tr>
<td><?php echo $row["id"]?></td>
        <td><img src="../blogs/<?php echo $row["image"]?>" class="img-thumbnail" width="50" height="60"></td>
        
<td><?php echo $row["title"]?></td>
<td><?php echo $row["date"]?></td>
      <td>	<button type="button" onClick="deleteme(<?php echo $row['id'];?>)" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button>
   
</td><?php  }?>
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
		window.location.href='blogsdelete.php?del=' +delid+'';
		return true;
	}
	
}
</script>



