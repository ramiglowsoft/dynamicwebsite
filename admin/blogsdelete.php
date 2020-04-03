<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];

$query=mysql_query("select * FROM blogs WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM blogs WHERE id=$id");
unlink("../blogs/".$row['image']);

header('location: blogs.php');
}
  
  ?>