
<?php
include("header.php");
session_start();
if($_SESSION["email"])
{
?>

		
		<!-- /inner_content-->
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
							      	      <div class="col-md-12" align="right">
                     <form method="post" action="printpdf.php">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
              <?php

include('db.php');


$results = "select * from memberregister ORDER BY firstname ASC LIMIT 10";
 $select = mysql_query($results);
 
?>
			  <div class="col-md-12 col-lg-12 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two">User Registration List</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th>Avatar</th>
					 <th>Name</th>
              	   <th>Gender</th>
			      <th>Address</th>
				  <th>Mobile</th>
				  <th>Email</th>
                  <th>Action</th>
														  </tr>
													  </thead>
													  <tbody>
														<?php
while($row =mysql_fetch_array($select)){?> 
<tr>
        <td><img src="memberregisterphoto/<?php echo $row["photo"]?>" class="img-responsive" width="100" height="100"></td>
        <td><?php echo $row["firstname"]?></td>
        <td><?php echo $row["gender"]?></td>
		<td><?php echo $row["address"]?></td>
		<td><?php echo $row["contact"]?></td>
		<td><?php echo $row["email"]?></td>



      <td> 

	<a href="edit.php?edit=<?php echo $row['id'];?>">		<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-upload"></i>Edit</button></a>
	
 		<button type="button" onClick="deleteme(<?php echo $row['id'];?>)"  class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</button>
   <a href="idcard.php?idcard=<?php echo $row['id'];?>">		<button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-picture"></i>ID Card</button></a>
    <a href="form.php?form=<?php echo $row['id'];?>">		<button type="button" class="btn btn-info"><i class="glyphicon glyphicon-picture"></i>FORM</button></a>
</td><?php }?>
	  </tr>
													 
												  </tbody>
											  </table>
											</div>
											<?php
}
else
{
header('location:login.php');
}?>
										</div>											
								</div>
            
						</div>			
			
