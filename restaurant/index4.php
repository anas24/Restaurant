<?php
require 'database.php';
if(isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['cpwd']) )
{
$uname=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
if(!empty($uname)&&!empty($email)&&!empty($pwd)&&!empty($cpwd))
{
	
}
else{
	echo 'enter all the details';
}
if($pwd==$cpwd)
{
	$name=mysql_escape_string($_POST['uname']);
	$email=mysql_escape_string($_POST['email']);
	$pwd=mysql_escape_string($_POST['pwd']);
	mysql_query("INSERT INTO `signup` (`uname`,`email',`password`)VALUES(`$name`,`$email`,`$pwd`");
}
else
{
	echo 'passwords not match!!';
}
	
}
?>