<?php
  #use of control structures
  if(!empty($_POST["username"])) {
  // starts session upon login
  session_start();

  //store user's username

  #use of arrays, expressions, implicit object "SESSION"
  $_SESSION["username"] = $_POST["username"];
  $_SESSION["password"] = $_POST["password"];
  
  //echo $_SESSION["username"];
}
 ?>
