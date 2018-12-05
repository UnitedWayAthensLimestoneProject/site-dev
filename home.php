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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
.style4 {font-size: 36px}
.style5 {font-size: 36}

.style6 {
	color: #f57814;
	font-weight: bold;
}
    </style>


<!-- include center plugin -->
<script src="http://malsup.github.io/jquery.cycle2.center.js"></script>
<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    </style></head> <!-- close header -->
		<body>
		<?php get_home_banner() ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		  <?php get_main_menu(); ?>
		  <!-- Main Content -->
				<div class="content"> <!-- css division "content" -->
               
					<h2 align="center" class="style1"><span class="style4"><img src = "/images/uwbanner3_alc.jpg"/></span>
					  <!-- Header 1 style -->
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
			
				 if(contentExists("content1", 'homepageimg') != "")
				 {
				  echo '<img src="';
				  content("content1", 'homepageimg');
				  echo '" alt="homepage1" style="max-width:100%;height:auto">'; 
				  }
				  
				   if(contentExists("content2", 'homepageimg') != "")
				 {
				  echo '<img src="';
				  content("content2", 'homepageimg');
				  echo '" alt="homepage2" style="max-width:100%;height:auto">'; 
				  }
				  
				   if(contentExists("content3", 'homepageimg') != "")
				 {
				  echo '<img src="';
				  content("content3", 'homepageimg');
				  echo '" alt="homepage3" style="max-width:100%;height:auto">'; 
				  }
				?>
	</div>
				        <!-- picture -->
		          </p>
						 <div align="center" style= "padding-top:20px">
						   <p align="left">Welcome to the United Way Athens-Limestone County! United Way is a non-profit organization throughout the country that operates on fundraising and support from volunteers. Here at United Way, we envision
						 a world where all individuals and families achieve their human potential through education, income
						 stability, and healthy lives. </p>
			      </div>
<hr> <!-- horizontal bar -->
			     <h1>Advancing the Common Good</h1> <!-- Header 1 style -->
			        <!-- paragraph -->
				      <p>Everyone deserves opportunities to have a good life: a quality education that leads to a stable job, enough income to support a family through retirement, and good health.</p>
				      <!-- paragraph -->
				      <p>That’s why United Way’s work is focused on the building blocks for a good life:</p>
						<ul> <!-- unordered list -->
					      <li><span><span class="style6">Education</span> – Helping Children and Youth Achieve Their Potential</span></li>
					      <li><span><span class="style6">Income</span> – Promoting Financial Stability and Independence</span></li>
					      <li><span><span class="style6">Health</span> – Improving People’s Health</span></li>
				       </ul>
				       <!-- paragraph -->
					  <p>Advancing the common good is less about helping one person at a time and more about changing systems to help all of us. We are all connected and interdependent. We all win when a child succeeds in school, when families are financially stable, when people are healthy.</p>
					  <!-- paragraph -->
					  <p>United Way’s goal is to create long-lasting changes by addressing the underlying causes of these problems. Living united means being a part of the change. It takes everyone in the community working together to create a brighter future.
					  	<br>Give. Advocate. Volunteer. LIVE UNITED.</p>
					  	<hr> <!-- horizontal bar -->
				</div> <!-- close css division "content" -->
	    </div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		<!-- Footer with info and links -->

		</body>
		<script src="js/bootstrap.js"></script>
</html>
