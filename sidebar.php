<?php
	require_once("inc/functions.php");
?>

<br>
<div id="wrapper2"> <!-- css division "wrapper2" -->
	<div id = "sideQuote"><br><br> <!-- css division "sidQuote" -->
              <div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-random="false" data-cycle-loop="100" data-index=1> <!-- using Cylce2, slideshow of photos -->
		   <ul>
				<li><img src=<?php sidebarPath("sidebar1"); ?> alt='sidebar1'></li>
				<li><img src=<?php sidebarPath("sidebar2"); ?> alt='sidebar2'></li>
				<li><img src=<?php sidebarPath("sidebar3"); ?> alt='sidebar3'></li>
				<li><img src=<?php sidebarPath("sidebar4"); ?> alt='sidebar4'></li>
				<li><img src=<?php sidebarPath("sidebar5"); ?> alt='sidebar5'></li>
				<li><img src=<?php sidebarPath("sidebar6"); ?> alt='sidebar6'></li>
				<li><img src=<?php sidebarPath("sidebar7"); ?> alt='sidebar7'></li>
				<li><img src=<?php sidebarPath("sidebar8"); ?> alt='sidebar8'></li>
		   </ul>
		</div>
		<div class="spacer heightThirteen"></div> <!-- css division "heightThirteen" for sidebar spacing-->
		<div id="center spacer"> <!-- css division "heightThirteen" for sidebar divider -->
		<div class="cycle-slideshow" data-cycle-fx="fadeout" data-cycle-timeout="10000" data-cycle-slides="li" data-cycle-loop="100" data-index=2> <!-- using Cylce2, slideshow of quotes -->
			<ul>
				<li><p id="text1" class="left">&ldquo;We make a living by what we get, we make a life by what we give.&rdquo;</p><p>&ndash;Winston Churchill</p></li>
				<li><p id="text2" class="left">&ldquo;You really can change the world if you care enough.&rdquo;</p><p>&ndash;Marion Wright Edelman</p></li>
				<li><p id="text3" class="left">&ldquo;Never doubt that a small group of thoughtful, committed citizens can change the world. Indeed it is the only thing that ever has.&rdquo;<br></p><p>&ndash;Margaret Mead</p></li>
		   		<li><p id="text4" class="left">&ldquo;The best way to find yourself is to lose yourself in the service of others.&rdquo;</p><p>&ndash;Ghandi</p></li>
		   		<li><p id="text5" class="left">&ldquo;No act of kindness, no matter how small, is ever wasted.&rdquo;</p><p>&ndash;Aesop</p></li>
		   		<li><p id="text6" class="left">&ldquo;Nobody can do everything, but everyone can do something.&rdquo;</p><p>&ndash;Author unknown</p></li>
		   		<li><p id="text7" class="left">&ldquo;Service to others is the rent you pay for your room here on earth.&rdquo;</p><p>&ndash;Mohammed Ali</p></li>
		   		<li><p id="text8" class="left">&ldquo;The best and most beautiful things in the world cannot be see or even touched - they must be felt with the heart.&rdquo;</p><p>&ndash;Helen Keller</p></li>
			</ul>
		</div><br><br>
        </div></div>  <!-- close css division "sidQuote" -->
