<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];

$query=mysql_query("select * FROM slider WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM slider WHERE id=$id");
unlink("../sliderimage/".$row['image']);

header('location: slider.php');
}
  
  ?>