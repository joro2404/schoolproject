<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Central West Hotel</title>
	<link rel="shortcut icon" href="./logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration 
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />-->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript">
		function send() {
			document.getElementById("butt").disabled = true;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					alert("Successfully sent");
    			}
    		};
    		var date1 = document.getElementById("from_new").value, date2 = document.getElementById("to_new").value, adults = document.getElementById("adults_new").value;
    		var children = document.getElementById("children_new").value, name = document.getElementById("cname").value, phone = document.getElementById("phone").value;
			var msg = "Reservation from website: ESCnCheck-in date: " + date1 + "ESCnCheck-out date: " + date2 + "ESCnAdults: " + adults + "ESCnChildren: " + children + "ESCnName: " + name + "ESCnPhone: " + phone + "ESCnE-mail: " + document.getElementById("email").value;
			xhttp.open("GET", "https://ifko42.info/sami/send_mail.php?msg=" + msg.replace("/", "%2F"), true);
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

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

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
								<li><a href ="#">За нас</a></li>
								<li><a href ="#">Как да стигнете</a></li>
								<li><a href ="#">Забележителности</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div style="float: right; margin-top: -25px; margin-right: 50px;">
							<a href="reservation.php"><img src="images/en_flag.png" style="width: 30px"></a>
				</div>
				<div style="float: right; margin-top: -25px; margin-right: 20px;">
							<a href="reservationBG.php"><img src="images/bg-01.png" style="width: 30px"></a>
				</div>
			</div>
			<div  style=";margin:0 auto 0 auto" >
				<div "id="colorlib-logo" style ="float:left;width:250px;margin-bottom:20px;margin-left: 80px">
					<a href="index.html"><img src = "./logo.png" style="width:100%;height:100%;margin-bottom: :20px auto 0 auto"></a>
				</div>
				<div style = "float:right;position: relative;left:-50%;text-align: left;">
					<ul style = "position: relative;left:50%;margin-top:70px;margin-left: 150px">
						<li><a href ="./index.php" style = "word-spacing: 10px;font-size: 20px">Начало</a></li>
						<li><a href="./rooms.html" style = "word-spacing: 10px;font-size: 20px">Стаи</a></li>
						<li><a href="./aminities.html" style = "word-spacing: 10px;font-size: 20px">Удобства</a></li>
						<li><a href="./gallery.html" style = "word-spacing: 10px;font-size: 20px">Галерия</a></li>
						<li><a href="#" style = "word-spacing: 10px;font-size: 20px">Контакти</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<?php
				$from = $_GET["from"];
				$to = $_GET["to"];
				$adults = $_GET["adults"];
				$children = $_GET["children"];
				echo "<form action=\"reservation.php\"><br><table style=\"margin-top:150px; margin-left:550px\">";
				echo "<tr><td>Дата на пристигане </td> <td><input type=\"text\" id=\"from_new\" value=\"$from\"></td></tr>";
				echo "<tr><td>Дата на заминаване </td> <td><input type=\"text\" id=\"to_new\" value=\"$to\"></td></tr>";
				echo "<tr><td>Възрастни </td> <td><input type=\"text\" id=\"adults_new\" value=\"$adults\"></td></tr>";
				echo "<tr><td>Деца </td> <td><input type=\"text\" id=\"children_new\" value=\"$children\"></td></tr>";
				echo "<tr><td>Име </td> <td><input type=\"text\" id=\"cname\"></td></tr>";
				echo "<tr><td>Телефон </td> <td><input type=\"text\" id=\"phone\"></td></tr>";
				echo "<tr><td>Имейл </td> <td><input type=\"text\" id=\"email\"></td></tr>";
				echo "<tr><td><div class=\"g-recaptcha\" data-sitekey=\"6Ld3vVsUAAAAADphxwRIEewSOnuhA1X0WrJWQo9C\"></div></td></tr>";
				echo "<tr><td><button id=\"butt\" type=\"button\" onclick=\"send()\">Изпрати</td></tr>";
				echo "</table></form>";
		?>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
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
				</div>
			</div>
		</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
