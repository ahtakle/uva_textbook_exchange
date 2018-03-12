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
    <img src="book-and-pen.png" height="200px" width="200px">
  </header>
  <h1>Welcome to UVA Textbook Exchange!</h1>
  <h3>Begin by logging in.</h3>
  <form class="form-signin">
    <table>
      <tr>
        <td>
          <div class="input-boxes">
            <span class="input-icon"></span>
          <input type="text" id="user" placeholder="Username" name="username" required />
         </div>
         </td>
      </tr>
      <tr>
        <td>
          <div class="input-boxes">
            <span class="input-icon>"></span>
              <input type="password" placeholder="Password" name="pwd" required />
          </div>
        </td>
      </tr>
  </table>
    <button type="submit" value="Submit" title="Login"><span>Login</span></button>
  </form>

  <a href="register.html">Don't have an account? Register here.</a>
  <br/>

  <section id ="tagline" class="tagline">
    <p>Lauren Phan and Aditi Takle © 2018</p>
  </section>
</body>

</html>