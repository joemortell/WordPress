
	</div> <!-- #Container -->
	
	</div> <!-- #Content -->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	
	<script type="text/javascript">
	
		var videoHeight =  $("section#video").height();
		$("#content-wrapper").css("top", videoHeight + "px");
		
		$(window).load(function() {
		
			/***** Infinite Scroll to top of page sections *****/
			
			$('a.view, nav a.work').click(function() {
			$('html, body').animate({ scrollTop: $('section#work').offset().top -100 }, 1000, 'easeInOutCubic' );
			});
			$('nav a.about').click(function() {
			$('html, body').animate({ scrollTop: $('section#about').offset().top -100 }, 1000, 'easeInOutCubic' );
			});
			$('nav a.team').click(function() {
			$('html, body').animate({ scrollTop: $('section#team').offset().top -100 }, 1000, 'easeInOutCubic' );
			});
			$('nav a.blog').click(function() {
			$('html, body').animate({ scrollTop: $('section#blog').offset().top -100 }, 1000, 'easeInOutCubic' );
			});
			$('nav a.contact').click(function() {
			$('html, body').animate({ scrollTop: $('section#contact').offset().top -100 }, 1000, 'easeInOutCubic' );
			});
			
			/***** Slowly move video title section upwards on page scroll *****/
		
			$(window).scroll(function() {
	   			 var x = $(window).scrollTop();
	    		$('section#video').css("top", parseInt(-x / 3) + "px");
           
			});
			
			/***** Resize the top of the work section to fit underneath the video *****/
			
			$(window).resize(function() {
				  var videoHeight =  $("section#video").height();
				  $("#content-wrapper").css("top", videoHeight + "px");
			});
			
		/***** Show/Hide nav links when past a certain point *****/
			
 		function showDiv() {
	        if ($(window).scrollTop() > 600 && $('header').data('positioned') == 'false') {
	        	$('nav a').css({"color": "#555"});
	            $('header').hide().css({"position": "fixed", "top": "0px", "background": "white"}).fadeIn().data('positioned', 'true');
	        } else if ($(window).scrollTop() <= 600 && $('header').data('positioned') == 'true') {
	            $('header').fadeOut(function() {
	            	$('nav a').css({"color": "white"});
	                $(this).css({"position": "relative", "top": "0px", "background": "none"}).show();
	            }).data('positioned', 'false');
	        }
	    }
		$(window).scroll(showDiv);
		$('header').data('positioned', 'false');
           
           
            
		});

	</script>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>

