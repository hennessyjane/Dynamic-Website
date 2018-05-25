<?php

include_once("m_connect.php");
require("m_index.html");

$brand = $_POST['brand'];
$name = $_POST['name'];
$type = $_POST['type'];
$shade = $_POST['shade'];
$price = $_POST['price'];

print "<br><br><br><br><br><br>";

print "<br>One record successfully added.";
$query = "INSERT INTO makeup_collection1 (brand, name, product_type, shade, price) VALUES ('$brand', '$name' , '$type' , '$shade', '$price')";

mysqli_query($link, $query);

//Retrieve record
$query = ("SELECT * FROM makeup_collection1");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);

print "<br>There are $num_rows items in your collection. ";
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