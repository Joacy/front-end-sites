<script src="js/app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.min.js"></script>

<script src="js/wow.min.js"></script>

<script type="text/javascript">
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		var width = $(window).width();
		if (width < 1200){
			if (scroll >= 116){
				$('#header1').addClass('header-fixa');
			} else {
				$('#header1').removeClass('header-fixa');
			}
		} else {
			if (scroll >= 150){
				$('#header').addClass('header-fixa');
			} else {
				$('#header').removeClass('header-fixa');
			}
		}
	});
</script>

<script type="text/javascript">
	$(function() {
		$(".abreMenu").click(function() {
			$('#menuHamburger').addClass("mostra");
		});
	});
	$(function() {
		$(".fechaMenu").click(function() {
			$('#menuHamburger').removeClass("mostra");
		});
	});
</script>

<script>
	$(document).ready(function(){
		$("#veja-mais-imagens").click(function(){
			$("#mais-imagens").collapse('show');
			$("#veja-mais-imagens").addClass('some');
		});
	});
</script>

<script>
	window.addEventListener('DOMContentLoaded',function(){  
		new ModalVideo(".js-video-youtube-btn",{channel:'youtube'});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".owl-carousel").owlCarousel();
	});
</script>

<script type="text/javascript">
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items:4,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			576:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			},
			1600:{
				items:5,
				nav:true,
				loop:true
			}
		}
	});
		// $('.play').on('click',function(){
		// 	owl.trigger('play.owl.autoplay',[1000])
		// })
		// $('.stop').on('click',function(){
		// 	owl.trigger('stop.owl.autoplay')
		// })
	</script>

	<script>
		new WOW().init();
	</script>