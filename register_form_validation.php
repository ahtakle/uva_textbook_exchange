<?php
  //TODO: check that username/password are correct in database
  $responses = $_POST;

  if($responses[password1] != $responses[password2]) {
      echo "Passwords don't match.";
    }
    // TO DO:
?>
