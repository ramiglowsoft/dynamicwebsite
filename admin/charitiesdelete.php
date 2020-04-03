<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];
$query=mysql_query("select * FROM charities WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM charities WHERE id=$id");

if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
header('location:aboutcharities.php');
}
  
  ?>