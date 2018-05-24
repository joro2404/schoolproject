<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Central West Hotel </title>
	<script type="text/javascript">
		function submit() {
			var xhhtp = new XMLHttpRequest();
			var par = "?" + 
			//xhttp.open("GET", "./reservation.php", true);
		}

	</script>>
</head>
<body>
	<div style="clear:both">
		<div style="height: 300px; float:left">
			<img style="height:300px" src="./logo.png">
		</div>
		<div style="margin-left:750px">
			<?php
				$from = $_GET["from"];
				$to = $_GET["to"];
				$adults = $_GET["adults"];
				$children = $_GET["children"];
				echo "<form action=\"reservation.php\"><br><table>";
				echo "<tr><td>Check-in date </td> <td><input type=\"text\" id=\"from_new\" value=\"$from\"></td></tr>";
				echo "<tr><td>Check-out date </td> <td><input type=\"text\" id=\"to_new\" value=\"$to\"></td></tr>";
				echo "<tr><td>Adults </td> <td><input type=\"text\" id=\"adults_new\" value=\"$adults\"></td></tr>";
				echo "<tr><td>Children </td> <td><input type=\"text\" id=\"children_new\" value=\"$children\"></td></tr>";
				echo "<tr><td>Name </td> <td><input type=\"text\" id=\"cname\"></td></tr>";
				echo "<tr><td>Phone </td> <td><input type=\"text\" id=\"phone\"></td></tr>";
				echo "<tr><td>Email </td> <td><input type=\"text\" id=\"email\"></td></tr>";
				echo "<tr><td><button type=\"submit\" onclick=\"submit()\">Send</td></tr>";
				echo "</table></form>";
			?>
		</div>
	</div>	
</body>
</html>
