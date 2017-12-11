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

			</div>
			<div class="col-md-6 welcome-right">
<button id="enter-exit-fs" class="btn btn-primary btn-lg" type="button" name="startBtn" onclick="enterFullscreen()" >Start</button>


			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //welcome -->

  <script>
  document.cancelFullScreen = document.webkitExitFullscreen || document.mozCancelFullScreen || document.exitFullscreen;

  var elem = document.querySelector(document.webkitExitFullscreen ? "#fs" : "#fs-container");

  document.addEventListener('keydown', function(e) {
    switch (e.keyCode) {
      case 13: // ENTER. ESC should also take you out of fullscreen by default.
        e.preventDefault();
        document.cancelFullScreen(); // explicitly go out of fs.
        break;
      case 70: // f
        enterFullscreen();
        break;
    }
  }, false);

  function toggleFS(el) {
    if (el.webkitEnterFullScreen) {
      el.webkitEnterFullScreen();
    } else {
      if (el.mozRequestFullScreen) {
        el.mozRequestFullScreen();
      } else {
        el.requestFullscreen();
      }
    }

    el.ondblclick = exitFullscreen;
  }

  function onFullScreenEnter() {
    console.log("Entered fullscreen!");
    elem.onwebkitfullscreenchange = onFullScreenExit;
    elem.onmozfullscreenchange = onFullScreenExit;
  };

  // Called whenever the browser exits fullscreen.
  function onFullScreenExit() {
    console.log("Exited fullscreen!");
  };

  // Note: FF nightly needs about:config full-screen-api.enabled set to true.
  function enterFullscreen() {
    console.log("enterFullscreen()");
    elem.onwebkitfullscreenchange = onFullScreenEnter;
    elem.onmozfullscreenchange = onFullScreenEnter;
    elem.onfullscreenchange = onFullScreenEnter;
    if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    } else {
      if (elem.mozRequestFullScreen) {
        elem.mozRequestFullScreen();
      } else {
        elem.requestFullscreen();
      }
    }
    document.getElementById('enter-exit-fs').onclick = exitFullscreen;
  }

  function exitFullscreen() {
    console.log("exitFullscreen()");
    document.cancelFullScreen();
    document.getElementById('enter-exit-fs').onclick = enterFullscreen;
  }
  </script>
  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22014378-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>



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
