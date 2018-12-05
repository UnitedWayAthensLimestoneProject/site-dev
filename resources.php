<?php

	require_once("./inc/functions.php");

?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Mission Page -->
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
	<!-- include the css style sheet style.css -->
	<style type="text/css">
<!--
.style1 {
	font-size: 36px
}
.style4 {font-size: 24px}
-->
    </style>
</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		<?php get_main_menu(); ?>
<!-- Main Content Starts Below-->
				<div class="content""> <!-- css division "content" -->
			           <h1><span class="style4">Resources:</span></h1>
			          <p class="style1">Find all our  forms and documents in one location!</p>
			          <p class="style1">
			            <?php 
					  show_resources('resources');
					?>
			          </p>
          <hr>
			          <h1><span class="style4">Volunteer Forms:</span></h1>
		              <blockquote>
		                <h1><a href="http://volunteer.unitedwayathenslimestone.com/welcome1.html" target= "_blank"> Volunteer Registration Form</a> </h1>
                        <h1><a href="http://uw_dev.athens.edu/forms/group_safety_brief.php" target= "_blank"> Group Application Form</a> </h1>
	                    <h1><a href="http://uw_dev.athens.edu/forms/group_safety_brief.php" target= "_blank"> Disaster Volunteer Registration Form</a> </h1>
	              </blockquote>
	              <!-- Header 1 style -->
			          <!-- paragraph -->
			          <hr>
                      <h1><span class="style4">Disaster Forms:</span></h1>
<!-- Header 1 style -->
<blockquote>
  <h1><a href="http://uw_dev.athens.edu/forms/welcome2.php" target= "_blank"> Damage Report Form</a> </h1>
  <h1><a href="http://uw_dev.athens.edu/forms/welcome1.php" target= "_blank"> Disaster Relief Form</a> </h1>
  <h1><a href="http://uw_dev.athens.edu/forms/group_safety_brief.php" target= "_blank"> Disaster Volunteer Registration Form</a> </h1>
</blockquote>
<!-- paragraph -->
<hr>
                      <h1><span class="style4" lang="EN-US" xml:lang="EN-US"> Donatation Forms:</span><span xml:lang="EN-US" lang="EN-US"> </span></h1>
                      <blockquote>
                        <h1><a href="http://uw_dev.athens.edu/forms/donationsform_consentform.php" target= "_blank"> Donation of Goods Concent Form</a> </h1>
                        <h1><a href="http://uw_dev.athens.edu/forms/donations_form.php" target= "_blank"> Donation of Goods Form</a> </h1>
                      </blockquote>
                  <!-- Header 1 style -->
                      <!-- paragraph -->
                      <hr>
                      <h1>&nbsp;</h1>
          </div> 
				<!-- close css division "content" -->
		</div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
		<script src="js/bootstrap.js"></script>
</html>
