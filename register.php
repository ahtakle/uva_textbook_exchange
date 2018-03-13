<!DOCTYPE html>
<html>
<head>
  <meta name="author" content="Lauren Phan and Aditi Takle">
  <meta name="description" content="UVA Textbook Exchange">
  <link href="register.css" rel="stylesheet">
</head>
<body class="text-center">
  <div class="header">Register for UVA Textbook Exchange<img src="register.png">
  </div>

  <!--Registration form-->
  <form action="register.php" method="post">
    <table>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname" required value="<?php if(!empty($_POST)){ echo($_POST['fname']); } ?>"/></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname" required value="<?php if(!empty($_POST)){ echo($_POST['lname']); } ?>"/></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input type="text" id="email" name="email" required value="<?php if(!empty($_POST)){ echo($_POST['email']); } ?>"/></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" id="password1" name="password1" required /></td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input type="password" id="password2" name="password2" required /></td>
      </tr>
    </table>

    <button value="Register" title="Register"><span>Register</span></button>
    <?php
      $responses = $_POST;
      if(!empty($responses)) {
        if($responses['password1'] != $responses['password2']) {
            echo "<p style='color:red'>Passwords don't match. Please enter information again.</p>";
          }
      }
    ?>
  </form>
  <footer>
    <a href="index.php">Already have an account? Sign in here.</a>
    <section id ="tagline">
      <p>Lauren Phan and Aditi Takle © 2018</p>
    </section>
  </footer>
      <!-- Include JQuery from the Google CDN for Bebas Font--> 
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <!-- Include the RenderedFont rendering engine (using the #free account key) -->
      <script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
</body>
</html>
