<!DOCTYPE html>
<html>
<head>
  <meta name="author" content="Lauren Phan and Aditi Takle">
  <meta name="description" content="UVA Textbook Exchange">

  <link href="signin.css" rel="stylesheet">
</head>
<body>
  <?php include('session.php');
      session_start();
      unset($_SESSION["username"]);
      session_destroy();
   ?>
   <h3>Thanks for using UVA Textbook Exchange!</h3>

   <a href="index.php">Login Here</a>
</body>
</html>
