<?php

	include 'head.php';
	include 'init.php';


	if(!is_logged_in()){
		$msg[] = "Please login to use services";
		$_SESSION['error_msg'] = display_errors($msg);
		header('Location: login.php');
	}

?>


  <!-- services -->
  <div id="services" class="services">
    <!-- container -->
    <div class="container">
      <div class="services-info">
        <h3>Services</h3>
      </div>
      <div class="services-top-grids">

        <div class="col-md-4 services-grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
           <div class="chrty">
             <figure class="icon">
              <a href="food_ordering.php"> <span class="glyphicon-icon glyphicon-glass" aria-hidden="true"> </span> </a>
            </figure>
            <h3>Food</h3>
            <p>Click the icon above to refquest runner service for ordering food.</p>
          </div>
        </div>
        <div class="clearfix"></div>
     </div>
     <div class="services-top-grids">
        <div class="col-md-4 services-grid" style="visibility: visible; -webkit-animation-delay: 0.4s;">
           <div class="chrty">
            <figure class="icon">
               <a href="return.php">  <span class="glyphicon-icon glyphicon-time" aria-hidden="true"></span> </a>
            </figure>
            <h3>Return</h3>
            <p>Click the icon above to to refquest runner service for returning your book.</p>
          </div>
        </div>


        <div class="clearfix"></div>
     </div>
    </div>
    <!-- //container -->
  </div>
  <!-- //services -->







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
