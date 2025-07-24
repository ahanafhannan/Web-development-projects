<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOTEL MOON</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
<div class="banner-top">
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
			</nav>

		</div>
	</div>
<!-- //header -->
	<!-- banner -->
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL MOON</h4>
									<h3>EXPERIENCE LUXUARY AT IT'S PEAK</h3>
										<p>WE HUMBLY WELCOME YOU TO OUR PALACE</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
			</div>
<div class="clearfix"> </div>
<!-- //banner --> 
<!-- rooms & rates -->
<div class="plans-section" id="rooms">
			<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
				<div class="priceing-table-main">
			<div class="col-md-3 price-grid">
			<div class="price-block agile">
				<div class="price-gd-top">
				<img src="images/r1.jpg" alt=" " class="img-responsive" />
					<h4>Superior Room</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">	
						<h3><span>$</span>320</h3>						
						<a href="admin/reservation.php" >Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 price-grid ">
			<div class="price-block agile">
				<div class="price-gd-top">
				<img src="images/r2.jpg" alt=" " class="img-responsive" />
					<h4>Delux Room</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">
						<h3><span>$</span>220</h3>
						<a href="admin/reservation.php" >Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 price-grid lost">
			<div class="price-block agile">
				<div class="price-gd-top">
				<img src="images/r3.jpg" alt=" " class="img-responsive" />
					<h4>Guest House</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">
						<h3><span>$</span>180</h3>
						<a href="admin/reservation.php" >Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 price-grid wthree lost">
			<div class="price-block agile">
				<div class="price-gd-top ">
					<img src="images/r4.jpg" alt=" " class="img-responsive" />
					<h4>Single Room</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">
						<h3><span>$</span> 150</h3>
						<a href="admin/reservation.php" >Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<!--// rooms & rates -->
<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+880 (17)993-43-78</p>
			<p class="contact-agile1"><strong>Email :</strong> hotelmoon@gmail.com</a></p>
			<p class="contact-agile1"><strong>Address :</strong> 7/38 Park Street Road, New York, USA</p>
		<div class="clearfix"></div>
	</div>
</section>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
			<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
				});
		
			});
			</script>
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {						
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


