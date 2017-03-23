<?php
//require 'C:\wamp64\www\new\deployToAzure\connectDB.php';
include "connectDB.php";
?>


<?php

$username = $_POST["UserName"];
$password = $_POST["Password"];


if($username && $password)  //codition if both variable not null run the following
{
  $query = "SELECT * FROM user WHERE UserName = '{$username}'";

    //query the DB
    if(!mysqli_query($connectDB, $query))
    {
      echo "<br>" . "Error!!: ".$query. "<br>". mysqli_error($connectDB);
    }

    //store the query to DB into a variable
    $result = mysqli_query($connectDB, $query);

    //count the number of row the return query result and store it into the variable
    $numrow = mysqli_num_rows($result);

    //check if the result is not null
    if($numrow != 0)
    {
      //store the fetched result into an array variable
      while($row = mysqli_fetch_assoc($result))
      {
      	$dbUserName = $row['UserName'];  //store the fetched result from the row array into a local variable for later validation
      	$dbPassword = $row['Password'];
      }
    }
    else if($numrow==0)
    {
      $dbUserName = NULL;
    	$dbPassword = NULL;
    }

    //check if fetch result from DB and user entered value match.
    if($username == $dbUserName && $password == $dbPassword)
    {
      session_start();
      $_SESSION['sessionUserName'] = $dbUserName;
      header("Location: index2.php");
      exit;
    }
      
    else if($username == $dbUserName && $password != $dbPassword)
    {
      $_SESSION['sessionUserName'] = NULL;
      echo "<script>
      function loginWarningFunc(){
        alert('Wrong password.');
      } loginWarningFunc();
      </script>";
      header('Refresh:0.5 URL=http://localhost/new/deployToAzure/login.php');
    }

    else if($username != $dbUserName && $password != $dbPassword)
    {

      $_SESSION['sessionUserName'] = NULL;
      echo "<script>
      function loginWarningFunc(){
        alert('User does not exist.');
      } loginWarningFunc();
      </script>";
      header('Refresh:0.5 URL=http://localhost/new/deployToAzure/login.php');
    }


}  //end if

?>
