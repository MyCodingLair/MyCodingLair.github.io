<?php

session_start();

if(!(isset($_SESSION['sessionUserName'])) ){
  $displayUserName = NULL;
  header("Location: index.html");
} else if(isset($_SESSION['sessionUserName'])){
  $displayUserName = $_SESSION['sessionUserName'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logomakr-1ufa1e-446x128.png" type="image/x-icon">
  <meta name="description" content="">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="http://localhost/new/deployToAzure/index2.php" class="navbar-logo"><img src="assets/images/logomakr-1ufa1e-446x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="https://mobirise.com"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="http://localhost/new/deployToAzure/contact.html">CONTACT</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/" aria-expanded="false">ABOUT ME</a><div class="dropdown-menu"><a class="dropdown-item" href="http://localhost/new/deployToAzure/myprofile.html">Profile</a><a class="dropdown-item" href="http://localhost/new/deployToAzure/contactInfo  .html">Contact Info</a><a class="dropdown-item" href="http://localhost/new/deployToAzure/education.html">Education</a><a class="dropdown-item" href="https://mobirise.com/"></a></div></li><li class="nav-item dropdown open"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/" aria-expanded="true">MY PROJECT</a><div class="dropdown-menu"><a class="dropdown-item" href="http://forums.mobirise.com/">UniRide</a><a class="dropdown-item" href="index.html#header4-4">Arduino</a><a class="dropdown-item" href="https://mobirise.com/"></a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="http://localhost/new/deployToAzure/logoutHandler.php">LOG OUT<br></a><a class="dropdown-item" >Welcome <?php echo $displayUserName; ?></a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">Site Maker</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow" id="header1-1" style="background-image: url(assets/images/jumbotron.jpg);">



    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">MyCodingLair</h1>
                    <p class="mbr-section-lead lead">Welcome to MyCodingLair. I've created this website using Mobirise. <br>Fell free to browse my website. Scroll down to view my previous project and current project. Cheers!</p>

                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#footer1-2"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-section mbr-section-hero mbr-section-full mbr-section-with-arrow" id="header4-4" data-bg-video="https://www.youtube.com/watch?v=mv7S8oDIc6s">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

      <div class="container">
          <div class="row">
              <div class="mbr-section col-md-10 col-md-offset-2 text-xs-right">

                <h1 class="mbr-section-title display-1">Arduino Line Maze solver Robot Car.</h1>
                <p class="mbr-section-lead lead">This is a pet project of mine where I try to create a robot car that can follow a line.. ..and ultimately solve a line maze using the Arduino platform.</p>
                <div class="mbr-section-btn"><a class="btn btn-lg btn-success" href="https://localhost/new/deployToAzure/arduino.php">LEARN MORE</a> </div>

              </div>
          </div>
      </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#msg-box5-8"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-section" id="msg-box5-8" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">


    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">



              <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                  <h3 class="mbr-section-title display-2">Old &nbsp;School Pc Component Marketplace</h3>
                  <div class="lead">

                    <p>This is another pet project of mine where I attempt to create a fully functional E-Commerce Website for purchasing old PC components.</p>

                  </div>

                  <div><a class="btn btn-primary" href="https://mobirise.com">MORE</a></div>
              </div>





              <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                  <div class="mbr-figure"><img src="assets/images/desktop.jpg"></div>
              </div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery4-9" data-filter="true" style="padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active">
        <ul>
            <li class="mbr-gallery-filter-all active">All</li>
        </ul>
    </div>

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="0" data-toggle="modal">



                            <img alt="" src="assets/images/bike-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="1" data-toggle="modal">



                            <img alt="" src="assets/images/code-man-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Creative" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="2" data-toggle="modal">



                            <img alt="" src="assets/images/coworkers-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="3" data-toggle="modal">



                            <img alt="" src="assets/images/desktop-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Awesome" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="4" data-toggle="modal">



                            <img alt="" src="assets/images/room-laptop-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Beautiful" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="5" data-toggle="modal">



                            <img alt="" src="assets/images/table-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Responsive" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="6" data-toggle="modal">



                            <img alt="" src="assets/images/windows-books-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div><div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-tags="Animated" data-video-url="false">
                        <div href="#lb-gallery4-9" data-slide-to="7" data-toggle="modal">



                            <img alt="" src="assets/images/working-area-small.jpg">

                            <span class="icon-focus"></span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery4-9">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery4-9" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="6"></li><li data-app-prevent-settings="" data-target="#lb-gallery4-9" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="" src="assets/images/bike.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/code-man.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/coworkers.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/desktop.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/room-laptop.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/table.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/windows-books.jpg">
                        </div><div class="carousel-item">
                            <img alt="" src="assets/images/working-area.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery4-9">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery4-9">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">

    <div class="container">
        <p class="text-xs-center">Copyright (c) 2017 MyCodingLair.</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>


  <input name="animation" type="hidden">
  </body>
</html>
