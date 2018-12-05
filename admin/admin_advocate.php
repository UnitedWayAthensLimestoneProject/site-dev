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
		<div class="adminDefaults"> <!-- css division "content" -->
			<div id="headerText" align="center">
					<h2>Admin - Edit Advocate Images</h2>
					<h3>For editing advocate page content</h3> <!-- Header 1 style -->
					<!-- PUT STUFF HERE -->
					<p><span>New uploaded images will overwrite old images</span></p>
					<p>New modified text will replace old text captions</p>
      </div> <!-- END headerText -->

<?php

	//after coming back from sidebarUpload.php
	//this displays notification to users
	if (isset( $_SESSION['note'] ) && $_SESSION['note'] == 'data_saved') {
	    echo "Successfully updated image.\n";
			unset( $_SESSION['note']);
	}
	elseif (isset( $_SESSION['note'] ) && $_SESSION['note'] == 'text_saved') {
	    echo "Successfully updated text.\n";
			unset( $_SESSION['note']);
	}
	elseif (isset( $_SESSION['note'] ) && $_SESSION['note'] == 'text_not') {
	    echo "Error: unable to update text.\n";
			unset( $_SESSION['note']);
	}
	elseif (isset( $_SESSION['note'] ) && $_SESSION['note'] != 'not_saved') {
		echo "Error: unable to update image.\n";
		unset( $_SESSION['note']);
	}
	else {
		unset( $_SESSION['note']);
	}
	echo "<br>";

 ?>

			<br>
			<!-- advocateimg1.jpg -->
			<h4 class="imageHeader">Image 1</h4>
			<br>
			<img src="<?php content("content1", "advocatepageimg"); ?>" alt="content" class="sideImg">

			<form action="contentUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sContent" value="content1">
                 <input type="hidden" name="sContentType" value="advocatepageimg">
				<br> <input id="btnAdmin" type="submit" value="Submit Image">
			</form>

			<br> <br>
			<!-- advocateimg2.jpg -->
			<h4 class="imageHeader">Image 2</h4>
			<br>
			<img src="<?php content("content2", "advocatepageimg"); ?>" alt="content" class="sideImg">

			<form action="contentUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sContent" value="content2">
                <input type="hidden" name="sContentType" value="advocatepageimg">
				<br> <input id="btnAdmin" type="submit" value="Submit Image">
			</form>

			<br> <br>
			<!-- advocateimg3.jpg -->
			<h4 class="imageHeader">Image 3</h4>
			<br>
			<img src="<?php content("content3", "advocatepageimg"); ?>" alt="content" class="sideImg">

			<form action="contentUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sContent" value="content3">
                 <input type="hidden" name="sContentType" value="advocatepageimg">
				<br> <input id="btnAdmin" type="submit" value="Submit Image">
			</form>

			<br> <br>
            <!-- advocateimg4.jpg -->
			<h4 class="imageHeader">Image 4</h4>
			<br>
			<img src="<?php content("content4", "advocatepageimg"); ?>" alt="content" class="sideImg">

			<form action="contentUpload.php" method="post" class="imageButtons" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="sContent" value="content4">
                 <input type="hidden" name="sContentType" value="advocatepageimg">
				<br> <input id="btnAdmin" type="submit" value="Submit Image">
			</form>

			<br> <br>
			
					<hr> <!-- horizontal bar -->
		</div> <!-- close css division "content" -->
  </div>
</div>
<div class="footer">
  Designed by Athens State University Computer Science Dept. 2018
</div>
</body>
</html>
