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
    <button type="submit" value="Submit" title="Login"><span>Login</span></button>

  </form>

  <br/>
  <footer>
    <a href="register.php">Don't have an account? Register here.</a>
    <div id="about">
    <button type="button" onclick="loadDoc()">About Us</button>
  </div>
    <p>Lauren Phan and Aditi Takle © 2018</p>
  </footer>

  <script>
  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("about").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "about_us.txt", true);
    xhttp.send();
  }
  </script>

</body>

</html>
