<?php

include_once("m_connect.php");
require("m_index.html");

$shade = $_POST['shade'];

$query = "DELETE FROM makeup_collection1 WHERE shade = \"$shade\"";

print "<br><br><br><br><br><br>";

print "$shade has been successfully deleted.";
mysqli_query($link, $query);

?>