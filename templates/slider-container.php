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

			$(".slide_" + Slider.index).hide();
			
			
			Slider.index += 1;
			
			if(Slider.index > Slider.slides.length - 1){
				Slider.index = 0;
			}
			
			$(".slide_" + Slider.index).show();
		},
		
		slides: <?= json_encode($c["sliderContent"]) ?>,
		
	};
	
</script>
