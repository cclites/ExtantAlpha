<?php
/*
 * explainer-container - shows key points about the product or page. Uses Font-Awesome icons
 *                       for images.
 *
 * 						 Images and explainer text are configured in config.php
 * 
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 * 
 */
?>
<div class="belowFoldContent">
	<div class="explainer">
		
		<div class="col-md-12">
			
			<div class="col-md-4">
				<div class="wrapper">
					<i class="fa <?=  $_SESSION["config"]["explainerImages"][0] ?> fa-3x" aria-hidden="true"></i>
				</div>
				<p><?=  $_SESSION["config"]["explainerText"][0] ?></p>
			</div>
			
			<div class="col-md-4">
				<div class="wrapper">
					<i class="fa <?=  $_SESSION["config"]["explainerImages"][1] ?> fa-3x" aria-hidden="true"></i>
            	</div>
            	<p><?=  $_SESSION["config"]["explainerText"][1] ?></p>
			</div>
			
			<div class="col-md-4">
				<div class="wrapper">
				<i class="fa <?=  $_SESSION["config"]["explainerImages"][2] ?> fa-3x" aria-hidden="true"></i>
				</div>
				<p><?=  $_SESSION["config"]["explainerText"][2] ?></p>
			</div>

		</div>
		
	</div>
	
	
</div>