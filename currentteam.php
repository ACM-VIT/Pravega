<?php
$title="Pravega Racing - Current Team";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>
	.team-member-wrapper .overlay__background {
		background-color: rgba(255, 255, 255, 0.8);
	}
	.team-member-wrapper{
		cursor: pointer;
	}
	.team-member-wrapper-col{
		padding: 0px;
		margin: 0px;
	}
	.teamphoto{
		max-width: 100%;
		border-radius: 100%;
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
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Team</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>The A-team which makes it happen
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<section class="first-section container-fluid margin-bottom-20">
					<div class="grid-container-fluid">
						<h1 class="text-center">Current team</h1>
						<div class="row team-members-wrapper">
							<?php
							$teammember[0]=["Aagosh Mishra","Team Captain","https://www.facebook.com/aagosh.mishra?fref=ts"];
							$teammember[]=["Aarti Noroha","",""];
							$teammember[]=["Abhijai Tibrewala","Technical Coordinator","https://www.facebook.com/abhijai.tibrewala?fref=ts"];
							$teammember[]=["Akysht Kumar","",""];
							$teammember[]=["Arnav Patel","Management head","https://www.facebook.com/Arnavpatel.1996?fref=ts"];
							$teammember[]=["Ashish Chadda","Marketing Head","https://www.facebook.com/ashish.chadda?fref=ts"];
							$teammember[]=["Ayush Nahata","Composites Lead","https://www.facebook.com/nahata.ayush?fref=ts"];

							$teammember[]=["Dhananjay Singh","",""];

							$teammember[]=["Nimish Mehra","Vehicle Dynamicist",""];
							$teammember[]=["Nishant Dixit","R & D Lead","https://www.facebook.com/nishant.dixit.509?fref=ts"];
							$teammember[]=["Prathamesh Gunjal","",""];
							$teammember[]=["Rishabh Khanna","Powertrain Lead","https://www.facebook.com/RishabhKhanna0203?fref=ts"];

							$teammember[]=["Rishiraj Chauhan","",""];

							$teammember[]=["Sachin HT","",""];
							$teammember[]=["Shantanu Singh","Chassis and Assembly Lead","https://www.facebook.com/profile.php?id=100004831695623&fref=ts&ref=br_tf"];
							$teammember[]=["Shreyansh Garhewal","",""];
							$teammember[]=["Siddharth Sethi","Ergonomics Lead","https://www.facebook.com/siddharth.sethi.564?fref=ts"];
							$teammember[]=["Sushant Srivastav","Aerodynamics Lead",""];

							$teammember[]=["Tarun Bhatia","Design and Analysis Lead","https://www.facebook.com/tpbhatia197418?ref=br_rs"];
							$teammember[]=["Udit Saraswat","Vehicle Dynamics Lead","https://www.facebook.com/udit7897?fref=ts&ref=br_tf"];							
							$teammember[]=["Vaibhav Sharma","",""];
							
							$teammember[]=["Yashasavi Karnena","Electrical Lead","https://www.facebook.com/chinnu.avinnash?fref=ts"];
								sort($teammember);
							$no_team_members=count($teammember);
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$name=ucwords(strtolower($name));
								$fname=strtolower(substr($name,0,strpos($name," ")));

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname;
								if($name=="Nimish Mehra")
									$imglink="nimish2";
								
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col'>
									<div class='overlay team-member-wrapper'>
										<div class='overlay__background'></div>
										<div class='overlay__content text-center text-color-2'>
											<span class='overlay__content-heading'>{$name}</span>
											<span class='overlay__content-text'><b>{$role}</b></span>
											";
											if(!empty($fblink))
											{
												echo"
												<div class='profile__sharing-links--alt'>
													<a target='_blank' href='{$fblink}'><i class='fa fa-facebook profile__sharing-link'></i></a>
												</div>";
											}
											echo "
										</div>
										<img src='img/general/teams/currentteam/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}</b></div>
										<br>
									</div>
								</div>
								";
								
							}
							echo "</div>";
							
							$teammember=null;



							$teammember[0]=["Nimish Gupta","Marketing Executive",""];
							$teammember[]=["Naman Shukla","Marketing Executive",""];
							$teammember[]=["Nikhil Agrawal","Marketing Executive",""];
							$teammember[]=["Udhay Singh","",""];
							$teammember[]=["Kunal Aggrawal","",""];
							$teammember[]=["Saahil Vishwakarma","",""];
							//31
							$teammember[]=["Amogh Chourasia","",""];
							$teammember[]=["Rohit Aggrawal","",""];
							$teammember[]=["Ruchit Jain","",""];
							$teammember[]=["Manmohit Singh","",""];
							$teammember[]=["Sanchit Chaudhary","",""];
							$teammember[]=["Salil Madhav","",""];
							$teammember[]=["Rebanta Roy","",""];
							$teammember[]=["Rishabh Jain","",""];

							$teammember[]=["S Sooraj","",""];
							$teammember[]=["Adithya Venugopal","",""];
							$teammember[]=["Vishal Agrawal","",""];
							//41
							$teammember[]=["Uma Shankar","",""];
							$teammember[]=["Ashwarya Anupam","",""];
							$teammember[]=["Sai Teja","",""];
							$teammember[]=["Samarjeet Sharma","",""];
							$teammember[]=["Vibhor Malik","",""];
							$teammember[]=["Aman Agarwal","",""];
							$teammember[]=["Vignesh K","",""];
							$teammember[]=["Shantan Khandar","",""];
							$teammember[]=["Utkarsh Palav","",""];
							$teammember[]=["Apoorv Singh","",""];
							//51
							$teammember[]=["Saksham Bhardwaj","",""];
							$teammember[]=["Amitabh Das","",""];
							$teammember[]=["Moideen Shariq","",""];
								sort($teammember);
							echo "	<br><hr><br><div class='row team-members-wrapper'>";
							$no_team_members=count($teammember);
							for($i=0;$i<$no_team_members;$i++)
							{
								$name=$teammember[$i][0];
								$name=ucwords(strtolower($name));
								$fname=strtolower(substr($name,0,strpos($name," ")));

								$role="";
								if(isset($teammember[$i][1]) and !empty($teammember[$i][1]))
									$role=$teammember[$i][1];
								$fblink="";
								if(isset($teammember[$i][2]) and !empty($teammember[$i][2]))
									$fblink=$teammember[$i][2];

								$imglink=$fname;
								if($name=="Nimish Mehra")
									$imglink="nimish2";
								if($name=="Rishabh Jain")
									$imglink="rishabhjain";
								echo "
								<div class='col-md-2 col-sm-3 col-xs-6 team-member-wrapper-col'>
									<div class='overlay team-member-wrapper'>
										<div class='overlay__background'></div>
										<div class='overlay__content text-center text-color-2'>
											<span class='overlay__content-heading'>{$name}</span>
											<span class='overlay__content-text'><b>{$role}</b></span>
											";
											if(!empty($fblink))
											{
												echo"
												<div class='profile__sharing-links--alt'>
													<a target='_blank' href='{$fblink}'><i class='fa fa-facebook profile__sharing-link'></i></a>
												</div>";
											}
											echo "
										</div>
										<img src='img/general/teams/currentteam/{$imglink}.jpg' alt='{$fname}' class='overlay__image teamphoto'>
										<div class='text-center'><b>{$name}</b></div>
										<br>
									</div>
								</div>
								";
							}
							echo "</div>";
							?>
						</div>
					</div>
				</section>
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