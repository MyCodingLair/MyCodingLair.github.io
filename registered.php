<?php

  include 'head.php';
  include 'init.php';



  if(isset($_POST['regBtn']) ){

    $email = ((isset($_POST['email']))?$_POST['email']:'');
    $fName = ((isset($_POST['fName']))?$_POST['fName']:'');
    $lName = ((isset($_POST['lName']))?$_POST['lName']:'');
    $password = ((isset($_POST['password']))?$_POST['password']:'');

    // var_dump($email);
    // var_dump($fName);
    // var_dump($lName);
    // var_dump($password);
    //
    // die();


    if( !($dbConnect->query("INSERT INTO user(email, fName, lName, password) VALUES('$email', '$fName', '$lName', '$password')")) ){
      $dbConnect->errno;
    }else{


?>



</div>
<div class="banner-grids">
  <div class="banner-img">


      <div class="form-group">
        <label for="email">Thank you.</label>
        <br>
        <label for="password">You are now registered user. </label>
        <br>

        <a href="login.php"> <button class="btn btn-primary btn-lg" type="button" name="okBtn">OK</button> </a>
      </div>


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


<?php


}



}

 ?>
