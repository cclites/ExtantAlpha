<?php
/*
 * billboard-container - hero image container
 * 
 * 					     images and text are configure in config.php
 * 
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 */
 ?>
 
<div class="billboard">
	<div class="billboard-content">
		<img src="<?=  $_SESSION["config"]["heroImage"] ?>" alt="Site Logo">
	</div>
</div>

<div class="billboardContent">
	<h1><?=  $_SESSION["config"]["tagLine"] ?></h1>
	<img src="<?=  $_SESSION["config"]["overHeroImage"] ?>" alt="Hero Image">
</div>
