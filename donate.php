<?php

	require_once("./inc/functions.php");

?>
<!DOCTYPE html>
<!-- unitedwayathenslimestone.com - Donate Page -->
<html lang="en">
	<head> <!-- header -->
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
	<!-- include the css style sheet style.css -->
	<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
    </style>
</head>
		<body>
		<?php get_home_banner(); ?>
		<div id="darkframe"> <!-- css division "darkframe" - this is the blue border around the content -->
		<?php get_main_menu(); ?>
<!-- Main Content Starts Below-->
				<div class="content"> <!-- css division "content" -->
					<h1>Make A Donation</h1> <!-- Header 1 style -->
					<!-- paragraph -->
					<p>LIVE UNITED. It's a credo. A mission. A goal. A constant reminder that when we reach
					  out a hand to one, we influence the condition of all. We build the strength of our
					  neighborhoods. We bolster the health of our communities. And we change the lives of
					  those who walk by us every day.</p>
					<!-- paragraph -->
					<p>If you would like to make a donation to benefit the United Way of Athens and Limestone County,
					please select the 'Donate' button to make a secure donation through PayPal. </p>
					<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button
style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'responsive',    // medium | large | responsive
  shape:  'pill',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
},

// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
client: {
  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
  production: '<insert production client id>'
},

payment: function (data, actions) {
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }
      ]
    }
  });
},

onAuthorize: function (data, actions) {
  return actions.payment.execute()
    .then(function () {
      window.alert('Payment Complete!');
    });
}
}, '#paypal-button-container');
</script>
					<h1>Donate Items</h1>
					<p>If you have any items you would like to donate we can help with that. A disaster can leave people without the basic materials they need, however YOU CAN HELP!!</p>
					<p>Below is a link that will take you to our donations form, where you can select what type of items
					  you wish to donate. <br> 
					  Fill out the donations form here:</p>
					<p><br>
					  <a class="button" href="forms/welcome3.php" target="_blank">Donation Form </a></p>
					<hr> <!-- horizontal bar -->

					<h1 align="center" class="style1">Thank you!</h1> 
					<!-- Header 1 style -->
				</div> <!-- close css division "content" -->
			</div>  <!-- close css division "wrapper2" -->
		<?php get_home_footer(); ?>
		</div> <!-- close css division "darkframe" - this is the blue border around the content -->
		</body>
		<script src="js/bootstrap.js"></script>
</html>
