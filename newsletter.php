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
			          <h1 class="style1">Newsletter</h1>
			          
			            <?php 
			
				 if(contentExists("newsletter1", 'newsletter') != "")
				 {
				  echo '<div align="center"><iframe src="http://docs.google.com/gview?url=http://'.$_SERVER['HTTP_HOST']; 

				  content("newsletter1", 'newsletter');
				  echo '&embedded=true" style="width:80%; height:80%;" frameborder="0"></iframe></div>'; 
				  }
					?>
			          
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
