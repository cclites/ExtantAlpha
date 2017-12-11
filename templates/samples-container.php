<?php
/*
 * samples-container - Section to display samples
 * 
 * 					   Sample images and sample videos are configured in config.php
 * 
 *					   Template allows three images per row, and automatically scales for multiple rows.
 *  						
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 * 
 */
?>


<div class="samplesContainer">
			
	<h2><?=  $_SESSION["config"]["samplesHeader"] ?></h2>
	
	
	<div class="row">
		<div class="imageSample col-md-4">
			<img class="sample" src="<?=  $_SESSION["config"]["sampleImages"][0] ?>">
		</div>
		
		<div class="imageSample col-md-4">
			<img class="sample" src="<?=  $_SESSION["config"]["sampleImages"][1] ?>">
		</div> 
		
		<div class="videoSample col-md-4">
			<iframe width="320"  height="200" src="https://www.youtube.com/embed/3tuvzTA_xtg" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	
	<!-- CAN INCLUDE VIDEOS ALSO -->
	<!--	 
	<div class="row">
		<div class="videoSample col-md-4">
			<iframe width="350"  height="200" src="<?=  $_SESSION["config"]["sampleVideos"][0] ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="videoSample col-md-4">
			<iframe width="350"  height="200" src="<?=  $_SESSION["config"]["sampleVideos"][1] ?>" frameborder="0" allowfullscreen></iframe>
		</div> 
		
		<div class="videoSample col-md-4">
			<iframe width="350"  height="200" src="<?=  $_SESSION["config"]["sampleVideos"][1] ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	-->
	
</div>