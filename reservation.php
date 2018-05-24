<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta Access-Control-Allow-Origin: *>
	<title>Central West Hotel </title>
	<script type="text/javascript">
		function send() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
      				document.getElementById("demo").innerHTML = this.responseText;
    			}
    		};
			var msg = "Reservation from website: \nCheck-in date: " + document.getElementById("from_new").value + "\nCheck-out date: " + document.getElementById("to_new").value + "\nAdults: " + document.getElementById("adults_new").value + "\nChildren: " + document.getElementById("children_new").value + "\nName: " + document.getElementById("cname").value + "\nPhone: " + document.getElementById("phone").value + "\nE-mail: " + document.getElementById("email").value;
			//var par = "?" + "from=" + document.getElementById('from_new').value.replace("/", "%2F") + "&to=" + document.getElementById("to_new").value.replace("/", "%2F") + "&adults=" + document.getElementById("adults_new").value + "&children=" + document.getElementById("children_new") + "&name=" + document.getElementById("cname").replace(" ", "%32") + "&email=" + document.getElementById("email") + "&phone=" + document.getElementById("phone");
			xhttp.open("GET", "http://ifko42.info/sami/send_mail.php?msg=" + msg.replace("/", "%2F"), true);
			xhttp.send();
		}

	</script>
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
				echo "<tr><td><button type=\"button\" onclick=\"send()\">Send</td></tr>";
				echo "</table></form>";
			?>
		</div>
	</div>
	<p id="demo"></p>
</body>
</html>
