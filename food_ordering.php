
<?php

  include 'init.php';

  $mealset1 = ((isset($mealset1))?$mealset1:'');
  $mealset2 = ((isset($mealset2))?$mealset2:'');
  $mealset3 = ((isset($mealset3))?$mealset3:'');
  $mealset4 = ((isset($mealset4))?$mealset4:'');


  if(isset($_POST['orderBtn']) ){

    $mealset1 = ((isset($_POST['mealset1']))?$_POST['mealset1']:'');
    $mealset2 = ((isset($_POST['mealset2']))?$_POST['mealset2']:'');
    $mealset3 = ((isset($_POST['mealset3']))?$_POST['mealset3']:'');
    $mealset4 = ((isset($_POST['mealset4']))?$_POST['mealset4']:'');


    $delivery = ((isset($_POST['delivery']))?$_POST['delivery']:'');

    if((($mealset1=='') && ($mealset2=='') && ($mealset3=='') && ($mealset4==''))){
      header('Location: food_ordering.php');
    }


      ?>


      <!DOCTYPE HTML>
      <html>
      <head>
      <title>Runner App</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Auberge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!-- bootstrap -->
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all" />
      <!-- //bootstrap -->
      <!-- Custom Theme files -->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
      <link rel="stylesheet" href="css/lightbox.css">
      <script src="js/jquery-1.8.3.min.js"></script>
      <!--start-smoth-scrolling-->
      <!--webfonts-->
      <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <!--webfonts-->
      <link href="css/component.css" rel="stylesheet" type="text/css"  />
      <script type="text/javascript">
            jQuery(document).ready(function($) {
              $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
              });
            });
          </script>
      <!-- start-smoth-scrolling -->
      </head>
      <body class="cbp-spmenu-push">
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-30027142-1', 'w3layouts.com');
        ga('send', 'pageview');
      </script>

      <!--header     menu button section-->
        <div id="services"  >
            <div class="container">
              <div class="header-top">
                <div class="top-nav">
                  <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
                    <h3>Menu</h3>
                    <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="login.php">Login</a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="about.php">About</a></li>
                    </ul>
                  </nav>
                  <div class="main buttonset">
                      <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                      <button id="showRightPush"><img src="images/menu.png" alt=""/></button>
                      <!--<span class="menu"></span>-->
                  </div>
                  <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                  <script src="js/classie.js"></script>
                  <script>
                  var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                  showRightPush = document.getElementById( 'showRightPush' ),
                  body = document.body;

                  showRightPush.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( body, 'cbp-spmenu-push-toleft' );
                    classie.toggle( menuRight, 'cbp-spmenu-open' );
                    disableOther( 'showRightPush' );
                  };

                  function disableOther( button ) {
                    if( button !== 'showRightPush' ) {
                      classie.toggle( showRightPush, 'disabled' );
                    }
                  }
                 </script>
                </div>


              </div>


            </div>
        </div>



        <!-- food -->
        <div id="foodOrdering" class="gallery">
            <!-- container -->
            <div class="container">
              <div class="gallery-info">
                <h3>Food Ordering</h3>
              </div>
              <div class="gallery-grids-top">
                <div class="gallery-grids gallery-grids-middle">
                  <div class="form-group">
                    <label for="">Restaurant: Cafe Kg. E</label>
                  </div>
                </div>

                <form  action="order.php" method="post">

                  <label for="">You have ordered: </label>

                  <input readonly class="form-control" type="text" name="" value="<?=$mealset1. ((!empty($mealset2))?' + ':'') .$mealset2. ((!empty($mealset3))?' + ':'') .$mealset3 .((!empty($mealset4))?' + ':'') .$mealset4;?>">
                  <label for="">Delivery location: </label>
                  <input readonly class="form-control" type="text" name="" value="<?=$delivery;?>">


                  <br>
                  <br>
                  <br>


                  <div class="gallery-grids">
                      <div class="form-group">
                        <button id="" class="btn btn-primary btn-lg" type="submit" name="confirmBtn">Confirm</button>
                      </div>
                    <div class="clearfix"> </div>
                  </div>


                </form>

                <script src="js/lightbox-plus-jquery.min.js"></script>
              </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //food -->





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




      <?php
    }elseif (($mealset1=='') && ($mealset2=='') && ($mealset3=='') && ($mealset4=='')) {
      $msgs[] = "You have not select a mealset yet.";
      echo display_errors($msgs);


      ?>









<!DOCTYPE HTML>
<html>
<head>
<title>Runner App</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auberge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="css/lightbox.css">
<script src="js/jquery-1.8.3.min.js"></script>
<!--start-smoth-scrolling-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
</head>
<body class="cbp-spmenu-push">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>

<!--header     menu button section-->
	<div id="services"  >
			<div class="container">
				<div class="header-top">
					<div class="top-nav">
						<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
							<h3>Menu</h3>
							<ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="services.php">Services</a></li>
								<li><a href="about.php">About</a></li>
							</ul>
						</nav>
						<div class="main buttonset">
								<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
								<button id="showRightPush"><img src="images/menu.png" alt=""/></button>
								<!--<span class="menu"></span>-->
						</div>
						<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
						<script src="js/classie.js"></script>
						<script>
						var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
						showRightPush = document.getElementById( 'showRightPush' ),
						body = document.body;

						showRightPush.onclick = function() {
							classie.toggle( this, 'active' );
							classie.toggle( body, 'cbp-spmenu-push-toleft' );
							classie.toggle( menuRight, 'cbp-spmenu-open' );
							disableOther( 'showRightPush' );
						};

						function disableOther( button ) {
							if( button !== 'showRightPush' ) {
								classie.toggle( showRightPush, 'disabled' );
							}
						}
					 </script>
					</div>


				</div>


			</div>
	</div>



	<!-- food -->
	<div id="foodOrdering" class="gallery">
			<!-- container -->
			<div class="container">
				<div class="gallery-info">
					<h3>Food Ordering</h3>
				</div>
				<div class="gallery-grids-top">
					<div class="gallery-grids gallery-grids-middle">
						<div class="form-group">
							<label for="">Restaurant: Cafe Kg. E</label>
						</div>
					</div>

          <form class="" action="food_ordering.php" method="post">

            <div class="gallery-grids">
  						<div class="col-md-3 gallery-grid">
  							<input type="checkbox" name="mealset1" value="mealset1"> Meal Set 1
  							<a class="example-image-link" href="images/8.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/8.jpg" alt=""/></a>
  						</div>
  						<div class="col-md-3 gallery-grid">
  							<input type="checkbox" name="mealset2" value="mealset2"> Meal Set 2
  							<a class="example-image-link" href="images/5.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/5.jpg" alt=""/></a>
  						</div>
  						<div class="col-md-3 gallery-grid">
  							<input type="checkbox" name="mealset3" value="mealset3"> Meal Set 3
  							<a class="example-image-link" href="images/6.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/6.jpg" alt=""/></a>
  						</div>
  						<div class="col-md-3 gallery-grid">
  							<input type="checkbox" name="mealset4" value="mealset4"> Meal Set 4
  							<a class="example-image-link" href="images/7.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/7.jpg" alt=""/></a>
  						</div>

  						<div class="form-group">
  							<label for="">Delivery: </label>
  							<select required class="form-control" name="delivery">
  								<option value="Bus Stop Kg. A">Bus Stop Kg. A</option>
  								<option value="Bus Stop Kg. B">Bus Stop Kg. B</option>
  								<option value="Bus Stop Kg. C">Bus Stop Kg. C</option>
  								<option value="Bus Stop Kg. D">Bus Stop Kg. D</option>
  								<option value="Bus Stop Kg. E">Bus Stop Kg. E</option>

  							</select>
  						</div>
  						<div class="clearfix"> </div>
  					</div>
  					<div class="gallery-grids">
  							<div class="form-group">
  								<button id="" class="btn btn-primary btn-lg" type="submit" name="orderBtn">Order</button>
  							</div>
  						<div class="clearfix"> </div>
  					</div>


          </form>

					<script src="js/lightbox-plus-jquery.min.js"></script>
				</div>
			</div>
			<!-- //container -->
	</div>
	<!-- //food -->





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


<?php } ?>
