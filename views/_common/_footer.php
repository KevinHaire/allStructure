<!-- FOOTER CONTENT -->
<footer class="mainFooter">
	<div class="contain">
		<div class="footerPod">
			<h2>Contact Us</h2>
			<hr>
			<p>
				4601 49th Street<br>
				Hardisty, Alberta T0B 1V0<br>
				Phone: 780-888-5518<br>
				info@allstructure.ca
			</p>
		</div>
	</div>
</footer>

<!-- END OF FOOTER CONTENT -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="js/build/_bower.js"></script>
<script type="text/javascript" src="js/build/script.build.js"></script>

<script>
	setTimeout(function(){
	  var si = $('#gallery-1').royalSlider({
    addActiveClass: true,
    arrowsNav: false,
    controlNavigation: 'none',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 340,
    loop: true,
    fadeinLoadedSlide: false,
    globalCaption: true,
    keyboardNavEnabled: true,
    globalCaptionInside: false,

	    visibleNearby: {
	      enabled: true,
	      centerArea: 0.5,
	      center: true,
	      breakpoint: 650,
	      breakpointCenterArea: 0.64,
	      navigateByCenterClick: true
	    }
	  }).data('royalSlider');	
	}, 1000);
	

</script>