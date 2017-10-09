<?php

	require_once 'scripts/authorize.php';
	require_once 'scripts/database_connection.php';
	require_once 'scripts/view.php';
	require_once 'scripts/functions.php';

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
  <div class="form_description" align="center">
    <h2>Admin Edit Sidebar Images</h2>
    <p></p>
  </div>


  <div id="editvoltable"></div>

</div>
<div class="footer">
  Designed by Athens State University
</div>
</body>
</html>
