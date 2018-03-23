<!DOCTYPE html>
  <html>
    <head>
      <meta name="author" content="Lauren Phan and Aditi Takle">
      <meta name="description" content="UVA Textbook Exchange">
      <link rel="stylesheet" href="textbooks.css">
    </head>
    <body>
      <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="navbar-nav">
                <li class="navbar-left" id="active"><a href="list_textbooks.php">Buy</a></li>
                <li class="navbar-left"><a href="post_textbook.php">Sell</a></li>
                <li class="navbar-left"><a href="#contact">Contact</a></li>
                <li class="navbar-right"><a href="logout.php">Logout</a></li>
                <li class="navbar-right">
                  <a href="#">
                    <?php
                      session_start();
                      #use of variable expressions
                      if(isset($_POST["username"])) {
                        $_SESSION["username"] = $_POST["username"];
                    }
                      echo $_SESSION["username"];
                    ?>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <br/><br/><br/>
      <div class="heading"><h1>Buy a Textbook</h1></div>
        <img src="tb.jpg" alt="Avatar" style="width:23%; height:40%;">
        <div class="container">
          <h3><b>WORLD HISTORY - Ellis Esler</b></h3>
          <h4><b>$90</b></h4>
          <p>Condition: Good</p>
        </div>
      <script type="text/javascript" src="textbook_object.js"></script>
    </body>
  </html>
