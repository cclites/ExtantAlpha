<?php
/*
 * fixed-header-container - contact form
 * 
 * 					   		Logo is configured in config.php
 * 
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 * 
 */
 ?>

<div class="fixed_header">
	<div class="floating_container">
		<div class="logo_container col-md-4">
			<span class="offset_color text_logo"><?= $_SESSION["config"]["logo"] ?></span>
		</div>
		<div class="header_spacer col-md-1"></div>
		<div class="header_info col-md-5">
			<span class="local_time"></span>
			<span class="local_weather"></span>
		</div>
		<div class="cta-wrapper">
			<button class="btn cta btn-warning">Contact Us</button>
		</div>
	</div>
</div>
