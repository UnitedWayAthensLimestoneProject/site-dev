<?php

	require_once 'scripts/authorize.php';
	require_once 'scripts/database_connection.php';
	require_once 'scripts/view.php';

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
	
	page_start("United Way of Athens/Limestone County EMD Admin Page", NULL, "admin",
			   $_REQUEST['success_message'], $_REQUEST['error_message']);

	admin_menu();
?>
		
		<div id="admin_form_container">
			<div class="form_description" align="center">
				<h2>United Way EMD Administration</h2>
				<p>This is where an administrator would come to add/edit users, add/edit skills, etc.</p>
			</div>	     
			<form id="form_admin" class="appnitro" method="post" action="">
        <div id="divLinks">
        <h2 id="h2Links">Edit</h2>
				<ul id="ulLinks">
		 			<li id="liLinks"><a href="view_event.php">Calendar</a></li>
    	  <li id="liLinks"><a href="admin_advocate.php">Advocate</a></li>
          <li id="liLinks"><a href="admin_homepage.php">Homepage</a></li>
          <li id="liLinks"><a href="admin_newsletter.php">Newsletter</a></li>
          <li id="liLinks"><a href="admin_sidebar.php">Sidebar</a></li>
          <li id="liLinks"><a href="admin_videos.php">Videos</a></li>
          <li id="liLinks"><a href="admin_resources.php">Resources</a></li>
          <li id="liLinks"><a href="admin_skills.php">Skills</a></li>
          <li id="liLinks"><a href="admin_users.php">Users</a></li>
          </ul> 				
        </div>
			</form>	
		</div>
		<div class="footer">
			Designed by Athens State University Computer Science Dept. 2018
		</div>
	</div>
	</div>
</body>
</html>