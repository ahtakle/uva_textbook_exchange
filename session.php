<?php
  //TODO: check that username/password are correct in database
  if(!empty($_POST["username"])) {
  // starts session upon login
  session_start();

  //store user's username
  $_SESSION["username"] = $_POST["username"];

  //echo $_SESSION["username"];
} 
 ?>
