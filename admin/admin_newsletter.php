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
	$inactive = 900;

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
					<h2>Admin - Update Newsletter</h2>
					<h3>For uploading Newsletter PDFs</h3> <!-- Header 1 style -->
					<!-- PUT STUFF HERE -->
					<!--<p><span>New uploaded images will overwrite old images</span></p>-->
					<!--<p>New modified text will replace old text captions</p>-->
      </div> <!-- END headerText -->

<?php

	

 ?>
 
<br> <br>
 
<h4 class="imageHeader">Newsletter</h4>
<?php if(contentExists("newsletter1", 'newsletter') != "") 
{?>
 	<a href="<?php content("newsletter1", 'newsletter')?>"><?php echo substr(contentExists("newsletter1", 'newsletter'), 11, strlen(contentExists("newsletter1", 'newsletter'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("newsletter1", 'newsletter')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="newsletter">
                 <input type="hidden" name="sContent" value="newsletter1">

	<input type="file" name="file" size="50" />

	<br />

	<input type="submit" value="Upload" />

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
