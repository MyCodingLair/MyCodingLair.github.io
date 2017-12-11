<?php
  $dbConnect = mysqli_connect("localhost", "root", "", "runner");


  if(mysqli_connect_errno()){
    echo'Error connecting to Database. ' .mysqli_connect_error();
    die();
  }


  session_start();


require_once 'helper.php';


if(isset($_SESSION['userID'])){
  $userID = $_SESSION['userID'];

  $sql = "SELECT * FROM user WHERE userID = '$userID' ";
  $result = mysqli_fetch_assoc($dbConnect->query($sql));


} else{
  $userID = '';
}


if(isset($_SESSION['error_msg'])){
  echo '<div class="bg-danger"> <p class="text-danger text-center"> '.$_SESSION['error_msg'].' </p> </div>';
  unset($_SESSION['error_msg']);
}



?>
