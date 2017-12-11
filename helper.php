<?php


function display_errors($errors){
  $display = '<div class="col-md-12">
                  <div class="alert alert-danger alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    <ul class="bg-danger"><span class="text-danger glyphicon glyphicon-exclamation-sign"> Error Messages: </span>';
  foreach ($errors as $error) {
    $display .= '<li class="text-danger">'.$error.'</li>';
  }

  $display .= '</ul></div></div> <label></label>';

  return $display;
}


function login($user_id){   //function to handle the user login
  $_SESSION['userID'] = $user_id; //$user_id is from login.php, set the $_SESSION['userID'] to this value and use it later in index.php
  global $dbConnect;

}





function is_logged_in(){
  if(isset($_SESSION['userID']) && $_SESSION['userID'] > 0){
    return true;
  } else {
    return false;
  }
}





?>
