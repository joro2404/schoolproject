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

	<!-- Responsive design -->
	<link rel="stylesheet" href="css/responsive.css">

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
	table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 30%;
	}

th, td {
    text-align: left;
    padding: 8px;
}
	</style>

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top">
				<div>
					<div>
						<!--<div class="col-xs-4">
							<p class="site">www.centralwesthotel.com</p>
						</div>-->

					<div style = "margin-top:-8px">
							<div class="header_site" >www.centralwesthotel.com</div>
							<ul class="about">
								<li><a href ="./contactBG.html#about-us">За нас</a></li>
								<li><a href ="./contactBG.html#reach">Как да стигнете</a></li>
								<li><a href ="https://www.tripadvisor.com/Attractions-g294452-Activities-c47-Sofia_Sofia_Region.html" target="_blank">Забележителности</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="icons">
					<a href="https://www.facebook.com/centralwesthotelsofia/" target = "_blank"><img src = "./images/facebook.png"></a>
					<a href="reservation.php"><img src="images/en_flag.png" style="width: 30px"></a>
					<a href="reservationBG.php"><img src="images/bg-01.png" style="width: 30px"></a>
				</div>
			</div>
			<div id="colorlib-logo">
				<a href="index.php"><img src = "./logo.png" style="width:100%;height:100%;margin-bottom: 20px auto 0 auto"></a>
			</div>
			<div class="top-menu">
				<div class="container">
						<div class="col-xs-10 tex-right menu-1">
							<ul class="links">
								<li><a href ="./index.php" style = "word-spacing: 10px;font-size: 20px">Начало</a></li>
								<li><a href="./rooms.html" style = "word-spacing: 10px;font-size: 20px">Стаи</a></li>
								<li><a href="./amenities.html" style = "word-spacing: 10px;font-size: 20px">Удобства</a></li>
								<li><a href="./gallery.html" style = "word-spacing: 10px;font-size: 20px">Галерия</a></li>
                                <li><a href="./reviewsBG.html" style = "word-spacing: 10px;font-size: 20px">Oтзиви</a></li>
								<li><a href="./contact.html" style = "word-spacing: 10px;font-size: 20px">Контакти</a></li>
							</ul>
						</div>
				</div>
			</div>
		</nav>
		<?php
				$from = $_GET["from"];
				$to = $_GET["to"];
				$adults = $_GET["adults"];
				$children = $_GET["children"];
				echo "<form action=\"reservation.php\"><br><div style=\"overflow-x:auto\"><table style=\"margin-top:2%; margin-left:10%\">";
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
		<div id="colorlib-contact" style="margin-top:1%">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<div class="contacts">
							<p style="font-size:16px;color: #4d79ff"><span><i class="icon-location-2"></i></span>1309 Sofia Center,<br>bul. "Todor Alexandrov" 135</p>
							<p style="font-size:16px;color: #4d79ff"><span><i class="icon-phone3"></i></span> <a >+35988 574 7606</a></p>
						</div>
						<div class="contacts">
							<p style="font-size:16px;color: #4d79ff"><span><i class="icon-paperplane"></i></span> <a >contact@centralwesthotel.com</a></p>
							<p style="font-size:16px;color: #4d79ff"><span><i class="icon-globe"></i></span> <a>centralwesthotel.com</a></p>
						</div>

					</div>
				</div>
			</div>
		</div>
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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
