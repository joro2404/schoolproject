<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Central West Hotel </title>
</head>
<body>
	<img src="./logo.png">
	<?php
		$from = $_GET["from"];
		$to = $_GET["to"];
		$adults = $_GET["adults"];
		$children = $_GET["children"];
		echo "<table>";
		echo "<tr><td>Check-in date </td> <td><input type=\"text\" name=\"from_new\" value=\"$from\"></td></tr>";
		echo "<tr><td>Check-out date </td> <td><input type=\"text\" name=\"to_new\" value=\"$to\"></td></tr>";
		echo "<tr><td>Adults </td> <td><input type=\"text\" name=\"adults_new\" value=\"$adults\"></td></tr>";
		echo "Check-in date <input type=\"text\" name=\"children_new\" value=\"$children\">";
		echo "Name<input type=\"text\" name=\"cname\">";
		echo "Phone<input type=\"text\" name=\"phone\">";
		echo "Email<input type=\"text\" name=\"email\">";
	?>
</body>
</html>
