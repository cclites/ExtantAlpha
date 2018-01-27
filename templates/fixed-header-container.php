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
			<a href="/ExtantAlpha"><span class="offset_color text_logo"><?= $_SESSION["config"]["logo"] ?></span></a>
			<br>
			<?php if($_SESSION["config"]["showHeaderNav"]) {?>
			<nav class="header-nav"></nav>
			<?php } ?>
		</div>
		<div class="header_spacer col-md-1"></div>
		<div class="header_info col-md-5">
		</div>
		<div class="cta-wrapper">
			<button class="btn cta btn-warning">Contact Us</button>
		</div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function(event) { 
		HeadNav.initNav();
	});
	
	const HeadNav = {
		
		initNav: function(){
			
			if(HeadNav.navs.length > 1){	
				var html='';
				for(var i=0; i<HeadNav.navs.length; i += 1){
					html += '<a class="header-navs" href="?page=' + HeadNav.navs[i][1] + '">' + HeadNav.navs[i][0] + '</a>';
				}
			}
			
			$(".header-nav").append(html);
		},
		
		navs: <?= json_encode($c["headerNavs"]) ?>,
		
	};
</script>
