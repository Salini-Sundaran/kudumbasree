<?php /* Smarty version 2.6.26, created on 2022-04-19 07:44:49
         compiled from footer.tpl */ ?>
<br><br><br>
<!-- footer -->
	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<!-- <h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>Eiusmod Tempor inc
							<span>St Dolore Place,Kingsport 56777.</span>
						</p>
						<p class="phone">Phone : +1 123 456 789
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Follow</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Newsletter</h4>
					</div>
					<div class="footer-grid-info">
						<form action="#" method="post">
							<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2017 Royal Recipes . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div> -->
		</div>
	</div>
	<!-- //footer -->
	<?php echo '
	<script type="text/javascript" src="user/js/move-top.js"></script>
	<script type="text/javascript" src="user/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: \'toTop\', // fading element id
				containerHoverID: \'toTopHover\', // fading element hover id
				scrollSpeed: 1200,
				easingType: \'linear\' 
				};
			*/
								
			$().UItoTop({ easingType: \'easeOutQuart\' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="user/js/jarallax.js"></script>
<script type="text/javascript">
			/* init Jarallax */
			$(\'.jarallax\').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>
		'; ?>

</body>	
</html>