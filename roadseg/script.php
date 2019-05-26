<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<script src="js/app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>-->
		
		<script type="text/javascript">
			$(window).scroll(function(){
				var scroll = $(window).scrollTop();
				var width = $(window).width();
				if (width < 1200){
					if (scroll >= 87.75){
						$('#header1').addClass('header-fixa');
					} else {
						$('#header1').removeClass('header-fixa');
					}
				} else {
					if (scroll >= 109.05){
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

			/*$("#veja-mais-imagens").click(function(){
				$("#mais-imagens").collapse('hide');
			});*/
		});
	</script>

	<script>
		$(document).ready(function(){
			$("#veja-mais-videos").click(function(){
				$("#mais-videos").collapse('show');
				$("#veja-mais-videos").addClass('some');
			});

			/*$("#veja-mais-videos").click(function(){
				$("#mais-videos").collapse('hide');
			});*/
		});
	</script>

	<script>
		window.addEventListener('DOMContentLoaded',function(){  
			new ModalVideo(".js-video-youtube-btn",{channel:'youtube'});
		});
	</script>

	<script type="text/javascript">
		$(function() {
			$(".abreModal").click(function() {
				$('#formulario-modal').addClass("visivel");
				$('#caixa-externa').addClass("visivel");
			});
		});
		$(function() {
			$(".fechaModal").click(function() {
				$('#formulario-modal').removeClass("visivel");
				$('#caixa-externa').removeClass("visivel");
			});
		});
	</script>