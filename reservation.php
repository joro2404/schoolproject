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

	<style>
	td {
		color: #313131;
		font-size: 15px;
	}
	tr {
		margin-bottom: 20px; 
	}
	</style>

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
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p class="site">www.centralwesthotel.com</p>
						</div> 
						<div class="col-xs-8 text-right">
							<!--<p class="num">Call: +359885747606</p>
							<p class="num">e-mail : contact@centralwesthotel.com</p> -->
							<ul class="colorlib-social">
								<li><a href="https://youtube.com/" target="_blank"><i class="icon-youtube"></i></a></li>
								<li><a href="https://www.facebook.com/" target = "_blank"><i class="icon-facebook"></i></a></li>
								<!--<li><a href="#"><i class="icon-linkedin"></i></a></li>-->
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
				<div style="float: right; margin-top: -25px; margin-right: 50px;">
							<img src="images/en_flag.png" style="width: 30px">
				</div>
				<div style="float: right; margin-top: -25px; margin-right: 20px;">
							<img src="images/bg-01.png" style="width: 30px">
				</div>
			</div>
			<div  style=";margin:0 auto 0 auto" >
				<div "id="colorlib-logo" style ="float:left;width:250px;margin-bottom:20px;margin-left: 80px">
					<a href="index.html"><img src = "./logo.png" style="width:100%;height:100%;margin-bottom: :20px auto 0 auto"></a>
				</div>
				<div style = "float:right;position: relative;left:-50%;text-align: left;">
					<ul style = "position: relative;left:50%;margin-top:70px;margin-left: 150px">
						<li><a href ="#" style = "word-spacing: 10px;font-size: 20px">Home</a></li>
						<li><a href="#" style = "word-spacing: 10px;font-size: 20px">Rooms</a></li>
						<li><a href="#" style = "word-spacing: 10px;font-size: 20px">Aminities</a></li>
						<li><a href="#" style = "word-spacing: 10px;font-size: 20px">Gallery</a></li>
						<li><a href="#" style = "word-spacing: 10px;font-size: 20px">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<!--	<div style='width:100%; height:150%;background-image:url("images/hotel012ed.jpg")'>-->
			<?php
				$from = $_GET["from"];
				$to = $_GET["to"];
				$adults = $_GET["adults"];
				$children = $_GET["children"];
				echo "<form action=\"reservation.php\"><br><table style=\"margin-top:50px; margin-left:400px\">";
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

		
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Контакти</h2>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span>1309 Sofia Center,<br>bul. "Todor Alexandrov" 135</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a >+35988 574 7606</a></p>
							</div>
							<div class="col-md-3" style = "font-size:11px">
								<p><span><i class="icon-paperplane"></i></span> <a >contact@centralwesthotel.com</a></p>
							</div>
						<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a>centralwesthotel.com</a></p>
							</div>
						</div>
					</div>
					<!--<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Get In Touch</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">First Name</label>
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Subject</label>
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>-->
				</div>
			</div>
		</div>
</body>
</html>
