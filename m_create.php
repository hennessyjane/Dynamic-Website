<html>
<?php
require("m_index.html");
?>

<form method="POST" action="m_create2.php">
<br><br><br>
<br><br><br>
Brand Name: <input type="text" name="brand">
<br><br>
Product Name: <input type="text" name="name">
<br><br>
Type of Product: <br><br>
<input type="radio" name="type" value="foundation">Foundation
<input type="radio" name="type" value="concealer">Concealer 
<input type="radio" name="type" value="powder">Powder <br><br>
<input type="radio" name="type" value="blush">Blush
<input type="radio" name="type" value="contour">Contour
<input type="radio" name="type" value="lipstick">Lip Color<br><br>
Shade or Color Name: <input type="text" name="shade"><br><br>
Price: <input type="number" name="price">
<br><br>
<input type="submit" value="Submit">

</form>
</html>