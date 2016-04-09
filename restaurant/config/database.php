<?php
$site_title='HOME';
$page_title='HOME';


$servername = "localhost";
$username = "root";
$password = "";
$database="restaurant";

// Create connection
if(!@mysql_connect($servername, $username, $password) || !@mysql_select_db($database) ){
die('could not connect');	
}
	
		include('config/functions.php');
?>