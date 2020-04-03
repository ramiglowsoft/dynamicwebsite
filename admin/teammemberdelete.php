<?php
 


include('db.php');

if(isset($_GET['del']))
{
$id = $_GET['del'];

$query=mysql_query("select * FROM teammember WHERE id=$id");
$row=mysql_fetch_array($query);
mysql_query("DELETE FROM teammember WHERE id=$id");
unlink("../teammember/".$row['image']);

header('location: teammember.php');
}
  
  ?>