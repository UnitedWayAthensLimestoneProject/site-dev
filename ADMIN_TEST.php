<?php
	require_once("inc/functions.php");
?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Home Page -->
<html lang="en"><head>
	<!-- header -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Test Page</title>
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

	</head> <!-- close header -->
		<body>
		<?php get_home_banner() ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		<?php get_main_menu(); ?>
<!--Sidebar Code-->
<?php include("sidebar.html");?>
<!-- Main Content -->

				<div id="content"> <!-- css division "content" -->
					<h1>Admin Test Page - for editing sidebar content</h1> <!-- Header 1 style -->
          <!-- PUT STUFF HERE -->
					<p>New uploaded images will overwrite old images (but doesn't work yet)</p>
					<br>

					<!-- style class to resize sidebar images -->
					<style>
					.sideImg {
						position: relative;
						float: left;
						width:  140px;
						height: 100px;
						background-position: 50% 50%;
						background-repeat:   no-repeat;
						background-size:     cover;
					}
					</style>

					<!-- sidebar1.jpg -->
					<img src="sidebarImgs/sidebar1.jpg" alt="sidebar1.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file">
						<input type="hidden" name="sBar" value="sidebar1">
						<br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar2.jpg -->
					<img src="sidebarImgs/sidebar2.jpg" alt="sidebar2.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar3.jpg -->
					<img src="sidebarImgs/sidebar3.jpg" alt="sidebar3.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar4.jpg -->
					<img src="sidebarImgs/sidebar4.jpg" alt="sidebar4.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar5.jpg -->
					<img src="sidebarImgs/sidebar5.jpg" alt="sidebar5.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar6.jpg -->
					<img src="sidebarImgs/sidebar6.jpg" alt="sidebar6.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar7.jpg -->
					<img src="sidebarImgs/sidebar7.jpg" alt="sidebar7.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- sidebar8.jpg -->
					<img src="sidebarImgs/sidebar8.jpg" alt="sidebar8.jpg" class="sideImg">

					<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
						<input type="file" name="file"> <br> <input type="submit" value="Submit">
					</form>

					<br> <br>
					<!-- END sidebar images and forms -->

					  	<hr> <!-- horizontal bar -->
				</div> <!-- close css division "content" -->
		  </div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		<!-- Footer with info and links -->

		</body>
		<script src="js/bootstrap.js"></script>
</html>
