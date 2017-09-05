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
					<!-- test btns..
          <style>
          .customBtn {
              background-color: #ECF0F1;
              border: #000000;
              color: black;
              padding: 4px 20px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 13px;
              margin: 6px 5px;
              cursor: pointer;
              border-radius: 5px;
              border-style: solid;
              border-width: 1px;
          }
          </style>
            <input type="button" class="customBtn" value="Image 1"><br/>
            <input type="button" class="customBtn" value="Image 2"><br/>
            <input type="button" class="customBtn" value="Image 3"><br/>
            <input type="button" class="customBtn" value="Image 4"><br/>
            <input type="button" class="customBtn" value="Image 5"><br/>
            <input type="button" class="customBtn" value="Image 6"><br/>
            <input type="button" class="customBtn" value="Image 7"><br/>
            <input type="button" class="customBtn" value="Image 8"><br/>
            <input type="button" class="customBtn" value="Image 9"><br/>
					-->

						<form action="sidebarUpload.php" method="post" enctype="multipart/form-data">
							<input type="file" name="file"> <br> <input type="submit" value="Submit">
						</form>


					  	<hr> <!-- horizontal bar -->
				</div> <!-- close css division "content" -->
		  </div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		<!-- Footer with info and links -->

		</body>
		<script src="js/bootstrap.js"></script>
</html>
