<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];
$query=mysql_query("select * FROM aboutinfo WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM aboutinfo WHERE id=$id");
unlink("aboutinfo/".$row['image']);
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
header('location:aboutinfo.php');
}
  
  ?>