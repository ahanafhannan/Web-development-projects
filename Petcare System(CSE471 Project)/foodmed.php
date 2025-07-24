<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PET CARE</title>
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
				<div class="navbar-header navbar-left">
					<h1><a class="navbar-brand" href="index.php"> <span>  </span><p class="logo_w3l_agile_caption">  </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
						<li class="menu__item"><a href="home.php" class="menu__link scroll">Homepage</a></li>
						    <li class="menu__item"><a href="logout.php" class="menu__link scroll">Log Out</a></li>

						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
    <div class="plans-section" id="rooms">
			<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Food and Medicine</h3>
			<div class="priceing-table-main">
		<div class="col-md-3 price-grid">
			<div class="price-block agile">
				<div class="price-gd-top">
				<img src="images/food.jpg" alt=" " class="img-responsive" />
					<h4>Order Food </h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">					
						<a href="orderfood.php" >Browse</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 price-grid ">
			<div class="price-block agile">
				<div class="price-gd-top">
				<img src="images/map.jpg" alt=" " class="img-responsive" />
					<h4>See Food Stores</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">
						<a href="foodstore.php" >Browse</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 price-grid lost">
			<div class="price-block agile">
				<div class="price-gd-top">
				<img src="images/med.jpg" alt=" " class="img-responsive" />
					<h4>Order Medicine</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">
						<a href="ordermed.php" >Browse</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 price-grid wthree lost">
			<div class="price-block agile">
				<div class="price-gd-top ">
					<img src="images/map.jpg" alt=" " class="img-responsive" />
					<h4>See Medicine Stores</h4>
				</div>
				<div class="price-gd-bottom">
					<div class="price-selet">
						<a href="medstore.php" >Browse</a>
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


