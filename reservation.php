<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Central West Hotel </title>
	<script type="text/javascript">
		var xhhtp = new XMLHttpRequest();
		xhttp.open("GET", "./reservation.php", true);

	</script>>
</head>
<body>
	<div>
		<div style="height: 500px">
			<img style="height:500px" src="./logo.png">
		</div>
		<div>
			<?php
				$from = $_GET["from"];
				$to = $_GET["to"];
				$adults = $_GET["adults"];
				$children = $_GET["children"];
				echo "<form action=\"reservation.php\"><br><table>";
				echo "<tr><td>Check-in date </td> <td><input type=\"text\" name=\"from_new\" value=\"$from\"></td></tr>";
				echo "<tr><td>Check-out date </td> <td><input type=\"text\" name=\"to_new\" value=\"$to\"></td></tr>";
				echo "<tr><td>Adults </td> <td><input type=\"text\" name=\"adults_new\" value=\"$adults\"></td></tr>";
				echo "<tr><td>Children </td> <td><input type=\"text\" name=\"children_new\" value=\"$children\"></td></tr>";
				echo "<tr><td>Name </td> <td><input type=\"text\" name=\"cname\"></td></tr>";
				echo "<tr><td>Phone </td> <td><input type=\"text\" name=\"phone\"></td></tr>";
				echo "<tr><td>Email </td> <td><input type=\"text\" name=\"email\"></td></tr>";
				echo "</table>";
			?>
			<p id="demo"></p>
			<script>
				document.getElementByID('demo').innerHTML = document.getElementsByTagName('adults');
			</script>
		</div>
	</div>	
</body>
</html>
