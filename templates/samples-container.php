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
	
	<!-- samples are appended here -->
	
</div>

<script>
	
	document.addEventListener("DOMContentLoaded", function(event) { 
		Samples.loadSamples();
	});
	
	var Samples = {
		
		loadSamples: function(){
			
			var html = "",
			    samples = <?= json_encode($c["samples"]) ?>;
			    
			    
			html += '<div class="row samples-row">';
			
			for(var i=0; i<3; i += 1){

				if(samples[i][0] === "images"){
					
					html += '<div class="imageSample sample-block col-md-4">' +
					        '  <img class="sample" src="'+ samples[i][1] +'">';
				}else{
					html += '<div class="videoSample sample-block col-md-4">' +
			                '<iframe class="sample" width="320" height="200" src="'+ samples[i][1] +'" frameborder="0" allowfullscreen></iframe>';
				}

				html +=  '  </div>';//close sample-block row

			}
			
			html += '</div>';	//close samples row
			
			$(".samplesContainer").append(html);
			
		},
		
	};
	
</script>