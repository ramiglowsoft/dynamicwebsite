<?php
session_start();
include ('db.php');
include ('header.php');
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
									<li><a href="dashboard.php">Dashboard</a><span>«</span></li>
									
									</ul>
							</div>
						</div>
						
						
			  <?php

include('db.php');


$results = "select * from memberregister ORDER BY id DESC LIMIT 10";
 $select = mysql_query($results);
 
?>
 <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users Register</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined Date & Time</th>
                      </tr>
					   <?php
while($row =mysql_fetch_array($select)){?> 
                      <tr>
                        <td><?php echo $row["firstname"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["register_date"]?></td><?php }?>
                      </tr>
                     
                    </table>
                </div>
              </div>
					


			
			
			
			  <?php

include('db.php');


$results = "select * from subscriber ORDER BY id DESC LIMIT 10";
 $select = mysql_query($results);
 
?>
 <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"> Subsuriber List</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Date & Time</th>
                      </tr>
					   <?php
while($row =mysql_fetch_array($select)){?> 
                      <tr>
                        <td><?php echo $row["id"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["subscriberdate"]?></td><?php }?>
                      </tr>
                     
                    </table>
                </div>
              </div>
					

						</div>									</div>			


<?php
}
else
{
header('location:index.php');
}?>