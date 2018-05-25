<?php
//$username = $_POST['name'];
//$password = $_POST['password'];

$link = mysqli_connect("localhost", "root" , "", "makeup1");

if ($link){
	
	print "You are connected to MySQL server.";
	
}
else {
	print "Connection failed. Try again";
}

$db = mysqli_select_db($link, "makeup1"); 

if ($db) {
	print "You're connected to a database";
}
else {
	print "Couldn't open the database.";
}
	
?>