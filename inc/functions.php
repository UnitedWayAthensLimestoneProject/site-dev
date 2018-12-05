<?php

echo '<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">';
echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">';

function get_social_media()
{
echo
 '<!-- include the css style sheet style.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<div class="social-bar">
  	<a href="https://www.facebook.com/United-Way-Athens-Limestone-131401963542374/?ref=ts" class="facebook"><i class="fa fa-facebook"></i></a> 
  	<a href="https://twitter.com/uwlimestone" class="twitter"><i class="fa fa-twitter"></i></a> 
  	<a href="https://www.instagram.com/unitedwayalc/" class="instagram"><i class="fa fa-instagram"></i></a> 
  	<a href="https://www.youtube.com/channel/UCXHE9e7AyeOJmiWXnV5zzSQ/featured" class="youtube"><i class="fa fa-youtube-play"></i></a> 
	<a href="http://www.unitedway.org" target="_blank"><img src="images/uwbrandLOGO.png" alt="LIVE UNITED" " class="unitedwaysicon" /></a> <!-- link to unitedway.org -->
	
</div>'
;
}

function get_main_menu()
{
	$page = basename($_SERVER['PHP_SELF']);
	echo '<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false" style="float: left;"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				     	</div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="defaultNavbar1">
				      <ul class="nav navbar-nav">
				        <li class='; if($page == "home.php"){echo '"active"';} echo'><a href="home.php">Home</a></li>
				        <li class="dropdown '; if($page == "mission.php" || $page == "vision.php" ||  $page == "faq.php" || $page == "staff.php" || $page == "directors.php" || $page == "contact.php"){echo 'active';} echo'"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li class='; if($page == "mission.php"){echo '"active"';} echo'><a href="mission.php">Our Mission</a></li>
				            <li class='; if($page == "vision.php"){echo '"active"';} echo'><a href="mission.php#vision">Our Vision</a></li>
				            <li class='; if($page == "staff.php"){echo '"active"';} echo'><a href="staff.php">Staff</a></li>
				            <li class='; if($page == "directors.php"){echo '"active"';} echo'><a href="directors.php">Board of Directors</a></li>
				            <li class='; if($page == "contact.php"){echo '"active"';} echo'><a href="contact.php">Contact Us</a></li>
							<li class='; if($page == "faq.php"){echo '"active"';} echo'><a style="background-color:#f57814" href="faq.php">FAQ</a></li>
									</ul>
								</li>
			            <li class="dropdown '; if($page == "calendar.php" || $page == "dayofcaring.php" || $page == "stuffthebus.php" || $page == "retiredrec.php" || $page == "toysfortots.php"){echo 'active';} echo'"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li class='; if($page == "calendar.php"){echo '"active"';} echo'><a href="calendar.php">Events Calendar</a></li>
				            <li class='; if($page == "dayofcaring.php"){echo '"active"';} echo'><a href="dayofcaring.php">Day of Caring</a></li>
				            <li class='; if($page == "stuffthebus.php"){echo '"active"';} echo'><a href="stuffthebus.php">Stuff the Bus</a></li>
				            <li class='; if($page == "retiredrec.php"){echo '"active"';} echo'><a href="retiredrec.php">Retired Educator Recognition</a></li>
				            <li class='; if($page == "toysfortots.php"){echo '"active"';} echo'><a href="toysfortots.php">Toys for Tots</a></li>
			              </ul>
			            </li>
			            <li class='; if($page == "partners.php"){echo '"active"';} echo'><a href="partners.php">Partners</a></li>
			            <li class='; if($page == "newsletter.php"){echo '"active"';} echo'><a href="newsletter.php">Newsletter</a></li>
			            <li class="dropdown '; if($page == "students.php" || $page == "athens.php" || $page == "calhoun.php"){echo 'active';} echo'"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Students<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li class='; if($page == "students.php"){echo '"active"';} echo'><a href="students.php">Student Home</a></li>
				            <li class='; if($page == "athens.php"){echo '"active"';} echo'><a href="athens.php">Athens State</a></li>
							<li class='; if($page == "calhoun.php"){echo '"active"';} echo'><a href="calhoun.php">Calhoun</a></li>
			              </ul>
			            </li>
			            <li class="dropdown '; if($page == "volunteer.php" || $page == "group.php" || $page == "front_desk.php"){echo 'active';} echo'"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Get Involved<span class="caret"></span></a>
				          <ul class="dropdown-menu">
						  <li class='; if($page == "advocate.php"){echo '"active"';} echo'><a href="advocate.php">Advocate</a></li>
				            <li class='; if($page == "volunteer.php"){echo '"active"';} echo'><a href="volunteer.php">Volunteer - Registration</a></li>
		              		<li class='; if($page == "front_desk.php"){echo '"active"';} echo'><a href="front_desk.php">Volunteer - Front Desk Program</a></li>
		              		<li><a style="background-color:#f57814" href="donate.php">Make A Donation Today!</a></li>
			              </ul>
			            </li>
						<li class='; if($page == "resources.php"){echo '"active"';} echo'><a href="resources.php">Resources</a></li>
			             <li class="dropdown '; if($page == "disaster_relief.php" || $page == "disaster_volunteer.php" || $page == "damage_report.php"){echo 'active';} echo'"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Disaster Assistance<span class="caret"></span></a>
				          <ul class="dropdown-menu">
							<li class='; if($page == "damage_report.php"){echo '"active"';} echo'><a href="damage_report.php">Damage Report Form</a></li>
							   <li class='; if($page == "disaster_relief.php"){echo '"active"';} echo'><a href="disaster_relief.php">Disaster Relief Form</a></li>
							<li class='; if($page == "disaster_volunteer.php"){echo '"active"';} echo'><a href="disaster_volunteer.php">Disaster Volunteer Registration</a></li>
		                   </ul>
			            </li>
							<li class='; if($page == "donate.php"){echo '"active"';} echo'><a  href="donate.php"><img style="background-color:transparent; margin:0px 0px 0px 0px" src="/images/btn_donate_LG.png" /></a></li>
			          </ul>
			        </div>
				    <!-- /.navbar-collapse -->
			      </div>
				  <!-- /.container-fluid -->

			  </nav>
';

get_social_media();
return;
}

function get_home_banner()

{
echo '<div id = "wrapper"> <!-- css division "wrapper" -->
  <center>
  <div class="overlay">
  <a href = "donate.php"   title ="Give">
     <img src="/images/uwbanner3_give.jpg" alt="Give" class="header_img" />
      <img src="/images/uwbanner3_give_rollover2.jpg" class="overlay-rollover" alt="Give">
      </a>
    </div>
    <div class="overlay">
  <a href = "advocate.php"   title ="Advocate">
     <img src="/images/uwbanner3_advocate.jpg" alt="Advocate" class="header_img" />
      <img src="/images/uwbanner3_advocate_rollover.jpg" class="overlay-rollover" alt="Advocate">
      </a></div>
    <div class="overlay">
  <a href = "volunteer.php"   title ="Volunteer">
     <img src="/images/uwbanner3_volunteer.jpg" alt="Volunteer" class="header_img" />
      <img src="/images/uwbanner3_volunteer_rollover.jpg" class="overlay-rollover" alt="Volunteer">
      </a></div>
    
      </br>
       <div class="overlay">
       <a href = "home.php"   title ="Athens-Limestone County - Home">
     <img src="/images/uwbanner3_liveUnited_home2.jpg" alt="Athens-Limestone County - Home" class="header_img" />
      <img src="/images/uwbanner3_liveUnited_home_rollover2.jpg" class="overlay-rollover" alt="Athens-Limestone County - Home">
      </a></div>
      </center>
  </div>
'
;

return;

}

function get_home_footer()
{

echo '<!-- Footer with info and links -->
		 <div id="footer"> <!-- css division "footer" -->
		  	<p>
		      <a href="home.php">Home</a> <!-- link to Home page -->
		      <a href="mission.php">About</a> <!-- link to Mission page -->
		      <a href="calendar.php">Events</a> <!-- link to Events page -->
		      <a href="partners.php">Partners</a> <!-- link to Partners page -->
		      <a href="students.php">Students</a> <!-- link to Student page -->
		      <a href="media.php">Media</a> <!-- link to Media page -->
		      <a href="volunteer.php">Get Involved</a> <!-- link to Volunteer page -->
			  <a href="disaster_assistance.php">Disaster Assistance </a> <!-- link to disaster assistance page -->
		      <a href="donate.php">Donate</a> <!-- link to Donate page -->
					<!-- For testing purposes, changing address of admin page to local machine -->
			  <!-- <a href="http://www.unitedwayathenslimestone.com/admin/login.php">Admin</a> <!-- link to Admin page -->
				<a href="admin/login.php">Admin</a>
		    </p>
		    <!-- Street Address & link to Google Maps -->
			<p><a href="https://maps.google.com/maps?q=419+South+Marion+Street,+Athens,+AL&daddr=419+S+Marion+St,+Athens,+AL+35611&hl=en&safe=strict&hnear=419+S+Marion+St,+Athens,+Alabama+35611&t=m&geocode=%3BCRcHfh36VeuXFe3-EgIdy-zQ-im5UdqSaItiiDGYGqDdFVcFPA&z=14" target="_blank"> 419 South Marion Street	 |  Athens, AL 35611</a></p>
			<!-- Phone number & link to call if viewing with a smart phone -->
			<p><a href="tel:2562332323">256-233-2323</a></p>
			<p> <!-- Links and Icons -->
			
		  </div> <!-- close css division "footer" -->
';
return;
}

//looks for "sidebar1" image (can be any image file type)
//returns name of file if found, returns dne.jpg if not found
function sidebarPath($name)
{
	//define('ROOT_PATH', dirname(__DIR__) . '/');
	if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__) . '/');
	$dir = ROOT_PATH.'sidebarImgs';
	$filesAry = scandir($dir);

	foreach ($filesAry as $file) {
		if(strpos($file, $name) !== false) {
			$fpath = '/sidebarImgs/' . $file;
			echo $fpath;
			return;
		}
	}

	echo "/sidebarImgs/dne.jpg";
}


function content($name, $subdir)
{

    $counter = 1;
	//define('ROOT_PATH', dirname(__DIR__) . '/');
	if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__) . '/');
	$dir = ROOT_PATH. $subdir;
	
	$filesAry = scandir($dir,  1);
   
	foreach ($filesAry as $file) {

	    if(strpos($name, "resources")!==false)
		{
		  
		  if(strpos($name, strval($counter)) !==false )
		  {
		    $fpath = '/'.$subdir .'/'. $file;
			if (strlen($file) > 4)	
			 echo $fpath;
			 return;
			 
		  }
		 } 
		else
		{
		if(strpos($file, $name) !== false)  {
			$fpath = '/'.$subdir .'/'. $file;
			if (strlen($file) > 4)	
			   echo $fpath;
			   return;
			  
			}  
		  
		   	
		}
		$counter = $counter + 1;
	}

	//echo "/sidebarImgs/dne.jpg";
}

function contentExists($name, $subdir)
{
   $counter = 1;
	//define('ROOT_PATH', dirname(__DIR__) . '/');
	if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__) . '/');
	$dir = ROOT_PATH. $subdir;
	
	$filesAry = scandir($dir, 1);

	foreach ($filesAry as $file) {
	
	 if(strpos($name, "resources")!== false)
		{
          
		  if(strpos($name, strval($counter))!==false)
		  {
		   
		    $fpath = '/'.$subdir .'/'. $file;
			if (strlen($file) > 4)		
			  return $fpath;
			
			}
			 
		  
		}
		else
		{
	    
		if(strpos($file, $name) !== false)  {
			$fpath = '/'.$subdir .'/'. $file;
			if (strlen($file) > 4)	
			    return $fpath;
			   
			  
		  }
		}
		$counter = $counter + 1;
	}

	//echo "/sidebarImgs/dne.jpg";
}


function show_resources($subdir)
{
	if (!defined('ROOT_PATH')) define('ROOT_PATH', dirname(__DIR__) . '/');
	$dir = ROOT_PATH. $subdir;
    $counter = 1;
				
					
	$filesAry = scandir($dir, 1);
					
				
	foreach ($filesAry as $file)
	 {


		$fpath = '/'.$subdir .'/'. $file;
		if (strlen($file) > 4)	
			{
			 if ($counter == 1)
				 {
					 echo'
						 <blockquote>';
				  }	
				  echo '<h3><a href="'. $fpath  .'">'. substr( $fpath , 11,  $fpath -4).'</a></p>';
				  $counter = $counter + 1;
			 } 
       
         }  if ($counter > 0 )

            echo '</blockquote>';
			}

					  


?>

