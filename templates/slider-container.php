<div class="sliderContainer">
	<div class="slider-main">
		
	</div>
</div>


<script>
	
	document.addEventListener("DOMContentLoaded", function(event) { 
		Slider.initSlider();
	});
	
	var Slider = {
		
		index: 0,
		
		initSlider: function(){

			var html = "";
			
			for(var i=0; i < Slider.slides.length; i += 1){
				
				html += '<div class="slide slide_'+ i +'">' +
				        ' <img src="' + Slider.slides[i] + '">' + 
				        '</div>'
			}
			
			$(".slider-main").append(html);
			
			Slider.initTimer();
		},
		
		initTimer: function(){
			
			setInterval(function(){
				
				Slider.showNext();
				
			}, <?= $c["slideSpeed"] ?>);
			
		},
		
		showNext: function(){

			$(".slide_" + Slider.index).fadeTo(1000, 0);
			
			Slider.index += 1;
			
			if(Slider.index > Slider.slides.length - 1){
				Slider.index = 0;
			}
			
			setTimeout(function(){
				$(".slide_" + Slider.index).fadeTo(1500, 100);
			}, 1200);

		},
		
		slides: <?= json_encode($c["slider1Content"]) ?>,
		
	};
	
</script>
