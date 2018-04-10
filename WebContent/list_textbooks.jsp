<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
            </ul>
          </div>
        </nav>
      </header>
      <br/><br/><br/>
      <div class="heading"><h1>Buy a Textbook</h1></div>
        <img src="tb.jpg" alt="Avatar" style="width:23%; height:40%;">
        <div class="container">
        <jsp:useBean id="textbook"
					class="uva_textbook_exchange.textbookClass" scope="session" />
          <h3><b><jsp:getProperty name="textbook" property="name" /> - <jsp:getProperty name="textbook" property="author" />
					
</b></h3>
          <h4><b>$<jsp:getProperty name="textbook" property="price" /></b></h4>
          <p>Condition: <jsp:getProperty name="textbook" property="condition"/></p>
        </div>
    </body>
  </html>

