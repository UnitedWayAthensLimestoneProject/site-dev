<?php
	
	//Need to build a database to connect this to
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
	// Current user groups are Administrators, emails, and Agencies
	// authorize_user(); will allow anyone that is logged in to access the page
	authorize_user(array("Administrators"));




	//Query Database for any current entries

	$eventID = find_event_by_id($_GET["id"]);

	if (isset ($_POST['submit']))
	{
		$datedb = mysql_prep($_POST["date"]);
		$timedb = mysql_prep($_POST["time"]);
		$locationdb = mysql_prep($_POST["location"]);
		$eventdb = mysql_prep($_POST["event"]);
		$id = $eventID["id"];
		
		
		$query= "UPDATE calendar SET ";
		$query .= "date = '{$datedb}', ";
		$query .= "time = '{$timedb}', ";
		$query .= "event = '{$eventdb}', ";
		$query .= "location = '{$locationdb}' ";
		$query .= "WHERE id = {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($connection, $query);
	
		
		redirect_to("view_event.php"); 
		

		
		
	}



	function redirect_to($new_location)
	{
		header("Location: " . $new_location);
		exit;
	}
	
	function mysql_prep($string)
	{
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}

	

	function find_event_by_id($event_id)
	{
		global $connection;
		
		$safe_event_id = mysqli_real_escape_string($connection, $event_id);
		
		$query = "SELECT * ";
		$query .= "FROM calendar ";
		$query .= "WHERE id = {$safe_event_id} ";
		$query .= "LIMIT 1";
		$event_set = mysqli_query($connection, $query);
		if ($eventret= mysqli_fetch_assoc($event_set))
		{
			return $eventret;
		}
		else
		{
			return null;
		}
	

	}

	
	page_start("United Way of Athens/Limestone County EMD Admin Page", NULL, "editEvent",
			   $_REQUEST['success_message'], $_REQUEST['error_message']);

	admin_menu();


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>



<div class="admin_form_container">

	<div class="form_description" align="center">
				<h2>Event Administration</h2>
				<p>Allows Administrators to edit events.</p>
			</div>
			
			<div id="eventTable"></div>
			
	<form action = "edit_event.php?id=<?php echo urlencode($eventID["id"]); ?>" method= "post">
				
		<input type = "date" name = "date" value="<?php echo htmlspecialchars($eventID["date"]); ?>"required>
		
		<input type = "time" name = "time" value="<?php echo htmlspecialchars($eventID["time"]); ?>"required>
		
 		<input type = "text" name = "event" value="<?php echo htmlspecialchars($eventID["event"]); ?>"  maxlength="100" required>
 			
		<input type = "text" name = "location" value="<?php echo htmlspecialchars($eventID["location"]); ?>" maxlength="150" required><br><br>
 						
 		<input type="submit" name = "submit" value = "Update"> 				
	</form>
	
		
</div>
	
	

<body>
</body>
</html>