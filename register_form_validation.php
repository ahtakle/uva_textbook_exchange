<?php
  $responses = $_POST;

  if($responses[password1] != $responses[password2]) {
      echo "Passwords don't match.";
    }
?>
