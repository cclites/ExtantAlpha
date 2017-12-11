<?php
/*
 * contact-container - contact form
 * 
 * 					   Site address info and phone number are configured in config.php
 * 
 * EXTANT::ALPHA v.0.1
 * Copyright: Extant Digial LLC
 */
 ?>
<div class="contactFormContainer">
			
	<div class="contactForm" id="contactForm">
		
		<div class="contactMessage col-md-5">
			<p><?= $_SESSION["config"]["contactMessage"] ?>
			    <br><br>
			    Call or send us a message to set up an appointment.
			    <br><br>
			    <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<span class="phone"><?= $_SESSION["config"]["phone"] ?></span>
			    <br>
			    <span><?= $_SESSION["config"]["address1"] ?></span>
			    <br>
			    <span><?= $_SESSION["config"]["address2"] ?></span>
			</p>
		</div>
		
		<div class="form col-md-7">
			<!--span>Name: </span-->
			<label>Name:</label><input type="text" name="contactName" class="contactName"/>
			<br>
			<!--span>Email Address: </span-->
			<label>Email Address:</label><input type="text" name="contactEmail" class="contactEmail"/>
			<br>
			<!--span>Message: </span-->
			<label>Message:</label><textarea cols="38" name="message" class="contactMessage" height="100"></textarea>
			<br>
			<button type="button" class="submitMessage btn btn-primary" disabled="disable">
				Submit Message
			</button>
		</div>

	</div>
</div>