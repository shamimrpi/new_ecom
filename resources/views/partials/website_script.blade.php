<!-- Jquery -->
<script src="{{asset('website')}}/js/jquery.min.js"></script>


    <script src="{{asset('website')}}/js/jquery-migrate-3.0.0.js"></script>
	<script src="{{asset('website')}}/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="{{asset('website')}}/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('website')}}/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="{{asset('website')}}/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('website')}}/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('website')}}/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('website')}}/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('website')}}/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="{{asset('website')}}/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('website')}}/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('website')}}/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('website')}}/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('website')}}/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="{{asset('website')}}/js/easing.js"></script>
	<!-- Active JS -->
	<script src="{{asset('website')}}/js/active.js"></script>
	<script type="text/javascript">
		$('.custom1').owlCarousel({
	    animateOut: 'slideOutDown',
	    animateIn: 'flipInX',
	    items:1,
	   	dots:true,
	    stagePadding:30,
	    smartSpeed:450,
	    dots: false,

	});
	</script>
		<script type="text/javascript">
		$('.custom-slider2').owlCarousel({
	    animateOut: 'slideOutDown',
	    animateIn: 'flipInX',
	    items:3,
	    margin:30,
	    stagePadding:30,
	    smartSpeed:450,
	    dots: false,
	    responsive:{
				0: {
					items:1,
				},
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:3,
				},
				1170: {
					items:4,
				},
			}
	});
	</script>
	
	<script type="text/javascript">
		const marrageDay = "14 August 2022";
		const dayDiv    = document.getElementById("days");
		const hoursDiv  = document.getElementById("hours");
		const minuteDiv = document.getElementById("minute");
		const secendDiv = document.getElementById("secend");
		function marrage(){
			const marrageday = new Date(marrageDay);
			const newDay = new Date();
			const remainingTime = (marrageday-newDay)/1000;
			
			const days = Math.floor(remainingTime/3600/24);
			const hours = Math.floor((remainingTime/3600)%24);
			const minutes = Math.floor((remainingTime/60)%60);
			const secends = Math.floor((remainingTime)%60);

			dayDiv.innerHTML = days;
			hoursDiv.innerHTML = hours;
			minuteDiv.innerHTML = minutes;
			secendDiv.innerHTML = secends;
			
			
		}
		marrage();
		setInterval(marrage,1000);

	</script>
	<script type="text/javascript">
		$('.all-category').on('click',function(){
		
			$( '.main-category' ).toggle();
			  $( '.main-category' ).css({
			    visibility:'visible',
			    cursor: "auto",
			    opacity:1,
			   transtion:'1s'
			  });


		});
	</script>
