<?php

	require_once 'scripts/authorize.php';
	require_once 'scripts/database_connection.php';
	require_once 'scripts/view.php';
	require_once 'scripts/functions.php';
	$siteRoot = $_SERVER['DOCUMENT_ROOT'];
	require_once $siteRoot.'/inc/functions.php';

	// Start session to enable user authorization and control.
	session_start();

	// set time-out period (in seconds)
	$inactive = 600;

	// check to see if $_SESSION["timeout"] is set
	if (isset($_SESSION["timeout"]))
	{
		// calculate the session's "time to live"
		$sessionTTL = time() - $_SESSION["timeout"];
		if ($sessionTTL > $inactive)
		{
			session_destroy();
			$msg = "Your session has timed out due to inactivity. Please log in again to continue.";
			header("Location: login.php?error_message=" . $msg);
			exit();
		}
	}

	$_SESSION["timeout"] = time();

	// Authorize users to access page. Function is found in authorize.php.
	// Current user groups are Administrators, Volunteers, and Agencies
	// authorize_user(); will allow anyone that is logged in to access the page
	authorize_user(array("Administrators"));


	page_start("United Way of Athens/Limestone County EMD Admin Page", $javascript, "searchAll",
			   $_REQUEST['success_message'], $_REQUEST['error_message']);

         admin_menu();

?>

<div id="admin_form_container">
  <div class="form_description" align="left">



		<div class="content"> <!-- css division "content" -->
			<div id="headerText" align="center">
					<h2>Admin - Edit Sidebar Images</h2>
					<h3>For editing sidebar content</h3> <!-- Header 1 style -->
					<!-- PUT STUFF HERE -->
					<p><span>New uploaded images will overwrite old images</span></p>
					<p>New modified text will replace old text captions</p>
		</div> <!-- END headerText -->
			<br>

			<style>
				.sideImg
					 {
						position: relative;
						margin-left: 2%;
						width:  40%;
						height: 35%;
						background-repeat:   no-repeat;
						background-size:     cover;
						margin-bottom:2%;
					}
				</style>

			<!-- sidebar1.jpg -->
			<h4 class="imageHeader">Image 1</h4>
			<br>
			<img src=<?php sidebarPath("sidebar1"); ?> alt="sidebar1" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar1">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText1" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar2.jpg -->
			<h4 class="imageHeader">Image 2</h4>
			<br>
			<img src=<?php sidebarPath("sidebar2"); ?> alt="sidebar2" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar2">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText2" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar3.jpg -->
			<h4 class="imageHeader">Image 3</h4>
			<br>
			<img src=<?php sidebarPath("sidebar3"); ?> alt="sidebar3" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar3">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText3" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar4.jpg -->
			<h4 class="imageHeader">Image 4</h4>
			<br>
			<img src=<?php sidebarPath("sidebar4"); ?> alt="sidebar4" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar4">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText4" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar5.jpg -->
			<h4 class="imageHeader">Image 5</h4>
			<br>
			<img src=<?php sidebarPath("sidebar5"); ?> alt="sidebar5" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar5">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText5" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar6.jpg -->
			<h4 class="imageHeader">Image 6</h4>
			<br>
			<img src=<?php sidebarPath("sidebar6"); ?> alt="sidebar6" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar6">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText6" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar7.jpg -->
			<h4 class="imageHeader">Image 7</h4>
			<br>
			<img src=<?php sidebarPath("sidebar7"); ?> alt="sidebar7" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar7">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText7" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- sidebar8.jpg -->
			<h4 class="imageHeader">Image 8</h4>
			<br>
			<img src=<?php sidebarPath("sidebar8"); ?> alt="sidebar8" class="sideImg">

			<form action="sidebarUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sBar" value="sidebar8">
				<br> <input type="submit" value="Submit Image">
			</form>
			<form action="changeText.php" method="post" class="text-box">
			<input type="text" size="20" class="form-control" name="userText8" />
			<input type="submit" value="Submit Text" />
			</form>

			<br> <br>
			<!-- END sidebar images and forms -->

					<hr> <!-- horizontal bar -->
		</div> <!-- close css division "content" -->


    <p></p>
  </div>


  <div id="editvoltable"></div>

</div>
<div class="footer">
  Designed by Athens State University
</div>
</body>
</html>
