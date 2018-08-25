<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<title>Central West Hotel</title>
<link rel="shortcut icon" href="./logo.png">

<!-- Facebook and Twitter integration -->
<meta name="twitter:title" content="Central West Hotel" />
<meta name="twitter:image" content="https://www.centralwesthotel.com/logo.png" />
<meta name="twitter:url" content="https://centralwesthotel.com" />
<meta name="twitter:card" content="" />
<meta property="og:url" content="https://centralwesthotel.com" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Central West Hotel" />
<meta property="og:description" content="Hotel in Sofia center" />
<meta property="og:image" content="https://www.centralwesthotel.com/logo2.png" />

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

<!-- Responsive design -->
<link rel="stylesheet" href="css/responsive.css">

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

<!--Google maps -->
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(42.701156,23.302300);
        var mapCanvas = document.getElementById("map");
  		var mapOptions = {center: myCenter, zoom: 15};
  		var map = new google.maps.Map(mapCanvas, mapOptions);
  		var marker = new google.maps.Marker({position:myCenter});
  		marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg1_DVFO3m_r9FJg-k0l5TqWLplhNauDc&callback=myMap"></script>

<!-- AJAX -->
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
