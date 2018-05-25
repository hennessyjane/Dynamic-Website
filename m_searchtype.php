<?php

include_once("m_connect.php");
require("m_index.html");

$type = $_POST['type'];

//Retrieve record
$query = ("SELECT * FROM makeup_collection1 WHERE product_type = \"$type\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);

print "<br><br><br><br><br><br>";

print "<br>There are $num_rows items in your collection that matches your search criteria. ";
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