<?php
$title="Pravega Racing - Contact Us";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sub-page-styles.css">
<link rel="stylesheet" type="text/css" href="css/mycss/mybootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/mystyle.css" />
<style>
	.sub-header-banner-contactus{
		background-image:  url('img/general/cars/teamsbg.png');
		background-position:0 top ;
		position: relative;
	}

</style>
</head>
<body class="flagstone-about-us">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	$navactive="contactus";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header sub-header-banner-contactus">
		<div class="layer">
			<div class="grid-container">
				<div class="grid-row">
					<div class="column-12 animated-parent">
						<h2 class="text-color-10 animated animate__fade-in-left-short">Contact us</h2>
						<h5 class="text-color-10 animated animate__fade-in-right-short">
							<span class="text-decor animated animate__roll-in"></span>A line or two about contact us..
						</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="first-section">
		<div class="grid-container-fluid padlr">
			<h1 class="text-center">Contact us</h1>

		</div>
	</section>
	<section class="margin-top-40">
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-8">
					<h4>Leave us a message...</h4>
					<form action="http://flagstone.vidalthemes.com/post.php" class="form">
						<div class="grid-container">
							<div class="grid-row margin-bottom-20">
								<div class="column-6">
									<input type="text" required class="input margin-bottom-10" placeholder="Name">
								</div>
								<div class="column-6">
									<input type="email" required class="input margin-bottom-10" placeholder="Email">
								</div>
							</div>
							<div class="grid-row">
								<div class="column-12">
									<textarea class="input margin-bottom-10" name="name" rows="8" cols="40" placeholder="Message"></textarea>
									<button class="button text-color-10 margin-top-10 margin-bottom-30">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="column-3 push-column-1 background-color-11 padding-top-20 padding-bottom-20">
					<h4>Find us...</h4>
					<ul class="list list--address margin-bottom-20">
						<li class="list__item list--address-location"><b>Pravega Racing</b></li>
						<li class="list__item">VIT University</li>
						<li class="list__item">Vellore</li>
						<li class="list__item">India</li>
						<li class="list__item list--address-phone">+(44)8976 422355</li>
						<li class="list__item list--address-phone">+(44)8976 422355</li>
					</ul>
					<ul class="list">
						<li class="list__item"><a class="link" href="mailto:email@emailaddress.com">pravegaracing@gmail.com</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center">
		<div style='overflow:hidden;height:440px;width:100vw;margin-left:auto;margin-right: auto;'>
		<div id='gmap_canvas' style='height:440px;width:100vw;'>
		</div>
		<div>
			<small>
				<a href="http://www.embedgooglemaps.com/en/">Generate your map here, quick and easy!									Give your customers directions Get found</a></small>
			</div><div>
			<small><a href="https://www.amazon.com/Extra-Large-Folding-Kennel-Plastic/dp/B00M3NBJ8E/ref=sr_1_5?s=pet-supplies&ie=UTF8&qid=1470313482&sr=1-5keywords=pet+cage">Pet Wire Cage</a></small></div>
			<style>
				#gmap_canvas img{max-width:none!important;background:none!important}
			</style>
		</div>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
		<script type='text/javascript'>function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(12.9723913,79.15767519999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.9723913,79.15767519999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Pravega Racing</strong><br>VIT University, Vellore, India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
		</script>
	</section>

	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<?php
	include_once("includes/footer.php");
	?>
</body>
</html>