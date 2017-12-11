<?php
/*
 * footer-container - basic footer container
 * 
 * 					  footer menu links are configured in config.php
 * 
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 */
 ?>
 
 <footer class="site-footer" role="contentinfo">
	<div class="site-info">
		<?= $_SESSION["config"]["footerTagLine"] ?>

		<nav class="footer-menu-links">
			<a class="footer-link" href="<?= $_SESSION["config"]["footerLinks"][0][1] ?>"><?= $_SESSION["config"]["footerLinks"][0][0] ?></a>
			<a class="footer-link" href="<?= $_SESSION["config"]["footerLinks"][1][1] ?>"><?= $_SESSION["config"]["footerLinks"][1][0] ?></a>
			<a class="footer-link" href="<?= $_SESSION["config"]["footerLinks"][2][1] ?>"><?= $_SESSION["config"]["footerLinks"][2][0] ?></a>
		</nav>

		<span class="trashtalk">Extant::Alpha v.0.1, Template By: <a href="http://extant.digital" target="_blank">Extant Digital LLC</a> &copy; <?php echo date("Y"); ?></span>
		
	</div>
</footer>