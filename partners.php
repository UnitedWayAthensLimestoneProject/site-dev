<?php 

	require_once("./inc/functions.php"); 
	
?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Partners Page -->
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
			<br> 
			<div id="wrapper2"> <!-- css division "wrapper2" -->
				<div id = "sideQuote"><br><br> <!-- css division "sidQuote" --> 
                    <div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-random="true" data-cycle-loop="100" data-index=1> <!-- using Cylce2, slideshow of photos -->
					   <ul>
							<li><img src="images/sidebar1.jpg" alt='sidebar1'/></li>
							<li><img src="images/sidebar2.jpg" alt='sidebar2'/></li>
							<li><img src="images/sidebar3.jpg" alt='sidebar3'/></li>
							<li><img src="images/sidebar4.jpg" alt='sidebar4'/></li>
							<li><img src="images/sidebar5.jpg" alt='sidebar5'/></li>
							<li><img src="images/sidebar6.jpg" alt='sidebar6'/></li>
							<li><img src="images/sidebar7.jpg" alt='sidebar7'/></li>
							<li><img src="images/sidebar8.jpg" alt='sidebar8'/></li>
					   </ul> 
					</div>
					<div class="spacer heightThirteen"></div> <!-- css division "heightThirteen" for sidebar spacing-->
					<div id="center spacer"> <!-- css division "heightThirteen" for sidebar divider -->
					<div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-loop="100" data-index=2> <!-- using Cylce2, slideshow of quotes -->
						<ul>
							<li><p class="left">&ldquo;We make a living by what we get, we make a life by what we give.&rdquo;</p><p>&ndash;Winston Churchill</p></li>
							<li><p class="left">&ldquo;You really can change the world if you care enough.&rdquo;</p><p>&ndash;Marion Wright Edelman</p></li>
							<li><p class="left">&ldquo;Never doubt that a small group of thoughtful, committed citizens can change the world. Indeed it is the only thing that ever has.&rdquo;<br></p><p>&ndash;Margaret Mead</p></li>
					   		<li><p class="left">&ldquo;The best way to find yourself is to lose yourself in the service of others.&rdquo;</p><p>&ndash;Ghandi</p></li>
					   		<li><p class="left">&ldquo;No act of kindness, no matter how small, is ever wasted.&rdquo;</p><p>&ndash;Aesop</p></li>
					   		<li><p class="left">&ldquo;Nobody can do everything, but everyone can do something.&rdquo;</p><p>&ndash;Author unknown</p></li>
					   		<li><p class="left">&ldquo;Service to others is the rent you pay for your room here on earth.&rdquo;</p><p>&ndash;Mohammed Ali</p></li>
					   		<li><p class="left">&ldquo;The best and most beautiful things in the world cannot be see or even touched - they must be felt with the heart.&rdquo;</p><p>&ndash;Helen Keller</p></li>
						</ul>	  
					</div><br><br>                      			
              </div></div>  <!-- close css division "sidQuote" --> 			
<!-- Main Content Starts Below-->	
				<div id="content"> <!-- css division "content" -->
				<h1>Programs funded by the United Way of Athens-Limestone Country.</h1> <!-- Header 1 style -->
					<button type="button" onclick="window.open('http://www.redcrossrelief.org/')"> 	<img class = "half" src="images/rc_icon.png" alt="RedCross"/><br/></button> <!-- button with link and picture -->
					<button type="button" onclick="window.open('http://casalimestonecounty.org/services.html')"><img class = "half" src="images/casa_icon.png" alt="CASA"/><br/></button> <!-- button with link and picture -->
					<br/>					
					<button type="button" onclick="window.open('http://www.learn-to-read.org/')"> 	<img class = "half" src="images/l2r_icon.png" alt="READ"/><br/></button> <!-- button with link and picture -->
					<button type="button" onclick="window.open('http://www.csna.org/')"><img class = "half" src="images/crisis_icon.png" alt="CrisisServices"/><br/></button> <!-- button with link and picture -->
					<br/>
					<button type="button" onclick="window.open('http://www.aces.edu/main/submenus/resourceareas/4-H-youth.tmpl')"> <img class = "half" src="images/4h_icon.png" alt="4h"/><br/></button> <!-- button with link and picture -->
					<button type="button" onclick="window.open('http://www.mhcnca.org/')">			<img class = "half" src="images/mhc_icon.png" alt="MentalHealth"/><br/></button> <!-- button with link and picture -->
					<br/>					
					<button type="button" onclick="window.open('http://girlscoutsnca.org/')">		<img class = "half" src="images/gs_icon.png" alt="Girl Scouts"/><br/></button> <!-- button with link and picture -->
					<button type="button" onclick="window.open('http://www.al-rsvp.com/')">			<img class = "half" src="images/rsvp_icon.png" alt="RSVP"/><br/></button> <!-- button with link and picture -->
					<br/>					
					<button type="button" onclick="window.open('http://bgcnal.com/')">				<img class = "half" src="images/bgc_icon.png" alt="Boys and Girls Club"/><br/></button> <!-- button with link and picture -->
					<button type="button" onclick="window.open('http://www.habitatalc.org')">		<img class = "half" src="images/habitat_icon.png" alt="Habitat for Humanity"/><br/></button> <!-- button with link and picture -->
					<br/>					
					<button type="button" onclick="window.open('http://salvationarmyusa.org/')">	<img class = "half" src="images/sa_icon.png" alt="Salvation Army"/><br/></button>	<!-- button with link and picture -->
					<button type="button" onclick="window.open('http://www.scouting.org/')">		<img class = "half" src="images/bsa_icon.png" alt="BSA"/><br/></button> <!-- button with link and picture -->
					<br/>					
					<button type="button" onclick="window.open('http://www.athenslimestonehospice.org/')"> <img class = "half" src="images/hospice_icon.png" alt="Hospice"/><br/></button> <!-- button with link and picture -->
					<button type="button" onclick="window.open('http://www.uso.org/')">				<img class = "half" src="images/uso_icon.png" alt="USO"/><br/></button> <!-- button with link and picture -->
					
					<button type="button" onclick="window.open('https://www.frcmo.org/')">				<img class = "half" src="images/frc_icon.png" alt="Family Resource Center"/><br/></button> <!-- button with link and picture -->
					<hr> <!-- horizontal bar -->						 	
				</div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" -->  
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
	<script src="js/bootstrap.js"></script>
</html>