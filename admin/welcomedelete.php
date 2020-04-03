<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];
$query=mysql_query("select * FROM welcome WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM welcome WHERE id=$id");
unlink("welcomesection/".$row['image']);
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
header('location:homewelcome.php');
}
  
  ?>