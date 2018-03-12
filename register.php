<!DOCTYPE html>
<html>
<head>
  <meta name="author" content="Lauren Phan and Aditi Takle">
  <meta name="description" content="UVA Textbook Exchange">
  <link href="register.css" rel="stylesheet">
</head>
<body class="text-center">
  <script>
  function validate() {
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;
    if(password1 == password2) {
      //valid password
    } else {
      //invalid password
    }
  }
  </script>
  <div class="header">Register for UVA Textbook Exchange<img src="register.png">
</div>

  <!--Registration form-->
  <form>
    <table>
      <tr>
        <td>First Name:</td>
        <td><input type="text" required /></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" required /></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input type="text" id="email" required /></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" id="password1" required /></td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input type="password" id="password2" required /></td>
      </tr>
    </table>
    <button value="Register" title="Register" onclick="validate()"><span>Register</span></button>
  </form>
  <footer>
    <a href="index.html">Already have an account? Sign in here.</a>
    <section id ="tagline">
      <p>Lauren Phan and Aditi Takle © 2018</p>
    </section>
  </footer>


</body>
</html>