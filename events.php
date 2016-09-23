<?php
$title="Pravega Racing - Events";
include_once('includes/head.php');
?>

<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/sub-page-styles.css">
<link rel="stylesheet" type="text/css" href="css/mycss/mybootstrap.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/mystyle.css" />
<style>
.sub-header-banner-events{
	background-image:  url('img/general/cars/eventsbg.png');
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
	$navactive="events";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header sub-header-banner-teams">
		<div class="layer">
			<div class="grid-container">
				<div class="grid-row">
					<div class="column-12 animated-parent">
						<h2 class="text-color-10 animated animate__fade-in-left-short">Events</h2>
						<h5 class="text-color-10 animated animate__fade-in-right-short">
							<span class="text-decor animated animate__roll-in"></span>A line or two about events..
						</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="grid-container-fluid padlr">
			<h1 class="text-center">Events</h1>
		</div>
	</section>






	<?php
	include_once("includes/footer.php");
	?>


	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>

	<!-- End of section -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<script src="js/min/main-min.js"></script>
	<script src="js/min/scripts-min.js"></script>

</body>
</html>