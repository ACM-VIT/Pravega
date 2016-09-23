<?php
$title="Pravega Racing - Current Team";
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
.sub-header-banner-teams{
	background-image:  url('img/general/cars/teamsbg.png');
	background-position:0 top ;
	position: relative;
}
.team-member-wrapper .overlay__background {
    background-color: rgba(255, 255, 255, 0.7);
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
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header sub-header-banner-teams">
		<div class="layer">
			<div class="grid-container">
				<div class="grid-row">
					<div class="column-12 animated-parent">
						<h2 class="text-color-10 animated animate__fade-in-left-short">Teams</h2>
						<h5 class="text-color-10 animated animate__fade-in-right-short">
							<span class="text-decor animated animate__roll-in"></span>A line or two about our teams..
						</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="grid-container-fluid padlr">
			<h1 class="text-center">Current team</h1>
			<div class="row team-members-wrapper">
				<?php
				$team_members=["Aagosh Mishra","Aayush Nahata","Abhijai Tibrewal","Arnav Patel","Ashish Chadda","Nimish Mehra",
				               "Nishant Dixit","Rishabh Khanna","Siddharth Sethi","Shantanu Singh","Udit Saraswat","Tarun Bhatia",
				               "Varun Nair","Yashasavi Karnena","Rishiraj Chauhan","Sushant Srivastav","Aarti Noroha","Vaibhav Sharma",
				               "Akysht Kumar","Sachin HT","Prathamesh Gunjal","Shreyansh Garhewal","Dhananjay Singh","Udhay Singh",
				               "Naman Shukla","Nimish Gupta","Nikhil Agrawal","Kunal Aggrawal","Saahil Vishwakarma","Amogh Chourasia",
				               "Rohit Aggrawal","Rishabh Jain","Ruchit Jain","Manmohit Singh","Surbhit Bhardwaj","Sanchit Chaudhary",
				               "Salil Madhav","Rebanta Roy","S Sooraj","Adithya Venugopal","Vishal Agrawal","Uma Shankar",
				               "Ashwarya Anupam","Sai Teja","Samarjeet Sharma","Vibhor Malik","Aman Agarwal","Vignesh K",
				               "Shantan Khandal","Utkarsh Palav","Apoorv Singh","Saksham Bhardwaj","Amitabh Das","Moideen Shariq",
				               "Shantanu Khandar"
				               ];
				$team_roles=["President"];
				$no_team_members=count($team_members);
				for($i=0;$i<$no_team_members;$i++)
				{
					$name=$team_members[$i];
					$name=ucwords($name);
					$fname="placeholder";//strtolower(substr($name,0,strpos($name," ")));
					$role=$team_roles[0];//$i
					echo "
					<div class='col-md-2 col-sm-4 col-xs-6'>
					 <div class='overlay team-member-wrapper'>
					  <div class='overlay__background'></div>
					  <div class='overlay__content text-center text-color-2'>
					  <span class='overlay__content-heading'>{$name}</span>
					  <span class='overlay__content-text'><b>{$role}</b></span>
					 </div>
					<img src='img/general/teams/currentteam/{$fname}.png' alt='{$fname}' class='overlay__image'>
					<div class='text-center'><b>{$name}</b></div>
					 </div>
					</div>
					";
				}
				?>
			</div>
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