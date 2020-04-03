<?php

include('db.php');

if(isset($_POST['submit']))
{
	
$name=$_POST['author'];
$email=$_POST['email'];
$comment=$_POST['content'];

mysql_query("insert into leavecomment(name,email,comment)values('$name','$email','$comment')");
	
	header('location:single.php');
}
?>





