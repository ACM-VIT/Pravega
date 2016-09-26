<?php
$title="Pravega Racing - Cars";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/flickity.min.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/carslider.css">
<script>
	function resizeIframe(obj) {
		obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	}
</script>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>
	<?php
	$navactive="cars";
	require_once('includes/nav.php');
	?>
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-cars">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short">Cars</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short">
						<span class="text-decor animated animate__roll-in"></span>A line or two about our cars..
					</h5>
				</div>
			</div>
		</div>
	</section>

	<section class="cars-intro">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 left-section">
					<p class="cars-intro-para">A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space. A small introduction about cars to fill up this space.</p>
				</div>

				<div class="col-xs-12 col-sm-8 col-md-4 right-section">
					<aside class="right-sidebar">
						<div class="widget">
							<h5 class="widgetheading">Related Pages</h5>
							<ul class="recent">
								<li>
									<img src="img/general/cars/prv16.png" class="right-img" alt="">
									<div class="written-material">
										<h6 class="right-heading"><a href="supportus.php">How to Support us</a></h6>
										<p class="right-para ellipsis">
											Invest in the next generation of employees who will have the skills ...
										</p>
									</div>
								</li>
								<li>
									<img src="img/general/cars/recent_4.png" class="right-img" alt="">
									<div class="written-material">
										<h6 class="right-heading"><a href="practivity.php">PR activities</a></h6>
										<p class="right-para">
											We do our best to keep our sponsors satisfied by branding them ...
										</p>
									</div>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<section class="cars_iframe-section">
		<iframe src="cars_iframe.php" id="iframe_cars" class="cars_iframe" scrolling="no" onload="resizeIframe(this)"></iframe>
	</section>
	
	
	<!-- End of section -->

	<!-- End of section -->

	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<?php
	include_once("includes/footer.php");
	?>
	<script type="text/javascript">
	var i_frame=document.getElementById('iframe_cars');
		$( window ).resize(function() {
			resizeIframe(i_frame);
		});
	</script>
</body>
</html>
