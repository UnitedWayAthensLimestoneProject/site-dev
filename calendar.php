<?php 

	require_once("./inc/functions.php");
	require_once("admin/db_connection.php");

	$query = "SELECT * FROM calendar ";
	$query .= "ORDER BY date DESC";
	$event_set = mysqli_query($connection, $query);


?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Calendar Page -->

<html lang="en">
	<head> 
	<!-- header -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>United Way of Athens-Limestone County</title>
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
	</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->		
		<?php get_main_menu(); ?>
<!-- Main Content Starts Below-->								

						<div id = "wrapper1">
						          <h1>Event Calendar</h1> <!-- Header 1 style -->
								
								 <?php
	
							if (mysqli_num_rows($event_set) > 0)	
							{ 
								while ($row = mysqli_fetch_assoc($event_set))
								{ ?>  <!-- Run this code while the number of events is greater than 0 -->

						          <table>
								  <tr>	<!-- Starts Head of table -->
								    <th>Date</th>
								    <th>Event</th>
								    <th>Location</th>
								  </tr>
								  <tr>
								    <td> <?php 
								 $time = $row['time'];
								 $date = $row['date'];
								 $datetime = date("m-d-Y g:i A", strtotime("$date $time"));
								 echo htmlentities($datetime);?> </td>
								    <td> <?php echo htmlentities($row['event']);?> </td>
								    <td><a href="http://maps.google.com/?q=<?php echo htmlentities($row['location']);?>" target="_blank"><?php echo htmlentities($row['location']); ?></a></td>
								  </tr>
								   
								</table>

								<?php 
								}
							}

							else
							{
								?>
								<div id = "panelError">	<!-- If no events this message occurs -->
								No Current Events
								<?php
							} 
							
							?>


				</div> <!-- close css division "wrapper1" -->
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->  			
		</body>
		<script src="js/bootstrap.js"></script>
</html>