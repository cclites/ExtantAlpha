<?php
   
    session_start();
	include_once('route.php');
	$c = include_once 'config.php';
	$_SESSION["config"] = $c

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="<?=  $_SESSION["config"]["metaDescription"] ?>">

        <title><?=  $_SESSION["config"]["title"] ?></title>
        
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
		
		<?php 
		
			//each page
			
			include_once 'templates/fixed-header-container.php';
			
			if ($page === "home"){
				
				include_once 'templates/billboard-container.php';
				
				//landing page content
				if($_SESSION["config"]["showExplainer"]){
					include_once 'templates/explainer-container.php';
				}
				
				if($_SESSION["config"]["showSlider"]){
					include_once 'templates/slider-container.php';
				}
				
				if($_SESSION["config"]["showSamples"]){
					include_once 'templates/samples-container.php';
				}
				
				if($_SESSION["config"]["showContact"]){
					include_once 'templates/contact-container.php';
				}
			}else{
				echo "<style> body{ padding-top: 0; }</style>";
				
				include_once 'pages/' . $page . ".php";
			}

			//each page
			include_once 'templates/footer-container.php';
			include_once "css/css.cuss"; //custom js
			
		?>
		
		
		

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<script src="js/site.js"></script>
		

	</body>
</html>