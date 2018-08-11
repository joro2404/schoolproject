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
								<li><a href ="./contact.html#about-us">About us</a></li>
								<li><a href ="./contact.html#reach">How to reach us</a></li>
								<li><a href ="https://www.tripadvisor.com/Attractions-g294452-Activities-c47-Sofia_Sofia_Region.html" target="_blank">Landmarks</a></li>
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
								<li><a href ="./index.php" style = "word-spacing: 10px;font-size: 20px">Home</a></li>
								<li><a href="./rooms.html" style = "word-spacing: 10px;font-size: 20px">Rooms</a></li>
								<li><a href="./amenities.html" style = "word-spacing: 10px;font-size: 20px">Аmenities</a></li>
								<li><a href="./gallery.html" style = "word-spacing: 10px;font-size: 20px">Gallery</a></li>
								<li><a href="./contact.html" style = "word-spacing: 10px;font-size: 20px">Contact</a></li>
							</ul>
						</div>
				</div>
			</div>
		</nav>

		<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://sami-4.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


		<footer id="colorlib-footer" role="contentinfo" style="padding-top: 20px">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-3 colorlib-widget" style="text-align:left">
							<h4>Central West Hotel</h4>
							<p style="color: #adabb1">"Central West Hotel" is a new hotel which has opened in the center of Sofia in 2018. Located in a great part of the city, you can find numerous restaurants, bars, shops and business locations near us. Our hotel has 12 spacious double rooms as well as 4 large studios and all of them are well decorated and include a living room, bedroom and a large bathroom. </p>
							<p>
								<!--<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>-->
							</p>
						</div>
						<div class="col-md-3 colorlib-widget" style="text-align:center">
							<h4>Quick Links</h4>
							<p>
								<ul class="colorlib-footer-links">
									<li><a href="./index.php">Home</a></li>
									<li><a href="./rooms/html">Rooms</a></li>
									<li><a href="./amenities.html">Аmenities</a></li>
									<li><a href="./gallery.html">Gallery</a></li>
									<li><a href="./contact.html">Contact</a></li>
								</ul>
							</p>
						</div>
						<!--<div class="col-md-3">
							<h4>Recents Blog Post</h4>
							<ul class="colorlib-footer-links">
								<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
								<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
								<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
							</ul>
						</div>-->

						<div class="fixed_footer col-md-3 col-md-push-1" >
							<h4>Contact Information</h4>
							<ul class="colorlib-footer-links">
								<li>1309 Sofia Center<br>bul. "Todor Alexandrov" 135</li>
								<li><a href="tel://+359885747606">+359 885 747 606</a></li>
								<li><a href="mailto:contact@centralwesthotel.com">contact@centralwesthotel.com</a></li>
								<li><a href="https://centralwesthotel.com">centralwesthotel.com</a></li>
							</ul>
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
