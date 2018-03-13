<!DOCTYPE html>
<html>
<!--index.html: consists of login page for textbook exchange application-->
<head>
  <meta name="author" content="Lauren Phan and Aditi Takle">
  <meta name="description" content="UVA Textbook Exchange">

  <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
  <header>
    <img src="book-and-pen.png" height="150px" width="150px">
  </header>
  <h1>Welcome to UVA Textbook Exchange!</h1>
  <h3>Begin by logging in.</h3>
  <!--temporarily, button is set to open post_textbook after login.
  should eventually change to list of textbooks-->
  <form class="form-signin" method="post" action="post_textbook.php">
    <table>
      <tr>
        <td>
          <div class="input-boxes">
            <span class="input-icon"></span>
          <input type="text" id="user" name="username" placeholder="Username" required />
         </div>
         </td>
      </tr>
      <tr>
        <td>
          <div class="input-boxes">
            <span class="input-icon>"></span>
              <input type="password" name="password" placeholder="Password" required />
          </div>
        </td>
      </tr>
    </table>
    <?php include 'session.php';?>
    <button type="submit" value="Submit" title="Login"><span>Login</span></button>

  </form>

  <br/>


  <footer>
    <a href="register.php">Don't have an account? Register here.</a>
    <p>Lauren Phan and Aditi Takle © 2018</p>
  </footer>

</body>

</html>
