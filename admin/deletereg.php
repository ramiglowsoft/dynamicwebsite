<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];
$query=mysql_query("select * FROM memberregister WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM memberregister WHERE id=$id");
unlink("memberregisterphoto/".$row['photo']);
unlink("idproofphoto/".$row['idproofphoto']);
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
header('location:memberregisterlist.php');
}
  
  ?>