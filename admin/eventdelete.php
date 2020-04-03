<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];
$query=mysql_query("select * FROM eventupdate WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM eventupdate WHERE id=$id");

if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
header('location:upcomingevent.php');
}
  
  ?>