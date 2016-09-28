<?php
$title="Pravega Racing - PR activity";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">

<link rel="stylesheet" type="text/css" href="css/mycss/practivity.css">
<style>
	
	.color-black-impp{
		color: #000;
	}
	.color-red-impp{
		color: #dc092f;
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
	$navactive="practivity";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-practivity">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short">PR activities</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short">
						<span class="text-decor animated animate__roll-in"></span>We do our best to keep our sponsors satisfied by branding them through our various PR activities and exciting marketing campaigns
					</h5>
				</div>
			</div>
		</div>
	</section>
	<main class="main-wrapper container">
		<div class="row">
			<div class="first-section left-section col-md-8">
				<?php
				$headings=["Drag Race 2016","Rollout 2016 new","Rollout 2015","Riviera","Calendar Shoot Cornitos","Engage Deodorants Marketing Campaign","Red Bull calendar shoot"];
				$paras=["With little help from BMW India we conducted a drag race between PRV 16 and BMW in our college campus.  Revving of engines raised the heartbeats of the audience to an unmatched level, like never seen before in VIT. The 75m race was flagged off by BMW representative at the event, both the cars made 3 runs towards the finish line, each time PRV was able to beat the Beemer.",
				"Continuing the tradition, we orchestrated the Grand Rollout of our new car PRV16. Our new sponsors BMW and Star sports were presented at the event which was attended by Parents, Faculty members, sponsors and an overwhelming crowd of more than 1000 students. The countdown got everybody’s heartbeat racing, we again had a staggering response from the freshers.",
				"We conducted a grand launch of our car PRV 15. All the sponsors were showcased at the event. All the senior management of VIT, sponsors and alumni attended the launch. More than 800 students we closely packed in CS hall. Excitement amongst the freshers was heartening and it was them who made our event biggest event of the semester.",
				"Riviera is the cultural fest of VIT University which sees a crowd of over 25,000 people. We had an epic pit setup at Riviera with Red Bull providing excitement through its Racing Simulator, Parasol and a beautiful Wings Team sampling Red Bull cans while our PRV’14 entertained the crowd. On Day 1 we performed some donuts in front of an excited crowd and owing to public demand on Day 2 we showed our creative side laying the track with colors to put up an exhilarating show in front of a huge crowd. This was one of the best PR stunts of college in 2014-15 season.",
				"It was a perfect team bonding activity for the team during the summer vacations as it gave a break from the busy testing schedule. Our calendar was themed on the numerous flavors of cornitos. It took a lot of effort to relate chips with our racecar but in the end we were successful to create a very cool and colorful calendar",
				"It was a perfect team bonding activity for the team during the summer vacations as it gave a break from the busy testing schedule. Our calendar was themed on the numerous flavors of cornitos. It took a lot of effort to relate chips with our racecar but in the end we were successful to create a very cool and colorful calendar.",
				"Engage deodorants from ITC is an exciting brand that has pushed the envelope in Indian advertising and shooting pictures for them was a very exciting endeavour. We themed our pictures based on the various fragrances of Engage integrating sensuality and style to suit the Engage brand. This was a one of a kind opportunity and we made the most of it creating some great pictures in the process.",
				"After continual efforts we got a chance to associate with Red Bull and we decided to do something special to reciprocate this gesture. We did a photo shoot to make a Red Bull calendar with pictures having a mix of emotion, creativity, passion for race cars and the zeal for the perfect picture. Our driver along with our Car and Red Bull cans blended perfectly to create a magnificent calendar. This calendar is an achievement that will be etched in our memories forever."

				];
				$ifr_links=["dragrace.html","rollout2016.html","rollout2015.html","riviera.html","cornitos.html","engage.html","redbull.html"];
				//$img_folders=["dragrace2016","rollout2016","rollout2015","riviera","cornitos","engage","redbull"];
				$nos=count($ifr_links);
				for($i=0;$i<$nos;$i++)
				{
					$heading=$headings[$i];
					$para=$paras[$i];
					$ifr_link="includes/practivity/$ifr_links[$i]";
					echo "
					<div class='activity-wrapper'>
						<h2 class='activity-title text-left'><b>$heading</b></h2>
						<p class='activity-para'>$para</p>
						<div class='iframediv'>
							<iframe src='$ifr_link' scrolling='no' class='activity-photo-iframe'></iframe>
						</div>
					</div>
					";
				}
				?>
			</div>
			<div class="first-section right-section padding-right-0 col-sm-8 col-md-4">
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
	</main>
	<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
	<div class="col-xs-12 padding-left-0 padding-right-0">
		<?php
		include_once("includes/footer.php");
		?>
	</div>
	<script type="text/javascript">
		
	</script>
</body>
</html>