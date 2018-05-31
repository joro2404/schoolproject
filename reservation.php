<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta Access-Control-Allow-Origin: *>
	<title>Central West Hotel </title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript">
		function send() {
		//	document.getElementById("butt").disabled = true;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					alert("Successfully sent");
    			}
    		};
    		var date1 = document.getElementById("from_new").value, date2 = document.getElementById("to_new").value, adults = document.getElementById("adults_new").value;
    		var children = document.getElementById("children_new").value, name = document.getElementById("cname").value, phone = document.getElementById("phone").value;
			var msg = "Reservation from website: ESCnCheck-in date: " + date1 + "ESCnCheck-out date: " + date2 + "ESCnAdults: " + adults + "ESCnChildren: " + children + "ESCnName: " + name + "ESCnPhone: " + phone + "ESCnE-mail: " + document.getElementById("email").value;
			xhttp.open("GET", "http://ifko42.info/sami/send_mail.php?msg=" + msg.replace("/", "%2F"), true);
			xhttp.send();
		}
	</script>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	
</head>
<body>
<!--	<div class="colorlib-loader"></div>-->

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p class="site">www.centralwesthotel.com</p>
						</div> 
						<div class="col-xs-8 text-right">
							<p class="num">Call: +359885747606</p>
							<p class="num">e-mail : contact@centralwesthotel.com</p>
							<ul class="colorlib-social">
								<li><a href="https://youtube.com/" target="_blank"><i class="icon-youtube"></i></a></li>
								<li><a href="https://www.facebook.com/" target = "_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/?hl=bg" target = "_blank"><i class="icon-instagram"></i></a></li>
							</ul> 
						</div>
						<div class = "col-xs-12 text-center" style = "margin-top:-35px">
							<ul>
								<li><a href ="#">About us</a></li>
								<li><a href ="#">How to reach us</a></li>
								<li><a href ="#">Landmarks</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div  style=";margin:0 auto 0 auto" >
				<div "id="colorlib-logo" style ="float:left;width:250px;margin-bottom:20px">
					<a href="index.html"><img src = "./logo.png" style="width:100%;height:100%;margin-bottom: :20px auto 0 auto"></a>
				</div>
				<div>
					<ul>
						<li><a href ="#">Home</a></li>
						<li><a href="#">Rooms</a></li>
						<li><a href="#">Aminities</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

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
				echo "<tr><td><div class=\"g-recaptcha\" data-sitekey=\"6Ld3vVsUAAAAADphxwRIEewSOnuhA1X0WrJWQo9C\"></div></td></tr>";
				echo "<tr><td><button id=\"butt\" type=\"button\" onclick=\"send()\">Send</td></tr>";
				echo "</table></form>";
			?>
</body>
</html>
