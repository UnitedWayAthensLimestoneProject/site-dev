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
					<h2>Admin - Upload Resources</h2>
					<h3>For uploading forms and documents</h3> <!-- Header 1 style -->
					<!-- PUT STUFF HERE -->
					<!--<p><span>New uploaded images will overwrite old images</span></p>-->
					<!--<p>New modified text will replace old text captions</p>-->
      </div> <!-- END headerText -->

<?php

	

 ?>
 
<br> <br>
 
<h4 class="imageHeader">File One</h4>
<?php if(contentExists("resources1", 'resources') != "") 
{?>
 	<a href="<?php content("resources1", 'resources')?>"><?php echo substr(contentExists("resources1", 'resources'), 11, strlen(contentExists("resources1", 'resources'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("resources1", 'resources')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="resources">
                 <input type="hidden" name="sContent" value="resources1">

	<input type="file" name="file" size="50" />

	<br />

	<input type="submit" value="Upload" />

	</form>
    
<br> <br>

<h4 class="imageHeader">File Two</h4>
<?php if(contentExists("resources2", 'resources') != "") 
{?>
 	<a href="<?php content("resources2", 'resources')?>"><?php echo substr(contentExists("resources2", 'resources'), 11, strlen(contentExists("resources2", 'resources'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("resources2", 'resources')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="resources">
                 <input type="hidden" name="sContent" value="resources2">

	<input type="file" name="file" size="50" />

	<br />

	<input type="submit" value="Upload" />

	</form>
    
<br> <br>

<h4 class="imageHeader">File Three</h4>
<?php if(contentExists("resources3", 'resources') != "") 
{?>
 	<a href="<?php content("resources3", 'resources')?>"><?php echo substr(contentExists("resources3", 'resources'), 11, strlen(contentExists("resources3", 'resources'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("resources3", 'resources')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="resources">
                 <input type="hidden" name="sContent" value="resources3">

	<input type="file" name="file" size="50" />

	<br />

	<input type="submit" value="Upload" />

	</form>

<br> <br>    
 
<h4 class="imageHeader">File Four</h4>   
<?php if(contentExists("resources4", 'resources') != "") 
{?>
 	<a href="<?php content("resources4", 'resources')?>"><?php echo substr(contentExists("resources4", 'resources'), 11, strlen(contentExists("resources4", 'resources'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("resources4", 'resources')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="resources">
                 <input type="hidden" name="sContent" value="resources4">

	<input type="file" name="file" size="50" />

	<br />

	<input type="submit" value="Upload" />

	</form>

<br> <br>    

<h4 class="imageHeader">File Five</h4>
<?php if(contentExists("resources5", 'resources') != "") 
{?>
 	<a href="<?php content("resources5", 'resources')?>"><?php echo substr(contentExists("resources5", 'resources'), 11, strlen(contentExists("resources5", 'resources'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("resources5", 'resources')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="resources">
                 <input type="hidden" name="sContent" value="resources5">

	<input type="file" name="file" size="50" />

	<br />

	<input type="submit" value="Upload" />

	</form>
    	
<br> <br>  

<h4 class="imageHeader">File Six</h4>   
<?php if(contentExists("resources6", 'resources') != "") 
{?>
 	<a href="<?php content("resources6", 'resources')?>"><?php echo substr(contentExists("resources6", 'resources'), 11, strlen(contentExists("resources6", 'resources'))-15)?></a>
    <form action="admin_resource_delete.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sFilename" value="<?php content("resources6", 'resources')?>">
                 <input type="submit" value="Delete Resource"  />
      </form>
      <?php } ?>           
<form action="contentUpload.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="sContentType" value="resources">
                 <input type="hidden" name="sContent" value="resources6">

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
