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
    <h2>Admin - Edit Videos on Media Tab</h2>
    <p></p>
  </div>

<!-- stuff goes here -->

<?php

$query = "SELECT * FROM vids";
$result = mysql_query($query) or die(mysql_error());

$titles = array();
$urls = array();
$desc = array();

while ($row = mysql_fetch_assoc($result)) {
	array_push($titles, $row["title"]);
	array_push($urls, $row["youtubeURL"]);
	array_push($desc, $row["description"]);
}

//after coming back from vidToDB.php
//this displays notification to users
if (isset( $_SESSION['note'] ) && $_SESSION['note'] == 'data_saved') {
    echo "Successfully updated video.\n";
		unset( $_SESSION['note']);
}
elseif (isset( $_SESSION['note'] ) && $_SESSION['note'] != 'data_saved') {
	echo "Error: unable to update video.\n";
	unset( $_SESSION['note']);
}

?>

<br>
<pre>Video Title            Youtube URL               Description</pre>
<br>

<h4>Video 1</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[0]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[0]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[0]; ?>"/>
<input type="hidden" name="objId" value="1">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 2</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[1]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[1]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[1]; ?>"/>
<input type="hidden" name="objId" value="2">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 3</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[2]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[2]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[2]; ?>"/>
<input type="hidden" name="objId" value="3">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 4</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[3]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[3]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[3]; ?>"/>
<input type="hidden" name="objId" value="4">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 5</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[4]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[4]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[4]; ?>"/>
<input type="hidden" name="objId" value="5">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 6</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[5]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[5]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[5]; ?>"/>
<input type="hidden" name="objId" value="6">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 7</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[6]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[6]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[6]; ?>"/>
<input type="hidden" name="objId" value="7">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 8</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[7]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[7]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[7]; ?>"/>
<input type="hidden" name="objId" value="8">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 9</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[8]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[8]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[8]; ?>"/>
<input type="hidden" name="objId" value="9">
<input type="submit" value="Submit"/>
</form>
<br>

<h4>Video 10</h4>
<form action="vidToDB.php" method="post">
<input type="text" size="17" name="title" value="<?php echo $titles[9]; ?>"/>
<input type="text" size="17" name="url" value="<?php echo $urls[9]; ?>"/>
<input type="text" size="17" name="desc" value="<?php echo $desc[9]; ?>"/>
<input type="hidden" name="objId" value="10">
<input type="submit" value="Submit"/>
</form>
<br>

<p>Instructions:</p>
<p>In order to copy the correct YouTube link:</p>
<p>1) Underneath the YouTube video, click the SHARE button</p>
<p>2) Next, click the EMBED button</p>
<p>3) Copy all of the text given from the text area</p>
<p>4) Paste that text into the appropriate textbox above</p>
<br>
<p>Refer to images below for reference:</p>
<br>

<img src="videoInstructionsPics/instruct1.PNG" alt="Instruction 1">
<br>
<br>
<img src="videoInstructionsPics/instruct2.PNG" alt="Instruction 2">

<!-- End content -->

<div id="editvoltable"></div>

</div>
<div class="footer">
  Designed by Athens State University
</div>
</body>
</html>
