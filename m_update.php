<html>

<?php
require("m_index.html");
//include_once("m_connect.php");

$username = $_POST['name'];
$password = $_POST['password'];

$link = mysqli_connect("localhost", $username , $password, "makeup1");

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

<form method="POST" action="m_update2.php">
<br><br><br>
<br><br><br>

Product Name: <input type="text" name="name">
<br><br>
Price: <input type="number" name="price">
<br><br>
<input type="submit" value="Update">
</form>


</html>
