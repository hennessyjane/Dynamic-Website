<html>

<?php
require("m_index.html");
?>

<form method="POST" action="m_searchbrand.php">
<br><br><br>
<br><br><br>
Search for makeup:<br><br><br> 
Brand Name*: <input type="text" name="brand"><br><br>
<input type="submit" value="Search">
</form>
<form method="POST" action="m_searchtype.php">
<br><br>
Type of Product: <br><br>
<input type="radio" name="type" value="foundation">Foundation
<input type="radio" name="type" value="concealer">Concealer 
<input type="radio" name="type" value="powder">Powder <br><br>
<input type="radio" name="type" value="blush">Blush
<input type="radio" name="type" value="contour">Contour
<input type="radio" name="type" value="lipstick">Lip Color<br><br>
<input type="submit" value="Search">
</form>
</html>