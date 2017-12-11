<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
require_once 'init.php';
include 'head.php';

  if(isset($_POST['loginBtn'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $result = mysqli_fetch_assoc($dbConnect->query("SELECT * FROM user WHERE email='{$email}'"));


    if($pass != $result['password'] ){
      $msgs[] = "Inccorect password";
      echo display_errors($msgs);
    }
    if($pass == $result['password']){
      login($result['userID']);
      header('Location: services.php');
    }

  }



?>

				</div>
        <br>
        <br>
        <br>
				<div class="banner-grids">
            <form class="" action="login.php" method="post">

              <div class="form-group">
  							<label for="email">Email: </label>
  							<input required class="form-control" type="text" name="email" value="">
  							<br>
  							<label for="password">Password: </label>
  							<input required class="form-control" type="password" name="password" value="">
  							<br>
                <br>
                <button class="btn btn-primary btn-lg" type="submit" name="loginBtn">Login</button>
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
