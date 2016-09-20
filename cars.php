<?php
include_once('includes/head.php');
?>

<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/sub-page-styles.css">

		<!--
		Remember to include the theme that you are using for the homepage,
		on your sub pages, this will ensure your typography and colour
		scheme is used consistently throughout your site.
	-->

	<!-- jQuery -->
	<script src="js/min/jquery-min.js"></script>

	<!-- Default Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
	<link rel="stylesheet" type="text/css" href="css/mycss/mystyle.css" />
	<link rel="stylesheet" type="text/css" href="css/mycss/carslider.css">
</head>
<body class="flagstone-about-us">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->

	<section class="background-color-11 sub-header sub-header-banner-2">
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short">Cars</h2>
					<h5 class="text-uppercase text-color-10 animated animate__fade-in-right-short">
						<span class="text-decor animated animate__roll-in"></span>Find out all about Flagstone...
					</h5>
				</div>
			</div>
		</div>
	</section>

	<!-- End of section -->

	<section class="margin-top-100">
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-4">
					<h4>Our company values...</h4>
				</div>
				

			</div>
		</div>
	</section>
	<section>
		<div id="wrap">
			<div id="showcase" class="noselect">
				<img class="cloud9-item" src="img/general/cars/race1.png" alt="PRV 16"> 
				<img class="cloud9-item" src="img/general/cars/race2.png" alt="PRV 15"> 
				<img class="cloud9-item" src="img/general/cars/race3.png" alt="PRV 14">
				<img class="cloud9-item" src="img/general/cars/race4.png" alt="PRV 13">
				<img class="cloud9-item" src="img/general/cars/race5.png" alt="PRV dp"> 
				</div>
			<p id="item-title">&nbsp;</p>
			<div class="nav" class="noselect">
				<button class="left"> ← </button>
				<button class="right">→</button>
			</div>
		</div>
	</section>
	<!-- End of section -->

	
	<!-- End of section -->

	<?php
	include("includes/footer.php");
	?>


	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>

	<!-- End of section -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<script src="https://maps.google.com/maps/api/js"></script>
	<script src="js/min/main-min.js"></script>
	<script src="js/min/scripts-min.js"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
		-->
	<script src="js/min/myjs/jquery.reflection.js"></script> 
	<script src="js/min/myjs/jquery.cloud9carousel.js"></script> 
	<script>
	$(function() {
		var showcase = $("#showcase")

		showcase.Cloud9Carousel( {
			yPos: 42,
			yRadius: 48,
			mirrorOptions: {
				gap: 12,
				height: 0.2
			},
			buttonLeft: $(".nav > .left"),
			buttonRight: $(".nav > .right"),
			autoPlay: true,
			bringToFront: true,
			onRendered: showcaseUpdated,
			onLoaded: function() {
				showcase.css( 'visibility', 'visible' )
				showcase.css( 'display', 'none' )
				showcase.fadeIn( 1500 )
			}
		} )

		function showcaseUpdated( showcase ) {
			var title = $('#item-title').html(
				$(showcase.nearestItem()).attr( 'alt' )
				);

			var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
			title.css('opacity', 0.5 + (0.5 * c));
        //
    }

      // Simulate physical button click effect
      $('.nav > button').click( function( e ) {
      	var b = $(e.target).addClass( 'down' )
      	setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
        	/* left arrow */
        	case 37:
        	$('.nav > .left').click()
        	break

        	/* right arrow */
        	case 39:
        	$('.nav > .right').click()
        }
    } )
  })
</script> 

</body>
</html>
