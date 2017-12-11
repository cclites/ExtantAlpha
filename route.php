<?php

	$func = "";
 	$call = $_SERVER['HTTP_REFERER'];
 
	if (strpos($call, 'api/') !== false) {
	    dispatch($_GET);
	}else{
		return json_encode(array('status'=>0, 'message'=>'Page does not exist.'));
	}

function dispatch($request){
	
	$request = $request["request"];
	
	
}



?>