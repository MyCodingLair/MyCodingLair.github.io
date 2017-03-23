<?php
require 'C:\wamp64\www\new\deployToAzure\connectDB.php';
//include 'connectDB';

  $fname = $_POST["FName"];
  $lname = $_POST["LName"];
  $username = $_POST["Username"];
  $email = $_POST["Email"];
  $password = $_POST["Password"];

  //sql query to query the username from DB
  $queryCheckUserName = "SELECT UserName FROM user WHERE UserName = '{$username}' ";
  //store the result of the username query in this var
  $resultQueryCheckUserName = mysqli_query($connectDB, $queryCheckUserName);

  //return the query result as rows and check if its empty or not
  $numrow = mysqli_num_rows($resultQueryCheckUserName);
  if($numrow!=NULL)  //if the return result of the query is not empty, means the username already exist in the database
  {
    echo "Username is not available. Please select another username." . "<br>";
    echo "We will redirecting you back to registeration page. Please wait a moment...";
    header('Refresh: 3; URL=http://localhost/new/deployToAzure/register.php');

  }
  else if($numrow == NULL)  //if the return is empty, username is available for use and execute the following code:
  {

    $query = "INSERT INTO user(FName, LName, UserName, Email, Password) VALUES('$fname', '$lname',  '$username', '$email', '$password')";

    if(mysqli_query($connectDB, $query)) //if query to DB success, echo the following
    {
      echo "Succesfully registered." . "<br>" . "You will be redirected to the login page shortly...";
      header('Refresh: 3; URL=http://localhost/new/deployToAzure/login.php');
    }
    else if(!mysqli_query($connectDB, $query)) //if error in querying DB, echo error.
    {
      echo "Error". mysqli_error($connectDB) . "<br>". "We will redirecting you to registeration page";
      header('Refresh: 3; URL=http://localhost/new/deployToAzure/register.php');

    }

  }






?>
