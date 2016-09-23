<?php
$title="Pravega Racing - PRV14 Team";
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
	$navactive="team";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header sub-header-banner-teams">
		<div class="layer">
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
		</div>
	</section>

	<section class="first-section margin-bottom-20">
		<div class="grid-container-fluid padlr">
			<h1 class="text-center">PRV 14 - Team</h1>
			<div class="roww member-prv16-wrapper">
				<?php
				$team_prv16=["Sanshray Agarwal<span class='team-position'>(Team Captain)</span>","Prerak Mody<span class='team-position'>(Team Manager)</span>","Ujjwal Pandey",
				"Achintya Mehrotra","Aditya Sharma","Akash Raj",
				"Pranav Radhakrishna","Madhav Rangerjan","Harshit Ahuja",
				"Aditya Bahuguna","Divyanshu Garg","Mrigank Hiran",
				"Katyayan Jaiswal","Gaurav Shrivastav","Aditya Chaudhary",
				"Rajatnoor Singh","Palak Mehta","Praneet Dutta",
				"Aarna Rawat","Gaurav Patni"
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

	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<?php
	include_once("includes/footer.php");
	?>
</body>
</html>