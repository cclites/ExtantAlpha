<?php

/*
 * Mail - simple class to send email after user fills out contact form.
 */

sendMail($_POST);

function sendMail($request){
	
	$c = include_once '../config.php';

	$cEmail = $request['email'];
	$name = $request['name'];
	$subject = "WEB CONTACT";
	$message = $request['message'];
	$email = $c["contactEmail"];
	
	/* Sends the mail and outputs a string if the mail is successfully sent, or the error string otherwise. */
	if (mail($email, $subject, "FROM: " . $name . ":\n RETURN EMAIL: " . $cEmail . "\n" . $message) && 
	         $name != "" && $subject != "" && $cEmail != "" && 
	         (preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i", $cEmail))) {
	
		$messageArray = array('status' => 1, 'message' => "Your message has been sent.");
		echo json_encode($messageArray);
		
	} else {
		$messageArray = array('status' => 0, 'message' => "Your message could not be sent.");
		echo json_encode($messageArray);
	}
}
	
?>