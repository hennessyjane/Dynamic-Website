<?php

include_once("m_connect.php");
require("m_index.html");

print "<br><br><br><br><br><br>";

$name = $_POST['name'];
$price = $_POST['price'];

$query = "UPDATE makeup_collection1 set price = \"$price\" WHERE name = \"$name\"";

mysqli_query($link, $query);

$query = ("SELECT * FROM makeup_collection1 WHERE name = \"$name\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);

print "<br> $num_rows records were updated. ";
print "<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row( $result) ) {
print"<tr>\n";
foreach ( $a_row as $field ) {
print "\t<td>".$field."</td>\n";	
}

print "</tr>\n";
}
print "</table>\n";
?>