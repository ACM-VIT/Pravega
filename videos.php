<?php
$title="Pravega Racing - Videos";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style type="text/css">
.video-wrap{
	margin-top: 30px;
	margin-bottom: 30px;
}
.video-wrap h3{
	margin-left: 10px;
}
video{
	margin-left: auto;
	margin-right: auto;
	width: 100%;
}
@media (min-width: 769px){
	video{
		width: 85%;
		height: 500px;
	}
}
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
	$navactive="media";
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
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Media</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>A sneak peek into some of our stunning events and performances
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
		<br>
			<h2 class="text-center">Videos</h2>
			<?php
			$videos[0]=["Drag Race 2016","dragrace.mov"];
			$videos[]=["Testing Phase PRV16","tp_prv16.mov"];
			$videos[]=["I Am Pravega","iampravega.mp4"];
			$videos[]=["Launch Final Swag","launch_final_swag.mp4"];
			$videos[]=["Season Video","season_video.mp4"];
			for($i=0;$i<count($videos);$i++)
			{
				$title=$videos[$i][0];
				$link=$videos[$i][1];
				echo "
				<div class='col-sm-10 col-sm-offset-1 col-xs-12 video-wrap'>
					<h3 class='text-left'>$title</h3>
					<div class='col-xs-12'>
						<video controls><source src='img/general/media/videos/$link' type='video/mp4'><source src='mov_bbb.ogg' type='video/ogg'>Your browser does not support HTML5 video.</video>
					</div>
				</div>
				";
			}
			?>
		</div>
	</div>
	<br>
	<br><br>
	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="col-xs-12 padding-left-0 padding-right-0">
		<?php
		include_once("includes/footer.php");
		?>
	</body>
	</html>