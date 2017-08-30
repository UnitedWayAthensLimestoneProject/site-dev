<?php

	require_once("./inc/functions.php");

?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Media Page -->
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
	</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		<?php get_main_menu(); ?>
<!--Sidebar Code-->
<?php include("sidebar.html");?>	
<!-- Main Content Starts Below-->
				<div id="content"> <!-- css division "content" -->
		          <h1>Videos</h1><!-- Header 1 style -->
		          <h3>United Way 2016</h3> <!-- Header 3 style -->
				  				  <p><iframe title="United Way 2016" width="560" height="315" src="https://www.youtube.com/embed/0AWIAxqKeNY" allowfullscreen></iframe></p> <!-- Embedded YouTube video -->
				  <!-- paragraph -->
				  <p>This video conatins a list of our local agencies and what services they provide for the community.</p><br/>
				  <hr> <!-- horizontal bar -->
		          <h3>Hospice of Limestone County- Camp Hope 2016 </h3> <!-- Header 3 style -->
				  				  <p><iframe title="Hospice of Limestone County- Camp Hope 2016" width="560" height="315" src="https://www.youtube.com/embed/r1017gBoQ38" allowfullscreen></iframe></p> <!-- Embedded YouTube video -->
				  <!-- paragraph -->
				  <p>This video is a slideshow of images from Camp Hope 2016</p><br/>
				  <hr> <!-- horizontal bar -->
		          <h3>Give a Dollar Campaign</h3> <!-- Header 3 style -->
				  <!-- paragraph -->
				  				  <p><iframe title="Give a Dollar Campaign" width="560" height="315" src="https://www.youtube.com/embed/9IuG8Nm6vQU" allowfullscreen></iframe></p> <!-- Embedded YouTube video -->
				  <!-- paragraph -->
				  <p>This video gives an inside look into the Give a Dollar campaign.</p><br/>
				  <hr> <!-- horizontal bar -->
				  <h3>Live United Video (United Way of Athens-Limestone County)</h3> <!-- Header 3 style -->
				  <p><iframe title="Live United Video (United Way of Athens-Limestone County)" width="560" height="315" src="http://www.youtube.com/embed/y_hEa8_mSh8" allowfullscreen></iframe></p> <!-- Embedded YouTube video -->
				  <!-- paragraph -->
				  <p>This is a video produced by the United Way of Athens-Limestone County in Athens, Al.<br/>
				  This was made possible only by the support of the community along with individuals who volunteered their energy, time and knowledge.
				  Thank you to all who helped to make this video possible!</p><br/>
				  <hr> <!-- horizontal bar -->
				  <h3>United Way of Athens-Limestone Recovery 2011</h3> <!-- Header 3 style -->
				  <!-- paragraph -->
				  <p><iframe title="United Way of Athens-Limestone Recovery 2011" width="560" height="315" src="http://www.youtube.com/embed/aMGcX4Q05Lc" allowfullscreen></iframe></p>
				  <p>This a video was produced by Mr. Jonathan Keenum. It documents the storms of April 27, 2011 and the recovery efforts that have followed.</p><br/> <!-- Embedded YouTube video -->
				  <hr> <!-- horizontal bar -->
				  <h3>United Way of Athens-Limestone County 2012</h3> <!-- Header 3 style -->
				  <!-- paragraph -->
				  <p><iframe title="United Way of Athens-Limestone County 2012" width="560" height="315" src="http://www.youtube.com/embed/iVAPGLILtt0" allowfullscreen></iframe></p> <!-- Embedded YouTube video -->
				  <hr> <!-- horizontal bar -->
				  <h1>Photos</h1> <!-- Header 1 style -->
				  <!--http://embedsocial.com/embed-gallery.php-->
				  <iframe src="http://embedsocial.com/facebook_album/album_photos/245161305499772" width="880" height="1500" style="border: none;"></iframe> <!-- Embedded Facebook Photo Album -->
				  <hr>	<!-- horizontal bar -->
				</div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
		<script src="js/bootstrap.js"></script>
</html>
