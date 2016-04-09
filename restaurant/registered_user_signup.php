<!DOCTYPE html>
<html>
	<head>
		<title> Signup</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<body>
<h1 class="text-center" style="border:2px black solid;padding:2px"> SIGN UP </h1>
<form action="registered_user_signup.php" method="POST">
<div style="width:200px;padding:5px;text-align:center;margin:0px auto">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" name="uname"><br>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email"><br>
  </div><br>
  <div class="form-group" style="margin:0px auto">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd"><br>
  </div><br>
  <br>
  <div class="form-group" style="padding-top:0px;margin:0px auto">
    <label for="cpwd"> Confirm Password:</label>
    <input type="password" class="form-control" name="cpwd"><br>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <?php
include('config/database.php'); 
if(isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['cpwd']) )
{
$uname=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
if(!empty($uname)&&!empty($email)&&!empty($pwd)&&!empty($cpwd))
{
	//echo 'dhv';
}
else{
	echo 'enter all the details';
}
if($pwd==$cpwd)
{
	$name=$_POST['uname'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	if(mysql_query("INSERT INTO `registereduser` (`name`,`email`,`password`)VALUES('$name','$email','$pwd');"))
		echo 'you have signed up successfully now you can login';
	else
		echo 'amir1';
}
else
{
	echo 'passwords not match!!';
}
	
}

	
?>
  
  
  </div>
  </form>
<body>
</html>
