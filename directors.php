<?php

	require_once("./inc/functions.php");

?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Volunteer Page -->
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
    <style>
	.newspaper {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
	}
	.style1 {font-size: 24px}
    .style2 {
	font-size: 18px
}
    </style>
	</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		<?php get_main_menu(); ?>
<!-- Main Content Starts Below-->
<h2 align="center" class="style1">Board of Directors</h2>
<p align="center">&nbsp;</p>
<!-- Header 2 style -->
				<div class="content"> <!-- css division "content" -->
				<div class="newspaper">
                <!-- paragraph -->
				<p class="style2">
					Annette Barnes</br>
					Kay Burlingame</br>
					Betty Christopher</br>
					Joyce Counter</br>
					Dr. Robert Glenn</br>
					Tim Green</br>
					Jack Greenhaw</br>
					Tjokro Hermanto</br>
					Tom Hill</br>
					Jeff Hodges</br>
					Trey Holladay</br>
					Jackie Jackson</br>
					Floyd Johnson</br>
					Ernie Jones</br>
					Kurt Leopard</br>
					Guy McClure</br>
					Stanley Menfee</br>
					Randy Moore</br>
					Ray Neese</br>
					Beth Patton</br>
					Susan Riddle</br>
					Dr. Tom Sisk</br>
					Adam Smith</br>
					Dr. Denny Smith</br>
					Gary Van Wagnen</br>
					Mike Willis</br></br>
				</p>
                <p class="style2" style="color: #f57814"><u>Ex Officio</u></br></p>
				<p class="style2">
					Ronnie Marks</br>
					Mark Yarborough</br>
					Angie Nazaretian (Emeritus)</br>
				</p>
</div>
				<hr> <!-- horizontal bar -->
  </div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
		<script src="js/bootstrap.js"></script>
</html>
