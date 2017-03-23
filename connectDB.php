<?php

//create a variable to hold the connection values to connect to the database.
//$varName = mysqli_coonect("DBserverName", "DB_username", "DB_passowrd", "DB_name")
$connectDB = mysqli_connect("localhost", "root", "", "mycodinglairdb");

//check connection to DB
if(!$connectDB){
  die ("Connection to Database could not be established!". mysqli_connect_error());  //display error message if not connect to DB
}
/*
else {
  echo "Connected Succesfully to Database.";
}
*/



?>
