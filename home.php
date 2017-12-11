<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
  include 'head.php';
?>


  <br>
	<!-- welcome -->
	<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 welcome-left">
				<h2>Welcome..</h2>
				<h5>RunnerApp</h5>
				<p>Welcome to RunnerApp, here you can book for runner services for Food and Returning books to the library. Login to start using our services or Sign Up if you haven't register.</p>
			</div>
			<div class="col-md-6 welcome-right">
        <a href="login.php"> <button class="btn btn-primary btn-lg" type="button" name="loginBtn">Login</button> </a>
        <a href="register.php"> <button class="btn btn-primary btn-lg" type="button" name="signUpBtn">Sign Up</button> </a>

			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //welcome -->





	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>
