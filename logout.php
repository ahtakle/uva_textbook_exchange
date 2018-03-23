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
      session_destroy();
   ?>
   <h1>Thanks for using UVA Textbook Exchange!</h1>

   <img src="goodbye.png" height=300px width=400px>

   <a href="index.php">Login Again</a>
</body>
</html>
