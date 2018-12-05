<?php 

	require_once("./inc/functions.php"); 
	
?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Advocate Page -->
<html lang="en">
	<head> <!-- header -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>United Way of Athens-Limestone County</title>
	<!-- Website Title -->
	<meta charset = "utf-8" />
	<link rel="shortcut icon" href="file:///C|/wamp64/www/images/uw_icon.ico" type="image/ico" />
	<!-- Website Icon -->
	<script src="inc/js/jquery/jquery.min.js"></script>
	<!-- include jQuery -->
	<script src="inc/js/jquery/jquery.cycle2.min.js"></script>
	<!-- include Cycle2 http://jquery.malsup.com/cycle2/ -->
	<script src="inc/js/jquery/jquery.cycle2.ie-fade.min.js"></script>
	<link href="inc/css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link href="inc/css/style.css" type="text/css" rel="stylesheet">
	</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->		
		<?php get_main_menu(); ?>

<!-- Main Content Starts Below-->				
				<div class="content"> <!-- css division "content" -->
					<h1>Advocate HI Caleb </h1> <!-- Header 1 style -->
					<!-- paragraph -->
					<p>You can make change happen with your voice:</p> 
					<ul> <!-- unordered list -->
						<li><span>Get informed.</span></li>
						<li><span>Find your voice.</span></li>
						<li><span>Tell your friends.</span></li>
					</ul>
				    <!-- paragraph -->
				    <p>Spread the word, further the mission and see the amazing process of change in action.</p>
					<!-- paragraph -->
					<p>United Way needs people who are passionate about education, income, health and want to raise awareness about the most critical needs in our community.<br>
				    We invite you to be part of the change. Together, united, we can inspire hope and create opportunities for a better tomorrow.</p>
					<hr> <!-- horizontal bar -->
					
					<h2>Ways You Can Advocate and LIVE UNITED:</h2> <!-- Header 2 style -->
					<ul style="font-size: 14px"> <!-- unordered list -->
						<span>Tell your friends about United Way of Athens-Limestone County and what we do.</span></br></br>
						<span>Get informed. Make it a point to learn about and discuss local issues with friends and family, then decide how you'll get involved.</span></br></br>
						<span>If you're passionate about education, income and health issues in our community, make some noise. Write a letter to the editor or comment on a local blog.</span></br></br>
						<span>Wear your LIVE UNITED T-Shirt.</span></br></br>
						<span>Send an e-mail or make a call to your elected officials about issues that you care about.</span></br></br>
						<span>Vote</span></br></br>
						<span>Friend us on <a href="https://www.facebook.com/pages/United-Way-Athens-Limestone/131401963542374?ref=ts" target="_blank">Facebook</a>.</span></br></br> <!-- Link to Facebook -->
						<span>Follow us on <a href="https://twitter.com/UWlimestone" target="_blank">Twitter</a>.</span></br></br> <!-- Link to Twitter -->
						<span>Connect. Join a neighborhood association or simply introduce yourself to a neighbor you haven't met.</span></br></br>
						<span>Get Involved. Sign up as a <a href="volunteer.php" target="_blank">volunteer</a>.</span></br></br> <!-- Link to Volunteer Page -->
					</ul>
					<hr> <!-- horizontal bar -->
				</div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" --> 
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
		<script src="js/bootstrap.js"></script>
</html>