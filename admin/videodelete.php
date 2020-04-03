<?php
 


include('db.php');

if(isset($_GET['videodel']))
{
$id = $_GET['videodel'];

$query=mysql_query("select * FROM video WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM video WHERE id=$id");
unlink("video/".$row['image']);

header('location: video.php');
}
  
  ?>