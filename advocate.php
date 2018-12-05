<?php

	require_once("inc/functions.php");

?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Home Page -->
<html lang="en"><head>
<!-- header -->
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
    <!-- include for Centering slideshow imgs -->
<script src="http://malsup.github.io/jquery.cycle2.center.js"></script>
	<link href="inc/css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link href="inc/css/style.css" type="text/css" rel="stylesheet">
	<!-- include the css style sheet style.css -->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
h1 {
	color: #f57814;
}
body {
	background-color: #FFFFFF;
}
.style1 {
	font-size: xx-large
}
.style5 {font-size: 36}
.style7 {font-size: 18px}
    .style8 {font-size: 24px}
    .style9 {
	font-size: 18px;
	color: #52525B;
}
.style11 {color: #52525B}
    .style12 {font-size: 36px}
    </style>

<!-- include center plugin -->
<script src="http://malsup.github.io/jquery.cycle2.center.js"></script>
<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>

-->
    </style></head> <!-- close header -->
		<body>
		<?php get_home_banner() ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		  <?php get_main_menu(); ?>
		  <!-- Main Content -->

				<div class="content"> <!-- css division "content" -->
					<h2 align="center" class="style1"><!-- Header 1 style -->
					  <span class="style5"></span>
					  <!-- paragraph -->
		            </h2>
                 <div class="slideshow" 
    data-cycle-fx=scrollHorz
    data-cycle-timeout=6500
    data-cycle-center-horz=true
    data-cycle-center-vert=true
    >
    <?php 
			
				 if(contentExists("content1", 'advocatepageimg') != "")
				 {
				  echo '<img src="';
				  content("content1", 'advocatepageimg');
				  echo '" alt="advocatepage1" style="max-width:100%;height:auto">'; 
				  }
				  
				   if(contentExists("content2", 'advocatepageimg') != "")
				 {
				  echo '<img src="';
				  content("content2", 'advocatepageimg');
				  echo '" alt="advocatepage2" style="max-width:100%;height:auto">'; 
				  }
				  
				   if(contentExists("content3", 'advocatepageimg') != "")
				 {
				  echo '<img src="';
				  content("content3", 'advocatepageimg');
				  echo '" alt="advocatepage3" style="max-width:100%;height:auto">'; 
				  }
				  
				   if(contentExists("content4", 'advocatepageimg') != "")
				 {
				  echo '<img src="';
				  content("content4", 'advocatepageimg');
				  echo '" alt="advocatepage4" style="max-width:100%;height:auto">'; 
				  }
				?>
                 
	</div>
    <div class="content""> <!-- css division "content" -->
				       <h1>Advocate</h1> <!-- Header 1 style -->
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
                    <p>
					<ul style="font-size: 14px"> <!-- unordered list -->
						<li><span>Tell your friends about United Way of Athens-Limestone County and what we do.</span></br></br>
						<li><span>Get informed. Make it a point to learn about and discuss local issues with friends and family, then decide how you'll get involved.</span></br></br>
						<li><span>If you're passionate about education, income and health issues in our community, make some noise. Write a letter to the editor or comment on a local blog.</span></br></br>
						<li><span>Wear your <a href="https://liveunitedgear.corpmerchandise.com" target="_blank">LIVE UNITED Apparel.</a></span></br></br>
						<li><span>Send an e-mail or make a call to your elected officials about issues that you care about.</span></br></br>
						<li><span>Vote</span></br></br>
						<li><span>Friend us on <a href="https://www.facebook.com/pages/United-Way-Athens-Limestone/131401963542374?ref=ts" target="_blank">Facebook</a>.</span></br></br> <!-- Link to Facebook -->
						<li><span>Follow us on <a href="https://twitter.com/UWlimestone" target="_blank">Twitter</a>.</span></br></br> <!-- Link to Twitter -->
						<li><span>Connect. Join a neighborhood association or simply introduce yourself to a neighbor you haven't met.</span></br></br>
						<li><span>Get Involved. Sign up as a <a href="volunteer.php" target="_blank">volunteer</a>.</span></br></br> <!-- Link to Volunteer Page -->
					</ul>
					<hr> <!-- horizontal bar -->
                    <h2 align="center">United Way Gear Shop</h2> 
				<!-- Header 2 style -->
				<!-- paragraph -->
                <p align="center"><a href="https://www.unitedwaystore.com/#" target="_blank"><img src="images/UnitedWay_BannarAd-B_593x90.jpg" alt="Shop Online" width="593" height="90" style="border: none;"> <!-- picture with link to liveunitedgear.com --><a href="http://www.liveunitedgear.com/" target="_blank"><img src="images/gearshop.jpg" alt="Get Gear" width="150" height="75" style="border: none;"></a> <!-- picture with link to liveunitedgear.com -->
				</p>
				<hr> <!-- horizontal bar -->
				</div> <!-- close css division "content" -->
	    </div>  <!-- close css division "wrapper2" -->
        </div>
		<?php get_home_footer(); ?>
		<!-- Footer with info and links -->

		</body>
		<script src="js/bootstrap.js"></script>
</html>
