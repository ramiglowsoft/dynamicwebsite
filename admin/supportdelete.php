<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];
$query=mysql_query("select * FROM support WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM support WHERE id=$id");

if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
header('location:support.php');
}
  
  ?>