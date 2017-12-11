<?php

  include 'head.php';


  ?>

				</div>
				<div class="banner-grids">
					<div class="banner-img">
            <form class="" action="registered.php" method="post">

              <div class="form-group">
  							<label for="email">Email: </label>
  							<input required class="form-control" type="text" name="email" value="">
  							<br>
  							<label for="password">First Name: </label>
  							<input required class="form-control" type="text" name="fName" value="">
                <br>
  							<label for="password">Last Name: </label>
  							<input required class="form-control" type="text" name="lName" value="">
                <br>
  							<label for="password">Password: </label>
  							<input required class="form-control" type="password" name="password" value="">
                <br>

  							<button class="btn btn-primary btn-lg" type="submit" name="regBtn">Register</button>
  						</div>

            </form>

					</div>
					<div class="banner-left">


					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
	</div>




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
