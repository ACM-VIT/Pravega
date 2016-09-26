<?php
$title="Pravega Racing - PRV16 Team";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>

</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	$navactive="team";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-teams">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short">Team</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short">
						<span class="text-decor animated animate__roll-in"></span>A line or two about team..
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12">
				<section class="first-section margin-bottom-20">
					<div class="grid-container-fluid">
						<h1 class="text-center">PRV 16 - Team</h1>
						<div class="roww member-prv16-wrapper">
							<?php
							$team_prv16=["Tribhuvan Singh","Vyom Gautam","Yash Chabbra",
							"Sehdev Sikka","Rohan Gupta","Aditya Tiwari",
							"Ritesh Tekriwal","Arsel Hasan","Arjun Wadhna",
							"Tanay Shah","Vatsal Patel","Saurabh",
							"Ansh Gandhi","Chitranjan","Tejas Kothari",
							"Poojary","Sehdev Sikka","Deep Doshi",
							"Kiran Jomy","Apoorv Kakkar","Abhay Singh"
							];

							$no_prv16=count($team_prv16);
							for($i=0;$i<$no_prv16;$i++)
							{
								$name=$team_prv16[$i];
								echo "<div class='col-md-3 col-sm-4 col-xs-6'><span class='member-prv16'>".$name."</span></div>";
							}
							?>
						</div>
					</div>
				</section>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-4 right-section">
				<aside class="right-sidebar first-section">
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
	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="col-xs-12 padding-left-0 padding-right-0">
		<?php
		include_once("includes/footer.php");
		?>
	</div>
</body>
</html>